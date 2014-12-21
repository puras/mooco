$(function() {
    $('.slide-pic').myFocus({
        pattern:'mF_YSlider',//风格应用的名称
        time:3,//切换时间间隔(秒)
        trigger:'click',//触发切换模式:'click'(点击)/'mouseover'(悬停)
        width:1081,//设置图片区域宽度(像素)
        height:304,//设置图片区域高度(像素)
        txtHeight:'default'//文字层高度设置(像素),'default'为默认高度，0为隐藏
    });

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 6,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true
    });
});