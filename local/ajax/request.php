<?
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, content-type');

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// ini_set('error_reporting', E_ALL);

$parts = parse_url($_SERVER['HTTP_REFERER']);
parse_str($parts['query'], $query);

$title_url_message = $url_message = $_SERVER['HTTP_REFERER'];
$source = "Источник не заполнен";
$traffic_source = "Источник не заполнен";
$ca = true;
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
if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
}
if (isset($_SERVER["REMOTE_ADDR"])) {
    $ip = $_SERVER["REMOTE_ADDR"];
}
if (isset($_SERVER["HTTP_HOST"])) {
    $site = $_SERVER["HTTP_HOST"];
}
if (isset($_POST["clientID"])) {
    $clientID = $_POST["clientID"];
}
if ($query['ca']) {
    $ca = false;
}
$bit_id = $_POST['bitrixID'] ? $_POST['bitrixID'] : '';

if (isset($_POST['city'])) {
    $city = $_POST['city'] ? $_POST['city'] : '';
}
$email = $message = '';
$params = isset($_POST['params']) ? $_POST['params'] : '';
if ($par = is_array($params) ? true : false) {
    $fields = "`" . implode("`, `", array_keys($params)) . "`,";
    $values = "'" . implode("', '", array_column($params, 0)) . "',";
} else {
    $fields = '';
    $values = '';
}

$type = $_POST['type'] ? $_POST['type'] : 'request';
$phone = $par && $params["phone"][0] ? $params["phone"][0] : '';
$name = $par && $params["name"][0] ? $params["name"][0] : '';

if (isset($params["email"][0])) {
    $email = $par && $params["email"][0] ? $params["email"][0] : '';
}
if (isset($params["email"][0])) {
    $email = $par && $params["email"][0] ? $params["email"][0] : '';
}
if (isset($params["message"][0])) {
    $message = $par && $params["message"][0] ? $params["message"][0] : '';
}
if (isset($message) && isset($title_url_message) && isset($city)) {
    $comment = $par && $params["message"][0] ? $params["message"][0] : '';
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

                    $yclid = $utm_term = $utm_content = $utm_campaign = $utm_medium = $utm_source = "";
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
                        'message' => $message,
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
                        'metrika_client_id' => $clientID,
                        'ca' => $ca,
                        'user_agent' => $user_agent,
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
                    echo $data['text'];
                    break;
                case 'psevdo_on':
                    echo $data['text'];
                    break;
                default:
                    header("HTTP/1.0 404 Not Found");
                    echo $data['text'];
            }
            break;
        case 'review':
            if ($data['status'] == 'on') {
                echo $data['text'];
            } else {
                header("HTTP/1.0 404 Not Found");
                echo $data['text'];
            }
            break;
    }
} else {
    header("HTTP/1.0 404 Not Found");
    echo '<h3>Вы похожи на робота!</h3><p>Позвоните нам!</p>';
    exit();
}
