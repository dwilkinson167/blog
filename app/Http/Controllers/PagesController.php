<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function getIndex()
    {
        return view ('pages/welcome');
    }

    public function getAbout()
    {
        $first = 'Dylan';
        $last = 'Wilkinson';

        $fullname = $first . " " . $last;
        $email='dylanwilkinson@gmail.com';

        return view('pages/about')->withFullname($fullname)->withEmail($email);

    }

    public function getContact()
    {
        return view('pages/contact');
    }

    public function postContact()
    {

    }


}