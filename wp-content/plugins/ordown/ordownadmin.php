<div class="wrap">
<?php 
if($_POST['Submit'] && current_user_can('administrator') && $_POST['Submit']=='保存设置')
{
	$ordown_ad    = trim($_POST['ordown_ad']);
	$ordown_ad5    = trim($_POST['ordown_ad5']);
	$ordown_ad6    = trim($_POST['ordown_ad6']);
	$ordown_ad7    = trim($_POST['ordown_ad7']);
	$ordown_ad8    = trim($_POST['ordown_ad8']);
	$ordown_ad9    = trim($_POST['ordown_ad9']);
	$ordown_ad10    = trim($_POST['ordown_ad10']);
	$ordown_ad11    = trim($_POST['ordown_ad11']);
	$ordown_ad12    = trim($_POST['ordown_ad12']);
	$ordown_ad13    = trim($_POST['ordown_ad13']);
	$ordown_ad14    = trim($_POST['ordown_ad14']);
	$ordown_ad15    = trim($_POST['ordown_ad15']);
    $ordown_link5    = trim($_POST['ordown_link5']);
    $ordown_link7    = trim($_POST['ordown_link7']);
    $ordown_link8    = trim($_POST['ordown_link8']);
    $ordown_link9    = trim($_POST['ordown_link9']);
    $ordown_link10    = trim($_POST['ordown_link10']);
    $ordown_link11    = trim($_POST['ordown_link11']);
    $ordown_link12    = trim($_POST['ordown_link12']);
    $ordown_link13    = trim($_POST['ordown_link13']);
    $ordown_link14    = trim($_POST['ordown_link14']);
    $ordown_link15    = trim($_POST['ordown_link15']);
    $update_text=array('ordown_ad','ordown_ad5','ordown_ad6','ordown_ad7','ordown_ad8','ordown_ad9','ordown_ad10','ordown_ad11','ordown_ad12','ordown_ad13','ordown_ad14','ordown_ad15','ordown_link1','ordown_link2','ordown_link3','ordown_link4','ordown_link5','ordown_link7','ordown_link8','ordown_link9','ordown_link10','ordown_link11','ordown_link12','ordown_link13','ordown_link14','ordown_link15');
	$update_ordown[] = update_option('ordown_ad', $ordown_ad);
	$update_ordown[] = update_option('ordown_ad5', $ordown_ad5);
	$update_ordown[] = update_option('ordown_ad6', $ordown_ad6);
	$update_ordown[] = update_option('ordown_ad7', $ordown_ad7);
	$update_ordown[] = update_option('ordown_ad8', $ordown_ad8);
	$update_ordown[] = update_option('ordown_ad9', $ordown_ad9);
	$update_ordown[] = update_option('ordown_ad10', $ordown_ad10);
	$update_ordown[] = update_option('ordown_ad11', $ordown_ad11);
	$update_ordown[] = update_option('ordown_ad12', $ordown_ad12);
	$update_ordown[] = update_option('ordown_ad13', $ordown_ad13);
	$update_ordown[] = update_option('ordown_ad14', $ordown_ad14);
	$update_ordown[] = update_option('ordown_ad15', $ordown_ad15);
    $update_ordown[] = update_option('ordown_link5', $ordown_link5);
    $update_ordown[] = update_option('ordown_link7', $ordown_link7);
    $update_ordown[] = update_option('ordown_link8', $ordown_link8);
    $update_ordown[] = update_option('ordown_link9', $ordown_link9);
    $update_ordown[] = update_option('ordown_link10', $ordown_link10);
    $update_ordown[] = update_option('ordown_link11', $ordown_link11);
    $update_ordown[] = update_option('ordown_link12', $ordown_link12);
    $update_ordown[] = update_option('ordown_link13', $ordown_link13);
    $update_ordown[] = update_option('ordown_link14', $ordown_link14);
    $update_ordown[] = update_option('ordown_link15', $ordown_link15);
    foreach($update_ordown as $k=>$v)
	{
		if($v)
		{
			$text .= '<div class="updated settings-error"><p>'.$update_text[$k].' 更新成功！</p></div>';
		}
	}
	if(empty($text))
	{
		$text = '<div class="updated settings-error"><p>没有更新任何信息</p></div>';
	}
}
$ordown_ad    = get_option('ordown_ad');
$ordown_ad5    = get_option('ordown_ad5');
$ordown_ad6    = get_option('ordown_ad6');
$ordown_ad7    = get_option('ordown_ad7');
$ordown_ad8    = get_option('ordown_ad8');
$ordown_ad9    = get_option('ordown_ad9');
$ordown_ad10    = get_option('ordown_ad10');
$ordown_ad11    = get_option('ordown_ad11');
$ordown_ad12    = get_option('ordown_ad12');
$ordown_ad13    = get_option('ordown_ad13');
$ordown_ad14    = get_option('ordown_ad14');
$ordown_ad15    = get_option('ordown_ad15');
$ordown_link5    = get_option('ordown_link5');
$ordown_link7    = get_option('ordown_link7');
$ordown_link8    = get_option('ordown_link8');
$ordown_link9    = get_option('ordown_link9');
$ordown_link10    = get_option('ordown_link10');
$ordown_link11    = get_option('ordown_link11');
$ordown_link12    = get_option('ordown_link12');
$ordown_link13    = get_option('ordown_link13');
$ordown_link14    = get_option('ordown_link14');
$ordown_link15    = get_option('ordown_link15');

if(!empty($text))
{
	echo '<div id="message">'.$text.'</div>';
}

?>

<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>" style="width: 90%;float: left;">
		<h2>ordown独立下载页面插件设置</h2>
		<table class="form-table">
			<tr>
				<td valign="top" width="30%"><strong>官方下载页面-LOGO</strong><br />
				</td>
				<td><input type="text" id="ordown_ad6" name="ordown_ad6"
					value="<?php echo $ordown_ad6; ?>" placeholder="LOGO图片链接地址:建议大小142 * 32" maxlength="150" size="50" />
				</td>
			</tr>			

			<tr>
				<td valign="top" width="30%"><strong>官方下载左侧-联盟大图广告</strong><br />
				</td>
				<td>
<textarea name="ordown_ad7" id="ordown_ad7" cols="40" rows="4" placeholder="图片或联盟广告代码，图片广告建议大小580 * 340px" style="width:100%; font-size: 12px; height: 112px;" class="code" >
<?php  echo stripslashes($ordown_ad7); ?>
</textarea>
				</td>

			</tr>
			<tr>
				<td valign="top" width="30%"><strong>弹窗下载-联盟或大图广告</strong><br />
				</td>
				<td>
<textarea name="ordown_ad" id="ordown_ad" cols="40" rows="4" placeholder="此处填写弹窗下载联盟或大图广告代码" style="width:100%; font-size: 12px; height: 112px;" class="code" >
<?php  echo stripslashes($ordown_ad); ?>
</textarea>
				</td>

			</tr>
                        <tr>
				<td valign="top" width="30%"><strong>演示/下载-联盟弹窗广告</strong><br />
				</td>
                                <td>
<textarea name="ordown_ad5" id="ordown_ad5" cols="40" rows="4" style="width:100%; font-size: 12px; height: 112px;" class="code" >
<?php  echo stripslashes($ordown_ad5); ?>
</textarea>
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告1</strong><br />
				</td>
				<td><input type="text" id="ordown_ad8" name="ordown_ad8"
					value="<?php echo $ordown_ad8; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link8" name="ordown_link8" 
					value="<?php echo $ordown_link8 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告2</strong><br />
				</td>
				<td><input type="text" id="ordown_ad9" name="ordown_ad9"
					value="<?php echo $ordown_ad9; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link9" name="ordown_link9" 
					value="<?php echo $ordown_link9 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>


			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告3</strong><br />
				</td>
				<td><input type="text" id="ordown_ad10" name="ordown_ad10"
					value="<?php echo $ordown_ad10; ?>" placeholder="广告文本"  maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link10" name="ordown_link10" 
					value="<?php echo $ordown_link10 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>


			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告4</strong><br />
				</td>
				<td><input type="text" id="ordown_ad11" name="ordown_ad11"
					value="<?php echo $ordown_ad11; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link11" name="ordown_link11" 
					value="<?php echo $ordown_link11 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告5</strong><br />
				</td>
				<td><input type="text" id="ordown_ad12" name="ordown_ad12"
					value="<?php echo $ordown_ad12; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link12" name="ordown_link12" 
					value="<?php echo $ordown_link12 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告6</strong><br />
				</td>
				<td><input type="text" id="ordown_ad13" name="ordown_ad13"
					value="<?php echo $ordown_ad13; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link13" name="ordown_link13" 
					value="<?php echo $ordown_link13 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告7</strong><br />
				</td>
				<td><input type="text" id="ordown_ad14" name="ordown_ad14"
					value="<?php echo $ordown_ad14; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link14" name="ordown_link14" 
					value="<?php echo $ordown_link14 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告8</strong><br />
				</td>
				<td><input type="text" id="ordown_ad15" name="ordown_ad15"
					value="<?php echo $ordown_ad15; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="ordown_link15" name="ordown_link15" 
					value="<?php echo $ordown_link15 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<p class="submit">
						<input type="submit" name="Submit" value="保存设置" class="button-primary" />
					</p>
				</td>
			</tr>

		</table>
	</form>
</div>
<div style="display:none">www.orwei.com</div>

