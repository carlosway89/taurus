<div class="col-xs-12 col-md-12 col-sm-12">
    <div class="shopping_cart" >
        <a href="order.html" title="View my shopping cart" rel="nofollow">
            <b>Carrito de Compras</b>
            <span class="ajax_cart_quantity unvisible">0</span>
            <span class="ajax_cart_product_txt unvisible">Productos-</span>
            <span class="ajax_cart_product_txt_s unvisible">Productos-</span>
            <span class="ajax_cart_total unvisible">
            </span>

            <span class="ajax_cart_no_product">0 Productos-</span>
            <span class="price cart_block_total ajax_block_cart_total">S/.0.00</span>
        </a>

        <div class="cart_block block exclusive">
            <div class="cart-arrow"></div>
            <div class="block_content">
                <!-- block list of products -->
                <div class="cart_block_list">
                    <p class="cart_block_no_products">
                        Ningun productos
                    </p>
                    <div class="cart-prices">
                        <div class="cart-prices-line first-line">
                            <span class="price cart_block_shipping_cost ajax_cart_shipping_cost">
                                Envio Gratis!
                            </span>
                            <span class="title">
                                Envio
                            </span>
                        </div>
                        <div class="cart-prices-line last-line">
                            <span class="price cart_block_total ajax_block_cart_total">S/.0.00</span>
                            <span class="title">Total</span>
                        </div>
                    </div>
                    <p class="cart-buttons">
                        <a id="button_order_cart" class="btn btn-default button button-small" href="order.html" title="Check out" rel="nofollow">
                            <span>
                                Comprar
                            </span>
                        </a>
                    </p>
                </div>
            </div>
        </div><!-- .cart_block -->
    </div>
</div>


<div id="layer_cart">
    <div class="clearfix">
        <div class="layer_cart_product col-xs-12 col-md-6">
            <span class="cross" title="Close window"></span>
            <h2>
                <i class="icon-ok"></i>El Producto se agrego correctamente a tu carrito de compras
            </h2>
            <div class="product-image-container layer_cart_img">
            </div>
            <div class="layer_cart_product_info">
                <span id="layer_cart_product_title" class="product-name"></span>
                <span id="layer_cart_product_attributes"></span>
                <div>
                    <strong class="dark">Cantidad</strong>
                    <span id="layer_cart_product_quantity"></span>
                </div>
                <div>
                    <strong class="dark">Total</strong>
                    <span id="layer_cart_product_price"></span>
                </div>
            </div>
        </div>
        <div class="layer_cart_cart col-xs-12 col-md-6">
            <h2>
                <!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
                <span class="ajax_cart_product_txt_s  unvisible">
                    Hay <span class="ajax_cart_quantity">0</span> Productos en tu carrito.
                </span>
                <!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
                <span class="ajax_cart_product_txt ">
                    Hay 1 producto en tu carrito.
                </span>
            </h2>

            <div class="layer_cart_row">
                <strong class="dark">
                    Total productos
                    (IGV no incluido.)
                </strong>
                <span class="ajax_block_products_total">
                </span>
            </div>

            <div class="layer_cart_row">
                <strong class="dark">
                    Total Envio&nbsp;(IGV no incluido.)
                </strong>
                <span class="ajax_cart_shipping_cost">
                    Envio Gratis!
                </span>
            </div>
            <div class="layer_cart_row">	
                <strong class="dark">
                    Total
                    (IGV no incluido.)
                </strong>
                <span class="ajax_block_cart_total">
                </span>
            </div>
            <div class="button-container">	
                <span class="continue btn btn-default button exclusive-medium" title="Continue shopping">
                    <span>
                        <i class="icon-chevron-left left"></i>Continar Comprando
                    </span>
                </span>
                <a class="btn btn-default button button-medium"	href="order.html" title="Proceed to checkout" rel="nofollow">
                    <span>
                        Proceder a Comprar<i class="icon-chevron-right right"></i>
                    </span>
                </a>	
            </div>
        </div>
    </div>
    <div class="crossseling"></div>
</div> <!-- #layer_cart -->
<div class="layer_cart_overlay"></div>