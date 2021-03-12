<?php

namespace App\Http\Youtube;

use Illuminate\Support\Facades\Http;

class Youtube
{

    public function __construct()
    {
    }

    public function get_channel($id)
    {
        $part = 'snippet';
        $country = 'BD';
        $apiKey = config('youtube.api_key');
        $maxResults = 12;
        $youTubeEndPoint = "https://www.googleapis.com/youtube/v3/search";
        $type = 'channel'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$id";
        $response = Http::get($url);
        $results = json_decode($response);

        return $results;
    }
}
