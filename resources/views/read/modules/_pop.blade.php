<template id="modal-open-detail">
  <div class="uix-modal-box" role="dialog" tabindex="-1" aria-hidden="true" style="overflow: auto">
    <button type="button" class="uix-modal-box__close" data-modal-close-trigger="true"></button>
    <section class="uix-spacing--s uix-spaceing--no-bottom">
      <div class="container" style="overflow: auto">
        <div class="row">
          <div class="col-12 col-lg-4 col-sm-6" style="background-color:whitesmoke;">
            <div class="uix-el--transparent uix-border--rounded uix-border--rounded-img" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.2,"infinite":false}' > 
              <img id="elem_img" src="" alt="">
            </div>
          </div>
          <div class="col-12 col-lg-4 col-sm-6" style="background-color:lightgrey;">
            <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0.4,"infinite":false}' >
              <p>
                <h3 id="elem_name"></h3>
                @foreach (['author' => '作者', 'nationality' => '国籍', 'translator' => '译者'] as $elem => $elemName)
                <dl class="uix-list-abreast uix-list-abreast--icon">
                  <dt><p>{{$elemName}}</p></dt>
                  <dd>
                    <p id="elem_{{$elem}}"></p>
                  </dd>
                </dl>
                @endforeach
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-sm-12" style="background-color:aliceblue;">
            <div class="uix-el--transparent" data-uix-anim='{"viewport":"100%","from":{"opacity":0,"y":150},"to":{"opacity":1,"y":0},"ease":"Power2.easeOut","duration":0.4,"delay":0,"infinite":false}' >
              <h3 class="uix-t-l uix-t-c--md"></h3>
              <p class="uix-t-l uix-t-c--md" id="elem_description"></p> 
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>
</template>
<script>
function fillElem(jsonStr)
{
  $('#elem_img').attr('src', jsonStr.coverUrl + '?x-oss-process=image/resize,m_pad,h_475,w_475');
  $('#elem_name').html(jsonStr.nameWiki);
  $('#elem_description').html(jsonStr.description);
  $('#elem_nationality').html(jsonStr.nationality);
  $('#elem_translator').html(jsonStr.translator);
  $('#elem_author').html(jsonStr.author);
  $('#elem_publish_at').html(jsonStr.publish_at);
}
</script>
