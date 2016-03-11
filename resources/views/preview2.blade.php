<!DOCTYPE html>
<html>

    <head>
        <title>Laravel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
         <link rel="stylesheet" href="{{URL::asset('assets/css/star-rating.css')}}"  type="text/css">
           <link rel="stylesheet" href="{{URL::asset('assets/css/theme-krajee-svg.css')}}"  type="text/css">
     
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
     
    
    
   <script src="{{URL::asset('/assets/tags/commonFunc.js')}}" async='true' type="text/javascript"></script>
    <script src="{{URL::asset('/assets/tags/abhishek2desh.js')}}" async='true' type='text/javascript'></script>
    </head>
    <body>
             

        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <form class="container-fluid"><input id="old" value="0" type="number" class="rating" min=0 max=11 step=1 data-size="lg" data-stars="11"><center><button class="btn btn-info">Submit</button></center></form>
            </div>
        </div>


        
        <script type="text/javascript">
        
    
       </script>
    </body>

</html>