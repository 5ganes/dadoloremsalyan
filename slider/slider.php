<div id="slider1_container" style="position: relative; width: 450px; height: 330px;margin-bottom: 10px;">

        <!-- Loading Screen -->
        <div u="loading" style="">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

            background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(slider/images/loading.gif) no-repeat center center;
            top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 480px; height: 330px;overflow: hidden;">
            <?php
            $slide=$groups->getByParentId(SLIDER);
            while($slideGet=$conn->fetchArray($slide)){?>
                <div>
                    <img u="image" src="<?php echo CMS_GROUPS_DIR.$slideGet['image'];?>" />
                </div>
            <?php }?>
        </div>
        
        <style>
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url(slider/images/b05.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        </style>
        
        <!-- bullet navigator container -->
        <!-- <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
            <div u="prototype"></div>
        </div> -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/tutorial/set-arrow-navigator.html -->
        <style>
            .jssora11l, .jssora11r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 37px;
                height: 37px;
                cursor: pointer;
                background: url(slider/images/a11.png) no-repeat;
                overflow: hidden;
            }
            .jssora11l { background-position: -11px -41px; }
            .jssora11r { background-position: -71px -41px; }
            .jssora11l:hover { background-position: -131px -41px; }
            .jssora11r:hover { background-position: -191px -41px; }
            .jssora11l.jssora11ldn { background-position: -251px -41px; }
            .jssora11r.jssora11rdn { background-position: -311px -41px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora11r" style="top: 123px; right: -10px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        
</div>
