@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>

	      <small>Add Categories Here</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="#">Add</a></li>
	      <li class="active">Categories</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Categories</h3>
	          </div>
	    		@include('includes.messages')
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('addcategory') }}" method="post">
	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Category Name</label>
	                <input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
	              </div>

	              <div class="form-group">
	                <label for="slug">Category Slug</label>
	                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
	              </div>



              <!-- <div class="form-group">
              <label for="name">Enable</label>
                &nbsp;<input type="checkbox" name="status" id="status" value="1">
                </div>
 -->

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('viewcategory') }}' class="btn btn-warning">Back</a>
	            </div>

	            </div>

				</div>

	          </form>
	        </div>
	        <!-- /.box -->


	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection
