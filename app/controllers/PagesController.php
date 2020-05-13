<?php

namespace App\Controllers;
use App\Core\App;
class PagesController
{
    public function home()
    {
        $tasks    = App::get('database')->selectAll('todos');

        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function about()
    {
        $company = 'Labinterest';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}
