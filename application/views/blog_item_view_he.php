
<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
<!-- <?php //var_dump($post); exit; ?> -->
  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title"><?php echo $post->title_he; ?></h1>
        <!-- page-title end -->

        <!-- blogpost start -->
        <!-- ================ -->
        <article class="blogpost full">
          <header>
            <div class="post-info">
              <span class="post-date">
                <i class="icon-calendar"></i>
                <span class="day">12</span>
                <span class="month">May 2015</span>
              </span>
              <span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
              <span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
            </div>
          </header>
          <div class="blogpost-content">
            <div id="carousel-blog-post" class="carousel slide mb-20" data-ride="carousel">
              <!-- Indicators -->
              <!-- <ol class="carousel-indicators">
                <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-blog-post" data-slide-to="1"></li>
                <li data-target="#carousel-blog-post" data-slide-to="2"></li>
              </ol> -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="overlay-container">
                    <img src="<?php echo base_url();?>assets/img/blog/<?php echo $post->picture;?>" alt="">
                  </div>
                </div>
              </div>
            </div>
            <?php echo $post->content; ?>
          </div>

          <footer class="clearfix">
            <div class="tags pull-left"><i class="icon-tags"></i> <a href="#">וורדפרס</a>, <a href="#">מובייל</a>, <a href="#">פיתוח</a></div>
            <div style="text-align:center">
              <ul class="social-links default" style="text-align:center">
                <li data-layout="button" data-size="small" data-mobile-iframe="true" data-href="http://dev.tofraweb.com/blog/blog_item/<?php echo $post->id;?>"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://dev.tofraweb.com/blog/blog_item/<?php echo $post->id;?>"><i class="fa fa-facebook"></i></a></li>
              </ul>
            </div>
          </footer>
  <!-- Your share button code -->

        </article>

        <!-- blogpost end -->

      </div>
      <!-- main end -->

      <!-- sidebar start -->
      <!-- ================ -->
      <aside class="col-md-4 col-lg-3 col-lg-offset-1">
        <div class="sidebar">
          <div class="block clearfix">
            <form role="search">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Search">
                <i class="fa fa-search form-control-feedback"></i>
              </div>
            </form>
          </div>
          <div class="block clearfix">
            <!-- <div class="separator-2"></div> -->
            <!-- <nav>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"></a></li>
                <li class="active"><a href="blog-large-image-right-sidebar.html">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div> -->
          <div class="block clearfix">
            <h3 class="title">פוסטים פופולארים</h3>
            <div class="separator-2"></div>
            <div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
                <li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="image-box shadow bordered text-center mb-20">
                    <div class="overlay-container">
                      <img src="<?php echo base_url();?>assets/images/portfolio-5.jpg" alt="">
                      <a href="#" class="overlay-link">
                        <i class="fa fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="image-box shadow bordered text-center mb-20">
                    <div class="overlay-container">
                      <img src="<?php echo base_url();?>assets/images/portfolio-1-2.jpg" alt="">
                      <a href="#" class="overlay-link">
                        <i class="fa fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="image-box shadow bordered text-center mb-20">
                    <div class="overlay-container">
                      <img src="<?php echo base_url();?>assets/images/portfolio-1-3.jpg" alt="">
                      <a href="#" class="overlay-link">
                        <i class="fa fa-link"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="block clearfix">
            <h3 class="title">Latest tweets</h3>
            <div class="separator-2"></div>
            <ul class="tweets">
              <li>
                <i class="fa fa-twitter"></i>
                <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
              </li>
              <li>
                <i class="fa fa-twitter"></i>
                <p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
              </li>
            </ul>
          </div> -->
          <div class="block clearfix">
            <h3 class="title">כטגוריות</h3>
            <div class="separator-2"></div>
            <div class="tags-cloud">
              <div class="tag">
                <a href="#">אוכל</a>
              </div>
              <div class="tag">
                <a href="#">בריאות</a>
              </div>
              <div class="tag">
                <a href="#">ספרים</a>
              </div>
              <div class="tag">
                <a href="#">התמאה</a>
              </div>
              <div class="tag">
                <a href="#">אופנה</a>
              </div>
              <div class="tag">
                <a href="#">כלכלה</a>
              </div>
              <div class="tag">
                <a href="#">ספורט</a>
              </div>
            </div>
          </div>
          <!-- <div class="block clearfix">
            <h3 class="title">Testimonial</h3>
            <div class="separator-2"></div>
            <blockquote class="margin-clear">
              <p>Design is not just what it looks like and feels like. Design is how it works.</p>
              <footer><cite title="Source Title">Steve Jobs </cite></footer>
            </blockquote>
            <blockquote class="margin-clear">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
              <footer><cite title="Source Title">Steve Doe </cite></footer>
            </blockquote>
          </div> -->
          <div class="block clearfix">
            <h3 class="title">פוסטים אחרונים</h3>
            <div class="separator-2"></div>
            <div class="media margin-clear">
              <div class="media-left">
                <div class="overlay-container">
                  <img class="media-object" src="<?php echo base_url();?>assets/images/blog-thumb-1.jpg" alt="blog-thumb">
                  <a href="#" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="#">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
              </div>
              <hr>
            </div>
            <div class="media margin-clear">
              <div class="media-left">
                <div class="overlay-container">
                  <img class="media-object" src="<?php echo base_url();?>assets/images/blog-thumb-2.jpg" alt="blog-thumb">
                  <a href="#" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="#">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
              </div>
              <hr>
            </div>
            <div class="media margin-clear">
              <div class="media-left">
                <div class="overlay-container">
                  <img class="media-object" src="<?php echo base_url();?>assets/images/blog-thumb-3.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="#">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
              </div>
              <hr>
            </div>
            <div class="media margin-clear">
              <div class="media-left">
                <div class="overlay-container">
                  <img class="media-object" src="<?php echo base_url();?><?php echo base_url();?>assets/images/blog-thumb-4.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="#">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
              </div>
            </div>
            <div class="text-right space-top">
              <a href="#" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
            </div>
          </div>
          <!-- <div class="block clearfix">
            <h3 class="title">Text Sample</h3>
            <div class="separator-2"></div>
            <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
          </div> -->
        </div>
      </aside>
      <!-- sidebar end -->


    </div>
  </div>
</section>
<!-- main-container end -->
