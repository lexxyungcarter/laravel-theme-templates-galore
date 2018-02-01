@extends('templates.' . $theme . '.layouts.main')

@section('styles')
    
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-info hidden-sm hidden-xs">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                Please note that
                <span class="blue bolder">mobile menu</span>
                is visible only when window size is less than
                <span class="blue bolder">992px</span>
                ,which you can change using CSS builder tool.
            </div>

            <div class="alert alert-info hidden-md hidden-lg">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>
                When device is smaller than
                <span class="blue bolder">992px</span>
                wide, side menu is automatically minimized.
            </div>

            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection