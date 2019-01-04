<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Welcom to LRZ's Blog</title>
    {{--<link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">--}}
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/layui/css/layui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/main.css')}}">
    <!--加载meta IE兼容文件-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="index.html">
            <span>MYBLOG</span>
            {{--<img src="../res/img/logo.png">--}}
            {{--<img src={{base_path()}}/public/images/logo.png>--}}
            <img src="{{URL::asset('/images/logo.png')}}"/>
        </a>
    </h1>
    <div class="nav">
        <a href="index.html" class="active">文章</a>
        <a href="whisper.html">微语</a>
        <a href="leacots.html">留言</a>
        <a href="album.html">相册</a>
        <a href="about.html">关于</a>
    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="index.html" class="active">文章</a></li>
        <li class="layui-nav-item"><a href="whisper.html">微语</a></li>
        <li class="layui-nav-item"><a href="leacots.html">留言</a></li>
        <li class="layui-nav-item"><a href="album.html">相册</a></li>
        <li class="layui-nav-item"><a href="about.html">关于</a></li>
    </ul>
    <p class="welcome-text">
        Welcome to <span class="name"> LRZ's</span> Blog
    </p>
</div>

<div class="banner" style='background-image:url({{URL::asset('/images/banner.jpg')}})'>
    <div class="cont w1000">
        <div class="title">
            <h3>MY<br />BLOG</h3>
            <h4>well-balanced heart</h4>
        </div>
        <div class="amount">
            <p><span class="text">访问量</span><span class="access">1000</span></p>
            <p><span class="text">日志</span><span class="daily-record">1000</span></p>
        </div>
    </div>
</div>
<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
<div class="content">
    <div class="cont w1000">
        <div class="title">
        <span class="layui-breadcrumb" lay-separator="|">
          <a href="javascript:;" class="active">设计文章</a>
          <a href="javascript:;">前端文章</a>
          <a href="javascript:;">旅游杂记</a>
        </span>
        </div>
        <div class="list-item">
            <div class="item">
                <div class="layui-fluid">
                    <div class="layui-row">
                        <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                            {{--<div class="img"><img src="../res/img/sy_img1.jpg" alt=""></div>--}}
                            <div class="img"><img src="{{URL::asset('/images/sy_img1.jpg')}}" alt=""></div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                            <div class="item-cont">
                                <h3>空间立体效果图，完美呈现最终效果<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                <h5>设计文章</h5>
                                <p>室内设计作为一门新兴的学科，尽管还只是近数十年的事，但是人们有意识地对自己生活、生产活动的室内进行安排布置，甚至美化装饰，赋予室内环境以所祈使的气氛，却早巳从人类文明伊始的时期就已存在</p>
                                <a href="details.html" class="go-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="layui-fluid">
                    <div class="layui-row">
                        <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                            {{--<div class="img"><img src="../res/img/sy_img2.jpg" alt=""></div>--}}
                            <div class="img"><img src="{{URL::asset('/images/sy_img2.jpg')}}" alt=""></div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                            <div class="item-cont">
                                <h3>空间立体效果图，完美呈现最终效果<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                <h5>设计文章</h5>
                                <p>室内设计作为一门新兴的学科，尽管还只是近数十年的事，但是人们有意识地对自己生活、生产活动的室内进行安排布置，甚至美化装饰，赋予室内环境以所祈使的气氛，却早巳从人类文明伊始的时期就已存在</p>
                                <a href="details.html" class="go-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="layui-fluid">
                    <div class="layui-row">
                        <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                            {{--<div class="img"><img src="../res/img/sy_img3.jpg" alt=""></div>--}}
                            <div class="img"><img src="{{URL::asset('/images/sy_img3.jpg')}}" alt=""></div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                            <div class="item-cont">
                                <h3>空间立体效果图，完美呈现最终效果<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                <h5>设计文章</h5>
                                <p>室内设计作为一门新兴的学科，尽管还只是近数十年的事，但是人们有意识地对自己生活、生产活动的室内进行安排布置，甚至美化装饰，赋予室内环境以所祈使的气氛，却早巳从人类文明伊始的时期就已存在</p>
                                <a href="details.html" class="go-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="layui-fluid">
                    <div class="layui-row">
                        <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                            {{--<div class="img"><img src="../res/img/sy_img4.jpg" alt=""></div>--}}
                            <div class="img"><img src="{{URL::asset('/images/sy_img4.jpg')}}" alt=""></div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                            <div class="item-cont">
                                <h3>空间立体效果图，完美呈现最终效果<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                <h5>设计文章</h5>
                                <p>室内设计作为一门新兴的学科，尽管还只是近数十年的事，但是人们有意识地对自己生活、生产活动的室内进行安排布置，甚至美化装饰，赋予室内环境以所祈使的气氛，却早巳从人类文明伊始的时期就已存在</p>
                                <a href="details.html" class="go-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="layui-fluid">
                    <div class="layui-row">
                        <div class="layui-col-xs12 layui-col-sm4 layui-col-md5">
                            {{--<div class="img"><img src="../res/img/sy_img5.jpg" alt=""></div>--}}
                            <div class="img"><img src="{{URL::asset('/images/sy_img5.jpg')}}" alt=""></div>
                        </div>
                        <div class="layui-col-xs12 layui-col-sm8 layui-col-md7">
                            <div class="item-cont">
                                <h3>空间立体效果图，完美呈现最终效果<button class="layui-btn layui-btn-danger new-icon">new</button></h3>
                                <h5>设计文章</h5>
                                <p>室内设计作为一门新兴的学科，尽管还只是近数十年的事，但是人们有意识地对自己生活、生产活动的室内进行安排布置，甚至美化装饰，赋予室内环境以所祈使的气氛，却早巳从人类文明伊始的时期就已存在</p>
                                <a href="details.html" class="go-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="demo" style="text-align: center;"></div>
    </div>
</div>

<div class="footer-wrap">
    <div class="footer w1000">
        <div class="qrcode">
            {{--<img src="{{URL::asset('/images/erweima.jpg')}}">--}}
            <img src="{{URL::asset('/images/mianao.jpg')}}" height="260" width="200" >
            {{--<div class="text">--}}
                {{--<h4 class="title">⟵扫码领红包</h4>--}}
            {{--</div>--}}
        </div>
        <div class="practice-mode">
{{--            <img src="{{URL::asset('/images/down_img.jpg')}}">--}}
            <img src="{{URL::asset('/images/zfbhb.png')}}" height="260" width="200" >
            <div class="text">
                <h4 class="title">⟵扫码领红包</h4>
                <h4 class="title">我的联系方式</h4>
                <p>微信<span class="WeChat">1051810696</span></p>
                <p>邮箱<span class="email">1051810696@qq.com</span></p>
                <p><a href="http://www.baidu.com/" target="_blank" title="点击进入百度搜索">百度一下 你就知道</a></p>
                {{--<p>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>--}}
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{URL::asset('/layui/layui.js')}}"></script>
<script type="text/javascript">
    layui.config({
        // base: '../res/js/util/'
        base: "{{URL::asset('/js/util')}}"
    }).use(['element','laypage','jquery','menu'],function(){
        element = layui.element,laypage = layui.laypage,$ = layui.$,menu = layui.menu;
        laypage.render({
            elem: 'demo'
            ,count: 70 //数据总数，从服务端得到
        });
        menu.init();
    })
</script>
</body>
</html>