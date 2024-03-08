<?php 

$grade = "A";
$predikat;

switch ($grade) {
	case 'A':
		$predikat="Sangat Memuaskan XD";
		break;
	case "B":
		$predikat="Memuaskan XP";
		break;
	case "C":
		$predikat="Cukup Tawu";
		break;
	case "D":
		$predikat="Kurang enak";
		break;
	case "E":
		$predikat="Cupu lo";
		break;
	default:
		$predikat="Dahlah";
		break;
}

echo "<h1>$predikat</h1>";

?>