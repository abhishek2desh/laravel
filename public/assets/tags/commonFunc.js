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



