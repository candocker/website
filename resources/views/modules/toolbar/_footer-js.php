<script type="text/javascript">
var ajax_var = {"url":"http:\/\/123.meibp.com\/wp-admin\/admin-ajax.php","nonce":"26d09dbd19"};
var ajaxcomment = {"ajax_url":"http:\/\/123.meibp.com\/wp-admin\/admin-ajax.php","order":"desc","formpostion":"bottom"};
</script>
<script>(function() {
    var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?527ec8f43011d146638a1bb101e9f896": "https://jspassport.ssl.qhimg.com/11.0.1.js?527ec8f43011d146638a1bb101e9f896";
    document.write('');
})();

(function() {
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    } else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();</script>

<script>(function(w, d) {
    var b = d.getElementsByTagName("body")[0];
    var s = d.createElement("script");
    s.async = true;
    s.src = !("IntersectionObserver" in w) ? "http://123.meibp.com/wp-content/plugins/wp-rocket/inc/front/js/lazyload-8.15.2.min.js": "http://123.meibp.com/wp-content/plugins/wp-rocket/inc/front/js/lazyload-10.17.min.js";
    w.lazyLoadOptions = {
        elements_selector: "img",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        skip_invisible: false,
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_load: function(element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids();
                        }
                    }
                }
            }
        }
    }; // Your options here. See "recipes" for more information about async.
    b.appendChild(s);
} (window, document));

// Listen to the Initialized event
window.addEventListener('LazyLoad::Initialized',
function(e) {
    // Get the instance and puts it in the lazyLoadInstance variable
    var lazyLoadInstance = e.detail.instance;

    var observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            lazyLoadInstance.update();
        });
    });

    var b = document.getElementsByTagName("body")[0];
    var config = {
        childList: true,
        subtree: true
    };

    observer.observe(b, config);
},
false);</script>
<script async="" src="http://123.meibp.com/wp-content/plugins/wp-rocket/inc/front/js/lazyload-10.17.min.js"></script>
<script src="http://39.106.102.45/common/asset-third//promotion/js/54bfdc30cf3f9bee9f9130026d7bbf52.js" data-minify="1" defer=""></script>
