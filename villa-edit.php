<?php
ob_start(); // Çıktı tamponlamasını başlatır

include 'partials/_header.php';
include_once 'libs/functions.php';
include 'partials/_navbar.php';

$id = $_GET["id"];
$sonuc = getVillaById($id);
$villalar = mysqli_fetch_assoc($sonuc);

$villa_adiErr = $villa_adi = "";
$villa_ozellikleriErr = $villa_ozellikleri = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["villa_adi"])) {
        $villa_adiErr = "Villa Adı gerekli alan";
    } else {
        $villa_adi = $_POST["villa_adi"];
    }
    if (empty($_POST["villa_ozellikleri"])) {
        $villa_ozellikleriErr = "Villa Özellikleri gerekli alan";
    } else {
        $villa_ozellikleri = $_POST["villa_ozellikleri"];
    }

    if (empty($villa_adiErr) && empty($villa_ozellikleriErr)) {
        if (editVilla($id, $villa_adi, $villa_ozellikleri)) {
            header("Location: villa-categories.php");
            exit(); // Yönlendirmeden sonra betiği sonlandır
        }
    }
}
?>
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div>
                <form method="post">
                    <div class="mb-3">
                        <label for="villa_adi">Villa Adı</label>
                        <input type="text" name="villa_adi" class="form-control" value="<?php echo htmlspecialchars($villalar["villa_adi"]); ?>">
                        <div class="text-danger"><?php echo $villa_adiErr ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="villa_ozellikleri">Açıklama</label>
                        <input type="text" name="villa_ozellikleri" class="form-control" value="<?php echo htmlspecialchars($villalar["villa_ozellikleri"]); ?>">
                        <div class="text-danger"><?php echo $villa_ozellikleriErr ?></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'partials/_footer.php';
ob_end_flush(); // Çıktı tamponlamasını bitirir ve tampondaki veriyi gönderir
?>
