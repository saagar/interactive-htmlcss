<?
  require_once("helpers.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HTML and CSS Interactive Viewer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/yeti.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <style type="text/css">
      @media (min-width: 980px) { body { padding-top: 60px; } }
    </style>

  </head>

  <body>

  <? generateNavbar(); ?>

    <div class="container">

      <div class="row">
        
        <div class="col-md-6">
          HTML<br>
          <textarea id="htmlbox" rows="10" cols="50"><!-- Place HTML here! -->
          <?
            if (isset($_POST["formid"])) {
              echo $_POST["htmlbox"];
            }
            else {
print '
<h1> This is an h1 tag! </h1>
<h2> This is an h2 tag! </h2>
<p> This is a p tag! </p>';

            }
          ?>
          </textarea>
        </div>

        <div class="col-md-6">
          CSS<br>
          <textarea id="cssbox" rows="10" cols="50">/* Place CSS here! */
            <?
            if (isset($_POST["formid"])) {
              echo $_POST["cssbox"];
            }
            else {
print '
h1 {background-color:#6495ed;color:sienna;}';

            }
          ?>

          </textarea>
          
        </div>
      </div>
      <div class="col-md-5"></div>
      <div class="col-md-2">
        <input id="tryitbutton" type="submit" value="Try it!">
      </div>
      <div class="col-md-5"></div>
    </div> <!-- /container -->
    
    <div style="margin:25px;">
      <div div id="demoarea">
      Your demo will appear here!
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      function interact(){
        var html_str = $("#htmlbox").val();
        var css_str = $("#cssbox").val();
        $('div#demoarea').html('<style>'+ css_str+'</style>');
        $("div#demoarea").append(html_str);
      }

      $(document).ready(function(){
        // setup the event handler for try it button
        $(document).on("click", "#tryitbutton", interact);
      });
    </script>

    <? // load if $_POST sent ?>
    <?php if (isset($_POST["formid"])) : ?>
    <script type='text/javascript'>
       <?//Code runs ONLY if $test_details['done_test'] is empty?>
       $(document).ready(function(){
         interact();
       });
    </script>
    <?php endif; ?>

  </body>
</html>
