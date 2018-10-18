@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Podcast </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="/podcasts/index"> Back</a>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>URL:</strong>
                {{ $podcast->url }}
            </div>
        </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $podcast->title }}
            </div>
        </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $podcast->description }}
            </div>
        </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Episode Number:</strong>
                {{ $podcast->episode_number }}
            </div>
        </div>

      </div>
</div>

@endsection
