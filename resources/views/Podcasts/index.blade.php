@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Podcast Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="/podcasts/create"> Create New Podcast</a>
        </div>
    </div>
</div>

<table class="table table-bordered"
  <tr>
    <th>URL</th>
    <th>Title</th>
    <th>Description</th>
    <th>Episode Number</th>
    <th>Date Created</th>
  </tr>

  @foreach ($podcasts as $key => $podcast)
  <tr>
    <td>{{ $podcast->url }}</td>
    <td>{{ $podcast->title }}</td>
    <td>{{ $podcast->description }}</td>
    <td>{{ $podcast->episode_number }}</td>
    <td>{{ $podcast->created_at }}</td>
    <td>
        <a class="btn btn-info" href="/podcasts/show/{{ $podcast->id }}">Show</a>
        <a class="btn btn-primary" href="/podcasts/edit/{{ $podcast-> id}}">Edit</a>
        <a class="btn btn-primary" href="/podcasts/delete/{{ $podcast->id}}">Delete</a>
    </td>
  </tr>
@endforeach
</table>
</div>

@endsection
