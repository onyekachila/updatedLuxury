@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>

      <small>List of products</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">List</a></li>
      <li class="active">products</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>
        <a class='btn btn-success pull-left' href="{{ route('addcategory') }}">Add New</a>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Color</th>
                          <th>Category</th>
                          <th>Product Image</th>
                          <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_product as $v_products)
                          <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $v_products->product_name }}</td>
                            <td>{{ $v_products->product_price }}</td>
                            <td>{{ $v_products->product_color }}</td>
                            <td>{{ $v_products->category_id }}</td>
                            <td><img src="{{ asset('admin/images/' . $v_products->product_image)}}" style="height: 80px; width: 80px"></td>

                            <td>
                                <a href="{{ route('editproduct', $v_products->id) }}"><span class="btn btn-info">Edit</span></a>

                                <form id="delete-form-{{ $v_products->id }}" method="post" action="{{ route('deleteproduct', $v_products->id) }}" style="display: none">

                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $v_products->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" ><span class="btn btn-danger">Delete</span></a>
                            </td>

                            </tr>
                          </tr>
                        @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
