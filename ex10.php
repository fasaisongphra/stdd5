<?php 
if (isset($_GET['score'])){  //ถ้าจริงมันจะวิ่งในวงเล็บ(ใส่ค่า) , ถ้าเท็จมันจะไม่เตือนและวิ่งข้ามวงเล็บ(ขึ้นขาว)
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