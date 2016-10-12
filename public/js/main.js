/**
 * Created by mechiche on 12/10/16.
 */
var totalVote = 0;

$(function() {

    $("#go-vote").prop("disabled", true);

    $(".media-object").mouseenter(function(){
        if (!$(this).hasClass("border-fixe")) {
            $(this).removeClass('padding2');
            $(this).addClass('border-over');
        }
    });

    $(".media-object").mouseleave(function(){
        if (!$(this).hasClass("border-fixe")) {
            $(this).removeClass('border-over');
            $(this).addClass('padding2');
        }
    });

    $(".media-object").click(function(){

        if ($(this).hasClass("border-fixe")){
            totalVote--;
            $(this).removeClass("border-fixe");
            $(this).addClass('padding2');
        } else {
            if (totalVote < 3) {
                totalVote++;
                $(this).addClass("border-fixe");
                $(this).removeClass('border-over');
                $(this).removeClass('padding2');
                if (totalVote == 1){
                 $("#vote1").attr("value", $(this).attr("alt"));
                }
                if (totalVote == 2){
                 $("#vote2").attr("value", $(this).attr("alt"));
                }
                if (totalVote == 3){
                 $("#vote3").attr("value", $(this).attr("alt"));
                }
            }
        }
        $("#vote-number").text(totalVote)
        enableVote();
    });

    $("input[name='name']").keypress(function(){
        enableVote();
    });



    function enableVote(){

        if (totalVote == 3 ) {
            $("#go-vote").prop("disabled", false);
        } else {
            $("#go-vote").prop("disabled", true);
        }
    }
});