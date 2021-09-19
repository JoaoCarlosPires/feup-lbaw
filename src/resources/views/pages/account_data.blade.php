@extends('layouts.app')


@section('content')


<div class="py-5 container">
  <div class="row">
    <div class="col-lg-2">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link active" aria-current="page" href="/myprofile">Personal
            Information</a>
        </li>

        <li class="nav-item">
          <a style="color: #571f70" class="nav-link" href="../myprofile/account_data"><svg xmlns="http://www.w3.org/2000/svg"
              width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
            </svg>Account Data</a>
        </li>
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link" href="../myprofile/preferences">Preferences</a>
        </li>
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link " href="../myprofile/myprofile_payment_method">Payment Method</a>
        </li>
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link" href="../myprofile/myprofile_inventory">Inventory</a>
        </li>
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link" href="../myprofile/myorders">My Orders</a>
        </li>
        <li class="nav-item">
          <a style="color: #571f70" class="nav-link" href="../myprofile/myprofile_new_return">New Return</a>
        </li>
      </ul>
      <div class="col">
        <br></br>
        <br></br>
        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
          class="btn btn-primary btn-lg">Logout </button>
          <br><br>

                  <button style="font-size:15px; border-color: #571f70; background-color: #990000; color: white" type="submit"
                      class="btn btn-primary btn-lg" data-bs-toggle="modal"
                          data-bs-target="#Delete">Delete Account</button>
      </div>
    </div>
    <div class="col-lg-5">
      <h3>Account Data</h3>
      <div class="container-fluid">
        <form method="post" action="submitAccountData">
          {{ csrf_field()}}
    <label for="name">E-mail</label><br>
    <input type="text" id="email" name="email" value="{{session()->get('userinfo')['email'] ?? ''}}"><br>
    <label for="name">Username</label><br>
    <input type="text" id="username" name="username" value="{{session()->get('userinfo')['username'] ?? ''}}"><br>
    <label for="name">Password</label><br>
    <input type="password" id="password" name="password"  onfocus="this.value=''" value="**********"><br>
<br>
    <div class="d-grip gap-2 d-md-flex justify-content-md-end">

        <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit" class="btn btn-primary">SUBMIT</button>
    </div>

  </form>
  <br>
  @if (session('success'))
  <div class="alert alert-success">
  {{ session('success') }}
  </div>
  @endif
  @if (session('alert'))
  <div class="alert alert-danger">
  {{ session('alert') }}
  </div>
  @endif

      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="Delete" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteProduct">Delete</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h3>We will miss you, {{Auth()->user()->name}}</h3>
                Are you sure you want to delete your account? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                <a href="{{ route('users.delete', auth()->user()->id )}}">
                <button style="border-color: #571f70; background-color: #571f70; color: white"
                    type="submit" class="btn btn-primary" href="google.pt">DELETE</button></a>
            </div>
        </div>
    </div>
</div>

@endsection
