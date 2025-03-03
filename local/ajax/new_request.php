<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, content-type');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// ini_set('error_reporting', E_ALL);

include_once  $_SERVER['DOCUMENT_ROOT'] . '/vars.inc.php';
include_once  $_SERVER['DOCUMENT_ROOT'] . '/netcat/connect_io.php';
$nc_core = nc_Core::get_object();
$nc_core->load_default_extensions();

$parts = parse_url($_SERVER['HTTP_REFERER']);
parse_str($parts['query'], $query);

$title_url_message = $url_message = $_SERVER['HTTP_REFERER'];
$source = "Источник не заполнен";
$bit_id = "Источник Битрикса не заполнен";
$traffic_source = "Источник не заполнен";
$city = "Город не заполнен";
$test = '';
if (isset($_POST['urlMessage'])) {
    $url_message = $_POST['urlMessage'] ? $_POST['urlMessage'] : $_SERVER['HTTP_REFERER'];
}
if (isset($_POST['title_url_message'])) {
    $title_url_message = $_POST['title_url_message'] ? $_POST['title_url_message'] : $_SERVER['HTTP_REFERER'];
}
if (isset($_POST['istochnik'])) {
    $source = $_POST['istochnik'] ? $_POST['istochnik'] : '';
}
if (isset($_POST['traffic_source'])) {
    $traffic_source = $_POST['trafficSource'] ? $_POST['trafficSource'] : '';
}
if (isset($_POST['city'])) {
    $city = $_POST['city'] ? $_POST['city'] : '';
}
if ($_SERVER['HTTP_USER_AGENT']) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
}
if ($_SERVER["REMOTE_ADDR"]) {
    $ip = $_SERVER["REMOTE_ADDR"];
}
if ($_SERVER["HTTP_HOST"]) {
    $site = $_SERVER["HTTP_HOST"];
}
if (isset($_POST["clientID"])) {
    $clientID = $_POST["clientID"];
}
if (isset($_POST["BitrixID"])) {
    $bit_id = $_POST['BitrixID'] ? $_POST['BitrixID'] : $current_catalogue['BitrixID'];
}
if ($query['test'] == 'on') {
    $test = 'test';
}

$mes = $_POST['mes'] ? $_POST['mes'] : '22';
$cc = $_POST['cc'] ? $_POST['cc'] : '2';
$sub = $_POST['sub'] ?  $_POST['sub'] : '8';

$type = $_POST['type'] ? $_POST['type'] : 'request';

if ($type == 'request') {
    $key = $nc_core->db->get_var("SELECT Message_ID FROM Message$mes WHERE Message_ID = (SELECT MAX(Message_ID) FROM Message$mes)");
    $key = hash('sha256', $key);

    if (!strpos($_POST['f_haystack'], $key)) {
        header("HTTP/1.0 422 Unprocessable Entity");
        echo '<h3>Ошибка!</h3><p>Попробуйте отправить заявку чуть позже!</p>';
        exit();
    }
}

$params = isset($_POST['params']) ? $_POST['params'] : '';
if ($par = is_array($params) ? true : false) {
    $fields = "`" . implode("`, `", array_keys($params)) . "`,";
    $values = "'" . implode("', '", array_column($params, 0)) . "',";
} else {
    $fields = '';
    $values = '';
}
$phone = $par && $params["phone"][0] ? $params["phone"][0] : '';
$name = $par && $params["name"][0] ? $params["name"][0] : '';

if (isset($params["email"][0])) {
    $email = $par && $params["email"][0] ? $params["email"][0] : '';
} else {
    $email = '';
}
if (isset($params["message"][0])) {
    $message = $par && $params["message"][0] ? $params["message"][0] : '';
} else {
    $message = '';
}
$comment = $message . " - " . $title_url_message . " - " . $city . " - " . $url_message;

if ($mes) {
    $this_message = "Message$mes";
    $nc_core->db->query("SELECT `phone` FROM $this_message WHERE `phone` = '$phone' AND LastUpdated >= date_sub(now(), INTERVAL 5 minute)", ARRAY_N);
    $arr = $nc_core->db->last_result;
    $phone_block = "SELECT COUNT(*) FROM $this_message WHERE `phone` = '$phone' AND LastUpdated >= date_sub(now(), INTERVAL 1 DAY)";
    $res = $nc_core->db->get_var($phone_block);
    if ($arr) {
        header("HTTP/1.0 422 Unprocessable Entity");
        echo '<h3>Заявка уже создана</h3>
        <p>Ваша заявка принята менее 5 минут назад. Мы скоро позвоним Вам.</p>';
        exit();
    }
    if ($res > 5) {
        header("HTTP/1.0 422 Unprocessable Entity");
        echo '<h3>Превышен предел заявок по этому номеру за сегодня</h3>
        <p>Пожалуйста, позвоните.</p>';
        exit();
    }
}
$stop_arr = array(
    'action' => 'strstop',
    'login' => 'admin',
    'pasw' => 'lniU%4BlT#1V',
    'tel' => $phone,
    'email' => $email,
    'name' => $name,
    'comment' => $message,
    'serv_type' => $url_message,
    'user_agent' => $user_agent,
    'type' => $type
);
$ch = curl_init('https://api.honest-narcology.ru/api_application/');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $stop_arr);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$html = curl_exec($ch);
curl_close($ch);
$data = json_decode($html, true);
if ($data) {
    switch ($type) {
        case 'request':
            switch ($data['status']) {
                case 'on':

                    $utm_source = $_POST['utm_source'] ? $_POST['utm_source'] : "";
                    $utm_medium = $_POST['utm_medium'] ? $_POST['utm_medium'] : "";
                    $utm_campaign = $_POST['utm_campaign'] ? $_POST['utm_campaign'] : "";
                    $utm_content = $_POST['utm_content'] ? $_POST['utm_content'] : "";
                    $utm_term = $_POST['utm_term'] ? $_POST['utm_term'] : "";
                    $yclid = $_POST['yclid'] ? $_POST['yclid'] : "";

                    $bx_lead = array(
                        'action' => 'bitrix_up',
                        'login_bx' => 'admin_target',
                        'pasw_bx' => 'Y*UGe{Agr8',
                        'message' =>  $message,
                        'tel' => $phone,
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        'istochnik' => $source,
                        'address_city' => $city,
                        'group_id' => '108129',
                        'trafficSource' => $traffic_source,
                        'site_domain' => $site,
                        'serv_type' => $url_message,
                        'bit_id' => $bit_id,
                        'utm_source' => $utm_source,
                        'utm_medium' => $utm_medium,
                        'utm_campaign' => $utm_campaign,
                        'utm_content' => $utm_content,
                        'utm_term' => $utm_term,
                        'yclid' => $yclid,
                        'test' => $test,
                        'user_agent' => $user_agent
                    );
                    $ch = curl_init('http://api.honest-narcology.ru/api_application/');
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $bx_lead);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_HEADER, false);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 1);
                    $html = curl_exec($ch);
                    curl_close($ch);
                    if ($mes) {
                        $nc_core->db->query("INSERT INTO `$this_message` (`Subdivision_ID`, `Sub_Class_ID`, `Created`,  `UserAgent`, `trafficSource`, `istochnik`, `title_url_message`, `urlMessage`, $fields `Checked`) VALUES ('$sub', '$cc', now(), '$user_agent', '$traffic_source', '$source', '$title_url_message', '$url_message', $values '1')");
                    }
                    echo $data['text'];
                    break;
                case 'psevdo_on':
                    if ($mes) {
                        $nc_core->db->query("INSERT INTO `$this_message` (`Subdivision_ID`, `Sub_Class_ID`, `Created`,  `UserAgent`, `trafficSource`, `istochnik`, `title_url_message`, `urlMessage`, $fields `Checked`) VALUES ('$sub', '$cc', now(), '$user_agent', '$traffic_source', '$source', '$title_url_message', '$url_message', $values '0')");
                    }
                    echo $data['text'];
                    break;
                default:
                    header("HTTP/1.0 422 Unprocessable Entity");
                    echo $data['text'];
            }
            break;
        case 'review':
            if ($data['status'] == 'on') {
                if ($mes) {
                    $nc_core->db->query("INSERT INTO `$this_message` (`Subdivision_ID`, `Sub_Class_ID`, `Created`, `UserAgent`, $fields `Checked`) VALUES ('$sub', '$cc', now(), '$user_agent', $values '0')");
                }
                echo $data['text'];
            } else {
                header("HTTP/1.0 422 Unprocessable Entity");
                echo $data['text'];
            }
            break;
    }
} else {
    header("HTTP/1.0 422 Unprocessable Entity");
    echo '<h3>Ошибка!</h3><p>Попробуйте отправить заявку чуть позже!</p>';
}
