<?php
include("header.php");              
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$stmt = $link->prepare("SELECT * FROM slider "); 
$stmt ->execute();
$resultSet = $stmt->get_result();
$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
?>
 <section class="main-slider-two">
 
		<div class="main-slider-carousel owl-carousel owl-theme">
			<!-- Slide 01 --><?php foreach($rows as $row) {?>
			<div class="slide" style="background-image:url(uploads/slider/<?php  echo   $row['photo'] ; ?>)">
			
				<div class="auto-container clearfix">
					
					<!-- Content Column -->
                    
					<div class="content-column">
						<div class="inner-column">
							<div class="title"></div>
							<h1><?php  echo "<td>" . $row['text1'] . "<td>"; ?><br><span class="theme-color"><?php  echo "<td>" . $row['text2'] . "<td>"; ?></span></h1>
							<div class="text"><?php  echo "<td>" . $row['text3'] . "<td>"; ?></div>
							<div class="btns-box">
								<a class="btn-style-one theme-btn" href="projects/"><span class="txt">تفاصيل اكثر</span></a>
							</div>
						</div>
					</div>
				</div>
			</div><?php }?> 
        </div> 
		<div class="play-box">
			<a href="https://www.youtube.com/watch?v=aMFhXGpnL9U&t=1s" class="lightbox-image play-button"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
		</div>   
</section>
<section class="work-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">
				
					<!-- Blocks Column -->
					<div class="blocks-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<div class="blocks-outer">
								
								<!-- Feature Block Two -->
								<div class="feature-block-two">
									<div class="inner-box">
										<div class="content">
											<span class="icon flaticon-notepad"></span>
											<h5><a href="services/">العمل علي أفكار متطورة وحلول بيئية</a></h5>
											<!--div class="text">Donec adipiscing tristique risus nec...</div-->
											<!--a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a-->
										</div>
									</div>
								</div>
								
								<!-- Feature Block Two -->
								<div class="feature-block-two">
									<div class="inner-box">
										<div class="content">
											<span class="icon flaticon-stats"></span>
											<h5><a href="services/">التحليل وتطور الفكرة والتصميم المناسب</a></h5>
											<!--div class="text">Donec adipiscing tristique risus nec...</div-->
											<!--a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a-->
										</div>
									</div>
								</div>
								
								<!-- Feature Block Two -->
								<div class="feature-block-two">
									<div class="inner-box">
										<div class="content">
											<span class="icon flaticon-briefcase-2"></span>
											<h5><a href="services/">استثمارك في تصميم منزلك في محله</a></h5>
											<!--div class="text">Donec adipiscing tristique risus nec...</div-->
											<!--a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a-->
										</div>
									</div>
								</div>
								
							</div>
							<a href="#" class="more">مزيد من مشاريعنا</a>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column" style="background-image:url(assets/images/resource/Untitled\ design\ \(1\).png)">
							<h2>للاستفسارات أو الأسئلة <span>نقدم حلول هندسية اقتصادية و فريدة.</span></h2>
							<div class="text">نحن نعمل على بناء مجتمعات مزدهرة</div>
							<div class="clearfix">
								<div class="phone-box">
									<span class="icon flaticon-call-2"></span>
									اتصل بنا في اي وقت<br>
									<?php
									$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
									$stmt = $link->prepare("SELECT * FROM phone");
									$stmt ->execute();
									$resultSet = $stmt->get_result();
									$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
									?>
									<?php foreach($rows as $row){;?>
									<a href="https://wa.me/<?php echo $row['phonenumber'] ?>"><?php echo $row['phonenumber'] ?></a>
									<?php }?>
									<span class="or">او</span>
								</div>
								<!-- Button Box -->
								<div class="button-box">
									<a class="btn-style-two theme-btn" href="services/"><span class="txt">خدماتنا</span></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Section -->
	<!-- Services Section Two -->
	<section class="services-section-two">
		<div class="auto-container">
			
			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>اقسامنا</h2>
				<div class="text">جوهر رؤيتنا أن نسعى لتحقيق أقصى درجات الإتقان والاهتمام بأدق التفاصيل</div>
			</div>
			
			<div class="services-carousel owl-carousel owl-theme">
				
				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<span class="icon flaticon-helmet-2"></span>
						<h5><a href="services/">القسم الميكانيكي</a></h5>
						<div class="text">تصميم أنظمة التغذية <br>تصميم أنظمة الصرف<br>تصميم وتحديد أنظمة التكييف<br>تصميم أنظمة الحرائق</div>
						<!--a href="waste-removal.html" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a-->
					</div>
				</div>
				
				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<span class="icon flaticon-atom"></span>
						<h5><a href="services/">القسم الكهربائي</a></h5>
						<div class="text">تصميم الأنظمة الكهربائية والتيار الخفيف<br>حساب كميات<br>مراجعة المخططات وتوثيق ملاحظات</div>
						<!--a href="waste-removal.html" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a-->
					</div>
				</div>
				
				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<span class="icon flaticon-blueprint"></span>
						<h5><a href="services/">القسم المدني</a></h5>
						<div class="text">تصميم انشائي (اعتماد الكود السعودي)<br>حساب كميات<br>مراجعة مخططات وتوثيق الملاحظات</div>
						<!--a href="waste-removal.html" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a-->
					</div>
				</div>
				
				<!-- Service Block Two -->
				<div class="service-block-two">
					<div class="inner-box">
						<span class="icon flaticon-skyline"></span>
						<h5><a href="services/">القسم المعماري</a></h5>
						<div class="text">تصميم داخلي <br>تصميم خارجي<br>تصميم الاندسكيب<br>مراجعة مخططات وتوثيق الملاحاظات</div>
						<!--a href="waste-removal.html" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section Two -->
	<!-- FullWidth Section -->
	<section class="faq-section">
		
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Blocks Column -->
				<div class="blocks-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="row clearfix">
							<!-- Feature Block Three -->
							<div class="feature-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="block-number">1.</div>
									<span class="icon flaticon-house-1"></span>
									<h5><a>مكتب هندسي متكامل</a></h5>
								</div>
							</div>
							
							<!-- Feature Block Three -->
							<div class="feature-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="block-number">2.</div>
									<span class="icon flaticon-conversation"></span>
									<h5><a>سهولة التواصل</a></h5>
								</div>
							</div>
							
							<!-- Feature Block Three -->
							<div class="feature-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="block-number">3.</div>
									<span class="icon flaticon-clock-1"></span>
									<h5><a>الإنجاز في الوقت المحدد</a></h5>
								</div>
							</div>
							
							<!-- Feature Block Three -->
							<div class="feature-block-three col-lg-6 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="block-number">4.</div>
									<span class="icon flaticon-dollar-symbol"></span>
									<h5><a>التقسيط المريح</a></h5>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- Accordion Column -->
				<div class="accordion-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<span class="icon flaticon-medal"></span>
							<h2><br>؟Green Design لماذا</h2>
							<div class="text">نسعى لأن نكون الخيار الأمثل للعميل لتحقيق <br>كل ما يرغبه به في قطاع الهندسي. </div>
						</div>
						
						<!-- Accordian Box -->
						<ul class="accordion-box">
										
							<!--Block-->
							<li class="accordion block">
								<div  class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>مكتب هندسي متكامل</div>
								<div  class="acc-content">
									<div  class="content">
										<div id="number-1" class="text">
											<p>يضم مهندسين أصحاب خبرات علمية وعملية في تخصصات الهندسة ك (العمارة والمدنية والميكانيكية والكهربائية)</p>
										</div>
									</div>
								</div>
							</li>

							<!--Block-->
							<li class="accordion block">
								<div id="number-2" class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> سهولة التواصل</div>
								<div class="acc-content current">
									<div class="content">
										<div class="text">
											<p> إمكانية التواصل مع المهندسين من خلال جميع وسائل التواصل الالكترونية الحديثة كالاتصال الهاتفي وبرنامج زووم وجميع مواقع السوشيال ميديا</p>
										</div>
									</div>
								</div>
							</li>
							
							<!--Block-->
							<li class="accordion block">
								<div id="number-3" class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>الإنجاز في الوقت المحدد</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>يلتزم بتسليم تصاميم مشاريعكم في الوقت المحدد وكما ينص العقد مع العميل</p>
										</div>
									</div>
								</div>
							</li>
							
							<!--Block-->
							<li class="accordion block">
								<div id="number-4" class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>التقسيط المريح</div>
								<div class="acc-content">
									<div class="content">
										<div class="text">
											<p>تقسيط تكلفة المشروع علي فترات التنفيذ حيث يكون الدفع علي شكل دفعات ميسرة وبسيطة</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FullWidth Section -->
	<!-- Experiance Section Two -->
	<section class="experiance-section">
		<div class="image-layer" style="background-image:url(assets/images/background/WhatsApp\ Image\ 2022-07-28\ at\ 12.54.45\ AM.jpeg)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="year-box">
							<div class="count-box">
								0<span class="count-text" data-speed="2500" data-stop="2">0</span>
							</div>
							<span class="years">Years</span>
						</div>
						<div class="title">
							<span class="icon flaticon-helmet-2"></span>من نحن؟
						</div>
						<br>
						<div class="text">نتميز في مكتب التصميم الأخضر بأننا لا نعتمد النمط التقليدي المتبع عادة في تصميم المشاريع مما يتيح لنا الإبداع وإطلاق أفكار تصميمية متفردة لكل مشروع من المشاريع. ونبتكر مساحات رائعة مبدعة وعملية في ذات الوقت، وتمثل التطبيق الحقيقي لما يدور في أفكار العملاء ويلبي متطلباتهم بدقة</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="sidebar-widget quote-widget">
					<!-- Sidebar Title -->
					<div class="title-box">
						<div class="title">تحتاج للمساعدة؟</div>
						<h3>طلب تواصل</h3>
					</div>
					<div class="widget-content" style="background-image: url(../assets/images/background/pattern-6.png)">
						<!-- Email Form -->
						<div class="email-form style-two">
							<form method="post" action="sendemail.php">
								<div class="form-group">
									<input type="text" name="name" value="" placeholder="الاسم" required>
									<input type="text" name="phone" value="" placeholder="رقم الهاتف" required>
									<input type="email" name="email" value="" placeholder="البريد الالكتروني" required>
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">ارسال</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Experiance Section Two -->
	<br> <br> <br> <br>
	<!-- Counter Section Two -->
	<section class="counter-section-two">
		<div class="auto-container">
			<div class="inner-container">
			
				<!-- Fact Counter / Style Two -->
				<div class="fact-counter style-two">
					<div class="clearfix">
						
						<!-- Column -->
						<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-helmet-1"></div>
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="5000" data-stop="385">0</span>+
									</div>
									<h4 class="counter-title">مشروع تم انجازه</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-pencil-and-ruler"></div>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="1250">0</span>+
									</div>
									<h4 class="counter-title">استشارة</h4>
								</div>
							</div>
						</div>

						<!-- Column -->
						<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="icon flaticon-solidarity"></div>
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3500" data-stop="300">0</span>+
									</div>
									<h4 class="counter-title">عميل</h4>
								</div>
							</div>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Counter Section Two -->

	<!-- Projects Section Two -->
	<section class="projects-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<span class="icon flaticon-telephone"></span>
				<h2>مجموعة من  <span>مشاريعنا المميزة</span></h2>
				<div class="text">جوهر رؤيتنا أن نسعى لتحقيق أقصى درجات الإتقان والاهتمام بأدق التفاصيل</div>
			</div>
			
			<!-- MixitUp Gallery -->
            <div class="mixitup-gallery">
                
                <!-- Filter -->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
						<li class="filter" data-role="button" data-filter=".extra">التصميم الإلكتروميكانيكال</li>
						<li class="filter" data-role="button" data-filter=".structural">التصميم الإنشائي</li>
						<li class="filter" data-role="button" data-filter=".outer">التصميم الخارجي</li>
						<li class="filter" data-role="button" data-filter=".interior">التصميم الداخلي</li>
						<li class="filter" data-role="button" data-filter=".architect">التصميم المعماري</li>
                        <li class="active filter" data-role="button" data-filter="all">الكل</li>
                    </ul>
                    
                </div>
                <?php
					$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
					$stmt = $link->prepare("SELECT * FROM projects");
					$stmt ->execute();
					$resultSet = $stmt->get_result();
					$rows = $resultSet->fetch_all(MYSQLI_ASSOC);?>
                <div class="filter-list row clearfix">
					<!-- Gallery Block Two -->
					<?php foreach($rows as $row){;?>
					<div class="gallery-block-two mix <?php echo $row['service'] ?> col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
							<?php echo'<a href="project-details/index.php?id='.$row['id'].'">';?><img src="uploads/projects/<?php echo $row['photo1'] ?>" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><?php echo'<a href="project-details/index.php?id='.$row['id'].'">'; echo $row['projectname'] ?></a></h5>
								<div class="designation">الموقع:<span><?php echo $row['location'] ?></span></div>
							</div>
						</div>
					</div><?php }?>
					
				</div>
				<!-- Button Box -->
				<div class="button-box text-center">
					<a class="btn-style-two theme-btn" href="projects/"><span class="txt">عرض كل المشاريع</span></a>
				</div>
		</div>
	</section>
	<!-- End Projects Section Two -->

	<!-- Testimonial Section-->
	<section class="testimonial-section">
		<div class="image-layer" style="background-image:url(assets/images/background/1/1.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>نؤمن أن كل عميل<br>هو شراكة طويلة الأمد</h2>
						<div class="text">جوهر رؤيتنا أن نسعى لتحقيق أقصى درجات الإتقان والاهتمام بأدق التفاصيل</div>
						<!-- Button Box -->
						<div class="button-box">
							<a class="btn-style-one theme-btn" href="services/"><span class="txt">خدماتنا</span></a>
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="carousel-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="single-item-carousel owl-carousel owl-theme">
						
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">تسلم يا بشمهندس والله يعطيك العافية <br>على الشغل النظيف تمام مية بالمية</div>
									<h5>بدر الشريف</h5>
									<a class="btn-style-one theme-btn" ><span class="txt">تصميم داخلي (روضة أطفال)</span></a>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">الله يسعدك يا بشمهندس والله يكتب أجرك والله فكيتني من زنقه كنت أمر فيها صراحه <br>اشكرك من كل قلبي وجميع التصاميم إلى قلت عليها والله ذوق وشي يفتح النفس</div>
									
									<a class="btn-style-one theme-btn" ><span class="txt">تعديل مخططات معمارية</span></a>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">ما شاء الله أول مرة يمر عليا <br>شغل بهذه الطريقة النظيفة</div>
									<h5>مشعي العتيبي</h5>
									<a class="btn-style-one theme-btn" ><span class="txt">تصميم مخططات تمديدات <br>المياه والصرف</span></a>
								</div>
							</div>
							
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">شكرا يعطيك العافية <br>الله يسعدكم زي ما اسعدتونا</div>
									<h5>شهد</h5>
									<a class="btn-style-one theme-btn" ><span class="txt">تصميم واجهة</span></a>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">مشكور بمهندس الله يطمن بالك أنا كنت خايف ليكون عندي مشكلة واخاف استشير أشباه المهندسيين يدخلني بدوامة جزاك الله خير</div>
									<h5>أبو نورة</h5>
									<a class="btn-style-one theme-btn" ><span class="txt">استشارة إنشائية</span></a>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">الله يعطيكم الصحة والتوفيق ما قصرتوا بصراحة شغل جميل ودقيق تشكرون عليه <br>وبإذن الله ما راح يكون اخر تعاون وأكيد راح انصح أي واحد من الأقارب أو الأصدقاء بالتعامل معكم</div>
									<h5>محمد إبراهيم </h5>
									<a class="btn-style-one theme-btn" ><span class="txt">تصميم إلكتروميكانيكال</span></a>
								</div>
							</div>

							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									
									<div class="text">ألف شكر لك مهندس ريحتني كنت والله متخوف كثير</div>
									<h5>خالد </h5>
									<a class="btn-style-one theme-btn"><span class="txt">استشارة إنشائية</span></a>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonial Section-->
	<!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="inner-container">
				<div class="sponsors-outer">
					<!-- Sponsors Carousel -->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 2.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 3.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 5.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 6.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="assets/images/clients/Artboard 7.png" alt=""></a></figure></li>
					</ul>
				</div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->
	<br><br>








<?php 
include("footer.php")
?>