<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomPageInterface;

class CustomPageController extends Controller implements CustomPageInterface
{
    private CustomPageInterface $customPageRepository;
    public function __construct(CustomPageInterface $customPageRepository)
    {
        $this->customPageRepository = $customPageRepository;
    }

    public function homePage()
    {
        $data = $this->customPageRepository->homePage();
        return view("custom_pages.{$data->customPage->category->slug}.{$data->customPage->slug}", compact('data'));
    }
    public function showCustomPage($slug)
    {
       $data =  $this->customPageRepository->showCustomPage($slug);
        return view("custom_pages.{$data->customPage->category->slug}.{$slug}", compact('data'));
    }
}
