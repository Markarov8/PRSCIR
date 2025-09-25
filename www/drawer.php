<?php
$num = isset($_GET['num']) ? intval($_GET['num']) : 0;

$shape = $num & 0b11;          
$color = ($num >> 2) & 0b111;  
$size = ($num >> 5) & 0b11111;

$colors = ["red", "green", "blue", "yellow", "purple", "orange", "black", "grey"];
$size = max(20, $size * 10);

header("Content-Type: image/svg+xml");

echo "<svg width='200' height='200' xmlns='http://www.w3.org/2000/svg'>";
switch ($shape) {
    case 0:
        echo "<rect x='10' y='10' width='$size' height='$size' fill='{$colors[$color]}' />";
        break;
    case 1:
        echo "<circle cx='100' cy='100' r='" . ($size / 2) . "' fill='{$colors[$color]}' />";
        break;
    case 2:
        echo "<ellipse cx='100' cy='100' rx='" . ($size / 2) . "' ry='" . ($size / 3) . "' fill='{$colors[$color]}' />";
        break;
    case 3:
        echo "<polygon points='100,10 40,190 190,190' fill='{$colors[$color]}' />";
        break;
}
echo "</svg>";
?>