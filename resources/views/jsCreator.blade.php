<?php

$bytes_written = File::put('assets/tags/'.$_POST['file'].".js",'var $tvc={id:"'.$_POST['file'].'"};'."\r\n".'$tvc.draft="'.$_POST['draft'].'";'."\r\n".'$tvc.ratingType="'.$_POST['ratingType'].'";'."\r\n".'$tvc.ratingTypeInt="'.$_POST['ratingTypeInt'].'";'."\r\n".'$tvc.head="'.$_POST['head'].'";'."\r\n".'$tvc.ratingValue="null";'."\r\n");
if ($bytes_written === false)
{
    die("Error writing to file");
}
echo "ok1";

$bytes_written = File::append('assets/tags/'.$_POST['file'].".js",'$(document).ready(function(){var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr"); if(localStorage[key[0]]==null){}else{ $("head").append("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 10px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:10px 10px 15px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>");'."\r\n".'$("body").append("<div id=openModal class=modalDialog >" + localStorage[key[0]] + "</div>");'."\r\n".' $(document).ready(function(){setTimeout(function(){$(" .modalDialog ").css("opacity",1);'."\r\n".'$(" .modalDialog ").css("pointer-events","auto");$(" .modalDialog ").show();},3000);});}'."\r\n".'$(".close").click(function(){'."\r\n".'$(" .modalDialog ").css("opacity",0);'."\r\n".'$(" .modalDialog ").css("display","none");});$(".tvc_promoter").click(function(){'."\r\n".'$("#boxb").hide();$("#page4").show();});'."\r\n".'$(".tvc_passive").click(function(){$("#boxb").hide();'."\r\n".'$("#page3").show();});'."\r\n".'$(".tvc_detractors").click(function(){$("#boxb").hide();$("#page2").show();});'."\r\n".'if(localStorage["ratingTypeInt"]!=null)'."\r\n".'{setRatings(localStorage["ratingTypeInt"]);'."\r\n".'console.log("ratingTypeInt:"+localStorage["ratingTypeInt"]);}'."\r\n".'if (localStorage["ratingSize"]!=null)'."\r\n".'{ setRatingSize(localStorage["ratingSize"]);}});  $(document).ready(function(){


   $("#tvc_rating").on("rating.change", function(event, value, caption) {
       $tvc.ratingValue=value-1;
       console.log($tvc.ratingValue);
    });

  $(".btn").on("click", function() {
    if($tvc.ratingValue<7)
    {
            $("#boxb").hide();
            $("#page2").show();
                   
    }

    else if($tvc.ratingValue>6 && $tvc.ratingValue<9)
    {
             $("#boxb").hide();
             $("#page3").show();

    }
     else if($tvc.ratingValue>8)
    {
             $("#boxb").hide();
             $("#page4").show();

    }

        });


});
');
if ($bytes_written === false)
{
    die("Error writing to file");
}
echo "ok2";
?>
