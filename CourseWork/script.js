$(function() {
  var ValInstitute;// в переменную загон€етс€ значение, выбранное в первом списке
  var ValFaculty;// в переменную загон€етс€ значение, выбранное в 2 списке
  var ValSpecialty;// в переменную загон€етс€ значение, выбранное в 3 списке
  var ValDepartment;// в переменную загон€етс€ значение, выбранное в 4 списке
  var ValGroup;// в переменную загон€етс€ значение, выбранное в 5 списке
  var ValProfessors;
  // все эти переменные будут передаватьс€ через ajax на сервер и обрабатыватьс€
  
  //Ћовим клик по первой кнопке OK и делаем видимым следующий список,
  // после чего считываем value дл€ передачи на сервер
   $('#ok1').click(function(e) {
  var v = document.getElementById("idfaculty"); // выбираем div, который хотим сделать видимым
    if(v.style.display != 'block')  // если display==none, 
        v.style.display = 'block'; // то мен€ем на block
    ValInstitute = $("#selectok1").val(); // считывает Value    
        switch (ValInstitute) {
          case "politeh":
           $('#selectok2').empty();// очищаем список, на случай, если до этого что то выбирали
           $('#selectok2').append('<option id="idfaculty1" class="faculty1" value="FVT">FVT</option>');
           $('#selectok2').append('<option id="idfaculty2" class="faculty2" value="FPITE">FPITE</option>');
           $('#selectok2').append('<option id="idfaculty3" class="faculty3" value="FMT">FMT</option>');         
            break;
          case "medinst":
            $('#selectok2').empty();
            $('#selectok2').append('<option id="id_medical_Faculty" class="MedicalFaculty" value="MedicalFaculty">Medical Faculty</option>');
            $('#selectok2').append('<option id="id_dental_Faculty" class="DentalFaculty" value="DentalFaculty">Dental Faculty</option>');
            break;
          case "pedinst":
             $('#selectok2').empty();
             $('#selectok2').append('<option id="id_FPPISN" class="FPPISN" value="FPPISN">FPPISN</option>');
             $('#selectok2').append('<option id="id_IFF" class="IFF" value="IFF">IFF</option>');
             $('#selectok2').append('<option id="id_FFMIEN" class="FFMIEN" value="FFMIEN">FFMIEN</option>');
            break;
          case "lowphak":
            $('#selectok2').empty();
            $('#selectok2').append('<option id="id_FacultyLaw" class="FacultyLaw" value="FacultyLaw">Faculty of Law</option>');
            break;
          case "economyph":
            $('#selectok2').empty();
            $('#selectok2').append('<option id="id_FacultyEconomics" class="FacultyEconomics" value="FacultyEconomics">Faculty of Economics</option>');
            break;
           case "instph":
           $('#selectok2').empty();
           $('#selectok2').append('<option id="id_instph" class="IPCS" value="IPCS">Select Speciality</option>');
           break;
          default:
            alert( 'я таких значений не знаю' );
        }
    });
  //Ћовим клик по 2 кнопке OK и делаем видимым следующий список,
  // после чего считываем value дл€ передачи на сервер  
    $('#ok2').click(function(e) {
  var b = document.getElementById("idspecialty");
    if(b.style.display != 'block')
        b.style.display = 'block';
    ValFaculty =  $("#selectok2").val();
    switch (ValFaculty) {
          case "FVT":
          $('#selectok3').empty();
          $('#selectok3').append('<option id="id_090301" class="" value="090301">09.03.01</option>');
          $('#selectok3').append('<option id="id_090302" class="" value="090302">09.03.02</option>');
          $('#selectok3').append('<option id="id_090304" class="" value="090304">09.03.04</option>');
          $('#selectok3').append('<option id="id_090303" class="" value="090303">09.03.03 </option>');
          $('#selectok3').append('<option id="id_020303" class="" value="020303">02.03.03 </option>');
          $('#selectok3').append('<option id="id_460302" class="" value="460302">46.03.02</option>');
          $('#selectok3').append('<option id="id_010301" class="" value="010301">01.03.01</option>');
          $('#selectok3').append('<option id="id_010304" class="" value="010304">01.03.04</option>');
          $('#selectok3').append('<option id="id_010302" class="" value="010302">01.03.02</option>');
            break;
          case "FMT":
           $('#selectok3').empty();
           $('#selectok3').append('<option id="id_220301" class="" value="220301">22.03.01</option>');
           $('#selectok3').append('<option id="id_150301" class="" value="150301">15.03.01</option>');
           $('#selectok3').append('<option id="id_150302" class="" value="150302">15.03.02</option>');
           $('#selectok3').append('<option id="id_150305" class="" value="150305">15.03.05</option>');
           $('#selectok3').append('<option id="id_230301" class="" value="230301">23.03.01</option>');
           $('#selectok3').append('<option id="id_200301" class="" value="200301">20.03.01</option>');
           $('#selectok3').append('<option id="id_230501" class="" value="230501">23.05.01</option>');
           $('#selectok3').append('<option id="id_150405" class="" value="150405">15.04.05</option>');
           $('#selectok3').append('<option id="id_230402" class="" value="230402">23.04.02</option>');
           $('#selectok3').append('<option id="id_220401" class="" value="220401">22.04.01</option>');
            break;
          case "FPITE":
           $('#selectok3').empty();
           $('#selectok3').append('<option id="id_030302" class="" value="030302">03.03.02</option>');
           $('#selectok3').append('<option id="id_110303" class="" value="110303">11.03.03</option>');
           $('#selectok3').append('<option id="id_110304 class="" value="110304">11.03.04</option>');
           $('#selectok3').append('<option id="id_120301" class="" value="120301">12.03.01</option>');
           $('#selectok3').append('<option id="id_120305" class="" value="120305">12.03.05</option>');
           $('#selectok3').append('<option id="id_130302" class="" value="130302">13.03.02</option>');
           $('#selectok3').append('<option id="id_150306" class="" value="150306">15.03.06</option>');
           $('#selectok3').append('<option id="id_270301" class="" value="270301">27.03.01</option>');
           $('#selectok3').append('<option id="id_270304 class="" value="270304">27.03.04</option>');
           $('#selectok3').append('<option id="id_100502" class="" value="100502">10.05.02</option>');
           $('#selectok3').append('<option id="id_100503" class="" value="100503">10.05.03</option>');
           $('#selectok3').append('<option id="id_110501" class="" value="110501">11.05.01</option>');
           $('#selectok3').append('<option id="id_170501" class="" value="170501">17.05.01</option>');
            break;
          case "MedicalFaculty":
          $('#selectok3').empty();
         $('#selectok3').append('<option id="id_310501" class="" value="310501">31.05.01</option>');
         $('#selectok3').append('<option id="id_310502" class="" value="310502">31.05.02</option>');
         $('#selectok3').append('<option id="id_300503" class="" value="300503">30.05.03</option>');
         $('#selectok3').append('<option id="id_330501" class="" value="330501">33.05.01</option>');
         $('#selectok3').append('<option id="id_120304" class="" value="120304">12.03.04</option>');
         $('#selectok3').append('<option id="id_310801" class="" value="310801">31.08.01</option>');
         $('#selectok3').append('<option id="id_310832 class="" value="310832">31.08.32</option>');
         $('#selectok3').append('<option id="id_310835" class="" value="310835">31.08.35</option>');
         $('#selectok3').append('<option id="id_310836" class="" value="310836">31.08.36</option>');
         $('#selectok3').append('<option id="id_310805" class="" value="310805">31.08.05</option>');
         $('#selectok3').append('<option id="id_310857" class="" value="310857">31.08.57</option>');
         $('#selectok3').append('<option id="id_310807" class="" value="310807">31.08.07</option>');
         $('#selectok3').append('<option id="id_310819" class="" value="310819">31.08.19</option>');
         $('#selectok3').append('<option id="id_310849" class="" value="310849">31.08.49</option>');
         $('#selectok3').append('<option id="id_310866" class="" value="310866">31.08.66</option>');
         $('#selectok3').append('<option id="id_310867" class="" value="310867">31.08.67</option>');
         $('#selectok3').append('<option id="id_300601" class="" value="300601">30.06.01</option>');
         $('#selectok3').append('<option id="id_140302" class="" value="140302">14.03.02</option>');
         $('#selectok3').append('<option id="id_140303" class="" value="140303">14.03.03</option>');
         $('#selectok3').append('<option id="id_140306" class="" value="140306">14.03.06</option>');
         $('#selectok3').append('<option id="id_310601" class="" value="310601">31.06.01</option>');
         $('#selectok3').append('<option id="id_140105" class="" value="140105">14.01.05</option>');
         $('#selectok3').append('<option id="id_140115" class="" value="140115">14.01.15</option>');
         $('#selectok3').append('<option id="id_140117" class="" value="140117">14.01.17</option>');
            break;
          case "DentalFaculty":
          $('#selectok3').empty();
           $('#selectok3').append('<option id="id" class="" value=""></option>');
            break;
           case "FPPISN":
           $('#selectok3').empty();
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
          $('#selectok3').append('<option id="id" class="" value=""></option>');
           break;
            case "FFMIEN":
            $('#selectok3').empty();
          $('#selectok3').append('<option id="id" class="" value=""></option>');
           break;
            case "FacultyLaw":
            $('#selectok3').empty();
          $('#selectok3').append('<option id="id" class="" value=""></option>');
           break;
            case "FacultyEconomics":
            $('#selectok3').empty();
          $('#selectok3').append('<option id="id" class="" value=""></option>');
           break;
            case "IPCS":
            $('#selectok3').empty();
          $('#selectok3').append('<option id="id" class="" value=""></option>');
           break;
          default:
            alert( 'я таких значений не знаю' );
        }
    });
    //  ј‘≈ƒ–ј
    $('#ok2').click(function(e) {
  var b = document.getElementById("iddepartment");
    if(b.style.display != 'block')
        b.style.display = 'block';
    ValFaculty =  $("#selectok2").val();
    switch (ValFaculty) {
          case "FVT":
          $('#selectok6').empty();
          $('#selectok6').append('<option id="SAPR" class="" value="SAPR">SAPR</option>');
          $('#selectok6').append('<option id="IVS" class="" value="IVS">IVS</option>');
          $('#selectok6').append('<option id="InOUP" class="" value="InOUP">InOUP</option>');
          $('#selectok6').append('<option id="MOiPEVM" class="" value="MOiPEVM">MOiPEVM</option>');
           $('#selectok6').append('<option id="VT" class="" value="VT">VT</option>');
          $('#selectok6').append('<option id="ViPM" class="" value="ViPM">ViPM</option>');
          $('#selectok6').append('<option id="MSM" class="" value="MSM">MSM</option>');
          $('#selectok6').append('<option id="KT" class="" value="KT">KT</option>');         
            break;
         case "FVT":
          $('#selectok6').append('<option id="empty" class="" value="empty">empty</option>'); 
            break;
         default:
            alert( 'я таких значений не знаю' );
        }
      
    });
    // кафедра энд
    // по 3
    $('#ok3').click(function(e) {
  var b = document.getElementById("idgroup");
    if(b.style.display != 'block')
        b.style.display = 'block';
     ValSpecialty =  $("#selectok3").val();
     switch (ValSpecialty) {
          case "090301":
           $('#selectok5').empty();
           $('#selectok5').append('<option id="15VV3" value="15VV3">15VV3</option>');
           $('#selectok5').append('<option id="16VV3" value="16VV3">16VV3</option>');
           $('#selectok5').append('<option id="17VV3" value="17VV3">17VV3</option>');
           $('#selectok5').append('<option id="18VV3" value="18VV3">18VV3</option>');
          break;
      default:
            alert( 'I do not know such values' );
     }
    });  
    //professors
     $('#ok6').click(function(e) {
  var b = document.getElementById("idprofessors");
  var c = document.getElementById("idspecialty");
  c.style.marginTop='-7.3%';
    if(b.style.display != 'block')
        b.style.display = 'block';
     ValDepartment =  $("#selectok6").val();
     switch (ValDepartment) {
          case "SAPR":
          $('#selectok7').empty();
           $('#selectok7').append('<option id="Ivanov" value="IvanovII">Ivanov I.I.</option>');
           $('#selectok7').append('<option id="Petrov" value="PetrovPP">Petrov P.P.</option>');
           $('#selectok7').append('<option id="Sidorov" value="SidorovSS">Sidorov S.S.</option>');
           $('#selectok7').append('<option id="Alexeev" value="AlexeevAA">Alexeev A.A.</option>');
          break;
          case "VT":
          $('#selectok7').empty();
          $('#selectok7').append('<option id="empty" value="empty">empty</option>');
      
     }
    });  
    // professors END
   // по 5 
    $('#ok5').click(function(e) {
      var b = document.getElementById("idoutputdatastudents");
      var b1 = document.getElementById("idtitledatastudent");
      var b2 = document.getElementById("idinputdata");
      var b12 = document.getElementById("idmade");
    if(b.style.display != 'block'){
        b.style.display = 'block';
        b1.style.display = 'block';
        b2.style.display = 'block';
        b12.style.display = 'block';
    }
    ValGroup =  $("#selectok5").val();
    });
    // при нажатии на ок у графы "профессоры"
     $('#ok7').click(function(e) {
      var b = document.getElementById("idoutputdatastudents");
      var b1 = document.getElementById("idtitledatastudent");
      var b2 = document.getElementById("idinputdata");
      var b12 = document.getElementById("idmade");
    if(b.style.display != 'block'){
        b.style.display = 'block';
        b1.style.display = 'block';
        b2.style.display = 'block';
        b12.style.display = 'block';
    }
    ValProfessors =  $("#selectok7").val();
    $.ajax ({
      url:"content.php",
      type:"POST",
      data:({ ValProfessors }),
    });
    
    });
});
