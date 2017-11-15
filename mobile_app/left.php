<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule('pull');
CJSCore::Init(array('pull'));
$APPLICATION->AddHeadString('
	<script type="text/javascript">
		app.enableSliderMenu(true);
	</script>
');?>
<?
CMobile::getInstance()->setLargeScreenSupport(false);
CMobile::getInstance()->setScreenCategory("NORMAL");

$arParams = array(
	"MENU_FILE_PATH" => SITE_DIR."mobile_app/.mobile_menu.php",
);

$APPLICATION->IncludeComponent(
	'bitrix:mobileapp.menu',
	'mobile',
	$arParams,
	false,
	Array('HIDE_ICONS' => 'N'));
//$APPLICATION->IncludeComponent("bitrix:eshopapp.menu", "", array(), false, Array("HIDE_ICONS" => "Y"));
// PUSH Module Event
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>
