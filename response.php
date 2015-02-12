<?php

if (is_ajax()) {
	if (isset($_POST["action"]) && !empty($_POST["action"])) {

		$action = $_POST["action"];
		switch($action) {
			case "reportedByme" :
				reportedByme();
				break;
			case "assignedTome" :
				assignedTome();
				break;
			case "notificationIcon" :
				notificationIcon();
				break;
		}
	}
}

//AJAX php Functions
function is_ajax() {
	return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}

function reportedByme() {

	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "bugtracker";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

	$sql = "select bug_id , summary from bugdetails where user_id=212";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		// output data of each row
		$listReportedIssues = "";
		$a = 0;
		while ($row = $result -> fetch_assoc()) {
			$bug_id = $row["bug_id"];
			$summary = $row["summary"];
			if ($a == 0) {
				$listReportedIssues .= "<tr><td ><a href='#'>" . $bug_id . "</a></td><td class='r1' >" . $summary . "</td></tr>";
				$a = 1;
			} else {
				$listReportedIssues .= "<tr><td ><a href='#'>" . $bug_id . "</a></td><td class='r2' >" . $summary . "</td></tr>";
				$a = 0;
			}
		}

	} else {
		echo "0 results";
	}

	$conn -> close();

	$return["json"] = json_encode($listReportedIssues);
	echo json_encode($return);
}

function assignedTome() {
	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "bugtracker";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

	$sql = "select bug_id , summary from bugdetails where assignedto=212";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		// output data of each row
		$listReportedIssues = "";
		$a = 0;
		while ($row = $result -> fetch_assoc()) {
			$bug_id = $row["bug_id"];
			$summary = $row["summary"];
			if ($a == 0) {
				$listReportedIssues .= "<tr><td ><a href='#'>" . $bug_id . "</a></td><td class='as1' >" . $summary . "</td></tr>";
				$a = 1;
			} else {
				$listReportedIssues .= "<tr><td ><a href='#'>" . $bug_id . "</a></td><td class='as2' >" . $summary . "</td></tr>";
				$a = 0;
			}
		}

	} else {
		$listReportedIssues .= "No notification";
	}

	$conn -> close();

	$return["json"] = json_encode($listReportedIssues);
	echo json_encode($return);
}

function notificationIcon() {
	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "bugtracker";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

	$sql = "select type, bug_id, user_id from notification where status=0";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		// output data of each row
		$listReportedIssues = "";

		while ($row = $result -> fetch_assoc()) {

			$type = $row["type"];
			$bug_id = $row["bug_id"];
			$user_id = $row["user_id"];
			if ($type == 0) {
				$listReportedIssues .= "<li><a href='#' >New bug for you! #" . $bug_id . "</a></li>";
			} else {
				$listReportedIssues .= "<li><a href='#'>" . $user_id . " has commented on #" . $bug_id . "</a></li>";
			}
		}

	} else {
		echo "0 results";
	}

	$conn -> close();

	$return["json"] = json_encode($listReportedIssues);
	echo json_encode($return);
}

function usericon() {

	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "bugtracker";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

	$sql = "select LastName from login where usrID=1001";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		// output data of each row
		$arun = "";
		while ($row = $result -> fetch_assoc()) {
			$arun .= $row["LastName"];
		}

	} else {
		echo "0 results";
	}

	$conn -> close();

	$return["json"] = json_encode($arun);
	echo json_encode($return);
}
?>