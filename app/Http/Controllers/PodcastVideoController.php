<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PodcastVideoController extends Controller
{
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // If video has been requested to be uploaded
        if ($request->hasFile('podcast_video')) {

          // Get the filename with Extension
          $filenameExtension = $request->file('podcast_video')->getClientOriginalName();

          // Get the filename without the extension
          $file = pathInfo($filenameExtension, PATHINFO_FILENAME);

          // Get file extension
          $extension = $request->file('podcast_video')->getClientOriginalExtension();

          // Get filename to store
          $storedFile = $filename.'_'.time().'.'.$extension;

          // Upload the file to Amazon S3
          Storage::disk('s3')->put($storedFile, fopen($request->file('podcast_video'), 'r+'), 'public');

          // return with success message if successful
          return redirect('image')->with('status', 'File Uploaded!');

        }
    }
}
