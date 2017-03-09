 $.get("/back/Activate.php?id="+userId+"&type="+typeId,function(data){ 
    $('#message').html(data.response);
 },"json"); 

