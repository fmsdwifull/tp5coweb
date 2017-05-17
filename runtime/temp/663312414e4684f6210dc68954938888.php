<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"/var/www/html/tp5coweb/public/../application/index/view/artlist/artlist.html";i:1491195807;s:72:"/var/www/html/tp5coweb/public/../application/index/view/public/head.html";i:1494990703;s:74:"/var/www/html/tp5coweb/public/../application/index/view/public/footer.html";i:1495007804;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $confres['sitename']; ?>-<?php echo $cateInfo['catename']; ?></title>
<meta name="description" content="<?php echo $cateInfo['desc']; ?>" />
<meta name="keywords" content="<?php echo $cateInfo['keywords']; ?>" />
    <link href="__INDEX__/style/bootstrap.css" rel="stylesheet">
    <script src="__INDEX__/style/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="__INDEX__/style/style.css" />
    <script src="__INDEX__/style/jquery-1.4.1.min.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.error.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jtemplates.js" type="text/javascript"></script>
    <script src="__INDEX__/style/jquery.form.js" type="text/javascript"></script>
    <script src="__INDEX__/style/lazy.js" type="text/javascript"></script>
    <script type="text/javascript" src="__INDEX__/style/wp-sns-share.js"></script>
    <script type="text/javascript" src="__INDEX__/style/voterajax.js"></script>
    <script type="text/javascript" src="__INDEX__/style/userregister.js"></script>
    <link rel="stylesheet" href="__INDEX__/style/votestyles.css" type="text/css" />
    <link rel="stylesheet" href="__INDEX__/style/voteitup.css" type="text/css" />
   <link rel="stylesheet" href="__INDEX__/style/list.css" type="text/css" />
</head>
<body id="list_style_2" class="list_style_2">
 <script>
 function subForm()
 {

 formsearch.submit();
 //form1为form的id
 }
 </script>
<script type="text/javascript">
    function showMask() {
        $("#mask").css("height", $(document).height());
        $("#mask").css("width", $(document).width());
        $("#mask").show();
    }  
</script>
<div id="mask" class="mask" onclick="CloseMask()"></div> 
<div id="header_wrap">

    <div id="header">
        <div style="float: left; width: 310px;">
            <h1>
                <a href="/" title="宽屏大气文章类--41天鹰模板">宽屏大气文章类--41天鹰模板</a>
                <div class="" id="logo-sub-class">
                </div>
            </h1>
        </div>
        <div id="navi">

<ul id="jsddm">
<li><a class="navi_home" href="<?php echo url('index/index'); ?>">首页</a></li>
<?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<li><a <?php if($cate['children'] != 0): ?> class="havechild" <?php endif; ?> href="__APP__/public/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>"><?php echo $cate['catename']; ?></a>
<?php if($cate['children'] != 0): ?>
<ul>
<?php foreach ($cate['children'] as $k2 => $v2):?>
<li><a href="__APP__/public/index.php/index/<?php if($v2['type'] == 1): ?>artlist<?php elseif($v2['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['catename'];?></a></li>
<?php endforeach;?>
</ul>
<?php endif; ?>
 </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

            <div style="clear: both;">
            </div>

            
        </div>
        <div style="float: right; width: 209px;">
            <div class="widget" style="height: 30px; padding-top: 20px;">
                <div style="float: left;">
      <form  name="formsearch" action="<?php echo url('search/index'); ?>" method="get">             
<input name="keywords" type="text" style="background-color: #000000;padding-left: 10px; font-size: 12px;font-family: 'Microsoft Yahei'; color: #999999;height: 29px; width: 160px; border: solid 1px #666666; line-height: 28px;" id="go" value="在这里搜索..." onfocus="if(this.value=='在这里搜索...'){this.value='';}"  onblur="if(this.value==''){this.value='在这里搜索...';}" />
        </form>
                        </div>
                <div style="float: left;">
                    <img src="__INDEX__/images/search-new.png" id="imgSearch" style="cursor: pointer; margin: 0px;
                        padding: 0px;" onclick="subForm()"  /></div>
                <div style="clear: both;">
                </div>
            </div>
        </div>
        
    </div>
</div>

</div>

    <div id="wrapper">
       

    <div id="xh_container">
        <div id="xh_content">

        <div class="path"><a href='#'>主页</a> > 
        <?php if(is_array($posArr) || $posArr instanceof \think\Collection): $i = 0; $__LIST__ = $posArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$posCate): $mod = ($i % 2 );++$i;?>
        <a href='<?php echo url('artlist/index',array('cateid'=>$posCate['id'])); ?>'><?php echo $posCate['catename']; ?></a> > 
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </div><div class="clear"></div>
            <div class="xh_area_h_3" style="margin-top: 40px;">
                <?php if(is_array($artRes) || $artRes instanceof \think\Collection): $i = 0; $__LIST__ = $artRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
                    <div class="xh_post_h_3 ofh">
                        <?php if($article['thumb'] != ''): ?>
                        <div class="xh">
                            <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>">
                            <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['title']; ?>" height="240" width="400"></a>
                        </div>
                        <?php endif; ?>
                        <div class="<?php if($article['thumb'] != ''): ?>r <?php endif; ?> ofh">
                            <h2 class="xh_post_h_3_title ofh" style="height:60px;">
                                <a target="_blank" href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a>
                            </h2>
                            <span class="time"><?php echo date("Y年m月d日",$article['time']); ?></span>
                            <div class="xh_post_h_3_entry ofh" style="color:#555;height:80px; overflow:hidden;">
                            
                            <?php echo $article['desc']; ?>
                            </div>
                            <div <?php if($article['thumb'] != ''): ?> class="b" <?php endif; ?>>
                                <a href="<?php echo url('article/index',array('artid'=>$article['id'])); ?>" class="xh_readmore" rel="nofollow">read
                                    more</a> <span title="<?php echo $article['zan']; ?>人赞" class="xh_love"><span class="textcontainer"><span><?php echo $article['zan']; ?></span></span> </span> <span title="<?php echo $article['click']; ?>人浏览" class="xh_views">
                                                <?php echo $article['click']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>       
                <div id="pagination"><div class="wp-pagenavi">
                <?php echo $artRes->render(); ?>

                </div></div>
            </div>
        </div>
        <div id="xh_sidebar">        
<!-- 右侧 -->

         <div class="widget">

<div style="background: url('__INDEX__/images/hots_bg.png') no-repeat scroll 0 0 transparent;width:250px;height:52px;margin-bottom:15px;">
</div>
<ul id="ulHot">
<?php if(is_array($hotRes) || $hotRes instanceof \think\Collection): $i = 0; $__LIST__ = $hotRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotArt): $mod = ($i % 2 );++$i;?>
<li style="border-bottom:dashed 1px #ccc;height:70px; margin-bottom:15px;">
<div style="float:left;width:85px;height:55px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$hotArt['id'])); ?>" target="_blank"><img src="<?php echo $hotArt['thumb']; ?>" width="83" title="<?php echo $hotArt['title']; ?>" /></a></div>
<div style="float:right;width:145px;height:52px; overflow:hidden;"><a href="<?php echo url('Article/index',array('artid'=>$hotArt['id'])); ?>" target="_blank" title="<?php echo $hotArt['title']; ?>"><?php echo $hotArt['title']; ?></a></div>
</li>
<?php endforeach; endif; else: echo "" ;endif; ?>



</ul>
                </div>
            
            <div class="widget portrait">
    <div>
        
    </div>
</div>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="boxBor"></div>

    <div class="boxBor" onclick="IBoxBor()" style="cursor:pointer;"></div>
    <script type="text/javascript">
        $(function () {
            var imgHoverSetTimeOut = null;
            $('.xh_265x265 img').hover(function () {
                var oPosition = $(this).offset();
                var oThis = $(this);
                $(".boxBor").css({
                    left: oPosition.left,
                    top: oPosition.top,
                    width: oThis.width(),
                    height: oThis.height()
                });
                $(".boxBor").show();
                var urlText = $(this).parent().attr("href");
                $("#hdBoxbor").val(urlText);
            }, function () {
                imgHoverSetTimeOut = setTimeout(function () { $(".boxBor").hide(); }, 500);
            });
            $(".boxBor").hover(
                function () {
                    clearTimeout(imgHoverSetTimeOut);
                }
                , function () {
                    $(".boxBor").hide();
                }
            );
        });
        function IBoxBor() {
            window.open($("#hdBoxbor").val());
        }
        function goanewurl() {
            window.open($("#hdUrlFocus").val());
        }
</script>

    </div>

<div id="footer_wrap">
    <div id="footer">
        <div class="footer_navi">
            <ul class="menu">
                <?php if(is_array($recBottom) || $recBottom instanceof \think\Collection): $i = 0; $__LIST__ = $recBottom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                <li id="menu-item-156" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-156">
                    <a href="__APP__/public/index.php/index/<?php if($cate['type'] == 1): ?>artlist<?php elseif($cate['type'] == 3): ?>imglist<?php else: ?>page<?php endif; ?>/index/cateid/<?php echo $cate['id']; ?>" target="_blank"><?php echo $cate['catename']; ?></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
         
            </ul>
        </div>
        <div class="footer_info">
            <span class="legal">Copyright &#169; 2016-2020 ThinkPHP5.0版权所有&#160;&#160;&#160;<a href="#">
                琼ICP备******号</a>&#160;&#160;&#160;

        </div>
    </div>
</div>

<div style="display: none;" id="scroll">
</div>
<script type="text/javascript" src="__INDEX__/style/z700bike_global.js"></script>
</body>
</html>
