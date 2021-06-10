<?php

namespace Theme\Armcobarriers\Http\Controllers;

use Platform\Theme\Http\Controllers\PublicController;
use BaseHelper;
use Platform\Page\Models\Page;
use Platform\Page\Services\PageService;
use Platform\Theme\Events\RenderingSingleEvent;
use Platform\Theme\Events\RenderingHomePageEvent;
use Platform\Theme\Events\RenderingSiteMapEvent;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Platform\Page\Repositories\Interfaces\PageInterface;
use Illuminate\Support\Arr;
use Response;
use SeoHelper;
use SiteMapManager;
use SlugHelper;
use Theme;
use RvMedia;
use Platform\Blog\Models\Post;

class ArmcobarriersController extends PublicController
{
    /**
     * @return \Illuminate\Http\Response|Response
     */
    public function __construct(Page $page){
        $this->page=$page;
    }
    public function getIndex()
    {

        SeoHelper::setTitle(theme_option('seo_title', 'Armcobarriers'))
            ->setDescription(theme_option('seo_description', 'Armcobarriers'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'),'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            $homepageId = BaseHelper::getHomepageId();
    

            if ($homepageId) {
                $slug = SlugHelper::getSlug(null, SlugHelper::getPrefix(Page::class), Page::class, $homepageId);
               
                if ($slug) {
                    $data = (new PageService)->handleFrontRoutes($slug);
                    return Theme::scope($data['view'], $data['data'], $data['default_view'])->render();
                }
            }
        }

        SeoHelper::setTitle(theme_option('site_title'));

        Theme::breadcrumb()->add(__('Home'), url('/'));

        event(RenderingHomePageEvent::class);
        try{
            $data = [];
            $data['page'] = $this->page->where('id', 1)->first();
            // dd($data);
            
            return Theme::scope('index',$data)->render();
            


        }catch (\Throwable $throwAble) {
            \Log::error('Có lỗi xảy ra thực hiện chức năng ' . __CLASS__ . '@' . __FUNCTION__, [$throwAble->getMessage()]);
            return view('theme.main::views.500');
        }

        // return Theme::scope('index')->render();
    }

    /**
     * @param string $key
     * @return \Illuminate\Http\RedirectResponse|Response
     * @throws FileNotFoundException
     */
    public function getView($key = null)
    {
        SeoHelper::setTitle(theme_option('seo_title', 'Armcobarriers'))
            ->setDescription(theme_option('seo_description', 'Armcobarriers'))
            ->openGraph()
            ->setTitle(@theme_option('seo_title'))
            ->setSiteName(@theme_option('site_title'))
            ->setUrl(route('public.index'))
            ->setImage(RvMedia::getImageUrl(theme_option('seo_og_image'),'og'))
            ->addProperty('image:width', '1200')
            ->addProperty('image:height', '630');

        if (empty($key)) {
            return $this->getIndex();
        }

        $slug = SlugHelper::getSlug($key, '');

        if (!$slug) {
            abort(404);
        }

        if (defined('PAGE_MODULE_SCREEN_NAME')) {
            if ($slug->reference_type == Page::class && BaseHelper::isHomepage($slug->reference_id)) {
                return redirect()->to('/');
            }
        }

        $result = apply_filters(BASE_FILTER_PUBLIC_SINGLE_DATA, $slug);

        if (isset($result['slug']) && $result['slug'] !== $key) {
            return redirect()->route('public.single', $result['slug']);
        }

        event(new RenderingSingleEvent($slug));
        Theme::layout('default');
       

        if (!empty($result) && is_array($result)) {
            return Theme::scope(isset(Arr::get($result, 'data.page')->template) ? Arr::get($result, 'data.page')->template : Arr::get($result, 'view', ''), $result['data'], Arr::get($result, 'default_view'))->render();
        }

        abort(404);
    }

    /**
     * @return string
     */
    public function getSiteMap()
    {
        event(RenderingSiteMapEvent::class);

        // show your site map (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
        return SiteMapManager::render('xml');
    }

    public function getPosts() {
        
        $posts = Post::paginate(6);

        return Theme::scope('news-all',compact('posts'))->render();

    }
}