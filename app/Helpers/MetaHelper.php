<?php

namespace App\Helpers;

class MetaHelper
{
    /**
     * Generate Open Graph meta tags
     */
    public static function generateOgTags($title, $description, $image = null, $type = 'website', $url = null)
    {
        $url = $url ?: url()->current();
        $image = $image ?: asset('images/og-default.jpg');

        return [
            'og:title' => $title,
            'og:description' => $description,
            'og:type' => $type,
            'og:url' => $url,
            'og:image' => $image,
            'og:site_name' => 'Ossian Sportbook'
        ];
    }

    /**
     * Generate Twitter Card meta tags
     */
    public static function generateTwitterTags($title, $description, $image = null, $card = 'summary_large_image', $site = '@ossian_sportbook')
    {
        $image = $image ?: asset('images/twitter-default.jpg');

        return [
            'twitter:card' => $card,
            'twitter:title' => $title,
            'twitter:description' => $description,
            'twitter:image' => $image,
            'twitter:site' => $site
        ];
    }

    /**
     * Generate basic SEO meta tags
     */
    public static function generateSeoTags($title, $description, $keywords = null, $robots = 'index, follow')
    {
        return [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords ?: 'sports betting, live sports, football betting, basketball betting, tennis betting, ossian sportbook',
            'robots' => $robots
        ];
    }

    /**
     * Generate complete meta tags array
     */
    public static function generateAllTags($title, $description, $options = [])
    {
        $defaults = [
            'keywords' => null,
            'robots' => 'index, follow',
            'og_image' => null,
            'og_type' => 'website',
            'twitter_image' => null,
            'twitter_card' => 'summary_large_image',
            'twitter_site' => '@ossian_sportbook',
            'url' => null
        ];

        $options = array_merge($defaults, $options);

        $seoTags = self::generateSeoTags($title, $description, $options['keywords'], $options['robots']);
        $ogTags = self::generateOgTags($title, $description, $options['og_image'], $options['og_type'], $options['url']);
        $twitterTags = self::generateTwitterTags($title, $description, $options['twitter_image'], $options['twitter_card'], $options['twitter_site']);

        return array_merge($seoTags, $ogTags, $twitterTags);
    }
}
