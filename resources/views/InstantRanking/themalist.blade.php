<html>
    <head>
        <title>InstantRanking</title>
        <style>
            #caption{color: #fb9209;}
            nav{
                width: 100%;
                border-top: 1px solid orange;
                border-bottom: 1px solid orange;
                margin-bottom: 0px; /**/
                overflow: hidden;
                background-color: #FB9209;
            }
            nav ul{
                list-style: none;
                width: 60%;
                margin-left: 20%;
            }
            nav li{
                width: calc(25% - 2px);
                border-left: 1px solid orange;
                text-align: center;
                float: left;
            }
            nav li:last-child{
                border-right: 1px solid orange;
            }
            nav a{
                display: block;
                text-decoration: none;
                color:#313131;
                font-size: 110%;
                letter-spacing: 5px;
                font-weight: 400;
                line-height: 45px;
            }
            nav a:hover{
                background-color: orange;
                color: #fff;
                transition: 0.5s;
            }
            footer {
                position: fixed;
                bottom: -5%;
                width: 100%;
                height: 100px;
            }

            .col {
                display: flex;
                width: 100%;
            }

            .row {
                flex-basis: 50%;
                display: flex;
                flex-direction: row;
            }

            .row:not(:last-child){
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

                document.location.href = "./ranp";

            }

        </script>

    </head>
    <body>

    <?
        if (isset($_COOKIE["username"])) {
            print "<p>";
            print "ユーザネーム：".$_COOKIE["username"];
            $user = $_COOKIE["username"];
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
            $result = pg_query($pg_conn,"SELECT * FROM thema");
            $rows = pg_num_rows($result);
//            echo ($rows)."row(s)";
        ?>

        <div>
            @for($i=$rows-1;$i>=0;$i--)
                <div class="col">
                @for($j=0;$j<=1;$j++)
                    <div class="row">
                        <?php
                        echo '<div class="card" onclick="frameClick()">';
                        echo $hoge["$i"]["themavalue"];
                        echo '</div>';
                        if($j==0){
                            $i--;
                        }
                        ?>
                    </div>
                @endfor
                </div>
            @endfor

        </div>

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