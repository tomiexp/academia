@extends('plantillas.header')
@section('contenido')
<link rel="stylesheet" href="styles/pagos/pagos_1.css">
<title>Pagar</title>
<html>
<div id="container">
    <div class="titulo">
        <h1>Pagos online</h1>
    </div>
    <div class="info">
        <h1>Informacion de pago </h1>
        <p>Bienvenido al pago online de expressyourself, podras realizar pagos de tus cursos favoritos y producto que te
            gusten</p>
        <p class="ter">Revisa nuestros<a href="#">Terminos y condiciones</a></p>
    </div>
    <label class="proceso">Tu proceso</label>
    <div class="progress-bar">
        <div class="progress"></div>
    </div>
    <div class="factura">
        <label>Valor:</label>
        <label class="pre">$50000</label>
        <label>Valor impuesto:</label>
        <label class="pre">$0</label>
        <br>
        <br>
        <span>Descripcion del pago:</span>
        <span class="inf">curso de kpop</span>

        <span>Fecha de pago</span>
        <span class="inf">12/2/2023</span>


    </div>
    <br>
<div class="paga">
    <h2 class="pagador">Informacion del pagador</h2>
</div>
    <section id="content">

            <form>

                <div class="contain">

                    <div class="fila">
                        <div class="column">
                            <label for="input1">Tipo de documento:</label>
                            <input list="Tipo de documento">
                            <datalist id="Tipo de documento">
                                <option value="Cedula ciudadana">
                                <option value="Tarjeta de identidad ">
                                <option value="Cedula de extranjeria">
                                <option value="Pasaporte">
                            </datalist>
                        </div>
                        <div class="column">
                            <label for="input2">Numero de documento:</label>
                            <input type="number" id="input2" name="Numero de documento" required>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="column">
                            <label for="input3">numero telefonico:</label>
                            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" placeholder="Ejemplo: 3121234567" required>
                        </div>
                        <div class="column">
                            <label for="input4">E-mail:</label>
                            <input type="email" id="input4" name="input4" required>
                        </div>
                    </div>
                    <div class="fila">
                        <div class="column">
                            <label for="input5">Primer nombre:</label>
                            <input type="text" id="input5" name="input5">
                        </div>
                        <div class="column">
                            <label for="input6">segundo nombre:</label>
                            <input type="text" id="input6" name="input6">
                        </div>
                    </div>
                    <div class="fila">
                        <div class="column">
                            <label for="input7">Primer apellido:</label>
                            <input type="text" id="input7" name="input7">
                        </div>
                        <div class="column">
                            <label for="input8">segundo apellido:</label>
                            <input type="text" id="input8" name="input8">
                        </div>
                    </div>
                </div>
                 <button>
                        <a href="pagos_2">Siguente</a>
                        <i class="fa-regular fa-credit-card"></i>
                    </button>
                    <div class="img">
                        <img  class="uno" src="img/pagos/visa.png" >
                        <img class="dos" src="img/pagos/tarjeta.png" >
                        <img class="tres" src="img/pagos/american-express.png" >
                        <img class="cuatro" src="img/pagos/pse.png" >
                    </div>
            </form>
    </section>


</div>
</html>
    @endsection
