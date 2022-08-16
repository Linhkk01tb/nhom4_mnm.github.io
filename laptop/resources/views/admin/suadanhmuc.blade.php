@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa danh mục sản phẩm
                        </header>
                       
                        
                        <div class="panel-body">
                    
                            <div class="position-center">
                                @foreach($suadanhmuc as $key => $sua)
                                <form role="form" method="post" action="{{URL::to('/admincp/danhmucsanpham/capnhat/'.$sua->id_danhmuc)}}">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Tên danh mục</label>
                                    <input type="text" class="form-control" value="{{$sua->tendanhmuc}}" name="tendanhmuc">
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <textarea style="resize:none ; " rows="8" class="form-control" name="mota" >{{$sua->mota}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Trạng thái</label>
                                    <br>
                                    <select name="trangthai" class="form-control">
                                        <?php
                                         if($sua->trangthai==0){

                                         
                                        ?>
                                        <option selected value="0">Kích hoạt</option>
                                        <option value="1">Vô hiệu hoá</option>
                                        <?php
                                         } else{

                                         
                                        ?>
                                        <option value="0">Kích hoạt</option>
                                        <option selected value="1">Vô hiệu hoá</option>
                                        <?php
                                         }
                                         ?>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-info">Sửa</button>
                                <br>
                            </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>

</div>
@endsection