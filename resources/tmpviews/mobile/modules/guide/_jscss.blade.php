@include('modules.guide._common-css')

@switch($view)
@case('home')
<link href="{{$commonAssetUrl}}/sguide/m/css/ed99b-7817.css" type="text/css" rel="stylesheet" />
@break
@case('vote')
<link href="{{$commonAssetUrl}}/sguide/m/css/1457b-7442.css?v=1" type="text/css" rel="stylesheet" />
<script src="{{$commonAssetUrl}}/sguide/m/js/jquery.min.js" type="text/javascript"></script>
@break
@case('')
@break
@case('')
@break
@case('')
@break
@endswitch
<script src="{{$commonAssetUrl}}/sguide/m/js/jquery.min.js" type="text/javascript"></script>
@include('modules.guide._common-js')
