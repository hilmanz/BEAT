<!DOCTYPE html>
<html lang="en">
<head>
<?php include("meta.php"); ?>
</head>
	<body>
    <div id="body-container">
        <div id="body">
            <?php include("header.php"); ?>	
            <div id="content">
                <div class="container">
                    <div class="row">	
                        <div id="sidebar"  class="span3">
            				<?php include("widget/navigation.php"); ?>	
                        </div><!-- /#sidebar -->
                        <div id="theContent"  class="span9">
                                <?php 
                                if($_GET['menu']=='inbox'){
                                    include("inbox.php");
                                }else if($_GET['menu']=='inbox-detail'){ 
                                    include("inbox-detail.php");
                                }else if($_GET['menu']=='create-message'){ 
                                    include("create-message.php");
                                }else if($_GET['menu']=='plan'){ 
                                    include("plan.php");
                                }else if($_GET['menu']=='add-new-plan'){ 
                                    include("add-new-plan.php");
                                }else if($_GET['menu']=='plan-edit'){ 
                                    include("plan-edit.php");
                                }else if($_GET['menu']=='plan-detail'){ 
                                    include("plan-detail.php");
                                }else if($_GET['menu']=='plan-reject'){ 
                                    include("plan-reject.php");
                                }else if($_GET['menu']=='ba-invite'){ 
                                    include("ba-invite.php");
                                }else if($_GET['menu']=='brand-plan-edit'){ 
                                    include("brand-plan-edit.php");
                                }else if($_GET['menu']=='brand-page'){ 
                                    include("brand-page.php");
                                }else if($_GET['menu']=='brand-create'){ 
                                    include("brand-create.php");
                                }else if($_GET['menu']=='brand-edit-cover'){ 
                                    include("brand-edit-cover.php");
                                }else if($_GET['menu']=='moderation'){ 
                                    include("moderation.php");
                                }else if($_GET['menu']=='post-moderation'){ 
                                    include("post-moderation.php");
                                }else if($_GET['menu']=='ba-performance'){ 
                                    include("ba-performance.php");
                                }else if($_GET['menu']=='entourage-list'){ 
                                    include("entourage-list.php");
                                }else if($_GET['menu']=='entourage-detail'){ 
                                    include("entourage-detail.php");
                                }else if($_GET['menu']=='gallery'){ 
                                    include("gallery.php");
                                }else if($_GET['menu']=='gallery-ba'){ 
                                    include("gallery-ba.php");
                                }else if($_GET['menu']=='gallery-ba-album'){ 
                                    include("gallery-ba-album.php");
                                }else if($_GET['menu']=='gallery-ba-detail'){ 
                                    include("gallery-ba-detail.php");
                                }else if($_GET['menu']=='add-photo'){ 
                                    include("add-photo.php");
                                }else if($_GET['menu']=='challenge'){ 
                                    include("challenge.php");
                                }else if($_GET['menu']=='challenge-detail'){ 
                                    include("challenge-detail.php");
                                }else if($_GET['menu']=='challenge-detail2'){ 
                                    include("challenge-detail2.php");
                                }else if($_GET['menu']=='create-challenge'){ 
                                    include("create-challenge.php");
                                }else{ 
                                    include("home.php");
                                }?>
                            
                        </div> <!-- /#theContent -->
                    </div> <!-- /.container -->
                </div> <!-- /.row -->
            </div> <!-- /#theContent -->
            <?php include("footer.php"); ?>	
        </div> <!-- /#body -->
    </div> <!-- /#body-container -->
  </body>
</html>
