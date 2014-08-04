@extends('layouts.master')

@section('content')

<div id="content">

    <div id="nav" class="clearfix">
        <a href="javascript:history.back();" class="go-back">← 返回上一頁</a>
    </div>
    <div id="intro">
        请选择出售类型：<a href="/new/sell">出售房</a>
        <span class="separator"> ｜ </span>
        <a href="/new/rent"> 出租房</a>
        <span class="separator"> ｜ </span>
        <a href="/new/car"> 停车位/车库</a>
        <br/>
    </div>
</div>
@stop