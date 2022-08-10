@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Content   
====================================================== -->
<div class="uix-video__container-bg" data-embed-video-wrapper="true">
      <div class="uix-video" data-embed-video-width="auto" data-embed-video-height="auto" data-embed-video-controls="false" data-embed-video-autoplay="true" data-embed-video-loop="true">
          <video id="video-demo-1" class="video-js vjs-default-skin" controls poster="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.jpg">
              <source src="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.mp4" type="video/mp4">
              <source src="{{$commonAssetUrl}}/website/assets/videos/480x270/demo.webm" type="video/webm">
          </video>
      </div>
           </div>
        </main>
@endsection
