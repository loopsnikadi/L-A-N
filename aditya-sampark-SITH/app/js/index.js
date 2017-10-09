$(document).ready(function(){

$("#viewDetails").click(function(){
alert("good going");
    $.ajax({
        type:"GET",
        url:"http://localhost/sampark-SITH/api/readUser/",
        success:function(data){
            $("#showDetails").html(data);
        }  
    });
});
});