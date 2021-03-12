<?php

namespace App\Http\Controllers;

use App\Http\Youtube\Youtube;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $youtube;

    public function __construct()
    {
        $this->youtube = new Youtube();
    }

    public function index()
    {
        return view('home.homepage');
    }

    public function search(Request $request)
    {
        $channelName = $request->get('channel-name');
        $sortBy = $request->get('sort-by');
        $startDate = $request->get('start-date');
        $endDate = $request->get('end-date');

        $channels = $this->youtube->get_channel($channelName);

        return view('home.homepage')->with('data', $channels->items);
        // foreach ($channels->items as $channel) {
        //     dump($channel->snippet);
        // }
    }

    // public function results($data)
    // {
    //     return view('results');
    // }
}
