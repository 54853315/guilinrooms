@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="/assets/css/new.css" type="text/css"/>
<script src="/assets/js/tinymce/tinymce.min.js"></script>
<script>
    var prizeUnitDict = {S: '万元', R: '元'}

    tinymce.init({
        selector: 'textarea.form-control#id_description',
        toolbar: "bold italic bullist numlist",
        menubar: false,
        statusbar: false,
        body_id: "editor",
        content_css: "/assets/css/editor.css",
        plugins: "paste",
        force_p_newlines: true,
        paste_preprocess: function (pl, o) {
            o.content = o.content.replace(/<br\s*[\/]?>/gi, "\<p\>");
        },
        valid_elements: "strong,em,p,ul,ol,li"
    });

    $(function () {
        $("input[name=type]:radio").change(function () {
            $("#id_prize").next().text(prizeUnitDict[this.value]);
        });
    });
</script>

<div id="content">

    <div id="nav" class="clearfix">
        <a href="javascript:history.back();" class="go-back">← 返回上一頁</a>
    </div>
    <div id="intro">
        <small>信息自建立起30日后会被自动删除；请确保您输入的信息准确，有效。</small>
    </div>
    <div>
        <form id="new-form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <!--            <input type="hidden" name="t" value="sell"/>-->

            <div id="div_id_type" class="form-group">
                <label for="id_type_0" class="control-label col-lg-2 requiredField">
                    类型<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <label class="radio">
                        <input type="radio" checked="checked" name="type" value="1">出售
                    </label>
                    <label class="radio">
                        <input type="radio" name="type" value="2">出租
                    </label>
                </div>
            </div>

            <div id="div_id_title" class="form-group"><label for="id_title"
                                                             class="control-label col-lg-2 requiredField">
                    标题<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10"><input class="textinput textInput form-control"
                                                       maxlength="30" name="title" type="text"/>

                    <p id="hint_id_title" class="help-block">例如: "恒祥花园 一房一厅 精装修"</p></div>
            </div>

            <div id="div_id_size" class="form-group"><label for="id_size" class="control-label col-lg-2 requiredField">
                    房子类别：<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <div class="input-group-addon">
                        <select class="form-control">
                            <option value="">装修程度</option>
                            <option value="">毛胚</option>
                            <option value="">简单装修</option>
                            <option value="">中等装修</option>
                            <option value="">精装修</option>
                            <option value="">豪华装修</option>
                        </select>
                    </div>
                    <div class="input-group-addon">
                        <select class="form-control">
                            <option value="">普通住宅</option>
                            <option value="">公寓</option>
                            <option value="">别墅</option>
                            <option value="">平房</option>
                        </select>
                    </div>
                    <p id="hint_id_size" class="help-block"></p></div>
            </div>

            <!-- 出售才有-->
            <div id="div_id_size" class="form-group"><label for="id_size" class="control-label col-lg-2 requiredField">
                    产权：<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <div class="input-group-addon">
                        <select class="form-control">
                            <option value="">产权年限</option>
                            <option value="">70年产权</option>
                            <option value="">50年产权</option>
                            <option value="">40年产权</option>
                        </select>
                    </div>
                    <div class="input-group-addon">
                        <select class="form-control">
                            <option value="">商品房</option>
                            <option value="">商住两用</option>
                            <option value="">经济适用房</option>
                            <option value="">使用权</option>
                            <option value="">公房</option>
                        </select>
                    </div>
                    <div class="input-group"><input class="textinput textInput form-control" id="id_size" name="size"
                                                    type="text"/> <span class="input-group-addon">建筑年代</span></div>
                    <p id="hint_id_size" class="help-block"></p></div>
            </div>

            <div id="div_id_size" class="form-group"><label for="id_size" class="control-label col-lg-2 requiredField">
                楼层<span class="asteriskField">*</span></label>

            <div class="controls col-lg-10">
                <div class="input-group">
                    <span class="input-group-addon">在</span>
                    <input class="textinput textInput form-control" name="ting" type="text"/> <span
                        class="input-group-addon">层</span>

                    <span class="input-group-addon">共</span>
                    <input class="textinput textInput form-control" name="shi" type="text"/> <span
                        class="input-group-addon">层</span>
                </div>
                <p id="hint_id_size" class="help-block"></p>
            </div>
    </div>

            <div id="div_id_size" class="form-group"><label for="id_size" class="control-label col-lg-2 requiredField">
                    建筑面积（可用）<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <div class="input-group"><input class="textinput textInput form-control" id="id_size" name="size"
                                                    type="text"/> <span class="input-group-addon">㎡(平方米)</span></div>
                    <p id="hint_id_size" class="help-block">如不清楚建筑面积，请输入"0"</p></div>
            </div>

            <div id="div_id_size" class="form-group"><label for="id_size" class="control-label col-lg-2 requiredField">
                    房间数<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <div class="input-group">
                        <input class="textinput textInput form-control" name="ting" type="text"/> <span
                            class="input-group-addon">厅</span>
                        <input class="textinput textInput form-control" name="shi" type="text"/> <span
                            class="input-group-addon">室</span>
                        <input class="textinput textInput form-control" name="wei" type="text" value="0"/> <span
                            class="input-group-addon">卫</span>
                    </div>
                    <p id="hint_id_size" class="help-block"></p>
                </div>
            </div>

            <div id="div_id_prize" class="form-group"><label for="id_price"
                                                             class="control-label col-lg-2 requiredField">
                    价格<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10">
                    <div class="input-group"><input class="textinput textInput form-control" id="id_price" name="price"
                                                    type="text"/> <span class="input-group-addon">元/月</span></div>
                </div>
            </div>
            <div id="div_id_description" class="form-group"><label for="id_description"
                                                                   class="control-label col-lg-2 requiredField">
                    內容<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10"><textarea class="textarea form-control" cols="40" id="id_description"
                                                          name="description" rows="8"></textarea>

                    <p id="hint_id_description" class="help-block">请尽量详细填写，例如：“押三付一，有彩电、空调、1米8单人床”，以便他人了解房子使用情况</p>
                </div>
            </div>
            <div id="div_id_contact_info" class="form-group"><label for="id_contact_info"
                                                                    class="control-label col-lg-2 requiredField">
                    联系方式<span class="asteriskField">*</span></label>

                <div class="controls col-lg-10"><textarea class="textarea form-control" cols="40" id="id_contact_info"
                                                          name="contact_info" rows="3"></textarea>

                    <p id="hint_id_contact_info" class="help-block">例如: "熊小姐 电话: 12345678"</p></div>
            </div>
            <div id="div_id_image1" class="form-group"><label for="id_image1" class="control-label col-lg-2">
                    第一张图片
                </label>

                <div class="controls col-lg-10"><input class="fileinput fileUpload form-control" id="id_image1"
                                                       name="image1" type="file"/>

                    <p id="hint_id_image1" class="help-block">图片限制: 1 MB，上传图片后图片会自动缩放至1024x768</p></div>
            </div>
            <div id="div_id_image2" class="form-group"><label for="id_image2" class="control-label col-lg-2">
                    第一张图片
                </label>

                <div class="controls col-lg-10"><input class="fileinput fileUpload form-control" id="id_image2"
                                                       name="image2" type="file"/></div>
            </div>
            <div id="div_id_image3" class="form-group"><label for="id_image3" class="control-label col-lg-2">
                    第一张图片
                </label>

                <div class="controls col-lg-10"><input class="fileinput fileUpload form-control" id="id_image3"
                                                       name="image3" type="file"/></div>
            </div>
            <div id="div_id_image4" class="form-group"><label for="id_image4" class="control-label col-lg-2">
                    第一张图片
                </label>

                <div class="controls col-lg-10"><input class="fileinput fileUpload form-control" id="id_image4"
                                                       name="image4" type="file"/></div>
            </div>
            <div id="div_id_image5" class="form-group"><label for="id_image5" class="control-label col-lg-2">
                    第一张图片
                </label>

                <div class="controls col-lg-10"><input class="fileinput fileUpload form-control" id="id_image5"
                                                       name="image5" type="file"/></div>
            </div>


            <div class="form-action">
                <div id="go-back"><a href="javascript:history.back();">← 返回上一页</a></div>
                <div id="new-property">
                    <a href="javascript:" onclick="document.getElementById('new-form').submit(); return false;">确认无误，发布出去</a>
                </div>


            </div>
        </form>
    </div>

</div>
@stop