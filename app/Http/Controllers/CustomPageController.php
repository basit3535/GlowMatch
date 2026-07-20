<?php
namespace App\Http\Controllers;

use App\Interfaces\CustomPageInterface;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Http\Request;

class CustomPageController extends Controller
{
    private CustomPageInterface $customPageRepository;
    use SEOToolsTrait;
    public function __construct(CustomPageInterface $customPageRepository)
    {
        $this->customPageRepository = $customPageRepository;
    }

    public function homePage()
    {
        $data = $this->customPageRepository->homePage();
        $this->seo()->setTitle($data->customPage->meta_title);
        $this->seo()->setDescription($data->customPage->meta_description);
        $this->seo()->setCanonical(url()->current());
        $this->seo()->opengraph()->setUrl(url()->current());
        return view("custom_pages.{$data->customPage->category->slug}.{$data->customPage->blade_view}", compact('data'));
    }

    public function showCustomPage()
    {
        $data = $this->customPageRepository->showCustomPage();
        $this->generateMetaTags($data->customPage);
        return view("custom_pages.{$data->customPage->category->slug}.{$data->customPage->blade_view}", compact('data'));
    }

    // AJAX endpoint for filtering/pagination
    public function fetchBlogs(Request $request)
    {
        $category = $request->category;
        $page     = $request->page;
        $data     = $this->customPageRepository->getBlogs($category, $page);

        return response()->json([
            'blogs'        => $data->blogs->items(),
            'featured'     => $data->featured,
            'pagination'   => (string) $data->blogs->links(),
            'current_page' => $data->blogs->currentPage(),
        ]);
    }

    public function showSingleBlog($category, $slug)
    {
        $data = $this->customPageRepository->showSingleBlog($category, $slug);
        $this->generateMetaTags($data->customPage);
        return view("defual-pages.single-blog", compact('data'));
    }

    private function generateMetaTags($record)
    {
        $this->seo()->setTitle($record->meta_title);
        $this->seo()->setDescription($record->meta_description);
        $this->seo()->setCanonical(url($record->slug));
        $this->seo()->opengraph()->setUrl(url($record->slug));

    }
}
