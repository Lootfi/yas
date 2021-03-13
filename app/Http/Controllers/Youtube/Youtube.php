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
        $country = 'US';
        $apiKey = config('youtube.api_key');
        $maxResults = 10;
        $youTubeEndPoint = "https://www.googleapis.com/youtube/v3/search";
        $type = 'channel';

        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$id";
        $response = Http::get($url);
        $results = json_decode($response);

        return $results;
    }


    public function get_videos($channel_id)
    {
        $part = 'snippet';
        $country = 'US';
        $apiKey = config('youtube.api_key');
        // $maxResults = 10;
        $youTubeEndPoint = "https://www.googleapis.com/youtube/v3/search";
        $type = 'videos';

        //$url = "$youTubeEndPoint?part=$part&regionCode=$country&type=$type&key=$apiKey&q=$channel_id";
        $url = "https://www.googleapis.com/youtube/v3/channels?id=$channel_id&key=$apiKey&part=contentDetails";

        $response = Http::get($url);
        $results = json_decode($response);

        $upload_id = $results->items[0]->contentDetails->relatedPlaylists->uploads;

        $url2 = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=$upload_id&key=$apiKey&part=snippet";

        $response = Http::get($url2);
        $results = json_decode($response);
        return $results;
    }
}
