
<div id="page-start"></div>

<!--About Section -->
<section id="about"  class="main-container">
	<div class="container">
		<div class="image-box style-3 mb-20 shadow bordered light-gray-bg">
			<div class="col-md-8 col-md-offset-2" style="margin-top:30px">
				<h2 class="text-center title"><?php echo $this->lang->line("about_header_1"); ?> <span style="color:#38c0e6"><strong><?php echo $this->lang->line("about_header_2"); ?></strong></span></h2>
				<div class="separator"></div>
			</div>
			<div class="row grid-space-0">
				<div class="col-md-5" style="margin-top:30px; margin-right:-15px;padding-bottom:30px">
					<div class="overlay-container">
						<img style="display: -webkit-inline-box" src="assets/profile/profile-square.png" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="body">
						<div class="pv-10 visible-lg"></div>
						<h3><?php echo $this->lang->line("about_subheader"); ?></h3>
						<!-- <p class="small mb-10"><i class="icon-calendar"></i> יולי, 2017 <i class="pl-10 icon-tag-1"></i> מפתח PHP</p> -->
						<div class="separator-2"></div>
						<p class="margin-clear"><?php echo $this->lang->line("about_content_1"); ?></p>
						<p class="margin-clear"><?php echo $this->lang->line("about_content_2"); ?></p>
						<p class="margin-clear"><?php echo $this->lang->line("about_content_3"); ?></p>						<br>
						<a href="#footer" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"><?php echo $this->lang->line("about_button"); ?><i class="fa fa-arrow-left pl-10"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--About Section end -->

<!-- Portfolio section -->
<!-- ================ -->
<section id="portfolio" class="pv-30 light-gray-bg padding-bottom-clear">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center"><?php echo $this->lang->line("portfolio_header_1"); ?> <span style="color:#38c0e6"><strong><?php echo $this->lang->line("portfolio_header_2"); ?></strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
				<br>
			</div>
		</div>
	</div>
	<div class="space-bottom"  style="margin-bottom:30px">
		<div class="owl-carousel carousel-autoplay">
			<?php
			$serial = 0;
			$c_lang = "name_".$lang;
			foreach ($portfolio as $item) { ?>
			<div class="image-box shadow text-center" style="margin:20px">
				<div class="overlay-container">
					<img style="max-height:650px;" src="<?php echo base_url();?>assets/frontpage/<?php  echo $item->image_main; ?>" alt="">
					<div class="overlay-top">
						<div class="text">
							<h3><a href="#num-<?php  echo $serial; ?>" data-toggle="modal"><?php  echo $item->$c_lang; ?></a></h3>
							<!-- <p class="small">וורדפרס</p> -->
						</div>
					</div>
					<div class="overlay-bottom">
						<div class="links">
							<a href="#num-<?php  echo $serial; ?>" data-toggle="modal" class="btn btn-gray-transparent btn-animated"><?php echo $this->lang->line("portfolio_button"); ?> <i class="pl-10 fa fa-arrow-left"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php $serial++; } ?>
		</div>
	</div>
</section>
<!-- Portfolio section end -->

<!-- Project Modal  -->
<?php for($cnt = 0; $cnt < count($portfolio); $cnt++) { ?>
<div class="modal fade" id="num-<?php  echo $cnt; ?>" tabindex="-1" role="dialog" aria-labelledby="project-<?php  echo $cnt; ?>-label" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" style="margin-right:40px" id="project-<?php  echo $cnt; ?>-label"><?php  echo $portfolio[$cnt]->$c_lang; ?></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<div class="overlay-container">
							<img src="<?php echo base_url();?>assets/mockup/<?php  echo $portfolio[$cnt]->mockup; ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer" style="text-align:center">
				<!-- <div>
					לקוח - <strong><?php  echo $portfolio[$cnt]->name_he; ?></strong> |
					תאריך - <strong><?php  echo $portfolio[$cnt]->project_ended; ?></strong> |
					תחום - <strong><?php  echo $portfolio[$cnt]->field; ?></strong> |
					אתר - <strong><a href="<?php  echo $portfolio[$cnt]->project_url; ?>" target="_blank"><?php  echo $portfolio[$cnt]->link_title; ?></a></strong>
				</div> -->
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">סגור</button>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- Project Modal end -->

<!-- Why Me Section Start -->
<!-- ================ -->
<section id="why" class="section parallax default-translucent-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center"><?php echo $this->lang->line("why_header_1"); ?> <span><strong><?php echo $this->lang->line("why_header_2"); ?></strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon default-bg small"><i class="fa fa-heart-o"></i></span>
							<div class="body">
								<h4 class="title" style="font-size:24px"><?php echo $this->lang->line("why_subheader_1"); ?></h4>
								<p style="font-size:18px"><?php echo $this->lang->line("why_subcontent_1"); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
							<span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
							<div class="body">
								<h4 class="title" style="font-size:24px"><?php echo $this->lang->line("why_subheader_2"); ?></h4>
								<p style="font-size:18px"><?php echo $this->lang->line("why_subcontent_2"); ?></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
							<span class="icon default-bg small"><i class="icon-check"></i></span>
							<div class="body">
								<h4 class="title" style="font-size:24px"><?php echo $this->lang->line("why_subheader_3"); ?></h4>
								<p style="font-size:18px"><?php echo $this->lang->line("why_subcontent_3"); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Why Me Section end -->

<!-- Testimonial Section -->
<!-- <section id="testimonial">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center">הלקוחות <span style="color:#38c0e6"><strong>מדברים</strong></span></h2>
			<div class="separator"></div>
		</div>
	</div>
</section>
<div class="owl-carousel content-slider space-top">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="testimonial text-center">
					<div class="testimonial-image">
						<img src="<?php echo base_url();?>assets/profile/profile-square.png" alt="Jane Doe" title="Jane Doe" class="img-circle">
					</div>
					<h3>יותר ממרוצה</h3>
					<div class="separator"></div>
					<div class="testimonial-body">
						<blockquote>
							<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
						</blockquote>
						<div class="testimonial-info-1">ישראל ישראלי</div>
						<div class="testimonial-info-2">עמותת עמיתים</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="testimonial text-center">
					<div class="testimonial-image">
						<img src="<?php echo base_url();?>assets/profile/profile-square-2.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
					</div>
					<h3>חוויה לעבוד איתו</h3>
					<div class="separator"></div>
					<div class="testimonial-body">
						<blockquote>
							<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
						</blockquote>
						<div class="testimonial-info-1">משה כהן</div>
						<div class="testimonial-info-2">גוגל</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!-- Testimonial Section end -->


<!-- Services Section start -->
<!-- ================ -->
<section id="services" class="light-gray-bg pv-30 padding-bottom-clear clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center"><?php echo $this->lang->line("service_header_1"); ?> <span style="color:#38c0e6"><strong><?php echo $this->lang->line("service_header_2"); ?></strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-wordpress"></i></span>
					<h3>בניית אתרי וורדפס</h3>
					<div class="separator clearfix"></div>
					<p>פיתוח ובניית אתרי וורדפרס עם אפשרות להוספת מספר לא מוגבל של תוספות. המוצר כולל ממשק ניהול תוכן ידידותי עבור הלקוח.</p>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-arrows"></i></span>
					<h3>פיתוח אתר מותאם אישית</h3>
					<div class="separator clearfix"></div>
					<p>פיתוח אתרים מותאים אישית ללקוח ללא שימוש במערכות CMS מוכנות, אך בשוש במסגרות וטכנולוגיות כמו Codeigniter ו - Bootstrap.</p>				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-line-chart"></i></span>
					<h3>קידום אתרים</h3>
					<div class="separator clearfix"></div>
					<p>קידום אורגני של אתרים (SEO) עם שאפשרות לקידום ממומן במקרה הצורך. הגדרת מילות מפתח ואופטימיזציה למנועי חיפוש.</p>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-exchange"></i></span>
					<h3>הגירה של אתר</h3>
					<div class="separator clearfix"></div>
					<p>היום ישנם כילים טובים להעברת אתר ממערכת ספציפית למערכת אחרת כמו מעבר מ - Joomla ל - Wordpress, כולל הגירה של בסיס הנתונים.</p>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-leaf"></i></span>
					<h3>חידוש עיצוב של אתר קיים</h3>
					<div class="separator clearfix"></div>
					<p>ישנם מקרים בהם לא כדאי לבנות מחדש את כל האתר אלא מספיק לתת חידוש ורענון לעיצוב הקיים. התחדשות היא דבר טוב ונחוץ.</p>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-database"></i></span>
					<h3>הפיכת אתר סטטי לדינאמי</h3>
					<div class="separator clearfix"></div>
					<p>ניתן להפוף אתרים מיושנים מבוססי html בלבד לאתרים דינאמיים ע"י הוספת בסיס נתונים ומערכת ניהול תוכן עבור הלקוח.</p>
				</div>
			</div>
		</div>
		<br>
	</div>
</section>
<!-- Services Section end -->

<!-- section start -->
<!-- ================ -->
<section class="video-background pv-40 default-translucent-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">רוצים אתר חדשני ומרענן עבור העסק?</h2>
				<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
				<p class="text-center"><a href="#footer" class="btn btn-lg btn-dark object-non-visible" data-animation-effect="zoomIn" data-effect-delay="500">צרו איתי קשר</a></p>
			</div>
		</div>
	</div>
</section>
<!-- section end -->


<!-- My tools section -->
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">ארגז <span style="color:#38c0e6"><strong>הכלים שלי</strong></span></h2>
		<div class="separator"></div>
		<p class="large text-center">שפות תכנות וטכנולוגיות בהם אני משתמש</p>
	</div>
</div>
<div class="container">
	<div class="owl-carousel clients" style="margin-bottom:50px">
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/php.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/codeigniter.jpg" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/javascript.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/mysql.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/wordpress.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/jquery.gif" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/bootstrap.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/Ajax.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/css3.jpg" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/html5.png" alt=""></a>
		</div>
		<div class="client">
			<a href="#"><img src="<?php echo base_url();?>assets/tools/DirectAdmin.png" alt=""></a>
		</div>
	</div>
</div>
<!-- My tools section end -->


<!-- Process Section -->
<?php if(!$is_mobile) { ?>

<section id="process" class="pv-30">
	<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="text-center">תהליך <span style="color:#38c0e6"><strong>עבודה</strong></span></h2>
					<div class="separator" style="margin-bottom:40px"></div>
				</div>
			</div>
			<!-- timeline grid start -->
			<!-- ================ -->
			<div class="timeline clearfix">

				<div class="timeline-date-label clearfix" style="margin-top:-70px">יצירת קשר</div>

				<!-- Process timeline item start -->
				<div class="timeline-item">
					<article class="blogpost shadow light-gray-bg bordered object-non-visible" style="width:250px" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 0px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-volume-control-phone"></i></span> מתן יעוץ ללא תשלום</h5>
						</header>
					</article>
				</div>
				<!-- Process timeline item end -->


				<!-- timeline grid item start -->
				<div class="timeline-item pull-right">
					<!-- blogpost start -->
					<article class="blogpost shadow light-gray-bg bordered object-non-visible"  style="width:250px;float:left" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 30px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-pencil"></i></span>קביעת מטרות ואפיון האתר</h5>
						</header>
					</article>
					<!-- blogpost end -->
				</div>
				<!-- timeline grid item end -->

				<!-- Process timeline item start -->
				<div class="timeline-item">
					<article class="blogpost shadow light-gray-bg bordered object-non-visible" style="width:250px" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 0px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-graduation-cap"></i></span> מחקר ובחירת טכנולוגיות</h5>
						</header>
					</article>
				</div>
				<!-- Process timeline item end -->


				<!-- timeline grid item start -->
				<div class="timeline-item pull-right">
					<!-- blogpost start -->
					<article class="blogpost shadow light-gray-bg bordered object-non-visible"  style="width:250px;float:left" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 30px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-image"></i></span>בחירת עיצוב/תבנית</h5>
						</header>
					</article>
					<!-- blogpost end -->
				</div>
				<!-- timeline grid item end -->

				<!-- Process timeline item start -->
				<div class="timeline-item">
					<article class="blogpost shadow light-gray-bg bordered object-non-visible" style="width:250px" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 0px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-leaf"></i></span> עיצוב ופיתוח</h5>
						</header>
					</article>
				</div>
				<!-- Process timeline item end -->


				<!-- timeline grid item start -->
				<div class="timeline-item pull-right">
					<!-- blogpost start -->
					<article class="blogpost shadow light-gray-bg bordered object-non-visible"  style="width:250px;float:left" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 30px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-tv"></i></span>הצגת המוצר ללקוח </h5>
						</header>
					</article>
					<!-- blogpost end -->
				</div>
				<!-- timeline grid item end -->


				<!-- Process timeline item start -->
				<div class="timeline-item">
					<article class="blogpost shadow light-gray-bg bordered object-non-visible" style="width:250px" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 0px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-arrows"></i></span> התאמות אחרונות</h5>
						</header>
					</article>
				</div>
				<!-- Process timeline item end -->


				<!-- timeline grid item start -->
				<div class="timeline-item pull-right">
					<!-- blogpost start -->
					<article class="blogpost shadow light-gray-bg bordered object-non-visible"  style="width:250px;float:left" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
						<header style="padding: 0px 0px 0px 30px">
							<h5><span class="icon without-bg small"><i style="color:#09afdf"class="fa fa-cloud-upload"></i></span>העלאת האתר לשרת </h5>
						</header>
					</article>
					<!-- blogpost end -->
				</div>
				<!-- timeline grid item end -->


				<div class="timeline-date-label clearfix">אתר מוכן</div>

			</div>
			<!-- timeline grid end -->
	</div>
</section>
<!-- Process Section end -->
<?php } ?>
