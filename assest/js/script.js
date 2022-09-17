$(document).ready( function () {
    $('#tabela').DataTable({
       "language": {
         url : '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
       }
     
    });
 } ); 

//  função q add users
const addUser = ()=>{

    // Captura todo o formulario e criar  um formData
    let form = new FormData($('#form-usuarios')[0]);

    const result = fetch('backend/addUser.php')

}