<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/netcat/connect_io.php');
$nc_core = nc_Core::get_object();

$mes = $_POST['mes'] ? $_POST['mes'] : "22";
if ($_POST['checker'] == 1) {
  header("HTTP/1.0 200 Checked");
  $one = hash('sha256', rand(0, 25));
  $two = hash('sha256', rand(0, 25));
  $key = $nc_core->db->get_var("SELECT Message_ID FROM Message$mes WHERE Message_ID = (SELECT MAX(Message_ID) FROM Message$mes)");
  $key = hash('sha256', $key);
  $haystack = '';
  $haystack .=  $one . $key . $two;
  echo $haystack;
  exit();
} else {
  header("HTTP/1.0 404 Not Found");
  echo '<p>Иди своей дорогой, сталкер</p>';
  exit();
}
