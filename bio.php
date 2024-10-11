<?php
// Agregar las cabeceras de seguridad
header("X-Content-Type-Options: nosniff");
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self' data:; frame-src 'self';");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioNatural - Productos Naturales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        nav {
            display: flex;
            justify-content: space-between; /* Alinear los elementos de navegación */
            align-items: center; /* Centrar verticalmente los elementos */
        }
        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
        }
        .auth-links {
            margin-left: auto; /* Mueve los enlaces de autenticación a la derecha */
        }
        section {
            padding: 2em;
            text-align: center;
            display: none; /* Ocultar todas las secciones por defecto */
        }
        .active {
            display: block; /* Mostrar la sección activa */
        }
        .subsection {
            display: none; /* Ocultar las subsecciones */
            margin-top: 1em;
            padding: 1em;
            background-color: #e8e8e8;
            border-radius: 8px;
            text-align: left;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        form {
            width: 60%;
            min-width: 280px;
        }
        form input, form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        form button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .telegram-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35%;
            min-width: 200px;
            padding: 1em;
            background-color: #0088cc;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 10px;
        }
        .telegram-link:hover {
            background-color: #006699;
        }
        .health-conditions {
            list-style-type: none; /* Eliminar viñetas */
            padding: 0; /* Sin relleno */
        }
        .health-conditions li {
            margin: 10px 0; /* Espacio entre los botones */
        }
        .health-conditions button {
            width: 100%; /* Botones de ancho completo */
            padding: 15px; /* Relleno interno */
            background-color: #4CAF50; /* Color de fondo verde */
            color: white; /* Color del texto */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            font-size: 16px; /* Tamaño de fuente */
            cursor: pointer; /* Cambiar cursor al pasar por encima */
            transition: background-color 0.3s; /* Transición suave */
        }
        .health-conditions button:hover {
            background-color: #45a049; /* Color de fondo al pasar el mouse */
        }
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
                align-items: stretch;
            }
            form, .telegram-link {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>BioNatural</h1>
        <nav>
            <div>
                <a href="#" onclick="showSection('inicio')">Inicio</a>
                <a href="#" onclick="showSection('quienes-somos')">Quienes Somos</a>
                <a href="#" onclick="showSection('condiciones-de-salud')">Condiciones de Salud</a> 
                <a href="#" onclick="showSection('productos')">Productos</a>
                <a href="#" onclick="showSection('contacto')">Contacto</a>
                <a href="#" onclick="showSection('ayuda-en-linea')">Ayuda en Línea</a>
            </div>
            <div class="auth-links">
                <a href="registro.html">Registro</a>
                <a href="login.html">Iniciar Sesión</a>
            </div>
        </nav>
    </header>


    <section id="inicio" class="active">
        <h2>Conéctate con la naturaleza</h2>
        <p>Busca conectar a los consumidores conscientes con productos naturales y sostenibles, facilitando la compra, educación y vida saludable.</p>
    </section>

    <section id="quienes-somos">
        <h2>¿Quiénes somos?</h2>
        <p>Bionatural es una empresa dedicada a la producción y comercialización de productos naturales y ecológicos para el cuidado personal, bienestar y salud. Ofrecemos alternativas que respetan el medio ambiente sin dejar de lado la calidad y efectividad, utilizando ingredientes naturales y procesos sostenibles.</p>
        <p><strong>CEO: Tätsú_</strong></p>
        <img src="https://via.placeholder.com/150" alt="Foto anónima del CEO" class="help-image">
        <p>“¿Alguna vez te has sentido agobiado por las dificultades de la vida? Yo sí, y es por eso que he creado esta web, que en el futuro se convertirá en una aplicación para alcanzar a más personas. Mi objetivo es transformar un sistema en el que nuestros sueños se ven frustrados por individuos que se autodenominan profesionales. Muchos de ellos parecen haber estudiado no para sanar, sino para arrebatar la esperanza de quienes más lo necesitan.</p>
        <p>En nuestra sociedad, la esperanza a menudo se despoja a las personas de su esencia. Una vez leí una frase que decía: 'La esperanza reside en los sueños, en la imaginación y en el coraje de aquellos que se atreven a convertir sus sueños en realidad'. Esto me inspiró a luchar por un mundo en el que la esperanza no se extinga por enfermedades o problemas psicológicos. Hasta que esté aquí, seguiré luchando por cambiar el mundo, convencido de que, al hacerlo, podré ayudar a más personas a recuperar su esperanza.”</p>
    </section>

   <section id="condiciones-de-salud">
        <h2>Condiciones de Salud</h2>
        <p>Selecciona una condición para obtener más información:</p>
        <ul class="health-conditions">
            <li><button onclick="showSubsection('diabetes')">Diabetes</button></li>
            <li><button onclick="showSubsection('hipertension')">Hipertensión</button></li>
            <li><button onclick="showSubsection('ansiedad')">Ansiedad</button></li>
            <li><button onclick="showSubsection('depresion')">Depresión</button></li>
            <li><button onclick="showSubsection('alergias')">Alergias</button></li>
        </ul>

         <!-- Subsections for health conditions -->
        <div id="diabetes" class="subsection">
            <h3>Diabetes</h3>
            <p>Información sobre la diabetes irá aquí.</p>
        </div>

        <div id="hipertension" class="subsection">
            <h3>Hipertensión</h3>
            <p>Información sobre la hipertensión irá aquí.</p>
        </div>

        <div id="ansiedad" class="subsection">
            <h3>Ansiedad</h3>
            <p>Información sobre la ansiedad irá aquí.</p>
        </div>

        <div id="depresion" class="subsection">
            <h3>Depresión</h3>
            <p>Información sobre la depresión irá aquí.</p>
        </div>

        <div id="alergias" class="subsection">
            <h3>Alergias</h3>
            <p>Información sobre las alergias irá aquí.</p>
        </div>
    </section>

  <section id="productos">
    <h2>Nuestros productos</h2>
    <p>Selecciona el tipo de producto para obtener más información:</p>
    <ul class="health-conditions">
        <li><button onclick="showSubsection('cosmeticos')">Cosméticos naturales</button></li>
        <li><button onclick="showSubsection('suplementos')">Suplementos alimenticios</button></li>
        <li><button onclick="showSubsection('alimentos')">Alimentos orgánicos</button></li>
    </ul>
    
    <!-- Subsections for products -->
    <div id="cosmeticos" class="subsection">
        <h3>Cosméticos naturales</h3>
        <p>Información sobre cosméticos naturales irá aquí.</p>
    </div>

    <div id="suplementos" class="subsection">
        <h3>Suplementos alimenticios</h3>
        <p>Información sobre suplementos alimenticios irá aquí.</p>
    </div>

    <div id="alimentos" class="subsection">
        <h3>Alimentos orgánicos</h3>
        <p>Información sobre alimentos orgánicos irá aquí.</p>
    </div>
</section>

    <section id="contacto">
        <h2>Contacto</h2>
        <div class="form-container">
            <form action="enviar_mensaje.php" method="POST">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
                <input type="email" name="email" placeholder="Tu correo electrónico" required>
                <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
                <button type="submit">Enviar Mensaje</button>
            </form>
            <a href="https://t.me/tu_canal_telegram" class="telegram-link">Únete a nuestro canal de Telegram</a>
        </div>
    </section>

    <section id="ayuda-en-linea">
        <h2>Ayuda en Línea</h2>
        <p>Si necesitas ayuda, selecciona una categoría:</p>
        <ul class="health-conditions">
            <li><button onclick="showSubsection('ayuda_psicologica')">Ayuda Psicológica</button></li>
            <li><button onclick="showSubsection('asistencia_medica')">Asistencia Médica</button></li>
        </ul>
        
        <!-- Subsections for online help -->
        <div id="ayuda_psicologica" class="subsection">
            <h3>Ayuda Psicológica</h3>
            <p>Información sobre ayuda psicológica irá aquí.</p>
        </div>

        <div id="asistencia_medica" class="subsection">
            <h3>Asistencia Médica</h3>
            <p>Información sobre asistencia médica irá aquí.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 BioNatural. Todos los derechos reservados.</p>
    </footer>

    <script>
        function showSection(sectionId) {
            // Ocultar todas las secciones
            document.querySelectorAll('section').forEach(section => {
                section.classList.remove('active');
            });
            // Mostrar la sección seleccionada
            document.getElementById(sectionId).classList.add('active');
            // Ocultar todas las subsecciones
            document.querySelectorAll('.subsection').forEach(subsection => {
                subsection.style.display = 'none';
            });
        }

        function showSubsection(subsectionId) {
            // Ocultar todas las subsecciones
            document.querySelectorAll('.subsection').forEach(subsection => {
                subsection.style.display = 'none';
            });
            // Mostrar la subsección seleccionada
            document.getElementById(subsectionId).style.display = 'block';
        }
    </script>
</body>
</html>
