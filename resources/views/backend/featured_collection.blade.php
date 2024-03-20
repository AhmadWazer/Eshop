@extends('backend.layout.main')
@section('main.container')
<hr>
	<div class="shopping-cart section">
		<div class="text-center">
		<h1>Reatured_Collection...</h1>
		</div>
		<div class="container">
			<!-- button to go Add new items form -->
                 <div class="form-group button">
						<a href="{{url('/featuredcollection')}}" class="btn">Add New Data</a>
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
								<th class="text-center">Btn_Txt</th>
								<th class="text-center">Date</th>
								<th class="text-center">Image</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($collectionpage as $items)
							<tr>
                                <td class="text"><span>{{ $loop->iteration }}</span></td>
                                <td class="text"><span>{{$items->title}}</span></td>
                                <td class="text"><span>{{$items->sub_title}} </span></td>
								<td class="text"><span>{{$items->btn_text}} </span></td>
								<td class="text"><span>{{$items->updated_at}}</span></td>
								<td class="image" data-title="No"><img src="{{url('images/',$items->image)}}" width=100px; alt="#"></td>
								<td class="action"data-title="Remove">
                                    <a href=""><i class="ti-trash remove-icon"></i></a>
                                    <a href="{{'/editfeaturedcollection/'.$items->FC_id}}"><i class=" ti-eye remove-icon"></i></a>
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

    @endsection