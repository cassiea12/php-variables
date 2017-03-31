<?php
	$title = 'Variables';
	$name = 'Cassie';
	$sum = 4+4;
	$sum2 = 3+3;
	$sum3 = $sum + $sum2;

	// Let's get the age based on birth year
	$currentYear = date("Y"); //date and y are built in functions and parameters
	$birthYear = 1995;
	$roughAge = $currentYear - $birthYear;

	//Let's get the real age based on dates
	$dob = '05/14/1995';
	$dob=explode("/", $dob); //explode built in function, takes the birth date above and creates 3 new variables for them based on each / and puts them into an array
	$curMonth = date("m"); //date function
	$curDay = date("j");
	$curYear = date("Y");
	$age = $curYear - $dob[2]; //1995 - third item in dob array
	if($curMonth<$dob[0] || ($curMonth==$dob[0] && $curDay<$dob[1])) // \\ is "or". && is "and". -- subtract 1.
	$age--;

	//lines 13-21 we can delete- it's just there to help explain

	// @param string, date of birth in mm/dd/yyyy format
	function getAge($dob) {

	  // Convert the string into an array, using the / as a separator
	  $dob=explode("/", $dob);

	  // Get the current month (based on server clock)
	  $curMonth = date("m");

	  // Get the current day (based on server clock)
	  $curDay = date("j");

	  // Get the current year (based on server clock)
	  $curYear = date("Y");

	  // Current age is equal to current year minus birth year
	  $age = $curYear - $dob[2];

	  // If the current month is less than the birth month,
	  // OR the current month is the same as the month month,
	  // but the birth day is less than the current day, then
	  // subtract one from the age
	  if($curMonth<$dob[0] || ($curMonth==$dob[0] && $curDay<$dob[1]))  {
	    $age--;
	  }

	  // Return the current age
	  return $age;
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
			<h1 class="pb-4">Hello, <?php echo $name; ?></h1>
			<?php echo '<p>You were born in '.$birthYear.', so you&rsquo;re about '.$roughAge.' years old.</p>'; ?>
			<?php echo '<p>Your actual age is '.getAge('05/04/1987').'.</p>'; ?>
			<p><strong>The first <code>$sum</code> variable is:</strong> <?php echo $sum; ?></p>
			<p><strong>The second <code>$sum2</code> variable is:</strong> <?php echo $sum2; ?></p>
			<p><strong>The third <code>$sum3</code> variable is:</strong> <?php echo $sum3; ?></p>
		</main>
	</body>
</html>
