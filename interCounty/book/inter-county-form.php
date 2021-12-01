<?php
include_once("../../db/db_con.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Booking Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post" action="interBook.php">
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">FULL NAMES</span>
										<input class="form-control" name="fullnames" type="text" placeholder="Enter Full Names">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">ID/PASSPORT NUMBER</span>
										<input class="form-control" name="idPass"type="text" placeholder="Enter ID or Passport Number">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adults (18+)</span>
										<select class="form-control " name="adult">
											<option value="0">0</option>
											<option value ="1">1</option>
											<option value ="2">2</option>
                                            <option value="3">3</option>
                                            <option value ="4">4</option>
                                            <option value ="5">5</option>
                                            <option value ="6">6</option>
                                            <option value ="7">7</option>
                                            <option value ="8">8</option>
                                            <option value ="9">9</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Children (0-17)</span>
										<select class="form-control" name="children">
											<option value="0">0</option>
											<option value ="1">1</option>
											<option value ="2">2</option>
                                            <option value="3">3</option>
                                            <option value ="4">4</option>
                                            <option value ="5">5</option>
                                            <option value ="6">6</option>
                                            <option value ="7">7</option>
                                            <option value ="8">8</option>
                                            <option value ="9">9</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Coach class</span>
										<select class="form-control" name="coach">
											<option value="VIP" >VIP </option>
											<option  value="Economy">Economy</option>
											
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit">Book</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>