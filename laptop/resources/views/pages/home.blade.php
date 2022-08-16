@extends('welcome')
@section('content')		
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($sanpham as $key => $sp)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/frontend/images/'.$sp->hinhanh)}}" alt="" />
										<h2>{{number_format($sp->dongia).' VNĐ'}}</h2>
										<p>{{ $sp->tensanpham}}</p>
										<a href="#" class="btn btn-default add-to-cart">Thêm vào giỏ hàng</a>
									</div>
									
								</div>
							</div>
						</div>
						@endforeach
					</div><!--features_items-->
					
 @endsection