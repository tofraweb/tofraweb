<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
  <div class="container">
    <ol class="breadcrumb">
      <li><i class="fa fa-home pr-10"></i><a href="<?php echo base_url();?>">בית</a></li>
      <li><a href="<?php echo base_url();?>blog">בלוג</a></li>
    </ol>
  </div>
</div>
<!-- breadcrumb end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title"><?php echo $title;?></h1>
        <div class="separator-2"></div>
        <!-- page-title end -->

        <!-- blogpost start -->
        <?php
        $cnt = 1;
        foreach ($posts as $post) { ?>
        <article class="blogpost">
          <div class="overlay-container">
            <img src="<?php echo base_url();?>assets/img/blog/<?php echo $post->picture;?>" alt="">
            <a class="overlay-link" href="<?php echo base_url();?>blog/blog_item/<?php echo $post->id; ?>"><i class="fa fa-link"></i></a>
          </div>
          <header>
            <h2><a href="<?php echo base_url();?>blog/blog_item/<?php echo $post->id; ?>"><?php echo $post->title_he;?></a></h2>
            <div class="post-info">
              <span class="post-date">
                <i class="icon-calendar"></i>
                <!-- <span class="day">08</span> -->
                <span class="month"><?php echo $post->post_date;?></span>
              </span>
<!--               <span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
              <span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span> -->
            </div>
          </header>
          <div class="blogpost-content">
            <p><?php echo $post->excerpt;?></p>
          </div>
          <footer class="clearfix">
            <?php foreach ($categories as $category) { ?>
            <div class="tags pull-left"><i class="icon-tags"></i>
                <a href="#"><?php echo $category->name_he; ?></a>
            </div>
            <?php } ?>
            <!-- <div style="text-align:center">
              <ul class="social-links default" style="text-align:center">
                <li data-layout="button" data-size="small" data-mobile-iframe="true" data-href="http://dev.tofraweb.com/blog/blog_item/<?php echo $post->id;?>"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://dev.tofraweb.com/blog/blog_item/<?php echo $post->id;?>"><i class="fa fa-facebook"></i></a></li>
              </ul>
            </div> -->
          </footer>
        </article>

        <?php } ?>
        <!-- blogpost end -->

        <!-- pagination start -->
        <!-- <nav>
          <ul class="pagination">
            <li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
          </ul>
        </nav> -->
        <!-- pagination end -->

      </div>
      <!-- main end -->

      <!-- sidebar start -->
      <!-- ================ -->
      <aside class="col-md-4 col-lg-3 col-lg-offset-1">
        <div class="sidebar">
<!--           <div class="block clearfix">
            <form role="search">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="חיפוש">
                <i class="fa fa-search form-control-feedback"></i>
              </div>
            </form>
          </div>
          <div class="block clearfix"> -->
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
              <?php foreach ($all_categories as $category) { ?>
                <div class="tag">
                  <a href="<?php echo base_url();?>blog/posts_by_category/<?php echo $category->id;?>/<?php echo $category->name_he;?>"><?php echo $category->name_he; ?></a>
                </div>
              <?php } ?>
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
            <?php foreach ($posts as $post) { ?>
            <div class="media margin-clear">
              <div class="media-left"  style="padding-left: 20px;">
                <div class="overlay-container">
                  <img class="media-object" src="<?php echo base_url();?>assets/img/blog/<?php echo $post->picture;?>" alt="blog-thumb">
                  <a href="#" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="#"><?php echo $post->title_he;?></a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i><?php echo $post->post_date;?></p>
              </div>
              <hr>
            </div>
           <?php } ?>
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
