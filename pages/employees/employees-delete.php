<?php
require_once("config.php");
$pdo_statement=$pdo_conn->prepare("DELETE FROM employee WHERE id=" . $_GET['id']);
$pdo_statement->execute();
echo "<script>window.location.href='index.php?page=employees'</script>"
?>