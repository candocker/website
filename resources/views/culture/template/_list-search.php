<script type="text/template" id="template_search">< div class = "search_box" > <div class = "search_box_select" > <%
    if (model && model.area == 'shop') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >在售 < %
        } else if (model.value == 1) { % >已售 < %
        } else if (model.value == 2) { % >全部 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } else if (model && model.area == 'pm') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >已结束 < %
        } else if (model.value == 1) { % >拍品名称 < %
        } else if (model.value == 2) { % >拍品昵称 < %
        } else if (model.value == 3) { % >拍品作者 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } else if (model && model.area == 'dianpu') { % ><a href = "javascript:;"class = "option"data - value = "<%=model.value%>" > <%
        if (model.value == 0) { % >店铺名称 < %
        } else if (model.value == 1) { % >店主昵称 < %
        } % ><span class = "s_icon_down arrow" > </span></a > <%
    } % ></div>
<div class="search_box_input search_box_input2">
    <form action="javascript:;">
        <input type="search" value="<%=model.inputVal%>">
        <%if(model && model.area == 'shop'){%>
        <span id="tipText">请输入书名或作者进行查询</span > <%
} else if (model && model.area == 'pm') { % ><span id = "tipText" > 拍品名称、拍品作者、拍主昵称 < /span>
        <%}else if(model && model.area == 'dianpu'){%>
        <span id="tipText"><%=model.value&&model.value==1?'请输入店主昵称进行搜索':'请输入店铺名称进行搜索'%></span > <%
} % ><i class = "iconfont icon-guanbi2"style = "display:none;" > </i></form > </div>
<a href="javascript:;" class="btn_cancel">取消</a ></div>
<div class="search_box_option" style="display:none">
<span class="s_icon_up"></span > <%
if (model && model.area == 'shop') { % ><a href = "javascript:;"class = "option"data - value = "0" > 在售 < /a>
<a href="javascript:;" class="option" data-value ="1">已售</a > <a href = "javascript:;"class = "option"data - value = "2" > 全部 < /a>
<%}else if(model && model.area == 'pm'){%>
<a href="javascript:;" class="option" data-value ="1">拍品名称</a > <a href = "javascript:;"class = "option"data - value = "2" > 拍品作者 < /a>
<a href="javascript:;" class="option" data-value ="3">拍主昵称</a > <a href = "javascript:;"class = "option"data - value = "0" > 已结束拍卖 < /a>
<%}else if(model && model.area == 'dianpu'){%>
<a href="javascript:;" class="option" data-value ="0">店铺名称</a > <a href = "javascript:;"class = "option"data - value = "1" > 店主昵称 < /a>
<%}%></div > </script>
<script type="text/template" id="template_history_con">< %
    if (model && model.history && model.history.length) { % ><div id = "search_history" > <div class = "search_history" > <ul > <li > 历史搜索 < /li></ul > <ul class = "history_item" > <%model.history && $.each(model.history,
        function(k, v) { % ><li data - key = "<%=v%>" > <span class = "icon_search s_icon_his" > </span><%=v%></li > <%
        }); % ></ul></div > <div class = "btn_clear_history" > 清空历史搜索 < /div></div > <%
    } % ></script>
<script type="text/template" id="template_ass_con">< %
    if (model && model.ass && model.ass.length) { % ><div class = "search_ass"id = "search_ass" > <ul class = "ass_item" > <%model.ass && $.each(model.ass,
        function(k, v) { % ><li data - key = "<%=v%>" > <span class = "s_icon_ass" > </span><%=v%></li > <%
        }); % ></ul></div > <%
    } % ></script>
