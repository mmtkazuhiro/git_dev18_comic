<?php

$title = $_POST['title'];
$idea = $_POST['idea'];

$time = date('Y-m-d H:i:s');



$file = fopen('./data/data.txt', 'a');
fwrite($file, $time .' '.$title . ' ' .$idea ."\n" );
fclose($file);


// echo $name;
// echo '<br><br>';
// echo $mail;
// echo '<br><br>';
// echo $title;
// echo '<br><br>';
// echo $idea;

function h ($str){
    return htmlspecialchars($str,ENT_QUOTES);
 };

 $rand_b = rand(1, 5);
 $rand_s = rand(6, 10);
 $rand_g = rand(11, 50);


 ?>

 <!DOCTYPE html>
 <html lang="ja">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style_confirm.css">
     <title>コミックPOINT</title>
 </head>
 <body>

 <h1>コミック感想・アイデア買取センター</h1>

<div class="setumei">
    <div class="insetumei">
        <div class="inisetumei">
        <div class="ininsetumei">
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
            <div class="gazou">
                <div class="write">その感想・アイデアを査定して<br>メダルを差し上げます。</div>
                <div class="ya"><img src="img/ya.png" alt="" style = "width:250px;"></div>
            </div>
        </div>

        <div class="outgive">
            <div class="give">入手したメダルを使って<br>抽選に参加してください</div>
            <div class="medal">
                <img src="img/gold.png" alt="" style = "width:100px;" class="gold1">
                <div class="s_b">
                    <img src="img/silver.png" alt="" style = "width:100px;" class="silver1">
                    <img src="img/bronze.png" alt="" style = "width:100px;" class="bronze1">
                </div>
            </div>
            <div class="result1">
                 手に入ったコインは<br>漫画購入の際にご使用いただけます。
            </div>
        </div>
    </div>



    </div>
</div>


    <h4>※今回はデモなので、ランダムに金・銀・銅のメダルが配布されるようになっています。</h4>

    <div class="form">
        <p>タイトル：<?= h($title); ?></p>
        <p>感想・アイデア：<?= h($idea); ?></p>
    </div>


    <div class="result">
        <div id="result_bronze"><img src="img/bronze.png" alt="" class="bronze" style="width:100px;height:100px"></div>
        <div id="result_silver"><img src="img/silver.png" alt="" class="silver" style="width:100px;height:100px"></div>
        <div id="result_gold"><img src="img/gold.png" alt="" class="gold" style="width:100px;height:100px"></div>
        <div class="slot_b"><div class="in_slot_b">抽選を行う</div></div>
        <div class="slot_s"><div class="in_slot_s">抽選を行う</div></div>
        <div class="slot_g"><div class="in_slot_g">抽選を行う</div></div>
    </div>


    <div class="point">
        <div class="point_b">銅...<?= $rand_b ?>コイン獲得</div>
        <div class="point_s">銀...<?= $rand_s ?>コイン獲得</div>
        <div class="point_g">金...<?= $rand_g ?>コイン獲得</div>
    
    <div class="point_total">
        <div class="point_bt">合計...<?= $rand_b ?>コイン獲得</div>
        <div class="point_st">合計...<?= $rand_b + $rand_s ?>コイン獲得</div>
        <div class="point_gt">合計...<?= $rand_b + $rand_s + $rand_g ?>コイン獲得</div>
    </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/kadai_confirm.js"></script>

 </body>
 </html>