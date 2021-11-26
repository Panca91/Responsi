<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Responsi - Edit Data</title>
</head>
<body>
	<h1 class="bg-blue text-light text-center">Ubah data inventaris</h1>
		<?php
			include 'config.php';
              $item_id = $_GET['item_id'];
              $query = mysqli_query($conn, "SELECT * FROM inventaris WHERE item_id='$item_id'");
              while($hasil = mysqli_fetch_array($query)){
              echo "<form method='POST' action='prosesedit.php?item_id=$item_id'>"
		?>
		<table class="table" border="0">
			<form action="" method="post">
			<tr>
                <td><label for="item_id">Item Code</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="item_id" value="<?php echo $hasil['item_id'];?>" disabled></td>
            </tr>
			<tr>
                <td><label for="item_name">Name of goods</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="item_name" value="<?php echo $hasil['item_name'];?>"></td>
            </tr>
			<tr>
                <td><label for="amount">Amount</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="amount" value="<?php echo $hasil['amount'];?>"></td>
            </tr>
			<tr>
                <td><label for="unit">Unit</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" aria-label="default input example" name="unit" value="<?php echo $hasil['unit'];?>"></td>
            </tr>
			<tr>
                <td><label for="arrival_date">Coming Date</label></td>
                <td>:</td>
                <td><input class="form-control" type="date" name="arrival_date" value="<?php echo $hasil['arrival_date'];?>"></td>
            </tr>
			<tr>
                <td><label for="category">Category</label></td>
                <td>:</td>
				<td>
					<select class="form-select" aria-label="Default select example" name="category" value="<?php echo $hasil['category'];?>">
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
									<?php if($hasil['item_status']=='Well'){ ?>
									<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Well" checked>
			  						<label class="form-check-label" for="inlineRadio1">Well</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Maintenace">
			  						<label class="form-check-label" for="inlineRadio1">Maintenace</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Damage">
			  						<label class="form-check-label" for="inlineRadio1">Damage</label>
			  					<?php }?>
			  						<?php if($hasil['item_status']=='Maintenace'){ ?>
									<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Well" >
			  						<label class="form-check-label" for="inlineRadio1">Well</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Maintenace" checked>
			  						<label class="form-check-label" for="inlineRadio1">Maintenace</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Damage">
			  						<label class="form-check-label" for="inlineRadio1">Damage</label>
			  					<?php }?>
			  						<?php if($hasil['item_status']=='Damage'){ ?>
									<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Well" >
			  						<label class="form-check-label" for="inlineRadio1">Well</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Maintenace" >
			  						<label class="form-check-label" for="inlineRadio1">Maintenace</label>
			  						<input class="form-check-input" type="radio" name="item_status" id="inlineRadio1" value="Damage"checked>
			  						<label class="form-check-label" for="inlineRadio1">Damage</label>
			  					<?php }?> <br>
			  					</td>
            </tr>
			<tr>
                <td><label for="price">Harga</label></td>
                <td>:</td>
                <td><input class="form-control" type="text" placeholder="price unit" aria-label="default input example" name="price" value="<?php echo $hasil['price'];?>"></td>
            </tr>
			</table>
				<center><button type="submit" class="btn btn-success">Change</button> <a href="inventaris.php"><button type="button" class="btn btn-danger">Cancel</button></a></center>
			<br>
        </form>
<!--  --><?php } ?>
	
<div class="footer bg-blue">
		<p>Inventory Web 2016</p>
	</div>
</body>
</html>