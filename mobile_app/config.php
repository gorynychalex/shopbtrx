<?
header("Content-Type: application/x-javascript");
$config = array("appmap" => array("main"=>"/mobile_app/", "left"=>"/mobile_app/left.php"));
echo json_encode($config);
?>
