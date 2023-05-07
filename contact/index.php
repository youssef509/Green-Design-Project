<?php include("header.php")?>
<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../assets/images/background/1/2.png)">
			<div class="auto-container">
				<h1>التواصل</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li>تواصل معنا</li>
			<li><a href="../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->
	
	<!-- Quote Section -->
    <section class="quote-section" style="background-image: url(../assets/images/background/1/2.png)">
		<div class="auto-container">
			<div class="row clearfix">
			
				<!-- Title Column -->
				<div class="title-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<h2>لديك بعض الاستفسارات؟</h2>
							<div class="text">لا تترد بالتواصل فريقنا جاهز للتواصل معكم والرد علي الأسئلة والاستفسارات علي مدار الساعة</div>
						</div>
						<?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM phone");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
						<!-- Phone Box -->
						<div class="phone-box">
							<span class="icon flaticon-call-2"></span>
							اتصل بنا<br>
							<a href="https://wa.me/<?php echo $row['phonenumber'] ?>"><?php echo $row['phonenumber'] ?></a>
						</div>
                        <?php }; ?>
						<br><br><br>
                        <?php
							$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
							$stmt = $link->prepare("SELECT * FROM mail");
							$stmt ->execute();
							$resultSet = $stmt->get_result();
							$rows = $resultSet->fetch_all(MYSQLI_ASSOC);
							?>
							<?php foreach($rows as $row){;?>
						<!-- Phone Box -->
						<div class="phone-box">
							<span class="icon flaticon-email-2"></span>
							بريد الكتروني<br>
							<a href="mailto:<?php echo $row['link'] ?>"><?php echo $row['link'] ?></a>
						</div>
                        <?php }?>
						<br><br><br>
						<!-- Phone Box -->
						<div class="phone-box">
							<span class="icon flaticon-clock-2"></span>
							اوقات العمل<br>
							<a>Week Days: 09.00 to 18.00<br> Sunday: Closed</a>
						</div>
						
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<h3>اترك لنا رسالتك</h3>
							<div class="text">نستخدم افضل الوسائل لحماية بياناتكم</div>
						</div>
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="sendemail.php">
								<div class="row clearfix">
								
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="name" value="" placeholder="الاسم الاخير" required>
								</div>
								
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="lastname" value="" placeholder="الاسم الاول" required>
								</div>
								
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="email" name="email" value="" placeholder="البريد الالكتروني" required>
								</div>
								
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="phone" value="" placeholder="رقم الهاتف" required>
								</div>
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<input type="text" name="subject" value="" placeholder="الموضوع" required>
								</div>
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<input type="text" name="questions" value="" placeholder="سؤالك؟" required>
								</div>
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<textarea class="" name="message" placeholder="اكتب رسالتك"></textarea>
								</div>
								
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<button type="submit" class="theme-btn btn-style-four"><span class="txt">ارسال</span></button>
								</div>
							</form>
						</div>
						<!-- End Default Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Quote Section -->
<?php include("footer.php")?>