<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila/html/css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>

    <style>
        
    </style>
</head>
<body>
    <!--Barra de navegacion superior-->

    <header class="header">
        <label for="btn_menu" class="menu"><i class='bx bx-menu' ></i></label>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>

        <div class="logo"></div>

    <!--====================================================================================
    *Condiciones para abrir las variables GET mediante la URL se condiciona si la 
    *carpeta paginas es igual auna de las que tenemos se abra           #==:inicio.php==
    =====================================================================================-->

        <?php if(isset($_GET["paginas"])): ?>

        <?php if($_GET["paginas"] == "login"): ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php else: ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php endif ?>

<!--=================================================================-->

        <?php if($_GET["paginas"] == "culturales"): ?>
            <a href="index.php?pagina=culturales">Cursos culturales</a>
        <?php else: ?>
            <a href="index.php?pagina=culturales">Cursos culturales</a>
        <?php endif ?>

<!--=================================================================-->

<?php if($_GET["paginas"] == "academicos"): ?>
            <a href="index.php?pagina=academicos">Cursos academicos</a>
        <?php else: ?>
            <a href="index.php?pagina=academicos">Cursos academicos</a>
        <?php endif ?>

<!--=================================================================-->

<?php if($_GET["paginas"] == "verano"): ?>
            <a href="index.php?pagina=verano">Cursos de verano</a>
        <?php else: ?>
            <a href="index.php?pagina=verano">Cursos de verano</a>
        <?php endif ?>

<!--=================================================================-->


        <?php else: ?>

<!--=================================================================-->

        <nav class="navbar">
            <a href="index.php?pagina=login">Inicia sesion</a>
        </nav>

        <a href="" class="perfil"><i class='bx bxs-user-circle' ></i></a>
    </header>

<!--=================================================================-->

    <?php endif ?>
    
<!--=================================================================-->


    <input type="checkbox" id="btn_menu">
    <div class="container_menu">
        <div class="cont_menu">
            <nav>
                <a href="#">Opcion 1</a>
                <a href="#">Opcion 2</a>
                <a href="#">Opcion 3</a>
                <a href="#">Opcion 4</a>
                <a href="#">Opcion 5</a>
                <a href="#">Opcion 6</a>
            </nav>
            <label for="btn_menu" class="icon_equis"><i class='bx bx-x'></i></label>
        </div>
    </div>

<!--Abriremos esta seccion es para "seprar" la primera seccion la cual es la de informacio inicial-->
    <section class="inicio">
<!--Esta etiqueta es para poner el titulo de la informacion-->
        <label for="" id="titulo">Bienvenido</label>

<!--Este div es para contener todo el parrafo y poder posicionarlo-->
        <div>
<!--Dentro de aqui va a ir el texto de la infromacion-->
            <p id="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, molestiae iure omnis unde adipisci laboriosam harum nostrum repudiandae! Quos dolor quod praesentium vero fuga saepe numquam ea atque velit impedit.</p>
        </div>

<!--Aqui va a air la imagen promocional del lado dercho del section casi al mismo tamaño del mismo-->
        <div class="gradient">
            <img src="https://staticctf.ubisoft.com/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/01lCIVJSjkjeeg5BYDawQi/ca2096a8eea91a495ebda8136e963487/ACV_KeyArt11__960x540.png" alt="">
        </div>
    </section>

<!--Este es el contenedor para mostrar todos los apartados de la pagina, la de curosos culturales academicos o culturales o de verano-->
    
    

    <main class="s-cursos">
        <div class="slider-frame">
            <ul>
                <li><img src="https://images.pexels.com/photos/8134647/pexels-photo-8134647.jpeg" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8060364/pexels-photo-8060364.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8960865/pexels-photo-8960865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8960867/pexels-photo-8960867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
            </ul>
        </div>

        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="culturales">
            <!--La imagen promocional o demostrativa-->
            <img src="https://www.diariomotor.com/imagenes/2023/03/f40-liberty-walk-641212ae4033f.jpg" alt="">
            <!--El texto que va dentro del mismo-->
            <a href="index.php?pagina=culturales">Cursos culturales</a>
            <i class='bx bx-game'></i>
        </div>

        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="academicos">
            <!--La imagen promocional o demostrativa-->
            <img src="https://w0.peakpx.com/wallpaper/602/447/HD-wallpaper-ferrari-f40-back-view-aldix-racing-tuning-ferrari-f40-lm-supercars-white-f40-italian-cars-ferrari.jpg" alt="">
            <!--El texto que va dentro del mismo-->
            <a href="index.php?pagina=academicos">Cursos academicos</a>
            <i class='bx bx-math'></i>
        </div>


        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="verano">
            <!--La imagen promocional o demostrativa-->
            <img src="https://s.aolcdn.com/os/ab/_cms/2023/04/27180101/Ferrari-F40-LB-Works-01.jpg" alt="">
            <!--El texto que va dentro del mismo-->
            <a href="index.php?pagina=verano">Cursos de verano</a>
            <i class='bx bx-sun' ></i>
        </div>


    </main>

    <article class="info">
<!--Esta etiqueta es para poner el titulo de la informacion-->
        <label for="">Informacion adicional</label>

<!--Este div es para contener todo el parrafo y poder posicionarlo-->
        <div>
<!--Dentro de aqui va a ir el texto de la infromacion-->
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, illo placeat. In iure veniam fugiat tempora aliquid cum accusamus at ducimus dolores nulla magnam assumenda culpa, voluptatum voluptatem voluptatibus cupiditate?</p>
        </div>

<!--Aqui va a air la imagen promocional del lado dercho del section casi al mismo tamaño del mismo-->
        <img src="https://2game.com/wp/wp-content/uploads/2021/12/AC-Valhalla-Unlock-DLC-for-all-players.jpg" alt="">
    </article>

    <footer class="footer">
        <div class="contacto">
            <ul>
                <li><h2>Contacto</h2></li>
                <li>
                    <div class="c_electronico">
                        <label for="">Correo Electronico</label><br>
                        <a href="#">correoelectronico@gmail.com</a>
                    </div>
                </li>

                <li>
                    <div class="direccion">
                        <label for="">Direccion</label>
                        <p>Direccion de ejemplo</p>
                    </div>
                </li>

                <li>
                    <div class="sociales">
                        <a href=""><i class='bx bxl-facebook-circle'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-twitter' ></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>