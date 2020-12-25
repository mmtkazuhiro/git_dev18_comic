<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>コミックPOINT</title>
</head>

 <body>
     

 <h1>コミック感想・アイデア買取センター</h1>
    <div class="setumei">
        <div class="insetumei">
            <div class="ininsetumei">
                <div class="inininsetumei">
                    <div class="question">
                        <div class="read">漫画を読んで...</div>
                            <div class="idea">こうしたら<br>面白いのに</div>
                        <img src="img/idea.png" alt="" style = "width:250px;">
                            <div class="think">と思ったことはありませんか？</div>
                    </div>
                    <div class="buy">私たちはその感想や<br>アイデアを買い取ります。</div>
                    <div class="ya"><img src="img/ya.png" alt="" style = "width:250px;"></div>
                </div>

      <div class="outgive">
            <div class="give">あなたの感想やアイデアを1つずつ査定して<br>メダルを差し上げます。</div>
            <div class="medal">
                <img src="img/gold.png" alt="" style = "width:100px;" class="gold">
                <div class="s_b">
                    <img src="img/silver.png" alt="" style = "width:100px;" class="silver">
                    <img src="img/bronze.png" alt="" style = "width:100px;" class="bronze">
                </div>
            </div>
            <div class="result">
                 査定の結果、メダル何枚相当か決定いたします。
                     <br>
                 (※少なくとも銅のメダル1枚で買い取らせていただきます。)
            </div>
        </div>
    </div>
    </div>
    </div>

    <br>


   <h3>コミックPOINTようこそ！ログインしてください。</h3>
   <form  action="kadai.php" method="post">
     ID：<input type="text" name="id">
     password：<input type="password" name="password">
     <button type="submit">Log in</button>
   </form>

   <br><br>
   <h5>※デモのためどんなID・パスワードでも or 無記入でもログインできるようにしています。</h5>


   
 </body>
</html>