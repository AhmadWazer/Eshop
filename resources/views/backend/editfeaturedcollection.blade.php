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
									<h3>Edit Date in Featured Collection</h3>
								</div>
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/updatefc')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$data['FC_id']}}">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Tittle<span>*</span></label>
												<input name="title" type="text" placeholder="" value="{{$data['title']}}">
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
												<label>btn_text<span>*</span></label>
												<input name="btn_txt" type="text" placeholder="" value="{{$data['btn_text']}}">
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

