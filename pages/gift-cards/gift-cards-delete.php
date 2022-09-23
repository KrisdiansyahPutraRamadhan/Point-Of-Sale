<?php
require_once("config.php");
$pdo_statement=$pdo_conn->prepare("DELETE FROM tbl_giftcard WHERE giftcard_number=" . $_GET['giftcard_number']);
$pdo_statement->execute();
echo "<script>window.location.href='index.php?page=gift-cards'</script>"
?>