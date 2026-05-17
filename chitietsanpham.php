<?php
include "config/database.php";
include "includes/header.php";

$id = (int)$_GET['id'];

$sql =
mysqli_query(
    $conn,
    "SELECT * FROM products WHERE id = $id"
);

$product =
mysqli_fetch_assoc($sql);

if(!$product){

    echo "<div class='container py-5'>
            <h3>Không tìm thấy sản phẩm</h3>
          </div>";

    include "includes/footer.php";
    exit;
}

$image =
!empty($product['image'])
? 'assets/images/'.$product['image']
: 'assets/images/logo1.png';

$related =
mysqli_query(
    $conn,
    "SELECT * FROM products
     WHERE id != $id
     ORDER BY RAND()
     LIMIT 4"
);
?>

<div class="container py-5">

    <div class="row g-5 align-items-center">

        <!-- Ảnh -->

        <div class="col-lg-6">

            <img
            id="mainImage"
            src="<?= $image ?>"
            class="img-fluid rounded-4 shadow w-100 border"
            style="height:500px;object-fit:cover;">

        </div>

        <!-- Nội dung -->

        <div class="col-lg-6">

            <span class="badge bg-success mb-3">
                Đặc sản Tây Nguyên
            </span>

            <h1 class="fw-bold mb-3">
                <?= $product['name'] ?>
            </h1>

            <h2 class="text-danger fw-bold mb-4">
                <?= number_format($product['price']) ?> VNĐ
            </h2>

            <p class="text-muted lh-lg">
                <?= nl2br($product['description']) ?>
            </p>

            <!-- Số lượng -->

            <div class="d-flex align-items-center gap-3 mt-4">

                <button
                class="btn btn-outline-secondary"
                onclick="decreaseQty()">
                    -
                </button>

                <input
                type="number"
                id="qty"
                value="1"
                min="1"
                class="form-control text-center"
                style="width:80px;">

                <button
                class="btn btn-outline-secondary"
                onclick="increaseQty()">
                    +
                </button>

            </div>

            <!-- Button -->

            <div class="d-flex gap-3 mt-4 flex-wrap">

                <button
class="btn btn-success btn-lg px-4"
onclick='addProductToCart()'>

<i class="fa-solid fa-cart-plus"></i>
Thêm vào giỏ hàng

</button>

                <a href="giohang.php"
                   class="btn btn-outline-dark btn-lg">

                    Xem giỏ hàng

                </a>

            </div>

        </div>

    </div>

    <!-- Nội dung sản phẩm -->

    <div class="card border-0 shadow-sm mt-5 rounded-4">

        <div class="card-body p-4">

            <h3 class="fw-bold mb-4">
                Thông tin sản phẩm
            </h3>

            <div class="bg-white p-4 rounded shadow-sm">
    <?= nl2br($product['content']) ?>
</div>

        </div>

    </div>

    <!-- Sản phẩm liên quan -->

    <div class="mt-5">

        <h3 class="fw-bold mb-4">
            Sản phẩm liên quan
        </h3>

        <div class="row g-4">

            <?php while($item =
            mysqli_fetch_assoc($related)): ?>

            <?php
            $relatedImage =
            !empty($item['image'])
            ? 'assets/images/'.$item['image']
            : 'assets/images/logo1.png';
            ?>

            <div class="col-md-3">

                <div class="card h-100 border-0 shadow-sm rounded-4">

                    <img
                    src="<?= $relatedImage ?>"
                    class="card-img-top"
                    style="height:220px;object-fit:cover;">

                    <div class="card-body">

                        <h5 class="fw-bold">
                            <?= $item['name'] ?>
                        </h5>

                        <p class="text-danger fw-bold">
                            <?= number_format($item['price']) ?> VNĐ
                        </p>

                        <a href="chitietsanpham.php?id=<?= $item['id'] ?>"
                           class="btn btn-success w-100">

                            Xem thêm

                        </a>

                    </div>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</div>

<script>

function increaseQty(){

    let qty =
    document.getElementById("qty");

    qty.value =
    parseInt(qty.value) + 1;
}

function decreaseQty(){

    let qty =
    document.getElementById("qty");

    if(parseInt(qty.value) > 1){

        qty.value =
        parseInt(qty.value) - 1;
    }
}

function addProductToCart(){

    let qty = parseInt(
        document.getElementById("qty").value
    );

    let cart =
    JSON.parse(
        localStorage.getItem("cart")
    ) || [];

    let product = {

        id: <?= $product['id'] ?>,

        name: "<?= $product['name'] ?>",

        price: <?= $product['price'] ?>,

        image: "<?= $product['image'] ?>",

        quantity: qty
    };

    let existing =
    cart.find(item => item.id == product.id);

    if(existing){

        existing.quantity += qty;

    }else{

        cart.push(product);
    }

    localStorage.setItem(
        "cart",
        JSON.stringify(cart)
    );

    alert("Đã thêm vào giỏ hàng!");

    
}


</script>
<?php include "includes/footer.php"; ?>