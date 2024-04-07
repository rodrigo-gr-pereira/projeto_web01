
        $(function(){
            /*
            var mensagem = 'Olá mundo';
            console.log(mensagem);
            alert(mensagem);
            //alert("Funcionado!");
            */
           $('nav.mobile').click(function(){
                var listaMenu = $('nav.mobile ul');
                //abrir menu atraves do fadeIn()/fadeOut()
                /*
                if(listaMenu.is(':hidden')== true){
                listaMenu.fadeIn(); 
                }else{
                    listaMenu.fadeOut();
                }
                */
              
               //abrir e fechar sem efeitos
               /*
               if(listaMenu.is(':hidden')== true){
                // listaMenu.show();
                    listaMenu.css('display', 'block'); 
                }else{
                    // listaMenu.hide();
                        listaMenu.css('display', 'none');
                }
                */
                if(listaMenu.is(':hidden')== true){
                    //<i class="fa-solid fa-xmark"></i>
                    // <i class="fa-solid fa-bars"></i>
                    //var icone = $('.botao-menu-mobile i');
                    var icone = $('.botao-menu-mobile').find('i');
                    icone.removeClass('fa-bars');
                    icone.addClass('fa-xmark');
                    listaMenu.slideToggle();
                    }else{
                        var icone = $('.botao-menu-mobile').find('i');
                    icone.removeClass('fa-xmark');
                    icone.addClass('fa-bars');
                        listaMenu.slideToggle();
                    }

            });

            if($('target').length > 0){
                //O elemento existe, portanto precisamos dar o scroll em algum elemento.
                var elemento = '#'+$('target').attr('target');
        
                var divScroll = $(elemento).offset().top;
        
                $('html,body').animate({scrollTop:divScroll},2000);
            }
           
        })