<?php

namespace App\Http\Controllers\Website;

use App\Enums\PostTypeEnum;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    private $viewData;

    public function index(Request $request, $slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $this->viewData['banner'] = Cache::rememberForever('page.banner', function () {
            return Post::where('type', PostTypeEnum::BANNER->value)->first();
        });
        $this->viewData['about'] = Cache::rememberForever('posts_list', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'about-study-advice-nepal')->first();
        });
        $this->viewData['services'] = Cache::rememberForever('services_list', function () {
            return Post::where('type', PostTypeEnum::SERVICE->value)->get();
        });
        $this->viewData['destinations'] = Cache::rememberForever('destinations_list', function () {
            return Post::where('type', PostTypeEnum::DESTINATION->value)->get();
        });
        $this->viewData['testimonials'] = Cache::rememberForever('testimonials_list', function () {
            return Post::where('type', PostTypeEnum::TESTIMONIAL->value)->get();
        });
        $this->viewData['teams'] = Cache::rememberForever('teams_list', function () {
            return Post::where('type', PostTypeEnum::TEAM->value)->get();
        });
        $this->viewData['partners'] = Cache::rememberForever('partners_list', function () {
            return Post::where('type', PostTypeEnum::PARTNER->value)->get();
        });
        $this->viewData['blogs'] = Cache::rememberForever('blogs_list', function () {
            return Post::where('type', PostTypeEnum::BLOG->value)->get();
        });
        $this->viewData['features'] = Cache::rememberForever('features_list', function () {
            return Post::where('type', PostTypeEnum::FEATURE->value)->get();
        });
        $this->viewData['welcome'] = Cache::rememberForever('posts_list_welcome', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'welcome-to-our-study-advice-nepal')->first();
        });
        $this->viewData['teamTitle'] = Cache::rememberForever('teams_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'meet-our-teams')->first();
        });
        $this->viewData['blogTitle'] = Cache::rememberForever('blogs_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'our-latest-blogs')->first();
        });
        $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
        });

        return view('website.pages.' . $slug, $this->viewData);
    }

    public function slug(Request $request, $slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
        });
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'website/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if (file_exists($file_path)) {
            switch ($slug) {
                case 'about':
                    $this->viewData['about'] = Cache::rememberForever('posts_list', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'about-study-advice-nepal')->first();
                    });
                    $this->viewData['services'] = Cache::rememberForever('services_list', function () {
                        return Post::where('type', PostTypeEnum::SERVICE->value)->get();
                    });
                    $this->viewData['destinations'] = Cache::rememberForever('destinations_list', function () {
                        return Post::where('type', PostTypeEnum::DESTINATION->value)->get();
                    });
                    $this->viewData['testimonials'] = Cache::rememberForever('testimonials_list', function () {
                        return Post::where('type', PostTypeEnum::TESTIMONIAL->value)->get();
                    });
                    $this->viewData['teams'] = Cache::rememberForever('teams_list', function () {
                        return Post::where('type', PostTypeEnum::TEAM->value)->get();
                    });
                    $this->viewData['partners'] = Cache::rememberForever('partners_list', function () {
                        return Post::where('type', PostTypeEnum::PARTNER->value)->get();
                    });
                    $this->viewData['features'] = Cache::rememberForever('features_list', function () {
                        return Post::where('type', PostTypeEnum::FEATURE->value)->get();
                    });
                    $this->viewData['welcome'] = Cache::rememberForever('posts_list_welcome', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'welcome-to-our-study-advice-nepal')->first();
                    });
                    $this->viewData['teamTitle'] = Cache::rememberForever('teams_title', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'meet-our-teams')->first();
                    });
                    $this->viewData['blogTitle'] = Cache::rememberForever('blogs_title', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'our-latest-blogs')->first();
                    });
                    $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
                    });
                    $this->viewData['aboutBanner'] = Cache::rememberForever('about_banner', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'about-page')->first();
                    });
                    $this->viewData['joinUs'] = Cache::rememberForever('join-us', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'join-us')->first();
                    });

                    break;
                case 'contact':
                    $this->viewData['partners'] = Cache::rememberForever('partners_list', function () {
                        return Post::where('type', PostTypeEnum::PARTNER->value)->get();
                    });
                    $this->viewData['contactBanner'] = Cache::rememberForever('contact_banner', function () {
                        return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'contact-page')->first();
                    });
                    break;
            }
            return view('website.pages.' . $slug, $this->viewData);
        }
        return view('errors.404');
    }

    public function destination(Request $request, $slug = null)
    {
        if (!$slug) {
            return view('errors.404');
        }
        $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
        });

        $this->viewData['destination'] = Cache::rememberForever('destination_' . $slug, function () use ($slug) {
            return Post::where('type', PostTypeEnum::DESTINATION->value)->where('slug', $slug)->first();
        });

        if (!$this->viewData['destination']) {
            return view('errors.404');
        }

        $this->viewData['destinationBanner'] = Cache::rememberForever('destination_banner', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'destination-page')->first();
        });

        return view('website.pages.destinations', $this->viewData);
    }

    public function service(Request $request, $slug = null)
    {
        if (!$slug) {
            return view('errors.404');
        }
        $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
        });

        $this->viewData['service'] = Cache::rememberForever('service_' . $slug, function () use ($slug) {
            return Post::where('type', PostTypeEnum::SERVICE->value)->where('slug', $slug)->first();
        });

        if (!$this->viewData['service']) {
            return view('errors.404');
        }

         $this->viewData['serviceBanner'] = Cache::rememberForever('service_banner', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'service-page')->first();
        });

        return view('website.pages.services', $this->viewData);
    }

    public function blog(Request $request, $slug = null)
    {
        if (!$slug) {
            return view('errors.404');
        }
        $this->viewData['footer'] = Cache::rememberForever('footer_title', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'study-advice-nepal-about')->first();
        });

        $this->viewData['blog'] = Cache::rememberForever('blog_' . $slug, function () use ($slug) {
            return Post::where('type', PostTypeEnum::BLOG->value)->where('slug', $slug)->first();
        });

        if (!$this->viewData['blog']) {
            return view('errors.404');
        }

        $this->viewData['blogBanner'] = Cache::rememberForever('blog_banner', function () {
            return Post::where('type', PostTypeEnum::POST->value)->where('slug', 'blog-page')->first();
        });

        return view('website.pages.blogs', $this->viewData);
    }
}
