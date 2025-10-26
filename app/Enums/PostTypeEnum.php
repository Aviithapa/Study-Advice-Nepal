<?php

namespace App\Enums;

enum PostTypeEnum: string
{
    case BANNER = 'banner';
    case POST = 'post';
    case SERVICE = 'service';
    case DESTINATION = 'destination';
    case TESTIMONIAL = 'testimonial';
    case FEATURE = 'feature';
    case TEAM = 'team';
    case PARTNER = 'partner';
    case BLOG = 'blog';
    case PAGE = 'page';


    public function label(): string
    {
        return match ($this) {
            self::BANNER => 'Banner',
            self::POST => 'Post',
            self::SERVICE => 'Service',
            self::DESTINATION => 'Destination',
            self::TESTIMONIAL => 'Testimonial',
            self::FEATURE => 'feature',
            self::TEAM => 'team',
            self::PARTNER => 'partner',
            self::BLOG => 'blog',
            self::PAGE => 'page'
        };
    }
}
