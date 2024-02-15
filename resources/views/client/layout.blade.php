<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>

<body>
<!-- ****************HEADER****************** -->
<header class="header">
    <div class="container">
        <div class="row d-flex justify-content-between" style="align-items: center;">
            <div class="col-5">
                <div class="row" style="align-items: center;">
                    <div class="col-4 add_border_right">
                        <img src="{{asset('assets/images/logo-tet-2024.svg')}}" width="100%">
                    </div>

                    <div class="col-4 add_border_right header_1_2">
                        Thứ hai, 22/1/2024
                    </div>

                    <div class="col-4 header_1_3">
                        Hà Nội <i class="fa fa-angle-down"></i>
                        <img src="{{asset('assets/images/content/cloud.png')}}" width="36px" class="px-1"> 11 <sup>o</sup>
                    </div>
                </div>
            </div>

            <div class="col-7">
                <div class="row justify-content-end">
                    <div class="col-md-2 add_border_right text-center header_2_1">
                        Mới nhất
                    </div>

                    <div class="col-md-3 add_border_right text-center header_2_2">
                        Tin theo khu vực
                    </div>

                    <div class="col-md-3 add_border_right text-center header_2_3" style="align-items: center;">
                        <img src="{{asset('assets/images/category/international-svgrepo-com.svg')}}" width="24px">
                        International
                    </div>

                    <div class="col-md-4 col-sm-12 header_2_4">
                        <!-- Button trigger modal -->
                        <i class="fa fa-search"></i>
                        <span type="button" data-toggle="modal" data-target="#exampleModal">
                                <span class="px-2"><i class="fa fa-user"></i> Đăng
                                    nhập</span>
                            </span>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Đăng Nhập</h5>
                                        <h5 class="modal-title text-center" id="exampleModalLabel">Đăng Ký</h5>
                                        <button type="button" class="close btn btn-danger" data-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row login_modal">
                                            <div class="col-6 add_border_right px-3">
                                                <p class=" text-center py-3">Đăng nhập với email</p>
                                                <form action="" method="post">
                                                    <div class="form-group mb-3">
                                                        <input type="text" placeholder="Email"
                                                               class="form-control p-3">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" placeholder="Mật khẩu"
                                                               class="form-control p-3">
                                                    </div>
                                                    <button class="btn btn-success w-100 py-3">Đăng nhập</button>
                                                </form>
                                                <p class="text-center mt-3"><a href="#" class="reset_link"
                                                                               style="color: #626262;">Lấy lại
                                                        mật
                                                        khẩu</a>
                                                </p>
                                            </div>

                                            <div class="col-6">
                                                <p class=" text-center py-3">Đăng ký với email</p>
                                                <form action="" method="post">
                                                    <div class="form-group mb-3">
                                                        <input type="text" placeholder="Nhập email"
                                                               class="form-control p-3">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" placeholder="Mật khẩu"
                                                               class="form-control p-3">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="text" placeholder="Nhập lại mật khẩu"
                                                               class="form-control p-3">
                                                    </div>
                                                    <button class="btn btn-danger w-100 py-3">Đăng ký</button>
                                                </form>
                                            </div>

                                            <div class="col-12 mt-5">
                                                <p class="text-center mx-5 px-5">Bạn đăng nhập là đồng ý với điều
                                                    khoản sử
                                                    dụng và chính sách bảo
                                                    mật
                                                    của VnExpress
                                                    & được bảo vệ bởi reCAPTCHA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Đóng</button>
                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <i class="fa-regular fa-bell"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- *****************MENU******************* -->
<section class="menu">
    <div class="container-fluid">
        <ul class="nav d-flex justify-content-between menu__navbar" style="align-items: center;">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li class="main_menu"><a href="#">Thời sự</a></li>
            <li class="main_menu"><a href="#">Góc nhìn</a></li>
            <li class="main_menu"><a href="#">Khoa học</a></li>
            <li class="main_menu"><a href="#">Giải trí</a></li>
            <li class="main_menu"><a href="#">Thể thao</a></li>
            <li class="main_menu"><a href="#">Pháp luật</a></li>
            <li class="main_menu"><a href="#">Giáo dục</a></li>
            <li class="main_menu"><a href="#">Sức khỏe</a></li>
            <li class="main_menu"><a href="#">Đời sống</a></li>
            <li class="main_menu"><a href="#">Du lịch</a></li>
            <li class="main_menu"><a href="#">Số hóa</a></li>
            <li class="main_menu"><a href="#">Xe cộ</a></li>
            <li class="main_menu"><a href="#">Ý kiến</a></li>
            <li>
                <div class="pos-f-t">
                    <nav class="navbar navbar-light">
                        <button class="navbar-toggler p- button_sub_menu" type="button" data-toggle="collapse"
                                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon span_sub_menu" style="font-size: 14px;"></span>
                        </button>
                    </nav>
                </div>
            </li>
        </ul>

    </div>
</section>

<main class="content mt-4">
    <div class="container">
        <!-- sub menu start-->
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <section class="wrap-all-menu">
                    <div class="container mx-0">
                        <div class="header-menu d-flex justify-content-between">
                            <span class="name-header">Tất cả chuyên mục</span>
                            <a href="#" class="reset_link close-menu" style="color: #076db6;"
                               class="navbar-toggler p-0" type="button" data-toggle="collapse"
                               data-target="#navbarToggleExternalContent"
                               aria-controls="navbarToggleExternalContent" aria-expanded="false"
                               aria-label="Toggle navigation">Đóng
                                <span class="icon-close"></span></a>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-10 col-12 grid-menu">
                                <!-- 1-6 1 -->
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Thời sự</a></li>
                                        <li><a href="#">Chính trị</a></li>
                                        <li><a href="#">Dân sinh</a></li>
                                        <li><a href="#">Lao động - Việc làm</a></li>
                                        <li><a href="#">Giao thông</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Góc nhìn</a></li>
                                        <li><a href="#">Bình luận nhiều</a></li>
                                        <li><a href="#">Chính trị & chính sách</a></li>
                                        <li><a href="#">Y tế & sức khỏe</a></li>
                                        <li><a href="#">Kinh doanh & quản trị</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Thế giới</a></li>
                                        <li><a href="#">Tư liệu</a></li>
                                        <li><a href="#">Phân tích</a></li>
                                        <li><a href="#">Người Việt 5 châu</a></li>
                                        <li><a href="#">Cuộc sống đó đây</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Thời sự</a></li>
                                        <li><a href="#">Nhịp sống</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Tôi kể</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Podcasts</a></li>
                                        <li><a href="#">VnExpress hôm nay</a></li>
                                        <li><a href="#">Tiền làm gì?</a></li>
                                        <li><a href="#">Tài chính cá nhân</a></li>
                                        <li><a href="#">Giải mã</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Kinh doanh</a></li>
                                        <li><a href="#">Quốc tế</a></li>
                                        <li><a href="#">Doanh nghiệp</a></li>
                                        <li><a href="#">Chứng khoán</a></li>
                                        <li><a href="#">Ebank</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- 1-6 2 -->
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Bất động sản</a></li>
                                        <li><a href="#">Chính sách</a></li>
                                        <li><a href="#">Thị trường</a></li>
                                        <li><a href="#">Dự án</a></li>
                                        <li><a href="#">Không gian sống</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Khoa học</a></li>
                                        <li><a href="#">Khoa học trong nước</a></li>
                                        <li><a href="#">Chỉ số PII</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Phát minh</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Giải trí</a></li>
                                        <li><a href="#">Giới sao</a></li>
                                        <li><a href="#">Sách</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Phim</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Thể thao</a></li>
                                        <li><a href="#">Bóng đá</a></li>
                                        <li><a href="#">Lịch thi đấu</a></li>
                                        <li><a href="#">Marathon</a></li>
                                        <li><a href="#">Tennis</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Pháp luật</a></li>
                                        <li><a href="#">Hồ sơ phá án</a></li>
                                        <li><a href="#">Tư vấn</a></li>
                                        <li><a href="#">Video</a></li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Giáo dục</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Tuyển sinh</a></li>
                                        <li><a href="#">Chân dung</a></li>
                                        <li><a href="#">Du học</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- 1-6 3 -->
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Sức khỏe</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Tư vấn</a></li>
                                        <li><a href="#">Dinh dưỡng</a></li>
                                        <li><a href="#">Khỏe đẹp</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Đời sống</a></li>
                                        <li><a href="#">Nhịp sống</a></li>
                                        <li><a href="#">Tổ ấm</a></li>
                                        <li><a href="#">Bài học sống</a></li>
                                        <li><a href="#">Cooking</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Du lịch</a></li>
                                        <li><a href="#">Điểm đến</a></li>
                                        <li><a href="#">Ẩm thực</a></li>
                                        <li><a href="#">Dấu chân</a></li>
                                        <li><a href="#">Tư vấn</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Số hóa</a></li>
                                        <li><a href="#">Công nghệ</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Blockchain</a></li>
                                        <li><a href="#">Kinh nghiệm</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Xe</a></li>
                                        <li><a href="#">Thị trường</a></li>
                                        <li><a href="#">Car Awards 2023</a></li>
                                        <li><a href="#">Diễn đàn</a></li>
                                        <li><a href="#">V-Car</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Ý kiến</a></li>
                                        <li><a href="#">Thời sự</a></li>
                                        <li><a href="#">Đời sống</a></li>
                                    </ul>
                                </div>

                                <!-- 1-6 4 -->
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Tâm sự</a></li>
                                        <li><a href="#">Hẹn hò</a></li>
                                    </ul>
                                </div>
                                <div class="grid-item">
                                    <ul class="nav flex-column">
                                        <li><a href="#">Thư giãn</a></li>
                                        <li><a href="#">Cười</a></li>
                                        <li><a href="#">Đố vui</a></li>
                                        <li><a href="#">Chuyện lạ</a></li>
                                        <li><a href="#">Crossword</a></li>
                                        <li class="view-more btn-view-cate"><a href="#">Xem thêm</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-2 menu-body-right">
                                <ul class="type-news nav flex-column">
                                    <li class="item-type"><a href="#">Spotlight</a></li>
                                    <li class="item-type"><a href="#">Podcasts</a></li>
                                    <li class="item-type"><a href="#">Ảnh</a></li>
                                    <li class="item-type"><a href="#">Infographics</a></li>
                                </ul>

                                <ul class="type-news nav flex-column">
                                    <li class="item-type"><a href="#">Mới nhất</a></li>
                                    <li class="item-type"><a href="#">Xem nhiều</a></li>
                                    <li class="item-type"><a href="#">Tin nóng</a></li>
                                </ul>

                                <ul class="list-link nav flex-column">
                                    <li class="link"><a href="#">Rao vặt</a></li>
                                    <li class="link"><a href="#">Startup</a></li>
                                    <li class="link"><a href="#">Mua ảnh VnExpress</a></li>
                                    <li class="link"><a href="#">eBox</a></li>
                                </ul>

                                <ul class="list-link nav flex-column">
                                    <li class="link"><a href="#">Liên hệ</a></li>
                                    <li class="link"><a href="#"><i class="fa fa-envelope"></i> Tòa
                                            soạn</a>
                                    </li>
                                    <li class="link"><a href="#"><i class="fa fa-ad"></i> Quảng
                                            cáo</a></li>
                                    <li class="link"><a href="#"><i class="fa fa-hand-holding-usd"></i>
                                            Hợp
                                            tác</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- end sub menu -->

        @yield('content')
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="row mb-4 footer_top">
            <div class="col-9">
                <div class="row footer_text_responsive">
                    <div class="col">
                        <ul class="nav flex-column">
                            <li><a href="#"><b>Trang Chủ</b></a></li>
                            <li><a href="#"><b>Video</b></a></li>
                            <li><a href="#"><b>Podcasts</b></a></li>
                            <li><a href="#"><b>Ảnh</b></a></li>
                            <li><a href="#"><b>infographics</b></a></li>
                            <li><a href="#"><b>Mới nhất</b></a></li>
                            <li><a href="#"><b>Xem nhiều</b></a></li>
                            <li><a href="#"><b>Tin nóng</b></a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="nav flex-column">
                            <li><a href="#">Thời sự</a></li>
                            <li><a href="#">Góc nhìn</a></li>
                            <li><a href="#">Thế giới</a></li>
                            <li><a href="#">Kinh doanh</a></li>
                            <li><a href="#">Bất động sản</a></li>
                            <li><a href="#">Giải trí</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="nav flex-column">
                            <li><a href="#">Thể thao</a></li>
                            <li><a href="#">Pháp luật</a></li>
                            <li><a href="#">Giáo dục</a></li>
                            <li><a href="#">Sức khỏe</a></li>
                            <li><a href="#">Đời sống</a></li>
                            <li><a href="#">Du lịch</a></li>
                        </ul>
                    </div>
                    <div class="col add_border_right">
                        <ul class="nav flex-column">
                            <li><a href="#">Khoa học</a></li>
                            <li><a href="#">Số hóa</a></li>
                            <li><a href="#">Xe</a></li>
                            <li><a href="#">Ý kiến</a></li>
                            <li><a href="#">Tâm sự</a></li>
                            <li><a href="#">Thư giãn</a></li>
                        </ul>
                    </div>
                    <div class="col add_border_right">
                        <ul class="nav flex-column">
                            <li><a href="#">Rao vặt</a></li>
                            <li><a href="#">Starup</a></li>
                            <li><a href="#">Mua ảnh</a></li>
                            <li><a href="#">eBox</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3 footer_text_responsive_right">
                <p>Liên hệ</p>
                <div class="row">
                    <div class="col-sm-12 col-6"><i class="fa fa-envelope"></i> Tòa soạn</div>
                    <div class="col-sm-12  col-6"><i class="fa fa-ad"></i> Quảng cáo</div>
                    <div class="col-sm-12  col-12"><i class="fa fa-address-card"></i> Hợp tác bản quyền</div>
                </div>
                <hr>
                <p class="py-0">Đường dây nóng</p>
                <div class="row">
                    <div class="col-lg-6 col-12 py-0"><b>083.888.0123</b> <br> (Hà Nội)</div>
                    <div class="col-lg-6 col-12 py-0"><b>082.233.3555</b> <br> (TP. Hồ Chí Minh)</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mb-4 footer_middle">
            <div class="col-12 d-flex justify-content-between" style="align-items: center;">
                <div>
                    <p><span class="px-2">Báo điện tử</span> <img src="./assets/images/content/logo.svg"
                                                                  width="120px"></p>
                </div>
                <div>
                    <ul class="nav">
                        <li><a href="#" class="px-2 add_border_right">Điều khoản sử dụng</a></li>
                        <li><a href="#" class="px-2 add_border_right">Chính sách bảo mật</a></li>
                        <li><a href="#" class="px-2 add_border_right">Cookies</a></li>
                        <li><a href="#" class="px-2 add_border_right">RSS</a></li>
                        <li><a href="#" class="px-2">Theo dõi VnExpress trên <i class="fab fa-facebook-f px-1"></i>
                                <i class="fab fa-twitter px-1"></i> <i class="fab fa-youtube px-1"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 col-12 footer_bottom">
                <p><b>Báo tiếng Việt nhiều người xem nhất</b> <br /> Thuộc Bộ Khoa học và Công nghệ <br />
                    Số giấy phép: 548/GP-BTTTT ngày 24/08/2021</p>
            </div>
            <div class="col-sm-5 col-12">
                <p>Tổng biên tập: Phạm Hiếu <br />
                    Địa chỉ: Tầng 10, Tòa A FPT Tower, số 10 Phạm Văn Bạch, Dịch Vọng, Cầu Giấy, Hà Nội <br />
                    Điện thoại: 024 7300 8899 - máy lẻ 4500 <br />
                </p>
            </div>
            <div class="col-sm-3 col-12">
                <p>© 1997-2024. Toàn bộ bản quyền thuộc VnExpress</p>
            </div>
        </div>
    </div>
</footer>

<!-- *****************MENU******************* -->
<!-- <script src=" https://code.jquery.com/jquery-3.7.1.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
