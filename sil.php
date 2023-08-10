<?php
require_once("baglan.php");

$GelenSecimDegeri   =   $_POST["secim"];
$IDleriBirslestir   =   implode(",", $GelenSecimDegeri);
$GelenIDler         =   Filtrele($IDleriBirslestir);

$Sil    =   $DB->prepare("DELETE FROM oldurulecekler WHERE id IN ($GelenIDler)");
$Sil->execute();

header("Location:index.php");
exit();
?>
