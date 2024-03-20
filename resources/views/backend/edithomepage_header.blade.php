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
									<h3>Edit Date in homepage_header</h3>
								</div>
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/update')}}">
                                    @csrf
                                       <input type="hidden" name="id" value="{{$data['id']}}">
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Header_tittle<span>*</span></label>
												<input name="title" type="text" value="{{$data['header_tittle']}}">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_subtittle<span>*</span></label>
												<input name="subtitle" type="text" value="{{$data['header_Subtittle']}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Header_desc<span>*</span></label>
												<textarea name="message" type="text" value="">{{$data['header_description']}}</textarea>
											</div>
										</div>
										<!-- <div class="col-12">
											<div class="form-group">
												<label>Header_image<span>*</span></label>
												<input name="image" class="image" type="file" value="{{$data['header_image']}}" requride>
											</div>
										</div> -->
										<div class="col-12">
											<div class="form-group">
												<label>Header_btn_text<span>*</span></label>
												<input name="headertext" type="text" value="{{$data['header_btn_text']}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_btn_link<span>*</span></label>
												<input name="headerlink" type="text" value="{{$data['header_btn_link']}}">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Save</button>
                                                <button href="{{url('/homepage_header/view')}}" class="btn ">Cancle</button>
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
