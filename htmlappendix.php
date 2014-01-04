
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Demo Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/pygments-manni.css" rel="stylesheet">


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
          <a class="navbar-brand" href="#">Homepage</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>            
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">
    <!-- DESCRIPTION AREA -->
      This is an example of how to create a table in html.
      <div class="row">
      <!-- HTML CODE AREA -->
        <div class="col-md-6">
	        <h4>HTML</h4>
			<textarea class="htmlbox" rows="10" cols="50" readonly>
<table border="1">
<tr>
<td>row 1, cell 1</td>
<td>row 1, cell 2</td>
</tr>
<tr>
<td>row 2, cell 1</td>
<td>row 2, cell 2</td>
</tr>
</table>
        	</textarea>

        </div>
        <!-- CSS CODE AREA -->
        <div class="col-md-6">
          <h4>CSS</h4>
			<textarea class="cssbox" rows="10" cols="50" readonly>
/* CSS goes here! */
        	</textarea>          
        </div>

      </div>
      <br>
      <div class="row">
			<button type="button" class="viewbtn btn btn-success btn-lg">View result</button>
			<button type="button" class="interactbtn btn btn-info btn-lg">Interactive Mode</button>
      </div>
      <!-- RESULT AREA -->
      <div class="displaybox row" style="display: none">
      	<div class="jumbotron">
			<table border="1">
				<tr>
				<td>row 1, cell 1</td>
				<td>row 1, cell 2</td>
				</tr>
				<tr>
				<td>row 2, cell 1</td>
				<td>row 2, cell 2</td>
				</tr>
			</table>
      	</div>
      </div>
     </div>

     <div class="container">
    <!-- DESCRIPTION AREA -->
      This is an example of how to create a table in html.
      <div class="row">
      <!-- HTML CODE AREA -->
        <div class="col-md-6">
	        <h4>HTML</h4>
			<textarea class="htmlbox" rows="10" cols="50" readonly>
<table border="1">
<tr>
<td>row 1, cell 1</td>
<td>row 1, cell 2</td>
</tr>
<tr>
<td>row 2, cell 1</td>
<td>row 2, cell 2</td>
</tr>
</table>
        	</textarea>

        </div>
        <!-- CSS CODE AREA -->
        <div class="col-md-6">
          <h4>CSS</h4>
			<textarea class="cssbox" rows="10" cols="50" readonly>
/* CSS goes here! */
        	</textarea>          
        </div>

      </div>
      <br>
      <div class="row">
			<button type="button" class="viewbtn btn btn-success btn-lg">View result</button>
			<button type="button" class="interactbtn btn btn-info btn-lg">Interactive Mode</button>
      </div>
      <!-- RESULT AREA -->
      <div class="displaybox row" style="display: none">
      	<div class="jumbotron">
			<table border="1">
				<tr>
				<td>row 1, cell 1</td>
				<td>row 1, cell 2</td>
				</tr>
				<tr>
				<td>row 2, cell 1</td>
				<td>row 2, cell 2</td>
				</tr>
			</table>
      	</div>
      </div>
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
            $("div#demoarea").html(html_str);
            $('head').append(
                '<style>'+
                css_str
                +'</style>'
            );
          }
        );
      }
      );
    </script>
    <script>
		$( ".viewbtn" ).click(function() {
		  $(this).parent().parent().children(".displaybox").toggle();
		});
	</script>
  </body>
</html>
