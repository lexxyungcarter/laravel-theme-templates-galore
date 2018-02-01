<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
        </style>
    </head>
    <body>
        <div class="container">
            <h2 class="title text-center">Laravel Themes/Templates Galore</h2>
            <p class="text-center">Get your custom theme/template cleaned up and Blade-ready for your next big project
                - or simply spice up an existing one!
            </p>
            <div class="row clearfix">
                @foreach($templates as $template)
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <a href="{{ route('pages.show', [$template, 'index']) }}">
                            <div class="template bg-primary">
                                <h3 class="title">Ace</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
