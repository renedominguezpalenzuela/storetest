




$(".add-to-cart").click(
    function (event) {
        event.preventDefault();
        console.log("Add to cart");
    
    }
);



function pintar_productos(datos, ubicacion_imagenes) {
    let lista_productos_html = $("#lista_productos");



    for (undato of datos) {

        console.log(undato);

        url_imagen = ubicacion_imagenes + undato.img;


        lista_productos_html.append(pintar_un_producto_html(undato, url_imagen));
    }

}

function pintar_un_producto_html(undato, url_imagen) {




    cadena_html = '<div class="single-products-catagory clearfix">' +
                        '<a href="shop.html">' +
                        '<img src="' + url_imagen + '" alt="">' +

                            '<div class="hover-content">' +
                                '<div class="line"></div>' +
                                    '<p>From $' + undato.price + '</p>' +
                                    '<h4>' + undato.name + '</h4>' +
                                '</div>' +
                        '</a>' +
                   '</div>';





    return cadena_html;




}


/*

 <div class="single-products-catagory clearfix" style="position: absolute; left: 0%; top: 0px;">
            <a href="shop.html">
                <img src="{{asset('img/bg-img/1.jpg')}}" alt="">

                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From $180</p>
                    <h4>Modern Chair</h4>
                </div>
            </a>
        </div>


*/