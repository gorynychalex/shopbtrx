<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$arParams = array(
   "MENU_FILE_PATH" => SITE_DIR . "/mobile/.mobile_menu.php",
);

$APPLICATION->IncludeComponent(
   'bitrix:mobileapp.menu',
   'mobile',
   $arParams,
   false,
   Array('HIDE_ICONS' => 'N'));
?>

   <script type="text/javascript">
      app.enableSliderMenu(true);
   </script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>
