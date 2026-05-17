<?php include "includes/header.php"; ?>

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h1 class="fw-bold text-success">
                Liên hệ với chúng tôi
            </h1>

            <p class="text-muted">
                Hãy gửi thông tin nếu bạn cần hỗ trợ
            </p>

        </div>

        <div class="row g-5">

            <div class="col-lg-5">

                <div class="bg-white p-4 rounded shadow-sm h-100">

                    <h4 class="fw-bold mb-4">
                        Thông tin liên hệ
                    </h4>

                    <p>
                        📍 Đắk Lắk, Tây Nguyên
                    </p>

                    <p>
                        📞 0123 456 789
                    </p>

                    <p>
                        📧 dacsantaynguyen@gmail.com
                    </p>

                    <p>
                        🕒 08:00 - 22:00
                    </p>

                    <iframe
                        src="https://www.google.com/maps?q=buon%20ma%20thuot&output=embed"
                        width="100%"
                        height="250"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

                </div>

            </div>

            <div class="col-lg-7">

                <div class="bg-white p-4 rounded shadow-sm">

                    <form>

                        <div class="mb-3">

                            <label class="form-label">
                                Họ tên
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Nhập họ tên"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                placeholder="Nhập email"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Số điện thoại
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                placeholder="Nhập số điện thoại"
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Nội dung
                            </label>

                            <textarea
                                class="form-control"
                                rows="5"
                                placeholder="Nhập nội dung liên hệ"
                            ></textarea>

                        </div>

                        <button
                            class="btn btn-success px-4"
                            type="submit"
                        >
                            Gửi liên hệ
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include "includes/footer.php"; ?>