@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
					
				<div class="title text-center">
									<h3>Edit Product</h3>
								</div>
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/product')}}" class="btn">BACK</a>
									</div>
								</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data->product_id}}">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Name<span>*</span></label>
												<input name="name" type="text" value="{{$data->product_name}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Image<span>*</span></label>
												<input name="image" type="file" required>
											</div>	
										</div>
										<div class="col-6">
											<div class="form-group">
												<img src="{{asset('images/'.$data->product_image)}}" alt="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Price<span>*</span></label>
												<input name="price" type="text" value="{{$data->product_price}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="dec">Description<span>*</span></label>
												<textarea name="dec"  type="text" value="" >{{$data->description}}</textarea>
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Brand<span>*</span></label><br>
                                                <select name="brand" id="className" required>
                                                    <option name="option" value=''>{{ $data->brand_name }}</option>
													@foreach($brand as $item)
													  <option name="option" value='{{$item->brand_id}}'>{{ $item->brand_name }}</option>
													@endforeach
                                                </select>
                                            </div>	
									    </div>
										<br><br>
										<div class="col-12">
											<div class="form-group">
												<label>Category<span>*</span></label><br>
                                                <select name="cate" id="className" required>
                                                    <option name="option" value=''>{{ $data->ctgry_name }}</option>
													@foreach($category as $item)
													  <option name="option" value='{{$item->ctgry_id}}'>{{ $item->ctgry_name }}</option>
													@endforeach
                                                </select>
                                            </div>	
									    </div>
										<br><br>
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

