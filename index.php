<?php
// historia_quimica.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Historia de la Química</title>

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f4f7fb;
    color:#333;
}

header{
    background:linear-gradient(135deg,#2563eb,#1e3a8a);
    color:white;
    text-align:center;
    padding:50px 20px;
}

header h1{
    margin:0;
    font-size:45px;
}

header p{
    font-size:18px;
    margin-top:10px;
}

.container{
    width:90%;
    max-width:1100px;
    margin:40px auto;
}

.card{
    background:white;
    border-radius:18px;
    padding:25px;
    margin-bottom:25px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.card h2{
    color:#1d4ed8;
}

.timeline{
    border-left:4px solid #2563eb;
    padding-left:20px;
    margin-top:20px;
}

.timeline-item{
    margin-bottom:25px;
}

.timeline-item h3{
    margin:0;
    color:#2563eb;
}

footer{
    background:#1e293b;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:40px;
}

.btn{
    display:inline-block;
    background:#2563eb;
    color:white;
    padding:12px 20px;
    text-decoration:none;
    border-radius:10px;
    margin-top:15px;
}

.btn:hover{
    background:#1d4ed8;
}

</style>
</head>

<body>

<header>
    <h1>🧪 Historia de la Química</h1>
    <p>Evolución de la química desde la antigüedad hasta la actualidad</p>
</header>

<div class="container">

    <div class="card">
        <h2>📚 ¿Qué es la química?</h2>

        <p>
            La química es la ciencia que estudia la composición, estructura,
            propiedades y transformaciones de la materia. Gracias a ella,
            el ser humano ha logrado desarrollar medicamentos, combustibles,
            alimentos procesados, materiales industriales y avances tecnológicos.
        </p>
    </div>

    <div class="card">
        <h2>⏳ Línea del Tiempo</h2>

        <div class="timeline">

            <div class="timeline-item">
                <h3>⚱️ Antigüedad</h3>
                <p>
                    Las primeras civilizaciones utilizaban procesos químicos
                    para fabricar cerámica, vidrio, tintes y metales.
                </p>
            </div>

            <div class="timeline-item">
                <h3>🔮 Alquimia (Edad Media)</h3>
                <p>
                    Los alquimistas buscaban transformar metales en oro
                    y descubrir el elixir de la vida.
                    Aunque no lograron sus objetivos, desarrollaron técnicas
                    importantes para la química moderna.
                </p>
            </div>

            <div class="timeline-item">
                <h3>🧠 Siglo XVII</h3>
                <p>
                    Robert Boyle introdujo el método científico en la química
                    y estableció conceptos sobre los elementos químicos.
                </p>
            </div>

            <div class="timeline-item">
                <h3>🔥 Siglo XVIII</h3>
                <p>
                    Antoine Lavoisier es considerado el padre de la química moderna.
                    Descubrió la ley de conservación de la masa.
                </p>
            </div>

            <div class="timeline-item">
                <h3>⚛️ Siglo XIX</h3>
                <p>
                    Dmitri Mendeléyev creó la tabla periódica,
                    organizando los elementos químicos.
                </p>
            </div>

            <div class="timeline-item">
                <h3>🚀 Siglo XX y Actualidad</h3>
                <p>
                    La química ha permitido avances en medicina,
                    nanotecnología, energía y biotecnología.
                </p>
            </div>

        </div>
    </div>

    <div class="card">
        <h2>🧬 Importancia de la Química</h2>

        <ul>
            <li>Desarrollo de medicamentos</li>
            <li>Producción de alimentos</li>
            <li>Fabricación de materiales</li>
            <li>Avances tecnológicos</li>
            <li>Protección ambiental</li>
        </ul>

        <a href="#" class="btn">Aprender Más</a>
    </div>

</div>

<footer>
    © 2026 Página educativa sobre la Historia de la Química
</footer>

</body>
</html>