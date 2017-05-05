<div class="widget">
    <div id="navigation">
            <ul class="nav">
                <li <?php if($_GET['menu']==''){ ?> class="active"<?php } ?>>
                    <a href="index.php">
                        <i class="icons icon_home"></i>
                        <span>Home</span>
                        <i class="arrow-nav"></i>
                    </a>	    				
                </li>
                <li <?php if($_GET['menu']=='inbox'){ ?> class="active"<?php } ?>
					<?php if($_GET['menu']=='inbox-detail'){ ?> class="active"<?php } ?>>			
                    <a href="index.php?menu=inbox">
                        <i class="icons icon_message"></i>
                        <span>Inbox</span>
                        <i class="arrow-nav"></i>
                    </a>	    					
                </li>
                <li <?php if($_GET['menu']=='plan'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=plan">
                        <i class="icons icon_calendar"></i>
                        <span>Plan</span>
                        <i class="arrow-nav"></i>
                    </a>	    		  				
                </li>
                <li <?php if($_GET['menu']=='moderation'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=moderation">
                        <i class="icons icon_megaphone"></i>
                        <span>Moderation</span>
                        <i class="arrow-nav"></i>
                    </a>	    	   				
                </li>
                <li <?php if($_GET['menu']=='ba-performance'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=ba-performance">
                        <i class="icons icon_chart"></i>
                        <span>BA Performance</span>
                        <i class="arrow-nav"></i>
                    </a>	    	   				
                </li>
                <li <?php if($_GET['menu']=='gallery'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=gallery">
                        <i class="icons icon_polaroid"></i>
                        <span>Gallery</span>
                        <i class="arrow-nav"></i>
                    </a>	    	   				
                </li>
                <li <?php if($_GET['menu']=='challenge'){ ?> class="active"<?php } ?>
					<?php if($_GET['menu']=='challenge-detail'){ ?> class="active"<?php } ?>
					<?php if($_GET['menu']=='challenge-detail2'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=challenge">
                        <i class="icons icon_challenges"></i>
                        <span>Challenge</span>
                        <i class="arrow-nav"></i>
                    </a>	    	   				
                </li>
                <li class="dark-button">		
                    <a href="index.php?menu=create-challenge" class="button">
                        <span> Create Challenge</span>
                    </a>	    	   				
                </li>
                <li <?php if($_GET['menu']=='brand-page'){ ?> class="active"<?php } ?>
                    <?php if($_GET['menu']=='brand-create'){ ?> class="active"<?php } ?>>		
                    <a href="index.php?menu=brand-page">
                        <i class="icons icon_challenges"></i>
                        <span>Brand Page</span>
                        <i class="arrow-nav"></i>
                    </a>	    	   				
                </li>
                <li class="dark-button">		
                    <a href="index.php?menu=brand-create" class="button">
                        <span> Create Brand Post</span>
                    </a>	    	   				
                </li>
            </ul>
    </div> <!-- /#nav -->
</div><!-- /.widget -->