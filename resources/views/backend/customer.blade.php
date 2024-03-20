@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Customer Data</h1><br><br>
		</div>
		<div class="container-fluid">
			<!-- button to go Add new items form -->
                 <!-- <div class="form-group button">
						<a href="{{url('/addproduct')}}" class="btn">Add New Data</a>
				 </div><br> -->
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Custmer</th>
								<th class="text-center">Email</th> 
								<th class="text-center">Phone#</th>
								<th class="text-center">Oder ID</th>
								<th class="text-center">Address</th>
								<th class="text-center">State</th>
								<th class="text-center">Country</th>
								<th class="text-center">Zip Code</th>
								<th class="text-center">Date</th>
								<th class="text-center">Show Details</th>
							</tr>
						</thead>
						<tbody>
						@foreach($oitem as $item)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
								<td class="text" data-title="Price"><span>{{ $item->name }}</span></td>
                                <td class="text" data-title="No"><span>{{ $item->email }} </span></td>
								<td class="text" data-title="Total"><span>{{ $item->phone }}</span></td>
								
                                <td class="text" data-title="Total"><span>{{ $item->order_id }}</span></td>
                                <td class="text" data-title="Price"><span>{{ $item->address }}</span></td>
								<td class="text" data-title="Price"><span> {{ $item->state }}</span></td>
								<td class="text" data-title="Total"><span>{{ $item->country }}</span></td>
                                <td class="text" data-title="Total"><span>{{ $item->zip }}</span></td>
								<td class="text" data-title="Total"><span>{{ $item->created_at }}</span></td>

								<td class="action" data-title="Remove">
                                    <a href="{{url('/orderdetail', $item->order_id)}}"><i class=" ti-eye remove-icon"></i></a>
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