<?php 
$host = "127.0.0.1";
$user = "root";
$passwd = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $passwd, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select EMPNO, ENAME, JOB, DNAME from emp 
        inner join dept on emp.DEPTNO = dept.DEPTNO";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Web App </title>
    <!--My name is Kanittha-->
</head>

<body>
    
        <h1> Hello World </h1>
        <button onclick = "indow.location.harf = 'insert_emp_form.html';"> บันทึกข้อมูลพนักงาน </button>
        <a href="Insert_emp_form.php">บันทึกข้อมูลพนักงาน</a> 

    <table border="1">
        <tr>
            <th> รหัสพนักงาน </th>
            <th> ชื่อ-นามสกุล </th>
            <th> ตำแหน่ง </th>
            <th> แผนก </th>
        </tr>
        <?php 
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td> <?php echo $row['EMPNO'] ?> </td>
            <td> <?php echo $row['ENAME'] ?> </td>
            <td> <?php echo $row['JOB']?> </td>
            <td> <?php echo $row['DNAME'] ?> </td>
        </tr>
        <?php } //end loop 
        } //end if ?>

    </table>

</body>

</html>
