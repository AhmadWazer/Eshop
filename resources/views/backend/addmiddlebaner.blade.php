@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
								<div class="title text-center">
									<h3>Add Data for Trending Items</h3>
								</div>
								
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/addmiddlebaner/view')}}" class="btn ">BACK</a>
									</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/addmiddlebaner/save')}}">
                                    @csrf
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>tittle<span>*</span></label>
												<input name="title" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Subtittle<span>*</span></label>
												<input name="subtitle" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Image<span>*</span></label>
												<input name="image" type="file" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Btn_name<span>*</span></label>
												<input name="btn" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Save</button>
											</div>
										</div>
									</div>
								</form>
							</div>
					    </div>
				    </div>
			    </div>
	        </section>

@endsection

