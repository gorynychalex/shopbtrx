<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Maps");
$APPLICATION->SetTitle("maps");
?><?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("SMALL_ZOOM_CONTROL","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING","ENABLE_KEYBOARD")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>