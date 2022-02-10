@extends('layouts.culture')
@php
$currentCategory = $datas['currentCategory'];
@endphp
@section('subnav')
<div class="mainMenu">
    <div class="subnav">
        <div class="hotsearch">
            <span class='font2_2'>当前位置：</span>
            <a href='/'>首页</a>&nbsp;&gt;&nbsp;
            <a href='/listinfo'>书法大全</a>&nbsp;&gt;&nbsp;
            @if ($currentCategory['parent_code'])
            <a href='{{$currentCategory->parentElem->getUrl()}}'>{{$currentCategory->parentElem['name']}}ooo</a>&nbsp;&gt;&nbsp;
            @endif
            <a href='{{$currentCategory->getUrl()}}'>{{$currentCategory['name']}}</a>
        </div>
    </div>
    <div class="clear"></div>
</div>
@endsection
@section('main')
<div id="mainBody">
    <div class="areaL" id="newsList">
        <div class='pageBox'>
            <dl>
                <dt>书法篆刻</dt>
                <dd class='listBox2'>
                    <ul>
                        @foreach ($datas['lists'] as $pData)
                        <li>
                            <div class='a'>
                                <div class='img'>
                                    <a href='{{$pData->getUrl()}}' class='font1_1'>
                                        <img src='{{$pData->pointAttachmentUrl('thumb')}}' alt="{{$pData['name']}}" title="{{$pData['name']}}" onerror="if(this.value!='1'){this.value='1';this.src='{{$commonAssetUrl}}/culture/m/img/97a63-8488.gif';}" /></a>
                                </div>
                            </div>
                            <div class='b'>
                                <h4>
                                    <a href='{{$pData->getUrl()}}' class='font1_1' style=''>
                                        <img src='{{$commonAssetUrl}}/culture/img/4e102-3855.gif' alt='置顶' title='置顶' style='margin-right:5px;' />{{$pData['name']}}</a></h4>
                                <div class='clear'></div>
                                <div class='note'>{{$pData['description']}}&nbsp;
                                    <a href='{{$pData->getUrl()}}' class='font2_2' >阅读全文&gt;&gt;</a></div>
                                <div class='clear'></div>
                                <div class='addi'>&nbsp;2020-3-26 7:14:57</div>
                                <div class='mark'></div>
                            </div>
                            <div class='clear'></div>
                        </li>
                        <div class='clear'></div>
                        @endforeach
                    </ul>
                    <div class='clear'></div>
                    <center>
                        <table align='center' cellpadding='0' cellspacing='0' class='navBox'>
                            <tr>
                                <td>
                                    <div class='navBtn font1_2'>第1/103页&nbsp;&nbsp;每页15条,共1537条记录</div>
                                    <div class='navBtn'>
                                        <img src='{{$commonAssetUrl}}/culture/img/71d85-4775.gif' border='0' style='margin-top:5px;' alt='第一页' class='navBtnD' /></div>
                                    <div class='navBtn'>
                                        <img src='{{$commonAssetUrl}}/culture/img/0fb2c-1558.gif' border='0' style='margin-top:5px;' alt='上一页' /></div>
                                    <div class='navBtn fontNav2_2'>1</div>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_2.html'>2</a>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_3.html'>3</a>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_4.html'>4</a>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_5.html'>5</a>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_6.html'>6</a>
                                    <a class='navBtnPointer fontNav_2' href='../news/list_5_7.html'>7</a>
                                    <a href='../news/list_5_2.html' class='navBtnPointer fontNav_2'>
                                        <img src='{{$commonAssetUrl}}/culture/img/5c95e-7059.gif' border='0' style='margin-top:5px;' alt='下一页' /></a>
                                    <a href='../news/list_5_103.html' class='navBtnPointer fontNav_2'>
                                        <img src='{{$commonAssetUrl}}/culture/img/3b56b-3493.gif' border='0' style='margin-top:5px;' alt='最后页' /></a>
                                    <div class='navBtn'>

                                        <select onchange="if(this.value!=''){ListPageHref(this.value,'../news/list_5_[page].html');}" class='adClass'>
                                            <option value=''></option>
                                            <option value='1'>1</option>
                                            <option value='102'>102</option>
                                            <option value='103'>103</option></select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </center>
                </dd>
            </dl>
        </div>
        <div class='clear'></div>
    </div>
    @include('culture.modules._right', ['currentCategory' => $currentCategory])
    <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="height10"></div>
@endsection
