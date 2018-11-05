<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "6701174010"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$data= mysqli_query($this->conn,"SELECT * from user");

		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

		function input($nama, $alamat, $usia, $genre, $wisata){
		$gnr = implode(", ", $genre);
		$wst = implode(", ", $wisata);
		$array = mysqli_query($this->conn,"INSERT INTO user(nama, alamat, usia, id, genre, wisata) VALUES ('$nama', '$alamat', ' ', '$usia', '$gnr', '$wst')");//buatlah method input
		//query inset into user
	}


	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		$query = mysqli_query($this->conn,"DELETE from user where id='$id'");
		if ($query) {
			echo "Berhasil";
		}
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn,"SELECT * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

		function update($id, $nama, $alamat, $usia, $genre, $wisata){//buatlah method update
		$gnr = implode(", ", $genre);
		$wst = implode(", ", $wisata);
		$array = mysqli_query($this->conn,"UPDATE user SET nama='$nama', alamat='$alamat', usia='$usia', genre='$gnr', wisata='$wst' WHERE id='$id'");
		//query update user set blablabla where id='$id'
	}

} 

?>