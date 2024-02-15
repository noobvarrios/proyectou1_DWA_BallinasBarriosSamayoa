<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="pago-interfaz.css">
</head>

<body>
    <div class='container'>
        <div class='window'>
            <div class='order-info'>
                <div class='order-info-content'>
                    <h2>Resumen</h2>
                    <div class='line'></div>
                    <table class='order-table'>
                        <tbody>
                            <tr>
                                <td><img id="producto-imagen" class='full-width'></td>
                                <td>
                                    <br> <span id="producto-nombre" class='thin'></span>
                                    <br> <span id="producto-descripcion" class='thin small'></span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div id="producto-precio" class='price'></div>
                                </td>
                            </tr>
                        </tbody>

                    </table>


                    <div class='total'>
                        <span style='float:left;'>
                            <div class='thin dense'>VAT 16%</div>
                            <div class='thin dense'>Envio</div>
                            TOTAL 
                            

                        </span>
                        <span style='float:right; text-align:right;'>
                            
                            <div class='thin dense' id='iva'>$</div>
                            <div class='thin dense' id='envio'>$</div>
                            <div class='thin dense' id = 'total'>$</div>
                        </span>
                    </div>
                </div>
            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <table class='half-input-table'>
                        <tr>
                            <td>Tipo tarjeta: </td>
                            <td>
                                <div class='dropdown' id='card-dropdown'>
                                    <div class='dropdown-btn' id='current-card'>Visa</div>
                                    <div class='dropdown-select'>
                                        <ul>
                                            <li>Master Card</li>
                                            <li>American Express</li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <img id="tarjeta-imagen" class='credit-card-image'></img>
                    Card Number
                    <input id="numero-tarjeta" class='input-field'></input>
                    Titular
                    <input id="titular-tarjeta" class='input-field'></input>
                    <table class='half-input-table'>
                        <tr>
                            <td> Expira
                                <input id="fecha-expiracion" class='input-field'></input>
                            </td>
                            <td>CVV
                                <input id="cvv" class='input-field'></input>
                            </td>
                        </tr>
                    </table>
                    <button class='pay-btn'>Realizar compra</button>

                </div>

            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const urlParams = new URLSearchParams(window.location.search);
            const nombre = urlParams.get('nombre');
            const precio = parseFloat(urlParams.get('precio'));
            const imagen = urlParams.get('imagen');

            const iva = precio * 0.16;
            const envio = precio * 0.02;
            const total = precio + iva + envio;

            document.getElementById('producto-nombre').innerText = nombre;
            document.getElementById('producto-precio').innerText = `$${precio.toFixed(2)}`;
            document.getElementById('producto-imagen').src = imagen;
            document.getElementById('tarjeta-imagen').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
            document.getElementById('iva').innerText = `$${iva.toFixed(2)}`;
            document.getElementById('envio').innerText = `$${envio.toFixed(2)}`;
            document.getElementById('total').innerText = `$${total.toFixed(2)}`;
        });
    </script>
</body>

</html>
