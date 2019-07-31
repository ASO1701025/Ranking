


<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログイン機能</title>
    <script src="session.js"></script>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap読み込み（スタイリングのため） -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">
<? if(isset($_POST["email"],$_POST["password"])){
        session_start();
        $email = $_POST["email"];
        $password = $_POST["password"];

        //データベースに同じ奴がいるかの判定を作って

        $res = null;$pg_conn = null;$sql = null;$date = null;
        date_default_timezone_set('Asia/Tokyo');$date = date("Y-m-d");
        $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");


        if( $pg_conn ) {

            //これを取得する分に書き換(,)
            $sql = "SELECT * FROM userinformation  WHERE  address = '$email' AND password = '$password'";
            var_dump($sql);

            if($res = pg_query( $pg_conn, $sql)){
//                session_regenerate_id(true); //session_idを新しく生成し、置き換え

                $request = request();

               $request->session()->put('name', pg_fetch_result($res,0));

                echo "ログインできたよ！";
                echo $request->session()->get('name');
?>


    {{--COOKIE渡し方--}}
    <?php
    // クッキーを送信（有効期限30日）
    setcookie('username',$request->session()->get('name'),  time() + 60 * 60 * 24 * 30);
    setcookie('email',$email,  time() + 60 * 60 * 24 * 30);
    ?>
                <?
                header('Location: ./home');
                exit();
            }

            pg_close($pg_conn);
           // header('Location: https://instantranking.herokuapp.com');
            exit();
        } else {
            var_dump("エラー起きてます。管理者に連絡して");
            pg_close($pg_conn);}

    }else{ ?>

    <form method="post">
        {{ csrf_field() }}
        <h1>ログインフォーム</h1>
        <div class="form-group">
            <input type="email"  class="form-control" name="email" placeholder="メールアドレス"  />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="パスワード"  />
        </div>
        <button type="submit" class="btn btn-default" name="login">ログイン</button>
    </form>
    <?};?>

</div>
</body>
</html>