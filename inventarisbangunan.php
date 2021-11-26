<?php 

session_start();

include "config.php";
require 'functions.php';
$inventaris = query("SELECT * FROM inventaris WHERE category='Buildings'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Responsi - Inventory</title>
</head>
<body>

<!-- NAVBAR -->
<nav class="topnav navbar-dark bg-blue">
  <p class="judul text-light">
    LIST OF INVENTORY<br>
    EVERYTHING OFFICE
  </p>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav-link" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="inventaris.php">Inventory List</a>
      </li>
      <li class="dropdown">
        <button class="dropbtn">List per Category</button>
        <div class="dropdown-content">
            <a href="inventarisbangunan.php">Buildings</a>
            <a href="inventariskendaraan.php">Vehicles</a>
            <a href="inventarisatk.php">Office Inventory</a>
            <a href="inventariselektronik.php">Elektronic</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-blue text-light" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<!-- END NAVBAR -->

<div class="body">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-blue text-light" href="tambah.php">+ Add</a><br><br>
      </li>
    </ul>

    <table class="table" border="1" cellpadding="10" cellspacing="0">
        <tr>
        <th>No</th>
            <th>Code</th>
            <th>Name of goods</th>
            <th>Amount</th>
            <th>Unit</th>
            <th>Coming Date</th>
            <th>Category</th>
            <th>Status</th>
            <th>Unit Price</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
	    <?php foreach ($inventaris as $inv) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $inv["item_id"]; ?></td>
            <td><?= $inv["item_name"]; ?></td>
            <td><?= $inv["amount"]; ?></td>
			<td><?= $inv["unit"]; ?></td>
    		<td><?= $inv["arrival_date"]; ?></td>
	    	<td><?= $inv["category"]; ?></td>
		    <td><?= $inv["item_status"]; ?></td>
        <?php $num=$inv["price"]; ?>
            <?php $numformat = number_format($num,2,",","."); ?>
			      <td>Rp. <?php echo $numformat; ?></td>
            <td>Rp. <?php $total=$inv["price"]*$inv["amount"]; $totalFormat = number_format($total,2,",","."); echo $totalFormat; ?></td>
	  		<td>
		    	<a class="nav-blue text-light" href="edit.php?item_id=<?= $inv["item_id"]; ?>">Edit</a>
				<a class="nav-blue text-light" href="hapus.php?item_id=<?= $inv["item_id"]; ?>" onclick="return confirm('Are You Sure?');">Remove</a> 
		    </td>
		</tr>
		<?php $i++; ?>
    	<?php endforeach; ?>
    </table>
</div>


<!-- FOOTER -->
<div class="footer bg-blue">
		<p>Inventory Web 2016</p>
	</div>
<!-- END FOOTER -->
</body>
</html>
