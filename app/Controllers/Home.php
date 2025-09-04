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

    public function ita68(): string
    {
        return view('pages/ita68', [
            'title' => 'ITA 2568'
        ]);
    }

    public function news(): string
    {
        return view('pages/news', [
            'title' => 'ข่าวประชาสัมพัน | News'
        ]);
    }

    public function history(): string
    {
        return view('pages/history', [
            'title' => 'ประวัติโรงพยาบาลพิชัย | History'
        ]);
    }

    public function vision(): string
    {
        return view('pages/vision', [
            'title' => 'วิสัยทัศน์/พันธกิจ | Vision/Mission'
        ]);
    }

        public function epData(): string
    {
        return view('pages/epData', [
            'title' => 'ข้อมูลองค์กร | Hospital organization data'
        ]);
    }
}
