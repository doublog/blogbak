<?php
require_once('../../../wp-config.php');
require_once plugin_dir_path(__FILE__).'down.php';
define("ordown",plugin_dir_path(__FILE__));
$id=$_GET['id'];
$title = get_post($id)->post_title;
$ordown_name=get_post_meta($id, 'ordown_name', true);
$ordown_size=get_post_meta($id, 'ordown_size', true);
$ordown_date=get_post_meta($id, 'ordown_date', true);
$ordown_version=get_post_meta($id, 'ordown_version', true);
$ordown_author=get_post_meta($id, 'ordown_author', true);
$ordown_downurl1=get_post_meta($id, 'ordown_downurl1', true);
$ordown_keyl1=get_post_meta($id, 'ordown_keyl1', true);
$ordown_downurl2=get_post_meta($id, 'ordown_downurl2', true);
$ordown_keyl2=get_post_meta($id, 'ordown_keyl2', true);
$ordown_downurl3=get_post_meta($id, 'ordown_downurl3', true);
$ordown_downurl4=get_post_meta($id, 'ordown_downurl4', true);
$ordown_downname1=get_post_meta($id, 'ordown_downname1', true);
$ordown_downurl5=get_post_meta($id, 'ordown_downurl5', true);
$ordown_downname2=get_post_meta($id, 'ordown_downname2', true);
$ordown_ad6    = get_option('ordown_ad6');
$ordown_link6    = get_option('ordown_link6');
$ordown_ad7    = get_option('ordown_ad7');
$ordown_link7    = get_option('ordown_link7');
$ordown_ad8    = get_option('ordown_ad8');
$ordown_link8    = get_option('ordown_link8');
$ordown_ad9    = get_option('ordown_ad9');
$ordown_link9    = get_option('ordown_link9');
$ordown_ad10    = get_option('ordown_ad10');
$ordown_link10    = get_option('ordown_link10');
$ordown_ad11    = get_option('ordown_ad11');
$ordown_link11    = get_option('ordown_link11');
$ordown_ad12    = get_option('ordown_ad12');
$ordown_link12    = get_option('ordown_link12');
$ordown_ad13    = get_option('ordown_ad13');
$ordown_link13    = get_option('ordown_link13');
$ordown_ad14    = get_option('ordown_ad14');
$ordown_link14    = get_option('ordown_link14');
$ordown_ad15    = get_option('ordown_ad15');
$ordown_link15    = get_option('ordown_link15');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?>下载页面</title>
<meta name="keywords" content="<?php echo $title;?>" />
<meta name="description" content="<?php echo $title;?>下载" />
<link rel='stylesheet'   href='<?php echo home_url();?>/wp-content/plugins/ordown/css/download.css' type='text/css' media='all' />
<link rel='stylesheet' id='_bootstrap-css'  href='http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.css?ver=9.0.0' type='text/css' media='all' />
<link rel="dns-prefetch" href="//apps.bdimg.com">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="下载中心">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="<?php echo home_url();?>/favicon.ico">

<!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
<noscript></head></noscript>

<body>
<header class="header">
  <div class="container">
  <div class="logo">
    <a href="<?php echo home_url();?>" title="WordPress"><img src="<?php echo get_option('ordown_ad6');?>">网站品牌文字</a>
  </div>
  <div class="brand">欢迎分享我们的资源地址
    </div>    
            <ul class="site-nav site-navbar">
                        <li><a href="<?php echo get_option('ordown_link8');?>"><?php echo get_option('ordown_ad8');?></a></li>
                        <li><a href="<?php echo get_option('ordown_link9');?>"><?php echo get_option('ordown_ad9');?></a></li>
                        <li><a href="<?php echo get_option('ordown_link10');?>"><?php echo get_option('ordown_ad10');?></a></li>
                        <li><a href="<?php echo get_option('ordown_link11');?>"><?php echo get_option('ordown_ad11');?></a></li>  
            </ul>
    <div class="topbar" style="margin-left:15px;margin-right:0px">
      <ul class="site-nav topmenu">
        <li><a href="<?php echo get_option('ordown_link12');?>"><?php echo get_option('ordown_ad12');?></a></li>
                <li><a href="<?php echo get_option('ordown_link13');?>"><?php echo get_option('ordown_ad13');?></a></li>
                <li><a href="<?php echo get_option('ordown_link14');?>"><?php echo get_option('ordown_ad14');?></a></li>
                <li><a href="<?php echo get_option('ordown_link15');?>"><?php echo get_option('ordown_ad15');?></a></li>
      </ul>
       Hi, 你好，感谢下载！&nbsp; &nbsp; <a href="<?php echo home_url();?>">返回首页</a>
    </div>
  </div>
</header>
<br \>
<br \>
<div>
</div>

<div class="ordown-focus" id="focus">
    <div class="container">
    <div class="ordown-header">
        <h1>官方下载通道</h1>
        <h2><a style="color:#999" href="<?php echo get_permalink( $id );?>"><?php echo $title;?></a></h2>
        <div class="ordown-buy" style="margin-top:15px">
    <?php if($ordown_downurl1){?>
    <a class="ordown-button" href="download1.php?id=<?php echo $id;?>">百度云盘</a>
                <?php } if($ordown_downurl2){?>
          <a class="ordown-button" href="download2.php?id=<?php echo $id;?>">360云盘</a>
                <?php } if($ordown_downurl4){?>
                <?php } if($ordown_downname1){?>
                <a class="ordown-button" href="<?php echo $ordown_downurl4;?>" target="_blank"><?php echo $ordown_downname1;?></a>
                <?php } if($ordown_downurl5){?>
                <?php } if($ordown_downname2){?>
                <a class="ordown-button" href="<?php echo $ordown_downurl4;?>" target="_blank"><?php echo $ordown_downname2;?></a>
          <?php }?>      
        </div>
        <div style="margin-top:-10px;margin-bottom:-15px">
        <p class="ordown-alert">
        <strong>提取秘钥： </strong><?php echo $ordown_keyl1;?>   <?php echo $ordown_keyl2;?></br>
        <strong>文件信息： </strong><?php echo $ordown_name;?>&nbsp; 
<?php echo $ordown_size;?>&nbsp; 
<?php echo $ordown_date;?>&nbsp; 
<?php echo $ordown_version;?>&nbsp; 
<?php echo $ordown_author;?>       
        </p>
        </div>
        <p class="ordown-alert">
        <strong>版权声明：</strong>本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请购买正版，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系站长删除，我们将及时处理！
        </p>
    </div>
    <?php if($ordown_ad7){ ?>
    <div class="ordown-thumbnail">
        <?php  echo stripslashes($ordown_ad7); ?>
    </div>
    <?php }
    ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
    <p>&copy; 2015 <a href="<?php echo home_url();?>"><?php echo get_bloginfo("name");?></a> &nbsp; <a href='<?php echo home_url();?>/sitemap.xml'>网站地图</a>&nbsp; Copyright by <a href='<?php echo home_url();?>'>资源分享</a></p>
  </div>
</footer>
</body>
</html>