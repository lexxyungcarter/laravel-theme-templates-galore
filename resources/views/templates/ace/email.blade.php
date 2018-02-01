@extends('templates.' . $theme . '.layouts.main')

@section('styles')

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="alert alert-block alert-info">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            The following sample email templates are converted using the provided email tool which
            converts normal Bootstrap HTML to email friendly table layout with inline CSS!
        </div>

        <div class="space-12"></div>

        <div class="row">
            <div class="col-xs-3">
                <a href="{{ route('pages.show', ['ace', 'email-confirmation']) }}" class="thumbnail" target="_blank">
                    <img class="img-responsive" src="/templates/ace/assets/images/email/email1.png" alt="Email Template" />
                </a>
            </div>

            <div class="col-xs-3">
                <a href="{{ route('pages.show', ['ace', 'email-navbar']) }}" class="thumbnail" target="_blank">
                    <img class="img-responsive" src="/templates/ace/assets/images/email/email2.png" alt="Email Template" />
                </a>
            </div>

            <div class="col-xs-3">
                <a href="{{ route('pages.show', ['ace', 'email-newsletter']) }}" class="thumbnail" target="_blank">
                    <img class="img-responsive" src="/templates/ace/assets/images/email/email3.png" alt="Email Template" />
                </a>
            </div>

            <div class="col-xs-3">
                <a href="{{ route('pages.show', ['ace', 'email-contrast']) }}" class="thumbnail" target="_blank">
                    <img class="img-responsive" src="/templates/ace/assets/images/email/email4.png" alt="Email Template" />
                </a>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection