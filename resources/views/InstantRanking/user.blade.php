<?php
/**
 * Created by PhpStorm.
 * User: kakeru
 * Date: 2019/06/11
 * Time: 11:55
 */ ?>

<html>
    <head>
        <title>InstantRanking</title>
        <style>
            #caption{font-size:30pt;color: #fb9209;}
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
            img{
                border-radius: 50%;
                height: 40px;
                width: 40px;
            }

        </style>
    </head>

    <body>
    @section('content')
        <header id="caption" align="center">
            InstantRanking
        </header>
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;" align="center">
            <img src="../hukurou.png">
            {{--{{$name}}--}}
            <br>
            <p>
                {{--mail  {{$mail}}--}}
            </p>
        </div>
        <div>
            <p style="color: #fb9209">投稿一覧</p>
            <div style="border: 2pt solid #000000;border-radius: 20%;height: 100pt;width: 300pt;" align="center">
                <p>〜〜〜〜〜〜ランキング</p>
            </div>
            
        </div>
        <footer>
            <nav>
                <ul>
                    <li><a href="./home">Home</a></li>
                    <li><a href="./ditail">Ranking</a></li>
                    <li><a href="./list">Thema</a></li>
                    <li><a href="./user">User</a></li>
                </ul>
            </nav>
        </footer>
    @show
    </body>
</html>