<!-- Stored in resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NPS Builder</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
         <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <link href="{{URL::asset('assets/css/bootstrap-switch.css')}}" rel="stylesheet">
        
     <link rel="stylesheet" href="{{URL::asset('assets/css/star-rating.css')}}"  type="text/css">
     <link rel="stylesheet" href="{{URL::asset('assets/css/theme-krajee-svg.css')}}"  type="text/css">
     
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style type="text/css">
            
            
            
 body {
            font-family: 'Lato';
        }

.fa-btn {
            margin-right: 6px;
        }

.rotate {

/* Safari */
-webkit-transform: rotate(90deg);

/* Firefox */
-moz-transform: rotate(90deg);

/* IE */
-ms-transform: rotate(90deg);

/* Opera */
-o-transform: rotate(90deg);

/* Internet Explorer */
filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
 cursor:pointer;

}

.label-as-badge {
    border-radius: 1em;
}
   
.button{
height:5%; 
  width: 10%;
}

.nav-tabs{
  background-color:lightgrey;
}
html,.container-fluid, .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
  background-color: darkgrey;
}

.legends{
  margin-left: 45%;
  margin-top: 5%;
  font-weight: bolder;

}
form#rating{

  background-color: white;
}
.modalDialog {
                color: #000;
                
                float: right;
                font-family:serif; 
               right:  29%;
               position: relative;
                pointer-events: auto;
                font-family: Arial, Helvetica, sans-serif;
                
                background: rgba(0,0,0,0);
                z-index: 999;
                opacity:1;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                /*pointer-events: none;*/
            }
            .modalDialog:target {
               
            }
            #page2{
             width: 720px;
               height: 325px;
             position: relative;
               /*margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
                z-index: 99999;

            }
            #page3{
              width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
                z-index: 99999;
            }

            #page4{

             width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
                z-index: 99999;
            }

            #boxb {
               width: 720px;
               height: 325px;
             position: relative;
              /* margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #FFFFFF;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
                z-index: 99999;
            
               /*background: -moz-linear-gradient(#fff, #999);
               background: -webkit-linear-gradient(#fff, #999);
               background: -o-linear-gradient(#fff, #999);
               */
            }
            
            .close:hover { 
              background-color: #fff;}
            .close {z-index: 99999;
              background: grey;
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
              box-shadow: 1px 1px 3px #000;}
            
             
            .popTitle {
                 text-align: center;
                 
            }
            
            #rec_bar1>span{
                color: darkgrey;
                font-family: sans-serif;
            }
            #rec_bar>span{
            color: dimgrey;
                font-family:serif;               
            }
            .modalDialog p{
              color: black;
              font-weight: bolder;
              opacity: 0.7;
            }
.toolbox{
  /*width: 20px;
  height: 5px;*/
  }

code {
  width:100%;
  height:70%;
  outline: none;
  resize: none;
  overflow: auto;
  float:top;
}
 .ScrollStyle{
    /*max-height: 900px;
    overflow-y: scroll;*/
}
#drag-1, #drag-2 {
  /*width: 25%;
  height: 100%;
  min-height: 6.5em;
  margin: 10%;

  background-color: #29e;
  color: white;

  border-radius: 0.75em;
  padding: 4%;
*/
  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);
}

#drag-me::before {
  content: "#" attr(id);
 /* font-weight: bold;*/
}
.resize-drag {
  /*background-color: #29e;
  color: white;
  font-size: 20px;
  font-family: sans-serif;
  border-radius: 8px;
  padding: 20px;
  margin: 30px 20px;

  width: 120px;*/

  /* This makes things *much* easier */
  box-sizing: border-box;
}
.dropzone {
  background-color: #ccc;
  border: dashed 4px transparent;
  border-radius: 4px;
  margin: 10px auto 30px;
  padding: 10px;
  width: 80%;
  transition: background-color 0.3s;
}

.drop-active {
  border-color: #aaa;
}

.drop-target {
  background-color: #29e;
  border-color: #fff;
  border-style: solid;
}

.drag-drop {
  display: inline-block;
  min-width: 40px;
  padding: 2em 0.5em;

  color: #fff;
  background-color: #29e;
  border: solid 2px #fff;

  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);

  transition: background-color 0.3s;
}

.drag-drop.can-drop {
  color: #000;
  background-color: #4e4;
}
#outer-dropzone {
  height: 140px;
}

#inner-dropzone {
  height: 80px;
}
.resize-container {
 /* width: 100%;*/

  height: 240px;
}




     </style>
       
       
        
   
    

   
 
   

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
         <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js" type="text/javascript"></script>

        <script src="{{URL::asset('assets/js/custom.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/interact.min.js')}}" type="text/javascript"></script>
        <script src="{{URL::asset('assets/js/jscolor.js')}}" type="text/javascript"></script>

         <script src="{{URL::asset('assets/js/bootstrap-switch.js')}}" type="text/javascript"></script>

          <script src="{{URL::asset('assets/js/star-rating.js')}}" type="text/javascript"></script>
        
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?autoload=true&amp;skin=sunburst&amp;lang=css" defer="defer"></script>
        
        
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
      <title>NPS Tool - @yield('title')</title>
    
    </head>

    <body   id="body">
    <script>



    function getPage(page)
{
console.log(page);
  if (page==1)
  {
    localStorage['page']=1;
    $('#page2').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#boxb').show();
  
  
  }
  else if(page==2)
  {  localStorage['page']=2;
    $('#boxb').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#page2').show();
   
    
  }
else if(page==3)
  { localStorage['page']=3;
    $('#boxb').hide();
   $('#page2').hide();
   $('#page4').hide();
   $('#page3').show();
   
    
  }
else if(page==4)
  { localStorage['page']=4;
   $('#boxb').hide();
   $('#page2').hide();
   $('#page3').hide();
   $('#page4').show();
   
   
  }

}
    $(document).ready(function(){
 
        $('.nps_logo_img').click(function(event){
            $('#body').append("<div class='imgpop' style='position:absolute'><input height='100px' id='imgurl2'  type='Text' placeholder='Input logo Url'></input><input id='imgset' type='button' value='setLogo' onclick='setimg2()'></input></div>");
             $('.imgpop').css("top",event.pageY-50);
    $('.imgpop').css("left",event.pageX-10);
    $('.imgpop').css("height",'auto');
    $('.imgpop').css("background",'grey');
    
    $('.imgpop').show();
    
                   
            
        });
        
   

          $('#propTab').mouseover(function(event){
    document.getElementById("toolTip").innerHTML="<strong><h4>Develepor Options</h4></strong>";
    $('#toolTip').css("top",event.pageY-50);
    $('#toolTip').css("left",event.pageX-10);
    $('#toolTip').css("height",'auto');
    $('#toolTip').show();

  });
  $('#propTab').on("mouseout",function(){
    document.getElementById("toolTip").innerHTML="<strong><h3>Develepor Options</h3></strong>";
    $('#toolTip').hide();

  });
  $('#propTab').on("click",function(){
    if($('#properties').css('display')=='none')
    {
      
       $('#propTab').html("<center><span class='rotate glyphicon glyphicon-cog'><div style='height:5%px'><h3>Hide Options</h3></div></span></center>");
      $('#toolTip').hide();
      $('#properties').show().slideDown("slow");
    } 
    else{
      
      $('#propTab').html("<center><span class='rotate glyphicon glyphicon-cog'><div style='height:5%px'><h3>Developer Options</h3></div></span></center>");
      $('#toolTip').hide();
      $('#properties').hide();
    } 

 

  });

 $(".tip").mouseover(function(event){
    $('#toolTip').html("<strong><h4>"+$(this).attr("tip")+"</h4></strong>");
    $('#toolTip').css("top",event.pageY-40);
    $('#toolTip').css("left",event.pageX-10);
    $('#toolTip').css("color","#011627");
    $('#toolTip').css("height","auto");
    $('#toolTip').show();
    
   });

 $(".tip").mouseout(function(event){
    $('#toolTip').hide();
   });

 //floating fon format container
$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").mouseover(function(){
  $(this).css("border","3px dashed red");


});

$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").mouseout(function(){
 $(this).css("border","0px dashed #fff");

});

$("#openModal  p, #openModal  h1,#openModal  h2,#openModal  h3,#openModal  h4").click(function(event){
  $(this).css("border","3px solid red");
  $('#formatText').css("top","75%");
   $('#formatText').css("left","45%");
  $('#formatText').css("z-index","999");
   $('#formatText').show();

});
//set the first page in view rest hidden
 $('#page2').hide();
   $('#page3').hide();
   $('#page4').hide();
   $('#boxb').show();
   localStorage['page']=1;
// when cliclk in design tab or on views design the class are toggled to smaller version
      //$("#btnDesign1").click(function(){$('#tabwindow').toggleClass('col-md-9 col-md-12');});
      //$("#btnDesign2").click(function(){$('#tabwindow').toggleClass('col-md-9 col-md-12');});
      //$("#dropdown3").focus(function(){$('#tabwindow').toggleClass('col-md-12 col-md-6');});
     
      //^ colapse the prop and tool box to give space to survey flow tab
 
if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}
if (localStorage['ratingSize']!=null){ 
setRatingSize(localStorage['ratingSize']);
}


 $("[name='npsOn']").bootstrapSwitch(); 
         $("[name='closeBtnBox']").bootstrapSwitch(); 
         $("[name='openFeedBox']").bootstrapSwitch(); 


});
  

    
  $(function() {
    $( '.panel' ).resizable();
  });
$(function() {
    $( '.row' ).resizable();
  });
  function dragStart(ev) {
            ev.dataTransfer.effectAllowed='move';
            ev.dataTransfer.setData("Text", ev.target.getAttribute('id'));
            ev.dataTransfer.setDragImage(ev.target,0,0);
            
            return true;
         }
         
         function dragEnter(ev) {
            event.preventDefault();
            return true;
         }
         
         function dragOver(ev) {
            return false;
         }
         
         function dragDrop(ev) {
            var src = ev.dataTransfer.getData("Text");
            var itm = document.getElementById(src).lastChild;

// Copy the <li> element and its child nodes
            var cln = itm.cloneNode(true);
            ev.target.appendChild(cln);
            ev.stopPropagation();
            return false;
         }

          function updateRatinghvr(jscolor) {
    // 'jscolor' instance can be used as a string
      var css = '.rating:hover{ background-color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);

         var key="jsratinghvrclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }

    function updateRatingbk(jscolor) {
    // 'jscolor' instance can be used as a string
          
        // $('.rating').css('background','#' + jscolor);
           var css = '.rating{ background-color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);
         var key="jsratingbkclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }
    function updateRatingfc(jscolor) {
    // 'jscolor' instance can be used as a string
          
      //   $('.rating').css('color' ,'#' + jscolor);
          var css = '.rating{ color: #'+jscolor+';}';
style = document.createElement('style');

if (style.styleSheet) {
    style.styleSheet.cssText = css;
} else {
    style.appendChild(document.createTextNode(css));
}

document.getElementsByTagName('head')[0].appendChild(style);
         var key="jsratingfcclr";
         localStorage[key]=jscolor;
         //console.log(jscolor);
        }

        function updatebk(jscolor) {
    // 'jscolor' instance can be used as a string
               var key="jsbkclr";
                 localStorage[key]=jscolor;
                
        var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1:document.getElementById('boxb').style.backgroundColor= '#' + jscolor;
                $('#rating.container-fluid').css('background-color','#' + jscolor);
                 break;

        case 2:document.getElementById('page2').style.backgroundColor= '#' + jscolor;
               $('#rating.container-fluid').css('background-color','#' + jscolor);
                break;
                
        case 3:document.getElementById('page3').style.backgroundColor= '#' + jscolor;
                $('#rating.container-fluid').css('background-color','#' + jscolor);
                break;
        case 4:document.getElementById('page4').style.backgroundColor= '#' + jscolor;
                $('#rating..container-fluid ').css('background-color','#' + jscolor);
                break;
          }
        }
    function updatefc(jscolor) {
    // 'jscolor' instance can be used as a string
         
         //console.log(jscolor);
          var key="jsfrclr";
         localStorage[key]=jscolor;
         
          var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1: document.getElementById('boxb').style.color = '#' + jscolor;
                
                 break;

        case 2:document.getElementById('page2').style.color = '#' + jscolor;
               
                break;
        case 3:document.getElementById('page3').style.color = '#' + jscolor;
                
                 break;
                          //console.log(jscolor);

        case 4:document.getElementById('page4').style.color = '#' + jscolor;
                 break;
         }
        }
        function updateHeight(value) {
    // 'jscolor' instance can be used as a string
          var key="pophight";
         localStorage[key]=value;
 
                
            var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1: document.getElementById('boxb').style.height = value + 'px';
                
                 break;

        case 2:document.getElementById('page2').style.height = value + 'px';
                break;
                
        case 3:document.getElementById('page3').style.height = value + 'px';
                break;
         //console.log(jscolor);

        case 4:document.getElementById('page4').style.height = value + 'px';
                break;
         }
         
        }
        function updateWidth(value) {
    // 'jscolor' instance can be used as a string
         
         //console.log(jscolor);
          var key="popwidth";
         localStorage[key]=value;

           var page=parseInt(localStorage['page']);
        console.log(typeof(page));
         switch(page)
         { 
         case 1: document.getElementById('boxb').style.width = value + 'px';
               
                 break;

        case 2:document.getElementById('page2').style.width = value + 'px';
               break;
                
        case 3:document.getElementById('page3').style.width = value + 'px';
              break;

        case 4:document.getElementById('page4').style.width = value + 'px';
                 break;
         
        }
      }
    function updateclsbkclr (value)
    {
      $('.close').css("background-color",'#'+value);

    }  
     
    function updateclsclr (value)
    {
      $('.close').css("color",'#'+value);

    } 
    function updateclsopc (value)
    {
      $('.close').css("opacity",value);

    }      



function setRatings(value)
{
 var key="ratingType";
value= parseInt(value);
localStorage['ratingTypeInt']=value;
//  alert(value);

  if (value==null)
  {}
else if(value==1)
  {$('#rating').remove();
    localStorage[key]='<form id="rating" class="container-fluid"><div id="rec_bar1"><span style="margin-left:3%;">0</span><span style="margin-left:6%;">1</span><span style="margin-left:7%;">2</span><span style="margin-left:6%;">3</span><span style="margin-left:6%;">4</span><span style="margin-left:6%;">5</span><span style="margin-left:6%;">6</span><span style="margin-left:6%;">7</span><span style="margin-left:6%;">8</span><span style="margin-left:6%;">9</span><span style="margin-left:6%;">10</span></div><input id="tvc_rating" value="0" type="number" class="rating" min=0 max=11 step=1 data-size="md" data-stars="11"><div id="rec_bar"> <span>Not likely</span><span id="likely" style="margin-left:80%;">Very Likely</span> </div><br/><center><button type="button" style="width:150px" class="btn btn-info">Submit</button></center></form>';
 
$('#boxb').append(localStorage[key]);
  $("#tvc_rating").rating();
   }
else if(value==2)
  {$('#rating').remove();
   localStorage[key]='<form id="rating" class="container-fluid"><div id="rec_bar1"><span style="margin-left:3%;">0</span><span style="margin-left:6%;">1</span><span style="margin-left:7%;">2</span><span style="margin-left:6%;">3</span><span style="margin-left:6%;">4</span><span style="margin-left:6%;">5</span><span style="margin-left:6%;">6</span><span style="margin-left:6%;">7</span><span style="margin-left:6%;">8</span><span style="margin-left:6%;">9</span><span style="margin-left:6%;">10</span></div><input id="tvc_rating" type="number" class="kv-ltr-theme-svg-alt rating-loading" value="0" dir="ltr" data-size="md" min=0 max=11 step=1 data-stars="11"><div id="rec_bar"> <span>Not likely</span><span id="likely" style="margin-left:80%;">Very Likely</span> </div><br/><center><button type="button" style="width:150px" class="btn btn-info">Submit</button></center></form>';

    $('#boxb').append(localStorage[key]);
    $('#tvc_rating').rating({
        hoverOnClear: false,
        theme: 'krajee-svg',
        containerClass: 'is-heart',
        filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        defaultCaption: '{rating} hearts',
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        }
    });
  }
setRatingSize('md');
  $('#tvc_rating').on('rating.change', function(event, value, caption) {
    console.log(value-1);
    console.log(caption);
});
   
}


function setRatingSize(value)
{
 var key="ratingSize";
localStorage[key]=value;
//alert(value);
if(parseInt(localStorage['ratingTypeInt'])==1)
{
      if (value==null)
      {}
    else if(value=="xl")
      {
     
      $('#rec_bar1 >span').css('margin-left','66px');
      $('#rec_bar1 >span:first').css('margin-left','30px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'xl'});
       document.getElementById('boxb').style.width =890+'px';
       document.getElementById('boxb').style.height =390+'px';
        document.getElementById('likely').style.marginLeft =83+'%';
        
      }
    else if(value=="lg")
      {$('#rec_bar1 >span').css('margin-left','53px');
     $('#rec_bar1 >span:first').css('margin-left','20px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'lg'});
       document.getElementById('boxb').style.width =750+'px';
        document.getElementById('boxb').style.height =380+'px';
        document.getElementById('likely').style.marginLeft =80+'%';
        
      }
      else if(value=="md")
      {$('#rec_bar1 >span').css('margin-left','42px');
     $('#rec_bar1 >span:first').css('margin-left','17px');
        $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'md'});
        document.getElementById('boxb').style.width =630+'px';
         document.getElementById('boxb').style.height =370+'px';
        document.getElementById('likely').style.marginLeft =75+'%';
      
      }
      else if(value=="sm")
      {$('#rec_bar1 >span').css('margin-left','33px');
     $('#rec_bar1 >span:first').css('margin-left','13px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'sm'});
       document.getElementById('boxb').style.width =550+'px';
         document.getElementById('boxb').style.height =350+'px';
        document.getElementById('likely').style.marginLeft =70+'%';
        
      }
       else if(value=="xs")
      {$('#rec_bar1 >span').css('margin-left','26px');
     $('#rec_bar1 >span:first').css('margin-left','10px');
       $('#tvc_rating').rating('create', {min:0, max:11, step:1,stars:11, size:'xs'});
       document.getElementById('boxb').style.width =450+'px';
         document.getElementById('boxb').style.height =330+'px';
        document.getElementById('likely').style.marginLeft =65+'%';
        
      }

    }
  else if(parseInt(localStorage['ratingTypeInt'])==2)
  {
     if (value==null)
      {}
    else if(value=="xl")
      {
     
      $('#rec_bar1 >span').css('margin-left','66px');
      $('#rec_bar1 >span:first').css('margin-left','32px');
       $('#tvc_rating').rating('create',{
        hoverOnClear: false,
        theme: 'krajee-svg',
        containerClass: 'is-heart',
        filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
        defaultCaption: '{rating} hearts',
        size:'xl',
        stars:11,
        starCaptions: function (rating) {
            return rating == 1 ? 'One heart' : rating + ' hearts';
        }
    });
       document.getElementById('boxb').style.width =900+'px';
       document.getElementById('boxb').style.height =390+'px';
        document.getElementById('likely').style.marginLeft =83+'%';
        
      }
    else if(value=="lg")
      {
        $('#rec_bar1 >span').css('margin-left','53px');
        $('#rec_bar1 >span:first').css('margin-left','22px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'lg',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
       document.getElementById('boxb').style.width =750+'px';
        document.getElementById('boxb').style.height =370+'px';
        document.getElementById('likely').style.marginLeft =80+'%';
        
      }
      else if(value=="md")
      {
        $('#rec_bar1 >span').css('margin-left','39px');
        $('#rec_bar1 >span:first').css('margin-left','17px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'md',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =590+'px';
        document.getElementById('boxb').style.height =360+'px';
        document.getElementById('likely').style.marginLeft =75+'%';
      
      }
      else if(value=="sm")
      {
        $('#rec_bar1 >span').css('margin-left','32px');
        $('#rec_bar1 >span:first').css('margin-left','14px');
        $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'sm',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =550+'px';
        document.getElementById('boxb').style.height =350+'px';
        document.getElementById('likely').style.marginLeft =70+'%';
        
      }
       else if(value=="xs")
      {
        $('#rec_bar1 >span').css('margin-left','23px');
        $('#rec_bar1 >span:first').css('margin-left','12px');
                $('#tvc_rating').rating('create',{
            hoverOnClear: false,
            theme: 'krajee-svg',
            containerClass: 'is-heart',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            size:'xs',
            stars:11,
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            }
        });
        document.getElementById('boxb').style.width =450+'px';
        document.getElementById('boxb').style.height =340+'px';
        document.getElementById('likely').style.marginLeft =65+'%';
        
      }

  }

}

function setimg2(){
var str = document.getElementById("imgurl2").value;
document.getElementById("imgUrl").value=str;
setImg();
$('.imgpop').hide();
}

function setImg()
{
  var str = document.getElementById("imgUrl").value;
        $('.nps_logo_img').attr("src",str);
        console.log(str);  

str = document.getElementById("imgAlt").value;
        $('.nps_logo_img').attr("alt",str);     
        console.log(str);   

str = document.getElementById("imgHeight").value;
        $('.nps_logo_img').attr("height",str);     
        console.log(str);   

str = document.getElementById("imgWidth").value;
        $('.nps_logo_img').attr("width",str);     
        console.log(str);   

   


}

function setOption(value)
{
if (value=='false')
  {
   
    $('#propTab').hide();
    $('#properties').css('visibility','hidden');
  
  }
else if(value=='true')
  {
    
    $('#propTab').show();
     $

    if ($('#properties').css('visibility')=='hidden')
    {
      $('#properties').css('visibility','visible');


    }
    
  }

}

  </script>

  
       
           

                
        @show
       
            @yield('content')

         <script type="text/javascript">
    
var Base64 = {


    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",


    encode: function(input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output + this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) + this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },


    decode: function(input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    _utf8_encode: function(string) {
        string = string.replace(/\r\n/g, "\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    _utf8_decode: function(utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while (i < utftext.length) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if ((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i + 1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i + 1);
                c3 = utftext.charCodeAt(i + 2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}
    
/*    var encode = document.getElementById('encode'),
    decode = document.getElementById('decode'),
    output = document.getElementById('output'),
    input = document.getElementById('input');


encode.onclick = function() {
    output.innerHTML = Base64.encode(input.value);
}
    
decode.onclick = function() {
    var $str = output.innerHTML;
    output.innerHTML = Base64.decode($str);
}    

    */


    $(".close").click(function() {
  alert("closed clicked"); 
 });


$(document).ready(function(){$("[name='my-checkbox']").bootstrapSwitch();});
 

   
   

function saveDraftLocal(){

$('#boxb').attr("contentEditable","false");
$('#page2').attr("contentEditable","false");
$('#page3').attr("contentEditable","false");
$('#page4').attr("contentEditable","false");

 /*var  contentEl = document.getElementById("rec_bar1");
   if(contentEl!=null){
    localStorage['rectBar1'] = contentEl.innerHTML;
console.log(localStorage['rectBar1']);
}*/

$('#rating').remove(); 
$('#boxb').remove('center')


var key = "draft";

localStorage[key]=null;

  var  contentEl = document.getElementById("openModal");
    localStorage[key] = contentEl.innerHTML;

 if(localStorage['ratingTypeInt']!=null){
setRatings(localStorage['ratingTypeInt']);
console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
}
if (localStorage['ratingSize']!=null){ 
setRatingSize(localStorage['ratingSize']);
}

  /*var  contentEl = document.getElementById("rec_bar1");
   if(contentEl!=null){
     contentEl.innerHTML=localStorage['rectBar1'] ;
}*/
  var win = window.open('{{ url('/preview2') }}');

    $('#boxb').attr("contentEditable","true");
$('#page2').attr("contentEditable","true");
$('#page3').attr("contentEditable","true");
$('#page4').attr("contentEditable","true");

  win.focus();
  
}

function saveDesignDb(){
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   /*$(document).ready(function() {
                 
                      $.post( 
                         "{!! URL::to('testjson') !!}",
                         { _token: $('meta[name="csrf_token"]').attr('content'),body: localStorage['draft']},
                         function(data) {
                            console.log(data);
                         }
                      );
                  
               });*/

  $(document).ready(function() {
  $body=Base64.encode(localStorage['draft']);
    $.ajax ({
    url:  "{!! URL::to('createjs') !!}",
    type: "POST",
    data: { file:'{{Auth::user()->name}}',head:Base64.encode("<style> .title {font-size: 96px;} .modalDialog {position: fixed; font-family: Arial, Helvetica, sans-serif; display:none;top: 0;right: 0; bottom: 0; left: 0;background: rgba(0,0,0,0);z-index: 99999;opacity:0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events:none;}.modalDialog:target{opacity:1;pointer-events: auto;}.modalDialog > div {width: 720px; height: 325px;position: relative;margin: 10% auto; padding: 5px 20px 13px 20px; border-radius: 10px;background: #FFFFFF;border: 1px;border-style:solid; box-shadow:10px 10px 15px #888888;}.close {z-index: 99999;background: #606061;color: #FFFFFF;line-height: 25px;position: absolute;right: -12px;text-align: center;top: -10px;width: 24px;text-decoration: none;font-weight: bold;-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;box-shadow: 1px 1px 3px #000;}.close:hover { background: #000;}.popTitle {text-align: center;}.container{ margin: auto;width: 60%;padding: 10px;}p{text-align:center;line-height: .5em;}</style>"),draft:$body,ratingType:Base64.encode(localStorage['ratingType']),ratingTypeInt:localStorage['ratingTypeInt'],ratingSize:localStorage['ratingSize']},
    cache: false,
    dataType: "json",
    success: function(data){
     
    
        //console.log(Base64.decode(data.response));
      // alert(data.response);



    }
});  
}); 
  window.location.assign('home');
}

$(document).ready(function(){
  


        
        
       
 

if( localStorage['draft']!=null)
  {var  contentEl = document.getElementById("openModal");
    contentEl.innerHTML=localStorage['draft'];
      if(localStorage['ratingTypeInt']!=null){
      setRatings(localStorage['ratingTypeInt']);
      console.log("ratingTypeInt:"+localStorage['ratingTypeInt']);
      }
      if (localStorage['ratingSize']!=null){ 
      setRatingSize(localStorage['ratingSize']);
      }
 }
 
 if( localStorage['draft']==null)
            {
                setRatings('1');
                setRatingSize('md');
            }
  $('#boxb').attr("contentEditable","true");
$('#page2').attr("contentEditable","true");
$('#page3').attr("contentEditable","true");
$('#page4').attr("contentEditable","true");
  }
  );

function resetDesign(){
var r = confirm("You are about to destroy your design!! do you whish to proceed?");
if (r == true) {
    localStorage.clear("draft");
 location.reload();
  //alert("cache cleared");
    setRatings('1');
    setRatingSize('md');
} else {
    x = "You pressed Cancel!";
}
  

    
}


function sendForm(value)
{
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
switch(value){

  case 1://general setting form 
        alert(value);
        $.ajax ({
      url:  "{!! URL::to('testjson') !!}",
      type: "POST",
      data: $('#gnrSet').serialize(),
      cache: false,
      dataType: "json",
      success: function(data){
   
         
        console.log(data);
        
      }
    });
      break;
  case 2:alert(value);
     $.ajax ({
      url:  "{!! URL::to('testjson') !!}",
      type: "POST",
      data: $('#srvConfig').serialize(),
      cache: false,
      dataType: "json",
      success: function(data){
   
         
        console.log(data);
    }
    });

   case 3:alert(value);
   $.ajax ({
    url:  "{!! URL::to('testjson') !!}",
    type: "POST",
    data: $('#workFlow').serialize(),
    cache: false,
    dataType: "json",
    success: function(data){
 
       
      console.log(data);
      }
    });

   case 4:alert(value);
   $.ajax ({
    url:  "{!! URL::to('testjson') !!}",
    type: "POST",
    data: $('#customText').serialize(),
    cache: false,
    dataType: "json",
    success: function(data){
 
       
      console.log(data);
     localStorage['fblink']=data;
      $('#customText').append('<a id="fblink" target="_blank" href='+data+'  style="color:#ffffff;">Click Me facebook !</a>');
      $('#customText').append('<a id="tweetlink" target="_blank" href="https://twitter.com/intent/tweet?text='+document.getElementById('sharetext').value+'&url='+document.getElementById('shareurl').value+'style="color:#ffffff;">Click Me twitter !</a>');
      $('#fblink').show();
      $('#tvc_fb').attr('href',data);
      $('#tvc_twitter').attr('href','https://twitter.com/intent/tweet?text='+document.getElementById('sharetext').value+'&url='+document.getElementById('shareurl').value);
      }
    });
  }
}

 </script>
   <script>//<![CDATA[
(function () {
  function html(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }
 
  var quineHtml = html(document.getElementById("openModal").innerHTML);
 
  // Highlight the operative parts:
  quineHtml = quineHtml.replace(
    /&lt;script src[\s\S]*?&gt;&lt;\/script&gt;|&lt;!--\?[\s\S]*?--&gt;|&lt;pre\b[\s\S]*?&lt;\/pre&gt;/g,
    '<span class="operative">$&</span>');
 
  document.getElementById("htmlcode").innerHTML = quineHtml;
})();
//]]>

/*$(document).ready(
function(){
var ca = document.createElement("script"),t; 
                ca.type = "text/javascript"; 
                ca.async = true; 
                ca.src = "assets/tags/{{ Auth::user()->name }}.js"; 
                t = document.getElementsByTagName("script")[0]; //find all the script tag, go to the first script tag
                t.parentNode.insertBefore(ca, t);

}

  );
*/



</script>


    </body>
</html>