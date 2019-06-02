<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
	@include('admin.layouts.header')
	@include('admin.layouts.sidebar')
    @section('main-content')
        @include('admin.partials._messages')
		@show
	@include('admin.layouts.footer')
</div>
</body>
</html>
