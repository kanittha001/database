<?php 
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $passwd, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$empno = $_POST['empno'] ;
$ename = $_POST['ename'] ;
$job = $_POST['job'] ;
$mgr = $_POST['mgr'] ;
$hiredate = $_POST['hiredate'] ;
$salary = $_POST['salary'] ;
$comm = $_POST['comm'] ;
$deptno = $_POST['deptno'] ;

$sql = "insert into emp (EMPNO, ENAME, JOB, MGR,HIREDATE, SEL, COMM, DEPTNO) values ('$empno', '$ename', '$job', '$mgr', '$hiredate', '$salary', '$comm', '$empno')
if (mysqli_query($conn, $sql)) {
     header('Location: test1.php');
}
else{
    echo "Insert Fail";
}
 ?>