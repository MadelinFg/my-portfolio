<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini market - Pedidos</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav>
        <ul>
            <li>
                <h1>Mini Market</h1>
            </li>
            <li><a href="#">Pedidos</a></li>
            <li><a href="./productos.php">Productos</a></li>
        </ul>
    </nav>
    <section class="header">
        <h3>
            <?php
            date_default_timezone_set('America/Mexico_City');
            setlocale(LC_ALL, "spanish");
            echo strftime("%A %d de %B del %Y");
            ?>
        </h3>
        <button class="main-button btn-registrar" data-bs-toggle="modal" data-bs-target="#registrarPedidoModal">Registrar</button>
        <input type="date" name="inpt-date" id="inpt-date">
    </section>
    <section class="tabla-pedidos">
        <table class="text-center">
            <thead>
                <tr>
                    <th>No. pedido</th>
                    <th>Productos</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Leche alpura</td>
                    <td><button class="main-button statusEntregado" data-bs-toggle="modal" data-bs-target="#estatusModal">
                            Entregado
                            <i class="material-icons">refresh</i>
                        </button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Agua Bonafont</td>
                    <td><button class="main-button statusEnEspera" data-bs-toggle="modal" data-bs-target="#estatusModal">
                            En espera
                            <i class="material-icons">refresh</i>
                        </button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Leche alpura</td>
                    <td><button class="main-button statusEnPreparacion" data-bs-toggle="modal" data-bs-target="#estatusModal">
                            En preparación
                            <i class="material-icons">refresh</i>
                        </button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Agua Bonafont</td>
                    <td><button class="main-button statusCancelado" data-bs-toggle="modal" data-bs-target="#estatusModal">
                            Cancelado
                            <i class="material-icons">refresh</i>
                        </button></td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="estatusModal" tabindex="-1" aria-labelledby="estatusModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 620px !important;">
                <div class="modal-header">
                    <h5 class="modal-title main-letters text-center" id="estatusModalLabel">Selecciona el nuevo estatus para el pedido #1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button value="1" class="main-button cambiarEstatus statusEntregado statusDisabled" disabled data-bs-toggle="modal" data-bs-target="#estatusModal">Entregado</button>
                    <button value="2" class="main-button cambiarEstatus statusEnEspera" data-bs-toggle="modal" data-bs-target="#estatusModal">En espera</button>
                    <button value="3" class="main-button cambiarEstatus statusEnPreparacion" data-bs-toggle="modal" data-bs-target="#estatusModal">En preparación</button>
                    <button value="4" class="main-button cambiarEstatus statusCancelado" data-bs-toggle="modal" data-bs-target="#estatusModal">Cancelado</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Registrar Pedido -->
    <div class="modal fade" id="registrarPedidoModal" tabindex="-1" aria-labelledby="registrarPedidoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 620px !important;">
                <div class="modal-header">
                    <h5 class="modal-title main-letters text-center" id="registrarPedidoModalLabel">Registrar pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="display: flex; flex-direction: column;">
                    <div class="pedido-modal-info">
                        <input type="number" name="id-pedido" id="id-pedido" hidden>
                        <input type="text" name="clave-prod" id="clave-prod" placeholder="Clave producto">
                        <input type="number" name="cantidad-pedido" id="cantidad-pedido" placeholder="Cantidad">
                        <input type="number" name="subtotal-pedido" id="subtotal-pedido" placeholder="Subtotal">
                        <label for="iva-ped">I.V.A</label>
                        <input type="number" name="iva-ped" id="iva-ped" placeholder="IVA" disabled value="16">
                        <input type="number" name="total-pedido" id="total-pedido" placeholder="Total" disabled>
                    </div>
                    <div class="modal-footer">
                        <button class="text-centered main-button btn-registrar btn-modal-registrar" id="btn-registrar-pedido">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="./js/plugins.js"></script>
<script src="./js/main.js"></script>
<script src="./js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<script language="javascript">
    var claveProd, cantidadPedido, subtotalPedido, iva, total;
    function calcIVA(subtotal) {
        iva = (subtotal * 16) / 100;
        total = subtotal + iva;
        return total;
    }

    $("#btn-registrar-pedido").click(function() {
        if ($("#clave-prod").val() == "" || $("#clave-prod").val() == null) {
            alert("Te faltó escribir la clave del producto");
            claveProd = "";
        } else {
            claveProd = $("#clave-prod").val();
        }
        if ($("#cantidad-pedido").val() == "" || $("#cantidad-pedido").val() == null) {
            alert("Te faltó escribir la cantidad de productos");
            cantidadPedido = "";
        } else {
            cantidadPedido = $("#cantidad-pedido").val();
        }
        if ($("#subtotal-pedido").val() == "" || $("#subtotal-pedido").val() == null) {
            alert("Te faltó escribir el subtotal");
            var subtotalPedido = "";
        } else {
            var subtotalPedido = $("#subtotal-pedido").val();
        }
        $("#total-pedido").val(calcIVA(subtotalPedido));

        if (claveProd != "" && cantidadPedido != "" && subtotalPedido != "" && total != "") {
            $.ajax({
                data: {
                    claveProd: claveProd,
                    cantidadPedido: cantidadPedido,
                    subtotalPedido: subtotalPedido,
                    total: total,
                },
                url: "./php/altaPedido.php",
                type: "POST",
                success: function(data, textStatus, jQxhr) {
                    if (data == '1') {
                        alert('El pedido se ha registrado exitosamente');
                    } else {
                        alert('Lo siento, ha ocurrido un error inesperado.');
                    }
                },
                error: function(jqXhr, textStatus, errorThrown) {
                    console.log("Error checkClave: " + errorThrown);
                }
            })
        }
    });

    $(".cambiarEstatus").click(function(){
        var estatus = $(this).val()
        var idPedido = $("#id-pedido").val()
        $.ajax({
            data: {
                idPedido: idPedido,
                estatus: estatus,
            },
            url: "./php/modificarPedido.php",
            type: "POST",
            success: function(data, textStatus, jQxhr) {
                if (data == '1') {
                    alert('El pedido se modificó exitosamente');
                } else {
                    alert('Lo siento, ha ocurrido un error inesperado.');
                }
            },
            error: function(jqXhr, textStatus, errorThrown) {
                console.log("Error checkClave: " + errorThrown);
            }
        })
    });
</script>
</html>