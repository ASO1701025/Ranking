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

        /*.topcard {*/
            /*position: center;*/
            /*top: auto;*/
            /*margin: 100px;*/
            /*border-radius: 5px;*/
            /*background-color: #fff;*/
            /*box-shadow: 0 3px 6px #ccc;*/
        /*}*/
        .topcard {
            flex-grow: 1;
            flex-shrink: 1;

            width: 100%;
            padding: 20px;
            box-sizing: border-box;

            box-shadow: rgba(0, 0, 0, .2) 1px 1px 5px;
        }
        .topcard:not(:last-child) {
            margin-bottom: 20px;
        }
        .title {
            font-size: 150%;
            margin: 10px;
            color: #444;
        }
        .content {
            padding: 10px;
            color: #666;
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
</head>
<body>

{{--受け取り方--}}
<?php
if (isset($_COOKIE["username"])) {
    print "<p>";
    print "ユーザネーム：".$_COOKIE["username"];
    print "</p>";
}
?>

<header id="caption" align="center">
    <h1>InstantRanking</h1>
</header>
<div align="center">
    <p>トップ</p>

    <p>

    </p>
</div>

<?
    $pg_conn = pg_connect("host=ec2-174-129-240-67.compute-1.amazonaws.com port=5432 dbname=d8hdi8o0nv2hqq user=idiprlkaujoahf password=b1459a0b24b0e4d1334f38a9a2cb9f81ad0a1ba719639bfb7e9b1ac0efd601ef");

    $sql_t = "SELECT * FROM thema";
    if($res_t = pg_query($pg_conn,$sql_t)){
        $hoge_t = pg_fetch_all($res_t);
    }
    $result_t = pg_query($pg_conn,"SELECT * FROM thema");
    $rows_t = pg_num_rows($result_t);

    $sql_r = "SELECT * FROM rakinginfomation,rankingitem";
    if ($res_r = pg_query($pg_conn,$sql_r)){
        $hoge_r = pg_fetch_all($res_r);
    }
    $result_r = pg_query($pg_conn,"SELECT * FROM rakinginfomation,rankingitem");
    $rows_r = pg_num_rows($result_r);
    //echo ($rows)."row(s)";
?>

{{--<div>--}}
    {{--<div class="col">--}}
        {{--<div class="row">--}}
            {{--<div class="topcard">--}}
                {{--<p class="title1">タイトル1</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
            {{--</div>--}}
            {{--<div class="topcard">--}}
                {{--<p class="title1">タイトル2</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<div class="topcard">--}}
                {{--<p class="title1">タイトル3</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
            {{--</div>--}}
            {{--<div class="topcard">--}}
                {{--<p class="title1">タイトル4</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
                {{--<p class="content1">本文</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="topcard">--}}
        {{--<p class="title1">タイトル</p>--}}
        {{--<p class="content1">本文</p>--}}
        {{--<p class="content1">本文</p>--}}
        {{--<p class="content1">本文</p>--}}
        {{--<p class="content1">本文</p>--}}

{{--//        $request = request();--}}
{{--//        var_dump($request->session()->all());--}}
{{--//        echo $request->session()->get('name');--}}

    {{--</div>--}}
    {{--<div class="col">--}}
        {{--<div class="row">--}}
            {{--<div class="card">Card1</div>--}}
            {{--<div class="card">Card2</div>--}}
            {{--<div class="card">Card3</div>--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<div class="card">Card4</div>--}}
            {{--<div class="card">Card5</div>--}}
            {{--<div class="card">Card6</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div>
    <div class="col">
        <div class="row">
            <div class="topcard">
                <p class="title1">

                </p>
            </div>
        </div>
    </div>
</div>
{{--ランキング一覧--}}
<div>
    <div class="col">
        <div class="row">
            <form action="/ditail" method="post">
                <div class="title">
                    {{$hoge_r["$row_r-1"]["rankingname"]}}
                </div>
                @for($i=0;$i<5;$i++)
                    <div class="content">
                        <p>{{$i+1}}.{{$hoge_r["$i"]["category"]}}</p>
                    </div>
                @endfor
            </form>
        </div>
        <div class="row">
            <form action="/ditail" method="post">
                <div class="title">
                    {{$hoge_r["$row_r-2"]["rankingname"]}}
                </div>
                @for($i=0;$i<5;$i++)
                    <div class="content">
                        <p>{{$i+1}}.{{$hoge_r["$i"]["category"]}}</p>
                    </div>
                @endfor
            </form>
        </div>
    </div>
</div>

{{--テーマ一覧--}}
<div>
    @for($i=$rows_t-1;$i>=0;$i--)
        <div class="col">
            @for($j=0;$j<=1;$j++)
                <div class="row">
                    <form action="./ranp" method="post">
                        <div class="card">
                            {{$hoge_t["$i"]["themavalue"]}}
                            <input type="hidden" name="thema" value='$hoge_t["$i"]["themavalue"]'>
                        </div>
                    </form>
                    @if($j==0)
                        $i--
                    @endif
                </div>
            @endfor
        </div>
    @endfor
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