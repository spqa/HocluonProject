@extends('layouts.master')
@section('UniqueFooter')


    <div class="wrap">
        <div class="footer-main">

            <div class="col top span_3_of_3">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">

                    </div>
                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-2912.18px, 0px, 0px);"><li class="clone" style="width: 970.727px; float: left; display: block;">
                                <h2>Ai cũng có thể trở thành người dạy và kiếm tiền bằng kiến thức của mình!</h2><h2>
                                    <img src="{{asset('images/slider3.jpg')}}" alt="">
                                </h2></li>
                            <li class="" style="width: 970.727px; float: left; display: block;">
                                <h2>Học và dạy trực tuyến mọi lúc mọi nơi!</h2><h2>
                                    <img src="{{asset('images/slider1.jpg')}}" alt="">
                                </h2></li>
                            <li style="width: 970.727px; float: left; display: block;" class="">
                                <h2>Lựa chọn và chat trực tuyến với người dạy về mọi vấn đề!</h2><h2>
                                    <img src="{{asset('images/slider2.jpg')}}" alt="">
                                </h2></li>
                            <li style="width: 970.727px; float: left; display: block;" class="flex-active-slide">
                                <h2>Ai cũng có thể trở thành người dạy và kiếm tiền bằng kiến thức của mình!</h2><h2>
                                    <img src="{{asset('images/slider3.jpg')}}" alt="">
                                </h2></li>
                            <li class="clone" style="width: 970.727px; float: left; display: block;">
                                <h2>Học và dạy trực tuyến mọi lúc mọi nơi!</h2><h2>
                                    <img src="{{asset('images/slider1.jpg')}}" alt="">
                                </h2></li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="flex-active">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!--slider-->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.spasticNav.js')}}"></script>
    <!-- FlexSlider -->
    <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $('#nav').spasticNav();
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    @endsection
