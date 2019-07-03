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
    <header id="caption"align="center"><h1>InstantRanking</h1></header>
    <form action="./add" method="post">
        <div align="center">
            <p>テーマ<br>
                <textarea name="thema" rows="2" cols="30" wrap="soft"></textarea>
            </p>
            <p>ジャンル
                <select name="genre">
                    <option value="食べ物">食べ物</option>
                    <option value="レジャー">レジャー</option>
                </select>
            </p>
            <input type="submit" value="投稿" id="button">
        </div>
        {{--db接続テスト--}}
           <?php  $res = null;$pg_conn = null;$sql = null;$date = null;
            date_default_timezone_set('Asia/Tokyo');$date = date("Y-m-d");
            $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");
            if( $pg_conn ) {
            	$sql = "INSERT INTO userinformation (username,password,address) VALUES ('shiki', 'password', 'nnnn@gmail.com')";
                	$res = pg_query( $pg_conn, $sql);	var_dump($res);
                	echo "接続できたよ！";
            } else {	var_dump("接続できませんでした");}
            pg_close($pg_conn);
            ?>
    </form>

</body>
</html>