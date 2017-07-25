<section id="slider" class="slider fullwidthbanner-container roundedcorners">
    <div class="fullwidthbanner" data-height="500" data-navigationStyle="preview1">
        <ul class="hide">
            <?php foreach ($sliders as $slider ) { ?>
                <?php if($slider->isActive == 1) { ?>
                <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                <img src="<?php echo base_url("uploads/slider") . "/" . $slider->image; ?>"
                     data-lazyload="<?php echo base_url("uploads/slider") . "/" . $slider->image; ?>"
                     alt="<?php echo base_url("uploads/slider") . "/" . $slider->image; ?>"
                     data-bgfit="cover"
                     data-bgposition="center top"
                     data-bgrepeat="no-repeat" />

                <div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>
                <div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

                <div class="tp-caption customin ltl tp-resizeme text_white"
                     data-x="center"
                     data-y="105"
                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="800"
                     data-start="1000"
                     data-easing="easeOutQuad"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1"
                     data-endspeed="1000"
                     data-endeasing="Power4.easeIn" style="z-index: 10;">
                    <span class="weight-300"><?php echo $slider->title;?></span>
                </div>

                <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                     data-x="center"
                     data-y="155"
                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="800"
                     data-start="1200"
                     data-easing="easeOutQuad"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1"
                     data-endspeed="1000"
                     data-endeasing="Power4.easeIn" style="z-index: 10;">
                    <?php echo $slider->detail;?>
                </div>

                <div class="tp-caption customin ltl tp-resizeme small_light_white"
                     data-x="center"
                     data-y="245"
                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="800"
                     data-start="1400"
                     data-easing="easeOutQuad"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1"
                     data-endspeed="1000"
                     data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
                    <span class="weight-300"><?php echo $slider->bride_detail;?></span>
                </div>

                <?php if($slider->button == 1) { ?>
                <div class="tp-caption customin ltl tp-resizeme"
                     data-x="center"
                     data-y="313"
                     data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                     data-speed="800"
                     data-start="1550"
                     data-easing="easeOutQuad"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.01"
                     data-endelementdelay="0.1"
                     data-endspeed="1000"
                     data-endeasing="Power4.easeIn" style="z-index: 10;">
                    <a href="<?php echo $slider->url;?>" class="btn btn-default btn-lg">
                        <span><?php echo $slider->button_title;?></span>
                    </a>
                </div>
                <?php } ?>
            </li>
            <?php }} ?>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</section>
