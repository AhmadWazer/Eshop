@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Product</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/addproduct')}}" class="btn">Add New Data</a>
				 </div><br>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Name</th>
								<th class="text-center">Price</th>
								<th class="text-center">Image</th> 
								<th class="text-center">Brand-name</th>
								<th class="text-center">ctgry-name</th>
								<th class="text-center">subc-name</th>
								<th class="text-center">Description</th>
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($product as $item)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text" data-title="Price"><span>{{$item->product_name}} </span></td>
								<td class="text" data-title="Price"><span>{{$item->product_price}} </span></td>

                                <td class="image" data-title="No"style="width:100px"><img src="{{url('images/',$item->product_image)}}" alt="#"></td>

								<td class="text" data-title="Price"><span>{{$item->brand_name}} </span></td>
								<td class="text" data-title="Total"><span>{{$item->ctgry_name}}</span></td>
                                <td class="text" data-title="Total"><span>{{$item->subc_name}}</span></td>
								<td class="text" data-title="Total"><span>{{$item->description}}</span></td>
                                <td class="text" data-title="Total"><span>{{$item->created_at}}</span></td>

								<td class="action" data-title="Remove">
                                    <a href="{{'/deleteproduct/'.$item->product_id}}"><i class="ti-trash remove-icon"></i></a>
                                    <a href="{{'/editproduct/'.$item->product_id}}"><i class=" ti-eye remove-icon"></i></a>
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