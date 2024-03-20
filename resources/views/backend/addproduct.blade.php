@extends('backend.layout.main')
@section('main.container')

            <section id="contact-us" class="contact-us section">
		        <div class="container">
					
				<div class="title text-center">
									<h3>Add Product</h3>
								</div>
								<div class="col-12">
									<div class="form-group button">
                                        <a href="{{url('/product')}}" class="btn">BACK</a>
									</div>
								</div>
				    <div class="contact-head">
						<div class=" col-12">
							<div class="form-main">
								<form class="form" method="post" enctype="multipart/form-data" action="{{url('/addproduct/save')}}">
                                    @csrf
									<div class="">
										<div class="col-12">
											<div class="form-group">
												<label for="name">Name<span>*</span></label>
												<input name="name"id="name" type="text" autocomplete="given-name">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="image">Image<span>*</span></label>
												<input name="image"id="image" type="file">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="price">Price<span>*</span></label>
												<input name="price" id="price" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="dec">Description<span>*</span></label>
												<textarea name="dec" id="dec" type="text" ></textarea>
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="className">Brand ID<span>*</span></label><br>
                                                <select name="bid" id="className" type="text" required>
                                                    <option ></option>
                                                    @foreach($brand as $brand)
                                                    <option name="option" value='{{ $brand->brand_id}}'>   
                                                        {{ $brand->brand_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>	
									    </div>
                                        <br><br>
										<div class="col-12">
											<div class="form-group">
												<label for="categorySelect">Category ID<span>*</span></label><br>
                                                <select name="cid" id="categorySelect" required>
                                                    <option ></option>
                                                    @foreach($category as $cItem)
                                                    <option name="option" id="{{ $cItem->ctgry_id}}" value='{{ $cItem->ctgry_id}}'>   
                                                        {{ $cItem->ctgry_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>	
									    </div>
                                        <br><br>
										<div class="col-12">
											<div class="form-group">
												<label for="subcategorySelect">SubCategory ID<span>*</span></label><br>
                                                <select name="scid" id="subcategorySelect">
						
												</select>
                                            </div>	
									    </div><br><br>
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

			<script>
    $(document).ready(function () {
        // Listen for changes in the category dropdown
        $('#categorySelect').on('change', function () {
            var categoryId = $(this).val();
            // alert(categoryId);
            // Make an AJAX request to get subcategories based on the selected category
            $.ajax({
                type: 'GET',
                url: '{{ route("get.subcategories") }}',
                data: {
                    ctgry_id: categoryId
                },
                success: function (response) {
					console.log(response);

					// console.log(response[0].subc_name);
                    // // Clear the subcategory dropdown
                    // $('#subcategorySelect').empty();
                    // $('#subcategorySelect').append('<option >Select Subcategory</option>');
					$('#subcategorySelect').css('display', 'block');
                    // Populate the subcategory dropdown with received data
                    $.each(response, function (key, subcategory) {
						// console.log('here');
						$('#subcategorySelect').append('<option value="' + subcategory.subc_id + '">' + subcategory.subc_name + '</option>');
                    });
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });
    });
</script>

@endsection
