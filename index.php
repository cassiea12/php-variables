<?php
	$title = 'Cassie\'s Variables';
	$myName = 'Cassie';
	$birthY = '1995';
	$thisYear = date("Y");
	$estAge = $thisYear - $birthY;

	// @param string, date of birth in mm/dd/yyyy format - gets my REAL age
	function getMyAge($bday) {

	  // Convert the string into an array, using the / as a separator
	  $bday = explode("/", $bday);

	  // Get the current month (based on server clock)
	  $thisMonth = date("m");

	  // Get the current day (based on server clock)
	  $thisDay = date("j");

	  // Get the current year (based on server clock)
	  $thisYear = date("Y");

	  // Current age is equal to current year minus birth year
	  $myAge = $thisYear - $bday[2];

	  // If the current month is less than the birth month,
	  // OR the current month is the same as the month month,
	  // but the birth day is less than the current day, then
	  // subtract one from the age
	  if($thisMonth < $bday[0] || ($thisMonth == $bday[0] && $thisDay < $bday[1]))  {
	    $myAge--;
	  }

	  // Return the current age
	  return $myAge;
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	<body>
		<main class="container py-4">
			<h1 class="pb-4">Hello, <?php echo $myName; ?></h1>
			<?php echo '<p>I was born in ' . $birthY . ', so I am about ' . $estAge . ' years old.</p>' ; ?>
			<?php echo '<p>Your actual age is ' . getMyAge('05/04/1987') . '.</p>' ; ?>
		</main>
	</body>
</html>
