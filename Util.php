<?php
class Util{
public static $dsn  = 'mysql:dbname=sgrpg2;host=127.0.0.1';  // 接続先を定義
public static $user = 'senpai';      // MySQLのユーザーID
public static $pw = 'indocurry';// MySQLのパスワード
}

function sendResponse($status, $value=[]){
  header('Content-type: application/json');
  echo json_encode([
    'status' => $status,
    'result' => $value
  ]);
 }
