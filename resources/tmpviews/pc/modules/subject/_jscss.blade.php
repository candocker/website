@include('modules.guide._common-css')

@switch($view)
@case('shop')
<link href="{{$commonAssetUrl}}/sguide/css/01658-3223.css" type="text/css" rel="stylesheet" />
@break
@case('product')
<link href="{{$commonAssetUrl}}/sguide/css/1cbc0-9370.css" type="text/css" rel="stylesheet" />
@break
@case('league')
<link href="{{$commonAssetUrl}}/sguide/css/bce4f-1050.css" type="text/css" rel="stylesheet" />
@break
@case('knowledge')
<link href="{{$commonAssetUrl}}/sguide/css/bb6a2-2905.css" type="text/css" rel="stylesheet" />
@break
@case('info')
<link href="{{$commonAssetUrl}}/sguide/css/9a156-9813.css" type="text/css" rel="stylesheet" />
@break
@case('human')
<link href="{{$commonAssetUrl}}/sguide/css/666f9-2320.css" type="text/css" rel="stylesheet" />
@break
@case('home')
<link href="{{$commonAssetUrl}}/sguide/css/d6a55-1663.css" type="text/css" rel="stylesheet" />
@break
@case('store')
<link href="{{$commonAssetUrl}}/sguide/css/7636f-7560.css" type="text/css" rel="stylesheet" />
@break
@endswitch
@include('modules.guide._common-js')
