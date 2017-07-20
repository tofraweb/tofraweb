
<div id="page-start"></div>

<!--About Section -->
<section id="about"  class="main-container">
	<div class="container">
		<div class="image-box style-3 mb-20 shadow bordered light-gray-bg">
			<div class="col-md-8 col-md-offset-2" style="margin-top:30px">
				<h2 class="text-center title">על <span style="color:#38c0e6"><strong>עצמי</strong></span></h2>
				<div class="separator"></div>
			</div>
			<div class="row grid-space-0">
				<div class="col-md-5" style="margin-top:30px; margin-right:-15px">
					<div class="overlay-container">
						<img style="display: -webkit-inline-box" src="assets/profile/profile-square.png" alt="">
						<div class="overlay-to-top">
							<p class="small margin-clear"><em>Some info <br> Lorem ipsum dolor sit</em></p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="body"g style="padding:30px 50px 50px 0">
						<div class="pv-10 visible-lg"></div>
						<h3>שמי טומי פרנק, מתכנת PHP ומפתח אתרי אינטרנט</h3>
						<p class="small mb-10"><i class="icon-calendar"></i> Feb, 2015 <i class="pl-10 icon-tag-1"></i> Web Design</p>
						<div class="separator-2"></div>
						<p class="margin-clear">מזה 7 שנים אני עובד בתחום הפיטוח האינטרנטי, ניהלתי פרוייקטים שונים כולל פיתוח מערכת ERP מורכבת של חברת תיירות.
						לאורך הזמן רכשתי נסיון בתחומים מגווונים נוספים, בינייהם פיתוח אתרים מערכות CMS ועוד.</p>
						<p class="margin-clear">מתן שרות ברמה גבוה הוא עקרון שמנחה אותי לאורך השנים, למעשה הוא אחד הסיבות שבחרתי להיות עצמאי, שהרי בחברות גדולות השרותיות מהר מאוד נדחקת הצידה אם הצלחת החברה.</p>
						<p class="margin-clear">אני נהינה לפתח, לעצב ולבנות אתרי אינטרנט איכותיים ועוד יותר נהנה מלקוחות מרוצים.</p>
						<br>
						<a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">מה אומרים עלי הלקוחות<i class="fa fa-arrow-left pl-10"></i></a>
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
				<h2 class="text-center">תיק <span style="color:#38c0e6"><strong>עבודות</strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
				<br>
			</div>
		</div>
	</div>
	<div class="space-bottom"  style="margin-bottom:30px">
		<div class="owl-carousel carousel-autoplay">
			<?php
			$serial = 0;
			foreach ($portfolio as $item) { ?>
			<div class="image-box shadow text-center" style="margin:20px">
				<div class="overlay-container">
					<img style="max-height:650px;" src="<?php echo base_url();?>assets/frontpage/<?php  echo $item->image_main; ?>" alt="">
					<div class="overlay-top">
						<div class="text">
							<h3><a href="#num-<?php  echo $serial; ?>" data-toggle="modal"><?php  echo $item->name_he; ?></a></h3>
							<p class="small">וורדפרס</p>
						</div>
					</div>
					<div class="overlay-bottom">
						<div class="links">
							<a href="#num-<?php  echo $serial; ?>" data-toggle="modal" class="btn btn-gray-transparent btn-animated">ראה עוד <i class="pl-10 fa fa-arrow-left"></i></a>
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
				<h4 class="modal-title" style="margin-right:40px" id="project-<?php  echo $cnt; ?>-label"><?php  echo $portfolio[$cnt]->name_he; ?></h4>
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
				<div>
					לקוח - <strong><?php  echo $portfolio[$cnt]->name_he; ?></strong> |
					תאריך - <strong><?php  echo $portfolio[$cnt]->project_ended; ?></strong> |
					תחום - <strong><?php  echo $portfolio[$cnt]->field; ?></strong> |
					אתר - <strong><a href="<?php  echo $portfolio[$cnt]->project_url; ?>" target="_blank"><?php  echo $portfolio[$cnt]->link_title; ?></a></strong>
				</div>
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">סגור</button>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- Project Modal end -->

<!-- Why Me Section Start -->
<!-- ================ -->
<section id="why" class="section parallax background-img-1 default-translucent-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">למה <span style="color:#38c0e6"><strong>לבחור בי</strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon default-bg small"><i class="fa fa-heart-o"></i></span>
							<div class="body">
								<h4 class="title">Clean Code &amp; Design</h4>
								<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
							<span class="icon default-bg small"><i class="fa fa-connectdevelop"></i></span>
							<div class="body">
								<h4 class="title">Extremely Flexible</h4>
								<p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon default-bg small"><i class="icon-snow"></i></span>
							<div class="body">
								<h4 class="title">Latest Technologies</h4>
								<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 ">
						<div class="feature-box-2 object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
							<span class="icon default-bg small"><i class="icon-check"></i></span>
							<div class="body">
								<h4 class="title">Bootstrap Based</h4>
								<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
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
<section id="testimonial">
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
</div>
<!-- Testimonial Section end -->


<!-- Services Section start -->
<!-- ================ -->
<section id="services" class="light-gray-bg pv-30 padding-bottom-clear clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">תחומי <span style="color:#38c0e6"><strong>שרות</strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
				</div>
			</div>
			<div class="col-md-4 ">
				<div class="pv-30 ph-20 feature-box bordered shadow text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon default-bg circle"><i class="fa fa-diamond"></i></span>
					<h3>Clean Code &amp; Design</h3>
					<div class="separator clearfix"></div>
					<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
					<a href="page-services.html">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
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


<!-- Process Section -->
<!-- ================ -->
<section id="process" class="pv-30">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">תהליך <span style="color:#38c0e6"><strong>עבודה</strong></span></h2>
				<div class="separator" style="margin-bottom:40px"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 "  style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon without-bg"><i class="fa fa">1</i></span>
					<div class="body">
						<h4 class="title">מתן יעוץ ללא תשלום</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
					<span class="icon without-bg"><i class="fa fa">2</i></i></span>
					<div class="body">
						<h4 class="title">Extremely Flexible</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
					<span class="icon without-bg"><i class="fa fa">3</i></span>
					<div class="body">
						<h4 class="title">מתן יעוץ ללא תשלום</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 " style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="250">
					<span class="icon without-bg"><i class="fa fa">4</i></span>
					<div class="body">
						<h4 class="title">Easy to Use</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon without-bg"><i class="fa fa">5</i></span>
					<div class="body">
						<h4 class="title">Responsive Design</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 " style="float:right">
				<div class="pv-20 ph-20 feature-box-2 light-gray-bg boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="350">
					<span class="icon without-bg"><i class="fa fa">6</i></span>
					<div class="body">
						<h4 class="title">Deticated Support</h4>
						<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Process Section end -->


<div class="row"   style="margin-top:-30px">
	<div class="col-md-8 col-md-offset-2">
		<h2 class="text-center">ארגז <span style="color:#38c0e6"><strong>הכלים שלי</strong></span></h2>
		<div class="separator"></div>
		<p class="large text-center">שפות תכנות וטכנולוגיות בהם אני משתמש</p>
	</div>
</div>

<!-- My tools section -->
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
