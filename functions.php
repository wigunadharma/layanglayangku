<?php
//  koneksi database
$conn = mysqli_connect("localhost","root","","layangan");
 

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [] ;
    while( $row = mysqli_fetch_assoc( $result ) ) {
        $rows[] = $row;
    }
    return $rows;
}
// Tambahhhh data
function tambah($data){
    global $conn;
     
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data ["lname"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $level = htmlspecialchars($data["level"]);

    $query = "INSERT INTO user 
                VALUES 
                        (null,'$fname','$lname','$username','$password','$level')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
}
function tambahl($data){
    global $conn;
     
    $nama = htmlspecialchars($data["nama"]);
    $kategori = htmlspecialchars($data ["kategori"]);
    $ukuran = htmlspecialchars($data["ukuran"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO layang
                VALUES 
                        (null,'$nama','$kategori','$ukuran','$deskripsi')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
                     
}
function tambahe($data){
    global $conn;
     
    $nama_event = htmlspecialchars($data["nama_event"]);
    $lokasi = htmlspecialchars($data ["lokasi"]);
    $hadiah = htmlspecialchars($data["hadiah"]);
    $pendaftaran = htmlspecialchars($data["pendaftaran"]);
    $tgl_event = htmlspecialchars($data["tgl_event"]);

    $query = "INSERT INTO eventl
                VALUES 
                        (null,'$nama_event','$lokasi','$hadiah','$pendaftaran','$tgl_event')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
                     
}
// hapuss data
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapusl($id_layangan){
    global $conn;
    mysqli_query($conn, "DELETE FROM layang WHERE id_layangan = $id_layangan");
    return mysqli_affected_rows($conn);
}

function hapuse($id_event){
    global $conn;
    mysqli_query($conn, "DELETE FROM eventl WHERE id_event = $id_event");
    return mysqli_affected_rows($conn);
}

// edittttttttttt data
function edit($data) {
	global $conn;

	$id = $data["id"];
	$fname = htmlspecialchars($data["fname"]);
	$lname = htmlspecialchars($data["lname"]);
    $username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	$level = htmlspecialchars($data["level"]);
	

	$query = "UPDATE user SET
				fname = '$fname',
				lname = '$lname',
				username = '$username',
				password = '$password',
				level = '$level'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function editl($data) {
	global $conn;

	$id_layangan = $data["id_layangan"];
	$nama = htmlspecialchars($data["nama"]);
	$kategori = htmlspecialchars($data["kategori"]);
	$ukuran = htmlspecialchars($data["ukuran"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
	

	$query = "UPDATE layang SET
				nama = '$nama',
				kategori = '$kategori',
				ukuran = '$ukuran',
				deskripsi = '$deskripsi'
                WHERE id_layangan = $id_layangan
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function edite($data) {
	global $conn;

	$id_event = $data["id_event"];
    $nama_event = htmlspecialchars($data["nama_event"]);
    $lokasi = htmlspecialchars($data ["lokasi"]);
    $hadiah = htmlspecialchars($data["hadiah"]);
    $pendaftaran = htmlspecialchars($data["pendaftaran"]);
    $tgl_event = htmlspecialchars($data["tgl_event"]);


	$query = "UPDATE eventl SET
				nama_event = '$nama_event',
				lokasi = '$lokasi',
				hadiah = '$hadiah',
				pendaftaran = '$pendaftaran',
                tgl_event = '$tgl_event'
			  WHERE id_event = $id_event
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


// regis
function register($data){
    global $conn;
     
    $fname = htmlspecialchars($data["fname"]);
    $lname = htmlspecialchars($data ["lname"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $query = "INSERT INTO user 
                VALUES 
                        (null,'$fname','$lname','$username','$password','user')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
}
function flasher() {
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
}

?>