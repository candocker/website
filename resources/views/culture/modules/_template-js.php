  <script id="index_tmpl" type="text/x-dot-template">
  {{~it.list:data:i }}
    {{? data.name && data.style < 9}}
      <div style="padding-bottom:0.4rem"></div>
      <!-- line_gray -->
      <div class="line_gray">
        <div class="box"></div>
      </div>
      <!-- area -->
      <div class="area">
        <div class="title clearfix">
          <div style="float: left;width: 5.8rem;height: 0.54rem;overflow: hidden;">
            <span style="font-weight: bold;">{{= data.name}}</span>
            <span>{{= data.subname}}</span>
          </div>
          {{? data.rightShowMoreType == "1" }}
          <a href="{{= data.rightShowMoreUrl }}">更多<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoBAMAAAB+0KVeAAAAG1BMVEUAAAA3WZpAgL82WZo3Wps7XZs3WZo2WJk2WJmVvPRoAAAACHRSTlMArATvMylhcYgfyM8AAAAySURBVCjPYxhZgBWbYIYQFsHgRgVMQRYLbEqd6aeUraOAgEqEmbRXiAglwuHJyjCsAQC4zQsR0bEKKAAAAABJRU5ErkJggg==" alt=""></a>
          {{?}}
        </div>
      </div>
    {{?}}
    {{? data.bqList && data.bqList.length > 0 }}
    <!-- label_box -->
    <div class="label_box">
      <ul>
        {{~ data.bqList:val:index }}
        <li>
          <a href="{{=val.linkUrl}}">{{=val.title}}</a>
        </li>
        {{~}}
      </ul>
    </div>
    {{?}}
    {{? data.style == 1 }}
      <!-- module_one -->
      <div class="module-one">
        <a href="{{= data.data[0].linkUrl}}">
          <div class="inner">
            <div class="box" style="{{= !data.data[0].title && !data.data[0].subTitle ?'padding-bottom: 0;':'' }}">
              <div class="img_box">
                <img class="lazy" src="data:image/png;base64,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" data-original="{{= data.data[0].imgUrl}}" alt="">
              </div>
              {{? data.data[0].title }}
              <div class="title">{{= data.data[0].title}}</div>
              {{?}}
              {{? data.data[0].subTitle }}
              <div class="desc">{{= data.data[0].subTitle}}</div>
              {{?}}
            </div>
          </div>
        </a>
      </div>
    {{?? data.style == 2}}
      <!-- banner_ad -->
      <div class="banner_ad">
        <div class="inner">
          {{~data.data:val:index }}
          <a href="{{= val.linkUrl}}">
            <img class="lazy" src="data:image/png;base64,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" data-original="{{= val.imgUrl}}" alt="">
          </a>
          {{~}}
        </div>
      </div>
    {{?? data.style == 3}}
      <!-- module_two -->
      <div class="module-two">
        <div class="inner">
          {{~data.data:val:index }}
            <div class="box">
              <a href="{{= val.linkUrl}}">
                {{? val.title || val.subTitle}}
                <div class="title">
                  <p>{{= val.title}}</p>
                  <p>{{= val.subTitle}}</p>
                </div>
                {{?}}
                <div class="img_box" style="{{= !val.title && !val.subTitle ?'width:100%;height:100%;margin:0;':'' }}">
                  <img src="{{= val.imgUrl}}" onerror="this.style.width=0;" alt="">
                </div>
              </a>
            </div>
          {{~}}
        </div>
      </div>
    {{?? data.style == 4}}
      <!-- module_three -->
      <div class="module-three">
        <div class="inner">
          <div class="l">
            <a href="{{= data.data[0].linkUrl}}">
              <div class="title">
                <p>{{= data.data[0].title}}</p>
                <p>{{= data.data[0].subTitle}}</p>
              </div>
              <div class="img_box">
                <img src="{{= data.data[0].imgUrl}}" onerror="this.style.width=0;" alt="">
              </div>
            </a>
          </div>
          <div class="r">
            <div class="box">
              <a href="{{= data.data[1].linkUrl}}">
                <div class="title">
                  <p>{{= data.data[1].title}}</p>
                  <p>{{= data.data[1].subTitle}}</p>
                </div>
                <div class="img_box">
                  <img src="{{= data.data[1].imgUrl}}" onerror="this.style.width=0;" alt="">
                </div>
              </a>
            </div>
            <div class="box">
              <a href="{{= data.data[2].linkUrl}}">
                <div class="title">
                  <p>{{= data.data[2].title}}</p>
                  <p>{{= data.data[2].subTitle}}</p>
                </div>
                <div class="img_box">
                  <img src="{{= data.data[2].imgUrl}}" onerror="this.style.width=0;" alt="">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    {{?? data.style == 5}}
      {{? data.appDisplay == "isbn" }}
        {{? data.showStyle == 3 }}
          <!-- item-list -->
          <div class="item-list">
            <ul class="inner">
              {{? data.data.length > 0 }}
              {{~data.data[0].data:val:index }}
              <li>
                <a href="/item/{{= val.mid}}">
                  <div class="l">
                    <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7+/v7+/v7+/v7+/v7+/v7+/v7+/u7u7u7u7w8PDx8fH09PT////u7u67u7u+vr7p6enr6+vBwcHExMTc3NzW1tbR0dHj4+PLy8vm5ubZ2dnOzs7g4ODT09PGxsbIyMiTSnFeAAAAD3RSTlMA9uro28/CvJ9qW0YkGALMhi6yAAAJTElEQVR42uzYSWpDQRBEwdY8+Et9/9saGyOMwZDqVS7iHSHooajxartdz8f9buq/dvvj+Xrbxp+e99NU1un+HL96XKbyLo/x6uMw9U6Hjxfd1Lv94D2cuvc7fF/bp7dupcvXh3GfWuk+xjCcrHUaY5taaxu3qbVu4zq11nWcp9Y6j+PUWsexn1prPyydVtuNqdXYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLojdJ7vmuuQmDIPRR9An3+/A+79kBwKmoXahLU12dnL+bGaTEPsgybaSL8TH3cfdBT7uvhAfdx93F/i4+0J83H3cXeDj7gvxzdylSK/i27mzcPQivp07AWR6Dd/OHWmAXsPL3Fl2gl5BACSJSC/gZXE3gAudImyhfyMAw8DIkv43N7uTg+8+xVB0ghgY4ER/jdMKK/oFoXeHO5mhspkfMYKkNgGInbcPzrmcp23emf6WwgAwmgFAonNkcXoarlu+353XmBlpqdSO2iTAUJuMZwb6LdLpyZX2Uz7DEtlzd9EMQeOBo0vc6k7GkoaJsRIXd5ralN9MxygAYGf88sBQF2NdYMxYamIxkNAAQiqi5cwb61ZrKrgAXInRm90VzdhZ65QCArURgKUuJgcr5wuczCRmrIzND7EMMAA0/HobFCrKLGrLeeDd705o/IxaqgZ+I+g0F6mdbMbQglw/N02HqhiTKb6UtCehGtxMfhqLwwoHW6TbhI1Lxpxwd87KZVUMxmcASizz6o5DSAFMNjA4y34ha7m3apuk2y6mnmJFjliZkrAAoC01KFkBY4qbSbEV25HOuL/eCVPkGm2FZnyv3AnGRrDdlbidPhZmS/pQ153n2mCC1pMzkqiomqxttqiewJJmhresFRXeEsgAw2/rlEpVXNsdN2a7adL16r5d70RezE2DpwNlLPQgr0PlzZh9rzuwqPHgqUPUp9tez0ChI2YTmne1AFRrn6kUH6TWtHZyvUhZRgPUMb/TnagpMoCpywBNJ1iAvRTFOuNlNQrE9QJ1wroVobV8aaW0oI1aTeTyzoc7UxPEvNWdgakDD9TFLu5E8ZJ6OGBHpbq58bXKQSlWdnkhtRDqsXFLdABAppQfQeyDQrZl8Vve6S5xNRZgqYsD+0FjDZ4jUng74okt+TZ3BSuBLABJR3zKDKgimzUZ8OTWNUYgMABtJfmrh8D73XmNfR66Xe6E98UkhQfKHkqRVszY0dm5HMbRiTptv+bdSiHTugNSA8yrnFLoCQ0gkVjj2U6PxgOUeJc7WQIAV09RCpIaTNjgbAQd8IHXE5K1aE1E4eEhPtQOkai0N5KlkIO2eeTF0XEMljIyAOeVmP06ACkCgc64150w1o2YCaJWDFbd2Kzbrk5gRrFmVuq6E4AStfS3QlykAABqCnlS4HjoNyTBZkn3Mda137zBndqLz/7pmLpdA5OB846karnT++Z4pL67tZhC+/YqDyQ5qw+A2ROH3uCucG22me00IbqVo66ShujEnem6i7u7+OROluRGBhhGSCKvVGp+vNnOOPF59zLRZW7qBWQAPA/H7u4cdRnBiYEp0p+7s5swJYmE3N3tXjgYKUNex4VJ/toCQ9mbCzvlDe724+x4Je4ikClqAIOkLs0yppG3nAV4iZ/y/EIpxOMvD27WyIezYc3yBub1ObsjUe8ca+rhgEgkp5q4HcFM3bijEQ8U2c4uUQM6yfmPaWyaJT3z/l5A2rvkub+SMqb96BAENbHNI36A35ZF1uM0al7ilxoEDGsDNNIB3w4vrwBL17jfnQJQ6s0dbREi+uTyIGjH7dWG0f0yTDfn4Sc6IHp944xgAtr9GCMbLcip9vjPudddLdTbsKLCDu9jKtileNXbSZh6pRNir09umx35PqaeEc+5351/vnHSKlRY7M0lRxUxYcYdNQm+mj6xV/gLwDaSvlzCIq4uFfe78wpQ5djaXtUFufpk2Ea/hK18Uqevhkv/FzsSikgUvp6GGepN389aQKfG3KL3fustjtCDOOYKY4bT879GSdeIvflOUJi57qNIOud+d0ZrezrIGFuDE4Ni1rk89KbkFMCW/pnoggbAdD/3uouSbsEMIQRnJN1EUon+P9/v93e/4ePuC/Fx93F3gY+7H+zQIQEAAADDoP6tX+FyAiIQ4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3A3duiQAAAAgGFQ/9avcDkBEQhx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uFs7dpKCUBBDUfT9vquq7H+3iqiIIKQyMYN7lnAJISQR2tHOgXaJ0I52DrRLhHa0c6BdIrSjnQPtEqEd7RxolwjtaOdAu0RoRzsH2iVCO9o50C4R2tHOgXaJ0I52DrRLhHa0c6BdIrSjnQPtEqEd7f5BgyFm0GiIGTUbYmathphVuyFm12GIOVQMMUVaDBGLpNMQcUpqm6Hf1nRXJ0OvqerhMvS69HQxeX2mS2+Vnddjq/rQTk4Vr+Vs+lKOfZ1HXlK/DeO87kfRyw1VHOq9JsUqNQAAAABJRU5ErkJggg==" data-original="{{= val.imgUrl}}" alt="">
                    <div class="price">
                      <span>￥</span>
                      <span>{{= +val.price}}</span>
                      <span>起</span>
                    </div>
                  </div>
                  <div class="r" style="{{= data.showMoreType != '2' && index== data.data[0].data.length-1?'border-bottom: 0':''}}">
                    <div class="title">{{= val.itemName}}</div>
                    <div class="author">{{= val.author}} / {{= val.press}} / {{= val.pubDate}} / {{= val.binding}}</div>
                    <div class="desc">{{= val.contentIntroduction}}</div>
                  </div>
                </a>
              </li>
              {{~}}
              {{?}}
            </ul>
            {{? data.showMoreType == "2" }}
            <!-- change_box -->
            <div class="change_box change_box_list" data-index='2'>
              <div class="box">换一换 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAclBMVEUAAAA2WJk2WJk3WZtEbak2WJk2WZk2WJo3WJo3Wpo4Wps3Wps3W546XaI2WZo3WZo2WJo2WZo5Wps5WZo7W5s9YZ42WZk3WZo2WJo3WZo3WZo2WJk2WJo4Wpo3WZs2WZk3WZo4W5uAgP83WZo4WZk2WJmQgH9YAAAAJXRSTlMA9fBnCN/X6rBWUkIoDujJt5wyLB0VzIXSu6ali3tbUEs5ApBf2p/i4wAAANBJREFUOMvt08kSgjAQBNDMkARiCJss7nv//y+6XBQdLao8cKFPTNc7JExFTRk3IUoM8SK5hJ9Md4S4KNctg7ZahcVRdqlF4U+Pz30Om1aIZJexe047ypwMg+HqdfZMMixx6BcOIqyxeq+WIuww/7ycdOvcqmGJzwNhrf9YqG4Gwk02ENpcKKv44/fM0QlwhuV7tUItQrh+c0CpREjse2dhE2QYGdo9Z8e3Q8vQNy3y/WM4+QI2/bKZpFF6m4HbdVnEoI3+vYv74yKTRI2aMmquGSELMu+krSYAAAAASUVORK5CYII=" alt=""></div>
            </div>
            {{?}}
          </div>
        {{??}}
          <!-- free_mode -->
          <div class="free_mode">
            <!-- Swiper -->
            <div class="swiper-container free_mode_swiper gallery_swiper gallery_swiper{{= it.index+i}}" data-cl=".gallery_swiper{{= +it.index+i}}">
              <div class="swiper-wrapper">
                {{? data.data.length > 0 }}
                {{~data.data[0].data:val:index }}
                  <div class="swiper-slide">
                    <a href="/item/{{=val.mid}}">
                      <div class="box">
                        <div class="img_box">
                          <img src="{{=val.imgUrl}}" onerror="this.style.width=0;" alt="">
                        </div>
                        <div class="title">{{=val.itemName}}</div>
                        <div class="author">{{=val.author}}</div>
                        <div class="price">
                          <span>￥</span><span>{{= +val.price}}</span><span>起</span>
                        </div>
                      </div>
                    </a>
                  </div>
                {{~}}
                {{?}}
              </div>
            </div>
          </div>
        {{?}}
      {{?? data.appDisplay == "product"}}
        {{? data.showStyle == 3 }}
          <!-- newSquareBox_list -->
          <div class="newSquareBox_list">
            <ul class="inner">
              {{? data.data.length > 0 }}
              {{~data.data[0].data:val:index }}
              <li>
                <a href="{{= it.site.s_mbook}}{{= val.shopId}}/{{= val.itemId}}">
                  <div class="l">
                    <img class="lazy" src="data:image/png;base64,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" data-original="{{= val.imgUrl}}" alt="">
                    <div class="price">
                      <span>￥</span>
                      <span>{{= +val.price}}</span>
                    </div>
                  </div>
                  <div class="r" style="{{= index== data.data[0].data.length-1?'border-bottom: 0':''}}">
                    <div class="title">{{= val.itemName}}</div>
                    <div class="desc">{{= val.importantDesc}}</div>
                    <div class="sign_box">
                      {{~val.tags:name:k }}
                      <span>{{= name}}<div class="jiao"><div class="jiao-inner"></div></div></span>
                      {{~}}
                    </div>
                  </div>
                </a>
              </li>
              {{~}}
              {{?}}
            </ul>
          </div>
        {{?? data.sycModuleId != '22'}}
          <!-- book-list -->
          <div class="book-list">
            <!-- Swiper -->
            <div class="swiper-container book-list-swiper{{= it.index+i}}" data-cl=".book-list-swiper{{= +it.index+i}}">
              <div class="swiper-wrapper">
                {{? data.data.length > 0 }}
                {{~data.data[0].data:val:index }}
                <div class="swiper-slide">
                  <a href="{{= it.site.s_mbook}}{{= val.shopId}}/{{= val.itemId}}">
                    <div class="box">
                      <div class="img_box">
                        <img src="{{=val.imgUrl}}" onerror="this.style.width=0;" alt="">
                      </div>
                      <div class="title">{{= val.itemName}}</div>
                      <div class="price">
                        <span class="s">￥</span><span class="v">{{= +val.price}}</span>
                      </div>
                    </div>
                  </a>
                </div>
                {{~}}
                {{?}}
              </div>
            </div>
          </div>
        {{??}}
          <!-- 特色推荐 (频道页模块) -->
          <div class="feature_box">
            <div class="swiper-container swiper-container-feature{{= it.index+i}}" data-cl=".swiper-container-feature{{= +it.index+i}}">
              <div class="swiper-wrapper">
                {{~data.data:val:index }}
                <div class="swiper-slide {{= index == 0?'active':''}} feature_swiper-slide" data-active="{{= index == 0?'1':'0'}}" data-index="{{= index}}"><span>{{= val.subTitle}}</span></div>
                {{~}}
              </div>
            </div>
            {{~data.data:val:index }}
            <div class="inner">
              <ul>
                {{~val.data:value:j }}
                <li>
                  <a href="{{= it.site.s_mbook}}{{= value.shopId}}/{{= value.itemId}}">
                    <div class="img_box"><img class="lazy" src="data:image/png;base64,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" data-original="{{= value.imgUrl}}" alt=""/></div>
                    <div class="title">{{= value.itemName}}</div>
                    <div class="price"><span>￥</span><span>{{= +value.price}}</span></div>
                  </a>
                </li>
                {{~}}
              </ul>
            </div>
            {{~}}
          </div>
        {{?}}
      {{?? data.appDisplay == "shopAndProduct"}}
        <!-- 书店-旧书店-有故事 (频道页模块) -->
        <div  class="story_box">
          <div class="swiper-container swiper-container-feature{{= it.index+i}}" data-cl=".swiper-container-feature{{= +it.index+i}}">
            <div class="swiper-wrapper">
              {{~data.data:val:index }}
              <div class="swiper-slide {{= index == 0?'active':''}} story_box-swiper-slide" data-active="{{= index == 0?'1':'0'}}" data-index="{{= index}}"><span>{{= val.subTitle}}</span></div>
              {{~}}
            </div>
          </div>
          {{~data.data:val:index }}
          <div class="inner">
            <ul class="inner_ul">
              {{~val.data:value:j }}
              <li class="list">
                <div class="top_box clearfix">
                  <a href="/shop/{{=value.shopId}}/#/">
                    <div class="img_box"><img class="lazy" src="data:image/png;base64,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" data-original="{{= value.userPic}}" alt=""/></div>
                    <div class="info_box">
                      <div class="name">
                        <span>{{= value.shopName}}</span>
                        <span class="level {{= value.shopClassName}}"></span>
                      </div>
                      <div class="ins">{{= value.tags[0]}}{{= value.tags[1]?' | '+value.tags[1]:''}}</div>
                    </div>
                    <div class="btn">进店</div>
                  </a>
                </div>
                <ul class="story_shop_list">
                  {{~value.data:v:k }}
                  <li>
                    <a href="{{= it.site.s_mbook}}{{= v.shopId}}/{{= v.itemId}}">
                      <div class="img_box">
                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATsAAAG5CAMAAADGemMmAAAAZlBMVEUAAADu7u7v7+/v7+/v7+/v7+/v7+/v7+/v7+/u7u7u7u7w8PDx8fH09PT////u7u67u7u+vr7p6enr6+vBwcHExMTc3NzW1tbR0dHj4+PLy8vm5ubZ2dnOzs7g4ODT09PGxsbIyMiTSnFeAAAAD3RSTlMA9uro28/CvJ9qW0YkGALMhi6yAAAJTElEQVR42uzYSWpDQRBEwdY8+Et9/9saGyOMwZDqVS7iHSHooajxartdz8f9buq/dvvj+Xrbxp+e99NU1un+HL96XKbyLo/x6uMw9U6Hjxfd1Lv94D2cuvc7fF/bp7dupcvXh3GfWuk+xjCcrHUaY5taaxu3qbVu4zq11nWcp9Y6j+PUWsexn1prPyydVtuNqdXYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLohdUezYBbErih27IHZFsWMXxK4oduyC2BXFjl0Qu6LYsQtiVxQ7dkHsimLHLojdJ7vmuuQmDIPRR9An3+/A+79kBwKmoXahLU12dnL+bGaTEPsgybaSL8TH3cfdBT7uvhAfdx93F/i4+0J83H3cXeDj7gvxzdylSK/i27mzcPQivp07AWR6Dd/OHWmAXsPL3Fl2gl5BACSJSC/gZXE3gAudImyhfyMAw8DIkv43N7uTg+8+xVB0ghgY4ER/jdMKK/oFoXeHO5mhspkfMYKkNgGInbcPzrmcp23emf6WwgAwmgFAonNkcXoarlu+353XmBlpqdSO2iTAUJuMZwb6LdLpyZX2Uz7DEtlzd9EMQeOBo0vc6k7GkoaJsRIXd5ralN9MxygAYGf88sBQF2NdYMxYamIxkNAAQiqi5cwb61ZrKrgAXInRm90VzdhZ65QCArURgKUuJgcr5wuczCRmrIzND7EMMAA0/HobFCrKLGrLeeDd705o/IxaqgZ+I+g0F6mdbMbQglw/N02HqhiTKb6UtCehGtxMfhqLwwoHW6TbhI1Lxpxwd87KZVUMxmcASizz6o5DSAFMNjA4y34ha7m3apuk2y6mnmJFjliZkrAAoC01KFkBY4qbSbEV25HOuL/eCVPkGm2FZnyv3AnGRrDdlbidPhZmS/pQ153n2mCC1pMzkqiomqxttqiewJJmhresFRXeEsgAw2/rlEpVXNsdN2a7adL16r5d70RezE2DpwNlLPQgr0PlzZh9rzuwqPHgqUPUp9tez0ChI2YTmne1AFRrn6kUH6TWtHZyvUhZRgPUMb/TnagpMoCpywBNJ1iAvRTFOuNlNQrE9QJ1wroVobV8aaW0oI1aTeTyzoc7UxPEvNWdgakDD9TFLu5E8ZJ6OGBHpbq58bXKQSlWdnkhtRDqsXFLdABAppQfQeyDQrZl8Vve6S5xNRZgqYsD+0FjDZ4jUng74okt+TZ3BSuBLABJR3zKDKgimzUZ8OTWNUYgMABtJfmrh8D73XmNfR66Xe6E98UkhQfKHkqRVszY0dm5HMbRiTptv+bdSiHTugNSA8yrnFLoCQ0gkVjj2U6PxgOUeJc7WQIAV09RCpIaTNjgbAQd8IHXE5K1aE1E4eEhPtQOkai0N5KlkIO2eeTF0XEMljIyAOeVmP06ACkCgc64150w1o2YCaJWDFbd2Kzbrk5gRrFmVuq6E4AStfS3QlykAABqCnlS4HjoNyTBZkn3Mda137zBndqLz/7pmLpdA5OB846karnT++Z4pL67tZhC+/YqDyQ5qw+A2ROH3uCucG22me00IbqVo66ShujEnem6i7u7+OROluRGBhhGSCKvVGp+vNnOOPF59zLRZW7qBWQAPA/H7u4cdRnBiYEp0p+7s5swJYmE3N3tXjgYKUNex4VJ/toCQ9mbCzvlDe724+x4Je4ikClqAIOkLs0yppG3nAV4iZ/y/EIpxOMvD27WyIezYc3yBub1ObsjUe8ca+rhgEgkp5q4HcFM3bijEQ8U2c4uUQM6yfmPaWyaJT3z/l5A2rvkub+SMqb96BAENbHNI36A35ZF1uM0al7ilxoEDGsDNNIB3w4vrwBL17jfnQJQ6s0dbREi+uTyIGjH7dWG0f0yTDfn4Sc6IHp944xgAtr9GCMbLcip9vjPudddLdTbsKLCDu9jKtileNXbSZh6pRNir09umx35PqaeEc+5351/vnHSKlRY7M0lRxUxYcYdNQm+mj6xV/gLwDaSvlzCIq4uFfe78wpQ5djaXtUFufpk2Ea/hK18Uqevhkv/FzsSikgUvp6GGepN389aQKfG3KL3fustjtCDOOYKY4bT879GSdeIvflOUJi57qNIOud+d0ZrezrIGFuDE4Ni1rk89KbkFMCW/pnoggbAdD/3uouSbsEMIQRnJN1EUon+P9/v93e/4ePuC/Fx93F3gY+7H+zQIQEAAADDoP6tX+FyAiIQ4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3AX4s7dwV2IO3cHdyHu3B3chbhzd3A3duiQAAAAgGFQ/9avcDkBEQhx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uAtx5+7gLsSdu4O7EHfuDu5C3Lk7uFs7dpKCUBBDUfT9vquq7H+3iqiIIKQyMYN7lnAJISQR2tHOgXaJ0I52DrRLhHa0c6BdIrSjnQPtEqEd7RxolwjtaOdAu0RoRzsH2iVCO9o50C4R2tHOgXaJ0I52DrRLhHa0c6BdIrSjnQPtEqEd7f5BgyFm0GiIGTUbYmathphVuyFm12GIOVQMMUVaDBGLpNMQcUpqm6Hf1nRXJ0OvqerhMvS69HQxeX2mS2+Vnddjq/rQTk4Vr+Vs+lKOfZ1HXlK/DeO87kfRyw1VHOq9JsUqNQAAAABJRU5ErkJggg==" data-original="{{= v.imgUrl}}" alt=""/>
                      </div>
                      <div class="title">{{= v.itemName}}</div>
                      <div class="price"><span>￥</span><span>{{= +v.price}}</span></div>
                    </a>
                  </li>
                  {{~}}
                </ul>
              </li>
              {{~}}
            </ul>
          </div>
          {{~}}
        </div>
      {{?? data.appDisplay == "pm"}}
        {{? data.showStyle == 3 }}

        {{??}}
          <!-- book-list -->
          <div class="book-list">
            <!-- Swiper -->
            <div class="swiper-container book-list-swiper{{= it.index+i}}" data-cl=".book-list-swiper{{= +it.index+i}}">
              <div class="swiper-wrapper">
                {{? data.data.length > 0 }}
                {{~data.data[0].data:val:index }}
                <div class="swiper-slide">
                  <a href="{{= it.site.mpm}}{{=val.itemId}}">
                    <div class="box">
                      <div class="img_box">
                        <img src="{{=val.imgUrl}}" onerror="this.style.width=0;" alt="">
                        <div class="num">{{= val.bidNum}}次出价</div>
                      </div>
                      <div class="title">{{=val.itemName}}</div>
                      <div class="price">
                        <i>{{= val.pmprice.n}}</i><span class="s">￥</span><span class="v">{{= +val.pmprice.c}}</span>
                      </div>
                    </div>
                  </a>
                </div>
                {{~}}
                {{?}}
              </div>
            </div>
          </div>
        {{?}}
      {{?}}
    {{?? data.style == 6 }}
        <!-- 猜你喜欢 -->
    {{?? data.style == 7 }}
      <!-- 书单 -->
      <!-- tuijina_list -->
      <div class="tuijina_list">
        <!-- Swiper -->
        <div class="swiper-container tuijina_list_swiper tuijina_list_swiper{{= it.index+i}}" data-cl=".tuijina_list_swiper{{= +it.index+i}}">
          <div class="swiper-wrapper">
            {{~data.data:val:index }}
            <div class="swiper-slide">
              <a href="{{= val.linkUrl}}">
                <div class="box" style="{{= !data.data[0].title && !data.data[0].description ?'padding-bottom: 0;':'' }}">
                  <div class="img_box">
                    <img src="{{= val.imgUrl}}" onerror="this.style.width=0;" alt="">
                  </div>
                  <div class="title" style="{{= !data.data[0].title?'height: 0.2rem;margin: 0;':''}}">{{= val.title}}</div>
                  {{? data.data[0].description }}
                  <div class="desc">{{= val.description}}</div>
                  {{?}}
                </div>
              </a>
            </div>
            {{~}}
            <div class="swiper-slide slide_last">
              <a href="/booklist/">
                <div class="box" style="width:100%;position:relative;background:#fafafa;{{= !data.data[0].title && !data.data[0].description ?'padding-bottom: 0;':'' }}">
                  <div class="img_box" style="width:100%;background:none;"></div>
                  <div class="title" style="{{= !data.data[0].title?'height: 0.2rem;margin: 0;':''}}"></div>
                  {{? data.data[0].description }}
                  <div class="desc"></div>
                  {{?}}
                  <div class="showBookList">查看全部{{= data.count}}个书单</div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    {{?? data.style == 8 }}
      <!-- 拍卖专场 -->
      <!-- special_list -->
      <div class="special_list">
        <!-- Swiper -->
        <div class="swiper-container special_list_swiper special_list_swiper{{= it.index+i}}" data-cl=".special_list_swiper{{= +it.index+i}}">
          <div class="swiper-wrapper">
            {{~data.data:val:index }}
            <div class="swiper-slide">
              <a href="{{= it.site.mpm}}special/{{=val.specialAreaId}}">
                <div class="box">
                  <div class="title">{{=val.name}}</div>
                  <div class="inner">
                    {{~val.data:name:imgI }}
                    <div class="img_box">
                      <img src="{{=name.imgUrl}}" onerror="this.style.width=0;" alt="">
                    </div>
                    {{~}}
                  </div>
                  <div class="bottom clearfix">
                    <span>{{=val.time}}</span>
                    <span>{{=val.num}}件拍品</span>
                  </div>
                </div>
              </a>
            </div>
            {{~}}
          </div>
        </div>
      </div>
    {{?}}
    {{? data.showMoreType == "1" && data.style < 9}}
    <!-- change_box -->
    <div class="change_box">
      <div class="box"><a href="{{= data.showMoreUrl}}">更多 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoBAMAAAB+0KVeAAAAG1BMVEUAAAA3WZpAgL82WZo3Wps7XZs3WZo2WJk2WJmVvPRoAAAACHRSTlMArATvMylhcYgfyM8AAAAySURBVCjPYxhZgBWbYIYQFsHgRgVMQRYLbEqd6aeUraOAgEqEmbRXiAglwuHJyjCsAQC4zQsR0bEKKAAAAABJRU5ErkJggg==" alt=""></a></div>
    </div>
    {{?}}

  {{~}}
  </script>
