<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogView extends Model
{
    public static function createViewLog($item, $request) {
        $logViews = new BlogView();
        $logViews->blog_id = $item->id;
        $logViews->url = $request->url();
        $logViews->session_id = $request->session()->getId();
        $logViews->ip = $request->ip();
        $logViews->agent = $request->header('user-agent');
        $logViews->save();
    }
}
