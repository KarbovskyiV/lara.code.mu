<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class ThumbnailController extends Controller
{
    public function all()
    {
        $thumbnail = Thumbnail::find(1);
        dump($thumbnail->post->title);
    }
}
