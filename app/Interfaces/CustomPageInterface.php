<?php

namespace App\Interfaces;

interface CustomPageInterface
{
    public function homePage();
    public function showCustomPage($slug);
    public function getBlogs($category = null);
}
