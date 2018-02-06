@extends('templates.' . $theme . '.layouts.auth')

@section('pre-styles')
    
@endsection

@section('styles')
    
@endsection

@section('pre-scripts')
    
@endsection

@section('scripts')
    <script>
        $(".navbar-toggler").on('click',function() {
            $("html").toggleClass("nav-open");
        });
    </script>
@endsection

@section('content')
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="/templates/dashy/assets/img/logo.svg" alt="Logo">
                    </div>
                    <h5>Sign Up</h5>
                    <span>Register a new membership</span>
                </div>
                <div class="content">                                                
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-account-circle"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>                        
                </div>
                <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">
                                I read and agree to the <a href="javascript:void(0);">terms of usage</a>
                        </label>
                    </div>
                <div class="footer text-center">
                    <a href="index.html" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</a>
                    <h5><a class="link" href="{{ route('pages.show', ['dashy', 'sign-in']) }}">You already have a membership?</a></h5>
                </div>
            </form>
        </div>
    </div>
@endsection
