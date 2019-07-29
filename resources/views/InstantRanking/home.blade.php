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
            bottom: -4%;
            width: 100%;
            height: 100px;
        }

        .topcard {
            position: center;
            top: auto;
            margin: 100px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 3px 6px #ccc;
        }
        .title1 {
            font-size: 150%;
            margin: 10px;
            color: #444;
        }
        .content1 {
            padding: 10px;
            color: #666;
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
</head>
<body>

{{--// 受け取り方--}}
<?php
if (isset($_COOKIE["un"])) {
    print "<p>";
    print "ユーザネーム：".$_COOKIE["un"];
    print "</p>";
}
?>

<header id="caption" align="center">
    <h1>InstantRanking</h1>
</header>
<div align="center">
    <p>トップ画面</p>

    <p>

    </p>
</div>
<div>
    <div class="topcard">
        <p class="title1">タイトル</p>
        <p class="content1">本文</p>
        <p class="content1">本文</p>
        <p class="content1">本文</p>
        <p class="content1">本文</p>

    <?
//        $request = request();
//        var_dump($request->session()->all());
//
//        echo $request->session()->get('name');
    ?>

    </div>
    <div class="row">
        <div class="col">
            <div class="card">Card1
            </div>
            <div class="card">Card2</div>
            <div class="card">Card3</div>
        </div>
        <div class="col">
            <div class="card">Card3</div>
            <div class="card">Card4</div>
            <div class="card">Card5</div>
        </div>
    </div>
</div>
<div>

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