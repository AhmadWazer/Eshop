@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<div class="title">
									<h3>Edit Data for DealOfDay</h3>
								</div>
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/updateD')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data['D_id']}}">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Tittle<span>*</span></label>
												<input name="title" type="text" placeholder=""value="{{$data['title']}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Subtittle<span>*</span></label>
												<input name="subtitle" type="text" placeholder="" value="{{$data['sub_title']}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Description<span>*</span></label>
												<input name="desc" type="text" placeholder="" value="{{$data['description']}}">
											</div>	
										</div>
										<!-- <div class="col-12">
											<div class="form-group">
												<label>Image<span>*</span></label>
												<input name="image" type="file" placeholder="" value="{{$data['image']}}">
											</div>	
										</div> -->
										<div class="col-12">
											<div class="form-group">
												<label>Price<span>*</span></label>
												<input name="price" type="text" placeholder="" value="{{$data['price']}}">
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

