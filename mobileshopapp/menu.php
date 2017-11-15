<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
	<script type="text/javascript">
		app.enableSliderMenu(true);
	</script>
<?
$APPLICATION->IncludeComponent(
	'bitrix:mobileapp.menu',
	'mobile',
	array("MENU_FILE_PATH"=>"/mobileshopapp/.mobile_menu.php"),
	true,
	Array('HIDE_ICONS' => 'N'));
?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
