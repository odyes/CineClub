<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/calendario.css">
    <title>Calendario</title>
</head>
<body>
    <header>
        <nav>
            <a href="/index.html"><img src="/assets/icons/logo.png" alt="logo"></a>
            <a href="/index.html"></a>
            <ul>
                <li class="pro"><a href="/index.html"><input type="button" value="Programación de hoy"></a></li>
                <li class="cal"><a href="/paginas/calendario.html">Calendario</a></li>
                <li class="pel">Películas</li>
                <img src="/assets/icons/cuadrito.png" alt="searchBlack">
                <li class="ini"><a href="/paginas/iniciarSesion.html"><input type="button" value="Iniciar sesión"></a></li>
            </ul>
        </nav>
        <section class="filter">
            <h2>Calendario</h1>
            <div class="buscador">
                <p>Buscar</p>
                <img src="/assets/icons/buscador-gris.png" alt="buscador">
            </div>
            <p>Filtros</p>
            <section class="filtros">
                <article class="generos">
                    <span class="dd-generos">
                        <select>    
                            <option>Drama</option>
                            <option>Acción</option>  
                            <option>Aventura</option>
                            <option>Familiar</option>
                            <option>Romance</option>
                        </select>
                    </span>
                </article>
                <article class="director">
                    <span class="dd-director">
                        <select>    
                            <option >Acción</option>  
                            <option>Aventura</option>
                            <option>Familiar</option>
                            <option>Romance</option>
                        </select>
                    </span>
                </article>
                <article class="año">
                    <span class="dd-año">
                        <select>    
                            <option>Acción</option>  
                            <option>Aventura</option>
                            <option>Familiar</option>
                            <option>Romance</option>
                        </select>
                    </span>
                </article>
            </section>
        </section>
        <section class="calendario">
            <section class="info-calen">
                <h1>Febrero</h1> 
                <input type="date" value="Fecha">
                <div class="agregar">
                    <p> <a href="{{route('peliculaRegistro')}}">+ Agregar película</a>
                </div>
                <div class="dias">
                    <p class="dom">Domingo</p>
                    <p class="lun">Lunes</p>
                    <p class="mar">Martes</p>
                    <p class="mier">Miércoles</p>
                    <p class="jue">Jueves</p>
                    <p class="vie">Viernes</p>
                    <p class="sab">Sábado</p>
                </div>
                <div class="fecha-calendario">
                    <div class="movie-list">
                        <div class="movie"><img src="/assets/images/post-gcb.png" alt="gato"></div>
                        <p class="uno">1</p>
                        <div class="movie2"><img src="/assets/images/post-ltp.png" alt="gato"></div>
                        <p class="dos">2</p>
                        <div class="movie3"><img src="/assets/images/post-td.png" alt="gato"></div>
                        <p class="tres">3</p>
                        <div class="movie4"><img src="/assets/images/post-65.png" alt="gato"></div>
                        <p class="cuatro">4</p>
                        <div class="movie5"><img src="/assets/images/post-bd.png" alt="gato"></div>
                        <p class="cinco">5</p>
                        <div class="movie6"><img src="/assets/images/post-bt.png" alt="gato"></div>
                        <p class="seis">6</p>
                        <div class="movie7"><img src="/assets/images/post-dumbledore.png" alt="gato"></div>
                        <p class="siete">7</p>
                        <div class="movie8"><img src="/assets/images/post-gcb.png" alt="gato"></div>
                        
                        <div class="movie9"><img src="/assets/images/post-ltp.png" alt="gato"></div>
                        
                        <div class="movie10"><img src="/assets/images/post-malefica.png" alt="gato"></div>
                        
                        <div class="movie11"><img src="/assets/images/post-moon.png" alt="gato"></div>
                       
                        <div class="movie12"><img src="/assets/images/post-parasite.png" alt="gato"></div>
                        
                        <div class="movie13"><img src="/assets/images/post-remi.png" alt="gato"></div>
                        
                        <div class="movie14"><img src="/assets/images/post-quantumania.png" alt="gato"></div>
                       
                        <div class="movie15"><img src="/assets/images/post-tsotl.png" alt="gato"></div>
                       
                        <p class="ocho">8</p>
                        <p class="nueve">9</p>
                        <p class="diez">10</p>
                         <p class="once">11</p>
                         <p class="doce">12</p>
                         <p class="trece">13</p>
                    </div>
                </div>
                
            </section>
        </section>

          
    </header>
    <main>

    </main>
</body>
</html>