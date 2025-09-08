<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Share.php';


if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
    $nickname = htmlspecialchars(strip_tags($_POST['nickname']));
    $introduction = htmlspecialchars(strip_tags($_POST['introduction']));
    $shareModel->create($nickname, $introduction);
}


 $shareModel = new Share(new Db());
$list = $shareModel->getList(); 
//Util::view('share', ['list' => $list]);
