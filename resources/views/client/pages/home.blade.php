@extends('client.layout')
@section('content')
<div class="row title">
    <div class="col-12">
        <div class="row">
            <div class="col-12 title_main">
                <div class="row title_main_responsive">
                    <div class="col-md-8 col-12">
                        <img src="./assets/images/content/giang-ho-phu-quoc-1-1705894781-3267-1705894879.jpg"
                             width="100%">
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3><a href="#">Người trẻ trốn Tết</a></h3>
                                <p>KIÊN GIANG - Hơn trăm cảnh sát tư pháp, CSGT, cơ động, hình sự... được
                                    huy
                                    động
                                    giữ an
                                    ninh
                                    phiên xử 70 giang hồ hỗn chiến khi bảo kê đất tranh chấp, khiến 2 người
                                    chết, 6
                                    người bị
                                    thương. được huy động giữ an ninh phiên xử 70 giang hồ hỗn chiến khi bảo
                                    kê đất tranh chấp, khiến 2 người chết, 6 người bị thương.</p>
                                <hr>
                            </div>

                            <div class="news_different">
                                <h4 class="mb-3">Tin tức khác</h4>
                                <div class="col-12 mb-4">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="./assets/images/content/section2.jpg" alt=""
                                                 width="100%">
                                        </div>
                                        <div class="col-7">
                                            <h5>Thi công cầu metro gặp sự cố, đường cửa ngõ TP HCM ùn tắc
                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="col-12 mb-4">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="./assets/images/content/section3.jpg" alt=""
                                                 width="100%">
                                        </div>
                                        <div class="col-7">
                                            <h5>Cây quýt uốn dáng rồng bán trăm triệu đồng hai trăm năm tuổi
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 title__submain">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-3 sub_title">
                        <h3><a href="#">Loạt sự cố với hàng không Nga sau lệnh trừng phạt
                                phương
                                Tây</a></h3>
                        <img src="./assets/images/content/content_1.jpg">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 sub_title">
                        <h3><a href="#">Những người có thể trở thành phó tướng của ông Trump</a></h3>
                        <img src="./assets/images/content/content_2.jpg">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 sub_title">
                        <h3><a href="#">Những quốc gia bóng đá 'thấp bé nhẹ
                                cân' tại nhiều quốc gia
                            </a></h3>
                        <img src="./assets/images/content/content_1.jpg">
                    </div>
                    <div class="col-lg-3 col-md-6 mt-3 sub_title">
                        <h3><a href="#">Những người có thể trở thành phó tướng của ông Trump</a></h3>
                        <img src="./assets/images/content/content_2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-5 col-sm-12 content__left">
        <div class="row">
            @if(!empty($data))
                @foreach($data as $key => $post)
                    <a href="{{route('detail', $post->slug)}}" class="reset_link">
                        <div class="col-12 content__section mb-3 font_responsive">
                            <h5>{{$post->title}}</h5>
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{asset("uploads/posts/$post->thumbnail")}}" alt="" width="100%">
                                </div>
                                <div class="col-7">
                                    <p>{!! $post->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
    </div>

    <div class="col-lg-7 content__right px-3">
        <div class="row">
            <!-- business 1 -->
            <div class="col-12 d-flex content__title bussiness_title_1" style="align-items: center">
                <h3>Kinh doanh</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Quốc tế</a></li>
                    <li class="px-2"><a href="#">Doanh nghiệp</a></li>
                    <li class="px-2"><a href="#">Chứng khoán</a></li>
                    <li class="px-2"><a href="#">Vĩ mô</a></li>
                    <li class="px-2"><a href="#">Hậu trường kinh doanh</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business">
                <div class="row bussiness_responsive">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness1.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Sản phẩm hình rồng hút hàng ở Trung Quốc</h5>
                                <p>Gần đến Tết Nguyên Đán, các món đồ như trang sức vàng hay decal dán điện
                                    thoại hình rồng tại Trung Quốc đang bán rất chạy. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Hãng tàu cao tốc Superdong lỗ trở lại vì du lịch Phú Quốc chưa phục hồi</h5>
                        <p>Sau ba quý có lãi, Superdong Kiên Giang lỗ gần 7 tỷ vào quý IV/2023 vì thời ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom">
                <div class="row bussiness_responsive_subtitle">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">7 điều cần cân nhắc khi đầu tư
                            tiền
                            số năm 2024</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Thủ tướng mời doanh nghiệp
                            Romania đầu tư các dự án dầu khí</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Doanh thu xuất khẩu dầu Nga
                            thấp nhất 6 tháng</a>
                    </div>
                </div>
            </div>

            <div class="col-12 business__table py-3 exchange_responsive">
                <table class="table table-bordered table-light">
                    <thead>
                    <tr>
                        <th class="d-flex justify-content-between"><span>Tỷ giá ngoại tệ</span> <img
                                src="./assets/images/content/eximbank.svg"></th>
                        <th width="15%" class="text-end">Mua TM</th>
                        <th width="15%" class="text-end">Mua CK</th>
                        <th width="15%" class="text-end">Bán</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>USD/VNĐ</td>
                        <td class="text-end">24.290</td>
                        <td class="text-end">24.290</td>
                        <td class="text-end">24.290</td>
                    </tr>
                    <tr>
                        <td>EUR/VNĐ</td>
                        <td class="text-end">24.290</td>
                        <td class="text-end">24.290</td>
                        <td class="text-end">24.290</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- business 2 -->
            <div class="col-12 d-flex content__title bussiness_title_1" style="align-items: center">
                <h3>Bất động sản</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Chính sách</a></li>
                    <li class="px-2"><a href="#">Thị trường</a></li>
                    <li class="px-2"><a href="#">Dự án</a></li>
                    <li class="px-2"><a href="#">Không gian sống</a></li>
                    <li class="px-2"><a href="#">Tư vấn</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business">
                <div class="row bussiness_responsive">
                    <div class=" col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness2.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Dư 60 triệu đồng một tháng, nên đầu tư loại bất động sản nào?</h5>
                                <p>Chuyên gia nói, đất dân sinh, đất nền dự án ở TP HCM hoặc tỉnh có thể cho
                                    lợi nhuận kỳ vọng vượt trội chung cư, ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Biệt thự 880 m2 như 'chốn ẩn mình' giữa khu Thảo Điền</h5>
                        <p>TP HCM - Lấy cảm hứng từ một “chốn ẩn mình” giữa đô thị, không gian ở được thiết
                            kế giúp lấy nhiều ánh ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Lợi nhuận đầu tư căn hộ TP HCM
                            giảm <i class="fa fa-comment-alt"></i> 10</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Dự án Bắc Đầm Vạc, biệt thự
                            vườn Vinaconex 6 chậm tiến độ</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Doanh số bán nhà Mỹ thấp nhất
                            gần 30 năm <i class="fa fa-comment-alt"></i> 30</a>
                    </div>
                </div>
            </div>

            <!-- business 3 -->
            <div class="col-12 d-flex content__title py-3 bussiness_title_1" style="align-items: center">
                <h3>Thể thao</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Bóng đá</a></li>
                    <li class="px-2"><a href="#">Tennis</a></li>
                    <li class="px-2"><a href="#">Marathon</a></li>
                    <li class="px-2"><a href="#">Lịch thi đấu</a></li>
                    <li class="px-2"><a href="#">Asian Cup 2023</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business bussiness_responsive">
                <div class="row">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness3.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Việt Nam nguy cơ rớt khỏi top 100 FIFA</h5>
                                <p>Tuyển Việt Nam cần có điểm trước Iraq ở lượt cuối bảng D Asian Cup 2023,
                                    để tránh nguy cơ văng top 100 FIFA lần đầu tiên sau 6 năm. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Djokovic đấu Fritz ở tứ kết Australia Mở rộng</h5>
                        <p>AUSTRALIAHạt giống số một Novak Djokovic thắng liền 13 game đầu khi vùi dập
                            Adrian Mannarino 6-0... <i class="fa fa-comment-alt"></i> 38
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Mourinho cười về tin đồn dẫn
                            dắt Barca</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Đối thủ muốn chơi một trận tử
                            tế với Djokovic</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Carragher: 'Jota dứt điểm hay
                            hơn Torres, Suarez'</a>
                    </div>

                    <div class="col-12 pt-4">
                        <div class="footbal__matches footbal_matches_responsive">
                            <div class="foobal__item py-2 px-2">
                                <p>Hôm nay, 22:00</p>
                                <div class="footbal__content pb-2">
                                    <img src="./assets/images/content/flag1.png" width="100%">
                                    <span>Tajikistan</span>
                                </div>
                                <div class="footbal__content">
                                    <img src="./assets/images/content/flag2.png" width="100%">
                                    <span>Lebanon</span>
                                </div>
                            </div>

                            <div class="foobal__item py-2 px-2">
                                <p>Hôm nay, 22:00</p>
                                <div class="footbal__content pb-2">
                                    <img src="./assets/images/content/Qatar.png" width="100%">
                                    <span>Qatar</span>
                                </div>
                                <div class="footbal__content">
                                    <img src="./assets/images/content/flag3.png" width="100%">
                                    <span>Trung Quốc</span>
                                </div>
                            </div>

                            <div class="foobal__item py-2 px-2">
                                <p>Hôm nay, 22:00</p>
                                <div class="footbal__content pb-2">
                                    <img src="./assets/images/content/flag4.png" width="100%">
                                    <span>Granada CF</span>
                                </div>
                                <div class="footbal__content">
                                    <img src="./assets/images/content/flag5.png" width="100%">
                                    <span>Atletico</span>
                                </div>
                            </div>

                            <div class="foobal__item py-2 px-2">
                                <p>Hôm nay, 22:00</p>
                                <div class="footbal__content pb-2">
                                    <img src="./assets/images/content/flag6.png" width="100%">
                                    <span>Australia</span>
                                </div>
                                <div class="footbal__content">
                                    <img src="./assets/images/content/flag7.png" width="100%">
                                    <span>Uzbekistan</span>
                                </div>
                            </div>

                            <div class="foobal__item py-2 px-2">
                                <p>Ngày mai, 22:00</p>
                                <div class="footbal__content pb-2">
                                    <img src="./assets/images/content/flag8.png" width="100%">
                                    <span>Syria</span>
                                </div>
                                <div class="footbal__content">
                                    <img src="./assets/images/content/flag9.png" width="100%">
                                    <span>Ấn Độ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- business 4 -->
            <div class="col-12 d-flex content__title py-3 bussiness_title_1" style="align-items: center">
                <h3>Giải trí</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Giới sao</a></li>
                    <li class="px-2"><a href="#">Phim</a></li>
                    <li class="px-2"><a href="#">Nhạc</a></li>
                    <li class="px-2"><a href="#">Thời trang</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business bussiness_responsive">
                <div class="row">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness4.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Lisa 'được là chính mình' khi bí mật du lịch Sài Gòn</h5>
                                <p>Diễn viên Thái Lan Diana Flipo, bạn của Lisa, nói ca sĩ hạnh phúc vì được
                                    là ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Nhà văn Nhật thắng giải văn học dù dùng ChatGPT</h5>
                        <p>Một phần nội dung tiểu thuyết ''Tokyo Sympathy Tower'' của Rie Kudan - tác giả
                            đoạt giải ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Quang Hà: 'Mua đồ hiệu với tôi
                            giờ là phung phí'</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Tranh tái hiện 12 tháng ở cung
                            điện thời Càn Long <i class="fa fa-comment-alt"></i> 11</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Dàn mẫu nhí diễn váy áo cảm
                            hứng múa rối</a>
                    </div>

                </div>
            </div>

            <!-- bussiness 5 -->
            <div class="col-12 d-flex content__title py-3 bussiness_title_1" style="align-items: center">
                <h3>Sức khỏe</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Tin tức</a></li>
                    <li class="px-2"><a href="#">Dinh dưỡng</a></li>
                    <li class="px-2"><a href="#">Khỏe đẹp</a></li>
                    <li class="px-2"><a href="#">Các bệnh</a></li>
                    <li class="px-2"><a href="#">vaccine</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business bussiness_responsive">
                <div class="row">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness5.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Ba sai lầm khi uống rượu bia có thể phá sức khỏe</h5>
                                <p>Uống paracetamol để giảm đau đầu do say, uống khi bụng rỗng, pha rượu bia
                                    với nước ngọt là những sai lầm có thể ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Tan máu do sốt xuất huyết, bất ngờ phát hiện bệnh di truyền</h5>
                        <p>TP HCM - Chàng trai 21 tuổi sốt, đau cơ, tiểu nước đỏ do tan máu sốc sốt xuất
                            huyết, nguy kịch, bác sĩ ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Người bệnh đái tháo đường nên
                            ăn trái cây nào?</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Xử trí thế nào khi da bị mụn
                            dịp Tết</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Yếu tố làm tăng nguy cơ mất trí
                            nhớ ở người trẻ</a>
                    </div>

                </div>
            </div>

            <!-- button album -->
            <div class="col-12 py-3 business__bottom bussiness_responsive_tag">
                <p>Cẩm nang các bệnh:
                    <button class="btn btn-info btn-sm px-3 mx-1">Hô hấp</button>
                    <button class="btn btn-info btn-sm px-3 mx-1">Tai mũi họng</button>
                    <button class="btn btn-info btn-sm px-3 mx-1">Da liễu</button>
                    <button class="btn btn-info btn-sm px-3 mx-1">Tiêu hóa</button>
                    <button class="btn btn-info btn-sm px-3 mx-1">Cơ xương khớp</button>
                </p>
            </div>

            <!-- bussiness 6 -->
            <div class="col-12 d-flex content__title py-3 bussiness_title_1" style="align-items: center">
                <h3>Đời sống</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Bài học sống</a></li>
                    <li class="px-2"><a href="#">Tổ ấm</a></li>
                    <li class="px-2"><a href="#">Tiêu dùng</a></li>
                    <li class="px-2"><a href="#">Cooking</a></li>
                    <li class="px-2"><a href="#">Mua sắm thông minh</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business bussiness_responsive">
                <div class="row">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness6.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Những người theo chủ nghĩa khỏa thân</h5>
                                <p>Luật pháp Đài Loan cấm khỏa thân nơi công cộng nhưng cộng đồng những
                                    người theo chủ nghĩa khỏa thân hoạt động bí mật với các sự kiện được tổ
                                    ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Cô dâu Hà Nội khoe cơ bắp, bế chú rể chụp ảnh cưới</h5>
                        <p>Bộ ảnh cưới của vợ chồng Hồng Hạnh, Ngọc Hải trong đó cô dâu mặc váy cưới, gồng
                            mình khoe cơ bắp cuồn ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Ba năm không Tết của người mẹ
                            có con ung thư</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Làm sạch cốc có nắp và ống
                            hút</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Canh bóng thả Hà Nội nấu theo
                            lối xưa</a>
                    </div>

                </div>
            </div>

            <!-- bussiness 7 -->
            <div class="col-12 d-flex content__title py-3 bussiness_title_1" style="align-items: center">
                <h3>Giáo dục</h3>
                <ul class="nav px-3">
                    <li class="px-2"><a href="#">Tin tức</a></li>
                    <li class="px-2"><a href="#">Tuyển sinh</a></li>
                    <li class="px-2"><a href="#">Chân dung</a></li>
                    <li class="px-2"><a href="#">Du học</a></li>
                    <li class="px-2"><a href="#">Giáo dục 4.0</a></li>
                    <li class="px-2"><a href="#">Trắc nghiệm</a></li>
                </ul>
            </div>

            <div class="col-12 px-3 py-3 business bussiness_responsive">
                <div class="row">
                    <div class="col-8 business__left">
                        <div class="row">
                            <div class="col-6">
                                <img src="./assets/images/content/bussiness7.jpg" width="100%">
                            </div>
                            <div class="col-6">
                                <h5>Nhiều trường ở TP HCM 'thưởng Tết' giáo viên 12-25 triệu đồng</h5>
                                <p>Nhiều trường chi tiền Tết cho giáo viên "nhỉnh" hơn năm ngoái, dao động
                                    12,5-25 triệu đồng mỗi người, nhờ tiết ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 business__right">
                        <h5>Chàng trai Việt điều hành dự án AI ở công ty 400 triệu người dùng</h5>
                        <p>Đoàn Nguyễn Tuấn là chuyên gia cấp cao về khoa học dữ liệu, trưởng nhóm phát
                            triển ứng dụng AI ở Quora, ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 business__bottom bussiness_responsive_subtitle">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Học sinh Hà Nội lần đầu diễn
                            hợp xướng trên phố đi bộ</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Làm ở trường tư hoặc quốc tế có
                            được dạy thêm không?</a>
                    </div>
                    <div class="col">
                        <i class="fa fa-angle-double-right"></i> <a href="#">Đại học chi hàng chục tỷ học
                            bổng mời gọi tân sinh viên</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="row mt-4 block mb-5">
    <div class="col-12 d-flex podcast podcast_responsive_title" style="align-items: center">
        <h3>Podcasts</h3>
        <ul class="nav px-3">
            <li class="px-2"><a href="#">VnExpress hôm nay</a></li>
            <li class="px-2"><a href="#">Tôi kể</a></li>
            <li class="px-2"><a href="#">Giải mã</a></li>
            <li class="px-2"><a href="#">Bạn có ổn?</a></li>
            <li class="px-2"><a href="#">Tài chính cá nhân</a></li>
        </ul>
    </div>

    <div class="col-12 my-2 mb-4">
        <div class="row podcast_responsive">
            <div class="col-6 podcast__left">
                <div class="row">
                    <div class="col-3">
                        <img src="./assets/images/content/podcast.jpg" width="100%">
                    </div>
                    <div class="col-9">
                        <h4>Điểm tin 6h: Việt Nam có thể phóng vệ tinh radar đầu tiên năm 2025; Thái Lan đặt
                            một chân vào vòng 1/8 Asian Cup</h4>
                        <p>Thủ tướng mời doanh nghiệp Romania đầu tư các dự án dầu khí; Hamas gọi cuộc đột
                            kích lãnh thổ Israel là 'bước đi cần...</p>
                    </div>
                </div>
            </div>
            <div class="col-6 px-4">
                <div class="row">
                    <div class="col-3">
                        <img src="./assets/images/content/podcast1.jpg" width="100%">
                    </div>
                    <div class="col-9">
                        <h4>Kiếm lời từ chung cư cũ</h4>
                        <p>Xác định "sẽ thiệt" khi bán căn chung cư cũ đã ở 6 năm qua, Huy Phong bất ngờ vì
                            lãi gần 40%, cao gấp rưỡi cách đây 3-4 năm. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="col-12 subject mb-3 subject_title_responsive">
        <ul class="nav">
            <li><a href="#" class="px-3"><b>Chủ đề</b></a></li>
            <li><a href="#" class="px-2">Vụ tấn công trụ sở xã ở Đăk Lăk</a></li>
            <li><a href="#" class="px-2">Bầu cử tổng thống Mỹ 2024</a></li>
            <li><a href="#" class="px-2">Su-22 rơi ở Quảng Nam</a></li>
        </ul>
    </div>
    <hr>

    <div class="col-12 science science_title_responsive">
        <h3>Khoa học - Công nghệ</h3>
        <ul class="nav">
            <li><a href="#"><b>Khoa học</b></a></li>
            <li><a href="#">Việt Nam</a></li>
            <li><a href="#">Chỉ số PII</a></li>
            <li><a href="#">Phát minh</a></li>
            <li><a href="#">Ứng dụng</a></li>
            <li><a href="#">Thế giới tự nhiên</a></li>
            <li><a href="#">Sáng kiến khoa học 2024</a></li>
        </ul>
    </div>

    <div class="row science__body mb-3 science__responsive">
        <div class="col-6 science__body__left">
            <img src="./assets/images/content/science.jpg" width="100%">
            <h3 class="py-3">5.000 kiến lửa hợp thành bè mảng cứu kiến chúa</h3>
            <p>MỸ - Hàng nghìn con kiến lửa dùng thân mình tạo thành chiếc bè chắc chắn trôi nổi theo dòng
                nước để cứu kiến chúa và cả tổ khỏi chết đuối trong bể bơi. </p>
        </div>
        <div class="col-6 science__body__right">
            <div class="row">
                <div class="col-md-6 col-12 science__item__left px-4">
                    <div class="science__item">
                        <img src="./assets/images/content/science1.jpg" width="100%">
                        <h5 class="pt-3 pb-2">Tiểu hành tinh lao xuống khí quyển Trái Đất</h5>
                    </div>
                    <hr>
                    <div>
                        <img src="./assets/images/content/science2.jpg" width="100%">
                        <h5 class="pt-3 pb-2">Chàng trai Việt bỏ việc 'trong mơ' để du lịch khắp thế giới
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-3">
                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Những điều tạo nên một du khách văn minh khi ra nước ngoài</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/science2.jpg" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Khách sạn cao cấp cải tạo từ tàu hỏa bỏ hoang</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/science3.jpg" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Cứu hai du khách kẹt trên núi Cô Tiên</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/science4.jpg" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Mông Cổ lập kỷ lục Guinness tại lễ hội băng tuyết</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/science5.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- technology -->
    <div class="col-12 science science_title_responsive">
        <ul class="nav">
            <li><a href="#"><b>Số hóa</b></a></li>
            <li><a href="#">Công nghệ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Blockchain</a></li>
            <li><a href="#">Kinh nghiệm</a></li>
            <li><a href="#">GameVerse 2024</a></li>
        </ul>
    </div>

    <div class="row science__body mb-3 science__responsive">
        <div class=" col-6 science__body__left">
            <img src="./assets/images/content/tech1.jpg" width="100%">
            <h3 class="py-3">Robot Trung Quốc đổ bộ các kho hàng Nhật Bản</h3>
            <p>Nhật Bản đang nhập lượng lớn robot từ Trung Quốc nhằm đối phó với tình trạng thiếu nhân lực
                trong chuỗi cung ứng hàng hóa.</p>
        </div>
        <div class="col-6 science__body__right">
            <div class="row">
                <div class="col-md-6 col-12 science__item__left px-4">
                    <div class="science__item">
                        <img src="./assets/images/content/tech2.png" width="100%">
                        <h5 class="pt-3 pb-2">Dấu hiệu cho thấy kỷ nguyên điện thoại Nokia sắp kết thúc</h5>
                    </div>
                    <hr>
                    <div>
                        <img src="./assets/images/content/tech3.jpg" width="100%">
                        <h5 class="pt-3 pb-2">iPhone 16 Pro có thể nâng bộ nhớ trong lên 2 TB
                        </h5>
                    </div>
                </div>
                <div class="col-md-6 col-12 px-3">
                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Cuộc chiến giảm giá đúc chip đời cũ ở Trung Quốc</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/tech4.jpg" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Khách sạn cao cấp cải tạo từ tàu hỏa bỏ hoang</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/tech5.png" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Cứu hai du khách kẹt trên núi Cô Tiên</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/tech6.png" width="100%">
                            </div>
                        </div>
                    </div>

                    <div class="science__body__right__item py-2">
                        <div class="row">
                            <div class="col-7">
                                <h5>Mông Cổ lập kỷ lục Guinness tại lễ hội băng tuyết</h5>
                            </div>
                            <div class="col-5">
                                <img src="./assets/images/content/science5.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection
