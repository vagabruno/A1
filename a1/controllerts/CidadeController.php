<?php
include ('../class/ClassCidades.php');
$objCidades = new ClassCidades();
echo json_encode($objCidades->getCidades($_POST['estado']));