<?php
namespace App\Controllers;

use App\Models\Blog;

class BlogsController
{
    public function index()
    {
        $blog = new Blog();
        $blogs = $blog->getAllBlogs();
        require_once APP_ROOT . '/views/blogs.php';
    }
}