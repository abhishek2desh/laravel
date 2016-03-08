  $(document).ready(function(){

        var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr");
          
          if(localStorage[key[0]]==null)
            {}
            else
           { $('head').append("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 10px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:10px 10px 15px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>");
              

              $('body').append('<div id="openModal" class="modalDialog" >' + localStorage[key[0]] + '</div>');
              
             $(document).ready(function(){
              setTimeout(function(){$(' .modalDialog ').css("opacity",1);$(' .modalDialog ').css("pointer-events",'auto');$(' .modalDialog ').show();},3000);
              
                });       
         }
          $('.close').click(function(){$(' .modalDialog ').css("opacity",0);$(' .modalDialog ').css("display",'none');});
          $('.tvc_promoter').click(function(){$('#boxb').hide();$('#page4').show();});
          $('.tvc_passive').click(function(){$('#boxb').hide();$('#page3').show();});
           $('.tvc_detractors').click(function(){$('#boxb').hide();$('#page2').show();});
          // $('.rating-container').remove()

          
          
           
      
       

      ///if (localStorage['ratingSize']!=null){ 
      //  setRatingSize(localStorage['ratingSize']);
       // }


          if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}
if (localStorage['ratingSize']!=null){ 
setRatingSize(localStorage['ratingSize']);
}

        });  $(document).ready(function(){

        var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr");
          
          if(localStorage[key[0]]==null)
            {}
            else
           { $('head').append("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 10px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:10px 10px 15px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>");
              

              $('body').append('<div id="openModal" class="modalDialog" >' + localStorage[key[0]] + '</div>');
              
             $(document).ready(function(){
              setTimeout(function(){$(' .modalDialog ').css("opacity",1);$(' .modalDialog ').css("pointer-events",'auto');$(' .modalDialog ').show();},3000);
              
                });       
         }
          $('.close').click(function(){$(' .modalDialog ').css("opacity",0);$(' .modalDialog ').css("display",'none');});
          $('.tvc_promoter').click(function(){$('#boxb').hide();$('#page4').show();});
          $('.tvc_passive').click(function(){$('#boxb').hide();$('#page3').show();});
           $('.tvc_detractors').click(function(){$('#boxb').hide();$('#page2').show();});
          // $('.rating-container').remove()

          
          
           
      
       

      ///if (localStorage['ratingSize']!=null){ 
      //  setRatingSize(localStorage['ratingSize']);
       // }


          if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}
if (localStorage['ratingSize']!=null){ 
setRatingSize(localStorage['ratingSize']);
}

        });