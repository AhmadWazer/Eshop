@extends('backend.layout.main')
@section('main.container')
<body class="js">
<!-- Shopping Cart -->
            <section id="contact-us" class="contact-us section">
		        <div class="container">
								<div class="title text-center">
									<h3>Add SubCategory</h3>
								</div>
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/subcategory')}}" class="btn ">BACK</a>
									</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/addsubcategory/save')}}">
                                    @csrf
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label>Name<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>	
										</div>
                                        
										<div class="col-12">
											<div class="form-group">
												<label>Category ID<span>*</span></label><br>
                                                <select name="cid" id="className" required>
                                                    <option ></option>
                                                    @foreach($category as $Item)
                                                    <option name="option" value='{{ $Item->ctgry_id}}'>   
                                                        {{ $Item->ctgry_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>	
									    </div>
                                        <br><br>
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

