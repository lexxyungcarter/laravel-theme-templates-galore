<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('accesstoken');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $path = resource_path('views/templates');
        $results = scandir($path);
        $templates = collect();

        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;

            if (is_dir($path . '/' . $result)) {
                //code to use if directory
                $templates->push($result);
            }
        }

        // set SEO
        SEO::setTitle('Full Laravel Blade Templates ported from static HTML5 templates | AceLords Themes Galore');
        SEO::setDescription('Speed up your development by grabbing one of our blade-ready templates ported just for you!');
        SEO::opengraph()->setUrl(request()->root());
        SEO::setCanonical(request()->root());
        SEO::opengraph()->addProperty('type', 'page');
        SEO::opengraph()->addProperty('image', request()->root() . '/img/screenshot.jpg');
        // SEO::twitter()->setSite('@acelords');

        return view('welcome')
        ->with([
            'title' => 'Laravel Themes Galore',
            'page' => 'Home',
            'templates' => $templates,
        ]);
    }

    /**
     * view pages dynamiclly in the system
     * 
     * @param string $page
     * @return view
     */
    public function show($theme, $page)
    {
        $view = 'templates.' . $theme . '.' . $page;

        // set SEO
        SEO::setTitle('Full Laravel Blade Template for the ' . ucwords($theme) . ' HTML5 Theme | AceLords Themes Galore');
        SEO::setDescription('Speed up your development by grabbing this ' . ucwords($theme) . ' Blade Template converted just for you!');
        SEO::opengraph()->setUrl(request()->url());
        SEO::setCanonical(request()->url());
        SEO::opengraph()->addProperty('type', 'page');
        SEO::opengraph()->addProperty('image', request()->root() . '/templates/' . $theme . '/screenshot.jpg');
        // SEO::twitter()->setSite('@acelords');

        
        return view($view)
        ->with([
            'theme' => $theme,
            'title' => ucwords($page),
            'page' => $page,
            'page_desc' => $page . ' Page',
        ]);
    }
}
