<?php 
if (!empty($_GET['score'])){ //ไม่ใส่ค่าจะหน้าจอขาว 
$score = $_GET['score']; 
if ($score >= 100) {
    echo "over score";
} else if ($score >= 80) {
    echo "A";
} else if ($score >= 70) {
    echo "B";
} else if ($score >= 60) {
    echo "C";
} else if ($score >= 50) {
    echo "D";
} else {
    echo "F";
}
}