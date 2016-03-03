

<html>
<?php
echo $_POST['inputName'];
echo $_POST['optionsRadios'];
echo $_POST['inputUrl'];
echo $_POST['textAddress'];

$bytes_written = File::put("user.js",'var $tvc={};$tvc.cmpName="'.$_POST['inputName'].'";$tvc.webType="'.$_POST['optionsRadios'].'";$tvc.targetUrl="'.$_POST['inputUrl'].'";$tvc.webType="'.$_POST['textAddress'].'";');
if ($bytes_written === false)
{
    die("Error writing to file");
}

?>
<head>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{URL::asset('assets/js/jsonFunction.js')}}" type="text/javascript"></script>

</head>
<body>
<meta name="_token" content="{!! csrf_token() !!}"/>

<a href="#" id="try" data-link="{{ url('/testjson') }}" >Try</a>


</body>
</html>