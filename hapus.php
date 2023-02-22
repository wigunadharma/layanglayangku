<?php
require 'functions.php';
$id = $_GET["id"];

if( hapus($id) > 0){
  header('Location: tables.php');
  //   echo"<script>
  //   alert('data berhasil dihapus');
  //   document.location.href = 'tables.php';
  // </script>";
}else{
    echo"
    <script>
            alert('data gagal dihapus');
            document.location.href = 'tables.php';
          </script>";
}

$id_layangan = $_GET["id_layangan"];
if( hapusl($id_layangan) > 0){
  header('Location: tlayangan.php');
//   echo"<script>
//   alert('data berhasil dihapus');
//   document.location.href = 'tlayangan.php';
// </script>";
}else{
  echo"
  <script>
          alert('data gagal dihapus');
          document.location.href = 'tlayangan.php';
        </script>";
}

$id_event = $_GET["id_event"];
if( hapuse($id_event) > 0){
  header('Location: tevent.php');
//   echo"<script>
//   alert('data berhasil dihapus');
//   document.location.href = 'tlayangan.php';
// </script>";
}else{
  echo"
  <script>
          alert('data gagal dihapus');
          document.location.href = 'tevent.php';
        </script>";
}

?>