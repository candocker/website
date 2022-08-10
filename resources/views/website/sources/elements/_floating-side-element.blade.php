@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
            <!-- Floating Side Element
            ============================================= -->      
            <div class="uix-floating-side-el">
                <a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-envelope-open" aria-hidden="true"></i></span>Order</a>
                <a id="app-quick-service" href="javascript:"><span><i class="fa fa-headphones" aria-hidden="true"></i></span>Service Online</a>
                <a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Estimate</a>
                <a href="faq.html"><span><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>FAQ</a>
            </div>
            <!-- .uix-floating-side-el end -->
            <div style="height: 2500px;"></div>
        </main> 
@endsection
