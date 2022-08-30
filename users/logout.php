<?php

session_start();
session_unset("user");
echo "<script>window.location.href='index.php?page=dashboard'</script>";