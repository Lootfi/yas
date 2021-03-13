@extends('layout')

@section('title')
Channel Videos
@endsection

@section('content')
@isset($videos)
<div class="container">
    <div class="row row-cols-3">
        @foreach ($videos as $video)
        <div class="flex p-2" style="">
            <img src="{{$video->snippet->thumbnails->medium->url}}" width="120" class="card-img-top"
                alt="{{$video->id}}">
            <div class="card-body d-flex flex-column justify-content-between align-items-center" style="height: 18em;">
                <h5 class="card-title">{{$video->snippet->title}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endisset

@isset($prevPage)
<a href="/channels/{{$channel}}/{{$data->prevPageToken}}" class="link-primary">Prev </a>
@endisset

@isset($nextPage)
<a href="/channels/{{$channel}}/{{$data->nextPageToken}}" class="link-primary"> Next</a>
@endisset



@endsection