<?php

namespace App\Http\Controllers;

use App\Models\Thumbnail;

class ThumbnailController extends Controller
{
    public function all()
    {
        $thumbnail = Thumbnail::find(1);
        dump($thumbnail->post->title);
    }
}
