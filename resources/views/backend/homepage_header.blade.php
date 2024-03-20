@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
					
				                <div class="title">
									<h3>Add Date in homepage_header</h3>
								</div>
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/homepage_header/view')}}" class="btn ">BACK</a>
									</div>
								</div>

				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/homepage_header')}}">
                                    @csrf
									
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Header_tittle<span>*</span></label>
												<input name="title" type="text" placeholder="" value="">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_subtittle<span>*</span></label>
												<input name="subtitle" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Header_desc<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_image<span>*</span></label>
												<input name="image" type="file" placeholder="">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_btn_text<span>*</span></label>
												<input name="headertext" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label>Header_btn_link<span>*</span></label>
												<input name="headerlink" type="text" placeholder="">
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

