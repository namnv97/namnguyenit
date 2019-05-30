<?php require 'header.php'; ?>

<div class="banner">
	<div class="owl-carousel slide-home">
		<div class="item">
			<img src="img/banner-home.png" alt="banner">
		</div>

		<div class="item">
			<img src="img/banner-home.png" alt="banner">
		</div>
	</div>
</div>
<div class="container">
	<div class="content_home">
		<ul>
			<li data-trans="hatcun0" class="active">Tất cả</li>
			<li data-trans="hatcun1">Doanh nghiệp</li>
			<li data-trans="hatcun2">Bán hàng</li>
			<li data-trans="hatcun3">Tin tức</li>
			<li data-trans="hatcun4">Giáo dục</li>
			<li data-trans="hatcun5">Khác</li>
		</ul>
		<div class="list_post">
			<div class="loading_img">
				<img src="img/loading.gif" alt="loading">
			</div>
			<div class="content">
				<div class="row">
					<?php for($i = 0; $i < 9; $i ++): ?>
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
				<div class="text-center">
					<button class="btn btn-primary btn-md btn-loadmore">Xem thêm</button>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="why_choose">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 list_text">
				<h3>Tại sao bạn nên chọn chúng tôi</h3>
				<ul>
					<li>
						<img src="img/ten-lua.png" alt="">
						<div class="text">
							<b>NHANH</b> sản phẩm của Nanoweb luôn có tốc độ xử lý rất nhanh(~1 giây) giúp đem lại trải nghiệm tốt cho người dùng
						</div>
					</li>
					<li>
						<img src="img/icon-check.png" alt="">
						<div class="text">
							<b>WEBSITE</b> Website được xây dựng đơn giản rõ ràng, tinh tế, không cần mất thời gian đọc hướng dẫn hay hỏi chúng tôi
						</div>
					</li>
					<li>
						<img src="img/icon-pig.png" alt="">
						<div class="text">
							<b>GIÁ TIẾT KIỆM</b> Với công nghệ mới, giá vận hành mỗi website chỉ ~2000/ngày, rất phù hợp cho các bạn mới khởi nghiệp
						</div>
					</li>
				</ul>
				<div class="text-center">
					<a href="#trainghiem" class="btn btn-lg btn-pis">Trải nghiệm ngay</a >
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<img src="img/sale.png" alt="sale" width="100%">
			</div>
		</div>
	</div>
</div>
<div class="partner">
	<div class="container">
		<h3>Đối tác của chúng tôi</h3>
		<div class="row list_partner">
			<?php for($i = 0; $i < 8; $i ++): ?>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 partner-item">
				<div class="item">
					<div class="image">
						<a href="#">
							<img src="img/partner2.png" alt="<?php echo $i; ?>">
						</a>
					</div>
					<div class="text">
						<a href="#">Bibo Mart</a>
					</div>
				</div>
			</div>
			<?php endfor; ?>
		</div>
	</div>
</div>
<div class="customer_say" style="background-image: url('img/background_say.jpg')">
	<div class="container">
		<h3>Ý kiến khách hàng</h3>
		<div class="row list_say">
			<div class="owl-carousel owl-custom-say">
				<div class="item">
					<div class="avatar">
						<img src="img/ava1.jpg" alt="">
					</div>
					<div class="customer">
						<div class="say">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, libero, aliquam! Laborum sint, itaque a voluptatum error repellat sunt veritatis commodi, debitis esse rem nam nostrum molestias, animi, neque ducimus.
						</div>
						<p class="name_cus">Nguyễn Văn Nam - GĐ.ABC</p>
					</div>
				</div>
				<div class="item">
					<div class="avatar">
						<img src="img/ava2.jpg" alt="">
					</div>
					<div class="customer">
						<div class="say">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, libero, aliquam! Laborum sint, itaque a voluptatum error repellat sunt veritatis commodi, debitis esse rem nam nostrum molestias, animi, neque ducimus.
						</div>
						<p class="name_cus">Nguyễn Văn Nam - GĐ.ABC</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'footer.php'; ?>