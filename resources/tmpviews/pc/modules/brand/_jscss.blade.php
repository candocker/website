@include('modules.guide._common-css')

@switch($view)
@case('home')
<link href="{{$commonAssetUrl}}/sguide/css/46fb4-5182.css" type="text/css" rel="stylesheet" />
@break
@case('detail')
<link href="{{$commonAssetUrl}}/sguide/css/92999-4570.css" type="text/css" rel="stylesheet" />
@break
@case('product')
<link href="{{$commonAssetUrl}}/sguide/css/30800-2632.css" type="text/css" rel="stylesheet" />
@break
@case('shop')
<link href="{{$commonAssetUrl}}/sguide/css/7ba7a-2311.css" type="text/css" rel="stylesheet" />
@break
@case('store')
<link href="{{$commonAssetUrl}}/sguide/css/4cb42-2569.css" type="text/css" rel="stylesheet" />
@break
@case('human-detail')
<link href="{{$commonAssetUrl}}/sguide/css/8bfd9-7295.css" type="text/css" rel="stylesheet" />
@break
@endswitch
@include('modules.guide._common-js')
