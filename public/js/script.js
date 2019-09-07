function updateProduct(id, name, price, description) {
    var param = {
        "id": id,
        "name": name,
        "price": price,
        "description": description
    };
    $.ajax(
        {
            data: param,
            url: '?controlador=Product&accion=updateProduct',
            type: 'post',
            beforeSend: function () {
                $("#mensaje").html("Procesando, \n\ espere por favor...");
            },
            success: function (response) {
            }
        }
    );
}

function deleteProduct(id) {
    var param = {
        "id": id
    };
    $.ajax(
        {
            data: param,
            url: '?controlador=Product&accion=deleteProduct',
            type: 'post',
            beforeSend: function () {
                $("#mensaje").html("Procesando, \n\ espere por favor...");
            },
            success: function (response) {
                $("#fila" + id).remove();
            }
        }
    );
}

function productView(id) {
    var param = {
        "id": id
    };
    $.ajax(
        {
            data: param,
            url: '?controlador=Product&accion=getProduct',
            type: 'post',
            beforeSend: function () {

            },
            success: function (response) {
                window.location.href = "?controlador=Product&accion=productView";
            }
        }
    );
}

function addCart(id) {
    var param = {
        "id": id,
        "cant": ($("#cant").val())
    };

    alert(($("#cant").val()))
    $.ajax(
        {
            data: param,
            url: '?controlador=Product&accion=addProductCart',
            type: 'post',
            beforeSend: function () {

            },
            success: function (response) {
                alert(response)
                alert("Producto añadido a su carrito de compras.")
            }
        }
    );
}

function deleteProductCart(id) {
    var param = {
        "id": id
    };
    alert(id)
    $.ajax(
        {
            data: param,
            url: '?controlador=Product&accion=deleteProductCart',
            type: 'post',
            beforeSend: function () {
                alert("ad")
                $("#mensaje").html("Procesando, \n\ espere por favor...");
            },
            success: function (response) {
                $("#fila" + id).remove();

            }
        }
    );
}

function confirmBuy() {

    if (($("#numeroT").val() != "") && ($("#nombreT").val() != "") &&
        ($("#fechaT").val() != "") && ($("#numeroS").val() != "")) {

        alert("Su compra se realizó correctamente.");

        window.location.href = "?controlador=Product&accion=home";

    } else {
        alert("dfs")
        $("#mensajeC").html("Complete todos los campos");
    }
}





