<?php

namespace App\Controllers;

class Pdf extends BaseController
{
    public function pdf(): string
    {
        return view('pages/ita68');
    }

}