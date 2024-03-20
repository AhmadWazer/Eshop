@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
					
				<div class="title text-center">
					<h3>Edit Category</h3>
				</div>
					<div class="col-12">
						<div class="form-group button">
                            <a href="{{url('/category')}}" class="btn">BACK</a>
						</div>
					</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/updatecategory')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data->ctgry_id}}">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Name<span>*</span></label>
												<input name="name" type="text" placeholder="" value="{{$data->ctgry_name}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Image<span>*</span></label>
												<input name="image" type="file" placeholder="">
											</div>	
										</div>
										<div class="col-6">
											<div class="form-group">
                                                <img src="{{asset('images/'.$data->ctgry_image)}}"style="width:112px" alt="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Update</button>
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

