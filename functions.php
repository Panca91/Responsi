<?php 
// koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "responsi");

// function cetak query
	function query($query) {
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

// function utk mengambil data dari tiap element dalam form
	function tambah($data) {
		global $koneksi;

		$item_id = htmlspecialchars($data["item_id"]);
		$item_name = htmlspecialchars($data["item_name"]);
		$amount = htmlspecialchars($data["amount"]);
		$unit = htmlspecialchars($data["unit"]);
		$arrival_date = htmlspecialchars($data["arrival_date"]);
		$category = htmlspecialchars($data["category"]);
		$item_status = htmlspecialchars($data["item_status"]);
		$price = htmlspecialchars($data["price"]);

	// query insert data
		$query = "INSERT INTO inventaris VALUES 
			('$item_id', '$item_name', '$amount', '$unit', '$arrival_date', '$category', '$item_status', '$price')";
		mysqli_query($koneksi, $query);

	// return apakah koneksi berhasil atau tidak
		return mysqli_affected_rows($koneksi);
	}

// fungsi hapus
	function hapus($data) {
		global $koneksi;

		mysqli_query($koneksi, "DELETE FROM inventaris WHERE item_id = $item_id");
		return mysqli_affected_rows($koneksi);
	}

// fungsi ubah
	function ubah($data) {
		global $koneksi;
		
		$item_id = htmlspecialchars($data["item_id"]);
		$item_name = htmlspecialchars($data["item_name"]);
		$amount = htmlspecialchars($data["amount"]);
		$unit = htmlspecialchars($data["unit"]);
		$arrival_date = htmlspecialchars($data["arrival_date"]);
		$category = htmlspecialchars($data["category"]);
		$item_status = htmlspecialchars($data["item_status"]);
		$price = htmlspecialchars($data["price"]);
		
		$query = "UPDATE inventaris SET  
			 item_id = '$item_id',
			 item_name = '$item_name',
			 amount = '$amount',
			 unit = '$unit',
			 arrival_date = '$arrival_date',
			 category = '$category',
			 item_status = '$item_status',
			 price = '$price'
			WHERE item_id = $item_id;
			";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}
?>