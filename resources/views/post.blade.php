@extends('user/app')

@section('head')
    <link href="{{ asset('blog/css/normalize.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('blog/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/bootstrap/css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('blog/bootstrap/fonts/glyphicons-halflings-regular.eot') }}" rel="stylesheet">

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('blog/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <script src="{{ asset ('blog/bootstrap/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts - Change if needed -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Menu shrinking -->
    <script type="text/javascript" src="{{ asset('js/menu.js') }}"></script>

    <!-- Main styles of this template -->
    <link href="{{ asset('blog/css/style.min.css?v=1.0.0') }}" rel="stylesheet">

    <!-- Custom CSS. Input here your changes -->
    <link href="{{ asset('blog/css/custom.css') }}" rel="stylesheet">

@endsection

@section('main-content')






    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-md-12">
                    <div class="blog-listing">
                        <article>
                            <img class="img-thumbnail" src="http://placehold.it/1280x500">
                            <h2>Post Format Image</h2>
                            <hr class="title-underline">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                <hr>
                            </div>
                        </article>
                        <article class="post-video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/177466730?color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <h2>Post Format - Video</h2>
                            <hr class="title-underline">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...
                            </p>
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                <hr>
                            </div>
                        </article>

                        <ul class="pagination pagination-lg">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')

<!-- Loads Bootstrap Main JS -->
<script src="{{ asset('blog/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('blog/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>



@endsection

