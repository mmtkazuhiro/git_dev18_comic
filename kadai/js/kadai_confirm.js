$(function() {
    let ticket = Math.floor(Math.random() *10);
    console.log(ticket)



    if(ticket <= 4){
        console.log("銅");
                // 画像は出たが、cssが効かなかったのでやめた
                // document.getElementById('result_bronze').innerHTML = '<img src="img/bronze.png" alt="銅">';
        $("#result_bronze").show();
        $(".slot_b").show();

    }else if(ticket > 4 && ticket < 8){
        console.log("銀");
                // 画像は出たが、cssが効かなかったのでやめた
                // document.getElementById('result_bronze').innerHTML = '<img src="img/bronze.png" alt="銅">';
                // document.getElementById('result_silver').innerHTML = '<img src="img/silver.png" alt="銀">';
        $("#result_bronze").show();
        $("#result_silver").show();
        $(".slot_s").show();


    }else{
        console.log("金");
                // 画像は出たが、cssが効かなかったのでやめた
                // document.getElementById('result_bronze').innerHTML = '<img src="img/bronze.png" alt="銅">';
                // document.getElementById('result_silver').innerHTML = '<img src="img/silver.png" alt="銀">';
                // document.getElementById('result_gold').innerHTML = '<img src="img/gold.png" alt="金">';
        $("#result_bronze").show();
        $("#result_silver").show();
        $("#result_gold").show();
        $(".slot_g").show();

    }
});

$(".slot_b").on("click", function () {
        $(".result").hide();
        $(".point_b").show();
        $(".point_bt").show();
});

$(".slot_s").on("click", function () {
    $(".result").hide();
    $(".point_b").show();
    $(".point_s").show();
    $(".point_st").show();
});

$(".slot_g").on("click", function () {
    $(".result").hide();
    $(".point_b").show();
    $(".point_s").show();
    $(".point_g").show();
    $(".point_gt").show();
});