<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view($view)
        ->with([
            'theme' => $theme,
            'title' => ucwords($page),
            'page' => $page,
            'page_desc' => $page . ' Page',
        ]);
    }
}
