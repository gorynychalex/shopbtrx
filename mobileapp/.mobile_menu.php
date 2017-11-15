<?
IncludeModuleLangFile(__FILE__);

$arMobileMenuItems = array(
   array(
      "type" => "section",
      "text" =>"Раздел меню",
      "sort" => "100",
      "items" =>   array(
         array(
            "text" => "Новый пункт меню!",
            "data-url" => SITE_DIR."mobileapp/test.php",
            "class" => "menu-item",
            "id" => "main",
                "data-pageid"=>"main_page"
         )
      )
   )
);
?>
