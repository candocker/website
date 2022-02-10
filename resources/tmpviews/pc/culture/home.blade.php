@extends('layouts.culture')
@inject('culturePresenter', 'ModuleInfocms\Presenters\CulturePresenter')
@php
$categoryTrees = $culturePresenter->getCategoryTrees();
@endphp

@section('main')
<div class="leftA">
    <div class="turnImg">
        <div id="flashBox"></div>
        <script language='javascript' type='text/javascript' src='<?= config('app.assetUrl'); ?>/culture/js/imgtrun5.js'></script>
        <div class='FocusImgFrame'>
            <div class='FocusImg' id='FocusImg_2'>
                <div class='BigPic' id='BigPic_2'>
                    <a href='news/14099.html' target='_blank'>
                        <img src='<?= config('app.assetUrl'); ?>/culture/img/f9c3f-1632.jpg' style='FILTER: revealTrans(duration=1,transition=23);' galleryimg='no' alt='近代大书法家华世奎楷书《朱柏庐先生家训》' title='近代大书法家华世奎楷书《朱柏庐先生家训》' /></a>
                </div>
                <div class='Number' id='Number_2'>
                    <!-- 小图列表 --></div>
                <div class='TitleBox' id='TitleBox_2'></div>
            </div>
        </div>
        <div id='focusData_01' style='display:none'>
            @for ($i = 1; $i <= 6; $i++)
            <dl>
                <dt>
                    <a href='news/14099.html'>近代大书法家华世奎楷书《朱柏庐先生家训》</a></dt>
                <dd><?= config('app.assetUrl'); ?>/culture/img/f9c3f-1632.jpg</dd></dl>
            @endfor
        </div>
        <script language='javascript' type='text/javascript'>
            OT_FocusPic('318', '452');
            //var pic_width	= 318;	// 宽
            //var pic_height	= 452;		// 高
        </script>
    </div>
    <div class="clear"></div>
</div>
<div class="leftB">
    <div class="newNews">
        <div class="title">
            <span><a href="news/list_new.html">往期回顾</a></span>
        </div>
        <div class='list'>
            <ul>
                @for ($i = 1; $i <= 3; $i++)
                <li>
                    <div class='h_title'>
                        <a href='news/16190.html' title="乾隆帝御笔《元旦试笔》2幅" target='_blank'>乾隆帝御笔《元旦试笔》2幅</a></div>
                    <div class='h_intro'>乾隆帝御笔《元旦试笔二律》2幅 乾隆帝御笔《元旦试笔二律》，清乾隆三十五年（1770）乾隆中期是国家经济最...
                        <a href='news/16190.html' class='font2_2' target='_blank'>阅读全文>></a></div>
                </li>
                @endfor
            </ul>
            <div class='clear'></div>
        </div>
        <div class='slist'>
            <ul>
                @for ($i = 1; $i <= 7; $i++)
                <li>
                    <div class='right font2_1'>&nbsp;1-2</div>
                    <a href='news/list_157.html' class='font2_1'>[书法空间]</a>
                    <a href='news/16137.html' class='font1_1' style='' target='_blank' title="元代张雨行书《次韵天镜上人送柑诗帖》等">元代张雨行书《次韵天镜上人送柑诗帖》等</a></li>
                @endfor
            </ul>
        </div>
    </div>
</div>
<div class="leftC">
    <div class="hotRank">
        <div class="title">
            <h2>热点排行</h2></div>
        <div class="content">
            <ul>
                <li>
                    <div class='img'>
                        <a href='news/10725.html' class='font1_2' target='_blank'>
                            <img src='<?= config('app.assetUrl'); ?>/culture/img/b9af1-7104.jpg' onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" alt="王羲之兰亭集序全文单字高清放大字帖" width='70' height='90' /></a>
                    </div>
                    <div class='info'>
                        <div class='ft'>
                            <a href='news/10725.html' style='font-weight:bold;' class='font1_2' target='_blank' title="王羲之兰亭集序全文单字高清放大字帖">王羲之兰亭集序全文单字高清放大字帖</a></div>
                        <p>王羲之兰亭序书法赏析:兰亭集序全文单字高清放大行书字帖《兰亭序》是王羲之47岁时的书作，记述的是王...&nbsp;
                            <a href='news/10725.html' class='font2_2' target='_blank'>阅读全文>></a></p>
                    </div>
                    <div class='clear'></div>
                </li>
                <li class='line'></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/10725.html' class='font1_2' style='color:#ff0000;' target='_blank' title="王羲之兰亭集序全文单字高清放大字帖">王羲之兰亭集序全文单字高清放大字帖</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/10344.html' class='font1_2' style='color:#ff0000;' target='_blank' title="书法字帖精品《大唐三藏圣教序》高清晰米字格版">书法字帖精品《大唐三藏圣教序》高清晰米字格版</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_145.html' class='font2_1'>[钢笔字帖]</a>
                    <a href='news/4028.html' class='font1_2' style='color:#FF0000;' target='_blank' title="硬笔书法字帖下载《楷书5000常用字》">硬笔书法字帖下载《楷书5000常用字》</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/8224.html' class='font1_2' style='color:#0000ff;' target='_blank' title="怀仁集王羲之《三藏圣教序》高清字帖">怀仁集王羲之《三藏圣教序》高清字帖</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_97.html' class='font2_1'>[楷书字帖]</a>
                    <a href='news/7838.html' class='font1_2' style='color:#008000;' target='_blank' title="欧阳询楷书字帖《九成宫醴泉铭》">欧阳询楷书字帖《九成宫醴泉铭》</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/9785.html' class='font1_2' style='color:#0000ff;' target='_blank' title="王羲之书法字帖《三藏圣教序》高清大图">王羲之书法字帖《三藏圣教序》高清大图</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_145.html' class='font2_1'>[钢笔字帖]</a>
                    <a href='news/10227.html' class='font1_2' style='color:#0000ff;' target='_blank' title="硬笔书法字帖《小学生必背古诗词八十首》">硬笔书法字帖《小学生必背古诗词八十首》</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_97.html' class='font2_1'>[楷书字帖]</a>
                    <a href='news/8273.html' class='font1_2' style='color:#ff0000;' target='_blank' title="《颜真卿楷书习字帖》全书扫描版">《颜真卿楷书习字帖》全书扫描版</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_97.html' class='font2_1'>[楷书字帖]</a>
                    <a href='news/6352.html' class='font1_2' style='color:#0000ff;' target='_blank' title="田英章毛笔楷书《沁园春雪》大图">田英章毛笔楷书《沁园春雪》大图</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/6766.html' class='font1_2' style='' target='_blank' title="赵孟頫行书欣赏《千字文》">赵孟頫行书欣赏《千字文》</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_145.html' class='font2_1'>[钢笔字帖]</a>
                    <a href='news/9957.html' class='font1_2' style='' target='_blank' title="美观实用钢笔行书字帖欣赏 高清大图">美观实用钢笔行书字帖欣赏 高清大图</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_141.html' class='font2_1'>[行书字帖]</a>
                    <a href='news/10091.html' class='font1_2' style='color:#0000ff;' target='_blank' title="唐伯虎行书欣赏《古诗二十七首》">唐伯虎行书欣赏《古诗二十七首》</a></li>
                <li style='width:100%;height:21px;line-height:21px;overflow:hidden;'>
                    <a href='news/list_145.html' class='font2_1'>[钢笔字帖]</a>
                    <a href='news/8698.html' class='font1_2' style='color:#ff0000;' target='_blank' title="庞中华字帖《怎样练习钢笔行书字》">庞中华字帖《怎样练习钢笔行书字》</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class='height5'></div>
<div class='clear'></div>
<div class='imgBox list'>
    <div id='caseMarX' style='overflow:hidden; width:100%; height:100%;'>
        <div style='width:10000px;'>
            <table cellpadding='0' cellspacing='0'>
                <tr>
                    <td id='caseMarX1'>
                        <table cellpadding='0' cellspacing='0'>
                            <tr>
                                <td>
                                    <div class='a'>
                                        <a href='news/14099.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/f9c3f-1632.jpg' alt="近代大书法家华世奎楷书《朱柏庐先生家训》" title="近代大书法家华世奎楷书《朱柏庐先生家训》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>近代大书法家华世奎楷书《朱柏庐先生家训》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/13885.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/73c83-2043.jpg' alt="宋徽宗赵佶瘦金书《女史箴词句》" title="宋徽宗赵佶瘦金书《女史箴词句》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>宋徽宗赵佶瘦金书《女史箴词句》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/13735.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/d716e-2964.jpg' alt="吴玉生行楷书法字帖《怎样写好写快规范字》" title="吴玉生行楷书法字帖《怎样写好写快规范字》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>吴玉生行楷书法字帖《怎样写好写快规范字》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/13456.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/c6707-9992.jpg' alt="欧阳询《九成宫醴泉铭》日本端方(三井)旧藏本" title="欧阳询《九成宫醴泉铭》日本端方(三井)旧藏本" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>欧阳询《九成宫醴泉铭》日本端方(三井)旧藏本</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/12964.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/55998-7383.jpg' alt="张迁碑方笔隶书欣赏《汉张公方表颂初拓本》" title="张迁碑方笔隶书欣赏《汉张公方表颂初拓本》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>张迁碑方笔隶书欣赏《汉张公方表颂初拓本》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/12948.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/ba208-3876.jpg' alt="文征明83岁大字行书《梅花诗》高清大图" title="文征明83岁大字行书《梅花诗》高清大图" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>文征明83岁大字行书《梅花诗》高清大图</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/11137.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/fe97e-2250.jpg' alt="宋琬集二王书法《二妙轩碑》杜诗石刻" title="宋琬集二王书法《二妙轩碑》杜诗石刻" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>宋琬集二王书法《二妙轩碑》杜诗石刻</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/11076.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/6b65f-5262.jpg' alt="优秀英文字帖《实用英文书法字帖》" title="优秀英文字帖《实用英文书法字帖》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>优秀英文字帖《实用英文书法字帖》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/11048.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/9e7a9-3968.jpg' alt="文徵明小楷书法精品《常清净经+老子列传》合册高清彩版" title="文徵明小楷书法精品《常清净经+老子列传》合册高清彩版" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>文徵明小楷书法精品《常清净经+老子列传》合册高清彩版</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/10954.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/08361-4912.jpg' alt="赵孟頫行楷书法字帖赏析《仇锷墓碑铭》" title="赵孟頫行楷书法字帖赏析《仇锷墓碑铭》" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>赵孟頫行楷书法字帖赏析《仇锷墓碑铭》</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/7405.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/14e1c-1210.jpg' alt="祝允明草书手卷欣赏《曹植诗四首》高清大图" title="祝允明草书手卷欣赏《曹植诗四首》高清大图" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>祝允明草书手卷欣赏《曹植诗四首》高清大图</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/10870.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/48dc8-3461.jpg' alt="米芾翰牍九帖之一《来戏帖》大图欣赏" title="米芾翰牍九帖之一《来戏帖》大图欣赏" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>米芾翰牍九帖之一《来戏帖》大图欣赏</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/10725.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/b9af1-7104.jpg' alt="王羲之兰亭集序全文单字高清放大字帖" title="王羲之兰亭集序全文单字高清放大字帖" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>王羲之兰亭集序全文单字高清放大字帖</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/10662.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/187a4-8880.jpg' alt="汉隶精品《合阳令曹全碑》高清大图" title="汉隶精品《合阳令曹全碑》高清大图" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>汉隶精品《合阳令曹全碑》高清大图</div></a>
                                    </div>
                                </td>
                                <td>
                                    <div class='a'>
                                        <a href='news/10344.html' class='font1_1' target='_blank'>
                                            <img src='<?= config('app.assetUrl'); ?>/culture/img/ebd71-6719.jpg' alt="书法字帖精品《大唐三藏圣教序》高清晰米字格版" title="书法字帖精品《大唐三藏圣教序》高清晰米字格版" onerror="if (this.value!='1'){this.value='1';this.src='<?= config('app.assetUrl'); ?>/culture/m/img/97a63-8488.gif';}" />
                                            <br />
                                            <div>书法字帖精品《大唐三藏圣教序》高清晰米字格版</div></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td id='caseMarX2'></td>
                    <td id='caseMarX3'></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class='clear'></div>
<table class="ke-zeroborder" style="border-top:#eaeaea 1px solid;border-right:#eaeaea 1px solid;border-bottom:#eaeaea 1px solid;border-left:#eaeaea 1px solid;margin-:6px;" cellspacing="0" cellpadding="0" width="100%">
		<colgroup span="18" align="center" width="5.5%"></colgroup>
    <tbody>
        <tr>
	            @foreach (['王羲之', '王献之', '颜真卿', '柳公权', '欧阳询', '赵孟頫', '苏轼', '黄庭坚', '米芾', '蔡襄', '怀素', '张旭', '褚遂良', '李邕', '赵佶', '虞世南', '王宠', '邓石如'] as $index => $name)
           <td style="padding-bottom:3px;padding-top:3px;padding-left:3px;padding-right:3px;"><a style="color:#ff0000;" href="http://www.yac8.com/news/?list_topic-27.html" target="_blank">{{$name}}</a></td>
           @endforeach
        </tr>
        <tr>
	            @foreach (['鲜于枢', '文徵明', '祝允明', '董其昌', '张瑞图', '张即之', '傅山', '王铎', '成亲王', '何绍基', '于右任', '沈尹默', '启功', '刘炳森', '田英章', '杨再春', '卢中南', '周慧珺'] as $index => $name)
           <td style="padding-bottom:3px;padding-top:3px;padding-left:3px;padding-right:3px;"><a style="color:#ff0000;" href="http://www.yac8.com/news/?list_topic-27.html" target="_blank">{{$name}}</a></td>
           @endforeach
        </tr>
    </tbody>
</table>
<div class="clear"></div>
<div class='height5'></div>

@foreach ($categoryTrees as $pKey => $pData)
<div class='areaBox'>
    <div class='title1'>
        <h2><a href='{{$pData->getUrl()}}'><strong>{{$pData['name']}}</strong></a></h2>
        <span>
        @foreach ($pData['subInfos'] as $subKey => $subData)
            <a href='{{$subData->getUrl()}}'>{{$subData['name']}}</a>&nbsp;|&nbsp;
        @endforeach
        </span>
    </div>
    <div class='content1'>
        <div class='leftC' style='float:left;'>
            <div class='imgRecom'>
                <div class='title'><h2>图库精选</h2></div>
                <div class='content'>
                    <div class='flash'>
                        <object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0' width='214' height='177' align='middle'>
                            <param name='allowScriptAccess' value='sameDomain' />
                            <param name='allowFullScreen' value='false' />
                            <param name='movie' value='template/def_female//images/flash.swf' />
                            <param name='quality' value='high' />
                            <param name='bgcolor' value='#000000' />
                            <param name='wmode' value='transparent'>
                            <param name='flashvars' value='titles=董其昌78岁行书精品《白羽扇赋》高清单字|赵孟頫行书《潘安仁秋兴赋卷》|赵孟頫行书《欧阳修秋声赋卷》|王守仁49岁大字行书《铜陵观铁船歌》卷|明代沈度52岁“台阁体”书法《敬斋箴》&imgs=upFiles%2FinfoImg%2F202010%2Ftuy3858999%2Ejpg|upFiles%2FinfoImg%2F202008%2Fut36578522%2Ejpg|upFiles%2FinfoImg%2F202008%2Fdrs6652877%2Ejpg|upFiles%2FinfoImg%2F202003%2Fwa23568%2Ejpg|upFiles%2FinfoImg%2F202002%2F1265669321%2Ejpg&links=news/16024.html|news/15909.html|news/15908.html|news/15655.html|news/15593.html' />
                            <embed src='template/def_female//images/flash.swf' flashvars='董其昌78岁行书精品《白羽扇赋》高清单字|赵孟頫行书《潘安仁秋兴赋卷》|赵孟頫行书《欧阳修秋声赋卷》|王守仁49岁大字行书《铜陵观铁船歌》卷|明代沈度52岁“台阁体”书法《敬斋箴》&imgs=upFiles%2FinfoImg%2F202010%2Ftuy3858999%2Ejpg|upFiles%2FinfoImg%2F202008%2Fut36578522%2Ejpg|upFiles%2FinfoImg%2F202008%2Fdrs6652877%2Ejpg|upFiles%2FinfoImg%2F202003%2Fwa23568%2Ejpg|upFiles%2FinfoImg%2F202002%2F1265669321%2Ejpg&links=news/16024.html|news/15909.html|news/15908.html|news/15655.html|news/15593.html' width='214' height='177' align='middle' quality='high' bgcolor='#000000' allowscriptaccess='sameDomain' allowfullscreen='false' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer_cn' wmode='transparent' /></object>
                    </div>
                </div>
            </div>
            <div class='height5'></div>
            <div class='imgRecom'>
                <div class='title'><h2>热门阅读</h2></div>
                <div class='content'>
                    <ul style='margin:0;padding:0;'>
                        @foreach ([1, 2, 3] as $k => $v)
                        <li>
                            <div class='img'>
                                <a href='news/10109.html' title='厦门叶水湖书法作品欣赏' target='_blank'>
                                    <img src='<?= config('app.assetUrl'); ?>/culture/img/5420d-3417.jpg' width='70' height='90' /></a>
                            </div>
                            <div class='info'>
                                <div class='ft'>
                                    <a href='news/10109.html' title='厦门叶水湖书法作品欣赏' target='_blank'>厦门叶水湖书法作品欣赏</a></div>
                                <p>厦门叶水湖书法作品欣赏叶水湖1944年出生于福建厦门同安，现为中国楹联书法艺术委员会委员，中国书法...
                                    <a href='news/10109.html' class='font2_2' target='_blank'>阅读全文>></a></p>
                            </div>
                            <div class='clear'></div>
                        </li>
                        <li class='line'></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class='clear'></div>
        </div>
        <div class='leftB'>
            <div class='title2'>
                <h2><a href=''>最新阅读</a></h2>
                <span><a href='news/list_160.html' title='会员专栏' target='_self'>更多>></a></span>
            </div>
            <div class='content2'>
                <ul class='con_ul'>
                    @for ($i = 1; $i <= 5; $i++)
                    <li>
                        <div class='img'>
                            <a href='news/16172.html' title='范笑歌魏楷《千字文》选字欣赏' target='_blank'>
                                <img src='<?= config('app.assetUrl'); ?>/culture/m/img/5bab2-4805.jpg' width='70' height='90' /></a>
                        </div>
                        <div class='info'>
                            <div class='ft'>
                                <a href='news/16172.html' title='范笑歌魏楷《千字文》选字欣赏' target='_blank'>范笑歌魏楷《千字文》选字欣赏</a></div>
                            <p>范笑歌魏楷《千字文》选字此作结构跌宕不羁、用笔刚劲有力，其中既有篆隶笔意，也有魏楷之风。好书法不只是摹写古人，还要有自己的风格，范笑歌先生此作就是自己的独特风格。...
                                <a href='news/16172.html' class='font2_2' target='_blank'>阅读全文>></a></p>
                        </div>
                        <div class='clear'></div>
                    </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class='leftA' style='float:right;'>
            <div class='recomBox'>
                <div class='title'>
                    <h2>推荐精选</h2>
                    <span><!-- <a href=''>更多>></a> --></span>
                </div>
                <div class='content'>
                    <ul>
                        @for ($i = 1; $i <= 20; $i++)
                        <li>
                            <a href='news/list_161.html' class='font2_1'>[高清书法]</a>
                            <a href='news/16024.html' title='董其昌78岁行书精品《白羽扇赋》高清单字' target='_blank'>董其昌78岁行书精品《白羽扇赋》高清单字</a></li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="height10"></div>
<div class='clear'></div>
@endforeach
<table class="ke-zeroborder" style="border-top:#eaeaea 1px solid;border-right:#eaeaea 1px solid;border-bottom:#eaeaea 1px solid;border-left:#eaeaea 1px solid;margin-:6px;" cellspacing="0" cellpadding="0" width="100%">
		<colgroup span="18" align="center" width="5.5%"></colgroup>
    <tbody>
        <tr>
	            @foreach (['王羲之', '王献之', '颜真卿', '柳公权', '欧阳询', '赵孟頫', '苏轼', '黄庭坚', '米芾', '蔡襄', '怀素', '张旭', '褚遂良', '李邕', '赵佶', '虞世南', '王宠', '邓石如'] as $index => $name)
           <td style="padding-bottom:3px;padding-top:3px;padding-left:3px;padding-right:3px;"><a style="color:#ff0000;" href="http://www.yac8.com/news/?list_topic-27.html" target="_blank">{{$name}}</a></td>
           @endforeach
        </tr>
        <tr>
	            @foreach (['鲜于枢', '文徵明', '祝允明', '董其昌', '张瑞图', '张即之', '傅山', '王铎', '成亲王', '何绍基', '于右任', '沈尹默', '启功', '刘炳森', '田英章', '杨再春', '卢中南', '周慧珺'] as $index => $name)
           <td style="padding-bottom:3px;padding-top:3px;padding-left:3px;padding-right:3px;"><a style="color:#ff0000;" href="http://www.yac8.com/news/?list_topic-27.html" target="_blank">{{$name}}</a></td>
           @endforeach
        </tr>
    </tbody>
</table>
<div class="clear"></div>
<div class='height5'></div>

@endsection
