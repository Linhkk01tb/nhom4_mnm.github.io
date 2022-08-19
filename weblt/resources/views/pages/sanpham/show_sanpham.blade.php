@extends('welcome')
@section('content')
@foreach($chitietsp as $key => $dtl)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/upload/sanpham/'.$dtl->hinhanh)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
                                  <img src="{{asset('public/frontend/images/nhohon.jpg')}}" width="20px" height="20px" alt="" />
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
                                  <img src="{{asset('public/frontend/images/lonhon.jpg')}}" width="20px" height="20px" alt="" />
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
								
								<span>
								<p style="color:blue;font-weight:bold;font-size:30px">{{$dtl->tensanpham}}</p>
									<span>Giá: {{number_format($dtl->dongia).' VNĐ'}}</span>
                                    <br>
									<br>
									<br>
									<label>Số lượng:</label>
									<input type="number" value="1" min="1" />
                                    
									<button type="button" class="btn btn-fefault cart">
									Thêm vào giỏ
									</button>
								</span>
								
								
							
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
@endforeach
                    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Chi tiết</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{{$dtl->mota}}</p>	
							</div>
						</div>
					</div><!--/category-tab-->
                   <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach($sp_lienquan as $key => $lq)	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('public/upload/sanpham/'.$lq->hinhanh)}}" width="300px" height="150px" alt="" />
													<h4 style="color:orange">{{number_format($lq->dongia).' VNĐ'}}</h4>
													<p style="color: blue; font-size:15px">{{ $lq->tensanpham}}</p>
													<a href="#" class="btn btn-default add-to-cart">Thêm vào giỏ hàng</a>
												</div>
											</div>
										</div>
										
									</div>
									@endforeach
								</div>
							</div>
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev" style="text-decoration: none;">
								<
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next" style="text-decoration: none;">
                              	>
							  </a>			
						</div>
					</div><!--/recommended_items--> 	
@endsection