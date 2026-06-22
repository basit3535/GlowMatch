<?php
namespace App\Http\Controllers;

use App\Interfaces\CustomPageInterface;
use Illuminate\Http\Request;

class CustomPageController extends Controller   
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
        $data = $this->customPageRepository->showCustomPage($slug);
        return view("custom_pages.{$data->customPage->category->slug}.{$slug}", compact('data'));
    }

    // AJAX endpoint for filtering/pagination
    public function fetchBlogs(Request $request)
    {
        $category = $request->query('category');
        $data = $this->customPageRepository->getBlogs($category);

        return response()->json([
            'blogs'        => $data->blogs->items(),
            'featured'     => $data->featured,
            'pagination'   => (string) $data->blogs->links('vendor.pagination.bootstrap-5'),
            'current_page' => $data->blogs->currentPage(),
        ]);
    }
}
