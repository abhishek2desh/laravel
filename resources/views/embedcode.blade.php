@extends('layouts.app')

@section('title', 'Embed Code')

@section('sidebar')
    @parent

@stop

@section('content')

<div class="container-fluid">
   	<div class="row">
   <center> <strong><h3>Add the following code in the head portion of your website </h3></strong></center><br/>
      <div class="container">

        <div class="col-md-5 col-md-offset-1" style="width:auto;text-anchor:middle; border:solid 1px #D3D3D6;background-color:#D3D3D3; text-align: justify">


<h4><?php echo htmlentities("<script src='http://localhost:8013/laranew/public/assets/tags/commonFunc.js' async='true' type='text/javascript'></script>"); ?><br/><br/>  
	<?php echo htmlentities("<script src='http://localhost:8013/laranew/public/assets/tags/". Auth::user()->name.".js' async='true' type='text/javascript'></script>"); ?></br>
</h4>
        </div>
        
      </div>
    </div>
</div>

@stop
