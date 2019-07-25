

<html>
    <head>
        <style>
            div.main{
                style:"align:center";
                width:30%; height:8%;
            }
            div.box {
                font-size: 16pt;
                width:30%;

                margin:0.5%; padding:0.75%; border:1px solid black;
                background-color:lightblue;
                display: inline-block;
            }
            div.text1{
                font-size: 20pt;
                /*height: 40%;*/
                /*width: 80%;*/
                /*position: absolute;*/
            }
        </style>

        <meta charset="utf-8" />
        <title>***ランキング</title><!--　*** はデータベースから引っ張ってくる-->
    </head>
    <body>
        <?php
        if (isset($_COOKIE["un"])) {
            print "<p>";
            print "ユーザネーム：".$_COOKIE["un"];
            $user = $_COOKIE["un"];
            print "</p>";

            //DBの接続設定
            $res = null; $pg_conn = null; $sql = null; $date = null;
            date_default_timezone_set('Asia/Tokyo'); $date=date("Y-m-d");
            $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");

            //接続ができたとき
            if($pg_conn){

                //これを取得する分に書き換(,)
                $sql = "SELECT * FROM thema";
                if($res = pg_query($pg_conn, $sql)){
                    //session_regenerate_id(true);//session_idを新しく生成し、置き換え
                    $nemu = pg_fetch_array($res);

                }
            }

        }
        ?>

        <h1 align="center"><p>$nemu[1]</p>ランキング</h1>
        <div id="main" align="center">
            <div class="text1" style="top: 17%;">１位<br><div class="box">ああああああああああああああ</div></div>
            <br>
            <div class="text1" style="top: 30%;">２位<br><div class="box">ああああああああああああああ</div></div>
            <br>
            <div class="text1" style="top: 43%;">３位<br><div class="box">ああああああああああああああ</div></div>
            <br>
            <div class="text1" style="top: 56%;">４位<br><div class="box">ああああああああああああああ</div></div>
            <br>
            <div class="text1" style="top: 69%;">５位<br><div class="box">ああああああああああああああ</div></div>
            <br>
            <div align="center">
            </div>
        </div>
    </body>
</html>


