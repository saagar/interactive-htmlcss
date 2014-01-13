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
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Demo Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/yeti.css" rel="stylesheet">
    <link href="css/pygments-manni.css" rel="stylesheet">
    <style type="text/css">
      /*@media (min-width: 980px) { body { padding-top: 120px; } }*/
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <!-- <link href="navbar-static-top.css" rel="stylesheet"> -->
    <link href="css/carousel.css" rel="stylesheet">

  </head>

  <body data-spy="scroll" data-target="#navbar-scroller" data-offset="70">

    <? generateNavbar(); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/5.jpg" alt="First slide">        
          <div class="container">
            <div class="carousel-caption">
              <h1>How do you use tables?</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/6.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Build pages with HTML basics!</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/7.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Style your site with CSS!</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


   <!--  <div id="side-nav" class="col-sm-2 hidden-xs hidden-sm hidden-print">
      <ul id="sidenavlist" class="nav nav-pills nav-stacked affix"></ul>
    </div> -->

    <div class="">
    <div id="appendix-content" class="col-xs-12 col-sm-12 col-md-12">
      <div id="htmllist"></div>
    </div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/handlebars-v1.3.0.js"></script>
    <script type="text/javascript" src="content/htmlcontent.js"></script>

    <script id="sidenav-template" type="text/x-handlebars-template">
      {{#each htmlitem}}
        <li><a href="#{{topic}}">{{topic}}</a></li>
      {{/each}}
    </script>

    <script id="pagenav-template" type="text/x-handlebars-template">
      {{#each htmlitem}}
        <li><a href="#{{topic}}">{{topic}}</a></li>
      {{/each}}
    </script>

    <script id="html-item-template" type="text/x-handlebars-template">
      {{#each htmlitem}}
        <a id="{{topic}}"></a>
        <h3>{{topic}}</h3>
        <div class="row">
          <div class="row">
            <div class="col-md-1"></div>
            <p>{{description}}</p>
          </div>

          <div class="row">
            
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>

            {{! html code }}
            <div class="col-md-4">
              <h4>HTML</h4>
              <pre>
{{html}}     
              </pre>
            </div>
          
            {{! css code}}
            <div class="col-md-4">
              <h4>CSS</h4>
              <pre>
{{css}}
              </pre>          
            </div>
          
          </div>
          <br>
          
          <form action="interact.php" method="post" id="form{{@index}}">
            {{!hidden form inputs}}
            <input type="hidden" name="formid" value="form{{@index}}">
            <textarea style="display:none;" name="htmlbox" rows="10" cols="50" form="form{{@index}}" readonly>{{html}}</textarea>
            <textarea style="display:none;" name="cssbox" rows="10" cols="50" form="form{{@index}}" readonly>{{css}}</textarea>

            {{! buttons }}
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <button type="button" class="viewbtn btn btn-success btn-lg">View result</button>
              <input type="submit" class="interactbtn btn btn-info btn-lg" value="Interactive Mode">
              </div>
            </div>
          </form>
          <br>

          {{! result }}
          <div class="displaybox row" style="display: none">
            <div class="col-md-2"></div>
            {{! center rows }}
            <div class="col-md-8">
              <div class="jumbotron">
{{{html}}}
              </div>
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
        // $("body").scrollspy({target: "#side-nav", offset:50});
        $("body").scrollspy({target: "#nav-bar", offset:50});
        // toggle the content view 
        $(document).on("click", ".viewbtn", function(){
          $(this).parent().parent().parent().parent().children(".displaybox").toggle();
        });
      });

    </script>


  </body>
</html>
