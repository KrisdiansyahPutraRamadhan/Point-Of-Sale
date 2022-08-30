<?php
require_once("config.php");
$pdo_statement=$pdo_conn->prepare("DELETE FROM tbl_items WHERE item_id=" . $_GET['item_id']);
$pdo_statement->execute();
echo "<script>window.location.href='index.php?page=items'</script>"
?>