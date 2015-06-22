$(function(){
    $.fn.wizard.logging = true;


    var wizard = $('#satellite-wizard').wizard({
        keyboard : false,
        contentHeight : 400,
        contentWidth : 700,
        backdrop: 'static'
    });

    $('#btn-open-wizard').click(function(e) {
        e.preventDefault();
        wizard.show();
    });
    wizard.on('closed', function() {
        wizard.reset();
    });

    wizard.on("reset", function() {
        wizard.modal.find(':input').val('').removeAttr('disabled');
        wizard.modal.find('.form-group').removeClass('has-error').removeClass('has-succes');
        wizard.modal.find('#fqdn').data('is-valid', 0).data('lookup', 0);
    });


    wizard.on("submit", function(wizard) {   

        this.log('seralize()');
        this.log(this.serialize());
        this.log('serializeArray()');
        this.log(this.serializeArray());
    
        var data = wizard.serialize();
        
        $.ajax({
            type: 'POST',
            url: 'save/pdf',
            data: data,
            success: function(data) {
                console.info(data);
                if(data.success) {
                  window.open('pdf/' + data.id,'_blank');
                    $('#page').load('ballots');
                }
            }
        })

        setTimeout(function() {
            wizard.trigger("success");
            wizard.hideButtons();
            wizard._submitting = false;
            wizard.showSubmitCard("success");
            wizard.updateProgressBar(0);

            setTimeout(function(){
                wizard.hide();
            },1000);
        }, 2000); 
    });

    wizard.el.find(".wizard-success .im-done").click(function() {
        wizard.hide();
        setTimeout(function() {
            wizard.reset();
        }, 250);

    });

    wizard.el.find(".wizard-success .create-another-server").click(function() {
        wizard.reset();
    });

    /////////////////////////////DETALLE DE CONTRAREFERENCIA ////////


    //Evento click
    $('.detalleBallot').click(detail);
    $('#btnSaveDetailBallot').click(saveDetail);

    function detail(e){

        var id =$(this).data('id');
        Helper.blockPage();
        $('#div-modal').load('ballotsDetail/' + id ,function(){
            Helper.unblockPage();
            $('#createDetailBallot').modal({show:true});

        });
        e.preventDefault();
    }
    function saveDetail()
    {
        $.ajax({
            url: 'ballotsDetailSave',
            data: $("#form-create-Detail").serialize(),
            success: function(data){
                console.info(data);
                if(data.success) {
                    window.open('pdfDetail/' + data.id,'_blank');
                    $('#page').load('ballots');

                }
            },
            error: function(xhr,ajaxOptions,thrownError){
                console.log(xhr.status);
                console.error(thrownError);
            }
        });
    }
    $('.downloadDetalle').on('click',function(){
        var id =$(this).data('id');
        window.open('pdfDetail23/' + id,'_blank');

    });





});