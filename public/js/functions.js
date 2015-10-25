function createMatricula() {
    var name = $(".alumnoName");
    var lastname = $(".alumnoLastname");
    var tabs = $("#payments-tab");
    for (var i = 0; i < name.size(); i++) {
        if ($(name[i]).val() == '') {
            $(tabs.children()[i]).css('display','none');
        }
        else
        {
            $(tabs.children()[i]).css('display','block').children('a').html($(name[i]).val().toUpperCase()+ ' '+ $(lastname[i]).val().toUpperCase());
            var a = i+1;
            var id = $('#alumno'+a+'Grade').val();
            console.log('a = '+a);
            $.ajax({
                url: "/grade/price",
                data: {
                    id: id
                },
                type:'post',
                success: function( data ) {

                    $("#payment"+a+"Matricula").val(data.price);
                }
            });
        }
    }
}
function validations(){
    var score = 0;
    var total = 0;
    var score2 = 0;
var data = {
    mama:{
        name:$("#motherName").val(),
        lastname:$("#motherLastname").val(),
        lastname2:$("#motherLastname2").val()
    },
    papa:{
        name:$("#fatherName").val(),
        lastname:$("#fatherLastname").val(),
        lastname2:$("#fatherLastname2").val()
    }
};
    if(data.mama.name != '') {
        score++;
    }
    if(data.papa.name != ''){
        score++;
    }
    if(score >=1){
        total++;
    }
    var name = $(".alumnoName");
    var lastname = $(".alumnoLastname");
    for (var i = 0; i < name.size(); i++) {
        if ($(name[i]).val() != '') {
            score2++;
        }
    }
    if(score2 >=1){
        total++;
    }
    if($("#ae") != 0){
        total++;
    }
    if(total == 3){
        $("#next").removeClass('disabled');
    }else{
        $("#next").addClass('disabled');
    }
}