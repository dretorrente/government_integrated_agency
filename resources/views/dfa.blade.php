<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DFA</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand"  href="{{url('home')}}">Government Integrated Agency</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('home')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">DFA Procedures and Requirements</h1>

    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="img/dfaform.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">New Application</h4>
                    <p class="card-text">- Requirements</p>
                    <p class="card-text">- Procedures</p>
                    <p class="card-text">- Form</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-xl js-scroll-trigger" href="{{url('dfa2')}}">Open Services</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="img/dfaform.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Passport Renewal</h4>
                    <p class="card-text">- Requirements</p>
                    <p class="card-text">- Procedures</p>
                    <p class="card-text">- Form</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-xl js-scroll-trigger" href="{{url('dfa3')}}">Open Services</a>
                </div>
            </div>
        </div>
        {{--}}
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="img/samplePro.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">Professional Application</h4>
                    <p class="card-text">- Requirements</p>
                    <p class="card-text">- Procedures</p>
                    <p class="card-text">- Form</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-xl js-scroll-trigger" href="{{url('lto4')}}">Open Services</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="img/renew.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">License Renewal</h4>
                    <p class="card-text">- Requirements</p>
                    <p class="card-text">- Procedures</p>
                    <p class="card-text">- Form</p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-xl js-scroll-trigger" href="{{url('renewal')}}">Open Services</a>
                </div>
            </div>
        </div>
        {{--}}
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Government Integrated Agency 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
