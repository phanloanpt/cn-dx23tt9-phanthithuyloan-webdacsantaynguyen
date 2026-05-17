function getCart() {
  let cart = localStorage.getItem("cart");

  if (cart) {
    return JSON.parse(cart);
  }

  return [];
}

function saveCart(cart) {
  localStorage.setItem("cart", JSON.stringify(cart));

  updateCartCount();

  alert("Đã thêm vào giỏ hàng");
}

function addToCart(id, name, price, image) {
  let cart = getCart();

  let index = cart.findIndex((item) => item.id == id);

  if (index >= 0) {
    cart[index].quantity += 1;
  } else {
    cart.push({
      id: id,
      name: name,
      price: price,
      image: image,
      quantity: 1,
    });
  }

  saveCart(cart);

  alert("Đã thêm vào giỏ hàng");
}

function updateCartCount() {
  let cart = getCart();

  let total = 0;

  cart.forEach((item) => {
    total += item.quantity;
  });

  let cartCount = document.getElementById("cart-count");

  if (cartCount) {
    cartCount.innerText = total;
  }
}

updateCartCount();
