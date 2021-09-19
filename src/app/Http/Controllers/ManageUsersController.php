<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Preferences;

use DB;

class ManageUsersController extends Controller
{

  public function home() {
      return redirect('admin_manage_users');
  }


  public function index() {

    return view('pages/admin_manage_users');

  }



  public function searchUser(Request $req){
    $users = array();
    $all = User::all();

    $search = $req->input('search');
    $search = strtolower($search);

    foreach ($all as $item) {
      if (str_contains($item['username'], $search) or str_contains(strtolower($item['name']), $search) or str_contains($item['email'], $search)){
        $users[$item['id']] = ["id" => $item['id'],"username" => $item['username'], "email" => $item['email'], "name" => $item['name'], "is_admin" => $item['is_admin']];
      }
    }


    return view('pages/admin_manage_users', ["users"=>$users]);

  }





  public function getUsers(){
    $users = array();
    $all = User::all();

    foreach ($all as $item) {
      $users[$item['id']] = ["id" => $item['id'],"username" => $item['username'], "email" => $item['email'], "name" => $item['name'], "is_admin" => $item['is_admin']];
    }


    return view('pages/admin_manage_users', ["users"=>$users]);


  }

  public function sortUsers(Request $request){

    $users = array();
    $all = User::all();

    foreach ($all as $item) {
      $users[$item['id']] = ["id" => $item['id'],"username" => $item['username'], "email" => $item['email'], "name" => $item['name'], "is_admin" => $item['is_admin']];
    }

    if($request->sortby == "name"){
      usort($users, function($a, $b) {
          return $a['name'] <=> $b['name'];
      });
    }
    elseif ($request->sortby == "username") {
      usort($users, function($a, $b) {
          return $a['username'] <=> $b['username'];
      });
    }
    elseif ($request->sortby == "email") {
      usort($users, function($a, $b) {
          return $a['email'] <=> $b['email'];
      });
    }
    elseif ($request->sortby == "is_admin") {
      usort($users, function($a, $b) {
          return $a['is_admin'] <=> $b['is_admin'];
      });
    }

    if($request->order == "descending"){
      $users = array_reverse($users);
    }


    return view('pages/admin_manage_users', ["users"=>$users]);

  }


  public function deleteUser($id){

      Client::where('user_id', $id)->delete();
      User::find($id)->delete();

      return redirect()->back();
  }

  public function addAdministrator(Request $request){

    $lastCategory = User::select('id')->orderBy('id','desc')->first();

    if(
    $request->input('name')==null or
    $request->input('email')==null or
    $request->input('username')==null or
    $request->input('password')==null){
      return redirect()->back()->with('alert', 'Please fill every space');
    }
    else{
      $name = $request->input('name');
      $email = $request->input('email');
      $username = $request->input('username');
      $password = bcrypt($request->input('password'));


      $array = [
    'id' => $lastCategory['id']+1,
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'name' => $name,
    'is_admin' => TRUE
];

  //dd(gettype($array['is_admin']));
  //dd($array);
  //DB::table('user')->insertGetId($array);
  DB::table('user')->insert($array);



    }

    return redirect('admin_manage_users');


  }

  public function addUser(Request $request){

    $lastCategory = User::select('id')->orderBy('id','desc')->first();


    if(
    $request->input('name')==null or
    $request->input('email')==null or
    $request->input('username')==null or
    $request->input('password')==null){
      return redirect()->back()->with('alert', 'Please fill every space');
    }
    else{
      $name = $request->input('name');
      $email = $request->input('email');
      $username = $request->input('username');
      $password = bcrypt($request->input('password'));


      $array = [
    'id' => $lastCategory['id']+1,
    'username' => $username,
    'email' => $email,
    'password' => $password,
    'name' => $name,
    'is_admin' => FALSE
];

  //dd(gettype($array['is_admin']));
  //dd($array);
  //DB::table('user')->insertGetId($array);
  DB::table('user')->insert($array);



    }

    return redirect('admin_manage_users');


}

}
