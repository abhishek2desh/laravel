@extends('layouts.master')

@section('title', 'Layout Tester')

@section('sidebar')
    @parent

@stop

@section('content')

<div class="container-fluid">
   	<div class="row">
    
     <div id="tabwindow" class="col-md-12  resize-container resize-drag" style="height:100%;overflow-x: hidden;">
     
        <ul class="nav nav-tabs">

  
        <li class="active" ><a href="#dropdown1" onClick="setOption('false')" data-toggle="tab"><span class="glyphicon glyphicon-wrench" aria-expanded="true"></span>&nbsp;Genral Settings</a></li>
        <li class="divider"></li>
        <li><a href="#dropdown2" onClick="setOption('false')" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Survey Configuration</a></li>
        <li class="divider"></li>
        <li ><a href="#dropdown3" onClick="setOption('false')" data-toggle="tab" ><span class="  glyphicon glyphicon-wrench"></span>&nbsp;survey Flow</a></li>
        <li class="divider"></li>
        <li><a href="#dropdown4" onClick="setOption('false')" data-toggle="tab"><span class="  glyphicon glyphicon-wrench"></span>&nbsp;Link Generator</a></li>
        <li id="btnDesign1" data-toggle="collapse" data-target=""  ><a href="#design" onClick="setOption('true')"    data-toggle="tab"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Design</a></li>
        <li ><a href="#" onClick="saveDraftLocal()" data-toggle=""><span class=" glyphicon glyphicon-eye-open"></span>&nbsp;Preview</a></li>
        <li ><a href="#" onClick="saveDesignDb()" data-toggle=""><span class="  glyphicon glyphicon-floppy-disk"></span>&nbsp;Save & Publish </a></li>
        <li ><a href="#" onClick="resetDesign()" data-toggle=""><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reset Design</a></li>
        <li role="presentation" class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" >
                                <li  ><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
        </li>
  
</ul>
<div id="myTabContent" class="tab-content" style="height:100%">
  
    <div class="tab-pane fade active in" id="dropdown1">
    <div class="container-fluid">
      <div class="legends">General Settings</div>
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
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <button type="button"  class="btn btn-primary button" onClick='sendForm(1)'>Next</button>
        <input type="hidden" name="formNo" value="1">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>

  <div class="tab-pane fade" id="dropdown2">
      <div class="container-fluid">
      
       <div class="legends">Survey Configuration</div>
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
               <input type="checkbox" name="closeBtnBox" data-size="large" checked>
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
      <div class="col-md-8 col-md-offset-4">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <button type="button" class="btn btn-primary button" onClick='sendForm(2)'>Next</button>
        <input type="hidden" name="formNo" value="2">
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  <div class="tab-pane fade" id="dropdown3" >
     <div class="container-fluid">
      
       <div class="legends">Flow Settings</div>
    <form id='workFlow' class="form-horizontal">
  <fieldset>
    <legend></legend>

    <div class="form-group">
      <label for="inputName" class="col-md-4  control-label">Detractors Score: [1-6]</label>
      
      <div class="col-md-2">
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios1" value="feedback" checked="">
            Detractor FeedBack Form
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_detract" id="optionsRadios2" value="url">
            Redirect to Url
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
            Passive promoter FeedBack Form
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_pass" id="optionsRadios2" value="url">
            Redirect to Url
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
            <input type="radio" name="tvc_promo" id="optionsRadios1" value="feedback" checked="">
            Share To Social Media
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tvc_promo" id="optionsRadios2" value="url" >
            Redirect to Url
          </label>
        </div>
      
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="tvc_promoter" placeholder="value(optional)">
      </div>
    </div>
        
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <button type="button" class="btn btn-primary button" onClick='sendForm(3)'>Next</button>
        <input type="hidden" name="formNo" value="3">
      </div>
    </div>
  </fieldset>
</form>

    </div>

  </div>
  
  <div class="tab-pane fade" id="dropdown4">
    <div class="container-fluid">
     
        <div class="legends">Facebook and Twitter links Generator</div>
      <form id="customText" class="form-horizontal">
  <fieldset>
    <legend></legend>
         
    
    <div class="form-group">
      <label for="title" class="col-md-5  control-label">Post Title</label>
      <div class="col-md-3 ">
        <input id="sharetext"  type="text" class="form-control" name="title">
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
        <input id="shareurl" type="text"  class="form-control" name="fbUrl" placeholder="product/website url">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-md-8 col-md-offset-5">
        <button type="reset" class="btn btn-danger button">Cancel</button>
        <button type="button" class="btn btn-primary button" onClick='sendForm(4)'>Submit</button>
        <input type="hidden" name="formNo" value="4">
        
      </div>
    </div>
  </fieldset>
</form>

    </div>
  </div>
  
  <div class="tab-pane fade" id="design" >
    
     <div class="container" style="float:right;right:20%">
       <nav> <ul class="pagination" >
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li onClick="getPage(1)" class="active"><a href="#">Nps Main Page</a></li>
              <li onClick="getPage(2)" ><a href="#">Detractors Feedback</a></li>
              <li onClick="getPage(3)" ><a href="#">Passive Promoter Feedback</a></li>
              <li onClick="getPage(4)" ><a href="#">Thank You & Share</a></li>
              <li class="disabled"><a href="#">&raquo;</a></li>
            </ul>
        </nav>
     </div>
      <div id="openModal" class="modalDialog" >
            <div contentEditable='true' id="boxb" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img tip" tip="company logo" src="" alt="Here comes your logo"></CENTER>
                
                <h3 class="popTitle">We'd love your help.</h3>                        
                <p style="text-align:center" id="qstn" >How likely is it that you would recommend</p><p style="text-align:center" id="qstn"> our service to a friend?</p>
                 
            </div>

             <div contentEditable='true' id="page2" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)" style="height:350px"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                
                <h3 class="popTitle">We regret for your inconvenience,please give us your suggestion how to make our services better.</h3>
                  <textarea class="form-control" cols="15" rows="6" style="posiiton:absolute;width:100%px;height:100%px">
              
                  </textarea>           
                  <center><button type="button"  class="btn btn-info" style="margin-top:25px;width:150px">Submit</button></center>
            </div>

              <div contentEditable='true' id="page3" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)" style="height:350px"> 
                <a href="#close" title="Close" class="close">X</a>
                <CENTER><img class="nps_logo_img" src=""></CENTER>
               
                <h3 class="popTitle">We regret for your inconvenience, please give us your suggestion how to make our services better.</h3>
               <textarea class="form-control" cols="15" rows="6"  style="posiiton:absolute;width:100%px;height:50%px">

               </textarea>
                
                             
                  <center><button type="button"  class="btn btn-info" style=" margin-top:25px;width:150px">Submit</button></center>
            </div>

            <div contentEditable='true' id="page4" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"> 
                <a href="#close" title="Close" class="close">X</a>
               <CENTER> <img class="nps_logo_img" src=""></CENTER>
                

              </br>

                <h1 class="popTitle">Thank you for your feedback!</h1>
                <CENTER><p>Your feedback will help us improve our services
                  to get your job done even better</p></CENTER><br/>
                 <CENTER><b><p>Spread the word!</p></b></CENTER><br/>


                <div id="tvc_social">
                  <a id="tvc_twitter" style="margin-left:5%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/twtr.png"></a>
                  <a id="tvc_fb" style="margin-left:40%;" href="" target="_blank">
                  <img src="http://d2blwevgjs7yom.cloudfront.net/npssulekhaimageV3/fb.png"></a></div>
             
                             
                  
              </div>
              
           </div>
          
  </div>

  
  </div>

<div id="properties" class="col-md-3 collapse" style="float:left;left:75%;position:inherite;top:0px;display:none">
      <div class="panel panel-primary resize-container resize-drag" style="overflow-x: hidden;overflow-y: scroll;height:60%;background-color:#fff" >
                <div class="panel-heading" style="background-color:#151515">
                  <h3 class="panel-title">Properties Window</h3>
                </div>

                <div class="panel-body table-responsive" style="background:#fff">
                 <table class="table" style="position:relative;color:#011627;background-color:#fff">
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
                          <input  id="closeOpacity" type="number" min=0 max=1 step=0.1 onchange="updateclsopc (value)" class="form-control input-sm" value="1"></input>
                        </td>
                      
                      </tr>
                      <tr>
                        <td>Background</td>
                        
                         <td><input id="clsBckClr" class="jscolor form-control input-sm" onchange="updateclsbkclr(value)" value="000000"></input></td>
                       
                      
                      </tr>
                      <tr>
                        <td>Fore Color</td>
                     
                         <td><input id="clsFrClr" class="jscolor form-control input-sm" onchange="updateclsclr(value)" value="ffffff"></input></td>
                        
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
<div id="propTab" class="collapse" style="position:fixed;top:25%;float:left;margin-left=5%;width:50px;height:100px;z-index:9999;cursor:pointer;"><center><span class=" rotate glyphicon glyphicon-cog" ><div style="height:50%;"><h3>Developer Options</h3></div></span></center></div>

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
<div id="toolTip" style="position:absolute;top:0;width:auto;height:20px;opacity:0.7;background:#fff;color:#000;display:none;z-index:9999"></div>
<div class="fontEdit" id="formatText" style="position:absolute;top:0;width:auto;height:20px;opacity:0.8;background-color:#FFF;display:none;cursor:pointer;">
       <span class="glyphicon glyphicon-font tip" tip="Fonts">
       

       </span>

      <span class="glyphicon glyphicon-bold tip" tip="Bold">
      </span>

      <span class="glyphicon glyphicon-italic tip" tip="Italics">
      </span>

      <span class="glyphicon glyphicon-align-left tip" tip="Left Justify">
      </span>

     <span class="glyphicon glyphicon-align-center tip" tip="Center Align">
      </span >

      <span class="glyphicon glyphicon-align-right tip" tip="Right Justify">
      </span>
     
      <span class="glyphicon glyphicon-align-justify tip" tip="Justify">
      </span>

</div>

@stop
