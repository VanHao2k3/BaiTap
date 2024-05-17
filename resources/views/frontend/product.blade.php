<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/layoutsite.css')}}">
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
</head>
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
    <div class="product py-4">
        <div class="container">
            <div class="row">
              <img src="{{ asset('images/banner1.webp') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container" style="position: relative;">
		<h1 class="title-page">
			<span>Tất cả sản phẩm</span>
		</h1>
		<div class="row">
			<aside class="dqdt-sidebar sidebar col-md-3 ">
                <div class="aside-content aside-content-menu">
	                <div class="title-head">
		                Danh mục sản phẩm

	                </div>
                        <nav class="nav-category">
                            <ul class="nav navbar-pills">
                                <li class="nav-item relative ">
                                    <a title="Áo" class="nav-link" href="/ao">Đồng hồ
                                    <span>(40 sản phẩm)</span>
                                    </a>
                                </li>
                                <li class="nav-item relative ">
                                    <a title="Quần" class="nav-link" href="/quan">Nước hoa 
                                        <span>(23 sản phẩm)</span>	
                                    </a>
                                </li>
                                <li class="nav-item relative ">
                                    <a title="Giày & Phụ Kiện" class="nav-link" href="/giay-phu-kien">Phụ Kiện - Đồng hồ </a>
                                </li>
                                <li class="nav-item relative ">
                                    <a title="Best seller" class="nav-link" href="/best-seller">Best seller</a>
                                </li>
                            </ul>
                    </nav>
                </div>
            </aside>
        <div class="col-md-9 ">
            <ul class="nav">
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp9.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ thông minh</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">5.390.000đ</li>
                        <li class="nav-item px-2"><del>6.890.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp2.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ Zenith</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp3.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ rolex </b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp4.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp5.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ </b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp6.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>Đồng hồ </b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp7.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>đồng hồ</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp8.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>đồng hồ</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
                <li class="nav-item px-4 ">
                    <a href="product_detail.html" title="Chi tiết sản phẩm"><img src="{{ asset('images/sp1.webp') }}"style="width: 260px; ";> </a>                 
                    <p><b>đồng hồ</b></p>
                    <ul class="nav py-2">
                        <li style="color:blue; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">390.000đ</li>
                        <li class="nav-item px-2"><del>650.000đ</del> </li>
                        <i class="fa-solid fa-tag px-3" style="color: red;"><i style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">-43</i><i class="fa-solid fa-percent"></i></i>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
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
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/layoutsite.js') }}"></script>
</body>
</html>