<!DOCTYPE html>
<html lang="es">
<head>
    <meta class="header__enlace" charset="UTF-8">
    <meta class="header__enlace" http-equiv="X-UA-Compatible" content="IE=edge">
    <meta class="header__enlace" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">  

    <title>Portfolio</title>
</head>
<body>
    <section class="container" id="index">
        <header class="header__navbar-fixed ">
            <nav class="header__navbar">
                <img  class="logo" src="images/logo.png" alt="Nestor J. Maldonado">
                <ul class="header__menu" id="menu">
                    <a class="header__enlace " href="#index">Inicio</a>
                    <a class="header__enlace " href="#habilidades">Skills</a>
                    <a class="header__enlace " href="#proyectos">Proyectos</a>
                    <a class="header__enlace " href="#about">Sobre mí</a>
                    <a class="header__enlace " href="#cursos">Cursos</a>
                    <a class="header__enlace " href="#certificados">Certificados</a>
                    <a class="header__enlace " href="cv.php">Curriculum </a>
                </ul>
                <button class="header__switch" id="switch">
                    <span><i class="fas fa-sun fa-xl"></i></span>
                    <span><i class="fas fa-moon fa-xl"></i></span>
                </button>
                <div class="header__menu-bar" id="menu_bar">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </header>
        <main class="contenido">
            <!-- Banner -->
            <section class="contenido__banner">
                <img class="contenido__background" src="images/paisaje.jpg" alt="Paisaje de Ushuaia">
                <div class="contenido__overlay">
                    <h2>Portfolio</h2>
                </div>
            </section>
            <!-- End Banner -->
            <section class="habilidades" id="habilidades">
                <h2 class="titulo">Mis habilidades</h2>
                <hr>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/angular.svg"
                         alt="Angular"
                         loading="lazy"
                         class="icono">
                    <!-- <label class="habilidad__line" for="file">File progress:</label>
                    <progress class="habilidad__line-progress" id="file" max="100" value="70"> 70% </progress> -->
                    <div class="line-1" style="width:60%">Angular - 55%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/html-5.svg"
                         alt="html-5"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:90%">Html-5 - 80%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/css3.svg"
                         alt="Css3"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:90%">Css3 - 70%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/visual-studio.svg"
                         alt="visual-studio"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:90%">Visual Studio - 90%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/javascript-1.svg"
                         alt="JavaScript"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:80%">JavaScript - 50%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/icons8-node-js.svg"
                         alt="NodeJs"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:70%">NodeJs - 50%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/git.svg"
                         alt="git"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:70%">Git - 70%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/react.svg"
                         alt="React"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:60%">React - 30%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/github-icon-1.svg"
                         alt="github"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:90%">Github - 70%</div>
                </div>
                <div class="contenedor-habilidad tarjeta-icono">
                    <img src="images/mongodb-icon-1.svg"
                         alt="mongoDB"
                         loading="lazy"
                         class="icono">
                    <div class="line-1" style="width:90%">MongoDB - 40%</div>
                </div>
            </section>
            <section class="proyectos" id="proyectos">
                <h2 class="titulo">Algunos de mis proyectos</h2>
                <hr>
                <div class="contenedor-de-proyectos">
                    <div class="tarjeta-de-proyecto">
                        <img src="images/muñeco.png"
                             alt="Ecriptado de Texto"
                             loading="lazy"
                             class="project-img">
                        <h3 class="titulo-de-proyecto">Encriptador de Texto</h3>
                        <p class="detalles-de-proyecto">
                            Encriptador de Texto propuesto como challenge por Alura Latam en el programa One Oracle Next Education.</p>
                        <a href="https://njmaldo.github.io/challenge-01/" 
                           target="_blank" 
                           class="button">
                        <span>Ver Proyecto</span>
                        </a>
                    </div>
                    <div class="contenedor-de-proyecto tarjeta-de-proyecto">
                            <img src="images/ahorcado.png"
                                    alt="El juego del Ahoracado"
                                    loading="lazy"
                                    class="project-img">
                            <h3 class="titulo-de-proyecto">El Juego del Ahorcado</h3>
                            <p class="detalles-de-proyecto">
                                Este juego fue propuesto como segundo challenge por Alura Latam en el programa One Oracle Next Education. </p>
                            <a  href="https://njmaldo.github.io/juego_del_ahorcado/" 
                                target="_blank" 
                                class="button">
                            <span>Ver Proyecto</span>
                            </a>
                    </div>
                    <div class="contenedor-de-proyecto tarjeta-de-proyecto">
                            <img src="images/ecommerce.png"
                                 alt="otro-proyecto"
                                 loading="lazy"
                                 class="project-img">
                            <h3 class="titulo-de-proyecto">Otro Proyecto</h3>
                            <p class="detalles-de-proyecto">
                                Este proyecto es un e-commerce, un comercio electrónico para compras on line, propuesto como challenge por Alura Latam en el programa One Oracle Next Education.</p>
                            <a href="#" 
                               target="_blank" 
                               class="button">
                            <span>Ver Proyecto</span>
                            </a>
                    </div>
                </div>
            </section>
            <section class="about" id="about">
                <h2 class="titulo">Sobre Mí</h2>
                <p class="yo">Mi nombre es Néstor, nací en un mundo analógico y tuve la oportunidad de vivir la revolución digital en primera persona. Trabajé en grandes empresas multinacionales del sector tecnológico con electrónica analógica y digital, 
                    allí tome contacto con la programación en bajo nivel (ICSP). Me apasione con la programación y desde ese momento nunca me detuve. En este momento estoy enfocado en desarrollo web tanto en front como en backend.<br>
                    Trabajo constantemente en diversos proyectos y disfruto cada desafio, busco adquirir experiencia profesional como desarrollador, no tengo miedo al cambio ni a las nuevas experiencias, puedo trabajar solo o en grupos donde puedo integrarme fácilmente,
                     disfruto aprendiendo de quienes saben más que yo, y más aún mentorizando a quien pueda, siempre que haya una oportunidad.
                    </p>
                <hr>
            </section>
            <section class="about" id="cursos">
                <h2 class="titulo">Cursos</h2>
                <div class="about__row">
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>Oracle One</h3>
                        <p>ONE - Oracle next education es un programa de formación ideado por Oracle y Alura Latam, donde se realizan en paralelo el curso de Innovación y Gestión con el de Lógica de programación, Frontend. -
                            <a href="https://app.aluracursos.com/user/nestorjmaldo">Ver Perfil ONE</a>
                        </p>
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>Egg Education</h3>
                        <p>Curso de introducción a la programación, pseudocódigo. Una manera diferente de estudiar y de aprender a resolver diferentes problemas en equipo, cooperando y colaborando en grupos de 10 o más estudiantes.</p>
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>Udemy</h3>
                        <p>Fundamentos de Angular, componentes, directivas, backup Git/GitHub, conexion con Base de datos (NodeJs y MongoDB), Build de producción, y despliegue. </p>
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>Udemy</h3>
                        <p>Fundamentos de NodeJs, Rest, despliegues, Rutas, Middleware, Validaciones, Base de datos con Mongoose y MongoDB, Postman, JWT, Express etc.</p>
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>Udemy</h3>
                        <p>Cursando React de cero a experto, Context API, MERN, Hooks, Firestore, JWT, Testing, Autenticaciones, Despliegues, CRUD, Logs, MUI, Multiple Routers.</p>
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-chalkboard-user"></i>FreeCodeCamp</h3>
                        <p>Reponsive web desing FlexBox, Grid, Precompiladores Scss</p>
                    </div>
                    
                </div>
            </section>
            <section class="about" id="certificados">
                <h2 class="titulo">Certificados</h2>
                <div class="container-certificados">
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>Angular</h3>
                        <img src="images/Certificado Angular Udemy .jpg" alt="Curso de Angular" class="img" id="img">
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>Desarrollo Personal</h3>
                        <img src="images/Certificado-G3-One.jpg" alt="Curso de Desarrolo personal" class="img" id="img">
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>NodeJs</h3>
                        <img src="images/Certificado Node Udemy .jpg" alt="Curso de NodeJs" class="img" id="img">
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>Programacion</h3>
                        <img src="images/Certificado-G3-One-P.jpg" alt="Curso Oracle ONE" class="img" id="img">
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>Egg Education</h3>
                        <img src="images/Certificado-Egg.jpg" alt="Curso de Pseudocódigo" class="img" id="img">
                    </div>
                    <div class="about__detail">
                        <h3><i class="fa fa-graduation-cap"></i>AWS</h3>
                        <img src="images/Certificado-AWS.jpg" alt="Curso de AWS" class="img" id="img">
                    </div>
                </div>
            </section>
            <section class="contacto">
                <h2 class="titulo">Contacto</h2>
                <form class="contacto__formulario">
                    <fieldset>
                        <div class="input-container">
                            <input name="name" 
                                    id="name" 
                                    class="input" 
                                    type="text" 
                                    placeholder="Nombre" 
                                    required>
                            <label class="input-label" for="name">Nombre</label>
                            <span class="input-message-error">Este campo no es valido</span>
                        </div>
                        <div class="input-container">
                            <input name="email" 
                                    id="email" 
                                    class="input" 
                                    type="email" 
                                    placeholder="E-mail" 
                                    required>
                            <label class="input-label" for="email">Email</label>
                            <span class="input-message-error">Este campo no es valido</span>
                        </div>
    
                        <div class="textarea-container">
                            <textarea name="textarea" 
                                        class="textarea"
                                        id="textarea" 
                                        type="text" 
                                        placeholder="Tu Mensaje"
                                        required>
                            </textarea>
                            <label class="textarea-label" for="textarea">Mensaje</label>
                            <span class="textarea-mensage-error">Debes escribir algún mensaje.</span>
                        </div>
                        <div class="contacto__btn">
                            <button class="button"><span>Enviar</span></button>
                        </div>
                    </fieldset>
                    <div class="contacto__ref">
                        <!-- <div class="address-box">
                            <p><i class="fa fa-phone"></i> Mobile </p>
                            <p><a href="tel:+5492901487488">+5492901487488</a></p>
                        </div> -->
                        <hr>
                        <div class="address-box">
                            <p><i class="fa fa-envelope"></i> E-Mail</p>
                            <p><a href="mailto:nestorjmaldo@gmail.com">nestorjmaldo@gmail.com</a></p>
                        </div>
                        <hr>
                        <div class="address-box">
                            <p><i class="fa-brands fa-github fa-xl"></i> GitHub</p>
                            <p><a href="https://github.com/njmaldo">njmaldo</a>
                            </p>
                        </div>
                        <hr>
                        <div class="address-box">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Ubicación</p>
                            <p>Ushuaia - Tierra del Fuego
                                <br>Argentina</p>
                        </div>
                        <hr>
                    </div>
            </form>
            </section>
        </main>
        <!-- End Main -->
        <!-- Section Footer -->
        <footer class="footer" id="footer" >
            <div class="footer_logo">
                <img src="images/logo.png" alt="logo" />
            </div>
            <a class="arrow-up" href="#index" >
                <i class="fa-solid fa-arrow-up fa-xl"></i></a>
            <div class="social-icons">
                <a  href="#"><i class="fa-brands fa-facebook fa-xl" aria-hidden="true"></i></a>
                <a  href="#"><i class="fa-brands fa-twitter fa-xl" aria-hidden="true"></i></a>
                <a  href="https://www.linkedin.com/in/nestorjmaldonado/"><i aria-hidden="true" class="fa-brands fa-linkedin fa-xl"></i></a>
                <a  href="https://github.com/njmaldo"><i class="fa-brands fa-github fa-xl" aria-hidden="true"></i></a>
                <a  href="https://t.me/NestorJMaldo"><i class="fa-brands fa-telegram fa-xl" aria-hidden="true"></i></a>       
            </div>
            <div class="text-center">
                <p>&copy Néstor J. Maldonado - 2022 Todos los derechos reservados.</p>
            </div>
            <div class="text-right">
                <p>Made with <i class="fa fa-heart" aria-hidden="true"></i> by: <a href="mailto:nestorjmaldo@gmail.com">N.J.Maldonado</a>
                </p>
            </div>
        </footer>
	    <!-- End Footer -->
    </section>
<script src="portfolio.js"></script>
</body>
</html>