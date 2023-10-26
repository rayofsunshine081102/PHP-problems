<?php
//File Handling Activity
//Prelim Exam
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if (($ctr % 2)==1){
				echo "<tr bgcolor = 'pink'>";
			}
			echo "<td>$line[0]</td>";
			echo "<td>$line[1]</td>";
			echo "<td>$line[2]</td>";
			echo "<td>$line[3]</td>";
			echo "<td>$line[4]</td>";
			echo "<td>$line[5]</td>";
			echo "<td>$line[6]</td>";
			echo "<td>$line[7]</td>";
			echo "<td>$line[8]</td>";
			echo "<td>$line[9]</td>";
			echo "<td>$line[10]</td>";
			echo "<td>$line[11]</td>";
			echo "<td>$line[12]</td>";
			echo "<td>$line[13]</td>";
			echo "</tr>";
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";
echo '<hr>';

//Listing with one criterion
//1.a  oDisplay all the employees under IT Department
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if ($line[3] == 'IT'){
				echo "<tr bgcolor = 'orange'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";

//1.b oDisplay all the employees under Finance
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if ($line[3] == 'Finance'){
				echo "<tr bgcolor = 'yellow'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";

//1.c oDisplay all the employees under Sales
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if ($line[3] == 'Sales'){
				echo "<tr bgcolor = '#AEF9B3'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";


//2 Listing with two criteria
//2.a Display all the employees under Corporate Business Unit and Accounting 
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if (($line[3] == 'Accounting') && ($line[4] == 'Corporate')){
				echo "<tr bgcolor = 'cyan'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";

//2.b oDisplay all the employees under Corporate Business Unit and Engineering Department
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if (($line[3] == 'Engineering') && ($line[4] == 'Corporate')){
				echo "<tr bgcolor = '#CA7AFF'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";

//2.c oDisplay all the employees under Corporate Business Unit and Finance Department
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width = '100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Anual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";

	echo "</tr>";

	$ctr = 1;
	while (($line = fgetcsv($f)) !==false){
		if ($header != 1) {
			if (($line[3] == 'Finance') && ($line[4] == 'Corporate')){
				echo "<tr bgcolor = '#ff6179'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";
			}
			$ctr = $ctr+1;		}
		$header = 0;
		}
		echo "</table>";
		fclose($f);
	}
	else {
		echo "No file exists...!";	
}
echo "<br>End of Record/s...<br>";

//3 Summation 
//3.a oList all the Employee from Brazil and then display their total salary at the end of the table
echo "<br>List all the Employees from Brazil and then display their total salary at the end of the table<br>";
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width='100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Annual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";
	echo "</tr>";

	$ctr = 1;
	$totalSalary = 0.0; 
	while (($line = fgetcsv($f)) !== false){
		if ($header != 1) {
			if ($line[11] == "Brazil") {
				echo "<tr bgcolor='#3ee551'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";

				$totalSalary = $totalSalary + floatval($line[9]);
			}
			$ctr = $ctr + 1;
		}
		$header = 0;
	}

	echo "</table>";
	$formattedTotalSalary = number_format($totalSalary, 2);
	echo "Total Salary for Employees from Brazil: $formattedTotalSalary";
	fclose($f);
} else {
	echo "No file exists...!";
}
echo "<br>End of Record/s...";

//3b.  all the Employee from China and then display their total salary at the end of the table
echo "<br>List all the Employees from China and then display their total salary at the end of the table<br>";
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width='100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Annual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";
	echo "</tr>";

	$ctr = 1;
	$totalSalary = 0.0; 
	while (($line = fgetcsv($f)) !== false){
		if ($header != 1) {
			if ($line[11] == "China") {
				echo "<tr bgcolor='#dea6e2'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";

				$totalSalary = $totalSalary + floatval($line[9]);
			}
			$ctr = $ctr + 1;
		}
		$header = 0;
	}

	echo "</table>";
	$formattedTotalSalary = number_format($totalSalary, 2);
	echo "Total Salary for Employees from China: $formattedTotalSalary";
	fclose($f);
} else {
	echo "No file exists...!";
}
echo "<br>End of Record/s...";
// 3.C oList all the Employee from United States and then display their total salary at the end of the table
echo "<br>List all the Employees from United States and then display their total salary at the end of the table<br>";
$filename = "Employee-DB.csv";
if (file_exists($filename)){
	$f = fopen($filename, "r");
	$header = 1;
	echo "<table border width='100%'>";
	echo "<tr>";
	echo "<th>EEID</th>";
	echo "<th>Full Name</th>";
	echo "<th>Job Title</th>";
	echo "<th>Department</th>";
	echo "<th>Business Unit</th>";
	echo "<th>Gender</th>";
	echo "<th>Ethnicity</th>";
	echo "<th>Age</th>";
	echo "<th>Hire Date</th>";
	echo "<th>Annual Salary</th>";
	echo "<th>Bonus %</th>";
	echo "<th>Country</th>";
	echo "<th>City</th>";
	echo "<th>Exit Date</th>";
	echo "</tr>";

	$ctr = 1;
	$totalSalary = 0.0; 
	while (($line = fgetcsv($f)) !== false){
		if ($header != 1) {
			if ($line[11] == "United States") {
				echo "<tr bgcolor='#429eff'>";
				echo "<td>$line[0]</td>";
				echo "<td>$line[1]</td>";
				echo "<td>$line[2]</td>";
				echo "<td>$line[3]</td>";
				echo "<td>$line[4]</td>";
				echo "<td>$line[5]</td>";
				echo "<td>$line[6]</td>";
				echo "<td>$line[7]</td>";
				echo "<td>$line[8]</td>";
				echo "<td>$line[9]</td>";
				echo "<td>$line[10]</td>";
				echo "<td>$line[11]</td>";
				echo "<td>$line[12]</td>";
				echo "<td>$line[13]</td>";
				echo "</tr>";

				$totalSalary = $totalSalary + floatval($line[9]);
			}
			$ctr = $ctr + 1;
		}
		$header = 0;
	}

	echo "</table>";
	$formattedTotalSalary = number_format($totalSalary, 2);
	echo "Total Salary for Employees from United States: $formattedTotalSalary";
	fclose($f);
} else {
	echo "No file exists...!";
}
echo "<br>End of Record/s...";

//4 What is the Minimum and Maximum Salary
echo "<br>• What is the Minimum and Maximum Salary<br>";
$filename = "Employee-DB.csv";

// Imagine you have a magical candy bag called "Employee DB.csv."

if (file_exists($filename)) {
    // If this magical candy bag exists:

    $f = fopen($filename, "r");
    // You open the bag for inspection using your magical candy detector ($f).

    $header = 1;
    // You notice that the first candy in the bag is special, known as the "Header Candy."

    $minSalary = PHP_INT_MAX;
    // You take out a very tiny candy, "Invisible Candy," which is so small that no real candy can be smaller.
    $maxSalary = PHP_INT_MIN;
    // You also grab a gigantic candy, "Giant Candy," which is so huge that no real candy can be bigger.

    while (($line = fgetcsv($f)) !== false) {
        // Now, you start checking each candy in the bag one by one.

        if ($header != 1) {
            // For each candy, except the Header Candy:
            $salary = intval($line[9]);
            // You measure the size of the candy using your candy ruler and call it "$salary."

            $minSalary = min($minSalary, $salary);
            // If the candy is smaller than your "Invisible Candy," you replace the "Invisible Candy" with the real candy (update the minimum salary).

            $maxSalary = max($maxSalary, $salary);
            // If the candy is bigger than your "Giant Candy," you replace the "Giant Candy" with the real candy (update the maximum salary).
        }
        $header = 0;
        // After you finish inspecting the Header Candy, you decide not to check it again, so you mark it as already inspected.

    }

    fclose($f);
    // You're done inspecting all the candies, so you close the magical candy bag.

    // Now, you want to check if there were any real candies found or just the Header Candy.
    if ($minSalary !== PHP_INT_MAX && $maxSalary !== PHP_INT_MIN) {
        // If you found some real candies (not just the Header Candy):

        echo "Minimum Salary is: $minSalary<br>";
        // You announce the size of the smallest real candy.
        echo "Maximum Salary is: $maxSalary<br>";
        // You announce the size of the largest real candy.
    } else {
        // If there were no real candies (only the Header Candy):

        echo "No such file found...!";
        // You express that there were no real candies in the bag.
    }
} else {
    // If the magical candy bag doesn't exist:

    echo "File does not exist...!";
    // You express that the magical candy bag is missing.
}

echo "<br>End of Records...";

//5List all the employee that already resigned
$filename = "Employee-DB.csv";
if (file_exists($filename)){
    $f = fopen($filename, "r");
    $header = 1;
    echo "<table border width = '100%'>";
    echo "<tr>";
    echo "<th>EEID</th>";
    echo "<th>Full Name</th>";
    echo "<th>Job Title</th>";
    echo "<th>Department</th>";
    echo "<th>Business Unit</th>";
    echo "<th>Gender</th>";
    echo "<th>Ethnicity</th>";
    echo "<th>Age</th>";
    echo "<th>Hire Date</th>";
    echo "<th>Annual Salary</th>"; // Fixed the typo here (Anual -> Annual)
    echo "<th>Bonus %</th>";
    echo "<th>Country</th>";
    echo "<th>City</th>";
    echo "<th>Exit Date</th>";
    echo "</tr>";

    $ctr = 1;
    while (($line = fgetcsv($f)) !== false){
        if ($header != 1) {
            $exitDate = $line[13]; // Assuming that exit date is stored in the 14th column (index 13).

            if ($exitDate !== "") { // Assuming that empty means the employee has not exited.
                echo "<tr bgcolor = '#d8b8ff'>";
                echo "<td>$line[0]</td>";
                echo "<td>$line[1]</td>";
                echo "<td>$line[2]</td>";
                echo "<td>$line[3]</td>";
                echo "<td>$line[4]</td>";
                echo "<td>$line[5]</td>";
                echo "<td>$line[6]</td>";
                echo "<td>$line[7]</td>";
                echo "<td>$line[8]</td>";
                echo "<td>$line[9]</td>";
                echo "<td>$line[10]</td>";
                echo "<td>$line[11]</td>";
                echo "<td>$line[12]</td>";
                echo "<td>$exitDate</td>";
                echo "</tr>";
            }
            $ctr = $ctr + 1;
        }
        $header = 0;
    }

    echo "</table>";
    fclose($f);
} else {
    echo "No file exists...!";
}
echo "<br>End of Record/s...<br>";
?>
