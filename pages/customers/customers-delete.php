<?php
require_once("config.php");
$pdo_statement=$pdo_conn->prepare("DELETE FROM tbl_customers WHERE person_id=" . $_GET['person_id']);
$pdo_statement->execute();
echo "<script>window.location.href='index.php?page=customers'</script>"
?>