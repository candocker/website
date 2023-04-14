    <h1>这是一个标题</h1>
    <p>这是一个标题：before伪元素在元素之前插入内容。</p>
    <h1>这是一个标题</h1>
    <p><b>注意:</b>仅当 !DOCTYPE 已经声明 IE8 支持这个内容属性</p>




    <div class="pseudo"><p>可以使用:first line伪元素向文本的第一行添加特殊效果。</p></div>
    <div class="psletter"><p>You can use the :first-letter pseudo-element to add a special effect to the first character of a text!</p></div>
    <p class="article">文章中的段落</p>
<div class="psmul">    <p>您可以组合：first letter和：first-line伪元素，为文本的第一个字母和第一行添加特殊效果！</p></div>



    <p><b><a href="/css/" target="_blank">这是一个链接</a></b></p>
    <p><b>注意：</b> a:hover 必须在 a:link 和 a:visited 之后，需要严格按顺序才能看到效果。</p>
    <p><b>注意：</b> a:active 必须在 a:hover 之后。</p>

<div class="select">
    <p >这是一些文字。</p>
    <p>这是一些文字。</p>
    <p><b>注意:</b>对于 :first-child 工作于 IE8以及更早版本的浏览器, DOCTYPE必须已经声明.</p>
</div>

<div class="sfirst">
    <p>我是一个 <i>强壮</i> 的男人. 我是一个 <i>强壮</i> 的男人.</p>
    <p>我是一个 <i>强壮</i> 的男人. 我是一个 <i>强壮</i> 的男人.</p>
    <p><b>注意:</b> 当 :first-child 作用于 IE8以及更早版本的浏览器,  DOCTYPE必须已经定义.</p>
</div>

    <p>一些文字 <q lang="no">段落中的引用</q> 一些文字。</p>
    <p>在这个例子中,:lang定义了q元素的值为lang =“no”</p>
    <p><b>注意:</b> 仅当 !DOCTYPE已经声明时 IE8支持 :lang.</p>


    <form action="demo-form" method="get">
        第一个名字: <input type="text" name="fname" /><br>
        第二个名字: <input type="text" name="lname" /><br>
        <input type="submit" value="提交" />
    </form>

    <p><b>注意:</b>仅当 !DOCTYPE已经声明时 IE8支持 :focus.</p>

