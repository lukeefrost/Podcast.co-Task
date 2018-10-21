@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Submit file to Amazon S3</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="/podcasts/index"> Back</a>
      </div>
  </div>
</div>


<div class="row">
  <form action="{{ url('image') }}" method="POST">
      {{ csrf_field() }}
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="inputFile">File Input</label>
                  <input type="file" name="podcast_video" id="inputFile">
              </div>
          </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
</div>

@endsection
