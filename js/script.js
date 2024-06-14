let cartItems = [];
let cartTotal = 0;

//para etsa funcion se recibe el nombre y precio de lo que se compra
function addToCart(productName, productPrice) {

    const existingItem = cartItems.find((item) => item.name === productName);

    if (existingItem) {
        // Si el producto ya está en el carrito, aumentamos la cantidad en 1
        existingItem.quantity++;
        cartTotal += productPrice;
    } else {
        // Si el producto no está en el carrito, lo agregamos con cantidad 1
        cartItems.push({name: productName, price: productPrice, quantity: 1});
        cartTotal += productPrice;
    }
    //se actualiza
    updateCart();
}

//segun el indice del producto que se guarda se elimina
function removeFromCart(index) {
    const removedItem = cartItems.splice(index, 1)[0];
    //se elimina y se actualiza el carrito
    cartTotal -= removedItem.price * removedItem.quantity;
    updateCart();
}


function updateCart() {
    const cartList = document.getElementById("cart-items");
    //con el inner se actualiza el contenido
    cartList.innerHTML = "";

    cartItems.forEach((item, index) => {
        const li = document.createElement("li");
        //se coloca el producto

        const nameSpan = document.createElement("span");
        nameSpan.textContent = `${item.name} - `;
        li.appendChild(nameSpan);
        //elegir la cantidad de un producto

        const quantityInput = document.createElement("input");
        quantityInput.type = "number";
        quantityInput.min = "1";
        quantityInput.value = item.quantity;
        quantityInput.onchange = (event) => changeQuantity(event, index);
        li.appendChild(quantityInput);
        //agrega el precio en el carrito

        const priceSpan = document.createElement("span");
        priceSpan.textContent = ` - $${item.price * item.quantity}`;
        li.appendChild(priceSpan);

        //boton para eliminar un objeto del carrito
        const removeBtn = document.createElement("button");
        removeBtn.textContent = "Eliminar";
        removeBtn.onclick = () => removeFromCart(index);
        li.appendChild(removeBtn);
        //desplegar la info actualizada
        cartList.appendChild(li);
    });
    //se muestra el total del precio
    const cartTotalElement = document.getElementById("cart-total");
    cartTotalElement.textContent = `$${cartTotal}`;
}
//funcion para cambiar la cantidad de un producto
function changeQuantity(event, index) {
    const newQuantity = parseInt(event.target.value, 10);
    //se verifica que la cantidad nueva sea valida
    if (isNaN(newQuantity) || newQuantity <= 0) {
        alert("Cantidad inválida. No se modificó la cantidad del producto en el carrito.");
        return;
    }
    //se actualiza en caaso contrario
    const changedItem = cartItems[index];
    cartTotal -= changedItem.price * changedItem.quantity;
    changedItem.quantity = newQuantity;
    cartTotal += changedItem.price * newQuantity;
    updateCart();
}


//funcion encargada de pago
function checkout() {
    //verificamos que no este vacio
    if (cartItems.length === 0) {
        alert("El carrito está vacío. No puedes finalizar la compra.");
    } else {
        // Obtener datos de envío y demas cosas del usuario
        const nombre = document.getElementById("nombre").value;
        const cedula = document.getElementById("cedula").value;
        const provincia = document.getElementById("provincia").value;
        const ciudad = document.getElementById("ciudad").value;
        const codigoPostal = document.getElementById("codigo_postal").value;
        const direccion = document.getElementById("direccion").value;
        const numeroTelefono = document.getElementById("numero_telefono").value;
        const correo = document.getElementById("correo").value;
        const numeroOrden = generateOrderNumber();

        // Obtener método de pago seleccionado
        const metodoPago = document.getElementById("metodo_pago").value;
        //verificar que no sean nulos
        if (!nombre || !cedula || !provincia || !ciudad || !codigoPostal || !direccion || !numeroTelefono || !correo) {
            alert("Debes completar todos los campos de datos de envío.");
            return;
        }

        //mensaje en caso de compra valida
        alert(`Gracias por tu compra. Total a pagar: $${cartTotal}. Datos de envío: \n\nNombre: ${nombre}\nCédula: ${cedula}\nProvincia: ${provincia}\nCiudad: ${ciudad}\nCódigo Postal: ${codigoPostal}\nDirección: ${direccion}\nNúmero Telefónico: ${numeroTelefono}\nCorreo Electrónico: ${correo}\nMétodo de Pago: ${metodoPago}\nNúmero de rastreo de pedido: ${numeroOrden}`);
        cartItems = [];
        cartTotal = 0;
        updateCart();
        hideCart(); // Ocultar el carrito después de una compra exitosa
    }
}
//funcion para el numero de rastreo de pedido
function generateOrderNumber() {
    //caracteres
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    const orderLength = 6;
    let orderNumber = "";
    for (let i = 0; i < orderLength; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        orderNumber += characters.charAt(randomIndex);
    }
    return orderNumber;
}

//vaciar carrito
function clearCart() {
    //verificamos que no este vacio ya
    if (cartItems.length === 0) {
        alert("El carrito ya está vacío.");
    } else {
        //vaciar carrito
        const confirmClear = confirm("¿Estás seguro de que deseas vaciar el carrito?");
        if (confirmClear) {
            cartItems = [];
            cartTotal = 0;
            updateCart();
            alert("El carrito ha sido vaciado.");
        }
    }
}
//mostrar Carrito
function toggleCart() {
    const cartSection = document.getElementById("cart-section");
    cartSection.classList.toggle("show-cart");
}
//ocultarlo
function hideCart() {
    const cartSection = document.getElementById("cart-section");
    cartSection.classList.add("hide-cart");
    cartSection.classList.remove("show-cart");
}







