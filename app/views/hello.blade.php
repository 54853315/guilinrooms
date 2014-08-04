@extends('layouts.master')

@section('content')

<div id="content">
<div id="nav" class="clearfix">
<div id="nav-item">
    <a href="<?php echo URL::to('sell'); ?>">出售单位(<?php //echo $sellCount; ?>)</a></a><span class="separator"> ｜ </span>
    <a href="<?php echo URL::to('rent'); ?>">出租单位(<?php //echo $rentCount; ?>)</a>
</div>

<div id="user-info">
    @include('layouts.member-panel')
</div>

<div id="intro">
    <p>Guilin Rooms 是一个为桂林市居民提供一个简单而开放的楼宇销售平台。楼盘发布30天后将自动删除。如有任何疑问，<a
            href="mailto:54853315@qq.com">请发邮件</a>或在我们的<a href="https://weibo.crazyphper.com"
                                                          target="_blank">微博</a>留言。
    </p>
</div>
<div id="menu" class="clearfix">
    <form id="search-form" action="search">
        <input class="form-control" id="search" name="q" placeholder='搜尋: "三多路", "小香港"' type="text">
    </form>
    <div id="new-property">
        <a href="<?php echo URL::to('new'); ?>">发布楼盘</a>
    </div>
</div>

<div id="sell-property-list" class="property-list">
<h2>最新出售单位</h2>

<div class="property-talbe">


<a href="r/302/">


    <div class="property-image"><img src="/static/images/no-image.png"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        海濱 13座 高層D 正東南 光爽 開揚
        <span class="property-meta">
            
                828呎
            
            / 538萬
        </span>
    </div>
    <div class="property-size">

        828呎

    </div>
    <div class="property-prize">538萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/294/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00294_lchXc.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        超荀祥光大廈 5樓連天台共三層
        <span class="property-meta">
            
                1,307呎
            
            / 298萬
        </span>
    </div>
    <div class="property-size">

        1,307呎

    </div>
    <div class="property-prize">298萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/293/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00293_TOYDL.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        佳景一梯一伙.. 前座
        <span class="property-meta">
            
                600呎
            
            / 368萬
        </span>
    </div>
    <div class="property-size">

        600呎

    </div>
    <div class="property-prize">368萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/292/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00292_ysJbq.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        氹仔市中心麗駿軒3房1332呎荀售
        <span class="property-meta">
            
                1,332呎
            
            / 920萬
        </span>
    </div>
    <div class="property-size">

        1,332呎

    </div>
    <div class="property-prize">920萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/291/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00291_AgdQH.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        金利達花園 4座低層AC
        <span class="property-meta">
            
                1,238呎
            
            / 1,238萬
        </span>
    </div>
    <div class="property-size">

        1,238呎

    </div>
    <div class="property-prize">1,238萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/290/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00290_kEpvW.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        金利逹花園 19年電梯樓 靚裝 望園景 有套房
        <span class="property-meta">
            
                1,238呎
            
            / 780萬
        </span>
    </div>
    <div class="property-size">

        1,238呎

    </div>
    <div class="property-prize">780萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/289/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00289_huziV.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        高士德區電梯樓 雅廉花園 靚裝
        <span class="property-meta">
            
                700呎
            
            / 558萬
        </span>
    </div>
    <div class="property-size">

        700呎

    </div>
    <div class="property-prize">558萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/288/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00288_ncjKI.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        筷子基 信和廣場 3座高層S
        <span class="property-meta">
            
                880呎
            
            / 758萬
        </span>
    </div>
    <div class="property-size">

        880呎

    </div>
    <div class="property-prize">758萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/287/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00287_LaexX.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        近發電廠 亨達大廈 高層R
        <span class="property-meta">
            
                750呎
            
            / 518萬
        </span>
    </div>
    <div class="property-size">

        750呎

    </div>
    <div class="property-prize">518萬</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/285/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00285_aCCVV.jpeg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        免佣自售南貴,地產有佣
        <span class="property-meta">
            
                630呎
            
            / 448萬
        </span>
    </div>
    <div class="property-size">

        630呎

    </div>
    <div class="property-prize">448萬</div>
    <div class="property-date">08-03</div>
</a>

</div>
<div class="more-property"><a href="/p/sell/">查看全部 165
        個出售單位 →</a></div>
</div>


<div id="rent-property-list" class="property-list">
<h2>最新出租單位</h2>

<div class="property-talbe">


<a href="/p/303/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00303_qUfQt.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        金豐大廈 高層 F 間3房 齊租 企理
        <span class="property-meta">
            
                3房
            
            / 15,000
        </span>
    </div>
    <div class="property-size">

        3房

    </div>
    <div class="property-prize">15,000</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/301/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00301_BaLch.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        廣華 高層 2房 靚 齊租 ~~
        <span class="property-meta">
            
                2房
            
            / 8,000
        </span>
    </div>
    <div class="property-size">

        2房

    </div>
    <div class="property-prize">8,000</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/297/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00297_JzDww.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        泉福新頓嘉俊閣E單位
        <span class="property-meta">
            
                1房
            
            / 9,000
        </span>
    </div>
    <div class="property-size">

        1房

    </div>
    <div class="property-prize">9,000</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/296/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00296_lpTvH.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        大潭山 靚傢電 有匙
        <span class="property-meta">
            
                3房
            
            / 26,000
        </span>
    </div>
    <div class="property-size">

        3房

    </div>
    <div class="property-prize">26,000</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/295/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00295_hLdiA.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        華寶2房 齊靚租
        <span class="property-meta">
            
                2房
            
            / 13,800
        </span>
    </div>
    <div class="property-size">

        2房

    </div>
    <div class="property-prize">13,800</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/286/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00286_ZJTtb.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        海怡花園 2座 中層 正2房 大廳 光猛 四正
        <span class="property-meta">
            
                2房
            
            / 11,800
        </span>
    </div>
    <div class="property-size">

        2房

    </div>
    <div class="property-prize">11,800</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/283/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00283_ElzTY.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        氹仔 酒店式靚裝 樂駿盈軒 高層H 開放式 超干淨
        <span class="property-meta">
            
                1房
            
            / 10,500
        </span>
    </div>
    <div class="property-size">

        1房

    </div>
    <div class="property-prize">10,500</div>
    <div class="property-date">08-03</div>
</a>


<a href="/p/282/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00282_qZokn.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        靚裝 逸麗花園
        <span class="property-meta">
            
                3房
            
            / 11,600
        </span>
    </div>
    <div class="property-size">

        3房

    </div>
    <div class="property-prize">11,600</div>
    <div class="property-date">08-01</div>
</a>


<a href="/p/275/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00275_EjNEV.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        租 群發花園 近葡京 4房 齊傢電,望英皇
        <span class="property-meta">
            
                4房
            
            / 26,000
        </span>
    </div>
    <div class="property-size">

        4房

    </div>
    <div class="property-prize">26,000</div>
    <div class="property-date">08-01</div>
</a>


<a href="/p/273/">


    <div class="property-image"><img src="/media/images/everyoneproperty_00273_GcKdY.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
        近雀仔園天橋二馬路3樓後座兩房半齊傢電
        <span class="property-meta">
            
                2房
            
            / 6,900
        </span>
    </div>
    <div class="property-size">

        2房

    </div>
    <div class="property-prize">6,900</div>
    <div class="property-date">08-01</div>
</a>

</div>
<div class="more-property"><a href="/p/rent/">查看全部 105
        個出租單位 →</a></div>
</div>


</div>


<script type="text/javascript">
    function onSignup(form) {
        $.post(form.attr('action'), form.serialize(), function (data) {
            if (data.status == 0) {
                alert(data.message);
            } else {
                window.self.location = '/dashboard';
            }
        });
    }

    function onSignin(form) {
        $.post(form.attr('action'), form.serialize(), function (data) {
            if (data.status == 0) {
                alert(data.message);
            } else {
                window.self.location = '/dashboard';
            }
        });
    }
</script>

@stop