function showhidepswd()
{
    var val = $("#btn_show").val();
    if(val == "show"){
        $("#btn_show").val("hide");
        $("#pswd").hide();
        $("#pswd_text").val($("#pswd").val());
        $("#pswd_text").show();
    }
    else{
        $("#btn_show").val("show");
        $("#pswd").show();
        $("#pswd_text").hide();
    }
    //document.getElementById("btn_show").value="hide";
}