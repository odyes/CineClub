

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>CineClub</title>
</head> 
<body>
    <header>
        <nav>
            <img src="/assets/icons/logo.png" alt="logo">
            <a href="/index.html"></a>
            <ul>
                <li class="pro"><a href="/index.html"><input type="button" value="Programación de hoy"></a></li>
                <li class="cal"><a href="/paginas/calendario.html">Calendario</a></li>
                <li class="pel">Películas</li>
                <img src="/assets/icons/cuadrito.png" alt="searchBlack">
                <li class="ini"><a href="/paginas/iniciarSesion.html"><input type="button" value="Iniciar sesión"></a></li>
            </ul>
        </nav>
    </header>

    <main>
       
        <section class="division1">
            <article>
                <h1>Programación de hoy</h1>
                <p>10 de febrero, función 5pm</p>
            </article>
        </section>

        <section class="cuadro-peli">
            <article>
                <img src="/assets/images/fondoPost.png" alt="fondoPost" class="fondo">
                <img src="/assets/images/poster-eeaao.jpg" alt="posterPrincipal" class="postprincipal">
                <img src="/assets/images/difuminado.png" alt="difuminado" class="fondo2">
                
                <div class="info-pelicula">
                    <p class="año">2022</p>
                    <p class="duracion">2h 20m</p>
                    <p class="director">Dan Kwan, Daniel Scheinert</p>
                    <h1>Everything everywhere all at once</h1>
                </div>
                <div class="generos">
                    <p class="c">Comedia</p>
                    <p class="a">Acción</p>
                    <p class="cf">Ciencia fincción</p>
                </div>
                <div class="descrip">
                    <p>Una heroína indesperada debe usar sus nuevos poderes para luchar contra los desconcertantes peligros del multiverso y así lograr salvar su mundo.</p>
                </div>
                <div class="reseñas">
                    <div class="imdb">
                        <img src="/assets/icons/IMDb.png" alt="imdb">
                        <p>8/10</p>
                    </div>
                    <div class="rt">
                        <img src="/assets/icons/RT.png" alt="rt">
                        <p>95%</p>
                    </div>
                    <div class="fa">
                        <img src="/assets/icons/FA.png" alt="fa">
                        <p>6.9/10</p>
                    </div>
                </div>

                <div class="reparto">
                    <h2>Reparto</h1>
                    <div class="cast">
                        <div class="michelle">
                            <img src="/assets/images/Group-4.png" alt="MichelleY">
                            <p>Michelle Yeoh</p>
                        </div>
                        <div class="ke">
                            <img src="/assets/images/Group-3.png" alt="kehuy">
                            <p>Ke Huy Quan</p>
                        </div>
                        <div class="ste">
                            <img src="/assets/images/Group-2.png" alt="steph">
                            <p>Stephanie Hsu</p>
                        </div>
                        <div class="jamie">
                            <img src="/assets/images/Group-1.png" alt="jamie">
                            <p>Jamie Lee Curtis</p>
                        </div>
                        <div class="jam">
                            <img src="/assets/images/Group.png" alt="james">
                            <p>James Hong</p>
                        </div>
                    </div>
                </div>
                
            </article>
        </section>

        <section class="semana">
            <article class="proSem">
                <h1>Programación semanal</h1>
                <div class="gato">
                    <h3>El gato con botas</h3>
                    <img src="/assets/images/post-gcb.png" alt="gato">
                    <div class="desc">
                        <h5>Función</h5>
                        <div class="fecha">
                            <p>Sábado 11 de febrero</p>
                            <p>5:00pm</p>
                        </div>
                    </div>
                    <div class="generosGato">
                        <h5>Géneros</h5>
                        <div class="listGen">
                            <p class="fantasia">Fantasía</p>
                            <p class="aventura">Aventura</p>
                            <p class="familiar">Familiar</p>
                        </div>
                    </div>
                </div>
                <div class="taxi">
                    <h3>Taxi driver</h3>
                    <img src="/assets/images/post-td.png" alt="taxi">
                    <div class="taxiDesc">
                        <h5>Función</h5>
                        <div class="fechaTaxi">
                            <p>Sábado 14 de febrero</p>
                            <p>5:00pm</p>
                        </div>
                    </div>
                    <div class="generosTaxi">
                        <h5>Géneros</h5>
                        <p class="drama">Drama</p>
                        <p class="crimen">Crimen</p>
                        <p class="policial">Policial</p>
                        <p class="thriller">Thriller</p>
                    </div>
                </div>
                <div class="leon">
                    <h3>Leon: the professional</h3>
                    <img src="/assets/images/post-ltp.png" alt="leon">
                    <div class="leonDesc">
                        <h5>Función</h5>
                        <div class="fechaLeon">
                            <p>Sábado 18 de febrero</p>
                            <p>5:00pm</p>
                        </div>  
                    </div>
                    <div class="generosLeon">
                        <h5>Géneros</h5>
                        <p class="dramaLeo">Drama</p>
                        <p class="crimenLeo">Crimen</p>
                        <p class="policialLeo">Policial</p>
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>
</html>