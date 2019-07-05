

<?php
        // デバイス判定
if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false) {
    if ($_REQUEST['view'] == 'pc') {
    readfile('index_pc.html');
    } else{
        readfile('index_touch.html');
    }
}
?>
        <!DOCTYPE HTML>
<html lang="ja">
<head>
    <style>
        h1{

        }
        body {
            /**background-image: url("../sinki.jpg");**/
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instant Ranking 新規登録画面</title>
    <!--link rel="stylesheet" href="style.css"-->

    <!-- Bootstrap読み込み（スタイリングのため） -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>

<body>

<?php if (isset($_POST['username'])){
    $user =  $_POST['username'];
    $mail =   $_POST['email'];
    $pass =  $_POST['password'];


        $res = null;$pg_conn = null;$sql = null;$date = null;
        date_default_timezone_set('Asia/Tokyo');$date = date("Y-m-d");
        $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");
        if( $pg_conn ) {
            $sql = "INSERT INTO userinformation (username,password,address) VALUES({$user}+{$pass}+{$mail})";
            var_dump($sql);
            $res = pg_query( $pg_conn, $sql);var_dump($res);
            echo "接続できたよ！";
        } else {	var_dump("接続できませんでした");}
        pg_close($pg_conn);

}else{ ?>

<div class="col-xs-6 col-xs-offset-3">
    <form method="post">
        {{ csrf_field() }}
        <h1>新規登録</h1>
        <br>
        <br>
        <br>

        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="ユーザー名" required />
        </div>
        <div class="form-group">
            <input type="email"  class="form-control" name="email" placeholder="メールアドレス" required />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="パスワード" required />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="パスワードの再確認" required />
        </div>
        <button type="submit" class="btn btn-default" name="signup">登録</button>

        <? }; ?>


        <br><a href="./top.blade.php">top</a>
    </form>
</div>
</body>
</html>

