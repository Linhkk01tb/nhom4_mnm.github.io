@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm sản phẩm
                        </header>
                       
                        
                        <div class="panel-body">
                        <!-- <?php
                        $message = Session::get('message_them');
                        if($message){
                            echo '<span style="color: Green;font-size: 17px;text-align: center;width:100%;display:block">'. $message.'</span>';
                            $message = Session::put('message_them',null);
                        }
                        ?> -->
                            <div class="position-center">
                                <form role="form" method="post" action="{{URL::to('admincp/sanpham/luu')}}">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm...">
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea style="resize:none ; " rows="8" class="form-control" name="mota" placeholder="Mô tả..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Đơn giá</label>
                                    <input type="text" class="form-control" name="dongia" placeholder="Đơn giá...">
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng</label>
                                    <input type="text" class="form-control" name="soluong" placeholder="Số lượng...">
                                </div>
                                <div class="form-group">
                                    <label for="">Hình ảnh</label>
                                    <input type="file" class="form-control" name="hinhanh" >
                                </div>
                                <div class="form-group">
                                    <label for="">Danh mục sản phẩm</label>
                                    <br>
                                    <select name="danhmuc" class="form-control">
                                        @foreach($danhmuc as $key => $dm)
                                        <option>{{$dm->tendanhmuc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <br>
                                    <select name="trangthai" class="form-control">
                                        <option value="0">Kích hoạt</option>
                                        <option value="1">Vô hiệu hoá</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-info">Thêm</button>
                                <br>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>

</div>
@endsection