
        $(function(){
            /*
            var mensagem = 'Olá mundo';
            console.log(mensagem);
            alert(mensagem);
            //alert("Funcionado!");
            */
           $('nav.mobile').click(function(){
                var listaMenu = $('nav.mobile ul');
                if(listaMenu.is(':hidden')== true){
                listaMenu.fadeIn(); 
                }else{
                    listaMenu.fadeOut();
                }
           })
        })