<?
// Принимаемые данные
$professorName=$_POST['ValProfessors'];
$id=0;
$mysqli=new mysqli ("localhost","root","root","users");
      $mysqli->query("SET NAMES'utf8'");
      $success=$mysqli->query("INSERT INTO institute SET `Professors`='$professorName',`id`='$id'");
      echo $success; 
      $mysqli->close();
?>