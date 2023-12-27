<section>
  <div class="container uix-t-c">
    <div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
      <div class="col-12">
        <h2 class="uix-heading--underline"><span>{{$data['title']}}</span></h2> 
      </div>
    </div>
  </div>
</section>
<div class="uix-spacing--s uix-spacing--no-top">
  <div class="container">
    <div class="row uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}'>
      <div class="col-12">
        @if (isset($data['tabs']))
        <div class="uix-nav uix-nav--separation uix-t-c" id="js-uix-navfilter-1">
          <ul>
            <li class="current-cat"><a data-group="all" href="#">All</a></li>
            @foreach ($data['tabs'] as $tab => $tabName)
            <li><a data-group="{{$tab}}" href="#">{{$tabName}}</a></li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="uix-spacing--s uix-spacing--no-bottom">
          <div class="uix-gallery" data-show-type="filter" data-filter-id="#js-uix-navfilter-1">
            <div class="uix-gallery__tiles">
              @foreach ($data['infos'] as $pointInfo)
              @php $tabStr = '"all"'; if (isset($pointInfo['tab'])) { foreach ($pointInfo['tab'] as $tab) { $tabStr .= ',"' . $tab . '"'; } } @endphp
              <article class="uix-core-grid__col-4 uix-gallery__item" data-groups='[{{$tabStr}}]'>
                <div>
                  <a href="#" class="uix-gallery__image" >
                    <div class="uix-gallery__image-cover">
                      <img src="{{$pointInfo['url']}}" alt="{{$pointInfo['name']}}" />
                    </div>
                  </a>
                  <h3>
                    <a href="#">{{$pointInfo['name']}}</a>
                    @if (isset($pointInfo['brief'])) 
                    <span class="uix-gallery__title">{{$pointInfo['brief']}}</span>
                    @endif
                  </h3>
                </div>
              </article>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
