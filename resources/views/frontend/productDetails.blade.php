<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Details</title>
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
	
<div class="container mt-5 pt-5">
<a type="button" class="mb-3 btn btn-outline-warning" href="/fproduct"><-BACK</a>
<br>
@foreach($data as $products)
<div class=" mb-3" style="max-width: 1090px; max-height:295px">
  <div class="row g-0" style="width:1090px; height:295px">
    <div class="col-md-4">
      <img src="{{asset('images/'.$products->product_image)}}"style=" max-height:295px" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body p-3 m-3">
        <h5 class="card-title"><b class="text-primary">Product:</b> <i>{{$products->product_name}}</i></h5><br>
		<h5 class="card-title"><b class="text-primary">Brand:</b>   <i>{{$products->brand_name}}</i></h5><br>
        <h5 class="card-title"><b class="text-primary">Category:</b> <i>{{$products->ctgry_name}}</i></h5><br>
        <h5 class="card-title"><b class="text-primary">Sub-Category:</b> <i>{{$products->subc_name}}</i></h5><br>
        <h5 class="card-title"><b class="text-primary">Price:</b> <i>{{$products->product_price}}</i></h5>
      </div>
    </div>
  </div>
</div>
<br>
        <h5 class="card-title"><b class="text-primary">Description:</b></h5>
        <p class="card-text m-2">{{$products->description}}</p>
@endforeach
</div>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>








</body>
</html>