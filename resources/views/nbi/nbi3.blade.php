<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NBI</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand"  href="{{url('home')}}">Government Integrated Agency</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('national_bureau')}}">NBI Service
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
        <h1 class="display-4">NBI Clearance: Online Application, Requirements, Fees and Processing</h1>

    </header>
    <img style="margin: auto;" src="../img/online.png">
    <div class="body">
        <br/>
        <h2 class="title">Requirements</h2>
        <p>
        <p> here’s the step by step guide on how to apply for NBI Clearance.
        <p> 1. Go to the <a href="http://www.techyhow.com/national-bureau-of-invesigation-clearance-nbi-application-and-registration-online/">NBI website</a> www.doj.gov.ph/nbi or www.nbi.gov.ph.

        <p> 2. Completely fill out the detailed form for the online application. Provide correct and valid information throughout the process. The drop-down menu also has the necessary details for your application.

        <p> Once done, click the submit button. Another page will open up and it will let you fill out the form for you contact details and family background. Be sure to provide valid information for these fields, more importantly, the e-mail address since they will be sending a confirmation message for your application there. Click Submit.

        <p> The processing fee ranges from P115 to P415, depending on the purpose of the transaction. Here are the list of valid IDs that you can present:

        <p> • Voter’s ID
        <p> • Valid passport
        <p> • SSS ID
        <p> • GSIS UMID
        <p> • Postal ID
        <p> • Driver’s License
        <p> • PRC License
        <p> • TIN ID
        <p> • School ID
        <p> • Philhealth ID
        <p> • Alien Certification of Registration
        <p> • Senior Citizen

        <p> 3. Print out the form after successfully registering online. Secure the registration code since you’ll be needing it for future use.
        <p> nbi-online-form

        <p> 4. Go to the nearest NBI Clearance center and provide two valid IDs, registration code and the payment for your clearance.

        <p> 5. Proceed to the area for image taking and fingerprint biometrics.

        <p> 6. ‘No Hit’ applicants, means you have no criminal records, you can now proceed to the printing area and get your NBI Clearance. For ‘With Hit’ applicants, you will need to come back as advised by the clerk for your receipt.

        <p> In case you are advised to proceed to the Quality Control Section, you will need to be reviewed by the interviewer before the issuance of the NBI Certificate.


        </p>
    </div>
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card" style="height: 388px;">
                <img class="card-img-top" src="../img/online.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">CLEARANCE APPLICATION FORM</h4>
                </div>
                <div class="card-footer">
                    <a href="{{asset('file/nbiform.pdf')}}" class="btn btn-primary" target="__blank">Download Form</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <form action="{{route('nbiUpload')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-lg-12">
                        <h4>Please Upload your files here.</h4>
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-primary">
                                    Browse&hellip; <input type="file" name="file" style="display: none;" multiple>
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly style="height: 38px">
                            <input type="hidden" name="class" value="Online Application">
                        </div>
                        <span class="help-block">
                            Make sure that you fill up all required fields.
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color:#0062cc">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Government Integrated Agency 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<script type="text/javascript">
    $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
</script>