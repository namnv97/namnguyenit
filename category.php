<?php require 'header.php'; ?>



<div class="container">
	<div class="breadcrumb">
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<li>Danh mục test</li>
		</ul>
	</div>
	<h1>Category Title</h1>
	<div class="category_post">
		<div class="content">
			<div class="row">
				<?php for($i = 0; $i < 12; $i ++): ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 item">
						<div class="image">
							<a href="#" class="view_post">
								<img src="img/partner4.jpg" alt="sjh">
							</a>
						</div>
						<div class="text">
							<p class="title"><a href="#">Bài viết</a></p>
							<div class="excerpt">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni illum quisquam modi, natus
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<div class="wp-pagenavi" role="navigation">
				<span aria-current="page" class="current">1</span>
				<a class="page larger" title="Page 2" href="#">2</a>
				<a class="page larger" title="Page 3" href="#">3</a>
				<a class="page larger" title="Page 4" href="#">4</a>
				<a class="nextpostslink" rel="next" href="#">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>

	</div>
</div>







<?php require 'footer.php'; ?>