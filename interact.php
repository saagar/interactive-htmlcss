<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="navbar-static-top.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Interactive Demo</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>            
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">

      <div class="row">
        
        <div class="col-md-6">
          <h1>HTML</h1>
          <textarea id="htmlbox" rows="10" cols="50"><!-- Place HTML here! -->
<h1> Hello World! </h1>
<h2> Hello World! </h2>
<p> BLAH </p>
          </textarea>
        </div>

        <div class="col-md-6">
          <h1>CSS</h1>
          <textarea id="cssbox" rows="10" cols="50">/* Place CSS here! */
h1 {background-color:#6495ed;color:sienna;}
          </textarea>
          
        </div>
      </div>
      <div class="col-md-5"></div>
      <div class="col-md-2">
        <input id="tryitbutton" type="submit" value="Try it!">
      </div>
      <div class="col-md-5"></div>
    </div> <!-- /container -->
    
    <div id="demoarea" style="margin:25px;">
    DEMO AREA
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function()
      {
        $("#tryitbutton").click(
          function(){
            var html_str = $("#htmlbox").val();
            var css_str = $("#cssbox").val();
            alert(html_str);
            $('div#demoarea').html(
                '<style>'+
                // 'hr {color:sienna;}\
                // h1 {color:sienna;}\
                // p {margin-left:20px;}\
                // body {background-color:blue;}'
                css_str
                +'</style>'
            );
            $("div#demoarea").append(html_str);
          }
        );
      }
      );
    </script>
  </body>
</html>
