@switch($type)
@case('series')
<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill is-transparent" data-modal-id="modal-open-{{$info['code']}}" data-modal-close-onlybtn="false">速览</a>
<a href="/series-{{$info['code']}}" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill is-transparent">详情</a>
@break;
@case('volume')
<a href="#" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill is-transparent" data-modal-id="modal-open-{{$info['id']}}" data-modal-close-onlybtn="false">速览</a>
<a href="/series-{{$info['series_code']}}-{{$info['id']}}" tabindex="0" class="uix-btn uix-btn__border--thin uix-btn__margin--b uix-btn__size--t uix-btn__bg--primary is-pill is-transparent">详情</a>
@break;
@endswitch
