<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="{{URL::asset('assets/css/star-rating.css')}}"  type="text/css">
     
        <style>
            html, body {
                height: 100%;
            }
            

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            
        </style>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"> </script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        
     
     <script src="{{URL::asset('assets/js/star-rating.js')}}" type="text/javascript"></script>
     <script src="{{URL::asset('user.js')}}" type="text/javascript"></script>
    </head>
    <body>
             

        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <form class="container-fluid"><input id="old" value="0" type="number" class="rating" min=0 max=11 step=1 data-size="lg" data-stars="11"><center><button class="btn btn-info">Submit</button></center></form>
            </div>
        </div>


        <script type="text/javascript">
        
        $(document).ready(function(){

        var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr");
          
          if(localStorage[key[0]]==null)
            {}
            else
           { $('head').append("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 10px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:10px 10px 15px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>");
              $('head').append('<style type="text/css">#boxb {width:'+localStorage[key[2]]+'px; height:'+localStorage[key[1]]+'px;background:#'+localStorage[key[3]]+' ;color:#'+localStorage[key[4]]+';}</style');

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
     $('#tvc_rating').rating('refresh');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'lg'});
       
      
        });

       </script>
    </body>

</html>