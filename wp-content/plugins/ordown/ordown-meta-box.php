<?php
if ( !defined('ABSPATH') ) {exit;}
add_action( 'admin_menu', 'or_create_down_box' );
add_action( 'save_post', 'or_save_down_data' );
function or_create_down_box() {
	add_meta_box( 'ordown-post-meta-boxes','开启下载（请根据实际开启其中一种下载模式）', 'or_post_down_info', 'post', 'normal', 'high' );
}
function or_down_post_boxes() {  //资源名称、资源大小、更新时间、适用版本、作者信息
	$meta_boxes = array(
	array(
    "name"             => "ordown_start",
    "title"            => "启用下载+演示",
    "desc"             => "启用下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
	array(
    "name"             => "ordown_official",
    "title"            => "启用官方下载",
    "desc"             => "启用极速下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
	array(
    "name"             => "ordown_speed",
    "title"            => "启用极速下载",
    "desc"             => "启用极速下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
	array(
    "name"             => "ordown_reply",
    "title"            => "启用评论下载",
    "desc"             => "启用评论下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
	array(
			"name"             => "ordown_name",
			"title"            => "资源名称",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_size",
			"title"            => "资源大小",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_date",
			"title"            => "更新时间",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_version",
			"title"            => "适用版本",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_author",
			"title"            => "作者信息",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downurl1",
			"title"            => "百度云盘",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_keyl1",
			"title"            => "秘钥 1",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downurl2",
			"title"            => "360云盘",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_keyl2",
			"title"            => "秘钥 2",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downname1",
			"title"            => "自定义网盘 1",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downurl4",
			"title"            => "下载地址 1",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downname2",
			"title"            => "自定义网盘 2",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downurl5",
			"title"            => "下载地址 2",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "ordown_downurl3",
			"title"            => "在线演示",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	)
	);
	return apply_filters( 'ordown_post_boxes', $meta_boxes );
}
function or_post_down_info() {
	global $post;
	$meta_boxes = or_down_post_boxes(); 
?>
	<table class="form-table">
	<?php foreach ( $meta_boxes as $meta ) :
		$value = get_post_meta( $post->ID, $meta['name'], true );
		if ( $meta['type'] == 'text' )
			or_show_text_input( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			or_show_textarea( $meta, $value );
		elseif ( $meta['type'] == 'checkbox' )
			or_show_checkbox( $meta, $value );
	endforeach; ?>
	</table>
<?php
}
function or_show_text_input( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:15%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo wp_specialchars( $value, 1 ); ?>" size="30" tabindex="30" style="width: 97%;" />
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
		</td>
	</tr>
	<?php
}
function or_show_textarea( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:10%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( $value, 1 ); ?></textarea>
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />	</td>
	</tr>
	<?php
}
function or_show_checkbox( $args = array(), $value = false ) {
	extract( $args ); ?>
<tr>
		<th style="width:10%;">
	<label for="<?php echo $name; ?>"><?php echo $title; ?></label>		</th>
		<td>
    <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="yes"
    <?php if ( htmlentities( $value, 1 ) == 'yes' ) echo ' checked="checked"'; ?>
    style="width: auto;" />
    <input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    </td>
	</tr>
	<?php }
function or_save_down_data( $post_id ) {
		$meta_boxes = array_merge( or_down_post_boxes() );
		foreach ( $meta_boxes as $meta_box ) :
		if ( !wp_verify_nonce( $_POST[$meta_box['name'] . '_input_name'], plugin_basename( __FILE__ ) ) )
			return $post_id;
		if ( 'page' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		elseif ( 'post' == $_POST['post_type'] && !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$data = stripslashes( $_POST[$meta_box['name']] );
		if ( get_post_meta( $post_id, $meta_box['name'] ) == '' )
			add_post_meta( $post_id, $meta_box['name'], $data, true );
		elseif ( $data != get_post_meta( $post_id, $meta_box['name'], true ) )
			update_post_meta( $post_id, $meta_box['name'], $data );
		elseif ( $data == '' )
			delete_post_meta( $post_id, $meta_box['name'], get_post_meta( $post_id, $meta_box['name'], true ) );
	endforeach;
}
?>