@extends('welcome')
@section('content')		
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($sanpham as $key => $sp)
						<a href="{{URL::to('chitietsanpham/'.$sp->id)}}">
							<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/upload/sanpham/'.$sp->hinhanh)}}" alt="" height="150px" width="300px"/>
										<h4 style="color:orange">{{number_format($sp->dongia).' VNĐ'}}</h4>
										<p style="color: blue; font-size:15px">{{ $sp->tensanpham}}</p>
										<a href="#" class="btn btn-default add-to-cart">Thêm vào giỏ hàng</a>
									</div>
									
								</div>
							</div>
							</div>
						@endforeach
					</div><!--features_items-->
					</a>
@endsection
