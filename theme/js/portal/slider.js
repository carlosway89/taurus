var tpj=jQuery;
var revapi7;
jQuery(function($) {

     if($('#rev_slider_7_1').revolution == undefined)

          revslider_showDoubleJqueryError('#rev_slider_7_1');

     else

          revapi7 = $('#rev_slider_7_1').show().revolution(
          {
               dottedOverlay:"none",
               delay:9000,
               startwidth:870,
               startheight:400,
               hideThumbs:200,
               thumbWidth:100,
               thumbHeight:50,
               thumbAmount:3,
               navigationType:"none",
               navigationArrows:"solo",
               navigationStyle:"round",
               touchenabled:"on",
               onHoverStop:"on",
               navigationHAlign:"center",
               navigationVAlign:"bottom",
               navigationHOffset:0,
               navigationVOffset:20,
               soloArrowLeftHalign:"left",
               soloArrowLeftValign:"center",
               soloArrowLeftHOffset:20,
               soloArrowLeftVOffset:0,
               soloArrowRightHalign:"right",
               soloArrowRightValign:"center",
               soloArrowRightHOffset:20,
               soloArrowRightVOffset:0,
               shadow:0,
               fullWidth:"on",
               fullScreen:"off",
               stopLoop:"off",
               stopAfterLoops:-1,
               stopAtSlide:-1,
               shuffle:"off",
               autoHeight:"off",
               forceFullWidth:"off",
               hideThumbsOnMobile:"off",
               hideBulletsOnMobile:"off",
               hideArrowsOnMobile:"off",
               hideThumbsUnderResolution:0,
               hideSliderAtLimit:0,
               hideCaptionAtLimit:0,
               hideAllCaptionAtLilmit:0,
               startWithSlide:0,
               videoJsPath:"/pos_sagitta/demo2/modules/revsliderprestashop/rs-plugin/videojs/",
               fullScreenOffsetContainer: ""	

          });

});	//ready