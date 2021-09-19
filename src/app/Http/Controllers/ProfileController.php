<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Preferences;

use DB;

class ProfileController extends Controller
{

  public function home() {
      return redirect('myprofile');
  }


  public function index() {

    return view('pages/myprofile');

  }

  public function userView(){

      $user = User::find(auth()->user()->id);
      $client = Client::where('user_id', auth()->user()->id)->first();
      //$table = Client::get();


      if($client !=null){
        $userArr = [
          "id" => auth()->user()->id,
          "name" => $user->name,
          "username" => $user->username,
          "email" => $user->email,
          "picture" => $user->picture,
          "is_admin" => $user->is_admin,
          "country" => $client->clientcountry,
          "address" => $client->address
        ];
      }
      else{
        $userArr = [
          "id" => auth()->user()->id,
          "name" => $user->name,
          "username" => $user->username,
          "email" => $user->email,
          "picture" => $user->picture,
          "is_admin" => $user->is_admin,
          "country" => "",
          "address" => ""
        ];
      }
      session()->put('userinfo', $userArr);
      return view('pages/myprofile', ["userinfo"=>$userArr]);

      //dd($table);
  }


  public function submitUserInfo(Request $request){

            $user_id = auth()->user()->id;
            $name = $request->input('name');
            $address = $request->input('address');
            $country = $request->input('country');


            //dd($name, $address, $country);
            if($name == null){
              $name = "";
            }


            DB::table('user')->where('id', auth()->user()->id)->update(["name" => $name]);


            if (Client::where('user_id', $user_id)->exists()) {


              DB::table('client')->where('user_id', auth()->user()->id)->update(['address' => $address]);
              DB::table('client')->where('user_id', auth()->user()->id)->update(['clientcountry' => $country]);


            }

            else{
              $array = [['user_id' => $user_id, 'clientcountry' => $country, 'address' => $address]];

              DB::table('client')->insertOrIgnore($array);

            }


          return redirect('myprofile')->with('success', 'Changes were successful');

  }


  public function submitAccountData(Request $request){

    $user_id = auth()->user()->id;
    $email = $request->input('email');
    $username = $request->input('username');

    if($request->input('password')==null){
      return redirect()->back()->with('alert', 'Password must not be empty');
    }
    if(strlen($request->input('password'))<6){
      return redirect()->back()->with('alert', 'Password must contain 6 characters');
    }

    $password = bcrypt($request->input('password'));

    if($email == null){
      return redirect()->back()->with('alert', 'Email must not be empty');
    }
    if($username == null){
      return redirect()->back()->with('alert', 'Username must not be empty');
    }


    DB::table('user')->where('id', auth()->user()->id)->update(["email" => $email]);
    DB::table('user')->where('id', auth()->user()->id)->update(["username" => $username]);
    DB::table('user')->where('id', auth()->user()->id)->update(["password" => $password]);


    return redirect('myprofile/account_data')->with('success', 'Changes were successful');


  }






}
