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
        //=============================================================================
        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });
    </script>
@endsection

@section('content')
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="/templates/dashy/assets/img/logo.svg" alt="">
                    </div>
                    <h5>Log in</h5>
                </div>
                <div class="content">                                                
                    <div class="input-group input-lg">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-account-circle"></i>
                        </span>
                    </div>
                    <div class="input-group input-lg">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="footer text-center">
                    <a href="{{ route('pages.show', ['dashy', 'index']) }}" class="btn btn-primary btn-round btn-lg btn-block ">SIGN IN</a>
                    <h5><a href="{{ route('pages.show', ['dashy', 'forgot-password']) }}" class="link">Forgot Password?</a></h5>
                </div>
            </form>
        </div>
    </div>
@endsection
