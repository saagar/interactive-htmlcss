
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
    <link href="css/yeti.css" rel="stylesheet">
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
          <a class="navbar-brand" href="index.php">Homepage</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="inactive"><a href="index.php">Home</a></li> 
            <li class="active"><a href="htmlappendix.php">HTML Appendix</a></li>         
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div id="side-nav" class="col-sm-2 hidden-xs hidden-sm hidden-print">
      <ul id="sidenavlist" class="nav nav-pills nav-stacked affix">
          <!--
          <li><a href="#tables">Tables</a></li>
          <li><a href="#properties">Company Properties</a>
          <li><a href="#genome">Buyers/Suppliers</a>
          <li><a href="#blog">Recent Blog</a>
          <li><a href="#tests">Total Tests</a>
          <li><a href="#company-bio">Company Bio</a>
          -->
       </ul>
    </div>

    <div id="appendix-content" class="col-xs-12 col-sm-12 col-md-10">
      <div id="htmllist"></div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/handlebars-v1.3.0.js"></script>
    <script type="text/javascript" src="htmlcontent.js"></script>
    <!-- Sample Template -->
    <!--
    <script id="people-template" type="text/x-handlebars-template">
      {{#each people}}
        <div class="person">
          <h2>{{first_name}} {{last_name}}</h2>
          <div class="phone">{{{phone}}}</div>
          <div class="plaintext">{{phone}}</div>
          <div class="email"><a href="mailto:{{email}}">{{email}}</a></div>
          <div class="since">User since {{member_since}}</div>
        </div>
      {{/each}}
    </script>
    -->

    <script id="sidenav-template" type="text/x-handlebars-template">
      {{#each htmlitem}}
        <li><a href="#{{topic}}">{{topic}}</a></li>
      {{/each}}
    </script>

    <script id="html-item-template" type="text/x-handlebars-template">
      {{#each htmlitem}}
        <a id="{{topic}}"></a>
        <h4>{{topic}}</h4>
        <div class="container">
          <p>{{description}}</p>

          <div class="row">
          
            {{! html code }}
            <div class="col-md-6">
              <h4>HTML</h4>
              <pre>
              {{!<textarea class="htmlbox" rows="10" cols="50" readonly>}}
{{html}}     
              {{!</textarea>}}
              </pre>
            </div>
          
            {{! css code}}
            <div class="col-md-6">
              <h4>CSS</h4>
              <pre>
              {{!<textarea class="cssbox" rows="10" cols="50" readonly>}}
{{css}}
              {{!</textarea>}}
              </pre>          
            </div>
          
          </div>
          <br>
          
          {{! buttons }}
          <div class="row">
            <div class="col-md-6">
            <button type="button" class="viewbtn btn btn-success btn-lg">View result</button>
            <button type="button" class="interactbtn btn btn-info btn-lg">Interactive Mode</button>
            </div>
          </div>
          
          {{! result }}
          <div class="displaybox row" style="display: none">
            <div class="jumbotron">
{{{html}}}
            </div>
          </div>

        </div>
      {{/each}}
    </script>

    <script>
      
      $(document).ready(function(){
        // load content via handlebars
        htmllist();
        // load scrollspy
        $("body").scrollspy({target: "#side-nav", offset:50});
        // toggle the content view 
        $(document).on("click", ".viewbtn", function(){
          $(this).parent().parent().parent().children(".displaybox").toggle();
        });
      });

    </script>


  </body>
</html>
