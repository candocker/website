@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
           <!-- Content  
====================================================== -->
<section class="uix-spacing--s">
    <div class="container uix-entry__content uix-list uix-list--normal uix-table uix-table--bordered">
            <div class="row">
                <div class="col-12">
                        <h1>标题 one</h1>
                        <h2>标题 two</h2>
                        <h3>标题 three</h3>
                        <h4>标题 four</h4>
                        <h5>标题 five</h5>
                        <h6>标题 six</h6>
                        <hr>
                        <h1 class="uix-spacing--no">标题 one ( no spacing )</h1>
                        <h1 class="uix-typo--style-normal">标题 one ( normal )</h1>         
                        <h1 class="uix-typo--style-uppercase">标题 one ( uppercase )</h1>
                        <h1 class="uix-typo--style-bold">标题 one ( bold )</h1>                           
                        <h1 class="uix-typo--style-italic">标题 one ( italic )</h1>
                        <h1 class="uix-typo--style-noitalic">标题 one ( no italic )</h1> 
                        <h1 class="uix-typo--style-underline">标题 one ( underline )</h1> 
                        <h1 class="uix-typo--style-tiny">标题 one ( tiny )</h1>
                        <h1 class="uix-typo--color-primary">标题 one ( color primary )</h1>
                        <h1 class="uix-typo--color-highlight">标题 one ( color highlight )</h1>
                        <h1 class="uix-typo--color-sub">标题 one ( color sub )</h1>
                        <h1 class="uix-typo--color-white">标题 one ( color white )</h1>
                        <p class="uix-typo--h5 uix-typo--style-normal">GB2312 标准共收录 6763 个汉字，其中一级汉字 3755 个，二级汉字 3008 个；同时收录了包括拉丁字母、希腊字母、日文平假名及片假名字母、俄语西里尔字母在内的 682 个字符。GB2312 的出现，基本满足了汉字的计算机处理需要，它所收录的汉字已经覆盖中国大陆 99.75% 的使用频率。对于人名、古汉语等方面出现的罕用字，GB2312 不能处理，这导致了后来 GBK 及 GB18030 汉字字符集的出现。</p>
                        <blockquote>
                            <p>段落文字.</p>
                        </blockquote>
                        <p>其他参考:</p>
                        <blockquote>
                            <p>文章1984年出生于陕西省西安市。上高三的时候，文章被保送到四川师范大学艺术学院学习影视表演，但是他并未进入这个学校，而是决心去北京学习。在填写大学志愿之前，文章专门去北京考察了中国两大艺术院校—北京电影学院和中央戏剧学院。回到西安之后，文章不顾父母阻拦，将大学志愿从一本到专科总共八个志愿全部填成中央戏剧学院。2002年文章被中央戏剧学院表演系录取。<cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                        </blockquote>
                        <h2>表格</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <th width="150px">项目列表</th>
                                    <th>描述</th>
                                </tr>
                                <tr class="odd">
                                    <td><a href="http://john.do/">名称</a></td>
                                    <td>内容介绍在这里。</td>
                                </tr>
                                <tr class="even">
                                    <td><a href="http://tommcfarlin.com/">名称</a></td>
                                    <td>内容介绍在这里。</td>
                                </tr>
                                <tr class="odd">
                                    <td><a href="http://jarederickson.com/">名称</a></td>
                                    <td>文章1984年出生于陕西省西安市。上高三的时候，文章被保送到四川师范大学艺术学院学习影视表演，但是他并未进入这个学校，而是决心去北京学习。在填写大学志愿之前，文章专门去北京考察了中国两大艺术院校—北京电影学院和中央戏剧学院。回到西安之后，文章不顾父母阻拦，将大学志愿从一本到专科总共八个志愿全部填成中央戏剧学院。</td>
                                </tr>
                            </tbody>
                        </table>      
                    <ul>
                        <li>列表项</li>
                        <li>列表项</li>
                        <li>列表项</li>
                    </ul>    
                    <ol>
                        <li>列表项</li>
                        <li>列表项</li>
                        <li>列表项</li>
                    </ol>
                    <p class="uix-typo--dropcap">文章1984年出生于陕西省西安市。上高三的时候，文章被保送到四川师范大学艺术学院学习影视表演，但是他并未进入这个学校，而是决心去北京学习。在填写大学志愿之前，文章专门去北京考察了中国两大艺术院校—北京电影学院和中央戏剧学院。回到西安之后，文章不顾父母阻拦，将大学志愿从一本到专科总共八个志愿全部填成中央戏剧学院。2002年文章被中央戏剧学院表演系录取。<a href="#">链接文字</a></p>
                    <p>另一个段落</p>
                    <p>大学志愿从一本到专科总共八个志愿全部填成中央戏剧学院。2002年文章被中央戏剧学院表演系录取。</p>
<pre>
$: > 系统开始...
$: > 内存: 256kb
$: > 媒体扫描数             ------------ 100%
$: > 载入进度               ------------ 100%
</pre>                        
<pre class="uix-precode"><label>CSS</label><code>#wrapper {
  padding:5%;
  margin:0 auto;
}</code>
</pre>                         
<pre class="uix-precode uix-precode--nolebel"><code>#wrapper {
  padding:5%;
  margin:0 auto;
}</code>
</pre>                                    
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection
