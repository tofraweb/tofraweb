
<div id="page-start"></div>

<!-- section -->
<!-- ================ -->
<section id="about"  class="main-container">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="text-center title">על <span style="color:#38c0e6"><strong>עצמי</strong></span></h2>
			<div class="separator"></div>
			<p class="large text-center">שמי טומי פרנק, מתכנת PHP ומפתח אתרי אינטרנט</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<!-- <h3 class="title">The Project is <span class="text-rotator" data-rotator-animation-effect="fadeIn">Multipurpose, Powerful, Multiconcept</span> Bootstrap Template</h3> -->
				<h3 class="title">The Project is Bootstrap Template</h3>
				<p>אני נהינה לפתח, לעצב ולבנות אתרי אינטרנט איכותיים ועוד יותר נהנה מלקוחות מרוצים.</p>
				<ul class="list-icons">
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check-1"></i> Extremly Simple to Use</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="icon-check-1"></i> Customize it in no time</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="icon-check-1"></i> Unlimited options and variations</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="icon-check-1"></i> We are here to support you</li>
				</ul>
				<p>מתן שרות ברמה גבוה הוא עקרון שמנחה אותי לאורך השנים, למעשה הוא אחד הסיבות שבחרתי להיות עצמאי, שהרי בחברות גדולות השרותיות מהר מאוד נדחקת הצידה אם הצלחת החברה.</p>
			</div>
			<div class="col-md-4">
				<div>
					<img src="<?php echo base_url();?>assets/profile/profile-photo-square.png" alt="">
					<a href="#" class="overlay-link"><i class="fa fa-link"></i></a>
				</div>
			</div>
			<div class="col-md-4">
				<h3 class="title">במה <span class="text-rotator" data-rotator-animation-effect="fadeIn">עסקתי, אני עוסק, אני טוב</span></h3>
				<p>מזה 7 שנים אני עובד בתחום הפיטוח האינטרנטי, ניהלתי פרוייקטים שונים כולל פיתוח מערכת ERP מורכבת של חברת תיירות.</p>
				<p>לאורך הזמן רכשתי נסיון בתחומים מגווונים נוספים, בינייהם פיתוח אתרים מערכות CMS ועוד.</p>
				<ul class="list-icons">
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100"><i class="icon-check-1"></i> Extremly Simple to Use</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="150"><i class="icon-check-1"></i> Customize it in no time</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200"><i class="icon-check-1"></i> Unlimited options and variations</li>
					<li class="object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="250"><i class="icon-check-1"></i> We are here to support you</li>
				</ul>
				<p>לאורך הזמן רכשתי נסיון בתחומים מגווונים נוספים, בינייהם פיתוח אתרים מערכות CMS ועוד.</p>
			</div>
		</div>
	</div>
	<br>
</section>
<!-- section end -->

<!-- Portfolio section -->
<!-- ================ -->
<section id="portfolio" class="pv-30 light-gray-bg padding-bottom-clear">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">תיק <span style="color:#38c0e6"><strong>עבודות</strong></span></h2>
				<div class="separator"></div>
				<p class="large text-center">להלן חלק מן הפרוייקטים שעשיתי לאחרונה, מומלץ להכנס לאתר של הלקוח כדי להתרשם</p>
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
<section id="why" class="dark-translucent-bg pv-30 background-img-1" style="background-position:50% 30%;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">למה <span style="color:#38c0e6"><strong>לבחור בי</strong></span></h2>
				<div class="separator"></div>
				<p class="large text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
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
<section id="services" class="light-gray-bg pv-30 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">תחומי <span style="color:#38c0e6"><strong>שרות</strong></span></h2>
				<div class="separator"></div>
				<p class="large text-center">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
			</div>
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20">
					<div class="overlay-container overlay-visible">
						<img src="<?php echo base_url();?>assets/images/service-1.jpg" alt="">
						<a href="<?php echo base_url();?>assets/images/service-1.jpg" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
						<div class="overlay-bottom hidden-xs">
							<div class="text">
								<p class="lead margin-clear text-left">Service One</p>
							</div>
						</div>
					</div>
					<div class="body padding-horizontal-clear">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20">
					<div class="overlay-container overlay-visible">
						<img src="<?php echo base_url();?>assets/images/service-2.jpg" alt="">
						<a href="<?php echo base_url();?>assets/images/service-2.jpg" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
						<div class="overlay-bottom hidden-xs">
							<div class="text">
								<p class="lead margin-clear text-left">Service One</p>
							</div>
						</div>
					</div>
					<div class="body padding-horizontal-clear">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="image-box style-2 mb-20">
					<div class="overlay-container overlay-visible">
						<img src="<?php echo base_url();?>assets/images/service-3.jpg" alt="">
						<a href="<?php echo base_url();?>assets/images/service-3.jpg" class="overlay-link popup-img"><i class="fa fa-plus"></i></a>
						<div class="overlay-bottom hidden-xs">
							<div class="text">
								<p class="lead margin-clear text-left">Service One</p>
							</div>
						</div>
					</div>
					<div class="body padding-horizontal-clear">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque ipsam nihil, adipisci rem minus? Voluptatem distinctio laborum porro aspernatur.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services Section end -->


<!-- Process Section -->
<!-- ================ -->
<section id="process" class="pv-30">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">תהליך <span style="color:#38c0e6"><strong>עבודה</strong></span></h2>
				<div class="separator"></div>
				<p class="large text-center">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
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
