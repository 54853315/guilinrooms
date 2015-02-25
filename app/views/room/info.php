<script>
    var maxHeight = 450;

    var images = [
        '/media/images/everyoneproperty_00206_qQRmO.jpg', '/media/images/everyoneproperty_00206_vwPst.jpg', '/media/images/everyoneproperty_00206_gTutP.jpg', '/media/images/everyoneproperty_00206_fQSOA.jpg', '/media/images/everyoneproperty_00206_IuhVM.jpg',
    ];
    var sizes = [
        [576, 768],
        [576, 768],
        [576, 768],
        [576, 768],
        [576, 768],
    ]

    var currentIndex = 0;
    function changeImage(index) {
        var photoImageFrame = document.getElementById('property-image-frame');
        var maxWidth = Math.min(600, photoImageFrame.offsetWidth);
        var imageSrc = images[index];
        var photoImage = photoImageFrame.getElementsByTagName('img')[0];
        photoImage.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7";
        var width = sizes[index][0];
        var height = sizes[index][1];
        var ratio = Math.min(maxWidth / width, maxHeight / height);
        photoImage.height = ratio * height;
        photoImage.width = ratio * width;
        photoImage.src = imageSrc;
        document.getElementById('property-images').getElementsByTagName('img')[currentIndex].classList.remove('highlight');
        document.getElementById('property-images').getElementsByTagName('img')[index].classList.add('highlight');
        currentIndex = index;
    }

    function nextImage() {
        changeImage((currentIndex + 1) % images.length);
    }

    function openImage() {
        window.open(images[currentIndex], '_blank');
    }
</script>


<div id="content">

    <div id="nav">
        <a href="javascript:history.back();">← 返回上一页</a>
        <a href="/rent" class="pull-right" id="all-category">出租单位 →</a>
    </div>

    <div id="property-detail">
        <div class="clearfix">
            <h2 id="property-title">黑沙環 保利達花園 高層 2房1廳 靚裝 齊傢俬</h2>

            <h2 id="prize" class="clearfix">
                <span id="prize-info1">8,500</span>
                <span id="prize-info2">2房 </span>
            </h2>
        </div>
        <div id="posted-on"><span id="posted-on-span">Posted on </span>2014-07-25 11:07 (1 週, 2 日前) by everyoneproperty
        </div>
        <div class="clearfix">
            <div id="description">

                <div id="property-images">

                    <img src="/media/images/everyoneproperty_00206_qQRmO.jpg.50x50_q85_crop.jpg" height="50"
                         onclick="changeImage(0)" class="highlight">

                    <img src="/media/images/everyoneproperty_00206_vwPst.jpg.50x50_q85_crop.jpg" height="50"
                         onclick="changeImage(1)">

                    <img src="/media/images/everyoneproperty_00206_gTutP.jpg.50x50_q85_crop.jpg" height="50"
                         onclick="changeImage(2)">

                    <img src="/media/images/everyoneproperty_00206_fQSOA.jpg.50x50_q85_crop.jpg" height="50"
                         onclick="changeImage(3)">

                    <img src="/media/images/everyoneproperty_00206_IuhVM.jpg.50x50_q85_crop.jpg" height="50"
                         onclick="changeImage(4)">

                </div>
                <div id="property-image-frame">
                    <div id="property-image-control">
                        <a href="#" class="btn btn-default btn-lg" onclick="nextImage(); return false;">
                            <span class="glyphicon glyphicon-chevron-right glyphicon-middle"></span>
                        </a>
                        <a href="#" class="btn btn-default btn-lg" onclick="openImage(); return false;">
                            <span class="glyphicon glyphicon-zoom-in glyphicon-middle"></span>
                        </a>
                    </div>
                    <img></div>

                <p>可合作！！！</p>
            </div>
            <div id="share">

            </div>
        </div>
        <div id="contact-info">
            <h2>聯繫方式</h2>

            <h3>請勿單獨睇樓；交易前請閱讀所有細則</h3>

            <div id="contact-content">
                黃小姐：63300690
            </div>
        </div>
    </div>

</div>