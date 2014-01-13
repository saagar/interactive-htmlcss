<?

	function generateNavbar(){
		// get the nav json
		$nav_json = file_get_contents("nav.json");

		// start nav
		print '<div class="navbar navbar-default navbar-fixed-top" role="navigation">';
		print '<div class="container">';
		print '<div class="navbar-collapse collapse">';
		print '<ul class="nav navbar-nav">';

		$nav_array = json_decode($nav_json, true);

		// print out the items in the array
		foreach ($nav_array as $navitem) {
			// check if dropbox
			if (isset($navitem["dropdown"])){
				print '<li class="dropdown">';
				print '<a href="'.$navitem["link"].'" class="dropdown-toggle" data-toggle="dropdown">'.$navitem["name"].' <b class="caret"></b></a>';
				print '<ul class="dropdown-menu">';
				foreach ($navitem["dropdown"] as $dropitem) {
					print '<li><a href="'.$dropitem["link"].'">'.$dropitem["name"].'</a></li>';
				}
		  		print '</ul>';
		  		print '</li>';
		    }
			// else just a normal link
		    else {
				print '<li><a href="'.$navitem["link"].'">'.$navitem["name"].'</a></li>';
		    }
		}
		print '</ul>';
		print '</div><!--/.nav-collapse -->';
		print '</div>';

		// nav for pages with second bar - filled in by handlerbars template
		print '<div id="pagemenus" class="container">';
		print '<div class="navbar-collapse collapse" id="navbar-scroller">';
		print '<ul id="pageitems" class="nav navbar-nav" ></ul>';
		print '</div>';
		print '</div>';

		// end nav
		print '</div>';

	}
?>