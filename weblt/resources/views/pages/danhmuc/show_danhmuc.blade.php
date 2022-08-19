@extends('welcome')
@section('content')		
<div class="features_items"><!--features_items-->
                        @foreach($danhmuc_tenhienthi as $key => $tenhienthi)
						<h2 class="title text-center">{{$tenhienthi->tendanhmuc}}</h2>
                        @endforeach
						@foreach($danhmuc_theo_id as $key => $sp)
                        <a href="{{URL::to('chitietsanpham/'.$sp->id)}}">
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/upload/sanpham/'.$sp->hinhanh)}}" width="300px" height="150px" alt="" />
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
