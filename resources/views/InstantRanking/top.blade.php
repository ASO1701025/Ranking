{{-- test帝豪！！！！  --}}
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false) {
    if ($_REQUEST['view'] == 'pc') {
        readfile('/app/resources/InstanRanking/hukurou.png');
    }
}
?>
<html lang="top">
    {{-- 背景の色 --}}
    <head>
        {{-- top.cssを参照 --}}
        <link rel="stylesheet" type="text/css" href="top.css" >
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>TOP</title>
        <!-- link rel="stylesheet" href="style.css" -->
    </head>

    <body>
    <img src="views/InstantRanking/hukurou.png">
    <!-- マスコット -->
    <div align="center">
        <form method="post">
            <span style="line-height: 200%">
                <!-- 空白 -->
                <?php
                for ($i=0;$i<1;$i++){
                    echo "<br/>";
                }
                ?>
                <!--font color="#FFFFFF"; size="7">Instant Ranking</font--><br>
                <!-- 空白 -->
                <?php
                for ($i=0;$i<2;$i++){
                    echo "<br/>";
                }
                ?>
                <img src="../../../storage/app/public/hukurou.png" width="340" height="470"><br>
            </span>
            <!-- 空白 -->
            <?php
                for ($i=0;$i<3;$i++){
                    echo "<br/>";
                }
            ?>

            <!-- 新規登録ボタン -->
            <input type="submit" class="button" onclick="location.href='shinki.blade.php'" value="新規登録"><br>
            <!-- 空白 -->
            <!-- ログインボタン -->
            <input type="submit" class="button" onclick="location.href='login.blade.php'" value="ログイン"><br>

        {{--db接続テスト--}}
<!--        --><?php //// $res = null;$pg_conn = null;$sql = null;$date = null;　-->
//        date_default_timezone_set('Asia/Tokyo');$date = date("Y-m-d");
//        $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");
//        if( $pg_conn ) {
//        	$sql = "INSERT INTO userinformation (username,password,address) VALUES ('shiki', 'password', 'nnnn@gmail.com')";
//            	$res = pg_query( $pg_conn, $sql);	var_dump($res);
//            	echo "接続できたよ！";
//        } else {	var_dump("接続できませんでした");}
//        pg_close($pg_conn);
//        ?>
        </form>
    </div>
    </body>
</html>