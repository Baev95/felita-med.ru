<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/*echo $arResult['DATE'];*/
/*$APPLICATION->AddHeadString('<link rel="stylesheet" type="text/css" href="/bitrix/templates/furniture_blue/css/style.css">', true);*/

$_SESSION["special_version"] = "Y";
if ($_SESSION["special_version"] == "Y") {
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.css", true);
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.css", true);
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi.min.css", true);
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/bvi-font.min.css", true);
  $APPLICATION->SetAdditionalCSS("/bitrix/components/vision/vision.special/templates/.default/style/css/style.css", true);
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js");
  $APPLICATION->AddHeadScript("/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.min.js");
}

?>



<button class="header__eye bvi-open" title="<?= GetMessage("ALIN_VISION_MESSAGE"); ?>">
  <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.7305 5.28633C7.57656 5.70273 3.77305 7.92187 0.670312 11.7457C0.0457031 12.5125 0 12.6039 0 13.0152C0 13.4012 0.0761719 13.5332 0.782031 14.3914C4.16914 18.5098 8.4957 20.7695 13 20.7695C17.5602 20.7695 21.902 18.4742 25.3297 14.2543C25.9543 13.4875 26 13.3961 26 12.9848C26 12.5988 25.9238 12.4668 25.218 11.6086C21.8004 7.44961 17.4383 5.19492 12.9035 5.23555C12.4973 5.24062 11.9691 5.26094 11.7305 5.28633ZM14.1477 7.68828C15.9402 8.07422 17.4434 9.38945 18.1035 11.1414C18.3422 11.7762 18.4031 12.1469 18.398 13.0254C18.398 13.7414 18.3828 13.8988 18.266 14.3305C17.7531 16.2551 16.2551 17.7531 14.3305 18.266C13.8988 18.3828 13.7414 18.398 13.0254 18.398C12.1469 18.4031 11.7762 18.3422 11.1414 18.1035C9.38945 17.4434 8.09961 15.9656 7.6832 14.1477C7.55117 13.5738 7.56641 12.3348 7.70859 11.766C8.25195 9.60273 9.89727 8.05898 12.1062 7.6375C12.5582 7.55117 13.65 7.57656 14.1477 7.68828Z" fill="#38755A" />
    <path d="M12.1113 10.1766C11.5883 10.3492 11.2887 10.5371 10.8926 10.9434C10.3187 11.5223 10.0547 12.1723 10.0547 13C10.0547 13.8531 10.3187 14.493 10.9129 15.0871C11.507 15.6813 12.1469 15.9453 13 15.9453C13.8277 15.9453 14.4777 15.6813 15.0566 15.1074C15.6762 14.498 15.9453 13.8633 15.9453 13.0051C15.9453 12.7309 15.9098 12.3855 15.8691 12.223C15.6102 11.2277 14.7723 10.3898 13.777 10.1309C13.3199 10.0141 12.543 10.0344 12.1113 10.1766Z" fill="#38755A" />
  </svg>
</button>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/responsivevoice.min.js"></script>
<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/js.cookie.js"></script>
<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi-init.js"></script>
<script src="/bitrix/components/vision/vision.special/templates/.default/style/js/bvi.min.js"></script>

<? if (isset($_POST['old_version'])) {
  $APPLICATION->SetAdditionalCSS($old_css, true);
  $_SESSION["special_version"] = "N";
}
?>


<!--<div class="container-fluid">

        <div class="navbar navbar-default" role="navigation">

            <div class="row ">

                <div class="col-md-2 col-centered">

                    <p><?= GetMessage("ALIN_VISION_RAZMER_SRIFTA1") ?></p>

                    <br/>

                    <div class="btn-group">

                        <button type="button" id="a2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>
   
                     </button>
             
           <button type="button" id="a1" class="btn btn-default btn-sm">
           <span class="glyphicon glyphicon-plus"></span>
               
         </button>
                 
   </div>
               
 </div>
             
   <div class="col-md-2 col-centered">
   
                 <p><?= GetMessage("ALIN_VISION_SRIFT") ?></p>
             
       <br/>
                  
    <div class="btn-group">
         
               <button type="button" class="btn btn-default btn-sm nop"  id="font1">
                        <span style="font-family:'Times New Roman';font-size:14px;"><?= GetMessage("ALIN_VISION_S_ZASECKAMI") ?></span>
  
                        </button>
                        
                        <button type="button" class="btn btn-default btn-sm nop" id="font2">
                        <span style="font-family:'Arial';font-size:14px;"><?= GetMessage("ALIN_VISION_BEZ_ZASECEK") ?></span>

                        </button>
                  
   </div>
                    
                    
                    
                    
             
   </div>
             
   <div class="col-md-3 col-centered">
     
               <p>
                  
      <span><?= GetMessage("ALIN_VISION_CVETA_SAYTA") ?></span>
   
                 </p>
              
                 <br/>
              
      <div class="btn-group">

                        <button type="button" class="btn btn-default btn-sm" id="c1">
                        <span class="glyphicon glyphicon-font"></span>
            
            </button>
  
                      <button type="button" class="btn btn-default btn-sm" id="c2">
                      <span class="glyphicon glyphicon-font"></span>
              
          </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c3">
     <span class="glyphicon glyphicon-font"></span>
                
        </button>
                   
     <button type="button" class="btn btn-default btn-sm" id="c4">
<span class="glyphicon glyphicon-font"></span>
               
         </button>
                      
  <button type="button" class="btn btn-default btn-sm" id="c5">
<span class="glyphicon glyphicon-font"></span>
                 
       </button>
                
    </div>
           
     </div>
           
     <div class="col-md-2 col-centered">

                    <p><?= GetMessage("ALIN_VISION_IZOBRAJENIA") ?></p>
  
                  <br/>
    
                <div class="btn-group" data-toggle="buttons">

                        <label class="btn btn-default  btn-sm redis">
  
                          <input type="radio" id="q156" name="imgvis" value="1" />
                          <span class="glyphicon glyphicon-eye-open"></span>

    
                         </label>

                        <label class="btn btn-default  btn-sm redis">

                        <input type="radio" id="q157" name="imgvis" value="2" />
                        <span class="glyphicon glyphicon-eye-close"></span>

                        </label>
                    
                        </div>
 
                        </div>
          
                        <div class="col-md-1 col-centered">
 
                   <p><span class="glyphicon glyphicon-resize-horizontal"><?= GetMessage("ALIN_VISION_INT") ?></span>
 
                   </p>
 
                   <br/>

                   <div class="btn-group">

                        <button type="button" id="i2" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-minus"></span>

                        </button>

                        <button type="button" id="i1" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
 
                       </button>


                    </div>

                </div>

                <div class="col-md-1 col-centered">

                <p><span class="glyphicon glyphicon-resize-vertical"><?= GetMessage("ALIN_VISION_INT") ?></span>

                </p>
                    <br/>
                    
                <div class="btn-group">
 
                <div class="btn-group" data-toggle="buttons">

                            <label class="btn btn-default  btn-sm ol1">

                                <input type="radio" id="yr1" name="inter" value="1" /><span class="glyphicon glyphicon-resize-small"></span>


                            </label>
 
                    <label class="btn btn-default btn-sm ol1">

                    <input type="radio" id="yr2" name="inter" value="2" />
      <span class="glyphicon glyphicon-resize-full"></span>
 
      </label>
                        
</div>
                    
</div>
                
</div>
                
<div class="col-md-1 col-centered">
                    
<p></p>
                    
<br/>
                    
<div class="btn-group">
                        
<button class="btn btn-default btn-sm" id="reset"> 
<i class="glyphicon glyphicon-refresh"></i> 
<?= GetMessage("ALIN_VISION_SBROS") ?></button>
                    
</div>
                
</div>
            
</div>
        
</div>
    
</div>-->