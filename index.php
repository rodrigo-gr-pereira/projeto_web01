<?php 
	include('config.php');
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
<link href="estilo/style.css" rel="stylesheet" />
<title>Projeto 01</title>
</head>
<body> 
    <!--pegr o local onde se encontra -->   
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos';
                echo '<target target="depoimentos" />';
                break;
              case 'servicos';  
              echo '<target target="servicos" />';
        }
    ?>

    <header>
        <div class="center">
        <div class="logo left"><a href="#">Logomarca</a></div><!--logo-->
        <nav class="desktop right">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
        </nav>
        <nav class="mobile right">
            <div  class="botao-menu-mobile">
            <i class="fa-solid fa-bars"></i>
            </div>
            <ul>    
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
        </nav>
        <div class="clear"></div>
        </div><!--center-->
    </header>

    <?php
    

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            //podemos fazer o que quiser, pois a pagina não existe.
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
            
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->
    </footer>

    <script src="https://kit.fontawesome.com/e555ee61bf.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
    <?php
        if($url == 'home' || $url =='' || $url == 'depoimentos' || $url =='servicos'){
    ?>
     <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <?php
        if($url == 'contato'){
    ?>
     <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD15698eK0FGbsHVnv6JYeJiKT_j21Vts8&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <?php } ?>
</body>
</html>