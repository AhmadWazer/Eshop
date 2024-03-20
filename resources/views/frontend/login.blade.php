@extends('frontend.layout.main')

@section('main.container')
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="/">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="/login">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="">
						<div class="col-8">
							<div class="form-main">
								<div class="title">
									<h3>Pleace Login</h3>
								</div>
								<form class="form" method="post" action="">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Your Email<span>*</span></label>
												<input name="email" type="email" placeholder="wazir@plandstudios.com">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Password<span>*</span></label>
												<input name="Password" type="password" placeholder="wazir123">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Login</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
@endsection


