<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('jquery/jquery-3.7.1.min.js')}}">
    <link rel="stylesheet" href="assets/js/layoutsite.js">
</head>
<body>
    <header class="section_header bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 py-3">
                    <img src="{{ asset('images/logo.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 py-2">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Trang chủ</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="#">Thương hiệu nổi bật</a>
                                    <a class="nav-link" href="#">Tin tức</a>
                                    <a class="nav-link" href="#">Hệ thống cửa hàng</a>
                                    <a class="nav-link" href="#">Liên hệ</a>
                                    <a class="nav-link" href="#">Sản phẩm</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-2 item-action py-4 d-flex group-action">
                    <div class="item-action px-2">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="item-action px-2">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="item-action px-2">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
            </div>
        </div>
    </header> 

    <div class="container">
        <div class="row py-4">
            <div class="col-md-5">
                <img src="{{ asset('images/sp5.webp') }}" alt="" style="width: 350px;">
            </div>
            <div class="col-md-7">
                <h3 class="font-weight-semi-bold" style="font-weight: 400;">Tên sản phẩm</h3>
                <div class="d-flex md-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                    </div>
                    <small class="pt-1">lượt xem</small>
                </div>
                <h3 class="font-weight-semi-bold md-4">30.000.000đ</h3>
                <p class="mb-4">chi tiết sản phẩm</p>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-success btn-minus">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control input-number" value="1" min="1" max="100">
                        <div class="input-group-btn">
                            <button class="btn btn-success btn-plus">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <a href="#">
                        <button class="btn btn-success px-3 ms-2" type="button">
                            <i class="fa fa-shopping-cart mr-1"></i>
                            Thêm vào giỏ
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <h4 class="title-footer no-menu">Về Ego Helios</h4>
                    <div class="item">
                       <div class="icon">
                            <i class="fa-regular fa-map"></i>
                        <i class="font-monospace">Xuân Thủy, Hà Nội</i>
                       </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:support@sapo.vn" title="Gửi mail">support@sapo.vn</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            <a class="fone" href="tel:0364199361" title="Gọi ngay 0364199361">0364199361</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon mapsico">
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="danh-sach-cua-hang" title="Hệ thống cửa hàng">Hệ thống cửa hàng</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h4 class="title-footer arrow current">
                        Chính sách
                    </h4>
                    <ul class="list-menu current">
                        <li><a href="/"></a>Chính sách bán hàng</li>
                        <li><a href="/"></a>Chính sách mua hàng</li>
                        <li><a href="/"></a>Chính sách đổi trả</li>
                        <li><a href="/"></a>Chính sách đặc biệt</li>
                        <li><a href="/"></a>Chính sách Affiliate</li>
                        <li><a href="/"></a>Chính sách đại lý</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <h4 class="title-footer arrow current">
                        Dịch Vụ
                    </h4>
                    <ul class="list-menu current">
                        <li><a href="/"></a>Dịch vụ bảo trì</li>
                        <li><a href="/"></a>Dịch vụ EgoCare</li>
                        <li><a href="/"></a>Dịch vụ hàng</li>
                        <li><a href="/"></a>Dịch vụ vận chuyển</li>
                        <li><a href="/"></a>Dịch vụ sau bán</li>
                        <li><a href="/"></a>Dịch vụ mua lại</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h4>Giờ mở cửa</h4>
                    <p>Từ 9:00 - 21:30 tất cả các ngày trong tuần (bao gồm cả các ngày lễ, ngày Tết).</p>
                    <h4>Góp ý kiến, khiếu nại</h4>
                    <div class="item">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            <a class="fone" href="tel:19006750" title="Gọi ngay 19006750">1900 6750</a>
                        </div>
                    </div>
                    <div class="form-subscribe d-flex">
                        <h4>Nhận khuyến mãi</h4>
                        <div class="formchip" id="formchimp">
                            <form id="mc-form" class="newsletter-form" data-toggle="validator" action="https://gmail.us2.list-manage.com/subscribe/post-json?u=ef7f65e3be67e30ff1c4bd591&amp;id=a7430e9bc5">
                                <div class="input-group">
                                    <input aria-label="Địa chỉ Email" type="email" class="form-control" placeholder="Nhập email của bạn" name="EMAIL" required="" autocomplete="off">
                                    <button class="btn" type="submit" aria-label="Đăng kí" name="subscribe">
                                        Đăng kí
                                    </button>
                                </div>
                            </form>
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright text-center">
                    @ Bản quyền thuộc về Ego Corp | Cung cấp bởi 
                     <a href="https://www.sapo.vn/?utm_campaign=cpn:kho_theme-plm:footer&amp;utm_source=Tu_nhien&amp;utm_medium=referral&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=kho_theme-sapo" rel="noopener" title="Sapo" target="_blank">Sapo</a> 
                    </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>