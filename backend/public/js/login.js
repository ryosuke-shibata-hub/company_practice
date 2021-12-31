$(function (){
    $(".btn-dell").click(function(){
        if(confirm("本当に削除しますか？")){
            // そのままsubmit処理を実行（※削除）
        }else{
            // キャンセル
            return false;
        }
    });

    $(".openbtn").click(function () {
        $(this).toggleClass('active');
        $("#g-nav").toggleClass('panelactive');
    });

    $("#g-nav a").click(function () {
        $(".opentbtn").removeClass('active');
        $("#g-nav").removeClass('panelactive');
    });
});
