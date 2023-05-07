<?php include("header.php")?>
<!-- Page Title -->
<section class="page-title">
    	<div class="content" style="background-image: url(../assets/images/background/1/2.png)">
			<div class="auto-container">
				<h1>المشاريع</h1>
			</div>
		</div>
		<ul class="page-breadcrumb">
			<li>المشاريع</li>
			<li><a href="../">الرئيسية</a></li>
		</ul>
    </section>
    <!-- End Page Title -->

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
							<?php echo'<a href="project-details/index.php?id='.$row['id'].'">';?><img src="../uploads/projects/<?php echo $row['photo1'] ?>" alt="" /></a>
							</div>
							<div class="lower-content">
								<h5><?php echo'<a href="project-details/index.php?id='.$row['id'].'">'; echo $row['projectname'] ?></a></h5>
								<div class="designation">الموقع:<span><?php echo $row['location'] ?></span></div>
							</div>
						</div>
					</div><?php }?>
				</div>
		</div>
	</section>
	<!-- End Projects Section Two -->
<?php include("footer.php");?>