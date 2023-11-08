@extends('plantillas.header')
@section('contenido')
<link rel="stylesheet" href="styles/pagos/pagos_2.css">
<title>Pagar</title>
<html>
    <div class="conte">
        <div class="titulo">
            <h1>Pagos online</h1>
        </div>
        <div class="info">
            <h1>Informacion de pago </h1>
            <p>Bienvenido a la segunda fase,Ya vas por mas de la mitad de comenzar a hacer lo que te apaciona </p><br>
            <p class="ter">Revisa nuestros<a href="#">Terminos y condiciones</a></p>
        </div>
        <label class="proceso">Tu proceso</label>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        <div class="continue">
            <h2 class="con">Continua aqui</h2>
        </div>
        <form>
            <div class="contenidoss">
                <div class="fila">
                    <div class="column">
                        <label for="input5">Nombre ( Titular):</label>
                        <input type="text" id="input5" name="input5">
                    </div>
                    <div class="column">
                        <label for="input6">Apellido( Titular):</label>
                        <input type="text" id="input6" name="input6">
                    </div>
                </div>

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
                        <label for="input3">Banco:</label>
                        <input list="Banco">
                        <datalist id="Banco">
                            <option value="Bancolombia">
                            <option value="Banco caja social">
                            <option value="Banco AV Villas">
                            <option value="BBVA">
                            <option value="Banco Bogota">
                            <option value="Davivienda">
                        </datalist>
                    </div>
                    <div class="column">
                        <label for="input4">No. Tarjeta:</label>
                        <input type="number" id="input4" name="input4" pattern="(0-9){16}" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="column">
                        <label for="input7">Fecha de vencimiento:</label>
                        <input type="date" id="input7" name="input7">
                    </div>
                    <div class="column">
                        <label for="input8">codigo de seguridad:</label>
                        <input type="number" id="input8" name="input8" pattern="(0-9){4}">
                    </div>
                </div>
            </div>
            <button>
                <a href="pagos_3">Siguente</a>
                <i class="fa-regular fa-credit-card"></i>
            </button>
            <div class="img">
                <img  class="uno" src="img/pagos/visa.png" >
                <img class="dos" src="img/pagos/tarjeta.png" >
                <img class="tres" src="img/pagos/american-express.png" >
                <img class="cuatro" src="img/pagos/pse.png" >
            </div>

    </form>
    </div>
    </html>
@endsection
