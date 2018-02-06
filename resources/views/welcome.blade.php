<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{--  seo  --}}
        @include('layouts.partials.seo-header')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="/css/colors.css" rel="stylesheet" type="text/css">
        <style>
            .container {
                padding-top: 5%;
            }
            .template {
                text-align: center;
                min-height: 200px;
                align-items: center;
                display: flex;
                justify-content: center;
            }
            a:hover {
                background-color: inherit;
            }
            .template .title {
                font-size: 3em;
            }
            .flex-center {
            }
            body {
                background-image: url('/img/acelords-background.jpg');
                background-position: top center;
                background-size: cover;
            }
            .intro {
                padding: 1em;
                border: 2px solid rgba(255,255,255,0.3);
                background-color: rgba(0,0,0,0.3);
                color: #fff;
                width: fit-content;
                margin: 0 auto;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>
        <a href="https://github.com/lexxyungcarter">
            <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png">
        </a>

        <div class="container">
            <div class="intro">
                <h2 class="title text-center">Laravel Themes/Templates Galore</h2>
                <p class="text-center">Get your custom theme/template cleaned up and Blade-ready for your next big project
                    - or simply spice up an existing one!
                    <br/>
                    The templates displayed here are blade-syntax ready. <a href="https://github.com/lexxyungcarter/laravel-theme-templates-galore" style="color: cyan;">View the Readme here</a> for more information.
                </p>
            </div>

            <div class="row clearfix">
                @php 
                    $colors = ['primary', 'success', 'info', 'green', 'orange', 'purple', 'danger', 'warning', 'brown', 'blue', 'violet', 'pink'];
                @endphp
                @foreach($templates as $template)
                    @php 
                        $rand = rand(0, count($colors)-1);
                    @endphp 
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <a href="{{ route('pages.show', [$template, 'index']) }}">
                            <div class="template bg-{{ $colors[$rand] }}">
                                <h3 class="title">{{ ucwords($template) }}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        
        {{--  seo  --}}
        @include('layouts.partials.tracking')
        
    </body>
</html>
