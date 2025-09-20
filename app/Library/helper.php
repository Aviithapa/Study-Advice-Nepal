<?php

use App\Models\Post;
use App\Models\SiteSetting;

if (!function_exists('getSiteSettingKeys')) {
    /**
     * @return array
     */
    function getSiteSettingKeys(): array
    {
        return [
            'site_title' => ['type' => 'text', 'value' => 'My Awesome Website'],
            'meta_keyword' => ['type' => 'text', 'value' => 'laravel, php, blog'],
            'meta_description' => ['type' => 'textarea', 'value' => 'This is my awesome Laravel-powered website.'],
            'contact_details' => ['type' => 'textarea', 'value' => 'Phone: +977-123456789, Address: Kathmandu, Nepal'],
            'social_fb' => ['type' => 'text', 'value' => 'https://facebook.com/my-page'],
            'social_twitter' => ['type' => 'text', 'value' => 'https://twitter.com/my-profile'],
            'social_youtube' => ['type' => 'text', 'value' => 'https://youtube.com/my-channel'],
            'social_google' => ['type' => 'text', 'value' => 'https://plus.google.com/my-profile'],
            'social_instagram' => ['type' => 'text', 'value' => 'https://instagram.com/my-profile'],
            'social_mail' => ['type' => 'text', 'value' => 'info@example.com'],
            'social_phone' => ['type' => 'text', 'value' => '+977-123456789'],
            'opening_time' => ['type' => 'text', 'value' => 'Mon - Fri, 9AM - 5PM'],
            'footer' => ['type' => 'text', 'value' => '© 2025 My Awesome Website'],
            'footer_info' => ['type' => 'textarea', 'value' => 'This is footer additional info.'],
            'copy_right' => ['type' => 'text', 'value' => 'All rights reserved.'],
            'location' => ['type' => 'text', 'value' => 'Kathmandu, Nepal'],
            'email' => ['type' => 'text', 'value' => 'support@example.com'],
            'logo_image' => ['type' => 'file', 'value' => 'logo.png'], // can be path in storage
        ];
    }
}


if (!function_exists('site_setting')) {
    /**
     * Get the value of a site setting by name
     *
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    function site_setting($name, $default = null)
    {
        $setting = SiteSetting::findByName($name);

        if ($setting) {
            return $setting->value;
        }

        return $default;
    }
}

if (!function_exists('site_logo')) {
    /**
     * Get the URL of a logo image setting
     *
     * @param string $name
     * @param mixed $default
     * @return string|null
     */
    function site_logo($name, $default = null)
    {
        $setting = SiteSetting::findByName($name);

        if ($setting && $setting->value) {
            return \Illuminate\Support\Facades\Storage::url($setting->value);
        }

        return $default;
    }
}



if (!function_exists('sub_menu')) {
    /**
     * Get submenu items by post type
     *
     * @param string $type
     * @return \Illuminate\Support\Collection
     */
    function sub_menu($type)
    {
        return Post::where('type', $type)
                    ->select('title', 'slug')
                    ->orderBy('title')
                    ->get();
    }
}
