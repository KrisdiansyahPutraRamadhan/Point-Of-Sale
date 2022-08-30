<?php
require_once("config.php");
$pdo_statement=$pdo_conn->prepare("DELETE FROM tbl_deliveries WHERE sale_id=" . $_GET['sale_id']);
$pdo_statement->execute();
echo "<script>window.location.href='index.php?page=deliveries'</script>"
?>