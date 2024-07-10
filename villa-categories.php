<?php 
require 'partials/_header.php';
    include 'partials/_navbar.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
<table class="table table-border" style="border: 1px solid red; border-collapse: collapse;">
    <thead>
        <tr>
            <th style="width: 50px; border: 1px solid red;">Id</th>
            <th style="border: 1px solid red;">Villa Adı</th>
            <th style="width: 250px; border: 1px solid red;">Villa Özellikleri</th>
            <th style="width: 130px; border: 1px solid red;"></th>
        </tr>
    </thead>
    <tbody>
        <?php $sonuc = getVilla(); while($villalar = mysqli_fetch_assoc($sonuc)): ?>
            <tr>
                <td style="border: 1px solid red;"><?php echo $villalar["id"]; ?></td>
                <td style="border: 1px solid red;"><?php echo $villalar["villa_adi"]; ?></td>
                <td style="border: 1px solid red;"><?php echo $villalar["villa_ozellikleri"]; ?></td>
                    <td style="border: 1px solid red;">
                        <a href="villa-edit.php?id=<?php echo $villalar['id']; ?>" class="btn btn-primary btn-sm">Düzenle</a>
                        <a href="villa-delete.php?id=<?php echo $villalar['id']; ?>" class="btn btn-danger btn-sm">Sil</a>
                    </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

            </table>
            </div>
        </div>
    </div>
<?php require 'partials/_footer.php'?>