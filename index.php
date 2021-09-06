<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo 1</title>
        <link rel="stylesheet" type="text/css" href="estilos/estilos.css" media="screen"/>
    </head>
    <body>
        <image src="img/Welcome.jpg" style="width: 100%;height: 100%" alt="No se puede cargar la imagen.">
        <?php
        // put your code here
        ?>
        <div id="divInput">
            <h2>Ingresa tu nombre para darte un mensaje importante.</h2>
            <input type="text" id="txtNombre">
            <button onclick="saludar()" >Saludar</button>
        </div>
        <script>
            function saludar(){
                alert("Bienvenido "+document.getElementById("txtNombre").value+", en este sitio hablaremos acerca de sistemas.");
            }
        </script>
        
        <div id="divParrafo">
            <h3>¿En realidad conoces que es un sistema?</h3>
            <p>
                Un sistema es un conjunto ordenado de normas y procedimientos que regulan el funcionamiento de un grupo o colectividad.
            </p>
        </div>
        <div id="divPartes">
            <h3>Selecciona lo que consideras importante en un sistema</h3>
            <input type="checkbox" id="entradas" name="entradas" value="entradas">
            <label for="entradas">Entradas</label><br>
            <input type="checkbox" id="salidas" name="salidas" value="salidas">
            <label for="salidas">Salidas</label><br>
            <input type="checkbox" id="entorno" name="entorno" value="entorno">
            <label for="entorno">Entorno</label><br>
            <input type="checkbox" id="relaciones" name="relaciones" value="relaciones">
            <label for="relaciones">Relaciones</label><br>
            <input type="checkbox" id="objetivos" name="objetivos" value="objetivos">
            <label for="objetivos">Objetivos</label><br>
            <button type="submit" id="btnpartes" >Verificar</button>
        </div>
    </body>
</html>