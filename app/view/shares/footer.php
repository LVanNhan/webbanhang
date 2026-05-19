</div><!-- /.container -->

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap');

footer.site-footer {
    background: #1a1a1a;
    color: #ccc;
    font-family: 'DM Sans', sans-serif;
    margin-top: 60px;
    position: relative;
    overflow: hidden;
}

footer.site-footer::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #c9a96e, #e8c99a, #c9a96e);
}

.footer-top {
    padding: 60px 0 40px;
    border-bottom: 1px solid #2e2e2e;
}

.footer-brand .brand-name {
    font-family: 'Playfair Display', serif;
    font-size: 1.8rem;
    color: #fff;
    letter-spacing: 2px;
    text-decoration: none;
    display: inline-block;
    margin-bottom: 6px;
}

.footer-brand .brand-name i { color: #c9a96e; margin-right: 8px; }

.footer-brand .brand-tagline {
    font-size: 0.78rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #888;
    margin-bottom: 20px;
}

.footer-brand p {
    font-size: 0.88rem;
    line-height: 1.8;
    color: #888;
    max-width: 280px;
}

.footer-social { display: flex; gap: 10px; margin-top: 24px; }

.footer-social a {
    width: 36px; height: 36px;
    border: 1px solid #333;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #888; text-decoration: none; font-size: 0.85rem;
    transition: all 0.25s ease;
}

.footer-social a:hover { border-color: #c9a96e; color: #c9a96e; transform: translateY(-2px); }

.footer-heading {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 12px;
}

.footer-heading::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 28px; height: 2px;
    background: #c9a96e;
}

.footer-links { list-style: none; padding: 0; margin: 0; }
.footer-links li { margin-bottom: 10px; }

.footer-links a {
    color: #888; text-decoration: none;
    font-size: 0.87rem; transition: color 0.2s;
    display: flex; align-items: center; gap: 8px;
}

.footer-links a::before {
    content: ''; width: 0; height: 1px;
    background: #c9a96e; transition: width 0.2s; display: inline-block;
}

.footer-links a:hover { color: #c9a96e; }
.footer-links a:hover::before { width: 12px; }

.footer-contact-item {
    display: flex; align-items: flex-start; gap: 12px;
    margin-bottom: 14px; font-size: 0.87rem; color: #888;
}

.footer-contact-item i { color: #c9a96e; width: 16px; margin-top: 2px; flex-shrink: 0; }

.footer-newsletter input {
    background: #2a2a2a; border: 1px solid #333; color: #fff;
    border-radius: 6px 0 0 6px; padding: 9px 14px;
    font-size: 0.85rem; outline: none; width: 100%; transition: border-color 0.2s;
}

.footer-newsletter input::placeholder { color: #555; }
.footer-newsletter input:focus { border-color: #c9a96e; }
.footer-newsletter .input-group { border-radius: 6px; overflow: hidden; }

.footer-newsletter .btn-gold {
    background: #c9a96e; color: #1a1a1a; border: none;
    padding: 9px 16px; font-weight: 500; font-size: 0.82rem;
    letter-spacing: 0.5px; transition: background 0.2s; white-space: nowrap;
}

.footer-newsletter .btn-gold:hover { background: #e8c99a; }

.footer-newsletter p { font-size: 0.82rem; color: #666; margin-top: 10px; margin-bottom: 0; }

.footer-bottom {
    padding: 20px 0;
    display: flex; align-items: center; justify-content: space-between;
    flex-wrap: wrap; gap: 12px;
}

.footer-bottom p { margin: 0; font-size: 0.82rem; color: #555; }
.footer-bottom p span { color: #c9a96e; }

.footer-payment { display: flex; gap: 8px; align-items: center; }

.payment-badge {
    background: #2a2a2a; border: 1px solid #333;
    border-radius: 5px; padding: 4px 10px;
    font-size: 0.75rem; color: #888; letter-spacing: 0.5px;
}
</style>

<footer class="site-footer">
    <div class="container">
        <div class="footer-top">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-brand">
                        <a href="/webbanhang" class="brand-name">
                            <i class="fa-solid fa-store"></i>FASHION
                        </a>
                        <div class="brand-tagline">Style · Elegance · Confidence</div>
                        <p>Mang đến những thiết kế thời trang hiện đại, phong cách và chất lượng cao cho người Việt.</p>
                        <div class="footer-social">
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="TikTok"><i class="fab fa-tiktok"></i></a>
                            <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Danh Mục</h6>
                    <ul class="footer-links">
                        <li><a href="/webbanhang/Category">Áo Nam</a></li>
                        <li><a href="/webbanhang/Category">Áo Nữ</a></li>
                        <li><a href="/webbanhang/Category">Quần Nam</a></li>
                        <li><a href="/webbanhang/Category">Quần Nữ</a></li>
                        <li><a href="/webbanhang/Category">Phụ Kiện</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Hỗ Trợ</h6>
                    <ul class="footer-links">
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Chính sách đổi trả</a></li>
                        <li><a href="#">Chính sách vận chuyển</a></li>
                        <li><a href="#">Bảng size chuẩn</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Liên Hệ</h6>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>123 Nguyễn Huệ, Q.1, TP.HCM</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>0909 123 456</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>hello@fashion.vn</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fa-solid fa-clock"></i>
                        <span>8:00 – 22:00 mỗi ngày</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-heading">Nhận Ưu Đãi</h6>
                    <p style="font-size:0.87rem; color:#888; margin-bottom:14px;">
                        Đăng ký nhận thông báo về bộ sưu tập mới và khuyến mãi độc quyền.
                    </p>
                    <div class="footer-newsletter">
                        <div class="input-group">
                            <input type="email" placeholder="Email của bạn...">
                            <button class="btn-gold">
                                <i class="fa-solid fa-paper-plane"></i>
                            </button>
                        </div>
                        <p><i class="fa-solid fa-shield-halved" style="color:#c9a96e; margin-right:5px;"></i>Không spam. Hủy đăng ký bất cứ lúc nào.</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <p>© <?= date('Y') ?> <span>FASHION</span>. Tất cả quyền được bảo lưu.</p>
            <div class="footer-payment">
                <span class="payment-badge">VISA</span>
                <span class="payment-badge">MoMo</span>
                <span class="payment-badge">ZaloPay</span>
                <span class="payment-badge">COD</span>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
