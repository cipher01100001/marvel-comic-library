<?php
session_start();
if (!isset($_SESSION['id_user'], $_SESSION['username'])) {
    echo '<script type="text/javascript">
	window.location.href = "../../index.php";
	</script>';
    exit();
}
