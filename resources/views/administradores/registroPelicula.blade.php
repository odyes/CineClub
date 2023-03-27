<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/registro.css">
    <title>Registrar película</title>
</head>
<body>
    <main>
        <form>
            <fieldset>
                <section class="container-1">
                    <h1>Registra tu película</h1>
                    <div class="fecha">
                        <p>Fecha y hora de transmisión</p>
                        <input type="datetime-local">
                    </div>
                    <div class="titulo">
                        <p>Título de la película</p>
                        <input type="text" required>
                    </div>
                    <div class="descripcion">
                        <p>Descripción</p>
                        <input type="text" required>
                    </div>
                    <article class="info-peli">
                        <div class="año">
                            <p>Año</p>
                            <input type="number" min="1800" max="2023" step="1" required />
                        </div>
                        <div class="duracion">
                            <p>Duración (minutos)</p>
                            <input type="number" min="1" max="1000" step="1" required/>
                        </div>
                        <div class="director">
                            <p class="director">Director</p>
                            <input type="text" required>
                        </div>
                    </article>
                    <article class="genero">
                        <p>Género</p>
                        <span class="dd-genero">
                            <select>    
                                <option></option>  
                                <option>Aventura</option>
                                <option>Familiar</option>
                                <option>Romance</option>
                                <option>Acción</option>  
                                <option>Crimen</option>
                                <option>Violento</option>
                                <option>Melancolico</option>
                            </select>
                        </span>
                    </article>
                    <article class="actores">
                        <p>Actores</p>
                        <span class="dd-actores">
                            <select>    
                                <option></option>  
                                <option>Brad Pitt</option>
                                <option>Tom Cruise</option>
                                <option>Will Smith</option>
                                <option>Leonardo Dicaprio</option>  
                                <option>Johnny Depp</option>
                                <option>Marlon Brando</option>
                                <option>Dwayne Johnson</option>
                            </select>
                        </span>
                    </article>
                    <article class="registro-genero">
                        <a href="{{route('generoRegistro')}}"><img src="/assets/icons/agregar.png" alt="mas"></a> 
                    </article>
                    <input type="file">
                </section>
            </fieldset>
            <input type="submit" value="Confirmar">
        </form>
    </main>
    
</body>
</html>