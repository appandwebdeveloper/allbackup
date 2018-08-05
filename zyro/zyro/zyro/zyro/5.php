<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contact</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=1200" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Contact" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20180606103708" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20180606103712" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1528463569" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1528463569" rel="stylesheet" type="text/css" />
	<ga-code/>
	<script type="text/javascript">var currLang = '';</script>	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

	</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
<div class="wb_cont_inner"><div id="wb_element_instance0" class="wb_element wb-menu"><ul class="hmenu"><li class="active"><a href="" target="_self">Contacts</a></li></ul><div class="clearfix"></div></div><div id="wb_element_instance1" class="wb_element wb_element_picture" title=""><a href=""><img alt="gallery/roman-helmet" src="gallery_gen/98e636a5fa65dc6dd60759b692f54f3c.png"></a></div><div id="wb_element_instance2" class="wb_element wb_element_shape"><div class="wb_shp"></div></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div class="wb_cont_inner"><div id="wb_element_instance4" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:#212121;"><span class="wb_tr_ok">Contact us</span></span></h1></div><div id="wb_element_instance5" class="wb_element"><form class="wb_form" method="post" enctype="multipart/form-data"><input type="hidden" name="wb_form_id" value="eeb0e56b"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0" required="required"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1" required="required"></td></tr><tr class="area-row"><th>Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2" required="required"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">send</button></td></tr></table></form><script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id"); if ($wb_form_id == "eeb0e56b") { ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("eeb0e56b", formValues, formErrors);
				<?php if ($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state")) { ?>
					setTimeout(function() {
						alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
					}, 100);
					<?php $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance6" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(5);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance6");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance6").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div>
<div class="vbox wb_container" id="wb_footer">
	
<div class="wb_cont_inner" style="height: 134px;"><div id="wb_element_instance3" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2018 <a href="http://webbarelob.000webhostapp.com">webbarelob.000webhostapp.com</a></p></div><div id="wb_element_instance7" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_cont_outer"></div><div class="wb_cont_bg"></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
