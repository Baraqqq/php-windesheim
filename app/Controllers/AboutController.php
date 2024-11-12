<?php
namespace App\Controllers;

use App\Models\About;

class AboutController
{
    public function show()
    {
        $about = new About();
        $content = $about->getContent();
        require_once APP_ROOT . '/views/about-me.php';
    }
}