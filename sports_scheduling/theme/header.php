<!DOCTYPE HTML>
<?php include 'includes/connection.php'; ?>
<html>
	<head>
		<title>Sports Scheduling and Result Monitoring</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
	</head>
	<body id="page-top">

		<!-- Header -->
				
			

		<!-- Nav -->
			<header id="header" class="bg-info">
				
			<center>
				<?php
				// $queryioe =mysqli_query($db, "SELECT uniqueID FROM registrationpage");
				// $num_rows = msqli_num_rows($queryioe);
				// $rows = mysqli_fetch_array($queryioe);
				// $_SESSION["uniqueID"] = $rows['uniqueID'];

				// $_SESSION["uniqueID"] = $uniqueID;

				// <a style="align-content: left;color: white;">$uniqueID</a>

				?>


				<a href="index.php" style="color: white; margin: 1%" class="fas fa-home">Home</a>
				<a href="adminlogin.php" style="color: white;margin: 1%" class="fas fa-home">Admin login</a>
				<a href="result.php" style="color: white;margin: 1%" class="fas fa-calendar-check">Result</a>
				<a href="1stlogout.php" style="color: white;margin: 1%" class="fas fa-home">Logout</a>



			</center>
			</header>
			 