<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini market - Productos</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><h1>Mini Market</h1></li>
            <li><a href="./index.php">Pedidos</a></li>
            <li><a href="#">Productos</a></li>
        </ul>
    </nav>
    <section class="header">
        <h3>
            <?php 
                date_default_timezone_set('America/Mexico_City');
                setlocale(LC_ALL,"spanish");
                echo strftime("%A %d de %B del %Y");
            ?>
        </h3>
        <button class="main-button btn-registrar" data-bs-toggle="modal" data-bs-target="#registrarProdModal">Registrar</button>
    </section>
    <section class="products">
        <div class="product-card">
            <div>
                <img src="https://picsum.photos/230/175" alt="">
            </div>
            <div class="product-info">
                <div>
                    <p>Leche</p>
                    <p>$26</p>
                </div>
                <div>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#modificarProdModal">create</i>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#eliminarProdModal">delete</i>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div>
                <img src="https://picsum.photos/230/175" alt="">
            </div>
            <div class="product-info">
                <div>
                    <p>Leche</p>
                    <p>$26</p>
                </div>
                <div>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#modificarProdModal">create</i>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#eliminarProdModal">delete</i>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div>
                <img src="https://picsum.photos/230/175" alt="">
            </div>
            <div class="product-info">
                <div>
                    <p>Leche</p>
                    <p>$26</p>
                </div>
                <div>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#modificarProdModal">create</i>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#eliminarProdModal">delete</i>
                </div>
            </div>
        </div>
        <div class="product-card">
            <div>
                <img src="https://picsum.photos/230/175" alt="">
            </div>
            <div class="product-info">
                <div>
                    <p>Leche</p>
                    <p>$26</p>
                </div>
                <div>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#modificarProdModal">create</i>
                    <i class="material-icons" data-bs-toggle="modal" data-bs-target="#eliminarProdModal">delete</i>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Registrar Producto-->
    <div class="modal fade" id="registrarProdModal" tabindex="-1" aria-labelledby="registrarProdModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 800px !important;">
                <div class="modal-header">
                    <h5 class="modal-title main-letters text-center" id="registrarProdModalLabel">Registrar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="display: flex; flex-direction: column;">
                    <div class="product-modal-info">
                        <div class="prod-info">
                            <input type="text" name="nombre-prod" id="nombre-prod" placeholder="Nombre">
                            <input type="number" name="precio-prod" id="precio-prod" placeholder="Precio unitario">
                        </div>
                        <div class="prod-description">
                            <textarea name="descripcion-prod" id="descripcion-prod" cols="22" rows="6" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="prod-img">
                        <input type="file" name="" id=""  style="width: 100%;">
                    </div>
                    <div class="modal-footer">
                        <button class="text-centered main-button btn-registrar btn-modal-registrar" id="btn-registrar-producto">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modificar Producto-->
    <div class="modal fade" id="modificarProdModal" tabindex="-1" aria-labelledby="modificarProdModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 800px !important;">
                <div class="modal-header">
                    <h5 class="modal-title main-letters text-center" id="modificarProdModalLabel">Modificar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="display: flex; flex-direction: column;">
                    <div class="product-modal-info">
                        <div class="prod-info">
                            <input type="number" name="id-producto-modificar" id="id-producto-modificar" hidden>
                            <input type="text" name="nombre-prod" id="nombre-prod" placeholder="Nombre">
                            <input type="number" name="precio-prod" id="precio-prod" placeholder="Precio unitario">
                        </div>
                        <div class="prod-description">
                            <textarea name="descripcion-prod" id="descripcion-prod" cols="22" rows="6" placeholder="Descripción"></textarea>
                        </div>
                    </div>
                    <div class="prod-img">
                        <input type="file" name="" id=""  style="width: 100%;">
                    </div>
                    <div class="modal-footer">
                        <button class="text-centered main-button btn-registrar btn-modal-modificar" id="btn-modificar-producto">Modificar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Eliminar Producto-->
    <div class="modal fade" id="eliminarProdModal" tabindex="-1" aria-labelledby="eliminarProdModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title main-letters text-center" id="eliminarProdModalLabel">Eliminar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="number" name="id-producto-eliminar" id="id-producto-eliminar" hidden>
                    <p>¿Está seguro que desea eliminar el producto “Leche alpura 1lt”?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-registrar" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn statusCancelado" id="btn-eliminar-producto">Eliminar</button>
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

<script language="javascript">
    var nombreProd, precioProd, descripcionProd;

    $("#btn-registrar-producto").click(function() {
        if ($("#nombre-prod").val() == "" || $("#nombre-prod").val() == null) {
            alert("Te faltó escribir el nombre del producto");
            nombreProd = "";
        } else {
            nombreProd = $("#nombre-prod").val();
        }
        if ($("#precio-prod").val() == "" || $("#precio-prod").val() == null) {
            alert("Te faltó escribir el precio del producto");
            precioProd = "";
        } else {
            precioProd = $("#precio-prod").val();
        }
        if ($("#descripcion-prod").val() == "" || $("#descripcion-prod").val() == null) {
            alert("Te faltó escribir la descripción del producto");
            var descripcionProd = "";
        } else {
            var descripcionProd = $("#descripcion-prod").val();
        }

        if (nombreProd != "" && precioProd != "" && descripcionProd != "") {
            $.ajax({
                data: {
                    nombreProd: nombreProd,
                    precioProd: precioProd,
                    fotoProd: 'foto',
                    descripcionProd: descripcionProd,
                },
                url: "./php/altaProducto.php",
                type: "POST",
                success: function(data, textStatus, jQxhr) {
                    if (data == '1') {
                        alert('El producto se ha registrado exitosamente');
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

    $("#btn-modificar-producto").click(function() {
        if ($("#nombre-prod").val() == "" || $("#nombre-prod").val() == null) {
            alert("Te faltó escribir el nombre del producto");
            nombreProd = "";
        } else {
            nombreProd = $("#nombre-prod").val();
        }
        if ($("#precio-prod").val() == "" || $("#precio-prod").val() == null) {
            alert("Te faltó escribir el precio del producto");
            precioProd = "";
        } else {
            precioProd = $("#precio-prod").val();
        }
        if ($("#descripcion-prod").val() == "" || $("#descripcion-prod").val() == null) {
            alert("Te faltó escribir la descripción del producto");
            var descripcionProd = "";
        } else {
            var descripcionProd = $("#descripcion-prod").val();
        }

        if (nombreProd != "" && precioProd != "" && descripcionProd != "") {
            $.ajax({
                data: {
                    nombreProd: nombreProd,
                    precioProd: precioProd,
                    marcaProd: marcaProd,
                    descripcionProd: descripcionProd,
                },
                url: "./php/modificarProducto.php",
                type: "POST",
                success: function(data, textStatus, jQxhr) {
                    if (data == '1') {
                        alert('El producto se modificó exitosamente');
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

    $("#btn-eliminar-producto").click(function() {
        if ($("#id-producto-eliminar").val() != "") {
            $.ajax({
                data: {
                    idProd: idProd,
                },
                url: "./php/bajaProducto.php",
                type: "POST",
                success: function(data, textStatus, jQxhr) {
                    if (data == '1') {
                        alert('El producto se eliminó exitosamente');
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

    const idProducto = (id, input) => {
        $(""+input+"").val(id)
    }
</script>
</html>