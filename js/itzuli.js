function itzuli(id){
    $.ajax({
        url: '../php/Itzuli.php',
        type: 'POST',
        data: {id: id},
        success: function(data){
            //alert(data);
            window.location.reload();
        }
        
    });
    
}