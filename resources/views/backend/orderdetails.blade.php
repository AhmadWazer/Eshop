@extends('backend.layout.main')

@section('main.container')

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Order Details</h1><br><br>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">Name</th>
								<th class="text-center">Image</th>
								<th class="text-center">Quantity</th>
								<th class="text-center">Price</th> 
							</tr>
						</thead>
						@foreach($data as $item)
						<tbody>
							<tr>
                                <td class="text text-center" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text text-center" data-title="Price"><span>{{ $item->product_name }}</span></td>
                                <td class="text text-center" data-title="Price"><img src="{{url('images/',$item->product_image)}}" width=100px;></td>
								<td class="text text-center" data-title="Price"><span>{{ $item->quantity }}</span></td>
								<td class="text text-center" data-title="Price"><span>${{ $item->price }}</span></td>
							</tr>
						</tbody>
						@endforeach
					</table>
                </div>
    			<div class="col-12">
                    <br>
                    <ul>
                        <li><b>Cart Subtotal:</b><span>  ${{ $item->subtotal }}</span></li>
                        <br>
                        <li><b>Discount:</b><span>  ${{ $item->discount }}</span></li>
                        <br>
                        <li><b>You Pay:</b><span>  ${{ $item->grandtotal }}</span></li>
                    </ul>
				
                    <br>
                    <a class="btn btn-danger" type="button">place new order</a>
                    <a class="btn btn-succes"type="button"href="{{ url('/customer') }}">view all orders</a>
                    <br><br>
					<!--/ End Shopping Summery -->
                </div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
@endsection