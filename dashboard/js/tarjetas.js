$(document).ready(function (){

    $.ajax({
        url: './php/data_cards.php',
        type: 'GET',
        success: function(param) { 
            let dato = JSON.parse(param);
            let tes = document.getElementsByClassName("items").length

            let item = []
            let datos = []
            let k = 1;
            let h = 1;
            for(let i in dato){
                for(let j in dato[i]){         
                    document.getElementById(`i${k}`).innerHTML = j;
                    document.getElementById(`it${k}`).innerHTML = dato[i][j];
                    k++;              
                }
            }

         }
    })

});