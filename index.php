<?php
include("./database.php");
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="zh-CN">


<head>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="無名" />
  <title>一个导航 - OneNav</title>
  <meta name="keywords" content="网址导航">
  <meta name="description" content="OneNav">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="stylesheet" href="https://s1.hdslb.com/bfs/static/jinkela/long/font/regular.css" />
  
<link rel="stylesheet" href="/css/style.min.css">
<link rel="stylesheet" href="/css/dark.min.css">
<link rel="stylesheet" href="/css/animation.min.css">
<link rel="stylesheet" href="/css/mobile.min.css">
<link rel="stylesheet" href="/css/loading.min.css">
<link rel="stylesheet" href="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">

  
<script src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"></script>

  <script>
    var userDefinedSearchData = {};
    var expandAll = false;
  </script>
  
<script src="/js/header.min.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        
<script src="/js/html5shiv.min.js"></script>

        
<script src="/js/respond.min.js"></script>

    <![endif]-->
  <!-- / FB Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://web.imsyy.top/index.html">
  <meta property="og:title" content="一个导航 - OneNav - OneNav">
  <meta property="og:description" content="OneNav">
  <meta property="og:site_name" content="一个导航 - OneNav - OneNav">
  
  <meta property="og:image" content="/images/webstack_banner_cn.png">
  
  <!-- / Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="一个导航 - OneNav - OneNav">
  <meta name="twitter:description" content="OneNav">
  
  <meta name="twitter:image" content="/images/webstack_banner_cn.png">
  
  
  <!-- 直接添加html内容即可 -->
<!-- 可设置多行 -->
<!-- Izitoast -->
<link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/izitoast/1.4.0/css/iziToast.min.css">
<script type="text/javascript"
    src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/izitoast/1.4.0/js/iziToast.min.js">
</script>
  
<meta name="generator" content="Hexo 5.4.2"></head>

</head>





<body class="page-body">
  <!--加载动画-->
  <div id="loading-box">
    <div class="spinner-box">
      <span class="loader"></span>
      <div class="loading-word">
        <p class="loading-title">OneNav</p>
      </div>
    </div>
  </div>
  <div class="page-container">
    <div class="sidebar-menu toggle-others fixed">
  <div class="sidebar-menu-inner">
    <header class="logo-env">
      <div class="logo">
        <a rel="go-top"><i class="fa-solid fa-compass"></i></a>
        <div class="logo-text">
          <a rel="go-top">OneNav</a>
        </div>
      </div>
      <div class="mobile-menu-toggle visible-xs">
        <a onclick="switchNightMode()">
          <i class="fa-solid fa-circle-half-stroke"></i>
        </a>
        <a href="" data-toggle="mobile-menu">
          <i class="fa-solid fa-bars"></i>
        </a>
      </div>
    </header>
    <ul id="main-menu" class="main-menu">
      
      <li class="">
        
          <a href="#常用网站" class="smooth">
            
            <i class="fa-solid fa-star"></i>
            <span class="title">常用网站</span>
          </a>
      </li>
      
      <li class="">
        
          <a href="#网页工具" class="smooth">
            
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <span class="title">网页工具</span>
          </a>
      </li>
      
      <li class="">
        
          <a href="#素材资源" class="smooth">
            
            <i class="fa-solid fa-marker"></i>
            <span class="title">素材资源</span>
          </a>
      </li>
      
      <li class="">
        
          <a href="#知识教程" class="smooth">
            
            <i class="fa-solid fa-graduation-cap"></i>
            <span class="title">知识教程</span>
          </a>
      </li>
      
      <li class="">
        
          <a href="#前端框架" class="smooth">
            
            <i class="fa-solid fa-laptop"></i>
            <span class="title">前端框架</span>
          </a>
      </li>
      
      <hr style="margin-bottom: 32px; border-top: none;" />
      
      <li class="submit-tag">
        <a href="/submit/">
          <i class="fa-solid fa-award"></i>
          <span class="tooltip-blue">网址提交</span>
        </a>
      </li>
      <li class="submit-tag">
        <a href="/about/">
          <i class="fa-solid fa-circle-info"></i>
          <span class="tooltip-blue">关于本站</span>
        </a>
      </li>
      
    </ul>
  </div>
</div>

    <div class="main-content">
      <nav class="navbar user-info-navbar" id="navbar" role="navigation">
        <ul class="user-info-menu left-links list-inline list-unstyled">
          <li class="menu-item">
            <a href="https://www.imsyy.top" target="_black">
              <i class="fa-solid fa-house"></i>
              <span>主站</span>
            </a>
          </li>
          <li class="menu-item">
            <a href="https://blog.imsyy.top" target="_black">
              <i class="fa-solid fa-blog"></i>
              <span>博客</span>
            </a>
          </li>
          <li class="menu-item" style="margin-left:auto;margin-right: 10px;">
            <i class="fa-solid fa-message" style="margin-right:6px"></i>
            <span id="jinrishici-sentence">正在加载今日诗词....</span>
            <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
          </li>
        </ul>
      </nav>
      
      <!-- 搜索 -->
      <div id="search" class="s-search">
        <div id="search-list" class="hide-type-list">
          <div class="s-type">
            <span></span>
            <div class="s-type-list animated fadeInUp">
              <label for="type-baidu">常用</label>
              <label for="type-search">搜索</label>
              <label for="type-br">工具</label>
              <label for="type-zhihu">社区</label>
              <label for="type-taobao1">生活</label>
              <label for="type-zhaopin">求职</label>
            </div>
          </div>
          <div class="search-group group-a">
            <span class="type-text">常用</span>
            <ul class="search-type">
              <li><input checked hidden type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?wd="
                  data-placeholder="百度一下，你就知道"><label for="type-baidu"><span style="color:#2100E0"
                    class="dark-text">百度</span></label>
              </li>
              <li><input hidden type="radio" name="type" id="type-bing1" value="https://cn.bing.com/search?q="
                  data-placeholder="微软 Bing 搜索"><label for="type-bing1"><span style="color:#007daa">Bing</span></label>
              </li>
              <li><input hidden type="radio" name="type" id="type-google" value="https://www.google.com/search?q="
                  data-placeholder="谷歌搜索"><label for="type-google"><span style="color:#3B83FA">G</span><span
                    style="color:#F3442C">o</span><span style="color:#FFC300">o</span><span
                    style="color:#4696F8">g</span><span style="color:#2CAB4E">l</span><span
                    style="color:#F54231">e</span></label></li>
              <li><input hidden type="radio" name="type" id="type-bili1"
                  value="https://search.bilibili.com/all?keyword=" data-placeholder="哔哩哔哩搜索"><label
                  for="type-bili1"><span style="color:#00a1d6">BiliBili</span></label></li>
              <li><input hidden type="radio" name="type" id="type-git1"
                  value="https://github.com/search?utf8=%E2%9C%93&q=" data-placeholder="搜索 Github 仓库"><label
                  for="type-git1"><span style="color:#000000" class="dark-text">Github</span></label></li>
            </ul>
          </div>
          <div class="search-group group-b">
            <span class="type-text">搜索</span>
            <ul class="search-type">
              <li><input hidden type="radio" name="type" id="type-search" value="https://www.baidu.com/s?wd="
                  data-placeholder="百度一下，你就知道"><label for="type-search"><span style="color:#2319dc"
                    class="dark-text">百度</span></label>
              </li>
              <li><input hidden type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q="
                  data-placeholder="微软 Bing 搜索"><label for="type-bing"><span style="color:#007daa">Bing</span></label>
              </li>
              <li><input hidden type="radio" name="type" id="type-google1" value="https://www.google.com/search?q="
                  data-placeholder="谷歌搜索"><label for="type-google1"><span style="color:#3B83FA">G</span><span
                    style="color:#F3442C">o</span><span style="color:#FFC300">o</span><span
                    style="color:#4696F8">g</span><span style="color:#2CAB4E">l</span><span
                    style="color:#F54231">e</span></label></li>
              <li><input hidden type="radio" name="type" id="type-360" value="https://www.so.com/s?q="
                  data-placeholder="360好搜"><label for="type-360"><span style="color:#19b955">360</span></label></li>
              <li><input hidden type="radio" name="type" id="type-sogo" value="https://www.sogou.com/web?query="
                  data-placeholder="搜狗搜索"><label for="type-sogo"><span style="color:#ff5943">搜狗</span></label></li>
              <li><input hidden type="radio" name="type" id="type-bili" value="https://search.bilibili.com/all?keyword="
                  data-placeholder="哔哩哔哩搜索"><label for="type-bili"><span style="color:#00a1d6">BiliBili</span></label>
              </li>
              <li><input hidden type="radio" name="type" id="type-git"
                  value="https://github.com/search?utf8=%E2%9C%93&q=" data-placeholder="搜索 Github 仓库"><label
                  for="type-git"><span style="color:#000000" class="dark-text">Github</span></label></li>
            </ul>
          </div>
          <div class="search-group group-c">
            <span class="type-text">工具</span>
            <ul class="search-type">
              <li><input hidden type="radio" name="type" id="type-ping" value="https://ping.chinaz.com/"
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-ping"><span
                    style="color:#00599e">PING检测</span></label></li>
              <li><input hidden type="radio" name="type" id="type-icp" value="https://icp.chinaz.com/"
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-icp"><span
                    style="color:#ffac00">备案查询</span></label></li>
              <li><input hidden type="radio" name="type" id="type-br" value="https://rank.chinaz.com/all/"
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-br"><span
                    style="color:#55a300">权重查询</span></label></li>
              <li><input hidden type="radio" name="type" id="type-links" value="https://link.chinaz.com/"
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-links"><span style="color:#313439"
                    class="dark-text">友链检测</span></label></li>
              <li><input hidden type="radio" name="type" id="type-404" value="https://stool.chinaz.com/https?url="
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-404"><span
                    style="color:#f00">HTTPS检测</span></label></li>
              <li><input hidden type="radio" name="type" id="type-ciku" value="https://seo.chinaz.com/"
                  data-placeholder="请输入网址 ( 不带http:// )"><label for="type-ciku"><span
                    style="color:#016DBD">SEO查询</span></label></li>
            </ul>
          </div>
          <div class="search-group group-d">
            <span class="type-text">社区</span>
            <ul class="search-type">
              <li><input hidden type="radio" name="type" id="type-zhihu"
                  value="https://www.zhihu.com/search?type=content&q=" data-placeholder="知乎，与你分享刚编的故事"><label
                  for="type-zhihu"><span style="color:#0084ff">知乎</span></label></li>
              <li><input hidden type="radio" name="type" id="type-wechat"
                  value="http://weixin.sogou.com/weixin?type=2&query=" data-placeholder="微信"><label
                  for="type-wechat"><span style="color:#00a06a">微信</span></label></li>
              <li><input hidden type="radio" name="type" id="type-weibo" value="http://s.weibo.com/weibo/"
                  data-placeholder="微博"><label for="type-weibo"><span style="color:#e6162d">微博</span></label></li>
              <li><input hidden type="radio" name="type" id="type-douban" value="https://www.douban.com/search?q="
                  data-placeholder="豆瓣"><label for="type-douban"><span style="color:#55a300">豆瓣</span></label></li>
              <li><input hidden type="radio" name="type" id="type-why" value="https://ask.seowhy.com/search/?q="
                  data-placeholder="SEO问答社区"><label for="type-why"><span style="color:#428bca">搜外问答</span></label></li>
            </ul>
          </div>
          <div class="search-group group-e">
            <span class="type-text">生活</span>
            <ul class="search-type">
              <li><input hidden type="radio" name="type" id="type-taobao1" value="https://s.taobao.com/search?q="
                  data-placeholder="淘宝"><label for="type-taobao1"><span style="color:#f40">淘宝</span></label></li>
              <li><input hidden type="radio" name="type" id="type-jd" value="https://search.jd.com/Search?keyword="
                  data-placeholder="京东"><label for="type-jd"><span style="color:#c91623">京东</span></label></li>
              <li><input hidden type="radio" name="type" id="type-xiachufang"
                  value="http://www.xiachufang.com/search/?keyword=" data-placeholder="下厨房"><label
                  for="type-xiachufang"><span style="color:#dd3915">下厨房</span></label></li>
              <li><input hidden type="radio" name="type" id="type-xiangha"
                  value="https://www.xiangha.com/so/?q=caipu&s=" data-placeholder="香哈菜谱"><label for="type-xiangha"><span
                    style="color:#930">香哈菜谱</span></label></li>
              <li><input hidden type="radio" name="type" id="type-12306" value="http://www.12306.cn/?"
                  data-placeholder="12306"><label for="type-12306"><span style="color:#07f">12306</span></label></li>
              <li><input hidden type="radio" name="type" id="type-qunar" value="https://www.qunar.com/?"
                  data-placeholder="去哪儿"><label for="type-qunar"><span style="color:#00afc7">去哪儿</span></label></li>
              <li><input hidden type="radio" name="type" id="type-快递100" value="http://www.kuaidi100.com/?"
                  data-placeholder="快递100"><label for="type-快递100"><span style="color:#3278e6">快递100</span></label></li>
            </ul>
          </div>
          <div class="search-group group-f">
            <span class="type-text">求职</span>
            <ul class="search-type">
              <li><input hidden type="radio" name="type" id="type-zhaopin"
                  value="https://sou.zhaopin.com/jobs/searchresult.ashx?kw=" data-placeholder="智联招聘"><label
                  for="type-zhaopin"><span style="color:#689fee">智联招聘</span></label></li>
              <li><input hidden type="radio" name="type" id="type-51job" value="https://search.51job.com/?"
                  data-placeholder="前程无忧"><label for="type-51job"><span style="color:#ff6000">前程无忧</span></label></li>
              <li><input hidden type="radio" name="type" id="type-lagou" value="https://www.lagou.com/jobs/list_"
                  data-placeholder="拉钩网"><label for="type-lagou"><span style="color:#00b38a">拉钩网</span></label></li>
              <li><input hidden type="radio" name="type" id="type-liepin" value="https://www.liepin.com/zhaopin/?key="
                  data-placeholder="猎聘网"><label for="type-liepin"><span style="color:#303a40"
                    class="dark-text">猎聘网</span></label></li>
            </ul>
          </div>
        </div>
        <form action="?s=" method="get" target="_blank" id="super-search-fm"><input type="text" id="search-text"
            placeholder="输入关键字搜索" style="outline:0" autocomplete="off"><button type="submit"><i
              class="fa fa-search "></i></button></form>
        <div class="set-check hidden-xs">
          <input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off">
        </div>
      </div>
      <script type="text/javascript">
        eval(function (e, t, a, c, i, n) {
          if (i = function (e) {
              return (e < t ? "" : i(parseInt(e / t))) + (35 < (e %= t) ? String.fromCharCode(e + 29) : e.toString(
                36))
            }, !"".replace(/^/, String)) {
            for (; a--;) n[i(a)] = c[a] || i(a);
            c = [function (e) {
              return n[e]
            }], i = function () {
              return "\\w+"
            }, a = 1
          }
          for (; a--;) c[a] && (e = e.replace(new RegExp("\\b" + i(a) + "\\b", "g"), c[a]));
          return e
        }('!2(){2 g(){h(),i(),j(),k()}2 h(){d.9=s()}2 i(){z a=4.8(\'A[B="7"][5="\'+p()+\'"]\');a&&(a.9=!0,l(a))}2 j(){v(u())}2 k(){w(t())}2 l(a){P(z b=0;b<e.O;b++)e[b].I.1c("s-M");a.F.F.F.I.V("s-M")}2 m(a,b){E.H.S("L"+a,b)}2 n(a){6 E.H.Y("L"+a)}2 o(a){f=a.3,v(u()),w(a.3.5),m("7",a.3.5),c.K(),l(a.3)}2 p(){z b=n("7");6 b||a[0].5}2 q(a){m("J",a.3.9?1:-1),x(a.3.9)}2 r(a){6 a.11(),""==c.5?(c.K(),!1):(w(t()+c.5),x(s()),s()?E.U(b.G,+T X):13.Z=b.G,10 0)}2 s(){z a=n("J");6 a?1==a:!0}2 t(){6 4.8(\'A[B="7"]:9\').5}2 u(){6 4.8(\'A[B="7"]:9\').W("14-N")}2 v(a){c.1e("N",a)}2 w(a){b.G=a}2 x(a){a?b.3="1a":b.16("3")}z y,a=4.R(\'A[B="7"]\'),b=4.8("#18-C-19"),c=4.8("#C-12"),d=4.8("#17-C-15"),e=4.R(".C-1b"),f=a[0];P(g(),y=0;y<a.O;y++)a[y].D("Q",o);d.D("Q",q),b.D("1d",r)}();',
          62, 77,
          "||function|target|document|value|return|type|querySelector|checked||||||||||||||||||||||||||var|input|name|search|addEventListener|window|parentNode|action|localStorage|classList|newWindow|focus|superSearch|current|placeholder|length|for|change|querySelectorAll|setItem|new|open|add|getAttribute|Date|getItem|href|void|preventDefault|text|location|data|blank|removeAttribute|set|super|fm|_blank|group|remove|submit|setAttribute"
          .split("|"), 0, {}));
      </script>
      <!-- 搜索 end -->
      
      <!-- 公告栏 -->
      <div id="bulletin_box" class="alert alert-primary" role="alert">
        <div class="d-flex text-muted">
          <div><i class="fa-solid fa-bullhorn"></i></div>
          <div class="bulletin mx-1 mx-md-2">
            <ul class="bulletin-ul">
              <li class="scrolltext-title overflowClip_1"><a rel="bulletin">站点内容尚未完成</a> ( 05 / 02 )</li>
            </ul>
          </div>
          <a title="关闭公告" href="javascript:;" rel="external nofollow" onclick="$('#bulletin_box').slideUp('slow');"
            style="margin-left:auto"><i class="fa-solid fa-xmark"></i></a>
        </div>
      </div>
      <script>
        $(document).ready(function () {
          var ul = $(".bulletin-ul");
          var li = ul.children();
          if (li.length > 1) {
            var liHight = $(li[0]).height();
            setInterval('AutoScroll(".bulletin",' + liHight + ')', 1000);
          }
        });

        function AutoScroll(obj, hight) {
          $(obj).find("ul:first").animate({
            marginTop: "-" + hight + "px"
          }, 500, function () {
            $(this).css({
              marginTop: "0px"
            }).find("li:first").appendTo(this);
          });
        }
      </script>
      <!-- 公告栏 end -->
<h4 class="text-gray">
  <i class="fa-solid fa-tags" style="margin-right: 7px;" id="常用网站"></i>常用网站
</h4>
<div class="row">
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://github.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://github.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/github.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>GitHub</strong>
          </a>
          <p class="overflowClip_2">全球最大的同性交友社区</p>
        </div>
      </div>
    </div>
  </div>
  </div>
<br/>

<?php
  $sql = "SELECT title, svg FROM fenlei";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $svg = $row["svg"];
        echo '
<h4 class="text-gray">';
        echo "
   <i class='$svg' style='margin-right: 7px;' id='$title'></i>$title
</h4>";
        $result = mysqli_query($conn,"SELECT * FROM onenav
WHERE str='$title'");

        while($row = mysqli_fetch_array($result))
{
            
            echo '
  <div class="row">
  <div class="col-sm-3">';
            print "
  <div class='xe-widget xe-conversations box2 label-info' onclick=\"window.open('https://github.com/', '_blank')\" data-toggle='tooltip' data-placement='bottom' title='' data-original-title='https://github.com/'>";
            echo '
<div class="xe-comment-entry">';
            echo '
<a class="xe-user-img">';
            echo '
<img data-src="/images/logos/github.png" class="lozad img-circle" width="40" src="/images/loading.svg"></a>';
            echo '
<div class="xe-comment">';
            echo '
<a href="#" class="xe-user-name overflowClip_1">';
            echo "<strong>GitHub</strong>
     </a>";
            echo '
<p class="overflowClip_2">全球最大的同性交友社区</p>';
           echo "
                </div>
              </div>
            </div>
         </div>
";


  
}
      
     echo "
 </div>
 </div>
<br/>";

      
    }
} else {

  
  echo "无法连接数据库！请检查配置是否正确";
}
?>

      
      
      
      
      
      <h4 class="text-gray">
  <i class="fa-solid fa-tags" style="margin-right: 7px;" id="常用网站"></i>常用网站
</h4>
<div class="row">
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://github.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://github.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/github.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>GitHub</strong>
          </a>
          <p class="overflowClip_2">全球最大的同性交友社区</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://vercel.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://vercel.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/vercel.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>Vercel</strong>
          </a>
          <p class="overflowClip_2">目前最好用的网站托管服务</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://console.upyun.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://console.upyun.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/upyun.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>又拍云</strong>
          </a>
          <p class="overflowClip_2">静态文件存储与 CDN 加速</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://console.cloud.tencent.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://console.cloud.tencent.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/cloudtencent.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>腾讯云</strong>
          </a>
          <p class="overflowClip_2">国内几大云服务商其一，俗称凉心云</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.aliyun.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.aliyun.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/aliyun.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>阿里云</strong>
          </a>
          <p class="overflowClip_2">全球云计算服务及云解决方案提供商</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.bilibili.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.bilibili.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/bilibili.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>哔哩哔哩</strong>
          </a>
          <p class="overflowClip_2">叔叔我啊，最讨厌不能挣钱的东西了</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.aliyundrive.com/drive', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.aliyundrive.com/drive">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/aliyundrive.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>阿里云盘</strong>
          </a>
          <p class="overflowClip_2">目前正在用的网盘</p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-sm-3">
    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://replit.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://replit.com/">
      <div class="xe-comment-entry">
        <a class="xe-user-img">
          <img data-src="/images/logos/Replit.png" class="lozad img-circle" width="40" src="/images/loading.svg">
        </a>
        <div class="xe-comment">
          <a href="#" class="xe-user-name overflowClip_1">
            <strong>Replit</strong>
          </a>
          <p class="overflowClip_2">免费的协作式在线 IDE</p>
        </div>
      </div>
    </div>
  </div>
  
</div>
<br />

      
      
      
      <!-- 悬浮窗 -->
      <div class="wapnone fk_service">
        <ul>
          <li class="fk_service_box fk_service_ax" onclick="switchNightMode()">
            <div class="fk_service_ax_cont" id="fk-span"> <span class="fk_service_triangle"
                id="fk-span-right"></span><span id="fk_service_text">切换夜间模式</span></div>
          </li>
          <li class="fk_service_box fk_service_jk">
            <a data-toggle="sidebar">
              <div class="fk_service_jk_cont" id="fk-span"> <span class="fk_service_triangle"
                  id="fk-span-right"></span>切换侧边栏</div>
            </a>
          </li>
          <li class="fk_service_box fk_service_dh" onclick="window.location=('/submit/')">
            <div class="fk_service_dh_cont" id="fk-span"> <span class="fk_service_triangle"
                id="fk-span-right"></span>提交网站收录</div>
          </li>
          <a rel="go-top">
            <li class="fk_service_box fk_service_upward" id="topup" style="display: none;">
              <div class="fk_service_upward_cont" id="fk-span"> <span class="fk_service_triangle"
                  id="fk-span-right"></span> <span>返回顶部</span>
              </div>
            </li>
          </a>
        </ul>
      </div>
      <!-- 悬浮窗 end -->
      
<script src="/js/footer.min.js"></script>

<footer class="main-footer sticky footer-type-1">
  <div class="footer-inner">
    <!-- Add your copyright text here -->
    <p>
      
      &copy; 2020 - 2022
      <a href="https://www.imsyy.top" target="_blank"><strong>無名</strong></a> | Design by <a href="http://viggoz.com" target="_blank"><strong>Viggo</strong></a> | Power by <a href="https://hexo.io/" target="_blank"><strong>Hexo</strong></a> & <a href="https://github.com/HCLonely/hexo-theme-webstack/" target="_blank"><strong>hexo-theme-webstack</strong></a>
    </p>
    <!-- <div class="go-up">
      <a href="#" rel="go-top">
        <i class="fas fa-angle-up"></i>
      </a>
    </div> -->
  </div>
</footer>
</div>
</div>

<script src="/js/bootstrap.min.js"></script>
<script src="/js/TweenLite.min.js"></script>
<script src="/js/resizeable.min.js"></script>
<script src="/js/joinable.js"></script>
<script src="/js/xenon-api.min.js"></script>
<script src="/js/xenon-toggles.min.js"></script>
<script src="/js/xenon-custom.min.js"></script>



<script src="/js/lozad.min.js"></script>




<!-- 直接添加html内容即可 -->
<!-- 可设置多行 -->

</body>

</html>