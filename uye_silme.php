<?php
    include("baglan.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Üye Silme İşlemi</title>
</head>
<body>
    <form action="sil.php" method="post">
    <table width=500 align=center cellpadding=0 cellspacing=0>
    <?php
    $Sorgu  =   $DB->prepare("SELECT * FROM oldurulecekler");
    $Sorgu->execute();

    $KayitSayisi    =   $Sorgu->rowCount();
    $Kayitlar       =   $Sorgu->fetchAll(PDO::FETCH_ASSOC);

    foreach($Kayitlar as $Degerler){
?>
    <tr>
        <td width=25>
            <input type="checkbox" name="secim[]" value="<?php echo $Degerler["id"]; ?>">
        </td>
        <td>
        <?php echo $Degerler["Adi"] . " " . $Degerler["Soyadi"]; ?>
        </td>
    </tr>

    <?php
    }
?>
    <tr>
        <td colspan=2 align=left><input type="submit" value="Seçili olanları sil"></td>
    </tr>
</table>
</form>
</body>
</html>








