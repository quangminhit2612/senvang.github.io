@extends('frontend.layouts.master')
@section('content')

<!-- Content -->
<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>
    <!-- Header Banner -->
    <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-light="3"
        data-background="img/banner.jpg"> </section>
    <!-- Contact -->
    <section class="section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title"><span>Liên hệ</span></h2>
                </div>
            </div>
            <div class="row mb-90">
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p><b>Sen Vàng Land</b></p>
                    <p>Our firm nisl sodales sit amet sapien idea placerat sodales orcite. Vivamus ne miss rhoncus felis
                        bauen architecture.</p>
                    <p><b>Giấy chứng nhận đăng ký doanh nghiệp số :</b> 0201626622 do Sở Kế hoạch và Đầu tư TP. Hải Phòng cấp ngày 23/03/2015.</p>
                </div>
                <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <p><b>Thông tin liên hệ</b></p>
                    <p><b>Số điện thoại :</b> 098 659 44 86</p>
                    <p><b>Email :</b> senvanglandcon@gmail.com</p>
                    <p><b>Địa chỉ :</b> 24 King St, Charleston, 29401 USA</p>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <p><b>Đăng ký nhận thông tin về dự án</b></p>
                    <form method="post" class="contact__form"
                        action="https://duruthemes.com/demo/html/bauen/fullscreen-multipage-light/mail.php">
                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input name="name" type="text" placeholder="Họ và tên *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Tiêu đề *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Tin nhắn *"
                                    required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input name="submit" type="submit" value="Gửi thông tin">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3727.0039189503127!2d106.67210841391231!3d20.912161997126745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7b86be84df91%3A0x95f50a396c1f03a7!2sSen%20V%C3%A0ng%20Land%26Con!5e0!3m2!1svi!2s!4v1661826275905!5m2!1svi!2s"
                        width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
</div>

@stop