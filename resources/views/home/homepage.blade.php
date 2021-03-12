@extends('layout')

@section('title')
MY HOMEPAGE
@endsection

@section('content')

<form action="" method="post"></form>
<form method="POST" action="{{route('submit-search')}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="channel-name">Channel Name</label>
            <input type="text" class="form-control" name="channel-name">
        </div>
        <div class="form-group col-md-6">
            <label for="sort-by">Sort by</label>
            <select name="sort-by" class="form-control">
                <option value="oldest" selected>Upload date: oldest</option>
                <option value="newest">Upload date: newest</option>
                <option value="likes">Likes</option>
                <option value="dislikes">Dislikes</option>
                <option value="comments">Comments</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="start-date">Upload Start Date</label>
            <input class="form-control" type="date" name="start-date">
        </div>
        <div class="form-group col-md-6">
            <label for="end-date">Upload End Date</label>
            <input class="form-control" type="date" name="end-date">
        </div>
    </div>
    {{-- <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div> --}}
    <button type="submit" class="btn btn-primary">Gemme</button>
</form>

<div class="container mt-5">
    @isset($data)
    @foreach ($data as $c)
    <div class="card mb-3" style="">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{$c->snippet->thumbnails->medium->url}}" alt="medium-image" />
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$c->snippet->title}}</h5>
                    <p class="card-text">{{$c->snippet->description}}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endisset
</div>
@endsection