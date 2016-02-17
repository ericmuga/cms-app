@extends("layouts.master")
@section("content")  
        <div class="page">
        	
{{--          <!--Breadcrumbs-->
          <div class="container space-top">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li><a href="blog-grid-sr.html">Blog</a></li>
              <li class="active">Slider Post</li>
            </ol> 
          </div><!--Breadcrumbs Close-->
    --}}      
          <!--Single Post-->
          <section class="container space-top double-space-bottom">
            <div class="row">
            
            	<!--Content-->
              <section class="col-md-8">
                <h2 class="post-title">Slider Post</h2>
                
                <!--Slider-->
                <div class="space-bottom">
                  <div class="master-slider ms-skin-default" id="postSlider">
                    <div class="ms-slide">
                      <img src="masterslider/blank.gif" data-src="img/blog/slider/01.jpg" alt="lorem ipsum dolor sit"/>
                      <!-- slide caption -->
                      <div class="ms-layer ms-caption" style="top:25px; left:25px;" data-effect="skewleft(15,250)" data-duration="700" data-ease="easeOutBack">
                          I am animated image caption
                      </div>
                    </div>
                    <div class="ms-slide">
                      <img src="masterslider/blank.gif" data-src="img/blog/slider/02.jpg" alt="lorem ipsum dolor sit"/>  
                      <!-- slide caption -->
                      <div class="ms-layer ms-caption" style="top:25px; left:25px;" data-effect="skewleft(15,250)" data-duration="700" data-ease="easeOutBack">
                          I am animated image caption
                      </div>
                    </div>
                    <div class="ms-slide">
                      <img src="masterslider/blank.gif" data-src="img/blog/slider/03.jpg" alt="lorem ipsum dolor sit"/>   
                      <!-- slide caption -->
                      <div class="ms-layer ms-caption" style="top:25px; left:25px;" data-effect="skewleft(15,250)" data-duration="700" data-ease="easeOutBack">
                          I am animated image caption
                      </div>
                    </div>
                    <div class="ms-slide">
                      <img src="masterslider/blank.gif" data-src="img/blog/slider/04.jpg" alt="lorem ipsum dolor sit"/>  
                      <!-- slide caption -->
                      <div class="ms-layer ms-caption" style="top:25px; left:25px;" data-effect="skewleft(15,250)" data-duration="700" data-ease="easeOutBack">
                          I am animated image caption
                      </div>
                    </div>
                  </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in tempus lorem. Vivamus ullamcorper leo risus, non vehicula odio. In consectetur viverra ante, eget vulputate magna aliquam in. Ut sem arcu, consequat quis lacinia id, ultrices in felis. Suspendisse potenti. Donec venenatis, eros scelerisque volutpat fringilla, mi diam varius ligula, in eleifend lectus est fermentum lorem. Duis volutpat sollicitudin ante ac hendrerit. Ut fermentum elit at augue vestibulum feugiat. Integer ac magna lacinia velit bibendum ornare.</p>
              	<blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <p>Morbi eget dui lectus, eget eleifend mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dui libero, tempor quis congue in, interdum eget tortor. Vivamus aliquam dictum lacus quis tincidunt. Phasellus rhoncus ante sollicitudin nisl consectetur ultricies. Sed rhoncus ullamcorper mauris, ac condimentum metus egestas ut. Nam et urna ante, vitae pretium lacus. Vivamus ullamcorper leo risus, non vehicula odio. In consectetur viverra ante, eget vulputate magna aliquam in. Ut sem arcu, consequat quis lacinia id, ultrices in felis. Suspendisse potenti. Donec venenatis, eros scelerisque volutpat fringilla, mi diam varius ligula, in eleifend lectus est fermentum lorem. Duis volutpat sollicitudin ante ac hendrerit.</p>
                
                <!--Post Toolbox-->
                <div class="post-toolbox">
                	<a class="btn btn-md btn-outlined btn-primary" href="#">Recommend<i class="fa fa-heart-o right"></i></a>
                  <div class="buttons">
                  	<a href="#"><i class="fa fa-plus"></i></a>
                  	<a href="#" data-toggle="modal" data-target="#shareModal"><i class="fa fa-share"></i></a>
                  </div>
                </div>
                
                <!--Post Meta-->
                <div class="post-meta">
                  <div class="taxonomy">
                    <a href="#">Dexter Dirk</a>
                    <span>in</span>
                    <a href="#">Tech Reviews</a>
                  </div>
                  <div class="date">FEBRUARY 17, 2014</div>
                </div>
                
                <!--Disqus Comments-->
                <div class="double-space-top">
                	<div class="page-heading center">
                		<h3>Leave a comment</h3>
                    <p>Please make sure you are loged in to Disqus in order to leave comment</p>
                	</div>
                  <div id="disqus_thread"></div>
                  <script type="text/javascript">
                      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                      var disqus_shortname = 'kedavra'; // required: replace example with your forum shortname
              
                      /* * * DON'T EDIT BELOW THIS LINE * * */
                      (function() {
                          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                      })();
                  </script>
                  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                </div>
                    
              </section><!--Content Close-->
              
              <!--Sidebar-->
              <div class="col-md-4 space-bottom" id="sidebar">
              	<aside class="sidebar right">
                
                	<!--Search Widget-->
                  <div class="widget search">
                    <h3>Search</h3>
                    <form method="get" role="search">
                      <label class="sr-only" for="blog-search"></label>
                      <input class="form-control input-lg" name="blog-search" id="blog-search" type="text" placeholder="Search">
                      <button type="submit"><i class="flaticon-search100"></i></button>
                    </form>
                  </div>
                  
                  <!--Recent/Featured posts widget-->
                  <div class="widget rposts">
                    <h3>FEATURED POSTS</h3>

                    <div class="rpost">
                      <div class="rpost-img">
                        <img src="img/blog/posts/post1.jpg" alt="">
                      </div>
                      <div class="rpost-text">
                        <h4><a href="#">Lorem ipsum dolor sit amet consecte.</a></h4>
                        <p>Posted by John Doe 7 Mar</p>
                      </div>
                    </div>

                    <div class="rpost">
                      <div class="rpost-img">
                        <img src="img/blog/posts/post2.jpg" alt="">
                      </div>
                      <div class="rpost-text">
                        <h4><a href="#">Lorem ipsum dolor sit amet consecte.</a></h4>
                        <p>Posted by John Doe 9 Mar</p>
                      </div>
                    </div>

                    <div class="rpost">
                      <div class="rpost-img">
                        <img src="img/blog/posts/post3.jpg" alt="">
                      </div>
                      <div class="rpost-text">
                        <h4><a href="#">Lorem ipsum dolor sit amet consecte.</a></h4>
                        <p>Posted by John Doe 11 Mar</p>
                      </div>
                    </div>

                    <div class="rpost">
                      <div class="rpost-img">
                        <img src="img/blog/posts/post4.jpg" alt="">
                      </div>
                      <div class="rpost-text">
                        <h4><a href="#">Lorem ipsum dolor sit amet consecte.</a></h4>
                        <p>Posted by John Doe 14 Mar</p>
                      </div>
                    </div>
                  </div>
                  
                  <!--Comments widget-->
                  <div class="widget featured-comments">
                    <h3>Comments</h3>

                    <div class="fposts">
                      <div><span>John Doe on <a href="#">Lorem ipsum dolor  amet</a></span></div>
                      <div><span>John Doe on <a href="#">Lorem ipsum dolor  amet</a></span></div>
                      <div><span>John Doe on <a href="#">Lorem ipsum dolor  amet</a></span></div>
                    </div>  
                  </div>

                  <!--Twitter widget-->
                  <div class="widget twitter">
                    <h3>FEATURED Tweets</h3>

                    <div class="tweet">
                      <i class="fa fa-twitter"></i>                      
                      <div class="tweet-text">
                        <p>Check out new work on my @Behance portfolio: "Appica 2"</p>
                        <p><a href="#">http://on.be.net/1J0ozFX</a></p>
                      </div>
                    </div>

                    <div class="tweet">
                      <i class="fa fa-twitter"></i>
                      <div class="tweet-text">
                        <p>Check out new work on my @Behance portfolio: "Appica 2"</p>
                        <p><a href="#">http://on.be.net/1J0ozFX</a></p>
                      </div>
                    </div>

                    <div class="tweet">
                       <i class="fa fa-twitter"></i>
                      <div class="tweet-text">
                        <p>Check out new work on my @Behance portfolio: "Appica 2"</p>
                        <p><a href="#">http://on.be.net/1J0ozFX</a></p>
                      </div>
                    </div>
                  </div>

                  <!-- Links Widget-->
                  <div class="widget links">
                    <h3>CATEGORIES</h3>
                    
                    <ul class="list-unstyled">
                      <li><a href="#">Home <span>13</span></a></li>
                      <li><a href="#">Shop <span>12</span></a></li>
                      <li><a href="#">Portfolio <span>4</span></a></li>
                    </ul>
                  </div>
                </aside>
              </div><!--Sidebar Close-->
            </div>
          </section><!--Single Post Content Close-->
          
          <!--Info Box Widget-->
          <section class="info-box gray">
            <div class="container space-top space-bottom">
              <div class="">
                <h4 class="light-color">Check out our new theme!</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                <a class="btn btn-outlined btn-primary" style="margin:30px !important;" href="#">Buy Kedavra</a>
                <a class="btn btn-primary" href="#">See More</a>
              </div>
            </div>
          </section><!--Info Box Widget Close-->
          
          <!--Sidebar Toggle-->
          <a href="#sidebar" class="sidebar-button"><i class="fa fa-outdent"></i></a>
        	
        </div>
        <!--Page Content Close-->
        
          <!--Footer-->
          <footer class="footer">
            
            <!-- Footer Subscribe -->
            <div class="footer-subscribe-widget light-version">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <p>Subscribe to our news. Don`t worry, we don`t spam you!</p>
                  </div>
                  <div class="col-md-5">
                    <form class="validate" method="post" action="http://8guild.us3.list-manage1.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=06b7eb4e02" id="update-subscribe-form" name="subscribe-form" target="_blank" novalidate>
                      <div class="row">
                        <div class="col-sm-8">
                          <input type="email" class="form-control" name="EMAIL" id="subscr-email" placeholder="Email" required>
                        </div>

                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_06b7eb4e02" tabindex="-1" value=""></div>

                        <div class="col-sm-4">
                          <button type="submit" class="btn btn-transparent btn-md btn-primary">Subscribe</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="container space-top">
              <div class="row">
                
                <!--Featured Posts-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <h3>Kedavra</h3>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                </div>
                
                <!--Featured Posts-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <h4>Popular posts</h4>
                  <div class="featured-post">
                    <h5><a href="#">Omnis iste natus error sit dolor set amet</a></h5>
                    <div class="meta group">
                      <div class="right"><span class="text-muted">5 min read</span></div>
                    </div>
                  </div>
                  <div class="featured-post">
                    <h5><a href="#">Lorem ipsum dolor sit amet consectetur</a></h5>
                    <div class="meta group">
                      <div class="right"><span class="text-muted">1 min read</span></div>
                    </div>
                  </div>
                </div>

                <!-- Flickr wiget -->
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="flickr-wiget">
                    <h4>Flickr Widget</h4>

                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=64742456@N00"></script>
                  </div>
                </div>
                
                <!--Contact Info-->
                <div class="col-md-3 col-sm-3 col-xs-6">
                  <div class="contacts">
                    <h4>Contact Info</h4>
                    <h5>Address:</h5>
                    <p>105448 Casa Blanca BLVD New York</p>
                    <h5>Phone numbers:</h5>
                    <p>+9 876 543 00 21<br/>+0 123 400 56 78</p>
                    <h5>E-mail:</h5>
                    <p><a href="mailto:info@your-domain.com">info@your-domain.com</a></p>
                  </div>
                </div>
              </div>
            </div>
            
            <!--Copyright-->
            <div class="copyright text-center">
              <div class="container">
                <p class="pull-left"><a href="http://8guild.com/" target="_blank">8 Guild</a> - Quality premium themes build by creatives</p>

                <div class="social-bar">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                  <a href="#"><i class="fa fa-github-alt"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
          </footer><!--Footer Close-->
          
        </div><!--Layout Close-->
        
        <!-- close the off-canvas menu -->
        <a class="exit-off-canvas"></a>
      </div>
    </div><!--Off-Canvas Close-->
        
    <!--Sticky Buttons-->
    <div class="sticky-btns">
      <form class="quick-contact" method="post" name="quick-contact">
        <h3>Contact us</h3>
        <div class="form-group">
          <label for="qc-name">Full name</label>
          <input class="form-control" type="text" name="qc-name" id="qc-name" placeholder="Enter full name" required>
        </div>
        <div class="form-group">
          <label for="qc-email">Email</label>
          <input class="form-control" type="email" name="qc-email" id="qc-email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
          <label for="qc-message">Your message</label>
          <textarea class="form-control" name="qc-message" id="qc-message" placeholder="Enter your message" required></textarea>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Send">
      </form>
      <span id="qcf-btn"><i class="fa fa-envelope"></i></span>
      <span id="scrollTop-btn"><i class="fa fa-chevron-up"></i></span>
    </div><!--Sticky Buttons Close-->
    
    <!--Javascript (jQuery) Libraries and Plugins-->
		<script src="js/libs/jquery-1.11.1.min.js"></script>
    <script src="js/libs/jquery.easing.min.js"></script>
		<script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/bootstrap-datepicker.js"></script>
		<script src="js/plugins/smoothscroll.js"></script>
    <script src="js/plugins/utilities.js"></script>
		<script src="js/plugins/foundation.min.js"></script>
		<script src="js/plugins/jquery.placeholder.js"></script>
    <script src="js/plugins/icheck.min.js"></script>
		<script src="js/plugins/jquery.validate.min.js"></script>
		<script src="js/plugins/waypoints.min.js"></script>
   	<script src="js/plugins/isotope.min.js"></script>
		<script src="js/plugins/masterslider.min.js"></script>
		<script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/plugins/lightGallery.min.js"></script>
		<script src="js/plugins/jquery.stellar.min.js"></script>
    <script src="js/plugins/jquery.parallax.min.js"></script>
		<script src="js/plugins/chart.min.js"></script>
    <script src="js/plugins/jquery-numerator.js"></script>
    <script src="js/plugins/jquery.countdown.min.js"></script>
	  <script src="js/plugins/jquery.easypiechart.min.js"></script>
    <script src="js/plugins/jquery.nouislider.min.js"></script>
    <script src="js/plugins/card.min.js"></script>
    <script src="js/scripts.js"></script>
    
  </body><!--Body Close-->
@stop()
