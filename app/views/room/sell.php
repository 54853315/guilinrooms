
<!DOCTYPE html>
<html>
<head lang="zh-Hant-HK">
    <meta charset="UTF-8">
    <title>Everyone Property</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Everyone Property 旨在為澳門居民提供一個開放平台進行樓宇買賣。樓盤發佈30天後將會自動刪除。如有任何疑問，請電郵至info#everyoneproperty.com">
    <meta name="keywords" content="Everyone Property,Macau,房地產,買樓,賣樓">
    <meta property="og:title" id="fbtitle" content="Everyone Property">

    
    <link rel="stylesheet" href="/static/CACHE/css/cfdd63aa0a5d.css" type="text/css" />
    <link rel="stylesheet" href="/static/CACHE/css/449f5d3086c0.css" type="text/css" />
    
    <script src="/static/js/jquery-1.11.1.min.js"></script>
    <script src="/static/js/bootstrap-slider.min.js" ></script>
    <script>
        var prizeRangeDict = {S: [100, 1500], R: [1000, 25000]};
        var prizeUnitDict = {S: '萬元', R: '元'};
        var type = 'S';
        function setSlider(type) {
            var slider = $("input.slider");
            slider.slider('setAttribute', 'min', prizeRangeDict[type][0]);
            slider.slider('setAttribute', 'max', prizeRangeDict[type][1]);
            slider.slider('setAttribute', 'range', true);
            slider.slider('setValue', prizeRangeDict[type]);
        }
        $(function() {
            var slider = $("input.slider");
            slider.slider({
                tooltip_separator: ' - ',
                value: [0, 10],
                formater: function(value) {
                    var result = value + prizeUnitDict[type];
                    if (value == prizeRangeDict[type][1]) {
                        result += "+";
                    }
                    return result;
                }
            });

            $("input[name=t]:radio").change(function () {
                type = this.value;
                setSlider(type);
            });

            setSlider(type);

            $("#advanced-search-form").keypress(function (e) {
                if(e.which == 13) {
                    this.submit();
                }
            });

            var prizeRangeLabel = $("<label class='rangeLabel'></label>");
            prizeRangeLabel.insertBefore($(".slider.slider-horizontal"));
            slider.on('slide', function() {
               prizeRangeLabel.text(slider.slider('getAttribute', 'tooltipInner').text());
            });
            
            slider.slider('setAttribute', 'range', true);
            slider.slider('setValue', [100, 1500]);
            
        });
    </script>

</head>
<body>

<div id="container">

    <div id="title"><a href="/"><img src="/static/images/logo.png"></a></div>
    <div id="wrapper">
        <div id="content">
        
    <div id="nav" class="clearfix">
        <div id="nav-item">
            <a href="/" class="go-back second-level-left">← 返回主頁</a>
        </div>
        <div id="user-info">
            
                <a href="/accounts/signin/" id="username">登入</a><span class="separator"> ｜ </span>
                <a href="/accounts/signup/" id="username">註冊</a>
            
        </div>
    </div>
    
    <form id="advanced-search-form" class="form-horizontal" method="get">
        

<div id="div_id_q" class="form-group"><label for="id_q" class="control-label col-lg-2">
				關鍵字
			</label><div class="controls col-lg-10"><input class="textinput textInput form-control" id="id_q" maxlength="80" name="q" placeholder="&quot;東華新邨&quot;, &quot;海擎天&quot;" type="text" /> </div></div><div id="div_id_t" class="form-group"><label for="id_t_0" class="control-label col-lg-2 requiredField">
				租售<span class="asteriskField">*</span></label><div class="controls col-lg-10"><label class="radio"><input type="radio" checked="checked" name="t" id="id_t_1" value="S" >出售
        </label><label class="radio"><input type="radio" name="t" id="id_t_2" value="R" >出租
        </label></div></div><div id="div_id_pt" class="form-group"><label for="id_pt_0" class="control-label col-lg-2">
				樓盤類型
			</label><div class="controls col-lg-10"><label class="checkbox"><input type="checkbox" name="pt" id="id_pt_1" value="A" >住宅
        </label><label class="checkbox"><input type="checkbox" name="pt" id="id_pt_2" value="P" >車位
        </label><label class="checkbox"><input type="checkbox" name="pt" id="id_pt_3" value="C" >商鋪
        </label></div></div><div id="div_id_pr" class="form-group"><label for="id_pr" class="control-label col-lg-2">
				價格範圍
			</label><div class="controls col-lg-10"><input class="slider textinput textInput form-control" data-slider-step="10" id="id_pr" maxlength="80" name="pr" type="text" /> </div></div>

        <div class="form-action">
            <div id="search-property">
                <a href="javascript:" onclick="document.getElementById('advanced-search-form').submit(); return false;">搜尋樓盤</a>
            </div>
        </div>
    </form>
    
    <div class="property-list">
        <h2>165個樓盤</h2>

        <div class="property-talbe">
            
            

<a href="/p/302/">





    <div class="property-image"><img src="/static/images/no-image.png"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                海濱   13座    高層D  正東南    光爽   開揚  
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
                筷子基  信和廣場 3座高層S
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
                近發電廠 亨達大廈  高層R
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
            
            

<a href="/p/284/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00284_vfudK.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                台山 輝滿閣(嘉應對面) 低層B 2房 23年
        <span class="property-meta">
            
                586呎
            
            / 368萬
        </span>
    </div>
    <div class="property-size">
        
            586呎
        
    </div>
    <div class="property-prize">368萬</div>
    <div class="property-date">08-03</div>
</a>
            
            

<a href="/p/281/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00281_haDuV.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                南灣 海天大廈 低層
        <span class="property-meta">
            
                800呎
            
            / 600萬
        </span>
    </div>
    <div class="property-size">
        
            800呎
        
    </div>
    <div class="property-prize">600萬</div>
    <div class="property-date">08-01</div>
</a>
            
            

<a href="/p/280/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00280_hXjDb.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                西灣 大興大廈 中層
        <span class="property-meta">
            
                1,600呎
            
            / 1,450萬
        </span>
    </div>
    <div class="property-size">
        
            1,600呎
        
    </div>
    <div class="property-prize">1,450萬</div>
    <div class="property-date">08-01</div>
</a>
            
            

<a href="/p/279/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00279_TGhtc.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                氹仔皇族中層有裝修, 企理 有露台
        <span class="property-meta">
            
                -
            
            / 1,050萬
        </span>
    </div>
    <div class="property-size">
        
            -
        
    </div>
    <div class="property-prize">1,050萬</div>
    <div class="property-date">08-01</div>
</a>
            
            

<a href="/p/277/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00277_jPrNF.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                抵買!!!! 華寶   1152呎   2房  新裝售~~
        <span class="property-meta">
            
                1,152呎
            
            / 730萬
        </span>
    </div>
    <div class="property-size">
        
            1,152呎
        
    </div>
    <div class="property-prize">730萬</div>
    <div class="property-date">08-01</div>
</a>
            
            

<a href="/p/276/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00276_QUzgM.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                哪咤廟 廣安台 24年 新裝 後座 光猛
        <span class="property-meta">
            
                500呎
            
            / 278萬
        </span>
    </div>
    <div class="property-size">
        
            500呎
        
    </div>
    <div class="property-prize">278萬</div>
    <div class="property-date">08-01</div>
</a>
            
            

<a href="/p/262/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00262_VJJWa.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                金海山花園 高層 G
        <span class="property-meta">
            
                850呎
            
            / 550萬
        </span>
    </div>
    <div class="property-size">
        
            850呎
        
    </div>
    <div class="property-prize">550萬</div>
    <div class="property-date">07-31</div>
</a>
            
            

<a href="/p/259/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00259_quYBf.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                黑沙環 東華新村13座高層G
        <span class="property-meta">
            
                580呎
            
            / 388萬
        </span>
    </div>
    <div class="property-size">
        
            580呎
        
    </div>
    <div class="property-prize">388萬</div>
    <div class="property-date">07-31</div>
</a>
            
            

<a href="/p/258/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00258_eqcCs.JPG.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                獨家  祐漢 杏花新村  高層O
        <span class="property-meta">
            
                -
            
            / 420萬
        </span>
    </div>
    <div class="property-size">
        
            -
        
    </div>
    <div class="property-prize">420萬</div>
    <div class="property-date">07-31</div>
</a>
            
            

<a href="/p/257/">





    <div class="property-image"><img src="/media/images/everyoneproperty_00257_lSnUO.jpg.50x50_q85_crop.jpg"></div>
    <div class="property-type">住宅</div>

    <div class="property-title">
                豪宅上車首選 海天居高層
        <span class="property-meta">
            
                826呎
            
            / 760萬
        </span>
    </div>
    <div class="property-size">
        
            826呎
        
    </div>
    <div class="property-prize">760萬</div>
    <div class="property-date">07-31</div>
</a>
            
        </div>
        
        <div id="pagination">
            <ul class="pagination pagination-sm">
    
            
                <li class="active"><a href="?t=S&amp;p=1">1</a></li>
    
            
                <li><a href="?t=S&amp;p=2">2</a></li>
    
            
                <li><a href="?t=S&amp;p=3">3</a></li>
    
            
                <li><a href="?t=S&amp;p=4">4</a></li>
    
            
                <li><a href="?t=S&amp;p=5">5</a></li>
    
            
                <li><a href="?t=S&amp;p=6">6</a></li>
    
            
                <li><a href="?t=S&amp;p=7">7</a></li>
    
            
                <li><a href="?t=S&amp;p=8">8</a></li>
    
            
                <li><a href="?t=S&amp;p=9">9</a></li>
    
            
            </ul>
        </div>
        
    </div>
    

        </div>
    </div>

    <div id="footer">&#169; Copyrights 2014 Eeveryone Property</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52655468-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>