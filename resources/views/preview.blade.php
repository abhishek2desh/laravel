<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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

            .title {
                font-size: 96px;
            }
            
            .modalDialog {
                
                position: fixed;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0);
                z-index: 99999;
                opacity:0;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
                

            }
            .modalDialog:target {
                
                opacity:1;
                pointer-events: auto;
            }

            .modalDialog > div {
               width: 720px;
               height: 325px;
               position: relative;
               margin: 10% auto;
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
               /*background: -moz-linear-gradient(#fff, #999);
               background: -webkit-linear-gradient(#fff, #999);
               background: -o-linear-gradient(#fff, #999) ;
               */
            }
            .close {
                 z-index: 99999;
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position: absolute;
                right: -12px;
                text-align: center;
                top: -10px;
                width: 24px;
                text-decoration: none;
                font-weight: bold;
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
                -moz-box-shadow: 1px 1px 3px #000;
                -webkit-box-shadow: 1px 1px 3px #000;
                box-shadow: 1px 1px 3px #000;
            }
            .close:hover { background: #000; }
            
            .popTitle {
                 text-align: center;
                 
            }


            .rating {
              position:relative;
               border-radius: 50%;
                behavior: url(PIE.htc); /* remove if you don't care about IE8 */

                width: 36px;
               height: 36px;
                padding: 2px;
                
                background: #61E5E9;
                border: 2px solid #666;
                color: #666;
                text-align: center;
                 -webkit-transition-duration: 0.4s; /* Safari */
                  transition-duration: 0.4s;
                font: 32px Arial, sans-serif;
                display:inline-block;
             
                
            }
            .rating:hover { 
              background-color: #000000;
              color: #FFFFFF;

            }
              .container{

                /*position: relative;*/
                margin: auto;
                width: 60%;
                /*border: 3px solid #73AD21;*/
                padding: 10px; 
              }
        </style>
        

    
    </head>
    <body>
             <a href="#openModal">Open Modal</a>

        <div id="openModal" class="modalDialog">
            <div id="boxb">
              <a href="#close" title="Close" class="close">X</a>
              <h2 class="popTitle">Modal Box</h2>
              <p>This is a sample modal box that can be created using the powers of CSS3.</p>
              <p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
            </div>
        </div>

        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>


        <script type="text/javascript">
        
        $(document).ready(function(){
          var key=new Array("draft","pophight","popwidth","jsbkclr","jsfrclr");
          
          if(localStorage[key[0]]==null)
            {}
            else
            { $('head').append('<style type="text/css">.modalDialog > div {width:'+localStorage[key[2]]+'px; height:'+localStorage[key[1]]+'px;background:'+'#'+localStorage[key[3]]+' ; color:'+'#'+localStorage[key[4]]+';}');

              var contentEl = document.getElementById("boxb");
              contentEl.innerHTML=localStorage[key[0]];
              
            }
          
        });

       </script>
    </body>

</html>
