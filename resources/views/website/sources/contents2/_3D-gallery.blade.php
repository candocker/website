@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
		   <!-- Content 
			====================================================== -->
			<canvas id="3D-gallery-three-canvas"></canvas>
			<div id="3D-gallery-three-canvas__loader" style="height: 5px; background: #A45CFB; position: absolute; z-index: 1; bottom: 0; left: 0; width: 0%;"></div>
			<div style="height: 300px;"></div>
		</main>
@endsection