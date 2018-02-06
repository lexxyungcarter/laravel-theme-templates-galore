@extends('templates.' . $theme . '.layouts.main')

@section('pre-styles')
    
@endsection

@section('styles')
    
@endsection

@section('pre-scripts')
    
@endsection

@section('scripts')
    
@endsection

@section('body-class')
    index2
@endsection

@section('page-class')
    home
@endsection

@section('page-title')
    Blank Page
@endsection

@section('page-description')
    A blank page to start your development
@endsection

@section('page-breadcrumbs')
    <li class="breadcrumb-item"><a href="javascript:void(0);">Sample Pages</a></li>
    <li class="breadcrumb-item active">Blank Page</li>
@endsection

@section('sidebar')
    {{--  left sidebar  --}}
    @include('templates.dashy.layouts.partials.left-sidebar')
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <h4>Stater page</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
