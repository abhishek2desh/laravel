<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>

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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Contact Us</div>
                 <?php
                    $title=urlencode('Dressfinity');
                    $url=urlencode('http://www.facebook.com/pages/Dressfinity-LLC/208406062583392 ');
                    $image=urlencode('http://livemarketnews.com/dressfinity/skin/frontend/default/default/images/logo.jpg');
                ?>
                <a onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo $title;?>&amp;p[url]=<?php echo $url; ?>&amp;&p[images][0]=<?php echo $image;?>', 'sharer', 'toolbar=0,status=0,width=548,height=325');" target="_parent" href="javascript: void(0)">
                    Share our Facebook page!
                </a>
            </div>
        </div>
    </body>
</html>
