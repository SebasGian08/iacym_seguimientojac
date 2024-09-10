let tableContactos;
tableContactos = $('#tableMedicos').dataTable( {
    "processing": true,
    "serverSide": true,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    },
    "ajax": {
        "url": "https://api.grupocodware.com/public/api/medicos",
        "dataSrc": ""
    },
    "columns": [
        {title:"ID","data": "idmedic"},
        {title:"Especialidad","data": "nommedic", "render": function(data, type, row, meta) {
            return row.consultorio.nomconsul; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"DNI","data": "dni", "render": function(data, type, row, meta) {
            return row.nummedc; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"Nombre y Apellidos","data": "nommedic", "render": function(data, type, row, meta) {
            return row.nommedic; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"Telefono","data": "telemed", "render": function(data, type, row, meta) {
            return row.telemed; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"Telefono","data": "direccmed", "render": function(data, type, row, meta) {
            return row.direccmed; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"Genero","data": "genero", "render": function(data, type, row, meta) {
            return row.genero; // Assuming you want to display the consultorio.nomconsul
        }},
        {title:"Correo","data": "correo", "render": function(data, type, row, meta) {
            return row.correo; // Assuming you want to display the consultorio.nomconsul
        }},   
        {"data": "fere", "render": function(data, type, row, meta) {
            return moment(data).format('YYYY-MM-DD'); // Format the date using Moment.js or other libraries
        }},
        /* {
            "data": null,
            "render": function(data, type, row, meta) {
                // Assuming you want to render buttons or other options for each row
                return "<button class='btn btn-primary'>Options</button>";
            }
        } */
    ],
    'dom': 'lBfrtip',
    'buttons': [
        {
            "extend": "copyHtml5",
            "text": "<i class='far fa-copy'></i> Copiar",
            "titleAttr":"Copiar",
            "className": "btn btn-secondary"
        },{
            "extend": "excelHtml5",
            "text": "<i class='fas fa-file-excel'></i> Excel",
            "titleAttr":"Esportar a Excel",
            "className": "btn btn-success"
        },{
            "extend": "pdfHtml5",
            "text": "<i class='fas fa-file-pdf'></i> PDF",
            "titleAttr":"Esportar a PDF",
            "className": "btn btn-danger"
        },{
            "extend": "csvHtml5",
            "text": "<i class='fas fa-file-csv'></i> CSV",
            "titleAttr":"Esportar a CSV",
            "className": "btn btn-info"
        }
    ],
    "responsive": true,
    "destroy": true,
    "pageLength": 10,
    "order": [[0, "desc"]]
});



