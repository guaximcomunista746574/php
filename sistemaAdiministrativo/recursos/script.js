$(document).ready(function(){
    $('#tabela').dataTable();
});

var table = new DataTable('#tabela', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json',
    },
});

