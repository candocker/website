  <script id="bookList_box_tmpl" type="text/x-dot-template">
  <div class="bookList">
  {{~it.list:data:i }}
    <div class="box">
      <a href="{{= data.linkUrl}}">
      <div class="img_box">
        <img class="lazy" src="data:image/png;base64,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" data-src="{{= data.imgUrl}}" alt="">
      </div>
      <div class="inner">
        {{? data.title }}
        <div class="title">{{= data.title}}</div>
        {{?}}
        {{? data.description }}
        <div class="desc">{{= data.description}}</div>
        {{?}}
        <div class="footer">
          <div class="left">
            <span></span>{{= data.apv}}阅读
          </div>
          <div class="right">
            <ul class="likeInfo">
              {{? data.likeInfo }}
              {{~data.likeInfo.recentUserPic:val:index }}
              <li><img src="{{=val}}" alt=""></li>
              {{~}}
              {{?}}
            </ul>
            {{? data.likeInfo &&  data.likeInfo.myLike }}
            <div class="num active fabulous" data-activityUrl="{{= data.linkUrl}}">
              <span><i>{{= data.likeInfo.likeNum || 0}}</i>人</span>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAoxJREFUWAntlr1rU1EYxpPr1RQimK2C0NLiIjoEXLWTg+DcpQ2BDEkqBYuIDo3/gIN0cciXxKGKhC4Org0ogm51cErQ1kXrWNA0QRN/b7xHLoWce3NvpBHOgXPPeT/O+z73OZ+RiCmGAcOAloGo1uph7Pf7VrVavdPr9fK4TlN3LMtaz2azrz2G+jaHAlgqlR6RafVIth7ytXw+3ziiDyRagUYxqFKpXKC5Sf0Ja4vxePxMNBp9gCwxH1LHUgIDZFrTILAA9Zgp3UqlUgeJRKKAfEhN1mq1qXEgDASQtSdLY0kA0N9UQNrtdgJ5inqQyWQOlT5MGwggG+MKSWdgai+Xy71RADqdznWn/07pwraBAMLQspP4GSD7LhA3nP5Lly5Ud2SA9Xr9FBkXnaxPVXb0JwCuGBwbQO0xUy6XkwDYoM4KEDbGOZourJ2mfc9RIvZBYVdfxf5KBOyf/mg9v3t43GaZ7AzztIcZHP0mrFxUPvQluTAY4Wj5y57I2NT0Sn9OdD7KHPFkk10a5qsFqMABZl4CwJD86VvkFdu2v7iDkmiDWnLrvPrE+6hyDPPVAlSDOOcGU1YsFuWW+KFkZZcW3b5b9tPnJvJ0G3mTeEYcs4MBGJZQw+B/y6DcPAKeo+mX7ieObYp5+Zx1gGmPp2MD2O12FxyAHyaOQQ7ok9wg9wQYU/xi4gByVa4DMAm4/Vgs9kQH0NdVpwswiq3RaNitVqvAHXzfGXcrnU5/18X45wBhyuLZNg1rC81m8y7yZQGEXOD+ruvAic3rPbhLwMFbUJz5c1kzgypywPKNGGu8AZ/7Ga/dxQTKEuSzn0AaH3kBfSXWNu0az7TzfsFpYhqTYcAwYBgwDEwKA78BAObOae4+2yoAAAAASUVORK5CYII=" alt="">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAehJREFUWAntlj1LA0EQhmfW5DCgoBFRENSAjcQiP8DSH2BjoYJ6hWgQFLHTxspORLBPkBSSzsJWCxtt1Mbaj8poMB8giCY3jmBCPHN7uTXgCZsmN++7s/PkveSyAPqlE9AJSBNAqeti0uamSO7urAHBAiH0ANAVQsu6mcudurQ2bP8KMNHZsUdkLdmmWS0BMTabzZ/YdKVSKHVx035X1zDDxev0i3KJtuvoSpIyYNkqzfDEuv0IFEsMDrYqEdma6g6wrflREvE3DmDqh/ElEGLRvL19dfK96EqAyXB4lCH7nQYx/bmT51VXAgSwpmWDkPBI5nvxPAOmo1GDCCakQwxqGqD0MZPo7ojBO+0wzMAn0PjZeV/28uLtNL7YJgNEwBuZX+PdQRBXzaf8VY327TLwrbIXJStFANGKHOrtgWB7u1Gpnd4JKOLk2fQIlijF2ohNr5bSW8y3sgpX7WjyhdsMKWCTWZS204BKsdU06QRrwlC61Am6xcb/FGXZmj9PkM9FGV8D8sHi2t+ASId+BswII5T0LaAQuDyTybz4EhARN+aeC2kZ3Kcn/xUj3rlt4NXnx8ojIkyaucJWI71SQN5onj/pfSMbSdZYvM8DH2KPBYiVcMAYMnPFA8l6bekEdAI6AZ3Af0rgA4vccPbYfTvGAAAAAElFTkSuQmCC" alt="">
            </div>
            {{??}}
            <div class="num fabulous" data-activityUrl="{{= data.linkUrl}}">
              <span><i>{{= data.likeInfo && data.likeInfo.likeNum ? data.likeInfo.likeNum:0}}</i>人</span>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAoxJREFUWAntlr1rU1EYxpPr1RQimK2C0NLiIjoEXLWTg+DcpQ2BDEkqBYuIDo3/gIN0cciXxKGKhC4Org0ogm51cErQ1kXrWNA0QRN/b7xHLoWce3NvpBHOgXPPeT/O+z73OZ+RiCmGAcOAloGo1uph7Pf7VrVavdPr9fK4TlN3LMtaz2azrz2G+jaHAlgqlR6RafVIth7ytXw+3ziiDyRagUYxqFKpXKC5Sf0Ja4vxePxMNBp9gCwxH1LHUgIDZFrTILAA9Zgp3UqlUgeJRKKAfEhN1mq1qXEgDASQtSdLY0kA0N9UQNrtdgJ5inqQyWQOlT5MGwggG+MKSWdgai+Xy71RADqdznWn/07pwraBAMLQspP4GSD7LhA3nP5Lly5Ud2SA9Xr9FBkXnaxPVXb0JwCuGBwbQO0xUy6XkwDYoM4KEDbGOZourJ2mfc9RIvZBYVdfxf5KBOyf/mg9v3t43GaZ7AzztIcZHP0mrFxUPvQluTAY4Wj5y57I2NT0Sn9OdD7KHPFkk10a5qsFqMABZl4CwJD86VvkFdu2v7iDkmiDWnLrvPrE+6hyDPPVAlSDOOcGU1YsFuWW+KFkZZcW3b5b9tPnJvJ0G3mTeEYcs4MBGJZQw+B/y6DcPAKeo+mX7ieObYp5+Zx1gGmPp2MD2O12FxyAHyaOQQ7ok9wg9wQYU/xi4gByVa4DMAm4/Vgs9kQH0NdVpwswiq3RaNitVqvAHXzfGXcrnU5/18X45wBhyuLZNg1rC81m8y7yZQGEXOD+ruvAic3rPbhLwMFbUJz5c1kzgypywPKNGGu8AZ/7Ga/dxQTKEuSzn0AaH3kBfSXWNu0az7TzfsFpYhqTYcAwYBgwDEwKA78BAObOae4+2yoAAAAASUVORK5CYII=" alt="">
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAehJREFUWAntlj1LA0EQhmfW5DCgoBFRENSAjcQiP8DSH2BjoYJ6hWgQFLHTxspORLBPkBSSzsJWCxtt1Mbaj8poMB8giCY3jmBCPHN7uTXgCZsmN++7s/PkveSyAPqlE9AJSBNAqeti0uamSO7urAHBAiH0ANAVQsu6mcudurQ2bP8KMNHZsUdkLdmmWS0BMTabzZ/YdKVSKHVx035X1zDDxev0i3KJtuvoSpIyYNkqzfDEuv0IFEsMDrYqEdma6g6wrflREvE3DmDqh/ElEGLRvL19dfK96EqAyXB4lCH7nQYx/bmT51VXAgSwpmWDkPBI5nvxPAOmo1GDCCakQwxqGqD0MZPo7ojBO+0wzMAn0PjZeV/28uLtNL7YJgNEwBuZX+PdQRBXzaf8VY327TLwrbIXJStFANGKHOrtgWB7u1Gpnd4JKOLk2fQIlijF2ohNr5bSW8y3sgpX7WjyhdsMKWCTWZS204BKsdU06QRrwlC61Am6xcb/FGXZmj9PkM9FGV8D8sHi2t+ASId+BswII5T0LaAQuDyTybz4EhARN+aeC2kZ3Kcn/xUj3rlt4NXnx8ojIkyaucJWI71SQN5onj/pfSMbSdZYvM8DH2KPBYiVcMAYMnPFA8l6bekEdAI6AZ3Af0rgA4vccPbYfTvGAAAAAElFTkSuQmCC" alt="">
            </div>
            {{?}}
          </div>
        </div>
      </div>
      </a>
    </div>
  {{~}}
  </div>
  </script>
