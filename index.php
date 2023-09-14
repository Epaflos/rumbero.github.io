<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusiWave</title>
    <style>
        /* Estilos para el contenedor principal */
        .container {
            text-align: center;
        }

        /* Estilos para el contenedor del slider */
        .slider-container {
            width: 600px;
            overflow: hidden;
            position: relative;
            margin: 0 auto; /* Centra horizontalmente el slider */
        }

        /* Estilos para las diapositivas */
        .slider-item {
            width: 100%;
            height: 300px;
            display: none;
            text-align: center; /* Centra la imagen horizontalmente en la diapositiva */
        }

        /* Estilos para la imagen en cada diapositiva */
        .slider-item img {
            max-width: 100%;
            max-height: 100%;
            vertical-align: middle; /* Alinea verticalmente la imagen en la diapositiva */
        }

        /* Estilos para la lista de reproducción */
        .playlist {
            margin-top: 20px;
            text-align: left;
            background-color: #f5f5f5;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            width: 300px;
            max-height: 300px;
            overflow-y: auto;
            margin: 20px auto; /* Centra horizontalmente la lista */
        }

        .playlist ul {
            list-style: none;
            padding: 0;
        }

        .playlist li {
            margin: 5px 0;
            padding: 5px;
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s ease;
        }

        .playlist li:last-child {
            margin-bottom: 0;
        }

        .playlist li:hover {
            background-color: #e0e0e0;
        }

        .playlist a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin-right: 10px;
        }

        .playlist button {
            background-color: #ff5722;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .playlist button:hover {
            background-color: #ff7043;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>musicBox</h1>
        <audio id="audioPlayer" controls onended="playNextSong()">
            <source src="" type="audio/mp3" id="audioSource">
        </audio>
        <div class="playlist">
            <ul id="playlist">
                <!-- Lista de reproducción se generará dinámicamente con JavaScript -->
            </ul>
        </div>
    </div>

    <div class="slider-container">
        <div class="slider-item">
            <img src="dos.jpg" alt="Imagen 1">
        </div>    
       
        <div class="slider-item">
            <img src="uno.jpg" alt="Imagen 2">
        </div>
        <div class="slider-item">
            <img src="tres.jpg" alt="Imagen 3">
        </div>
        <div class="slider-item">
            <img src="cuatro.jpg" alt="Imagen 4">
        </div>
        <div class="slider-item">
            <img src="cinco.jpg" alt="Imagen 5">
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        const sliderItems = document.querySelectorAll('.slider-item');
        let currentIndex = 0;

        function mostrarDiapositiva(index) {
            sliderItems.forEach((item, i) => {
                if (i === index) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function siguienteDiapositiva() {
            currentIndex++;
            if (currentIndex >= sliderItems.length) {
                currentIndex = 0;
            }
            mostrarDiapositiva(currentIndex);
        }

        // Configura el intervalo para cambiar automáticamente las diapositivas cada 6 segundos
        setInterval(siguienteDiapositiva, 6000);

        // Muestra la primera diapositiva al cargar la página
        mostrarDiapositiva(currentIndex);
    </script>
</body>
</html>
