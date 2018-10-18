@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Edit Podcast</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-success" href="/Podcasts/index">Podcasts</a>
      </div>
  </div>
</div>

<div class="row">
  <form action="/Podcasts/edit/{{ $podcast->id }}" method="POST">
    {{ csrf_field }}

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <textarea name="url" class="form-control">{{ $podcast->url }}</textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <textarea name="title" class="form-control">{{ $podcast->title }}</textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <textarea name="description" class="form-control">{{ $podcast->description }}</textarea>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <textarea name="episode_number" class="form-control">{{ $podcast->episode_number }}</textarea>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Review</button>
    </div>
  </form>
</div>

@endsection
