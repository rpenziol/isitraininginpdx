<html>
  <head>
    <title>Is It Raining In PDX?</title>
	<link rel="icon" type="image/png" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<meta http-equiv="refresh" content="180">
	<!-- This site contains code borrowed from CodePen user Sheepeuh. The license for this code is viewable at http://codepen.io/Sheepeuh/pen/cFazd/license -->
  </head> 

  <body>

    <?php
	//ini_set('display_errors', 'On');
	$condition_file = fopen('php/current_condition.txt', "r");
	$current_condition = fgets($condition_file);
	fclose($condition_file);
	
    if ((strcmp($current_condition, 'Rain') == 0) || (strcmp($current_condition, 'Light Rain') == 0)
        || (strcmp($current_condition, 'Heavy Rain') == 0) || (strcmp($current_condition, 'Heavy Rain Mist') == 0)) {
      include('weather/rain.html');
	}
    else if (strcmp($current_condition, 'Snow') == 0 || (strcmp($current_condition, 'Light Snow') == 0)) {
      include('weather/snow.html');
    }	
    else {
      include('weather/norain.html');
    }

      $count_my_page = ("hitcounter.txt");
      $hits = file($count_my_page);
      $hits[0] ++;
      $fp = fopen($count_my_page , "w");
      fputs($fp , "$hits[0]");
      fclose($fp);
    ?>

  </body>

</html>
