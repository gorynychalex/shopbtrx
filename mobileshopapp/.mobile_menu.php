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
				"text" => "ORDER",
				"data-url" => SITE_DIR . "mobileshopapp/index.php",
				"class" => "menu-item",
				"id" => "main",
				"IMAGE" => "http://blogs.computerra.ru/wp-content/uploads/2012/10/yandex-browser-logo-289x300.jpg",
			),
			array(
				"text" => GetMessage("MOBILE_MENU_ITEM", array("#number#" => 1)),
				"data-url" => SITE_DIR . "mobileshopapp/test.php",
				"class" => "menu-item",
				"id" => "point1",

			),
			array(
				"text" => GetMessage("MOBILE_MENU_ITEM", array("#number#" => 2)),
				"data-url" => SITE_DIR . "mobileshopapp/index.php",
				"class" => "menu-item",
				"id" => "point2",

			),
			array(
				"text" => GetMessage("MOBILE_MENU_ITEM", array("#number#" => 3)),
				"data-url" => SITE_DIR . "mobileshopapp/index.php",
				"class" => "menu-item",
				"id" => "point3",

			),
			array(
				"text" => GetMessage("MOBILE_MENU_ABOUT"),
				"data-url" => SITE_DIR . "mobileshopapp/index.php",
				"class" => "menu-item",
				"id" => "point4",

			)
		)
	)
);
?>
