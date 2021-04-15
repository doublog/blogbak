<?php
// 请在第三行开始编写代码
//重定义网址加密
function the_content_Jump($content)
{
	preg_match_all('/href="(http.*?)"/',$content,$matches);
	if($matches)
	{
		foreach($matches[1] as $val)
		{
			if(strpos($val,'://')!==false && strpos($val,'nofollow')===false && strpos($val,home_url())===false && strpos($val,'http://blogbak.free.fr')===false )
			{
			$content=str_replace("href=\"$val\"", "href=\"".home_url()."/link?url=" .base64_encode($val). "\" ",$content);
			}
		}
	}
	return $content;
}
add_filter('the_content','the_content_Jump',999);


// 重定义评论者链接-加密并添加nofollow
function redefine_comment_author_link() {
    $encodeurl = get_comment_author_url( $comment_ID );
    $url = get_option('home').'/link?url=' . base64_encode($encodeurl);//jv?url 自己修改，下面对应修改$_GET['url']中的url
    $author = get_comment_author( $comment_ID );
    if ( empty( $encodeurl ) || 'http://' == $encodeurl )
        return $author;
    else
        return "<a href='$url' rel='external nofollow' class='url'>$author</a>";
}
add_filter('get_comment_author_link', 'redefine_comment_author_link');

//WordPress 站点纯代码屏蔽垃圾评论
function syz_comment_post( $incoming_comment ) {
$pattern = '/[一-龥]/u';
$jpattern ='/[ぁ-ん]+|[ァ-ヴ]+/u';
$ruattern ='/[А-я]+/u';
$arattern ='/[؟-ض]+|[ط-ل]+|[م-م]+/u';
$thattern ='/[ก-๛]+/u';
if(preg_match($jpattern, $incoming_comment['comment_content'])){
wp_die( "日文滚粗！Japanese Get out！日本語出て行け！" );
}
if(preg_match($ruattern, $incoming_comment['comment_content'])){
wp_die( "北方野人讲的话我们不欢迎！Russians, get away！Savage выйти из Русского Севера!" );
}
if(preg_match($arattern, $incoming_comment['comment_content'])){
wp_die( "不要用阿拉伯语！Please do not use Arabic！！من فضلك لا تستخدم اللغة العربية" );
}
if(preg_match($thattern, $incoming_comment['comment_content'])){
wp_die( "人妖你好，人妖再见！Please do not use Thai！กรุณาอย่าใช้ภาษาไทย！" );
}
if(!preg_match($pattern, $incoming_comment['comment_content'])) {
wp_die( "写点汉字吧，博主外语很捉急！ Please write some chinese words！" );
}
return( $incoming_comment );
}
add_filter('preprocess_comment', 'syz_comment_post');