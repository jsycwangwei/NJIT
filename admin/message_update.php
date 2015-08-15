<?php require_once(dirname(__FILE__).'/inc/config.inc.php');IsModelPriv('message'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改留言</title>
<link href="templates/style/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/checkf.func.js"></script>
<script type="text/javascript" src="editor/kindeditor-min.js"></script>
<script type="text/javascript" src="editor/lang/zh_CN.js"></script>
</head>
<body>
<?php
$row = $dosql->GetOne("SELECT * FROM `#@__message` WHERE `id`=$id");
?>
<div class="formHeader"> <span class="title">订单详情</span> <a href="javascript:location.reload();" class="reload">刷新</a> </div>
<form name="form" id="form" method="post" action="message_save.php" onsubmit="return cfm_msg();">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
		<tr>
			<td width="25%" height="40" align="right">姓名：</td>
			<td width="75%"><strong><?php echo $row['nickname'] ?></strong></td>
		</tr>
		<tr>
			<td height="40" align="right">联系电话：</td>
			<td><input type="text" name="contact" id="contact" class="input" value="<?php echo $row['contact'] ?>" /></td>
		</tr>
		<tr>
			<td width="25%" height="40" align="right">收货地址：</td>
			<td width="75%"><strong><?php echo $row['dz'] ?></strong></td>
		</tr>
		<tr>
			<td width="25%" height="40" align="right">订货数量：</td>
			<td width="75%"><strong><?php echo $row['num'] ?></strong></td>
		</tr>
			<tr>
			<td width="25%" height="40" align="right">邮箱：</td>
			<td width="75%"><strong><?php echo $row['email'] ?></strong></td>
		</tr>
		<tr>
			<td height="198" align="right">留言内容：</td>
			<td><textarea name="content" id="content"><?php echo $row['content'] ?></textarea>
				<script>
				var editor;
				KindEditor.ready(function(K) {
					editor = K.create('textarea[name="content"]', {
						resizeType : 1,
						width:'500px',
						height:'180px',
						extraFileUploadParams : {
							sessionid :  '<?php echo session_id(); ?>'
						},
						allowPreviewEmoticons : false,
						allowImageUpload : false,
						items : [
							'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
							'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
							'insertunorderedlist', '|', 'emoticons', 'image', 'link']
					});
				});
				</script></td>
				</td>
		</tr>
		
		<tr>
			<td height="40" align="right">更新时间：</td>
			<td><input type="text" name="posttime" id="posttime" class="inputms" value="<?php echo GetDateTime($row['posttime']); ?>" readonly="readonly" />
				<script type="text/javascript" src="plugin/calendar/calendar.js"></script> 
				<script type="text/javascript">
				Calendar.setup({
					inputField     :    "posttime",
					ifFormat       :    "%Y-%m-%d %H:%M:%S",
					showsTime      :    true,
					timeFormat     :    "24"
				});
				</script></td>
		</tr>
		
	
	</table>
</form>
</body>
</html>