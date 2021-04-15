<?php
/*
Plugin Name: 小插件
Description: 给主题添加点小功能
Author: 云落
*/
//文章推送
add_action('publish_post', 'fanly_sync_post'); //钩子，在文章发布时执行 
function fanly_sync_post($post_ID) { 
$key='654123'; //输入你设置的密钥 
$url='https://jp.doublog.com/post.php';//API 地址,就是接受数据的那个站点
$url='http://blogbak.free.fr/post.php';//API 地址,就是接受数据的那个站点
$post_info = get_post($post_ID); 
if ( $post_info->post_status == 'publish' && $_POST['original_post_status'] != 'publish' ) { 
$title=$_POST['post_title']; 
$content=$_POST['content']; 
$date=$_POST['aa'].'-'.$_POST['mm'].'-'.$_POST['jj'].' '.$_POST['hh'].':'.$_POST['mn'].':'.$_POST['ss']; 
$category=''; 
for($x=1;$x<count($_POST['post_category']);$x++) { 
$category.=','.get_cat_name($_POST['post_category'][$x]); 
} 
$type=$_POST['post_type']; 
$tags=str_replace('、',',',$_POST['tax_input']['post_tag']); 
if($_POST['newtag']['post_tag']){ 
$tags.=','.str_replace('、',',',$_POST['newtag']['post_tag']); 
} 
$data = 'key='.$key.'&title='.$title.'&content='.$content.'&date='.$date.'&category='.$category.'&type='.$type.'&tags='.$tags; 
$ch = curl_init (); //cURL 模拟 POST 
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, TRUE ); 
curl_setopt ( $ch, CURLOPT_POST, TRUE ); 
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data ); 
curl_setopt ( $ch, CURLOPT_URL, $url ); 
curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
$ret = curl_exec ( $ch ); 
curl_close ( $ch ); 
return $ret; 
} 
}
?>