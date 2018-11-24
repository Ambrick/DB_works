<?
/* кол-во заголовоков, Название таблицы, 7 названий заголовков*/
function OutputTable($CountTitle,$NameTable,$NameTitleBD1,$NameTitleBD2,$NameTitleBD3,$NameTitleBD4,$NameTitleBD5,$NameTitleBD6,$NameTitleBD7){
   $hostname = 'localhost';
   $username = 'root';
   $passwordname = 'Kortik111';
   $basename = 'databaseuniveristy';
   $conn = new mysqli($hostname, $username, $passwordname, $basename) or die ('Невозможно открыть базу');
   // Формируем запрос из таблицы с именем insitute/1
   $sql = "SELECT * FROM `$NameTable`";
   $result = $conn->query($sql);
   switch ($CountTitle) {
   	case '2':
   		 // В цикле перебираем все записи таблицы и выводим их
		  echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th></tr>";
		  while ($row = $result->fetch_assoc())
		  {
			  // Оператором echo выводим на экран поля таблицы id и Name
			  echo	"<tr><td>";
			  echo $row["$NameTitleBD1"];
			  echo "</td><td>";
			  echo $row["$NameTitleBD2"];
			  echo "</td>";
		  }
		   echo "</tr></table>";
   		break;
   	case '3':
	   		 // В цикле перебираем все записи таблицы и выводим их
	   echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th><th>$NameTitleBD3</th></tr>";
	   while ($row = $result->fetch_assoc())
	   {
		   // Оператором echo выводим на экран поля таблицы id и Name
		   echo	"<tr><td>";
		   echo $row["$NameTitleBD1"];
		   echo "</td><td>";
		   echo $row["$NameTitleBD2"];
		   echo "</td><td>";
		   echo $row["$NameTitleBD3"];
		   echo "</td>";
	   }
	   echo "</tr></table>";
   		break;
   	case '4':
   		 // В цикле перебираем все записи таблицы и выводим их
		   echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th><th>$NameTitleBD3</th><th>$NameTitleBD4</th></tr>";
		   while ($row = $result->fetch_assoc())
		   {
			   echo	"<tr><td>";
			   echo $row["$NameTitleBD1"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD2"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD3"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD4"];
			   echo "</td>";
		   }
		   echo "</tr></table>";
   		break;
   	case '5':
   		echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th><th>$NameTitleBD3</th><th>$NameTitleBD4</th><th>$NameTitleBD5</th></tr>";
   		while ($row = $result->fetch_assoc())
		   {
			   echo	"<tr><td>";
			   echo $row["$NameTitleBD1"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD2"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD3"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD4"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD5"];
			   echo "</td>";
		   }
		   echo "</tr></table>";
   		break;
   	case '6':
   		echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th><th>$NameTitleBD3</th><th>$NameTitleBD4</th><th>$NameTitleBD5</th><th>$NameTitleBD6</th></tr>";
   		while ($row = $result->fetch_assoc())
		   {
			   echo	"<tr><td>";
			   echo $row["$NameTitleBD1"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD2"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD3"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD4"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD5"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD6"];
			   echo "</td>";			   
		   }
		   echo "</tr></table>";
   		break;
   	case '7':
   		echo "<table border='1'><tr><th>$NameTitleBD1</th><th>$NameTitleBD2</th><th>$NameTitleBD3</th><th>$NameTitleBD4</th><th>$NameTitleBD5</th><th>$NameTitleBD6</th><th>$NameTitleBD7</th></tr>";
   		while ($row = $result->fetch_assoc())
		   {
			   echo	"<tr><td>";
			   echo $row["$NameTitleBD1"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD2"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD3"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD4"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD5"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD6"];
			   echo "</td><td>";
			   echo $row["$NameTitleBD7"];
			   echo "</td>";			   
		   }
		   echo "</tr></table>";
   		break;
   	default:
   		echo("Ни в одной таблице БД нет столько столбцов)");
   		break;
   }
  
   // Работа с данными
 
}
?>