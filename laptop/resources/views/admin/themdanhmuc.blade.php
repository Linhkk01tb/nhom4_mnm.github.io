@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm danh mục sản phẩm
                        </header>
                       
                        
                        <div class="panel-body">
                        <?php
                        $message = Session::get('message_them');
                        if($message){
                            echo '<span style="color: Green;font-size: 17px;text-align: center;width:100%;display:block">'. $message.'</span>';
                            $message = Session::put('message_them',null);
                        }
                        ?>
                            <div class="position-center">
                                <form role="form" method="post" action="{{URL::to('admincp/danhmucsanpham/luu')}}">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Tên danh mục</label>
                                    <input type="text" class="form-control" name="tendanhmuc" placeholder="Tên danh mục...">
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea style="resize:none ; " rows="8" class="form-control" name="mota" placeholder="Mô tả..."></textarea>
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