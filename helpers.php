<?
	// edit this to add items to the navbar
	$nav_json = '
	{
		"1":
		{
			"name":"Home",
			"link":"index.php"
		},
		"2":
		{
			"name":"Beginner\'s Guide",
			"link":"beginner.php"
		},
		"3":
		{
			"name":"HTML Appendix",
			"link":"#",
			"dropdown": 
			{
				"1":
				{
					"name":"Tables",
					"link":"htmltables.php"
				},
				"2":
				{
					"name":"Divs",
					"link":"htmldivs.php"
				}
			}
		},
		"4":
		{
			"name":"CSS Appendix",
			"link":"cssappendix.php"
		}
	}';

	function generateNavbar(){
		global $nav_json;

		print '<div class="navbar navbar-default navbar-fixed-top" role="navigation">';
		print '<div class="container">';
		print '<div class="navbar-collapse collapse">';
		print '<ul class="nav navbar-nav">';

		$nav_array = json_decode($nav_json, true);
		// var_dump($nav_array);
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

		// nav for pages with second bar
		print '<div id="pagemenus" class="container">';
		print '<div class="navbar-collapse collapse" id="navbar-scroller">';
		print '<ul id="pageitems" class="nav navbar-nav" ></ul>';
		print '</div>';
		print '</div>';

		print '</div>';

	}
?>