<?php include "includes/header.php"; ?>

<div class="container py-5">

    <h2 class="fw-bold mb-4">
        Giỏ hàng của bạn
    </h2>

    <div class="table-responsive">

        <table class="table align-middle">

            <thead class="table-success">

                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th width="180">Số lượng</th>
                    <th>Tổng</th>
                    <th></th>
                </tr>

            </thead>

            <tbody id="cart-items"></tbody>

        </table>

    </div>

    <div class="text-end mt-4">

        <h3 class="fw-bold">
            Tổng tiền:
            <span id="cart-total">
                0 VNĐ
            </span>
        </h3>

        <a href="thanhtoan.php"
           class="btn btn-success btn-lg mt-3">
            Thanh toán
        </a>

    </div>

    <!-- Sản phẩm liên quan -->

    <div class="mt-5">

        <h3 class="fw-bold mb-4">
            Có thể bạn thích
        </h3>

        <div class="row g-4">

            <?php
            include "config/database.php";

            $sql =
            "SELECT * FROM products
             ORDER BY RAND()
             LIMIT 4";

            $result =
            mysqli_query($conn,$sql);

            while($row =
            mysqli_fetch_assoc($result)):
            ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                <div class="card h-100 shadow-sm border-0">

                    <img
                    src="assets/images/<?= $row['image'] ?>"
                    class="card-img-top"
                    style="height:220px;object-fit:cover;">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            <?= $row['name'] ?>
                        </h5>

                        <p class="text-danger fw-bold">
                            <?= number_format($row['price']) ?> VNĐ
                        </p>

                        <a href="chitietsanpham.php?id=<?= $row['id'] ?>"
                           class="btn btn-success w-100">
                            Xem sản phẩm
                        </a>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</div>




<script>

function getCart(){
    return JSON.parse(localStorage.getItem('cart')) || [];
}

function saveCart(cart){
    localStorage.setItem('cart', JSON.stringify(cart));
}

function updateCartCount(){

    let cart = getCart();

    let total = 0;

    cart.forEach(item=>{
        total += Number(item.quantity);
    });

    let count = document.getElementById('cart-count');

    if(count){
        count.innerText = total;
    }
}

function renderCart(){

    let cart = getCart();

    let html = '';

    let total = 0;

    cart.forEach((item,index)=>{

        let subtotal =
            Number(item.price) * Number(item.quantity);

        total += subtotal;

        html += `
        <tr>

            <td>
                <div class="d-flex align-items-center gap-3">

                    <img
                    src="assets/images/${item.image}"
                    width="120"
                    class="rounded">

                    <div>

                        <h5 class="mb-2">
                            ${item.name}
                        </h5>

                    </div>

                </div>
            </td>

            <td class="fw-bold text-danger">
                ${Number(item.price).toLocaleString()} VNĐ
            </td>

            <td>

                <div class="d-flex align-items-center gap-2">

                    <button
                    class="btn btn-sm btn-success"
                    onclick="changeQty(${index},-1)">
                    -
                    </button>

                    <span>${item.quantity}</span>

                    <button
                    class="btn btn-sm btn-success"
                    onclick="changeQty(${index},1)">
                    +
                    </button>

                </div>

            </td>

            <td class="fw-bold">
                ${subtotal.toLocaleString()} VNĐ
            </td>

            <td>

                <button
                class="btn btn-sm btn-outline-danger"
                onclick="removeItem(${index})">
                Xóa
                </button>

            </td>

        </tr>
        `;
    });

    document.getElementById('cart-items').innerHTML = html;

    document.getElementById('cart-total').innerHTML =
        total.toLocaleString() + ' VNĐ';

    updateCartCount();
}

function changeQty(index,change){

    let cart = getCart();

    cart[index].quantity += change;

    if(cart[index].quantity <= 0){
        cart.splice(index,1);
    }

    saveCart(cart);

    renderCart();
}

function removeItem(index){

    let cart = getCart();

    cart.splice(index,1);

    saveCart(cart);

    renderCart();
}

renderCart();

</script>

<?php include "includes/footer.php"; ?>