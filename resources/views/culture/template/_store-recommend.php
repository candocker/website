  <script id="recommend_list" type="text/x-dot-template">
    {{? it.list.length > 0 }}
    <!-- line_gray -->
    <div class="line_gray">
      <div class="box"></div>
    </div>
    <!-- recommend_area -->
    <div class="area recommend_area">
      <div class="title">
        <span style="font-weight: bold;">为您推荐</span>
        <!-- <a href="">更多<img src="../../modules/index/images/icon_right_blue@2x.png" alt=""></a> -->
      </div>
    </div>
    {{?}}
    <!-- recommend_list -->
    <div class="recommend_list">
      <ul>
        {{~it.list:data:i }}
        <li>
          <a href="{{= data.mobileUrl}}">
            <div class="img_box">
              <img class="recommend_lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAu4AAALuCAMAAADGw2P4AAAAQlBMVEUAAADu7u67u7vr6+u/v7/j4+Pm5ubExMTc3NzOzs7KysrR0dHBwcHo6OjZ2dnU1NTV1dXe3t7GxsbX19fg4ODIyMiL1mNMAAAAAXRSTlMAQObYZgAAFqBJREFUeNrs0gEBAAAIwyDtX/pBBhm4hwzdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN3HLh0IAAAAAAjytx7kYogR3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdGdGdEd0Z0Z0R3RnRnRHdiV06EAAAAAAQ5G89yMXQiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozozojujOjOiO6M6M6I7ozELh0TAQCDABC7CigT/rUi5BMN0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q3QnRnRDdCdGdEN0J0Z0Q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" data-original="{{= data.imgMiddle}}" alt="">
            </div>
            <div class="title">{{= data.itemName}}</div>
            <div class="middle_box clearfix">
              <div class="phase">{{= data.quality}}</div>
              <div class="address">{{= data.area}}</div>
            </div>
            <div class="price">
              <span>￥</span><span>{{= +data.price}}</span>
            </div>
          </a>
        </li>
        {{~}}
      </ul>
    </div>
    <!-- no-more -->
    <div class="no-more">
      <div class="inner">- 没有更多 -</div>
    </div>
  </script>