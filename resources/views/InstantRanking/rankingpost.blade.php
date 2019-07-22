<html>
<head>
    <title>InstantRanking</title>
    <style>
        #caption{color: #fb9209;}
        #button {
            display: inline-block;
            border-radius: 10%; /* 角丸       */
            font-size: 14pt; /* 文字サイズ */
            text-align: center; /* 文字位置   */
            cursor: pointer; /* カーソル   */
            padding: 10px 15px; /* 余白       */
            background: #ffa64d; /* 背景色     */
            color: #ffffff; /* 文字色     */
            line-height: 1em; /* 1行の高さ  */
            transition: .3s; /* なめらか変化 */
            border: 2px solid #ffa64d; /* 枠の指定 */
        }
    </style>
</head>
<body>

<?php if (!isset($_POST['ranpos'])){ ?>

<header id="caption"align="center"><h1>InstantRanking</h1></header>
<form method="post">
    {{ csrf_field() }}
    <div align="center">
        <p>ジャンル
            <select name="genre">
                <option value="1">食べ物</option>
                <option value="2">レジャー</option>
            </select>
        </p>
        <p>テーマ
            //ジャンルに合わせて登録されているテーマを表示
            <select name="genre">
                <option value="1">食べ物</option>
                <option value="2">レジャー</option>
            </select>
        </p>
        <input type="submit" value="投稿" id="button">
    </div>

    {{--db接続テスト--}}
    <?php   }else{

        $res = null;$pg_conn = null;$sql = null;$date = null;
        date_default_timezone_set('Asia/Tokyo');$date = date("Y-m-d");
        $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");

        if( $pg_conn ) {


            $sql = "INSERT INTO userinformation (themavalue,genrelid) VALUES('{$thema}' , '{$genle}')";

            var_dump($sql);

            $res = pg_query( $pg_conn, $sql);	var_dump($res);
            echo "接続できたよ！";
            pg_close($pg_conn);
            header('Location: https://instantranking.herokuapp.com');
            exit();
        } else {
            var_dump("エラー起きてる　管理者に連絡して");
            pg_close($pg_conn);}

    };
    echo "テーマが追加されました！";



    ?>
</form>

</body>
</html>