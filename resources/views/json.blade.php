


<?php
 $formNum= $_POST['formNo'];
switch ($formNum)
{
    case '1':
        # code...

    
    $arr = array ('response'=>'generalform');
    print json_encode($arr);

        break;
    case '2':
        # code...
     $arr = array ('response'=>'surveyform');
    print json_encode($arr);
        break;
    case '3':
        # code...
     $arr = array ('response'=>'workFlowform');
    print json_encode($arr);
        break;
    case '4':
        # code...
         $title=urlencode($_POST['title']);
                    $url=urlencode($_POST['fbUrl']);
                    $image=urlencode($_POST['imgUrl']);
          $result="http://www.facebook.com/sharer.php?s=100&amp;p[title]=".$title."&amp;p[url]=".$url."&amp;&p[images][0]=".$image;
        // $arr = array ('response'=>'customTxtform');
    print json_encode($result);
        break;

    default:
        # code...
        break;
}
/*$bytes_written = File::put("user.js",'var $tvc={};$tvc.cmpName="'.$_POST['inputName'].'";$tvc.webType="'.$_POST['optionsRadios'].'";$tvc.targetUrl="'.$_POST['inputUrl'].'";$tvc.webType="'.$_POST['textAddress'].'";');
if ($bytes_written === false)
{
    die("Error writing to file");
}*/


// set to return response=error

?>
