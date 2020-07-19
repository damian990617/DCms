@extends('admin::layouts.auth')
@section('admin::main')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form action="{{ route('admin.login') }}" method="POST" class="form-signin">
                        @csrf
                        <div class="form-label-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email address"
                                   required autofocus>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Password"
                                   required>
                            <label for="password">Password</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="remember_me" name="remember_me">
                            <label class="custom-control-label" for="remember_me" name="remember_me">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
