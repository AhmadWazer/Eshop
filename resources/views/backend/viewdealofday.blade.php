@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Deal Of Day</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/adddealofday')}}" class="btn">Add New Data</a>
				 </div><br>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Title</th>
								<th class="text-center">Subtitle</th>
								<th class="text-center">Desc</th>
								<th class="text-center">Image</th> 
								<th class="text-center">price</th>
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($dealpage as $dealpage)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text" data-title="Price"><span>{{$dealpage->title}} </span></td>
                                <td class="text" data-title="Price"><span>{{$dealpage->sub_title}} </span></td>
								<td class="product-des" data-title="Description">
									<p class="product-des">{{$dealpage->description}}</p>
								</td>
                                <td class="image" data-title="No"><img src="{{url('images/',$dealpage->image)}}" width=100px; alt="#"></td>

								<td class="text" data-title="Price"><span>{{$dealpage->price}} </span></td>
								<td class="text" data-title="Total"><span>{{$dealpage->updated_at}}</span></td>
								<td class="action" data-title="Remove">
                                    <a href="{{'/deleteD/'.$dealpage->D_id}}"><i class="ti-trash remove-icon"></i></a>
                                    <a href="{{'/editdealofday/'.$dealpage->D_id}}"><i class=" ti-eye remove-icon"></i></a>
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