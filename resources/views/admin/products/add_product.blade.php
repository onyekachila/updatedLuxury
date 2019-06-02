@extends('admin.layouts.app')

@section('main-content')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>

	      <small>Add Products Here</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
	      <li><a href="#">Add</a></li>
	      <li class="active">Products</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Products</h3>
	          </div>

	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('saveproduct') }}" method="post" enctype="multipart/form-data">
              <p class=" alert-danger">
              <?php
                $exception=Session::get('exception');
                if ($exception)
                {
                    echo $exception;
                    Session::put('exception',null);
                }
                ?>
              </p>

	          {{ csrf_field() }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <label for="name">Product Name</label>
	                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="product name" required>
	              </div>

                <div class="form-group">
                <select class="form-control" name="category_id" id="category_id" required>
					<option>Select Category</option>
                    <?php
                        $categories = DB::table('categories')->get();
                        echo "$categories";
                        foreach($categories as $category){?>
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                        <?php
                    }
                    ?>
                </select>
                </div>

              <div class="form-group">
	                <label for="name">Product Description</label>
	                <input type="text" class="form-control" id="product_description" name="product_description" placeholder="product description" required>
	              </div>

                  <div class="form-group">
	                <label for="name">Product Price</label>
	                <input type="text" class="form-control" id="product_price" name="product_price" placeholder="product price" required>
	              </div>

                  <div class="form-group">
	                <label for="name">Product Size</label>
	                <input type="text" class="form-control" id="product_size" name="product_size" placeholder="product size" required>
	              </div>

                  <div class="form-group">
	                <label for="name">Product Color</label>
	                <input type="text" class="form-control" id="product_color" name="product_color" placeholder="product color" required>
	              </div>

                  <div class="form-group">
	                <label for="name">Product Image</label>
	                <input type="file" class="form-control" id="featured_img" name="featured_img" placeholder="product image" required>
	              </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='#' class="btn btn-warning">Back</a>
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
