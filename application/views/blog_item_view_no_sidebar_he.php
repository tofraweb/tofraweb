<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
  <div class="container">
    <ol class="breadcrumb">
      <li><i class="fa fa-home pr-10"></i><a href="<?php echo base_url();?>">בית</a></li>
      <li><a href="<?php echo base_url();?>blog">בלוג</a></li>
      <li class="active"><?php echo $post->title_he;?></li>
    </ol>
  </div>
</div>
<!-- breadcrumb end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
<!-- <?php //var_dump($post); exit; ?> -->
  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title"><?php echo $post->title_he; ?></h1>
        <hr>
        <!-- page-title end -->

        <!-- blogpost start -->
        <!-- ================ -->
        <article class="blogpost full">
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
              <footer class="clearfix">
              <?php foreach ($categories as $category) { ?>
              <div class="tags pull-right"><i class="icon-tags"></i>
                  <a href="<?php echo base_url();?>blog/posts_by_category/<?php echo $category->id;?>"><?php echo $category->name_he; ?></a>
              </div>
              <?php } ?>
              <div class="post-info">
                <span class="post-date pull-left">
                  <i class="icon-calendar"></i>
                  <span class="month"><?php echo $post->post_date;?></span>
                </span>
                <span class="submitted"><i class="icon-user-1"></i><a href="<?php echo base_url();?>#about"><?php echo $author->username;?> </a></span>
                <!--<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span> -->
              </div>
              <hr>
            </footer>
            <?php echo $post->content; ?>
          </div>

          <footer class="clearfix">
            <?php foreach ($categories as $category) { ?>
            <div class="tags pull-left"><i class="icon-tags"></i>
                <a href="<?php echo base_url();?>blog/posts_by_category/<?php echo $category->id;?>"><?php echo $category->name_he; ?></a>
            </div>
            <?php } ?>
            <div style="text-align:center">
              <ul class="social-links default" style="text-align:center">
                <li data-layout="button" data-size="small" data-mobile-iframe="true" data-href="http://www.tofraweb.com/blog/post/<?php echo $post->slug_he;?>"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.tofraweb.com/blog/post/<?php echo $post->slug_he;?>"><i class="fa fa-facebook"></i>שתף</a></li>
              </ul>
              <a href="<?php echo base_url();?>blog">חזרה</a>
            </div>
          </footer>
      <!-- Your share button code -->

        </article>

        <!-- blogpost end -->

      </div>
      <!-- main end -->


    </div>
  </div>
</section>
<!-- main-container end -->
