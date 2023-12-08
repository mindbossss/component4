@extends('frontend.pages.main')
@section('main')
<center><h1>Welcome to Lab Test Hub</h1></center>

<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-1">
                    <div class="form-conatainer-register">
                        <div class="form-btn-register">
                            <span>New User Registration</span>
                        </div>

                        <form action="{{route('register-user')}}" id="RegisterForm" method="post">
                            @if (Session::has('success'))
                            <div class="alert alert-sucess">{{Session::get('success')}}</div>
                            @endif
                            @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" placeholder="Username" name="username" size="40" value="">
                              <span class="text-danger">@error('username') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter Full Name" name="name" value="">
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                              </div>

                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="Enter your Email" name="email" value="">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                              </div>
                              <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="text" class="form-control" placeholder="Enter your Phone No" name="phone" value="">
                                <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                              </div>
                              <div class="form-group">
                                <button class="btn btn-block btn-primry" type="submit">Register</button>
                              </div>
                              <a href="{{ url('signin') }}">Already had account !! Click Here</a>
                        </form>
                        {{-- <form action="{{route('register-user')}}" id="RegisterForm" method="post">
                            @csrf
                            <h4>Sing Up</h4>
                            <input type="text" placeholder="Choose your username" name="username">
                            <span>@error('username') {{username}} @enderror </span>
                            <input type="text" placeholder="Enter your Full Name" name="name">
                            <input type="email" placeholder="Email" name="email">
                            <input type="password" placeholder="Password" id="pass" name="password">
                            <input type="password" placeholder="Confirm Password" id="confpass" name="password">

                            <button type="submit" class="btn">Register</button>
                            <a href="{{ url('signin') }}"><p>Already had account</p>Click Here</a>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


