$(document).ready(function() {

    $('#dataTable').DataTable({
        language: {
            'url': './assets/vendor/datatables/datatable.pt-br.json',
            search: '',
            searchPlaceholder: "Digite para pesquisar" 
        },
        dom: '<"top"lBf>tip',
        buttons: [
            {extend: 'print', text: '<i class="fa fa-print"></i> Imprimir', className: 'btn btn-sm btn-outline-secondary ms-4'},
            {extend: 'pdf', text: '<i class="fa fa-file-pdf"></i> PDF', className: 'btn btn-sm btn-outline-danger'},
            {extend: 'excel', text: '<i class="fa fa-file-excel"></i> Excel', className: 'btn btn-sm btn-outline-success'}
        ]
    });

    $('.cpf').mask('999.999.999-99', {placeholder: '999.999.999-99'})
    $('.phone').mask('(99) 99999-9999', {placeholder: '(99) 99999-9999'})
    $('.cep').mask('99999-999', {placeholder: '99999-999'})

    //Consultando CEP
    function limpa_formulario_cep() {
        // Limpa valores do formulário de cep.
        $(".streetName").val("");
        $(".districtName").val("");
        $(".cityName").val("");
        $(".stateName").val("");
        // $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $(".cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep !== "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $(".streetName").val("...");
                $(".districtName").val("...");
                $(".cityName").val("...");
                $(".stateName").val("...");
                // $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $(".streetName").val(dados.logradouro);
                        $(".districtName").val(dados.bairro);
                        $(".cityName").val(dados.localidade);
                        $(".stateName").val(dados.uf);
                        // $("#ibge").val(dados.ibge);

                        $('.helpCep').removeClass('d-inline')
                        $('.cep').removeClass('border-warning')
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulario_cep();
                        $('.helpCep').addClass('d-inline')
                        $('.cep').addClass('border-warning')
                        // alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulario_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulario_cep();
        }
    });

    $("#alert-msg").fadeTo(5000, 500).fadeOut(700, function(){
        $("#alert-msg").fadeOut(700);
    });


    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('Service Worker registrado com sucesso:', registration);
            })
            .catch(error => {
                console.error('Erro ao registrar o Service Worker:', error);
            });
        });
    }


    $(document).on('click', '#btnCustomerDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

    $(document).on('click', '#btnPropertyDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

    $(document).on('click', '#btnPlotDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

    $(document).on('click', '#btnCultureDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

    $(document).on('click', '#btnProblemDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

    $(document).on('click', '#btnClassDelete', function() {
        let link = $(this).attr('link')
        if (confirm(" Corfima a exclusão? ")) {
            location.href = `${link}`;
        }
    })

});