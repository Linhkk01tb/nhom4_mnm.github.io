@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh mục sản phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Trạng thái</th>
            <th style="width:120px;">Quản lý</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lietkedanhmuc as $key => $lk)
          <tr>
            <td>{{$lk->tendanhmuc}}</td>
            <td>{{$lk->mota}}</td>
            <td>
              <?php
              if($lk->trangthai==0){
                echo '<span style="color:green;font-weight:bold; font-size: 18px">Kích hoạt</span>';
              }else{
                echo '<span style="color:red;font-weight:bold; font-size: 18px">Vô hiệu hoá</span>';
              }
              ?>
            </td>
            <td>
              <a href="{{URL::to('/admincp/danhmucsanpham/sua/'.$lk->id_danhmuc)}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a href="{{URL::to('/admincp/danhmucsanpham/xoa/'.$lk->id_danhmuc)}}" onclick="return confirm('Xoá danh mục?')" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-trash text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection