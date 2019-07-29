<html>
    <head>
        <title>InstantRanking</title>
        <style>
            #caption{color: #fb9209;}
            nav{
                width: 100%;    /*横幅の指定*/
                border-top: 1px solid orange;   /*上部の線の色を指定*/
                border-bottom: 1px solid orange;    /*下部の線の色を指定*/
                margin-bottom: 5px; /**/
                overflow: hidden;   /*おまじない*/
            }
            nav ul{
                list-style: none;
                width: 60%; /*横幅の指定*/
                margin-left: 20%;   /*左端から20%右側に動かす*/
            }
            nav li{
                width: calc(25% - 2px); /*横幅の指定（線の分をマイナスする）*/
                border-left: 1px solid orange;  /*線を描く*/
                text-align: center; /*文字を中央に*/
                float: left;    /*左から並べる*/
            }
            nav li:last-child{
                border-right: 1px solid orange; /*li要素の最後の物は右側に線を描く*/
            }
            nav a{
                display: block; /*1つのli全体にリンクを有効にする*/
                text-decoration: none;  /*ブラウザ標準のリンク装飾をオフに*/
                color:#313131;  /*文字色の変更*/
                font-size: 110%;    /*フォントサイズの指定*/
                letter-spacing: 5px;    /*文字と文字の間隔をあける*/
                font-weight: 400;   /*文字の太さを調整*/
                line-height: 45px;  /*行間の指定（ナビボタンの高さ指定）*/
            }
            nav a:hover{
                background-color: orange;   /*背景色の指定*/
                color: #fff;    /*文字色の変更*/
                transition: 0.5s;   /*ホバー時の動きをなめらかにする*/
            }
            footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                height: 100px;
            }

            .row {
                display: flex;
                width: 100%;
            }

            .col {
                flex-basis: 50%;
                display: flex;
                flex-direction: column;
            }
            .col:not(:last-child) {
                margin-right: 20px;
            }

            .card {
                flex-grow: 1;
                flex-shrink: 1;

                width: 100%;
                padding: 20px;
                box-sizing: border-box;

                box-shadow: rgba(0, 0, 0, .2) 1px 1px 5px;
            }
            .card:not(:last-child) {
                margin-bottom: 20px;
            }
        </style>


        <script>

            function frameClick() {
                //setcookie('data',$data,  time() + 60 * 60 * 24 * 30);
                document.location.href = "./ditail";

            }

        </script>

    </head>
    <body>

    <?
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
//                var_dump($sql);
//
//                if($res = pg_query($pg_conn, $sql)){
//                    //session_regenerate_id(true);//session_idを新しく生成し、置き換え
//                    $nemu = pg_fetch_array($res);
//                    echo($nemu[1]);
//                }
            }

        }
    ?>

    <header id="caption" align="center">
        <h1>InstantRanking</h1>
    </header>
    <div align="center">
        <p>テーマ一覧</p>
        <p>
            <a href="/post" style="color: #fb9209;text-decoration: none">+</a>
            <select name="genre">
                <option value="食べ物">食べ物</option>
                <option value="レジャー">レジャー</option>
            </select>
        </p>
    </div>

    <div>


        <p style="color: #fb9209">検索テーマ</p>

        <?
            $sql = "SELECT * FROM thema";
            if($res = pg_query($pg_conn,$sql)){
                $hoge = pg_fetch_all($res);
            }
            $table_cnt = "SELECT count(*) FROM thema";

        echo ($table_cnt);
        ?>

    </div>


    <footer>
        <nav>
            <ul>
                <li><a href="./home">Home</a></li>
                <li><a href="./ranking">Ranking</a></li>
                <li><a href="./list">Thema</a></li>
                <li><a href="./user">User</a></li>
            </ul>
        </nav>
    </footer>
    </body>


</html>