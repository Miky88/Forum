<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title><?php print $layout_title?></title>
	<?php include("header.php"); ?>
	<link rel="stylesheet" type="text/css" href="<?php print resourceLink("layouts/yule.css");?>" />
</head>

<body style="width:100%; font-size: <?php print $loguser['fontsize']; ?>%;">
	
<div class="outline margin" id="header" style="margin: 8px">
		<table class="outline">
			<tr>
				<td colspan="3" class="cell0">
					<!-- Board header goes here -->
					<table>
						<tr>
							<td style="border: 0px none; text-align: <?php echo $layout_pora ? 'left' : 'center' ?>;">
								<a href="./">
									<img id="theme_banner" src="<?php print htmlspecialchars($layout_logopic); ?>" alt="" title="<?php print htmlspecialchars($layout_title); ?>" />
								</a>
							</td>
							<?php if($layout_pora) { ?>
							<td style="border: 0px none;">
								<?php print $layout_pora; ?>
							</td>
							<?php } ?>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="cell2">
				<td rowspan="3" class="smallFonts" style="text-align: center; width: 10%;">
					<?php print $layout_views; ?>
				</td>
				<td class="smallFonts" style="text-align: center">
					<ul class="pipemenu">
					<?php print $layout_userpanel; ?>
					</ul>
				</td>
				<td rowspan="3" class="smallFonts" style="text-align: center; width: 10%;">
					<?php print $layout_time; ?>
				</td>
			</tr>
			<tr class="cell1">
				<td class="smallFonts" style="text-align: center; width: 80%;">
					<ul class="pipemenu">
					<?php print $layout_navigation;?>
					</ul>
				</td>
			</tr>
			<tr class="cell2">
				<td colspan="1" class="smallFonts" style="text-align: center">
					<?php print $layout_onlineusers; ?>
				</td>
			</tr>
		</table>
	</div>	
	
	<div id="main" style="padding-left:8px; padding-right:8px;">
<form action="<?php print actionLink('login'); ?>" method="post" id="logout">
		<input type="hidden" name="action" value="logout" />
	</form>
	
	<?php print $layout_bars; ?>
	<?php print $layout_crumbs;?>
	<?php print $layout_contents;?>
	<?php print $layout_crumbs;?>

	</div>
	<div class="footer" style='clear:both;'>
	<?php print $layout_footer;?>
	</div>
</body>
</html>