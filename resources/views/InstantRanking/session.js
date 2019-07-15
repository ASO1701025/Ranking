function submitFnc(){
    //formオブジェクトを取得する
    //var fm = document.getElementById("fm1");


    //Submit形式指定する（post/get）
    //fm.method = "post";  // 例）POSTに指定する


    //action先を指定する
    fm.action = "./home";  // 例）"/php/sample.php"に指定する

    //Submit実行
    fm.submit();
}