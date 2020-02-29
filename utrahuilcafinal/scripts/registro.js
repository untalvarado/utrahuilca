var tabla;

//Función que se ejecuta al inicio
function init(){
  mostrarform(false);
  listar();

  $("#formulario").on("submit",function(e)
  {
    guardaryeditar(e);  
  })
 

   //Cargamos los items al select categoria
  $.post("../ajax/registro.php?op=selectVacantes", function(r){
             $("#idvacante").html(r);
             $('#idvacante').selectpicker('refresh');
 });



 //Cargamos los items al select de las Agencias
    $.post("../ajax/registro.php?op=selectDepartamentosNacimiento", function(r){
        //Agencias
      $("#idDepartamentosNacimiento").html(r);
      $("#idDepartamentosNacimiento").selectpicker('refresh');
    });

  //Cargar los casus segun la agencia que se seleccione
    $("#idDepartamentosNacimiento").change(function(){
        $("#idDepartamentosNacimiento option:selected").each(function(){
            var idDepartamentosNacimiento= $(this).val();
            $.post("../ajax/registro.php?op=SelectCiudadesNacimiento", { idDepartamentosNacimiento : idDepartamentosNacimiento }, function(data){
                $("#idciudadesNacimiento").html(data);
                $("#idciudadesNacimiento").selectpicker('refresh');
            });
        });
    });

//Cargamos los items al select de las Agencias
    $.post("../ajax/registro.php?op=selectDepartamentosResidencia", function(r){
        //Agencias
      $("#idDepartamentoResidencia").html(r);
      $("#idDepartamentoResidencia").selectpicker('refresh');
    });

  //Cargar los casus segun la agencia que se seleccione
    $("#idDepartamentoResidencia").change(function(){
        $("#idDepartamentoResidencia option:selected").each(function(){
            var idDepartamentoResidencia = $(this).val();
            $.post("../ajax/registro.php?op=SelectCiudadesResidencia", { idDepartamentoResidencia : idDepartamentoResidencia }, function(data){
                $("#idCiudadesResidencia").html(data);
                $("#idCiudadesResidencia").selectpicker('refresh');
            });
        });
    });


    //Cargamos los items al select de las Agencias
    $.post("../ajax/registro.php?op=selectDepartamentosFormacion", function(r){
        //Agencias
      $("#idDeparmentoFormacion").html(r);
      $("#idDeparmentoFormacion").selectpicker('refresh');
    });

  //Cargar los casus segun la agencia que se seleccione
    $("#idDeparmentoFormacion").change(function(){
        $("#idDeparmentoFormacion option:selected").each(function(){
            var idDeparmentoFormacion = $(this).val();
            $.post("../ajax/registro.php?op=SelectCiudadesFormacion", { idDeparmentoFormacion : idDeparmentoFormacion }, function(data){
                $("#idciudadFormacion").html(data);
                $("#idciudadFormacion").selectpicker('refresh');
            });
        });
    });


    //Cargamos los items al select de las Agencias
    $.post("../ajax/registro.php?op=selectDepartamentosTrabajo", function(r){
        //Agencias
      $("#idDepartamentoTrabajo").html(r);
      $("#idDepartamentoTrabajo").selectpicker('refresh');
    });

  //Cargar los casus segun la agencia que se seleccione
    $("#idDepartamentoTrabajo").change(function(){
        $("#idDepartamentoTrabajo option:selected").each(function(){
            var idDepartamentoTrabajo = $(this).val();
            $.post("../ajax/registro.php?op=SelectCiudadesTrabajo", { idDepartamentoTrabajo : idDepartamentoTrabajo }, function(data){
                $("#idCiudadTrabajo").html(data);
                $("#idCiudadTrabajo").selectpicker('refresh');
            });
        });
    });



 //Cargamos los items al select de las Agencias
    $.post("../ajax/registro.php?op=selectescolaridad", function(r){
        //Agencias
      $("#idescolaridad").html(r);
      $("#idescolaridad").selectpicker('refresh');
    });
 //Cargar los casus segun la agencia que se seleccione
    $("#idescolaridad").change(function(){
        $("#idescolaridad option:selected").each(function(){
            var idescolaridad = $(this).val();
            $.post("../ajax/registro.php?op=SelectTitulacion", { idescolaridad : idescolaridad }, function(data){
                $("#idtitulacion").html(data);
                $("#idtitulacion").selectpicker('refresh');
            });
        });
    });
}

//Función limpiar
function limpiar()
{
  $("#idvacante").val("");
  $("#idDepartamentosNacimiento").val("");
  $("#idciudadesNacimiento").val("");
  $("#idescolaridad").val("");
  $("#idtitulacion").val("");
  $("#idDepartamentoResidencia").val("");
  $("#idCiudadesResidencia").val("");
  $("#idDeparmentoFormacion").val("");
  $("#idciudadFormacion").val("");
  $("#idDepartamentoTrabajo").val("");
  $("#idCiudadTrabajo").val("");
  $("#politicas_Aceptacion").val("");
  $("#Nombres").val("");
  $("#Apellidos").val("");
  $("#TipoIdentificacion").val("");
  $("#NumeroIdentificacion").val("");
  $("#genero").val("");
  $("#estadoCivil").val("");
  $("#FechaNacimiento").val("");
  $("#Direccion").val("");
  $("#barrio").val("");
  $("#Telefono").val("");
  $("#Celular").val("");
  $("#CorreoElectronico").val("");
  $("#estadoEstudio").val("");
  $("#FechaInicio").val("");
  $("#FechaFin").val("");
  $("#TituloOtorgado").val("");
  $("#NombreInstitucion").val("");
  $("#cursoNombTitulo").val("");
  $("#NomIntitu").val("");
  $("#fechainc").val("");
  $("#fechafi").val("");
  $("#Empresa").val("");
  $("#FechaIni").val("");
  $("#Telefo").val("");
  $("#EstadoTrabajo").val("");
  $("#FechaFinalizacion").val("");
  $("#jefeInmediato").val("");
  $("#NombreCargo").val("");
  $("#FuncionesPrincipales").val("");
  $("#empresa2").val("");
  $("#jefeInmediato2").val("");
  $("#fechaini2").val("");
  $("#fechater2").val("");
  $("#telefon2").val("");
  $("#FuncionesPrin2").val("");
  $("#nombrecargo2").val("");
  $("#NombreFa").val("");
  $("#TelefonoFa").val("");
  $("#celufa").val("");
  $("#Parentesco").val("");
  $("#NombrePersonal1").val("");
  $("#Telefono1").val("");
  $("#Celul").val("");
  $("#NombrePersonal2").val("");
  $("#Telefono2").val("");
  $("#cel").val("");
  $("#idhoja").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
  limpiar();
  if (flag)
  {
    $("#listadoregistros").hide();
    $("#formularioregistros").show();
    $("#btnGuardar").prop("disabled",false);
    $("#btnagregar").hide();
  }
  else
  {
    $("#listadoregistros").show();
    $("#formularioregistros").hide();
    $("#btnagregar").show();
  }
}

//Función cancelarform
function cancelarform()
{
  limpiar();
  mostrarform(false);
}

//Función Listar
function listar()
{
  tabla=$('#tbllistado').dataTable(
  {
    "aProcessing": true,//Activamos el procesamiento del datatables
      "aServerSide": true,//Paginación y filtrado realizados por el servidor
      dom: 'Bfrtip',//Definimos los elementos del control de tabla
      buttons: [              
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'
            ],
    "ajax":
        {
          url: '../ajax/registro.php?op=Listar',
          type : "get",
          dataType : "json",            
          error: function(e){
            console.log(e.responseText);  
          }
        },
    "bDestroy": true,
    "iDisplayLength": 5,//Paginación
      "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
  }).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
  e.preventDefault(); //No se activará la acción predeterminada del evento
  $("#btnGuardar").prop("disabled",true);
  var formData = new FormData($("#formulario")[0]);

  $.ajax({
    url: "../ajax/registro.php?op=GuardaryEditar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,

      success: function(datos)
      {                    
            bootbox.alert(datos);           
            mostrarform(false);
            tabla.ajax.reload();
      }

  });
  limpiar();
}

function mostrar(idhoja)
{
  $.post("../ajax/registro.php?op=Mostrar",{idhoja : idhoja}, function(data, status)
  {
    data = JSON.parse(data);    
    mostrarform(true);

 $("#idvacante").val(data.idvacante);
 $('#idvacante').selectpicker('refresh');
 $("#idDepartamentosNacimiento").val(data.idDepartamentosNacimiento);
 $('#idDepartamentosNacimiento').selectpicker('refresh');
 $("#idciudadesNacimiento").val(data.idciudadesNacimiento);
 $('#idciudadesNacimiento').selectpicker('refresh');
 $("#idescolaridad").val(data.idescolaridad);
 $('#idescolaridad').selectpicker('refresh');
 $("#idtitulacion").val(data.idtitulacion);
 $('#idtitulacion').selectpicker('refresh');
 $("#idDepartamentoResidencia").val(data.idDepartamentoResidencia);
 $('#idDepartamentoResidencia').selectpicker('refresh');
 $("#idCiudadesResidencia").val(data.idCiudadesResidencia);
 $('#idCiudadesResidencia').selectpicker('refresh');
 $("#idDeparmentoFormacion").val(data.idDeparmentoFormacion);
 $('#idDeparmentoFormacion').selectpicker('refresh');
 $("#idciudadFormacion").val(data.idciudadFormacion);
 $('#idciudadFormacion').selectpicker('refresh');
 $("#idDepartamentoTrabajo").val(data.idDepartamentoTrabajo);
 $('#idDepartamentoTrabajo').selectpicker('refresh');
 $("#idCiudadTrabajo").val(data.idCiudadTrabajo);
 $('#idCiudadTrabajo').selectpicker('refresh');
 $("#politicas_Aceptacion").val(data.politicas_Aceptacion);
 $("#Nombres").val(data.Nombres);
 $("#Apellidos").val(data.Apellidos);
 $("#TipoIdentificacion").val(data.TipoIdentificacion);
 $("#NumeroIdentificacion").val(data.NumeroIdentificacion);
 $("#genero").val(data.genero);
 $("#estadoCivil").val(data.estadoCivil);
 $("#FechaNacimiento").val(data.FechaNacimiento);
 $("#Direccion").val(data.Direccion);
 $("#barrio").val(data.barrio);
 $("#Telefono").val(data.Telefono);
 $("#Celular").val(data.Celular);
 $("#CorreoElectronico").val(data.CorreoElectronico);
 $("#estadoEstudio").val(data.estadoEstudio);
 $("#FechaInicio").val(data.FechaInicio);
 $("#FechaFin").val(data.FechaFin);
 $("#TituloOtorgado").val(data.TituloOtorgado);
 $("#NombreInstitucion").val(data.NombreInstitucion);
 $("#cursoNombTitulo").val(data.cursoNombTitulo);
 $("#NomIntitu").val(data.NomIntitu);
 $("#fechainc").val(data.fechainc);
 $("#fechafi").val(data.fechafi);
 $("#Empresa").val(data.Empresa);
 $("#FechaIni").val(data.FechaIni);
 $("#Telefo").val(data.Telefo);
 $("#EstadoTrabajo").val(data.EstadoTrabajo);
 $("#FechaFinalizacion").val(data.FechaFinalizacion);
 $("#jefeInmediato").val(data.jefeInmediato);
 $("#NombreCargo").val(data.NombreCargo);
 $("#FuncionesPrincipales").val(data.FuncionesPrincipales);
 $("#empresa2").val(data.empresa2);
 $("#jefeInmediato2").val(data.jefeInmediato2);
 $("#fechaini2").val(data.fechaini2);
 $("#fechater2").val(data.fechater2);
 $("#telefon2").val(data.telefon2);
 $("#FuncionesPrin2").val(data.FuncionesPrin2);
 $("#nombrecargo2").val(data.nombrecargo2);
 $("#NombreFa").val(data.NombreFa);
 $("#TelefonoFa").val(data.TelefonoFa);
 $("#celufa").val(data.celufa);
 $("#NombrePersonal1").val(data.NombrePersonal1);
 $("#Telefono1").val(data.Telefono1);
 $("#Celul").val(data.Celul);
 $("#NombrePersonal2").val(data.NombrePersonal2);
 $("#Telefono2").val(data.Telefono2);
 $("#cel").val(data.cel);
 $("#idhoja").val(data.idhoja);

  })
}

//Función para desactivar registros
function desactivar(idhoja)
{
  bootbox.confirm("¿Está Seguro de desactivar esta Area?", function(result){
    if(result)
        {
          $.post("../ajax/registro.php?op=desactivar", {idhoja : idhoja}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

//Función para activar registros
function activar(idhoja)
{
  bootbox.confirm("¿Está Seguro de activar el Area ?", function(result){
    if(result)
        {
          $.post("../ajax/registro.php?op=activar", {idhoja : idhoja}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}


function eliminar(idhoja)
{
  bootbox.confirm("¿Está Seguro de eliminar la noticia?", function(result){
    if(result)
        {
          $.post("../ajax/registro.php?op=eliminar", {idhoja : idhoja}, function(e){
            bootbox.alert(e);
              tabla.ajax.reload();
          }); 
        }
  })
}

init();