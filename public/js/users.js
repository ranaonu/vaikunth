$(document).ready(function(){

    
    
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10) month = '0' + month.toString();
    if (day < 10) day = '0' + day.toString();

    var minDate = year + '-' + month + '-' + day;
    console.log(minDate);
    $('#travel_date').attr('min', minDate);



	$(document).on('click', '#submitContactUsForm', function(e) {
        e.preventDefault();
        var formId = $('form.contactForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            //$("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.contactForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('contactForm'));
            simpleAjax(url, data, 'createContactUsCallBack', 'post','json','');
        }
    });

    $(document).on('click', '#submitPackageButton', function(e) {
        var formId = $('form.addPackageForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            $("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.addPackageForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('addPackageForm'));
            simpleAjax(url, data, 'createPackagesFormCallBack', 'post','json','');
        }
    });


    $(document).on('change','#changeType',function(e){        
        //alert($(this).val())
        if ($(this).val()==='photo') {
            $('.phptoDiv').css('display','flex');
            $('.videoDiv').css('display','none');
            $('#addVideo').removeClass('required');
            $('#addVideo').val('');
            $('#addPhotos').addClass('required');
        } else {
            $('.phptoDiv').css('display','none');
            $('.videoDiv').css('display','flex');
            $('#addPhotos').removeClass('required');
            $('#addVideo').addClass('required');
            $('#addPhotos').val('');
        }
    })


    //showQueryModal
    $(document).on('click', '#showQueryModal', function(e) {
        e.preventDefault();
        //alert('I am here to show the query modal')
        $('#queryModal').modal('show');
    });

    //submitQueryForm

    $(document).on('click', '#submitQueryForm', function(e) {
        e.preventDefault();
        var formId = $('form.queryForm').attr('id');
        var validateFormResponse = validateForm(formId);
        if(!validateFormResponse){
            //$("html, body").animate({ scrollTop: 0 }, "fast");
            return false;

        }else{
            $('body').css('opacity','0.2');
            var url = $('form.queryForm').attr('action');
            //var data = $('form.createTeam').serialize()
            var data = new FormData(document.getElementById('queryForm'));
            simpleAjax(url, data, 'createContactUsCallBack', 'post','json','');
        }
    });

    //$('.queryForm')[0].reset();
    /*$(document).find(".queryForm")[0].reset()
    $('.contactForm')[0].reset();*/
    
});



function createContactUsCallBack(response,self) {
    console.log(response);
    $('body').css('opacity','1');
    if (response['status'] && response['status']=='success') {
        //alert('Thanks for contact us. We will get back to you soon.')
        //window.location.reload();
        //window.location.href = '/thank-you';
        window.location.href = site_url+"/thank-you/";
    } else {
        alert('Something went wrong');
    }
}

function createPackagesFormCallBack(response,self) {
    console.log('response');
    console.log(response);
    if (response['status'] && response['status']=='success') {
        alert(response.msg)
        window.location.reload();
    } else {
        alert('Something went wrong');
    }
}