<?
header("Content-Type: application/x-javascript");
$config = array(
   "appmap" => array(
      "main"=>"/mobileapp/",
      "left"=>"/mobileapp/left.php"
      )
   );
echo json_encode($config);
?>
