@extends('layouts.master')

@section('title', 'Layout Tester')

@section('sidebar')
    @parent

@stop

@section('content')

<div class="container-fluid">
   	<div class="row">
    
	  <div class="col-md-3 collapse" id="toolbox" >
	  	<div class="panel panel-primary" style="overflow-x: hidden;overflow-y: scroll;height:100%">
                <div class="panel-heading" style="background-color:#151515">
                  <h3 class="panel-title">ToolBox</h3>
                </div>
                <div class="panel-body" style="background-color:#3d3d3d" >
                  <ul class="list-group" style="position:relative;background-color:#3d3d3d">
                    <li class="list-group-item" style="background-color:#3d3d3d;"><form class="list-group-item" style="background-color:#3d3d3d;" ><div class="form-group"><input id ="npsimgurl"type="text" class="form-control" placeholder="Input Logo URL"></div>
                     <button id="imgset" type="button" class="btn btn-default btn-inverse">Set Logo</button>
                   </form>
                   </li>
                    <li class="list-group-item" style="background-color:#3d3d3d;color:#fff"><div id="heading1" draggable="true" ondragstart="return dragStart(event)" ><h1  >Heading</h1></div></li>
                   <li class="list-group-item" style="background-color:#3d3d3d;color:#fff"><div id="heading2" draggable="true" ondragstart="return dragStart(event)" ><h2 >Heading</h2></div></li>
                   <li class="list-group-item" style="background-color:#3d3d3d;color:#fff"><div id="heading3" draggable="true" ondragstart="return dragStart(event)" ><h3  >Heading</h3></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;color:#fff"><div id="rd"  draggable="true" ondragstart="return dragStart(event)"><input type="radio"> radio  </input></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;color:#fff"><div id="chk"  draggable="true" ondragstart="return dragStart(event)"><input type="checkbox">  checkbox </input></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;"><div class="" ><textarea id="txtarea" style="height:10%" draggable="true"ondragstart="return dragStart(event)">text area</textarea></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;"><div id="star"  draggable="true" draggable="true" ondragstart="return dragStart(event)"><button>Cancel</button></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;"><div ><img id="round"  draggable="true" ondragstart="return dragStart(event)" src="http://www.tatvic.com/img/tatvic-logo.png"></div></li>
                    <li class="list-group-item" style="background-color:#3d3d3d;"><div id="txt"  draggable="true" ondragstart="return dragStart(event)" ><input type="text" value="Enter any text here"></input></div></li>
                  </ul> 
                </div>
              </div>
        </div>
        
   
     <div id="tabwindow" class="col-md-12  resize-container resize-drag" style="border:5px solid #585858; height:100%;overflow-x: hidden;">
     
        <ul class="nav nav-tabs">

  
  <li class="active" ><a href="#dropdown1"  data-toggle="tab"><span class="glyphicon glyphicon-wrench" aria-expanded="true"></span>&nbsp;Genral Settings</a></li>
  <li class="divider"></li>
  <li><a href="#dropdown2" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Survey Configuration</a></li>
  <li class="divider"></li>
  <li ><a href="#dropdown3" data-toggle="tab" ><span class="  glyphicon glyphicon-wrench"></span>&nbsp;survey Flow</a></li>
  <li class="divider"></li>
  <li><a href="#dropdown4" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Share Link Generator</a></li>
  <li id="btnDesign1" data-toggle="collapse" data-target="#properties,#propTab"  ><a href="#design"    data-toggle="tab"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Design</a></li>
  <li ><a href="#" onClick="saveDraftLocal()" data-toggle=""><span class=" glyphicon glyphicon-eye-open"></span>&nbsp;Preview</a></li>
  <li ><a href="#" onClick="saveDesignDb()" data-toggle=""><span class="  glyphicon glyphicon-floppy-disk"></span>&nbsp;Save & Publish </a></li>
  <li ><a href="#" onClick="resetDesign()" data-toggle=""><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reset Design</a></li>
  
</ul>
<div id="myTabContent" class="tab-content">
  
    <div class="tab-pane fade active in" id="dropdown1">
    <div class="container-fluid">
      <center><strong>General Settings</strong></center>
      <form id="gnrSet" class="form-horizontal">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="inputName" class="col-md-3  control-label">Company Name</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="inputName" placeholder="company Name">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Select Type of WebSite</label>
      <div class="col-md-8">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Web Application" checked="">
            Web Application
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="E-commerce">
            E-commerce
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="Content">
            Content
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputUrl" class="col-md-3 control-label">Site URL://</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="inputUrl" placeholder="www.tatvic.com">
      </div>
    </div>
    
    <div class="form-group">
      <label for="imgUrl" class="col-md-3 control-label">Logo Link://</label>
      <div class="col-md-8">
        <input type="text" class="form-control" name="imgUrl" placeholder="www.tatvic.com/logo.jpg">
      </div>
    </div>
         
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button"  class="btn btn-primary" onClick='sendForm(1)'>Next</button>
        <input type="hidden" name="formNo" value="1">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>

  <div class="tab-pane fade" id="dropdown2">
      <div class="container-fluid">
      <center><strong>Survey Configuration</strong></center>
      <form id="srvConfig" class="form-horizontal">
  <fieldset>
    <legend></legend>
    
    <div class="form-group">
      <label class="col-md-4  control-label" >Status of Survey</label>
      <div class="col-md-3 ">
        <div class="checkbox">
          <label>
               <input type="checkbox" name="npsOn" data-size="large">
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4  control-label" align="left">Show Close Button</label>
      <div class="col-md-3 ">
        <div class="checkbox">
          <label>
               <input type="checkbox" name="closeBtnBox" data-size="normal" checked>
          </label>
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputWeb" class="col-md-4  control-label">Name to be presented in Survey</label>
      <div class="col-md-3 ">
        <input type="text" class="form-control" name="byName">
      </div>
    </div>

    <div class="form-group">
      <label for="visitCookie" class="col-md-4  control-label">Trigger On</label>
      <div class="col-md-3">
        <select class="form-control" name="visitCookie">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <label for="visitCookie" class="col-md-1  control-label">Visit</label>
    </div>

     <div class="form-group">
      <label for="inputWeb" class="col-md-4  control-label">Number of views in session to trigger</label>
      <div class="col-md-3 ">
        <input type="text" class="form-control" name="cookieCount">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4  control-label" >Show Open feed to visitor</label>
      <div class="col-md-3 ">
        <div class="checkbox">
          <label>
               <input type="checkbox" name="openFeedBox" data-size="normal" checked>
          </label>
        </div>
      </div>
    </div>
    
         
    <div class="form-group">
      <div class="col-md-8 col-md-offset-3">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button" class="btn btn-primary" onClick='sendForm(2)'>Next</button>
        <input type="hidden" name="formNo" value="2">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  <div class="tab-pane fade" id="dropdown3" >
     <div class="container-fluid">
      <center><strong>Flow Settings</strong></center>
    <form id='workFlow' class="form-horizontal">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Detractors Score: [1-6]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios1" value="feedback" >
            get open feedBack
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios2" value="url">
            Redirect to Url
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios3" value="page" checked="">
            Goto Modal Page #
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="input_detractor" placeholder="value(optional)">
      </div>
    </div>
      </br>
    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Passive Promoter Score: [7-8]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios1" value="feedback" checked="">
            get open feedBack
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios2" value="url">
            Redirect to Url
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios3" value="page" checked="">
            Goto Modal Page #
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="tvc_passive" placeholder="value(optional)">
      </div>
    </div>
  </br>
    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Promoter Score: [9-10]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios1" value="feedback" >
            get open feedBack
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios2" value="url" checked="">
            Redirect to Url
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios3" value="page" >
            Goto Modal Page #
          </label>
        </div>
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="tvc_promoter" placeholder="value(optional)">
      </div>
    </div>
        
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button" class="btn btn-primary" onClick='sendForm(3)'>Next</button>
        <input type="hidden" name="formNo" value="3">
      </div>
    </div>
  </fieldset>
</form>

    </div>

  </div>
  
  <div class="tab-pane fade" id="dropdown4">
    <div class="container-fluid">
      <center><strong>Facebook and Twitter links Genrator</strong></center>
      <form id="customText" class="form-horizontal">
  <fieldset>
    <legend></legend>
         
    
    <div class="form-group">
      <label for="title" class="col-md-5  control-label">Post Title</label>
      <div class="col-md-3 ">
        <input  type="text" class="form-control" name="title">
      </div>
    </div>

    
     <div class="form-group" style="display:none">
      <label for="inputWeb" class="col-md-5  control-label">Image To be Shared</label>
      <div class="col-md-3 ">
        <input type="text" class="form-control" name="imgUrl" placeholder="product/service image">
      </div>
    </div>

    <div class="form-group">
      <label for="inputWeb" class="col-md-5  control-label">Url</label>
      <div class="col-md-3 ">
        <input type="text"  class="form-control" name="fbUrl" placeholder="product/website url">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-5 col-md-offset-5">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="button" class="btn btn-primary" onClick='sendForm(4)'>Submit</button>
        <input type="hidden" name="formNo" value="4">
        
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  
  <div class="tab-pane fade" id="design" >
    <div class="fontEdit" id="formatText" >
  <span class="glyphicon glyphicon-font">

  </span>

  <span class="glyphicon glyphicon-bold">
  </span>

  <span class="glyphicon glyphicon-italic">
  </span>

  <span class="glyphicon glyphicon-align-left">
  </span>

 <span class="glyphicon glyphicon-align-center">
  </span >

  <span class="glyphicon glyphicon-align-right">
  </span>
 
  <span class="glyphicon glyphicon-align-justify">
  </span>

</div>
      <center>
        <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li onClick="getPage(1)" class="active"><a href="#boxb">Questionair</a></li>
              <li onClick="getPage(2)" ><a href="#page2">Detractors Feedback</a></li>
              <li onClick="getPage(3)" ><a href="#page3">Passive Promoter Feedback</a></li>
              <li onClick="getPage(4)" ><a href="#page4">Thank You &Share</a></li>
              <li onClick="getPage(5)" ><a href="#page4">Blank</a></li>
              <li class="disabled"><a href="#">&raquo;</a></li>
            </ul>

      </center>
     <div id="openModal" class="modalDialog" >
            <div contentEditable='true' id="boxb" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                <h2 class="popTitle">company/website name</h2>
                <h3 class="popTitle">We'd love your help.</h3>                        
                <p style="text-align:center" id="qstn" >How likely is it that you would recommend</p><p style="text-align:center" id="qstn"> our service to a friend?</p>
                  
               



              
                 
            </div>

             <div contentEditable='true' id="page2" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                <h2 class="popTitle">Logo</h2>
                <h3 class="popTitle">We regret for your inconvenience,please give us your suggestion how to make our services better.</h3>
                  <textarea class="form-control" cols="15" rows="6" style="posiiton:absolute;width:100%px;height:100%px">
              
                  </textarea>           
                  <center><button class="btn btn-info">Submit</button></center>
            </div>

              <div contentEditable='true' id="page3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#close" title="Close" class="close">X</a>
                <CENTER><img class="nps_logo_img" src=""></CENTER>
                <h2 class="popTitle">Logo</h2>
                <h3 class="popTitle">We regret for your inconvenience, please give us your suggestion how to make our services better.</h3>
               <textarea class="form-control" cols="15" rows="6"  style="posiiton:absolute;width:100%px;height:50%px">

               </textarea>
                
                             
                  <center><button class="btn btn-info">Submit</button></center>
            </div>

            <div contentEditable='true' id="page4" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                

              </br>

                <h1 class="popTitle">Thank you for your feedback!</h1>
                <CENTER><p>Your feedback will help us improve our services
                  to get your job done even better</p></CENTER><br/>



                <div id="tvc_social">
                  <a id="tvc_twitter" style="margin-left:5%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/twtr.png"></a>
                  <a id="tvc_fb" style="margin-left:40%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/fb.png"></a></div>
             
                             
                  
            </div>
              
     </div>
  </div>

  
  </div>

<div id="properties" class="col-md-3 collapse" style="float:right;top:0px;display:none">
      <div class="panel panel-primary resize-container resize-drag" style="overflow-x: hidden;overflow-y: scroll;height:60%;background-color:#151515" >
                <div class="panel-heading" style="background-color:#151515">
                  <h3 class="panel-title">Properties Window</h3>
                </div>

                <div class="panel-body table-responsive" style="background:#3d3d3d">
                 <table class="table" style="position:relative;color:#fff;background-color:#3d3d3d">
                   <thead>
                     <tr>                                            
                        <th colspan="2"  ><div data-toggle="collapse" data-target="#modalprop" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Modal Properties</div></th>
                      </tr>
                      
                    </thead>
                   
                    <tbody id="modalprop" class="collapse in">
                      <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                     
                      <tr>
                        <td>background-color</td>
                        <td><input id="bckclr" class="jscolor form-control input-sm" onchange="updatebk(this.jscolor)" value="ffffff"></input></td>
                      </tr>
                      <tr>
                        <td>Fore-color</td>
                        <td><input id="frclr" class="jscolor form-control input-sm" onchange="updatefc(this.jscolor)" value="000000"></input></td>
                      </tr>
                      <tr>
                        <td>Width</td>
                        <td><input  id="width"  onchange="updateWidth(document.getElementById('width').value)" class="form-control input-sm" value="750"></input></td>
                      </tr>
                       <tr>
                        <td>Height</td>
                        <td><input id="height"  onchange="updateHeight(document.getElementById('height').value)" class="form-control input-sm" value="325"></input></td>
                      </tr>
                    </tbody>
                    <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#ratingProp" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Rating Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="ratingProp" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      <tr>
                        <td>Template</td>
                        <td>
                          <select id="ratingType" class="form-control input-sm" style="color:#000000"  onChange="setRatings(value)">
                            <option value='0'>none</option>
                            <option value='1'>Star Rating</option>
                            <option value='2'>Hearts</option>
                            <option value='3'>Smiley Faces</option>
                            <option value='4'>Custom Svg</option>
                          </select>
                        </td>
                      </tr>
                      
                      <tr>
                        <td>size</td>  
                        <td>
                           <select  class="form-control input-sm" style="color:#000000" onChange="setRatingSize(value)">
                            <option value="none">none</option>
                            <option value="xl">Extra large</option>
                            <option value="lg">Large</option>
                            <option value="md">medium</option>
                            <option value="sm">Small</option>
                            <option value="xs">Very Small</option>

                          </select>
                        </td>
                      </tr>
                                          
                    </tbody>
                     <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#imgprop" style="color:#3884FC"><span class="caret "></span>&nbsp;&nbsp;&nbsp; Logo Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="imgprop" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      <tr>
                        <td>Source Url</td>
                        <td><input id="imgUrl"  class="form-control input-sm" onchange="setImg()" placeholder="(Use Http based url)" ></input></td>
                      
                      </tr>
                      <tr>
                        <td>Alternate text</td>
                        <td><input id="imgAlt"  class="form-control input-sm" onchange="setImg()" value="DemoLogo" placeholder="(company/website name)" ></input></td>
                      
                      </tr>
                      <tr>
                        <td>Height</td>
                        <td><input id="imgHeight"  class="form-control input-sm" onchange="setImg()" value='auto'  ></input></td>
                      
                      </tr>

                      </tr>
                      <tr>
                        <td>Width</td>
                        <td><input id="imgWidth"  class="form-control input-sm" onchange="setImg()" value='auto'></input></td>
                      </tr>
                    </tbody>
                              
                    <thead>
                     <tr>                                            
                        <th colspan="2"><div data-toggle="collapse" data-target="#closeprop" style="color:#3884FC"><span class="caret"></span> &nbsp;&nbsp; Close Button Properties</div></th>
                      </tr>
                      
                    </thead>
                    <tbody id="closeprop" class="collapse">
                       <tr>                                            
                        <th>Property</th>
                        <th>Values</th>
                      </tr>
                      
                      <tr>
                        <td>Opacity</td>
                        <td>
                          <input  id="closeOpacity"  onchange="" class="form-control input-sm" value="1"></input>
                        </td>
                      
                      </tr>
                      <tr>
                        <td>Background</td>
                        
                         <td><input id="clsBckClr" class="jscolor form-control input-sm" onchange="" value="000000"></input></td>
                       
                      
                      </tr>
                      <tr>
                        <td>Fore Color</td>
                     
                         <td><input id="clsFrClr" class="jscolor form-control input-sm" onchange="" value="ffffff"></input></td>
                        
                      </tr>

                      <tr>
                      
                        <td>Hover</td>
                        <td><input id="clsHvrClr" class="jscolor form-control input-sm" onchange="" value="ffffff"></input></td>
                      </tr>
                      
                    <tr>
                        <td>Radius</td>
                        
                         <td><input id="clsRadius"  class="form-control input-sm" onchange="" value='12'></input></td>
                        
                      </tr>
                     <tr>
                        <td>Shadow</td>
                        
                         <td>
                          <input id="clsShadow1"  class="form-control input-sm" onchange="" value='1'></input>
                          <input id="clsShadow2"  class="form-control input-sm" onchange="" value='1'></input>
                          <input id="clsShadow3"  class="form-control input-sm" onchange="" value='3'></input>
                          <input id="clsBckClr" class="jscolor form-control input-sm" onchange="" value="000000"> </input>                       
                         </td>
                       
                      </tr>
                     
                     
                    </tbody>
                    
                                
                 </table>

                </div>
              </div>

          </div>
<div id="propTab" class="collapse" style="top:0px;float:right;margin-left=70%;width:44px;height:10%;"><center><span class="glyphicon glyphicon-cog"></span></center></div>

</div>


	  
  

	  
	</div>
</div>

<!--panels-->
<div id="editor" class="collapse">
<div class="col-lg-4">
             <div class="panel panel-warning resize-container resize-drag ui-widget-content">
                <div class="panel-heading" style="background-color:#151515"> 

                  <center><h1 class="panel-title"><strong>HTML<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>

                </div>
                <div class="panel-body" >
                 
                  <pre contentEditable='true' id="htmlcode" style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint"  style="border:4px solid #88c">
                    
               </pre>
              </div>
            </div>
</div>
<div class="col-lg-4">
             <div class="panel panel-danger resize-container resize-drag ui-widget-content">
                <div class="panel-heading" style="background-color:#151515">
                  <center><h1 class="panel-title"><strong>JavaScript<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>
                </div>
                <div class="panel-body">

                 <pre contentEditable='true' style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint" id="quine" style="border:4px solid #88c"> Put your JavaScript code here!</pre>
                </div>
              </div>
</div>
<div class="col-lg-4">
  
     <div class="panel panel-success resize-container resize-drag ui-widget-content">
          <div class="panel-heading" style="background-color:#151515">
                 <center> <h1 class="panel-title"><strong>CSS<span class="glyphicon glyphicon-triangle-top" aria-hidden="true" style="float:right"></span></strong></h1></center>
          </div>
              <div class="panel-body">
                
                 <pre  contentEditable='true' style="width: 100%; height: 70%; overflow-y: scroll;" class="prettyprint" id="quine" style="border:4px solid #88c">.modalDialog {
                color: #000;

                 opacity:1;
                pointer-events: auto;
                font-family: Arial, Helvetica, sans-serif;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background: rgba(0,0,0,0);
                z-index: 99999;
                opacity:1;
                -webkit-transition: opacity 400ms ease-in;
                -moz-transition: opacity 400ms ease-in;
                transition: opacity 400ms ease-in;
                pointer-events: none;
            }
            .modalDialog:target {
               
            }

            .modalDialog > div {
               width: 700px;
               height: 100%;
               /*position: relative;
               margin: 10% auto;*/
               padding: 5px 20px 13px 20px;
               border-radius: 10px;
               background: #e7e5d9;
               border: 1px;
               border-style:solid;
               box-shadow:10px 10px 15px #888888; 
               /*background: -moz-linear-gradient(#fff, #999);
               background: -webkit-linear-gradient(#fff, #999);
               background: -o-linear-gradient(#fff, #999);
               */
            }
            .close {
              opacity: 1;
                background: #606061;
                color: #FFFFFF;
                line-height: 25px;
                position:inherit;
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
            .close:hover { background-color: #000; }
            .popTitle {
                 text-align: center;
                 
            }</pre>
              </div>
          </div>
                 
  </div>
</div>
</div>
<div id="toolTip" style="position:absolute;top:0;width:auto;height:20px;opacity:0.7;background:#fff;color:#000;display:none"></div>

@stop
