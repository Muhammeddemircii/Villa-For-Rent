<?php 
    session_start();
    function isLoggedIn(){
        return (isset($_SESSION["loggedIn"]) && ($_SESSION["loggedIn"])==true);
    }
    function isAdmin(){
        return (isLoggedIn() && isset($_SESSION["user_type"]) && ($_SESSION["user_type"]) == "admin");
    }
    function safe_html($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data ;
    }
    function getVilla(){
        include 'libs/ayar.php';
        $query = "SELECT * from villalar";
        $sonuc= mysqli_query($baglanti, $query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function getVillaById(int $id){
        include 'libs/ayar.php';
        $query = "SELECT * from villalar WHERE id = '$id'";
        $sonuc= mysqli_query($baglanti, $query);
        mysqli_close($baglanti);
        return $sonuc;
    }
    function editVilla(int $id, string $villa_adi, string $villa_ozellikleri){
        include 'libs/ayar.php';
        $query = "UPDATE villalar SET villa_adi='$villa_adi', villa_ozellikleri='$villa_ozellikleri' WHERE id = '$id'";
        $sonuc = mysqli_query($baglanti, $query);
        mysqli_close($baglanti);
        return $sonuc;

    }
?>