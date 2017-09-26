<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view("home");
    }

    public function news()
    {
        return view("news");
    }

    public function contact()
    {
        return view("contact");
    }

    public function about()
    {
        return view("about");
    }
}