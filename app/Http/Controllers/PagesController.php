<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function getBlog()
    {
        return view('blog');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getPost()
    {
        return view('post');
    }

    public function getAbout(){

        $first = 'Stan';
		$last = 'Onye';

		$fullname = $first . " " . $last;
		$email = 'info@luxury.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;

        return view('about')->withData($data);
    }


}
