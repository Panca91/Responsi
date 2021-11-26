<?php 

session_start();

include "config.php";
require 'functions.php';
	if( isset($_POST["submit"]) ) {

		if( tambah($_POST) > 0){
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'inventaris.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'inventaris.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Responsi - Add Data</title>
</head>
<body>
	<h1 class="bg-blue text-light text-center">Add Inventory Data</h1>	
	<table class="table" border="0">
		<form action="input.php" method="post">
			<tr>
                <td><label for="item_id">Item Code</label></td>
                <td>:</td>
                <td><input type=text name="item_id" id="item_id"></td>
            </tr>
			<tr>
                <td><label for="item_name">Name of goods</label></td>
                <td>:</td>
                <td><input type=text name="item_name" id="item_name"></td>
            </tr>
			<tr>
                <td><label for="amount">Amount</label></td>
                <td>:</td>
                <td><input type=text name="amount" id="amount"></td>
            </tr>
			<tr>
                <td><label for="unit">Unit</label></td>
                <td>:</td>
                <td><input type=text name="unit" id="unit"></td>
            </tr>
			<tr>
                <td><label for="arrival_date">Coming Date</label></td>
                <td>:</td>
                <td><input type=date name="arrival_date" id="arrival_date"></td>
            </tr>
			<tr>
                <td><label for="category">Category</label></td>
                <td>:</td>
				<td>
					<select name="category" id="category">
						<option name=category>Buildings
						<option name=category>Vehicles
						<option name=category>Inventory Office
						<option name=category>Elektronic
					</select>
				</td>
            </tr>
			<tr>
				<td><label for="item_status">Status</label></td>
				<td>:</td>
				<td>
					<input type="radio" name="item_status" id="item_status" <?php if (isset($item_status) && $item_status=="Well") echo "checked";?> value="Well">Well
					<input type="radio" name="item_status" id="item_status" <?php if (isset($item_status) && $item_status=="Maintenace") echo "checked";?> value="Maintenace">Maintenace
					<input type="radio" name="item_status" id="item_status" <?php if (isset($item_status) && $item_status=="Damage") echo "checked";?> value="Damage">Damage
				</td>
            </tr>
			<tr>
                <td><label for="price">Unit Price</label></td>
                <td>:</td>
                <td><input type=text name="price" id="price"></td>
            </tr>
			</table>
			<table class="table" border="0">
				<td> </td>
				<td> </td>
				<td><input class="bg-blue text-light" type="submit" name="submit" value="Save"><input class="bg-blue text-light" type="reset" name="reset" value="Cancel"></td>
				<td> </td>
				<td> </td>
			</table>
        </form>

		<table class="table" border="0">
			<td> </td>
			<td> </td>
			<td>
			<ul class="navbar-nav ms-auto">
        		<li class="nav-item">
	    		    <a class="nav-blue text-light" href="inventaris.php">Back to Inventory Data</a>
    		  	</li>
    		</ul>
			</td>
			<td> </td>
			<td> </td>
		</table>
	<!-- FOOTER -->
	<div class="footer bg-blue">
		<p>Inventory Web 2016</p>
	</div>
	<!-- END FOOTER -->
	</body>
</html>