@extends('backend.layout.main')

@section('main.container')

<body class="js">
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Blogs</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/addblog')}}" class="btn">Add New Data</a>
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
								<th class="text-center">Image</th> 
								<th class="text-center">Dtitle</th>
								<th class="text-center">Date</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
                        @foreach($blog as $blogs)
							<tr>
                                <td class="text" data-title="Price"><span>{{ $loop->iteration }}</span></td>
                                <td class="text" data-title="Price"><span>{{$blogs->B_title}} </span></td>
                                <td class="text" data-title="Price"><span>{{$blogs->B_title}} </span></td>
                                <td class="image" data-title="No"><img src="{{url('images/',$blogs->B_image)}}" width=100px; alt="#"></td>

								<td class="text" data-title="Price"><span>{{$blogs->B_Ttitle}} </span></td>
								<td class="text" data-title="Total"><span>{{$blogs->updated_at}}</span></td>
								<td class="action" data-title="Remove">
                                    <a href="{{'/deleteblog/'.$blogs->B_id}}"><i class="ti-trash remove-icon"></i></a>
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