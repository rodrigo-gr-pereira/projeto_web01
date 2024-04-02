<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavra-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Projeto 01</title>
</head>
<body>
    
    <header>
        <div class="center">
        <div class="logo left">Logo</div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Serviços</a></li>
                <li><a href="">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div class="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
            </div>
            <ul>    
                <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
        </nav>
        <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="banner-principal">
    <div class="overlay"></div><!--overlay-->
        <div class="center">
        <form>
            <h2>Qual o seu melhor e-mail</h2>
            <input type="email" name="email" required />
            <input type="submit" name="acao" value="Cadastrar!">
        </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
        <div class="w50 left">
             <h2>Rodrigo Pereira</h2>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint dolorum nulla vitae 
                esse modi ratione quidem omnis labore? Minima perspiciatis, quasi cumque velit ducimus unde
                 incidunt maiores quisquam iste reiciendis?</p>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, explicabo. Neque et voluptatibus nesciunt
                     fugit laboriosam, qui iure autem quod, blanditiis ullam nostrum optio dolores error quis perspiciatis quo officiis!</p>
        </div><!--w50-->
        <div class="w50 left">
            <img class="right" src="img/foto.jpg">
        </div><!--w50-->
        <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
            <div class="center">
            <h2 class="title">Especialidades</h2>
                <div class="w33 left box-especialidade">
                    <h3><i class="fa-brands fa-css3"></i></h3>
                    <h4>CSS3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero placeat recusandae numquam hic, at ipsam animi repellendus, saepe similique voluptatibus molestiae delectus 
                        libero deserunt expedita quae impedit magni earum.</p>
                </div><!--box-especialidade-->
                
                <div class="w33 left box-especialidade">
                    <h3><i class="fa-brands fa-html5"></i></h3>
                    <h4>HTML5</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero placeat recusandae numquam hic, at ipsam animi repellendus, saepe similique voluptatibus molestiae delectus 
                        libero deserunt expedita quae impedit magni earum.</p>
                </div><!--box-especialidade-->
                
                <div class="w33 left box-especialidade">
                    <h3><i class="fa-brands fa-js"></i></h3>
                    <h4>JavaScript</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem vero placeat recusandae numquam hic, at ipsam animi repellendus, saepe similique voluptatibus molestiae delectus 
                        libero deserunt expedita quae impedit magni earum.</p>
                </div><!--box-especialidade-->
                <div class="clear"></div>
                </div>
    </section><!--especialidades-->

    <section class="extras">

        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos de nosssos clientes</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor aperiam, est vero natus minus atque aliquid nulla aut expedita voluptatibus fugiat inventore 
                        itaque ullam minima, voluptas non perferendis quam.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor aperiam, est vero natus minus atque aliquid nulla aut expedita voluptatibus fugiat inventore 
                        itaque ullam minima, voluptas non perferendis quam.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa dolor aperiam, est vero natus minus atque aliquid nulla aut expedita voluptatibus fugiat inventore 
                        itaque ullam minima, voluptas non perferendis quam.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->
             
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, architecto debitis. Illum deleniti ipsam maxime ducimus labore delectus velit deserunt dignissimos dolore,
                        omnis tempora, a tempore consequatur iste excepturi voluptatem.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, architecto debitis. Illum deleniti ipsam maxime ducimus labore delectus velit deserunt dignissimos dolore,
                             omnis tempora, a tempore consequatur iste excepturi voluptatem.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, architecto debitis. Illum deleniti ipsam maxime ducimus labore delectus velit deserunt dignissimos dolore,
                             omnis tempora, a tempore consequatur iste excepturi voluptatem.
                        </li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50--> 
            <div class="clear"></div>
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="https://kit.fontawesome.com/e555ee61bf.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>