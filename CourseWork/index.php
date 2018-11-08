<html>
<head>
  <meta charset="UTF-8">
  <title>Курсовая работа</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="form">
    <img class="fon1" src="img/program2.jpg"></img>
    <div id="idinstitute" class="institute">
      <div class="title"><h1 class="h1">База данных по прохождению летних практик студентов ПГУ.</h1></div>
      <div class="select">
      <form>
         <select id="selectok1" name="institute">
          <optgroup label="Институты">
           <option value="politeh">Политехнический институт</option>
           <option value="medinst">Медицинский институт</option>
           <option value="pedinst">Педагогический институт</option>
           <option value="instph">Институт физической культуры и спорта</option>
           <option value="lowphak">Юридический факультет</option>
           <option value="economyph">Факультет экономики и управления</option>
          </optgroup>
         </select>
         <input type="button" id="ok1" value="Ok">
      </form>
      </div>
    </div>
    <div id="idfaculty" class="faculty">
     <form class="">
        <select id="selectok2" name="faculty">
          <optgroup label="Факультеты">   
          </optgroup>
       </select>
      <input type="button" id="ok2" value="Ok">
      </form>
    </div>
    
        <div id="iddepartment" class="department">
        <form>
           <select id="selectok6" name="department">
            <optgroup label="Кафедра">
            </optgroup>
           </select>
           <input type="button" id="ok6" value="Ok">
           </form>
        </div>
        <div id="idprofessors" class="professors">
        <form>
           <select id="selectok7" name="professors">
            <optgroup label="Профессоры">  
            </optgroup>
           </select>
           <input type="button" name="buttonOk7" id="ok7" value="Ok">
           </form>
        </div>
        
        <div id="idspecialty" class="specialty">
        <form class="">
            <select id="selectok3" name="specialty">
            <optgroup label="Специальности">
            </optgroup>
           </select>
           <input type="button" id="ok3" value="Ok">
          </form>
        </div>   
        <div id="idgroup" class="group">
        <form class="">
           <select id="selectok5" name="group">
            <optgroup label="Группы"> 
            </optgroup>
           </select>
          <input type="button" id="ok5" value="Ok">
          </form>
        </div>
      
  </div>
  <div id="idoutputdatastudents" class="outputdatastudents">
   <div class="texttitle2">
        Данные о практических работах:
   </div>
   <div class="outputds">
   Тут будут данные о практиках
   </div>
  </div>
    <div id="idtitledatastudent" class="titledatastudent">
      <div class="texttitle2">
        Введите данные студента:
      </div>
     </div>
    <div id="idinputdata" class="InputData">
      <form>
         <div class="datastudent">
          <div class="numberstudent">
            <label for="inputnumberstudent" class="label">Номер студента в группе:</label>
            <input id="inputnumberstudent" type="text" class="inputnumberstudent"placeholder="Номер студента в списке">
          </div>
          <div class="fio">
              <label for="inputfio" class="label">ФИО:</label>
              <input id="inputfio" type="text" class="fioinput" placeholder="Константинов Константин Константинович">
          </div>
          <div class="PracticalWork">
              <label for="inputPracticalWork" class="label">Практическая работа:</label>
              <input id="inputPracticalWork" type="text" class="fioinput" placeholder="Название работы">
          </div>
          <div class="professor_contaner">
              <label for="inputprofessor" class="label">Практическая работа:</label>
              <input id="inputprofessor" type="text" class="fioinput" placeholder="Имя и Фамилия преподавателя">
          </div>
          <a href="#" class="knopka02" tabindex="0">Отправить</a>
         </div>
      </form>
    <div id="idmade" class="made"><h1 class="h2">Created by Samushkin A.D.</h1></div>
    </div>
    
    <img class="strelochka" src="img/strelka.svg"></img>
    <img class="marker" src="img/marker.png"></img>
<script src="script.js"></script>
</body>
</html>