<html>
<head>
  <meta charset="UTF-8">
  <title>Курсовая работа</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<? include "content.php";
  if(isset($_POST["send"])) // если кнопка нажата
   { 
      // переменные, которые отображают ошибки
      $errorNameTable="";
      $errorNumberOperation="";
      $errorfield1="";
      $errorfield2="";
      $errorsuccess="";
      $error=false;
      // USESESSION НЕ ВКЛЮЧАТЬ!!!!!!!
      $usesession=false;//булевская переменная для использования/неиспользования сохранения данных в форме
      $NameTable = htmlspecialchars($_POST["NameTable"]);// передача через метод POST данных
      $NumberOperation = htmlspecialchars($_POST["NumberOperation"]);// данные обрабатываются с помощью htmlspecialchars --  Преобразует специальные символы в HTML сущности
      $field1 = htmlspecialchars($_POST["field1"]);
      $field2 = htmlspecialchars($_POST["field2"]);
      $field3 = htmlspecialchars($_POST["field3"]);
      $field4 = htmlspecialchars($_POST["field4"]);
      $field5 = htmlspecialchars($_POST["field5"]);
      $field6 = htmlspecialchars($_POST["field6"]);
      $field7 = htmlspecialchars($_POST["field7"]);
      // Чтобы не вводить данные кучу раз при появлении ошибок, используем сессию.
      if($usesession==true){
        $_SESSION["NameTable"]=$NameTable;
        $_SESSION["NumberOperation"]=$NumberOperation;
        $_SESSION["field1"]=$field1;
        $_SESSION["field2"]=$field2;
      }
      // БАГ С ДВОЙНЫМ ЗАНЕСЕНИЕМ В БД!
      switch ($NumberOperation) {
        case '1': // что делаем, если нужно добавить данные в БД
            // проверяем на ошибки добавления. В добавлении нам нужны все заполненные поля, кроме id
          if($NameTable==""){
            $errorNameTable="Вы не ввели номер сущности!";
            $error=true;
          }
          if($field2==""){
             $errorfield2="А что мне добавить?";
             $error=true;
          }
          if($error==false){
             $mysqli=new mysqli ("localhost","root","Kortik111","databaseuniveristy") or die ('Невозможно открыть базу');
             $mysqli->query("SET NAMES'utf8'");
            // смотрим какую табличку выбрать пользователь
             switch ($NameTable) {
               case '1':
                // Формируем запрос на изменение таблицы с именем insitute.
                //делаем реплейс индекс.пхп, чтобы избежать дублирования запроса
                echo($mysqli->query("INSERT INTO `institute` (`id`, `Name`) VALUES (NULL,'$field2')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                  $errorsuccess="Готово!";
                  $mysqli->close();
                 break;
                case '2':
                echo($mysqli->query("INSERT INTO `faculty` (`idFaculty`, `idInstitute`,`NameFaculty`) VALUES (NULL,'$field2','$field3')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                  $errorsuccess="Готово!";
                  $mysqli->close();  
                 break;
                case '3':
                 echo($mysqli->query("INSERT INTO `specialty` (`idSpecialty`, `idFaculty`,`Name`) VALUES (NULL,'$field2','$field3')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                  $errorsuccess="Готово!";
                  $mysqli->close();
                 break;
                case '4':
                echo($mysqli->query("INSERT INTO `department` (`idDepartment`, `idFaculty`,`Name`) VALUES (NULL,'$field2','$field3')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                  $errorsuccess="Готово!";
                  $mysqli->close();
                 break;
                case '5':
                 echo($mysqli->query("INSERT INTO `groups` (`idGroup`, `idSpecialty`,`Name`) VALUES (NULL,'$field2','$field3')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
                 break;
                case '6':
                echo($mysqli->query("INSERT INTO `student` (`idStudent`, `idGroup`,`Name`,`Surname`) VALUES (NULL,'$field2','$field3','$field4')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
                 break;
                case '7':
                 echo($mysqli->query("INSERT INTO `work` (`idProfessor`, `idDepartment`,`Name`,`Surname`) VALUES (NULL,'$field2','$field3','$field4')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
                 break;
                case '8':
                 echo($mysqli->query("INSERT INTO `work` (`idWork`, `idStudent`,`idTerm`,`idProfessor`,`NameWork`,`Professor`,`Evalution`) VALUES (NULL,'$field2','$field3','$field4','$field5','$field6','$field7')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
                 break;
                case '9':
                  echo ($mysqli->query("INSERT INTO `term` (`idTerm`, `Number`) VALUES (NULL, '$field2')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                  $errorsuccess="Готово!";
                  $mysqli->close(); 
                 break;
                case '10':
                 echo($mysqli->query("INSERT INTO `placework` (`idPlaceWork`, `idWork`,`Name`) VALUES (NULL,'$field2','$field3')"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
                 break;
               default:
                 $errorNameTable="Я не знаю таких значений!";
                 break;
             }
          }
          break;
        case '2': //что делаем, если нужно редактировать данные 
         if($field2==""){
             $errorfield2="А что мне добавить?";
             $error=true;
          }
          if($error==false){
             $mysqli=new mysqli ("localhost","root","Kortik111","databaseuniveristy") or die ('Невозможно открыть базу');
             $mysqli->query("SET NAMES'utf8'");
          switch ($NameTable) {
             case '1':
               echo($mysqli->query("UPDATE `institute` SET `Name`='$field2' WHERE `institute`.`id` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
              break;
             case '2':
              echo($mysqli->query("UPDATE `faculty` SET `idInstitute`='$field2',`NameFaculty`='$field3' WHERE `faculty`.`idFaculty` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
              $errorsuccess="Готово!";
              $mysqli->close();
              break;
             case '3':
             echo($mysqli->query("UPDATE `specialty` SET `idFaculty`='$field2',`Name`='$field3' WHERE `faculty`.`idSpecialty` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
              $errorsuccess="Готово!";
              $mysqli->close();
              break;
             case '4':
              echo($mysqli->query("UPDATE `department` SET `idFaculty`='$field2',`Name`='$field3' WHERE `department`.`idDepartment` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
              $errorsuccess="Готово!";
              $mysqli->close();
              break;
             case '5':
              echo($mysqli->query("UPDATE `groups` SET `idSpecialty`='$field2',`Name`='$field3' WHERE `groups`.`idGroup` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
              $errorsuccess="Готово!";
              $mysqli->close();
              break;
             case '6':
              echo($mysqli->query("UPDATE `student` SET `idGroup`='$field2',`Name`=`$field3`,`Surname`='$field4' WHERE `student`.`idStudent` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
              break;
             case '7':
               echo($mysqli->query("UPDATE `professor` SET `idDepartment`='$field2',`Name`=`$field3`,`Surname`='$field4' WHERE `professor`.`idProfessor` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
              break;
             case '8':
                echo($mysqli->query("UPDATE `work` SET `idStudent`='$field2',`idTerm`=`$field3`,`idProfessor`='$field4',`NameWork`='$field5',`Professor`='$field6',`Evalution` = '$field7' WHERE `work`.`idWork` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
              break;
             case '9':
              echo($mysqli->query("UPDATE `term` SET `Number`='$field2' WHERE `term`.`idTerm` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
                $errorsuccess="Готово!";
                $mysqli->close();
              break;
             case '10':
              echo($mysqli->query("UPDATE `placework` SET `idWork`='$field2',`Name`='$field3' WHERE `placework`.`idPlaceWork` = '$field1';"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при добавлении данных";
              $errorsuccess="Готово!";
              $mysqli->close();
              break;
            default:
              $errorNameTable="Я не знаю таких значений!";
              break;
          }
          }
          break;
        case '3': // что делаем, если нужно удалить 
          if($NameTable==""){
            $errorNameTable="Вы не ввели номер сущности!";
            $error=true;
          }
          if($field1==""){
             $errorfield1="Введите id удаляемой записи!";
             $error=true;
          }
          if($error==false){
              $mysqli=new mysqli ("localhost","root","Kortik111","databaseuniveristy") or die ('Невозможно открыть базу');
              $mysqli->query("SET NAMES'utf8'");
              switch ($NameTable) {
                case '1':
                   echo ($mysqli->query("DELETE FROM `institute` WHERE `institute`.`id` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '2':
                  echo ($mysqli->query("DELETE FROM `faculty` WHERE `faculty`.`idFaculty` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '3':
                   echo ($mysqli->query("DELETE FROM `specialty` WHERE `specialty`.`idSpecialty` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '4':
                   echo ($mysqli->query("DELETE FROM `department` WHERE `department`.`idDepartment` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '5':
                  echo ($mysqli->query("DELETE FROM `groups` WHERE `groups`.`idGroup` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '6':
                   echo ($mysqli->query("DELETE FROM `student` WHERE `student`.`idStudent` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '7':
                   echo ($mysqli->query("DELETE FROM `professor` WHERE `professor`.`idProfessor` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '8':
                   echo ($mysqli->query("DELETE FROM `work` WHERE `work`.`idWork` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '9':
                   echo ($mysqli->query("DELETE FROM `term` WHERE `term`.`idTerm` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                case '10':
                   echo ($mysqli->query("DELETE FROM `placework` WHERE `placework`.`idPlaceWork` = '$field1'"))?"<script>document.location.replace('index.php');</script>":"Произошла ошибка при удалении данных"; 
                  $errorsuccess="Готово!";
                   $mysqli->close(); 
                  break;
                default:
                  $errorNameTable="Ой,вы ввели недопустимое значение!";
                  break;
              }
          }
          break;
        default:
          $errorNumberOperation= "Введен неверный код действия!";
          break;
      }
   }
 ?>
<body>
  <div class="title">
        <h1 class="h1">База данных по прохождению летних практик студентов ПГУ.</h1>
  </div>
  <div class="input">
        <h3>Ввод информации:</h3>
          <form name="ChangeData" action="" method="post">
            <label>Номер таблицы</label><br/>
            <!-- value - значение. Его заполняем занчением NameTable, которое используется в это сессии<-->
              <input type="text" name="NameTable" value="<? echo $_SESSION["NameTable"] ?>"/>
              <span style="color:red"><? echo $errorNameTable ?></span><br>
            <label>Номер операции(1-добавить,2-редактировать,3-удалить):</label><br>
              <input type="text" name="NumberOperation" value="<?=$_SESSION["NumberOperation"] ?>"/>
              <span style="color:red"><? echo $errorNumberOperation ?></span><br>
            <label>Поле №1</label><br>
              <input type="text" name="field1" value="<? echo $_SESSION["field1"] ?>"/>
              <span style="color:red"><? echo $errorfield1 ?></span><br>
            <label>Поле №2</label><br>
              <input type="text" name="field2" value="<? echo $_SESSION["field2"] ?>"/>
              <span style="color:red"><? echo $errorfield2 ?></span><br>
            <label>Поле №3</label><br>
              <input type="text" name="field3" value="<? echo $_SESSION["field3"] ?>"/>
              <span style="color:red"><? echo $errorfield3 ?></span><br>
            <label>Поле №4</label><br>
              <input type="text" name="field4" value="<? echo $_SESSION["field4"] ?>"/>
              <span style="color:red"><? echo $errorfield4 ?></span><br>
            <label>Поле №5</label><br>
              <input type="text" name="field5" value="<? echo $_SESSION["field5"] ?>"/>
              <span style="color:red"><? echo $errorfield5 ?></span><br>
            <label>Поле №6</label><br>
              <input type="text" name="field6" value="<? echo $_SESSION["field6"] ?>"/>
              <span style="color:red"><? echo $errorfield6 ?></span><br>
            <label>Поле №7</label><br>
              <input type="text" name="field7" value="<? echo $_SESSION["field7"] ?>"/>
              <span style="color:red"><? echo $errorfield7 ?></span><br>
            <input type="submit" name="send" value="Отправить"/>
            <span style="color:green"><? echo $errorsuccess ?></span>
          </form>
       </div>     
       <div class="output">
          <h5>Институты(1)</h5>
          <?
            OutputTable(2,institute,id,Name,0,0,0,0,0);
          ?>
          <h5>Факультеты(2)</h5>
          <?
            OutputTable(3,faculty,idFaculty, idInstitute,NameFaculty,0,0,0,0);
          ?>
          <h5>Специальности(3)</h5>
          <?
            OutputTable(3,specialty,idSpecialty, idFaculty,Name,0,0,0,0);
          ?>
          <h5>Кафедры(4)</h5>
          <?
            OutputTable(3,department,idDepartment, idFaculty,Name,0,0,0,0);
          ?>
          <h5>Группы(5)</h5>
          <?
            OutputTable(3,groups,idGroup,idSpecialty,Name,0,0,0,0);
          ?>
           <h5>Студент(6)</h5>
          <?
            OutputTable(4,student,idStudent,idGroup,Name,Surname,0,0,0);
          ?>
          <h5>Преподаватели(7)</h5>
           <?
            OutputTable(4,professor,idProfessor,idDepartment,Name,Surname,0,0,0);
          ?>
          <h5>Работы(8)</h5>
          <?
            OutputTable(7,work,idWork,idStudent,idTerm,idProfessor,NameWork,Professor,Evalution);
          ?>
          <h5>Семестр(9)</h5>
          <?
            OutputTable(2,term,idTerm,Number,0,0,0,0,0);
          ?>
          <h5>Место прохождения(10)</h5>
           <?
            OutputTable(3,placework,idPlaceWork,idWork,Name,0,0,0,0);
          ?>
       </div>
       
<script src="script.js"></script>
</body>
</html>