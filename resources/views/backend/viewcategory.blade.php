@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Category</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/addcategory')}}" class="btn">Add New Data</a>
				 </div><br>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Name</th>
								<th class="text-center">Image</th> 
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($citem as $item)
							<tr>
                                <td class="text text-center" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text text-center" data-title="Price"><span>{{$item->ctgry_name}} </span></td>

                                <td class="image text-center" data-title="No"><img src="{{url('images/',$item->ctgry_image)}}" width=100px; alt="#"></td>

                                <td class="text text-center" data-title="Total"><span>{{$item->created_at}}</span></td>

								<td class="action" data-title="Remove">
                                    <a name="" href="{{'/deletecategory/'.$item->ctgry_id}}"><i class="ti-trash remove-icon"></i></a>
                                    <a href="{{'/editcategory/'.$item->ctgry_id}}"><i class=" ti-eye remove-icon"></i></a>
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