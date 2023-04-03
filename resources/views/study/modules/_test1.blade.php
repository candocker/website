<style>
/* 等分布局 */

body,p{margin: 0;}

.parentWrap{
    background-color:red;
    overflow: hidden;
}
.parent{
    font-size: 0;
    margin-right: 20px;
    overflow: hidden;
}


.child {
    font-size: 16px;
    height: 100px;

    /* 缺点：需要设置垂直对齐方式vertical-align，则需要处理换行符解析成空格的间隙问题。IE7-浏览器不支持给块级元素设置inline-block属性，兼容代码是display:inline;zoom:1; */
    /*display:inline-block;
    vertical-align: top;*/

    /*float: left;*/ /* 缺点:结构和样式存在耦合性，IE7-浏览器下对宽度百分比取值存在四舍五入的误差 */
}

.child1 { /* 使用padding来实现子元素之间的间距，使用background-clip使子元素padding部分不显示背景 */
    width: 25%;
    padding-right: 20px;
    box-sizing: border-box;
    background-clip: content-box;
}

.child2 { /* 使用margin实现子元素之间的间距，使用calc()函数计算子元素的宽度 */
    width: calc(25% - 20px);
    margin-right: 20px;
}

.child3 {
    width: 10%;
}
.in { /* 使用margin实现子元素之间的间距，通过增加结构来实现兼容 */
    margin-right: 20px;
    height: 100px;
}


.parenttable{
display: table;
width: calc(100% + 20px);
table-layout: fixed;
}
.childtable{
display: table-cell;
height: 100px;
padding-right: 20px;
}
</style>
<div class="parentWrap">
    <div class="parent" style="background-color: lightgrey;">
        <p class="child child1" style="background-color: lightblue;">1</p>
        <p class="child child1" style="background-color: lightgreen;">2</p>
        <p class="child child1" style="background-color: lightsalmon;">3</p>
        <p class="child child1" style="background-color: pink;">4</p>
    </div>
</div>
<hr />

<div class="parentWrap">
    <div class="parent" style="background-color: lightgrey;">
        <p class="child child2" style="background-color: lightblue;">1</p>
        <p class="child child2" style="background-color: lightgreen;">2</p>
        <p class="child child2" style="background-color: lightsalmon;">3</p>
        <p class="child child2" style="background-color: pink;">4</p>
    </div>
</div>
<hr />


<div class="parentWrap">
    <div class="parent" style="background-color: lightgrey;">
        <div class="child child3" style="background-color: blue;">
            <p class="in" style="background-color: lightblue;">1</p>
        </div>
        <div class="child child3" style="background-color: green;">
            <p class="in" style="background-color: lightgreen;">2</p>
        </div>
        <div class="child child3" style="background-color: orange;">
            <p class="in" style="background-color: lightsalmon;">3</p>
        </div>
        <div class="child child3" style="background-color: red;">
            <p class="in" style="background-color: pink;">4</p>
        </div>
    </div>
</div>
<hr />
<div class="parentWrap">
    <div class="parenttable" style="background-color: lightgrey;">
        <div class="child childtable" style="background-color: blue;">
            <p class="in" style="background-color: lightblue;">1</p>
        </div>
        <div class="child childtable" style="background-color: green;">
            <p class="in" style="background-color: lightgreen;">2</p>
        </div>
        <div class="child childtable" style="background-color: orange;">
            <p class="in" style="background-color: lightsalmon;">3</p>
        </div>
        <div class="child childtable" style="background-color: red;">
            <p class="in" style="background-color: pink;">4</p>
        </div>
    </div>
</div>
