<div class="block-header">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <h2>@yield('page-title')
            <small>@yield('page-description')</small>
            </h2>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <ul class="breadcrumb float-md-right">
                <li class="breadcrumb-item"><a href="{{ route('pages.show', ['dashy', 'index']) }}"><i class="zmdi zmdi-home"></i> Home</a></li>
                {{--  yield page specific breadcrumbs  --}}
                @yield('page-breadcrumbs')
            </ul>
        </div>
    </div>
</div>