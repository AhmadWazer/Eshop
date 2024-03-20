@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
								<div class="title text-center">
									<h3>Add Date for Featured Collection</h3>
								</div>
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/featuredcollection/view')}}" class="btn ">BACK</a>
									</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/addfeatured_collection')}}">
                                    @csrf
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Tittle<span>*</span></label>
												<input name="title" type="text" placeholder="" value="">
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
												<label>btn_text<span>*</span></label>
												<input name="headertext" type="text" placeholder="">
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

