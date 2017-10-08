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
      <div class="main col-md-12">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title"><?php echo $title;?>
        <?php if($category_name) { ?>
        <small> - <i class="icon-tags"></i><?php echo $category_name->name_he;?></small>
        <?php } ?>
        </h1>
        <div class="separator-2"></div>
        <!-- page-title end -->


        <!-- isotope filters start -->
        <div class="filters">
          <ul class="nav nav-pills">
            <li><a <?php if(1) { echo 'style="color:#09afdf; font-weight: bold;"';}?> href="<?php echo base_url();?>blog">הכל</a></li>
            <?php foreach($all_categories as $category) { ?>
            <li><a <?php if($category->name_he == $category_name->name_he) { echo 'style="color:#09afdf; font-weight: bold;"';}?> href="<?php echo base_url();?>blog/posts_by_category/<?php echo $category->id;?>"><?php echo $category->name_he;?></a></li>
            <?php } ?>
<!--             <li><a href="#" data-filter=".app-development">App development</a></li>
            <li><a href="#" data-filter=".site-building">Site building</a></li> -->
          </ul>
        </div>
        <!-- isotope filters end -->


        <!-- timeline grid start -->
        <!-- ================ -->
        <div class="timeline clearfix">
          
          <div class="timeline-date-label clearfix"><?php echo date("Y-m");?></div>
          <?php 
          $cnt = 1;
          foreach ($posts as $post) { ?>
          <!-- timeline grid item start -->
          <div class="timeline-item <?php if($cnt % 2 == 0) echo 'pull-right';?>" >
            <!-- blogpost start -->
            <article class="blogpost shadow light-gray-bg bordered object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
              <div class="overlay-container">
                <img src="<?php echo base_url();?>assets/img/blog/<?php echo $post->picture;?>" alt="">
                <a class="overlay-link" href="<?php echo base_url();?>blog/post/<?php echo $post->slug_he; ?>"><i class="fa fa-link"></i></a>
              </div>
              <header>
                <h2><a href="<?php echo base_url();?>blog/post/<?php echo $post->slug_he; ?>"><?php echo $post->title_he;?></a></h2>
              </header>
              <div class="blogpost-content">
                <p><?php echo $post->excerpt;?></p>
              </div>
              <footer class="clearfix">
                <div class="post-info pull-left">
                  <span class="post-date">
                    <i class="icon-calendar"></i>
                    <span class="month"><?php echo $post->post_date;?></span>
                  </span>
                </div>
                <div class="link pull-right"><i class="icon-link"></i><a href="<?php echo base_url();?>blog/post/<?php echo $post->slug_he; ?>">קרא עוד</a></div>
              </footer>
            </article>
            <!-- blogpost end -->                 
          </div>
          <!-- timeline grid item end -->
          <?php $cnt++; } ?>

        </div>
        <!-- timeline grid end -->

      </div>
      <!-- main end -->

    </div>
  </div>
</section>
<!-- main-container end -->
      