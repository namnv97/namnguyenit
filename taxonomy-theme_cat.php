<?php require 'header.php'; ?>



<div class="container">
	<div class="breadcrumb">
		<ul>
			<li><a href="#">Trang chủ</a></li>
			<li>Theme cat</li>
		</ul>
	</div>
	<h1>Taxonomy Title</h1>
	<div class="list_post">
		<div class="content">
			<div class="row">
				<?php for($i = 0; $i < 12; $i ++): ?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 item">
						<div class="post_item">
							<a href="#" class="view_post">
								<img src="img/ava-demo.png" alt="sjh">
							</a>
							<a href="#co" class="contact_buy">Liên hệ mua</a>
							<p class="view_demo"><span>Theme abc</span> <a href="#x" class="btn btn-sm btn-success">Xem demo</a></p>
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