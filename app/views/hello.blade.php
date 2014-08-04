@extends('layouts.master')

@section('content')

<div id="content">
<div id="nav" class="clearfix">
<div id="nav-item">
    {{ link_to('sell','出售单位('.$sellRoomsCount.')') }}<span class="separator"> ｜ </span>
    {{ link_to('rent','出租单位('.$rentRoomsCount.')') }}
</div>

<div id="user-info">
    @include('layouts.member-panel')
</div>

<div id="intro">
    <p>Guilin Rooms 是一个为桂林市居民提供简单+开放的楼宇销售平台。<br/>楼盘发布30天后将自动删除。如有任何疑问，<a
            href="mailto:54853315@qq.com">请发邮件</a>或在我们的<a href="https://weibo.crazyphper.com"
                                                          target="_blank">微博</a>留言。
    </p>
</div>
<div id="menu" class="clearfix">
    <form id="search-form" action="search">
        <input class="form-control" id="search" name="q" placeholder='搜尋: "三多路", "小香港"' type="text">
    </form>
    <div id="new-property">
        {{ link_to('/new','发布新信息') }}
    </div>
</div>


    <div id="sell-property-list" class="property-list">
        <h2>最新出让车位</h2>

        <div class="property-talbe">

            @foreach($cars as $c)
            <a href="/c/{{ $c->id }}">
                <div class="property-image"><img src="/assets/images/no-image.png"></div>
                <div class="property-type">@if($c->type == 1) 出售 @else 出租 @endif</div>

                <div class="property-title">
                    {{ $c->title }}
        <span class="property-meta">

               {{ $c->size }}㎡

            / {{ $c->price }} @if($c->type == 1) 万 @else 元/月 @endif
        </span>
                </div>
                <div class="property-size">

                    {{ $c->size }}㎡

                </div>
                <div class="property-prize"> {{ $c->price }} @if($c->type == 1) 万 @else 元/月 @endif</div>
                <div class="property-date">08-03</div>
            </a>
            @endforeach


        </div>
        <div class="more-property"><a href="/p/sell/">查看全部 {{ $carCount }}
                个车位信息 →</a></div>
    </div>

<div id="sell-property-list" class="property-list">
<h2>最新出售单位</h2>

<div class="property-talbe">

    @foreach($sellRooms as $sr)
    <a href="/r/{{ $sr->id }}">
        <div class="property-image"><img src="/assets/images/no-image.png"></div>
        <div class="property-type">@if($sr->type == 1) 出售 @else 出租 @endif</div>

        <div class="property-title">
            {{ $sr->title }}
        <span class="property-meta">

               {{ $sr->size }}㎡

            / {{ $sr->price }} @if($sr->type == 1) 万 @else 元/月 @endif
        </span>
        </div>
        <div class="property-size">

            {{ $sr->size }}㎡

        </div>
        <div class="property-prize"> {{ $sr->price }} @if($sr->type == 1) 万 @else 元/月 @endif</div>
        <div class="property-date">08-03</div>
    </a>
    @endforeach


</div>
<div class="more-property"><a href="/p/sell/">查看全部 {{ $sellRoomsCount }}
        个出售单位 →</a></div>
</div>


<div id="rent-property-list" class="property-list">
<h2>最新出租单位</h2>

<div class="property-talbe">

    @foreach($rentRooms as $rr)
    <a href="/r/{{ $rr->id }}">
        <div class="property-image"><img src="/assets/images/no-image.png"></div>
        <div class="property-type">@if($rr->type == 1) 出售 @else 出租 @endif</div>

        <div class="property-title">
            {{ $rr->title }}
        <span class="property-meta">

               {{ $rr->size }}㎡

            / {{ $rr->price }} @if($rr->type == 1) 万 @else 元/月 @endif
        </span>
        </div>
        <div class="property-size">

            {{ $rr->size }}㎡

        </div>
        <div class="property-prize"> {{ $rr->price }} @if($rr->type == 1) 万 @else 元/月 @endif</div>
        <div class="property-date">08-03</div>
    </a>
    @endforeach

</div>
<div class="more-property"><a href="/p/rent/">查看全部 {{ $rentRoomsCount }}
        个出租单位 →</a></div>
</div>


</div>


<script type="text/javascript">
    function onSignup(form) {   //注册
        $.post(form.attr('action'), form.serialize(), function (data) {
            var json_obj = jQuery.parseJSON ( data );
            if (json_obj.status == '0') {
                alert(json_obj.message);
            } else {
//                $('#signup_alert').show();
                alert(json_obj.message);
                window.self.location = '/dashboard';
            }
        });
    }

    function onSignin(form) {
        $.post(form.attr('action'), form.serialize(), function (data) {
            var json_obj = jQuery.parseJSON ( data );
            if (json_obj.status == '0') {
                alert(json_obj.message);
            } else {
                alert('登录成功！即将为您跳转至个人中心。');
//                $('#signin_alert').show();
                window.self.location = '/dashboard';
            }
        });
    }
</script>

@stop