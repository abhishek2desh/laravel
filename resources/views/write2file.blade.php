
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

            
        </style>
        

    
    </head>
    <body>
             

        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <?php 
                $ourFileName = 'testTemplate.js';
                $ourFileHandle = fopen('assets/js/'. $ourFileName, 'w') or die("can't open file");
                
                fclose($ourFileHandle);
                echo "<div>file handeling Done!</div>";
                ?>
            </div>
        </div>

<script type="text/javascript">

document.write(window.localStorage["draft"]);
document.write(localStorage['jsbjclr']);
document.write(localStorage['jsfrcls']);
document.write(localStorage['ratingType']);

</script>
       
    </body>

</html>