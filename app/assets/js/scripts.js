$(document).ready(function() {

    $('#dataTable').DataTable({
        dom: '<"top"lBf>tip',
        buttons: [
            {extend: 'print', text: '<i class="fa fa-print"></i> Imprimir', className: 'btn btn-sm btn-outline-secondary ms-4'},
            {extend: 'pdf', text: '<i class="fa fa-file-pdf"></i> PDF', className: 'btn btn-sm btn-outline-danger'},
            {extend: 'excel', text: '<i class="fa fa-file-excel"></i> Excel', className: 'btn btn-sm btn-outline-success'}
        ]
    });

});