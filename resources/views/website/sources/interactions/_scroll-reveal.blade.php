@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
			<style>
				.demo-sr-active {
					transition: all 1s ease;
					transform: scale(0.7);
				}
			</style>
			<!-- Scroll Reveal
			============================================= --> 
			<section class="uix-spacing--s uix-height--50 uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"x":100},"to":{"opacity":1,"x":0},"ease":"Power2.easeOut","duration":0.8,"delay":0,"infinite":false}' style="background: #8d8d8d;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Moving the element when going left</h3>
				</div>
			</section> 
			<section class="uix-spacing--s uix-height--50 uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"scale":0.5,"transform":"translateX(50px) rotate(30deg)"},"to":{"opacity":1,"scale":1,"transform":"translateX(0) rotate(0deg)"},"ease":"Power2.easeOut","duration":0.8,"delay":0.5,"infinite":false}' style="background: #ACABA3;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Flipping the element when going left</h3>
				</div>
			</section>
			<section class="uix-spacing--s uix-height--50 uix-el--transparent" data-uix-anim='{"viewport":"80%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.8,"delay":0,"infinite":true}' style="background: #C7BAAF;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Infinite loop animation</h3>
				</div>
			</section>
			<section class="uix-spacing--s uix-height--50 uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.8,"delay":0,"infinite":false}' style="background: #AB9799;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Moving the element when going top</h3>
				</div>
			</section>
			<section class="uix-spacing--s uix-height--50" data-uix-anim='{"viewport":"100%","from":"","to":".demo-sr-active","infinite":true}' style="background: #91707A;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Add class <code>.demo-sr-active</code> when element becomes visible</h3>
				</div>
			</section>
			<section class="uix-spacing--s uix-height--50 uix-el--zoom" data-uix-anim='{"viewport":"100%","from":{"scale":0},"to":{"scale":1},"ease":"Power2.easeOut","duration":0.8,"delay":0,"infinite":false}' style="background: #805965;">
				<div class="uix-v-align--relative uix-t-c">
					<h3>Scale effect</h3>
				</div>
			</section>
		</main>
@endsection