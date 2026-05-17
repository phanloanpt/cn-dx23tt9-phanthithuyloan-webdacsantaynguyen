<!doctype html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đặc sản Tây Nguyên - Trang chủ</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>

<footer class="bg-dark text-white pt-5 pb-3">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-12">
            <h4 class="text-warning mb-3 text-center">
              <img src="./images/logo3.png" alt="" class="img-footer mb-2" />ĐẶC SẢN TÂY NGUYÊN
            </h4>
            <p class="small">
              Chuyên cung cấp các sản phẩm nguyên chất từ Đắk Lắk, Kon Tum, Gia
              Lai.
            </p>
            <div class="small">
              <p>
                <i class="fa-solid fa-location-dot me-2"></i> Buôn Ma Thuột, Đắk
                Lắk
              </p>
              <p><i class="fa-solid fa-phone me-2"></i> 1900 123 456</p>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <h5>Danh mục</h5>
            <ul class="footer-link">
              <li><a href="#" class="text-white-50">Cà phê</a></li>
              <li><a href="#" class="text-white-50">Mật ong</a></li>
              <li><a href="#" class="text-white-50">Hồ tiêu</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-6">
            <h5>Hỗ trợ</h5>
            <ul class="footer-link">
              <li><a href="#" class="text-white-50">Giao hàng</a></li>
              <li><a href="#" class="text-white-50">Thanh toán</a></li>
              <li><a href="#" class="text-white-50">Bảo mật</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5>Đăng ký nhận tin</h5>
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Email của bạn"
              />
              <button class="btn btn-warning">Gửi</button>
            </div>
            <div class="mt-3">
              <h6>Theo dõi chúng tôi</h6>
              <div class="d-flex gap-2">
                <a href="#" class="btn btn-outline-light btn-sm">
                  <i class="fa-brands fa-facebook-f"></i
                ></a>
                <a href="#" class="btn btn-outline-light btn-sm">
                  <i class="fa-brands fa-instagram"></i
                ></a>
                <a href="#" class="btn btn-outline-light btn-sm">
                  <i class="fa-brands fa-tiktok"></i
                ></a>
                <a href="#" class="btn btn-outline-light btn-sm">
                  <i class="fa-brands fa-youtube"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <p class="text-center small mb-0">
          &copy; 2026 Đặc Sản Tây Nguyên. All rights reserved.
        </p>
      </div>
    </footer>

</footer>
<script src="assets/js/cart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>

function updateCartCount(){

    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    let total = 0;

    cart.forEach(item => {
        total += item.quantity;
    });

    let cartCount = document.getElementById("cart-count");

    if(cartCount){
        cartCount.innerText = total;
    }
}

updateCartCount();

</script>
</body>
</html>
