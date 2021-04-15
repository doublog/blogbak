<?php
require_once('../../../wp-config.php');
require_once plugin_dir_path(__FILE__).'ordown.php';
define("ordown",plugin_dir_path(__FILE__));
$id=$_GET['id'];
$title = get_post($id)->post_title;
$ordown_name=get_post_meta($id, 'ordown_name', true);
$ordown_size=get_post_meta($id, 'ordown_size', true);
$ordown_date=get_post_meta($id, 'ordown_date', true);
$ordown_version=get_post_meta($id, 'ordown_version', true);
$ordown_author=get_post_meta($id, 'ordown_author', true);
$ordown_downurl1=get_post_meta($id, 'ordown_downurl1', true);
$ordown_downurl2=get_post_meta($id, 'ordown_downurl2', true);
$ordown_downurl3=get_post_meta($id, 'ordown_downurl3', true);
$ordown_ad5    = get_option('ordown_ad5');
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
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $title;?>官方下载通道</title>
<style>
body{margin: 0;padding: 0;font-family: 'microsoft yahei';font-size: 14px;overflow: hidden;}
#previewbar{background-color: #444;color: #eee;height: 100px;line-height: 100px;position: relative;z-index: 9}
#previewlogo{float: left;padding: 0 20px 0 180px;position: relative;background: url(<?php echo get_option('ordown_ad6');?>) no-repeat 20px 50%;}
#previewtitle{float: right;padding: 0 20px;position: relative;}
#previewtitle i{position: relative;top: -2px;margin-left: 5px;display: inline-block;border-left: 5px solid transparent;border-right: 5px solid transparent;border-top: 5px solid #fff;}
#previewtitle:hover{background-color: #333;}
#previewtitle:hover #previewlist{display: block;}
#previewlist{position: absolute;top: 98px;left: 0;width: 120%;background-color: #333;display: none;}
#previewlist ul{list-style: none;margin: 0;padding: 5px 0;}
#previewlist ul a{color: #eee;padding: 0 20px;line-height: 48px;font-size: 12px;text-decoration: none;display: block;}
#previewlist ul a:hover{color: #fff;background-color: #222;}
#previewaction{float: right;}
#previewaction a{display: inline-block;padding: 0 30px;color: #fff;background-color: #00BE3C;text-decoration: none;}
#previewaction a:hover{background-color: #1AC550;}
#previewframe{position: absolute;top: 48px;bottom: 0;left: 0;right: 0;}
#previewframe iframe{border: 0;width: 100%;height: 100%;margin: 0;position: absolute;top: 0;bottom: 0;left: 0;right: 0;}
</style>
<noscript></head></noscript>
<body>
<h1 style="display:none"><?php echo $title;?>官方下载通道</h1>
<div id="previewbar">
<div id="previewlogo"><?php echo $title;?>官方下载</div>
	<div id="previewaction">
		<a href="<?php echo get_permalink( $id );?>">关闭下载</a>
	</div>
	<div id="previewtitle">推荐资源<i></i>
		<div id="previewlist">
			<ul>
				<li><a href="<?php echo get_option('ordown_link8');?>"><?php echo get_option('ordown_ad8');?></a></li>
				<li><a href="<?php echo get_option('ordown_link9');?>"><?php echo get_option('ordown_ad9');?></a></li>
				<li><a href="<?php echo get_option('ordown_link10');?>"><?php echo get_option('ordown_ad10');?></a></li>
                                <li><a href="<?php echo get_option('ordown_link11');?>"><?php echo get_option('ordown_ad11');?></a></li>
			</ul>
		</div>
	</div>
	<div id="previewtitle">赞助商广告<i></i>
		<div id="previewlist">
			<ul>
				<li><a href="<?php echo get_option('ordown_link12');?>"><?php echo get_option('ordown_ad12');?></a></li>
				<li><a href="<?php echo get_option('ordown_link13');?>"><?php echo get_option('ordown_ad13');?></a></li>
				<li><a href="<?php echo get_option('ordown_link14');?>"><?php echo get_option('ordown_ad14');?></a></li>
                                <li><a href="<?php echo get_option('ordown_link15');?>"><?php echo get_option('ordown_ad15');?></a></li>
			</ul>
		</div>
	</div>
</div>
<?php if($ordown_downurl2){ ?>
<div id="previewframe">
	<iframe src="<?php echo $ordown_downurl2;?>" frameborder="0"></iframe>
</div>
<?php }
?>
<?php echo stripslashes($ordown_ad5);?>
</body>
</html>