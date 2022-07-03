<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name =  $_POST['name'];
$lid = $_POST['lid'];
$pw = $_POST['pw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];


// パスワードをハッシュ化
$lpw = password_hash($pw, PASSWORD_DEFAULT);

//2. DB接続します(外部ファイル読み込み)
include("funcs.php");
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("insert into gs_user_table(name, lid, lpw, kanri_flg ,life_flg) values(:name,:lid,:lpw, :kanri_flg, :life_flg)");
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid',     $lid,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw',     $lpw,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg',$kanri_flg,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg', $life_flg,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("login.php");
}
 
