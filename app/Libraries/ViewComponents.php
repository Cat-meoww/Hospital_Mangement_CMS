<?php

namespace App\Libraries;

class ViewComponents
{
    public function __construct()
    {
    }
    public static function Render_RecentBlogs()
    {

        if (!$recentBlogs = cache('recent_blogs')) {
            $Blogs = new \App\Models\Blogs();

            $Blogs = $Blogs->select('*')->orderBy('id', 'DESC')->limit(3)->get()->getResult();
            $recentBlogs = view('layout/frontend/components/recent_blogs', ['blogs' => $Blogs]);
            // Save into the cache for 5 minutes
            cache()->save('recent_blogs', $recentBlogs, 2100);
        }

        return $recentBlogs;
    }
}
