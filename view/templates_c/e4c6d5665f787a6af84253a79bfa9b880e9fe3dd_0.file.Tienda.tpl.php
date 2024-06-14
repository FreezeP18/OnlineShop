<?php
/* Smarty version 4.3.1, created on 2023-07-28 01:57:02
  from 'C:\xampp\htdocs\jueves\semana11\proyecto2_tienda\view\templates\Tienda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64c3044e6aa7c8_72976211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4c6d5665f787a6af84253a79bfa9b880e9fe3dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jueves\\semana11\\proyecto2_tienda\\view\\templates\\Tienda.tpl',
      1 => 1690502220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64c3044e6aa7c8_72976211 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
  <h1>Tienda Santander</h1>
  <button onclick="toggleCart()">Mostrar Carrito</button>
</header>

<!-- Seccion de productos hombres y sus caracteristicas -->   
  <main>
  <div class="product-category">
    <h2>Productos para Hombres</h2>
    <section class="products">
      
<div class="product">
    <img src="img/hombre/camiseta-64000-royal-frente.png" alt="Producto 1">
  <h2>Camisa Azul Hombre</h2>
  <p>Precio: $50</p>
  <label for="talla_camisa_hombre">Talla:</label>
  <select id="talla_camisa_hombre">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Camisa Azul Hombre', 50)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/1-1.png" alt="Producto 2">
  <h2>Jeans Hombre</h2>
  <p>Precio: $30</p>
  <label for="talla_jeans_hombre">Talla:</label>
  <select id="talla_jeans_hombre">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Jeans Hombre', 30)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/Camiseta-Barcelona-Fc-Primera-Equipación-2023-2024-baratas.jpg" alt="Producto 3">
  <h2>Camisa Fc Barcelona</h2>
  <p>Precio: $150</p>
  <label for="talla_camisa_hombre_barca">Talla:</label>
  <select id="talla_camisa_hombre_barca">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Camisa Fc Barcelona 2023', 150)">Agregar al Carrito</button>
</div>
        
        
<div class="product">
  <img src="img/hombre/3793844-500-auto.png" alt="Producto 4">
  <h2>Camisa de rayas</h2>
  <p>Precio: $15</p>
  <label for="talla_camisa_hombre_rayas">Talla:</label>
  <select id="talla_camisa_hombre_rayas">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Camisa de rayas', 15)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/71-product-5f695f33e455e-chaqueta-hombre-urban-black-1.jpg" alt="Producto 5">
  <h2>Jacket Hombre</h2>
  <p>Precio: $55</p>
  <label for="talla_jacket_hombre">Talla:</label>
  <select id="talla_jacket_hombre">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Jacket Hombre', 55)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/4145795-500-auto.png" alt="Producto 6">
  <h2>Pantaloneta Adidas</h2>
  <p>Precio: $30</p>
  <label for="talla_pantaloneta_hombre">Talla:</label>
  <select id="talla_pantaloneta_hombre">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Pantaloneta Adidas', 30)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/104009680_1.png" alt="Producto 7">
  <h2>Shorts Blancos</h2>
  <p>Precio: $20</p>
  <label for="talla_short_hombre">Talla:</label>
  <select id="talla_short_hombre">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Shorts Blancos', 20)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/hombre/D_NQ_NP_701330-MLM53452062199_012023-O.png" alt="Producto 8">
  <h2>Pantalon Negro</h2>
  <p>Precio: $25</p>
  <label for="talla_negro_hombre">Talla:</label>
  <select id="talla_negro_hombre">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Pantalon Negro', 25)">Agregar al Carrito</button>
</div>
        
        <!-- Seccion de productos mujeres y sus caracteristicas --> 
</section>
</div>
<div class="product-category">
    <h2>Productos para Mujeres</h2>
    <section class="products">
      
        <div class="product">
  <img src="img/mujer/6d407d36-6224-4d83-a6ff-d22712709076.jpeg" alt="Producto 9">
  <h2>Camisa Azul Mujer</h2>
  <p>Precio: $30</p>
  <label for="talla_camisa_mujer">Talla:</label>
  <select id="talla_camisa_mujer">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Camisa Azul Mujer', 30)">Agregar al Carrito</button>
</div>



<div class="product">
  <img src="img/mujer/12.png" alt="Producto 10">
  <h2>Jeans Mujer</h2>
  <p>Precio: $30</p>
  <label for="talla_jeans_mujer">Talla:</label>
  <select id="talla_jeans_mujer">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Jeans Mujer', 30)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/mujer/1329759001-1.jpg" alt="Producto 11">
  <h2>Vestido Colorido</h2>
  <p>Precio: $50</p>
  <label for="talla_vestido_mujer">Talla:</label>
  <select id="talla_vestido_mujer">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Vestido Colorido', 50)">Agregar al Carrito</button>
</div>
        
<div class="product">
  <img src="img/mujer/0f030856166bd38c4ae86c858ebe642a.jpg" alt="Producto 12">
  <h2>Blusa Blanca</h2>
  <p>Precio: $45</p>
  <label for="talla_blusa_mujer">Talla:</label>
  <select id="talla_blusa_mujer">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Blusa Blanca', 45)">Agregar al Carrito</button>
</div> 
        
<div class="product">
  <img src="img/mujer/Blouse-PNG-High-Quality-Image.png" alt="Producto 13">
  <h2>Blusa Rayas Azules</h2>
  <p>Precio: $25</p>
  <label for="talla_blusa_azul_mujer">Talla:</label>
  <select id="talla_blusa_azul_mujer">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Blusa Rayas Azules', 25)">Agregar al Carrito</button>
</div> 
        
<div class="product">
  <img src="img/mujer/BLUSA-CLOE-CELESTE-SMALL---3636_1200x1200_fee7b4b4-dd28-4e3e-9000-cb854e45f0ed.png" alt="Producto 14">
  <h2>Blusa Flores</h2>
  <p>Precio: $25</p>
  <label for="talla_blusa_flores_mujer">Talla:</label>
  <select id="talla_blusa_flores_mujer">
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Blusa Flores', 25)">Agregar al Carrito</button>
</div> 
        
<div class="product">
  <img src="img/mujer/juniors_so_paperbag_shorts.jpg" alt="Producto 15">
  <h2>Falda Rosada</h2>
  <p>Precio: $15</p>
  <label for="talla_falda_mujer">Talla:</label>
  <select id="talla_falda_mujer">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Falda Rosada', 15)">Agregar al Carrito</button>
</div>
        
        <div class="product">
  <img src="img/mujer/19.1.1_PAN248_PANTALON_MUJER_DENIM_STRETCH_F.png" alt="Producto 16">
  <h2>Jeans Mujer Azul Oscuro</h2>
  <p>Precio: $25</p>
  <label for="talla_jeans_oscuro_mujer">Talla:</label>
  <select id="talla_jeans_oscuro_mujer">
    <option value="28">28</option>
    <option value="30">30</option>
    <option value="32">32</option>
    <option value="34">34</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Jeans Mujer Azul Oscuro', 25)">Agregar al Carrito</button>
</div>
        
        
        <!-- Seccion de productos accesorios y sus caracteristicas --> 
    </section>
  </div>

  <div class="product-category">
    <h2>Accesorios</h2>
    <section class="products">
      
      
<div class="product">
  <img src="img/accesorios/GW9196_01_standard.png" alt="Producto 17">
  <h2>Tennis Adidas</h2>
  <p>Precio: $70</p>
  <label for="talla_tennis">Talla:</label>
  <select id="talla_tennis">
    <option value="7">7</option>
    <option value="7.5">7.5</option>
    <option value="8">8</option>
    <option value="8.5">8.5</option>
    <option value="9">9</option>
    <option value="9.5">9.5</option>
    <option value="10">10</option>
    <option value="10.5">10.5</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Tennis Adidas', 70)">Agregar al Carrito</button>
</div>

<div class="product">
  <img src="img/accesorios/50.png" alt="Producto 18">
  <h2>Sandalias Tommy</h2>
  <p>Precio: $40</p>
  <label for="talla_sandalias">Talla:</label>
  <select id="talla_sandalias">
    <option value="6">6</option>
    <option value="6.5">6.5</option>
    <option value="7">7</option>
    <option value="7.5">7.5</option>
    <option value="8">8</option>
    <option value="8.5">8.5</option>
    <option value="9">9</option>
    <option value="9.5">9.5</option>
  </select>
  <button class="add-to-cart" onclick="addToCart('Sandalias Tommy', 70)">Agregar al Carrito</button>
</div>
        
        
<div class="product">
        <img src="img/accesorios/54.png" alt="Producto 19">
        <h2>Botas de Cuero</h2>
        <p>Precio: $100</p>
        <button class="add-to-cart" onclick="addToCart('Botas de Cuero', 100)">Agregar al Carrito</button>
</div>
        
<div class="product">
        <img src="img/accesorios/accesorios.png" alt="Producto 20">
        <h2>Gorra Negra</h2>
        <p>Precio: $25</p>
        <button class="add-to-cart" onclick="addToCart('Gorra Negra', 25)">Agregar al Carrito</button>
</div>
        
<div class="product">
        <img src="img/accesorios/image00038.jpg" alt="Producto 21">
        <h2>Collar Dorado</h2>
        <p>Precio: $95</p>
        <button class="add-to-cart" onclick="addToCart('Collar Dorado', 95)">Agregar al Carrito</button>
</div>

<div class="product">
        <img src="img/accesorios/580719_RGB.jpg" alt="Producto 22">
        <h2>Pulsera Pandora</h2>
        <p>Precio: $300</p>
        <button class="add-to-cart" onclick="addToCart('Pulsera Pandora', 300)">Agregar al Carrito</button>
</div>

<div class="product">
        <img src="img/accesorios/mara_white_112-002-029_main_sq_nt_4800x4800.jpg" alt="Producto 23">
        <h2>Bolso con Estampado</h2>
        <p>Precio: $50</p>
        <button class="add-to-cart" onclick="addToCart('Bolso con Estampado', 50)">Agregar al Carrito</button>
</div>

<div class="product">
        <img src="img/accesorios/m126234-0051_collection_upright_portrait.jpg" alt="Producto 24">
        <h2>Reloj de Mano</h2>
        <p>Precio: $175</p>
        <button class="add-to-cart" onclick="addToCart('Reloj de Mano', 175)">Agregar al Carrito</button>
</div>          
</section>
</div>
      
      <!-- Carrito de compras --> 
<section class="cart hide-cart" id="cart-section">
  <h2>Carrito de Compras</h2>
  <ul id="cart-items"></ul>
  <!-- Mustra el costo de lo que hay en el carrito --> 
  <p>Total: <span id="cart-total">$0</span></p>

  <!-- Inputs para datos de envío -->
  <input type="text" placeholder="Nombre Completo" id="nombre" >
  <input type="text" placeholder="Cedula" id="cedula">
  <label for="provincia">Provincia:</label>
  <select id="provincia">
    <option value="Heredia">Heredia</option>
    <option value="Ajaluela">Alajuela</option>
    <option value="Limon">Limon</option>
    <option value="Cartago">Cartago</option>
    <option value="San Jose">San Jose</option>
    <option value="Punta Arenas">Punta Arenas</option>
    <option value="Guanacaste">Guanacaste</option>
  </select>
  <input type="email" placeholder="Correo Electrónico" id="correo">
  <input type="text" placeholder="Ciudad" id="ciudad">
  <input type="text" placeholder="Codigo Postal" id="codigo_postal">
  <input type="text" placeholder="Dirección" id="direccion">
  <input type="text" placeholder="Numero telefonico" id="numero_telefono">
  
    <!-- Selector de método de pago -->
  <label for="metodo_pago">Método de Pago:</label>
  <select id="metodo_pago">
    <option value="tarjeta">Tarjeta de Crédito</option>
    <option value="efectivo">Efectivo</option>
    <option value="transferencia">Transferencia Bancaria</option>
  </select>
  <!-- botones para interactuar --> 
  <button onclick="checkout()">Comprar</button>
  <button onclick="clearCart()">Vaciar Carrito</button>

  <button onclick="hideCart()">Ocultar Carrito</button>
</section>


  </main><?php }
}
