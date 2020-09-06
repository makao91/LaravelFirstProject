<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Milusie łakomczusie';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $someInfo = 'Twoja stara to kopara';
        return view('pages.about') -> with('someInfo', $someInfo);
    }

    public function service() {
        $arrayData = array(
            'title' => 'A twój stary ją odpala',
            'services' => ['Web Design', 'Hair Design', 'Baby Design']
        );
        return view('pages.service') -> with($arrayData);
    }
}
