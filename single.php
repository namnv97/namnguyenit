<?php require 'header.php'; ?>

<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
			<h1 class="page-title">Page title</h1>
			<div class="info_post">
				<span class="fa fa-user"> Post by <b>Admin</b></span> <span class="fa fa-calendar"> 24/05/2019</span>
			</div>
			<div class="content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi inventore omnis, modi numquam, excepturi error fugit distinctio. Porro cum quas exercitationem tenetur reiciendis atque velit perferendis minus dolorem, beatae obcaecati.
			</div>
			<div class="relate_post">
				<p class="relate_title">Bài viết liên quan</p>
				<div class="row">
					<?php for($i = 0; $i < 3; $i ++): ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<div class="item">
							<a href="#">
								<img src="img/ava1.jpg" alt="rl">
							</a>
							<div class="text">
								<p class="title"><a href="#">Bai viết</a></p>
							</div>
						</div>
					</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<?php require 'sidebar.php'; ?>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>