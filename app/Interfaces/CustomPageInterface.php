<?php

namespace App\Interfaces;

interface CustomPageInterface
{
    public function homePage();
    public function showCustomPage();
    public function getBlogs($category = null);
    public function showSingleBlog($category, $slug);
}
