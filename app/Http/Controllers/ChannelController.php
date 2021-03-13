<?php

namespace App\Http\Controllers;

use App\Http\Youtube\Youtube;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ChannelController extends Controller
{

    public $channel;

    public function __construct()
    {
        $this->youtube = new Youtube();
    }


    public function index($channel, $page = NULL)
    {
        $this->channel = $channel;
        $data = $this->youtube->get_videos($this->channel, $page);

        $videos = $data->items;
        $nextPage = $data->nextPageToken;
        $prevPage = $data->prevPageToken ?? NULL;

        return view('channels.channel')->with([
            'channel' => $channel,
            'data' => $data,
            'videos' => $videos,
            'nextPage' => $nextPage,
            'prevPage' => $prevPage
        ]);
    }

    // public function get_page($nextPageToken)
    // {
    //     $data = $this->youtube->get_videos($this->channel, $nextPageToken);
    // }
}
