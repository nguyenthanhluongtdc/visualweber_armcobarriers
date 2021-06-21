<?php

namespace Platform\Blog\Http\Controllers;

use Platform\Blog\Models\Category;
use Platform\Blog\Models\Post;
use Platform\Blog\Models\Tag;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Services\BlogService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Response;
use SeoHelper;
use SlugHelper;
use Theme;

class PublicController extends Controller
{
    /**
     * @param Request $request
     * @param PostInterface $postRepository
     * @return Response
     */
    public function getSearch(Request $request, PostInterface $postRepository)
    {
        $query = $request->input('q');
        SeoHelper::setTitle(__('Search result for: ') . '"' . $query . '"')
            ->setDescription(__('Search result for: ') . '"' . $query . '"');

        $posts = $postRepository->getSearch($query, 0, 12);

        Theme::breadcrumb()
            ->add(__('Home'), url('/'))
            ->add(__('Search result for: ') . '"' . $query . '"', route('public.search'));

        return Theme::scope('search', compact('posts'))
            ->render();
    }

    /**
     * @param string $slug
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function getTag($slug, BlogService $blogService)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Tag::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Tag::class) . '/' . $data['slug']));
        }

        return Theme::scope($data['view'], $data['data'], $data['default_view'])
            ->render();
    }

    /**
     * @param string $slug
     * @param BlogService $blogService
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function getAllPosts() {
        Theme::breadcrumb()->add(__('Home'), url('/'))
        ->add(__(ucfirst(SlugHelper::getPrefix(Post::class))), route('public.posts'));

        SeoHelper::setTitle(__('POSTS | ArmcoBarriers'))
        ->setDescription(__('POSTS | ArmcoBarriers'));

        $posts = Post::paginate(6);
        return Theme::scope('news-all',compact('posts'))->render();
    }
    public function getPost($slug, BlogService $blogService)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Post::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Post::class) . '/' . $data['slug']));
        }
        
        return Theme::scope($data['view'], $data['data'], $data['default_view'])
            ->render();
    }

    /**
     * @param string $slug
     * @param BlogService $blogService
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function getCategory($slug, BlogService $blogService, Request $request)
    {
        $slug = SlugHelper::getSlug($slug, SlugHelper::getPrefix(Category::class));

        if (!$slug) {
            abort(404);
        }

        $data = $blogService->handleFrontRoutes($slug);

        if (isset($data['slug']) && $data['slug'] !== $slug->key) {
            return redirect()->to(route('public.single', SlugHelper::getPrefix(Category::class) . '/' . $data['slug']));
        }

        if($request->ajax()){
            $category = $data['data']['category'];
            $posts = $data['data']['posts'];
            return view("theme.armcobarriers::partials.tabs.tab1", compact('category','posts'))->render();
        }
        return Theme::scope("news-media", $data['data'], $data['default_view'])->render();

        //return Theme::scope($data['view'], $data['data'], $data['default_view'])->render();
    }
}
