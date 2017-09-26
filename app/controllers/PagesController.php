<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        require 'app/views/home.view.php';
    }

    public function news()
    {
        require 'app/views/news.view.php';
    }

    public function contact()
    {
        require 'app/views/contact.view.php';
    }

    public function about()
    {
        require 'app/views/about.view.php';
    }
}