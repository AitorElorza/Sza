function alokatu(id,user){
    $.ajax({
        url: '../php/Alokatu.php',
        type: 'POST',
        data: {id: id, user: user},
        success: function(data){
            //alert(data);
            window.location.reload();
        }
        
    });
    
}