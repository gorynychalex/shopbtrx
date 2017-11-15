<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/mobileapp/public/.mobile_menu.php");

$arMobileMenuItems = array(
	array(
		"type" => "section",
		"text" => GetMessage("MOBILE_MENU_HEADER"),
		"sort" => "100",
		"items" => array(
			array(
				"text" => "HOME",
				"data-url" => SITE_DIR . "mobile_app/index.php",
				"class" => "menu-item",
				"id" => "menu",
			),
			array(
				"text" => "CATALOG",
				"data-url" => SITE_DIR . "mobile_app/catalog/",
				"class" => "menu-item",
				"id" => "catalog",
			),
			array(
				"text" => "BASKET",
				"data-url" => SITE_DIR . "mobile_app/personal/cart/" ,
				"class" => "menu-item",
				"id" => "order",
				"IMAGE" => "http://blogs.computerra.ru/wp-content/uploads/2012/10/yandex-browser-logo-289x300.jpg",
			),
			array(
				"text" => "MAPS",
				"data-url" => SITE_DIR . "mobile_app/maps.php",
				"class" => "menu-item",
				"id" => "maps",

			),
			array(
				"text" => GetMessage("MOBILE_MENU_ABOUT"),
				"data-url" => SITE_DIR . "mobileshopapp/index.php",
				"class" => "menu-item",
				"id" => "about",
			)
		)
	)
);
?>
