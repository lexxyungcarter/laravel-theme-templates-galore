# Laravel Theme Templates Galore

Tired of starting laying out you blade templates from scrach just to get working with that template you love?
Or are you too busy to decide on an admin dashboard/theme and just want to get started with a pre-made complete blade template?
If you're like me, or like most of us, we've got you covered!

## Template Directory Structure

```php
.
├── app
├── bootstrap
├── config
├── public
|   ├── css
|   ├── js
|   ├── font
|   └── templates # The templates assets directory
|       ├── ace # Theme 1 assets parent directory
|           └── assets # Theme 1 assets folder
|               ├── css # Theme 1 css folder
|               ├── js # Theme 1 js folder
|               ├── font # Theme 1 fonts folder
|               ├── sass # Theme 1 sass folder
|               └── images # Theme 1 images/img folder
|       ├── foo # Theme foo assets parent directory
|       └── bar # Theme n assets parent directory
├── resources
|   ├── assets
|   ├── lang
|   └── views
|       ├── welcome.blade.php
|       └── templates # The templates directory
|           ├── ace # Theme 1 parent folder
|               ├── layouts # Theme 1 layouts folder
|                   ├── main.blade.php # Theme 1 main layout file
|                   ├── auth.blade.php # Theme 1 auth layout file for authentication views
|                   └── partials # Theme 1 folder
|                       ├── header.blade.php # Contains the nav + header elements
|                       ├── sidebar.blade.php # Contains the sidebar elements
|                       ├── breadcrumb.blade.php # Contains the breadcrumb elements
|                       ├── footer.blade.php # Contains the footer elements
|                       └──  switcher.blade.php # Contains the theme preference switcher elements.
|               ├── index.blade.php # Theme 1 index view
|               ├── blank.blade.php # Theme 1 blank view
|               ├── widgets.blade.php # Theme 1 widget view
|               └── foobar.blade.php # Theme 1 foobar view
|           ├── foo # Theme 2 parent folder
|           └── bar # Theme n parent folder
├── storage
├── vendor
└── .env.example

```

All template's main layout files follow this convention:
```php
// main.blade.php

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>{{ isset($title) ? $title : '' }} | {{ $site_name }}</title>
        
        <meta name="description" content="Laravel Theme Templates Galore" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        // basic stylesheets required by all pages go here

        <!-- page specific plugin styles section is yielded here -->
        @yield('pre-styles')
        
        <!-- text fonts go here -->
        // font awesome, Google fonts, dashicons, icomoon, material design icons, you name it!

        <!--[if lte IE 8]>
		<script src="/js/html5shiv.min.js"></script>
		<script src="/js/respond.min.js"></script>
		<![endif]-->

        <!-- custom stylesheet goes here -->
        {{ Html::style('/templates/my-chosen-template/assets/css/custom.css') }}

        // yield additional styles
        @yield('styles')
    </head>

    <body>
        // include header file here; depends on the architecture of each individual template

        // content area
        @yield('content')

        // include footer file here; depends on the architecture of each individual template

        <!-- basic scripts go here-->
        {{ Html::script('templates/my-chosen-template/assets/js/jquery.js') }}

        <!-- page specific plugin scripts -->
		// yield pre-scripts
        @yield('pre-scripts')

        // load main initialization script file here
        
        <!-- Now yield inline scripts related to this page -->
        // yield additional scripts
        @yield('scripts')

    </body>

```

## Getting Started
You may go through the themes presented here at [Laravel Theme Templates Galore](https://themesgalore.acelords.space). Once satisfied with your selection, you can download the zip file from the links provided in the website and wallah! Peace of mind! You get to concentrate on what really matters!

## Dependencies
On top of the default Laravel fresh install setup, this package requires an additional package; [Laravel Collective - HTML](https://github.com/LaravelCollective/html) which you can simply add by running the composer command below. 
```php
composer require laravelcollective/html
```
That is all.

## Contributing

Thank you for considering contributing to templates! You can send a zip file to [Lexx YungCarter](mailto:lexxyungcarter@gmail.com) to add to the existing blade-ready templates.

## Security Vulnerabilities

If you discover a security vulnerability within any of the theme files, please send an e-mail to [Lexx YungCarter](mailto:lexxyungcarter@gmail.com). All security vulnerabilities will be promptly addressed.

## License

Just like Laravel, this project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
