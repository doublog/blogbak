<?php

global $wpdb;
define("ordown",plugin_dir_path(__FILE__));

//放弃默认头部载入css和js
/*function ordown_style() {
    echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/style.css" type="text/css" />';
    echo'<script src="'.plugin_dir_url( __FILE__ ).'js/jquery.js" type="text/javascript"></script>';
}
add_action('wp_head', 'ordown_style');*/

function ordown_styles() { //头部载入css
  if (is_singular()) {  //判断为文章页载入
  echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/style.css" type="text/css" />';
  }
}
add_action( 'wp_head', 'ordown_styles' ); 

function ordown_scripts() { //底部加载js
  if (is_singular()) {  //判断为文章页载入
  wp_register_script('plugin_script', plugins_url('js/jquery.js', __FILE__), array('jquery'),'', true);
  wp_enqueue_script('plugin_script');
  }
}
add_action( 'wp_enqueue_scripts', 'ordown_scripts' );

function ordown_show_down($ordown_content)
{
    $filter = '/<(iframe|script)/i';//是需要过滤的关键词，关键词之间用分隔符 | 隔开即可,修复跨站漏洞，部分用户反映页面出错
    if (preg_match($filter,$ordown_content,$matches)) {
    $ordown_content = htmlspecialchars($ordown_content);
    }

	if(is_single())
	{
                $id=$_GET['id'];
                $title = get_post($id)->post_title;
		$ordown_start=get_post_meta(get_the_ID(), 'ordown_start', true);
                $ordown_speed=get_post_meta(get_the_ID(), 'ordown_speed', true);
                $ordown_official=get_post_meta(get_the_ID(), 'ordown_official', true);
                $ordown_reply=get_post_meta(get_the_ID(), 'ordown_reply', true);
		$ordown_name=get_post_meta(get_the_ID(), 'ordown_name', true);
		$ordown_size=get_post_meta(get_the_ID(), 'ordown_size', true);
		$ordown_date=get_post_meta(get_the_ID(), 'ordown_date', true);
		$ordown_version=get_post_meta(get_the_ID(), 'ordown_version', true);
		$ordown_author=get_post_meta(get_the_ID(), 'ordown_author', true);
		$ordown_downurl1=get_post_meta(get_the_ID(), 'ordown_downurl1', true);
                $ordown_keyl1=get_post_meta(get_the_ID(), 'ordown_keyl1', true);
		$ordown_downurl2=get_post_meta(get_the_ID(), 'ordown_downurl2', true);
                $ordown_keyl2=get_post_meta(get_the_ID(), 'ordown_keyl2', true);
		$ordown_downurl3=get_post_meta(get_the_ID(), 'ordown_downurl3', true);
                $ordown_downurl4=get_post_meta(get_the_ID(), 'ordown_downurl4', true);
                $ordown_downname1=get_post_meta(get_the_ID(), 'ordown_downname1', true);
                $ordown_downurl5=get_post_meta(get_the_ID(), 'ordown_downurl5', true);
                $ordown_downname2=get_post_meta(get_the_ID(), 'ordown_downname2', true);////资源名称、资源大小、更新时间、适用版本、作者信息
                $ordown_ad    = get_option('ordown_ad');
 if($ordown_start)
		{
			$ordown_content .= '<br />';
			$ordown_content .= '<div class="ordown">
				<a rel="external nofollow" href="'.plugin_dir_url( __FILE__ ).'down.php?id='.get_the_ID().'" class="ordown-demo" style="float:left" target="_blank"><i class="fa fa-cloud-download" style="margin-right:4px;margin-top:3px"></i>官方下载</a>&nbsp;&nbsp;    
  <a href="#" rel="rs-dialog" data-target="myModal" class="ordown-demo"><i class="fa fa-cloud-download" style="margin-right:4px;margin-top:3px"></i>极速下载</a>&nbsp;&nbsp;
				<a rel="external nofollow" href="'.plugin_dir_url( __FILE__ ).'demo.php?id='.get_the_ID().'" class="ordown-demo" target="_blank"><i class="fa fa-eye" style="margin-right:4px;margin-top:3px"></i>在线演示</a>&nbsp;&nbsp;

<div class="rs-dialog" id="myModal">
  <div class="rs-dialog-box">
    <div class="rs-dialog-content">
      <a class="close" href="#">×</a>

      <div class="rs-dialog-header">
        <h3 style="font-size:16px;border-bottom:none;">'.get_bloginfo("name").'极速下载通道： '.$title.'</h3>
      </div>

      <div class="rs-dialog-body">
          <div style="margin-top:0px">'.stripslashes($ordown_ad).'</div>             
          <div style="margin-top:20px">
          <a class="ordown-button" href="'.$ordown_downurl1.'" target="_blank">百度云盘</a>
          <a class="ordown-button" href="'.$ordown_downurl2.'" target="_blank">360云盘</a>
          <a class="ordown-button" href="'.$ordown_downurl4.'" target="_blank">'.$ordown_downname1.'</a>
          <a class="ordown-button" href="'.$ordown_downurl5.'" target="_blank">'.$ordown_downname2.'</a><hr />
          <a style="color:#999"><strong>提取密码：</strong>  '.$ordown_keyl1.'&nbsp;&nbsp;'.$ordown_keyl1.'&nbsp;&nbsp;&nbsp;&nbsp;<strong>资源详情：</strong>'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;&nbsp;'.$ordown_version.'&nbsp;&nbsp;'.$ordown_author.'&nbsp;&nbsp;</a>  
           
          </div>       
      </div>

      <div class="rs-dialog-footer">
      <a><strong>版权声明：</strong>本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请购买正版，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系站长删除，我们将及时处理！</a>
      </div>

    </div>
  </div>
</div>
				<a class="ordown-demo" style="float:right">
				'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;'.$ordown_version.'&nbsp;'.$ordown_size.'&nbsp;'.$ordown_author.'
				</a>
			</div>';
		}

if($ordown_official)
		{
			$ordown_content .= '<br />';
			$ordown_content .= '<div class="ordown">
				<a rel="external nofollow" href="'.plugin_dir_url( __FILE__ ).'down.php?id='.get_the_ID().'" class="ordown-demo" style="float:left" target="_blank"><i class="fa fa-cloud-download" style="margin-right:4px;margin-top:3px"></i>官方下载</a>&nbsp;&nbsp;    
				<a class="ordown-demo" style="float:right">
				'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;'.$ordown_version.'&nbsp;'.$ordown_size.'&nbsp;'.$ordown_author.'
				</a>
			</div>';
		}

if($ordown_speed)
		{
			$ordown_content .= '<br />';
			$ordown_content .= '<div class="ordown">
                <a href="#" rel="rs-dialog" data-target="myModal" class="ordown-demo"><i class="fa fa-cloud-download" style="margin-right:4px;margin-top:3px"></i>极速下载</a>&nbsp;&nbsp;
<div class="rs-dialog" id="myModal">
  <div class="rs-dialog-box">
    <div class="rs-dialog-content">
      <a class="close" href="#">×</a>

      <div class="rs-dialog-header">
        <h3 style="font-size:16px;border-bottom:none;">欢迎使用'.get_bloginfo("name").'极速下载资源： '.$title.'</h3>
      </div>

      <div class="rs-dialog-body">
          <a href="'.get_option('ordown_link1').'" target="_blank" style="width:100%"><img src="'.get_option('ordown_ad1').'"></a>
          <a href="'.get_option('ordown_link2').'" target="_blank" style="width:100%"><img src="'.get_option('ordown_ad2').'"></a>
          <a href="'.get_option('ordown_link3').'" target="_blank" style="width:100%"><img src="'.get_option('ordown_ad3').'"></a>
          <a href="'.get_option('ordown_link4').'" target="_blank" style="width:100%"><img src="'.get_option('ordown_ad4').'"></a>             
          <div style="margin-top:20px">
          <a class="ordown-button" href="'.$ordown_downurl1.'" target="_blank">百度云盘</a>
          <a class="ordown-button" href="'.$ordown_downurl2.'" target="_blank">360云盘</a>
          <a class="ordown-button" href="'.$ordown_downurl4.'" target="_blank">'.$ordown_downname1.'</a>
          <a class="ordown-button" href="'.$ordown_downurl5.'" target="_blank">'.$ordown_downname2.'</a><hr />
          <a style="color:#999"><strong>提取密码：</strong>  '.$ordown_keyl1.'&nbsp;&nbsp;'.$ordown_keyl1.'&nbsp;&nbsp;&nbsp;&nbsp;<strong>资源详情：</strong>'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;&nbsp;'.$ordown_version.'&nbsp;&nbsp;'.$ordown_author.'&nbsp;&nbsp;</a>  
           
          </div>       
      </div>

      <div class="rs-dialog-footer">
      <a><strong>版权声明：</strong>本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请购买正版，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系站长删除，我们将及时处理！</a>
      </div>

    </div>
  </div>
</div>
				<a class="ordown-demo" style="float:right">
				'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;'.$ordown_version.'&nbsp;'.$ordown_size.'&nbsp;'.$ordown_author.'
				</a>
			</div>';
		}

if($ordown_reply)
		{
$email = null;
$user_ID = (int) wp_get_current_user()->ID;
if ($user_ID > 0) {
$email = get_userdata($user_ID)->user_email;
//对博主直接显示内容
//$admin_email = "i@orwei.com"; 博主Email,直接对博主显示而不需要评论！
if( is_super_admin() ){ 
return $ordown_content .= '<div class="ordown"><a class="ordown-demo" style="float:left" target="_blank">你是管理员，此处对你毫无保留！</a> </div>';
}
} 
else if (isset($_COOKIE['comment_author_email_' . COOKIEHASH])) {
$email = str_replace('%40', '@', $_COOKIE['comment_author_email_' . COOKIEHASH]);
} 
else {
return $ordown_content .= '<div class="ordown"><a class="ordown-demo" style="float:left" target="_blank">Hi，你好，文件需评论回复才能下载！</a> </div>';
}

if (empty($email)) {
return $ordown_content .= '<div class="ordown"><a class="ordown-demo" style="float:left" target="_blank">Hi，你好，文件需评论回复才能下载！</a> </div>';
}
global $wpdb;
$post_id = get_the_ID();
$query = "SELECT `comment_ID` FROM {$wpdb->comments} WHERE `comment_post_ID`={$post_id} and `comment_approved`='1' and `comment_author_email`='{$email}' LIMIT 1";
if ($wpdb->get_results($query)) {
return $ordown_content .= '<div class="ordown">
				<a rel="external nofollow" href="'.plugin_dir_url( __FILE__ ).'down.php?id='.get_the_ID().'" class="ordown-demo" style="float:left" target="_blank"><i class="fa fa-cloud-download" style="margin-right:4px;margin-top:3px"></i>官方下载</a>&nbsp;&nbsp;    
				<a class="ordown-demo" style="float:right">
				'.$ordown_name.'&nbsp;&nbsp;'.$ordown_date.'&nbsp;'.$ordown_version.'&nbsp;'.$ordown_size.'&nbsp;'.$ordown_author.'
				</a>
			</div>';
} else {
return $ordown_content .= '<div class="ordown"><a class="ordown-demo" style="float:left" target="_blank">Hi，你好，文件需评论回复才能下载！</a></div>';

}
}


	}
	return $ordown_content;
}
add_action('the_content','ordown_show_down');
add_shortcode("ordown",'ordown_show_down');

?>
<?php include('ordown-meta-box.php'); ?>