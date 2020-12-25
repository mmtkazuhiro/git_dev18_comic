<?php
$id = $_POST['id'];

function h ($str){
    return htmlspecialchars($str,ENT_QUOTES);
 };

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_kadai.css">
    <title>コミックPOINT</title>

</head>
<body>

<h1>コミック感想・アイデア買取センター</h1>

    <div class="name">
        <div id="welcome"></div>
        <div id="id"><?= $id ?></div>
        <div id="san"></div>
    </div>

    <div class="setumei">
        <div class="insetumei">
                <div class="ininsetumei">
                    <div class="inininsetumei">
                        <div class="question">
                            <div class="read">漫画を読んで...</div>
                                <div class="idea1">こうしたら<br>面白いのに</div>
                            <img src="img/idea.png" alt="" style = "width:250px;">
                                <div class="think">と思ったら</div>
                        </div>
                        <div class="write">その感想・アイデアを記入してください。</div>
                        <div class="ya"><img src="img/ya.png" alt="" style = "width:250px;"></div>
                    </div>

       
                    <div class="example">
                        <div class="example_title">
                            <div class="in_example_title">
                                タイトル (例)
                                <div style="margin-bottom: 10px; border: 1px solid #333333; width:200px;">
                                        TWO PIECE
                                </div>
                            </div>
                            <div class="twopiece">
                                <img src="img/twopiece.png" alt="" style="width:100px;">
                            </div>
                        </div>
                        <div class="example_idea">
                            <div class="in_example_idea">
                                感想・アイデア (例)
                                <div style="margin-bottom: 10px; border: 1px solid #333333; width:200px;height:100px;">
                                        もっと手が伸びればカッコ良かったと思う。
                                </div>
                            </div>
                                <div class="kyoshu">
                                    <img src="img/kyoshu.png" alt="" style="width:100px;">
                                </div>
                        </div>
                       

                    </div>

        </div>
        </div>
        </div>
        </div>


    
    <form action="kadai_confirm.php" method="post">
    <div class="input">
        <div class="title">タイトル：<input type="text" name="title"></div>
        <div class="idea"><div class="inidea">感想・アイデア：</div><div class="text"><textarea name="idea"></textarea></div></div>
        <div class="outsubmit"><div class="submit"><input type="submit" value="送信"></div></div>
    </div>
    </form>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/kadai.js"></script>



    <!-- phpの中に書くならjqueryを呼び出した下に書かないと機能しない -->
<?php
    if(empty($_POST['id'])){
        //  phpの中にjsを書く方法1
        $alert = "<script type='text/javascript'>alert('IDが未入力ですがそのまま入力可能です。');</script>";
        echo $alert;
    }else{
        //  phpの中にjsを書く方法2
        //  EOMで挟み、scriptタグを使って、その中に直書きする
        echo <<<EOM
        <script type="text/javascript">
        $(function() {
            document.getElementById('welcome').innerHTML ='ようこそ';
            document.getElementById('san').innerHTML = 'さん';
        });
        </script>
        EOM;
    };

?>
</body>
</html>