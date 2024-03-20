@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>HomePage_Header...</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/homepage_header')}}" class="btn">Add New Data</a>
				 </div><br>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Header_Title</th>
								<th class="text-center">Header_Subtitle</th>
								<th class="text-center">Header_Desc</th>
								<th class="text-center">Header_Image</th> 
								<th class="text-center">Header_Btn_Txt</th>
								<th class="text-center">Header_Btn_Link</th>
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($headerpage as $headerpage)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text" data-title="Price"><span>{{$headerpage->header_tittle}} </span></td>
                                <td class="text" data-title="Price"><span>{{$headerpage->header_Subtittle}} </span></td>
								<td class="product-des" data-title="Description">
									<p class="product-des">{{$headerpage->header_description}}</p>
								</td>
                                <td class="image" data-title="No"><img src="{{url('images/',$headerpage->header_image)}}" width=100px; alt="#"></td>

								<td class="text" data-title="Price"><span>{{$headerpage->header_btn_text}} </span></td>
								
								<td class="text" data-title="Total"><span>{{$headerpage->header_btn_link}}</span></td>
								<td class="text" data-title="Total"><span>{{$headerpage->updated_at}}</span></td>
								<td class="action" data-title="Remove">
                                    <a href="{{'/delete/'.$headerpage->id}}"><i class="ti-trash remove-icon"></i></a>
                                    <a href="{{'/edithomepage_header/'.$headerpage->id}}"><i class=" ti-eye remove-icon"></i></a>
                                </td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
	<hr>
@endsection