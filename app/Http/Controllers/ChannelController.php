<?php

namespace App\Http\Controllers;

use App\Http\Youtube\Youtube;
use Illuminate\Http\Request;

class ChannelController extends Controller
{

    public function __construct()
    {
        $this->youtube = new Youtube();
    }


    public function index($channel)
    {
        $videos = $this->youtube->get_videos($channel);

        return view('channels.channel')->with('videos', $videos);
    }
}
