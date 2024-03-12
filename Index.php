<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form id="form" method="post">

        <h2>REGISTRO</h2>
        <p>Bienvenido!! Inicia con tu registro.</p>

        <div class="input-wrapper">
            <input id="cedula" type="text" name="id" maxlength="10" placeholder="Cedula" required>
        </div>

        <div class="input-wrapper">
            <input type="text" name="name" maxlength="20" placeholder="Nombre" required>
        </div>

        <div class="input-wrapper">
            <input type="text" name="secondname" maxlength="20" placeholder="Segundo Nombre">
        </div>

        <div>
            <select id="sexo" name="sexo" required>
                <option value="" disabled selected>Sexo</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
        </div>
        <br></br>
        <div class="input-wrapper">
            <input type="number" name="age" max="999" min="1" placeholder="Edad" required>
        </div>

        <div class="input-wrapper">
            <input id="email" type="email" name="email" maxlength="30" placeholder="Correo Electronico" required onblur="vEmail()">
            <p id="message"></p>
        </div>

        <div class="input-wrapper">
            <input type="text" name="address" maxlength="30" placeholder="Direccion" required>
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
    include("registrar.php");
    ?>

    <script>
        var formValido = false;
        var form = document.getElementById("form");

        function vEmail() {
            const re = /^[\w_.-]+@([\w-]+\.)+\w{2,}$/;
            var eValue = document.getElementById("email").value;
            var message = document.getElementById("message");
            const ok = re.exec(eValue);
            ok ? formValido = true : formValido = false;
            message.textContent = ok ? `` : `No es un correo valido`;
        }
        
        form.addEventListener("submit", (evt) => {
            if (!formValido) {
                evt.preventDefault();
            } else {
                this.submit();
            }
        });
    </script>
</body>

</html>