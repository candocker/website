<a name="anchor1"></a>
<div class="custom_border lindBox">
    <div class="custom_head">
        <div class="custom_title"><h2>{{$data['title']}}</h2></div>
        <div class="custom_totop">
            <div class="ico"></div><a href="#top" target="_self">返回顶部</a>
        </div>
    </div>
    <div class="custom_content">
        <div class='content_text'>
            <table border="1" bordercolor="#cccccc" cellpadding="2" cellspacing="1" class="table_bg_xixik" style=" text-align: center; margin: auto; width:90%">
                <tbody>
                    @if (isset($data['theadData']))
                    <tr>
                        @foreach ($data['theadData'] as $theadData)
                        <th colspan="{{$theadData['colspan']}}" style="{{$theadData['style']}}">
                            <a href="{{$theadData['url']}}" title="{{$theadData['name']}}">{{$theadData['name']}}</a>
                        </th>
                        @endforeach
                    </tr>
                    @endif
                    @foreach ($data['infos'] as $pInfo)
                    <tr>
                        @foreach ($data['fields'] as $field)
                        <td colspan="{{$pInfo['colspan']}}">{!!$pInfo[$field]!!}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
