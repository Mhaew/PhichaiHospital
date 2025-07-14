<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/index', [
            'title' => 'หน้าหลัก | Home'
        ]);
    }

        public function contact(): string
    {
        return view('pages/contact', [
            'title' => 'ติดต่อเรา | Contact'
        ]);
    }
}  

