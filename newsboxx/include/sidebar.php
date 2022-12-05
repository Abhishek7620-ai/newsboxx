<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img\ads\300x600\bec19752bf2670faadecb2e91dff09ff.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <!-- <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/6240x7402/obi-onyeador-oL3-V8xhqlI-unsplash.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div> -->

                           
                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <?php 
                                    require_once "include/db.php";
                                    $limit = 3;
                                    $sql = "SELECT post.post_id, post.heading, post.date,post.image FROM post                              
                                    ORDER BY post.views DESC LIMIT {$limit}";
                                    $result = mysqli_query($con, $sql) or die("Query Failed. : Recent Post");
                                    if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?> 
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.php?id=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="img/home/<?php echo $row['image']; ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo substr( $row['heading'],0,40).'..';?></h5>
                                                <small><?php echo $row['date']; ?></small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                                <?php } } ?>
                            </div><!-- end widget -->
                                    
                           

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>     
                                <div class="blog-list-widget">
                                <?php 
                                    require_once "include/db.php";
                                    $limit = 3;
                                    $sql = "SELECT post.post_id, post.heading, post.date,post.image FROM post                              
                                    ORDER BY post.post_id DESC LIMIT {$limit}";
                                    $result = mysqli_query($con, $sql) or die("Query Failed. : Recent Post");
                                    if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?>                                
                                    <div class="list-group">                                                                               
                                        <a href="single.php?id=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="img/home/<?php echo $row['image']; ?>" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1"><?php echo substr( $row['heading'],0,40).'..';?></h5>
                                                <small><?php echo $row['date']; ?></small>
                                            </div>
                                        </a>
                                    </div>
                                    <?php } } ?>
                                </div><!-- end blog-list -->                               
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                          
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                          
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                        
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img/ads/sidebar/6240x7402/obi-onyeador-oL3-V8xhqlI-unsplash.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="img\ads\6240x7402\obi-onyeador-oL3-V8xhqlI-unsplash.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <!-- start sw-rss-feed code --> 
<script type="text/javascript"> 

rssfeed_url = new Array(); 
rssfeed_url[0]="https://gadgets.ndtv.com/rss.xml"; rssfeed_url[1]="https://www.theverge.com/rss/index.xml"; rssfeed_url[2]="https://www.theverge.com/rss/tech/index.xml";  
rssfeed_frame_width="300"; 
rssfeed_frame_height="400"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style6.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "6862ae68bb3c655ba8e6bec421fadce4"; 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="color:#ccc;font-size:10px; text-align:right; width:300px;"> <a href="https://surfing-waves.com" target="_blank" rel="noopener" target="_blank" style="color:#ccc;"></a></div> 
<!-- end sw-rss-feed code -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
       
