$(document).ready(function(){
listar();
});
//-----------------------------------------------------------
    
	     function listar(){
           __ajax("listar.php","")
		   .done(function(info){
            var productos=JSON.parse(info);
            var html='';
          for (var i in productos.data) {
            html+=`<tr>  
      <td align="center">${productos.data[i].producto}</td>
       <td align="center">${productos.data[i].precio}</td>
        <td align="center">${productos.data[i].stock}</td>
        <td align="center"><img src="profile-2.png" width="120" height="80"></td>
        <td align="center">
        <button class="open-Modal btn-info" onClick="editar(${productos.data[i].idproducto});"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</button>
        </td>
        <td align="center">
    <button class="btn-danger" onClick="borrar(${productos.data[i].idproducto});"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
        </td>
       </tr>`
      }
   $('tbody').html(html);
		   });
		 }

//-----------------------------------------------------------

 $('#form').submit(function(e){
         e.preventDefault();
         __ajax1("guardar.php",$('#form').serialize())
        .done(function(info){
        if(info){
        great(info);
            listar();
           $('#myModal').modal('hide')
           }else{
           bad();
          }
        });
     });
  
  //-----------------------------------------------------------      

function editar(id){
$('#myModal2').modal('show');
$.ajax({
      url: 'leerUno.php',
      type: 'POST',
      data: 'id='+id,
      dataType: 'json'
})
.done(function(data){
$(".modal-body #idproducto").val(data.idproducto); 
$(".modal-body #nombre").val(data.producto); 
$(".modal-body #precio2").val(data.precio); 
$(".modal-body #stock2").val(data.stock); 
});
}

//-----------------------------------------------------------

function borrar(id){
 var url= 'eliminar.php';
swal({
  title: "¿Estás seguro?",
  text: "Borraras esta registro con ID Nro: "+id,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Borrar!",
  cancelButtonText: "Cancelar",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
 $.ajax({
type:'POST',
url:url,
data:'id='+id,
success: function(data){
swal({
    title: "Excelente!...",
    text: data,
    type:"success",
    timer: 500,
    showConfirmButton: true
  });
listar();
}
});
return false;
  } else {
    swal("Cancelado", "Tu registro esta a salvo :)", "error");
  }
});
}
//-----------------------------------------------------------


$('#formProducto').submit(function(event) {
event.preventDefault();
$.ajax({
type:'POST',
dataType:'json',
url:'editar.php',
data:$('#formProducto').serialize(),
success:function(data){
// swal({
//     title: "Excelente!...",
//     text: data,
//     type:"success",
//     timer: 500,
//     showConfirmButton: true
//   });
$.toast({
    text: data, 
    heading: "Excelente!", 
    icon: 'success', 
    showHideTransition: 'fade',
    allowToastClose: true, 
    hideAfter: 1000, 
    stack: 5, 
    position:'top-right', 
    textAlign: 'left', 
    loader: true,  
    loaderBg: '#9ec600'
   
});





listar();
$('#myModal2').modal('hide');
}
});
return false;
});

//-----------------------------------------------------------
 function __ajax(url,data){
			var ajax= $.ajax({
        "method":"POST",
			  "url":url,
			  "data":data
			 });
          return ajax;
		 }
//-----------------------------------------------------------
        function __ajax1(url,data){
      var ajax= $.ajax({
        "method":"post",
        "datatype":"json",
        "url":url,
        "data":data
       });
          return ajax;
     }

 //-----------------------------------------------------------
   //function data buena 
            

     function great(info){

    Push.create("Excelente!", {
    body: info,
    icon: 'buena.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
     });
   }
//-----------------------------------------------------------
  //function data mala 
            
   function bad(){
        Push.create("Error!", {
    body: "no se inserto nada",
    icon: 'mala.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
    });
    }       