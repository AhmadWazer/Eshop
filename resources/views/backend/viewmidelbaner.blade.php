@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Middle Baner</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/addmiddlebaner')}}" class="btn">Add New Data</a>
				 </div><br>
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th class="text-center">#</th>
								<th class="text-center">title</th>
								<th class="text-center">Subtitle</th>
								<th class="text-center">Image</th> 
								<th class="text-center">btn</th>
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($Sitem as $item)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text" data-title="Price"><span>{{$item->M_title}} </span></td>
								<td class="text" data-title="Price"><span>{{$item->M_subtitle}} </span></td>

                                <td class="image" data-title="No"><img src="{{url('images/',$item->M_image)}}" width=100px; alt="#"></td>

								<td class="text" data-title="Price"><span>{{$item->M_btn}} </span></td>
								<td class="text" data-title="Total"><span>{{$item->updated_at}}</span></td>
								<td class="action" data-title="Remove">
                                    <a href="{{'/deletemiddle/'.$item->M_id}}"><i class="ti-trash remove-icon"></i></a>
                                    <a href=""><i class=" ti-eye remove-icon"></i></a>
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