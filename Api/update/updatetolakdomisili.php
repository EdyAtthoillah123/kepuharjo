<?php
 $dbHost = "localhost";  
 $dbUser = "wstifai3_suket-kel";  
 $dbPass = "Polije1234";  
 $dbName = "wstifai3_suket-kel";   
  $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);  
 
  try {  
   // set the PDO error mode untuk exception  
   
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
   //menentukan id record yang akan diupdate  
    echo $_GET['kode'];
   //membuat query mengupdate record pada tabel User    
   $query="UPDATE domisili SET status_surat='Ditolak RT' WHERE id_surat='$_GET[kode]'";   
   // Membuat prepare statement  
   $stmt = $conn->prepare($query);  
   // menjalankan query  
   $stmt->execute();  
   header("location:../../surat-diproses.php");
   }  
 catch(PDOException $e)  
   {  
   }  

 // menutup koneksi  
 $conn = null;  
 ?>  