<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php require_once("functions.php"); ?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>CATreloaded.net :: Homepage</title>
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<?php StyleController(); ?>
</head>

<body>
	
	<!-- Start Page Header -->
	<?php require_once("header.php"); ?>
	<!-- End Page Header -->

	<!-- Start Page Body -->
	<table cellpadding="0" cellspacing="0" class="body">
		<tr>		
			<!-- Start Sidebar -->
			<td class="sidebarLayout">
				<?php require_once("sidebar.php"); ?>
			</td>
			<!--End Sidebar-->
			
			<!-- Start SmallSeperator -->
			<td style="width: 5px;">&nbsp;</td>
			<!--End SmallSeperator-->
			
			<!-- Start Page Content -->
			<td class="content_container">
				<div class="content_top">&nbsp;</div>
				<div class="content_mid">
					<?php ContentController(); ?>
					<div style="margin-right: 15px; margin-left: 15px; margin-top: 2px;">Contents Goes Here!</div>
				</div>
				<div class="content_bottom">&nbsp;</div>
			</td>
			<!-- End Page Content -->
		</tr>
	</table>
	<!-- End Page Body -->
	
	<!-- Start Page Footer -->
	<?php require_once("footer.php"); ?>
	<!-- End Page Footer -->
</body>

</html>
