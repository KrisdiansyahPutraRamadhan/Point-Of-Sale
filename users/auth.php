<?php

session_start();
if(!isset($_SESSION["user"])) echo "<script>window.location.href='index.php?page=login'</script>";