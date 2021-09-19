@extends('layouts.app')

@section('content')

<body>





  @if(auth()->user()->is_admin)

    <div class="py-5 container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link active" aria-current="page"
                            href="./admin_manage_users">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z" />
                            </svg>
                            Manage Users
                        </a>
                    </li>
                    <li class="nav-item">

                        <a style="color: #571f70" class="nav-link" href="./admin_manage_products">Manage
                            Products</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link" href="./admin_manage_ratings">Manage Ratings</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #571f70" class="nav-link " href="./admin_manage_payments">Manual
                            Payments</a>
                    </li>
                </ul>
                <div class="col">
                    <br></br>
                    <br></br>
                    <a href="../logout">
                    <button style="border-color: #571f70; background-color: #571f70; color: white" type="submit"
                        class="btn btn-primary btn-lg">Logout </button></a>
                </div>

                <div class="col">
                  <br><br>
                  <label>Sort by: </label>
                  <form action="sortUsers" method="post">
                    {{ csrf_field()}}
                    <br>
                  <select id="sortby" name="sortby">
                    <option value="name">Name</option>
                    <option value="username">Username</option>
                    <option value="email">Email</option>
                    <option value="is_admin">Role</option>
                  </select>
                  <br>
                  <br>
                  <select id="order" name="order">
                    <option value="ascending">Ascending</option>
                    <option value="descending">Descending</option>
                  </select>
                  <br>
                  <br>
                  <button class="btn btn-primary btn-lg" style="font-size:13px; border-color: #571f70; background-color: #571f70; color: white" type="submit" name="submit" value="submit">Update</button>
                </form>

                </div>


            </div>
            <div class="col-lg-10">
                <h3>Manage Users</h3>
                <br>
                <div class="container-fluid">
                    <form class="d-flex">




                        <button style="border-color: white; background-color: #571f70; color: white" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddAdministrator">
                            Add new Administrator
                        </button>

                        <button style="border-color: white; background-color: #571f70; color: white" type="button"
                            class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddUser">
                            Add new User
                        </button>
                        <a href="admin_manage_users">
                          <button class="btn btn-primary btn-lg" style="font-size:15px; float:right; border-color: white; background-color: #571f70; color: white"
                           type="button" name="button">Clear Search
                          </button>
                        </a>

                    </form>

                    <br>
                    <form action="{{route('searchUser')}}" method="post">
                      {{ csrf_field() }}
                    <input type="text" name="search" placeholder="Search user..." autocomplete="off"/>
                    </form>





                </div>
                <div class="card" style="border-color: #571f70; background-color: #d9aded; color: 571f70">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <img src="./images/transparent.png" width="50" height="50" alt="Icon"></a>
                            </div>
                            <div class="col">
                                <label for="name" class="form-label">Name </label>
                            </div>
                            <div class="col">
                                <label for="role" class="form-label">Role </label>
                            </div>
                            <div class="col">
                                <label for="username" class="form-label">Username </label>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email </label>
                            </div>
                            <div class="col-auto">
                                <img src="./images/transparent.png" width="25" height="25" alt="Icon"></a>
                            </div>
                        </div>


                        <?php foreach ($users as $user): ?>



                        <div style="height:140px;"class="card" style="border-color: #d9aded">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <img src="./images/default_icon.png" width="50" height="50"
                                            alt="Profile Picture"></a>
                                    </div>
                                    <div class="col">
                                        <p>{{$user['name']}}</p>
                                    </div>
                                    <?php if ($user['is_admin']): ?>
                                      <div class="col">
                                          <p>Admin</p>
                                      </div>
                                    <?php endif; ?>
                                    <?php if (!$user['is_admin']): ?>
                                      <div class="col">
                                          <p>User</p>
                                      </div>
                                    <?php endif; ?>


                                    <div class="col">
                                        <p>{{$user['username']}}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{$user['email']}}</p>
                                    </div>
                                    <div class="col-auto">
                                        <button style="border-color: #571f70 ; background-color: #d9aded; color: white "type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#Delete-{{$user['id']}}" id="{{$user['id']}}">
                                            <img src="./images/delete.png" width="25" height="25" alt="Delete">
                                        </button>
                                    </div>


                                    <div class="modal fade" id="Delete-{{$user['id']}}" tabindex="-1" aria-labelledby="DeleteProduct" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="DeleteProduct">Delete</h5>

                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete? This action cannot be undone.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                                    <a href="{{ route('users.delete', $user['id'] )}}">
                                                    <button style="border-color: #571f70; background-color: #571f70; color: white"
                                                        type="submit" class="btn btn-primary">DELETE</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>



                        <?php endforeach; ?>



                    </div>
                </div>






                <div class="modal fade" id="AddAdministrator" tabindex="-1" aria-labelledby="AddNewAdmin"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewAdmin">Add New Administrator</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="admin_manage_users/addAdministrator">
                                {{ csrf_field()}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="name" class="form-control" id="name" name="name"
                                            placeholder="John Doe" aria-describedby="nameHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username </label>
                                        <input type="text" class="form-control" id="username" placeholder="example" name="username"
                                            aria-describedby="usernameHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder=".........">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>





                <div class="modal fade" id="AddUser" tabindex="-1" aria-labelledby="AddNewUser" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddNewUser">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="admin_manage_users/addUser">
                                  {{ csrf_field()}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name </label>
                                        <input type="name" class="form-control" id="name" name="name"
                                            placeholder="John Doe" aria-describedby="nameHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="example@gmail.com" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username </label>
                                        <input type="text" class="form-control" id="username" placeholder="example" name="username"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder=".........">
                                    </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button style="border-color: #571f70; background-color: #571f70; color: white"
                                    type="submit" class="btn btn-primary">ADD</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    @else
    <meta http-equiv="refresh" content="0; URL='homepage'"/>
    @endif

    @endsection
