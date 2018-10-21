<?php
	include("db.php");

	if (isset($_POST['submit'])) {
		$nama 		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$tgl		= $_POST['tgl'];
		$jk			= $_POST['jk'];
		$prodi 		= $_POST['prodi'];
		$fak		= $_POST['fak'];
		$asal		= $_POST['asl'];
		$motto		= $_POST['motto'];

		$query = "INSERT INTO data(nama, nim, tgl, jk, prodi, fak, asal, motto)
				  VALUES('$nama','$nim','$tgl','$jk','$prodi','$fak','$asal','$motto')";

		if (mysqli_query($conn,$query)) {
			mysqli_close($conn);
			// echo "<script>
			// 		alert('Data Berhasil di Tambah');
			// 		location:'lihat.php';
			// </script>";
			echo "<a href='lihat.php'>Lihat Data</a>";
		}else{
			echo "Gagal Tambah Data!!!".$query."<br>".mysqli_error($conn);
		}
	}
?>