    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="content-mau text-left">
        <section class="section-size">
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6">
                        <p>
                        <h3 class="text-header">Belajar Mengaji</h3>
                        </p>
                        <p>
                        <h3 class="text-header">Makin Mudah</h3>
                        </p>
                        <br>
                        <p>
                        <h4 style="color: #FFF; line-height: normal;">dengan Guru Ngaji Terbaik se-Indonesia <span style="color: #FFE604">Tatap Muka Langsung</span> ataupun <span style="color: #FFE604">Kelas Online.</span> Mudah, Murah dan Sesuai Syariah.
                        </h4>
                        </p>
                        <br>
                        <div class="btn-download-header">
                            <div class="button-download">
                                <a href="https://play.google.com/store/apps/details?id=com.maungaji" target="_blank">
                                    <img src="<?php echo base_url('img/logo/playstore.svg') ?>" class="responsive">
                                </a>
                                <a href="https://api.whatsapp.com/send?phone=6281213419253&text=Assalamu'alaikum%20admin%20maungaji%20saya%20ingin%20memesan%20Guru%20Ngaji" target="_blank">
                                    <img src="<?php echo base_url('img/logo/maungaji_wa.png') ?>" class="responsive">
                                </a>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="<?php echo base_url('/img/ilustrasi/Hero_Illust.svg') ?>" class="img-responsive" alt="Belajar Ngaji" style="height: 450px; width: 100%;">
                    </div>
                    <br>
                    <br>
                    <div id="socmed" class="col-md-2 col-sm-2" style="padding-left:100px;">
                        <ul>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=6281213419253&text=Assalamu'alaikum%20admin%20maungaji%20saya%20ingin%20memesan%20Guru%20Ngaji" target="_blank">
                                    <div class="round-icon text-center mb-5">
                                        <i class="fa fa-whatsapp center align-middle fa-2x"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/maungaji/" target="_blank">
                                    <div class="round-icon text-center mb-5">
                                        <i class="fa fa-instagram center align-middle fa-2x"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/maungaji/" target="_blank">
                                    <div class="round-icon text-center mb-5">
                                        <i class="fa fa-facebook center align-middle fa-2x"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/MaungajiIndo" target="_blank">
                                    <div class="round-icon text-center mb-5">
                                        <i class="fa fa-twitter center align-middle fa-2x"></i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/maungaji-indonesia/?originalSubdomain=id" target="_blank">
                                    <div class="round-icon text-center mb-5">
                                        <i class="fa fa-linkedin center align-middle fa-2x"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>
    </div>

    <!--testimoni-->
    <div class="gtco-testimonials testimonies">
        <div class="container">
            <div class="row">
                <div class="about-item text-left" style="margin-top: 100px;">
                    <div id="tech-statement">
                        <div class="title-testimoni">Testimoni</div>
                    </div>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Apa Kata Mereka yang sudah mengajar dan belajar di Maungaji</h5>
                    </div>
                </div>
            </div>
            <div class="owl-carousel owl-carousel2 owl-theme testimony-video-carousel" style="margin-top: -50px; margin-bottom: 100px;">
                <?php
                if ($video) {
                    foreach ($video['data'] as $video_data) {
                ?>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <video controls="" style="width:100%;border-radius: 20px;">
                                <source src="http://cms.maungaji.co.id/images/<?php echo $video_data['video']; ?>" width="320" height="240" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6 testimony-video-description">
                            <?php echo $video_data['description']; ?>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
            <?php
            if ($testimoni) {
                foreach ($testimoni['data'] as $testi_data) {
            ?>
                    <div>
                        <div class="card text-center pt-5 testimony-card">
                            <div class="profile-photo center-block mb-5" style="background: url(<?php echo $url . '/' . $testi_data['photo'] ?>"></div>
                            <div>
                                <h5><strong><?php echo $testi_data['fullname']; ?></strong></h5><br />
                                <div>
                                    <?php echo $testi_data['comment']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!--end testimoni-->

    <!--choosing class-->
    <div id="chosing-class" class="content-box-md" style="margin-top:-100px;">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <h3 style="font-size: 35px; font-family: 'Poppins'; font-weight: 1000;">Pilihan Mengaji</h3>
                    </div>
                    <div class="new-text">
                        <p style="font-size: 24px; line-height: normal;">Kamu bisa pilih lebih dari 1 materi dibawah ini</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card text-center position-relative mb-5 mb-lg-0">
                        <img src="<?php echo base_url('img/ilustrasi/iqro_Illust.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji">
                        <div class="class-name w-100 position-absolute" data-toggle="tooltip" title="Mulai belajar mengenali, membaca, dan melafalkan secara benar huruf-huruf Arab dengan mengikuti kelas IQRO’ di Maungaji">
                            IQRO'
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card text-center position-relative mb-5 mb-lg-0">
                        <img src="<?php echo base_url('img/ilustrasi/Tahsin_Illust.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji">
                        <div class="class-name w-100 position-absolute" data-toggle="tooltip" title="Baguskan dan perbaiki bacaan Qur’an mu dengan mengikuti kelas Tahsin atau yang biasa dikenal dengan ilmu tajwid di Maungaji">
                            TAHSIN
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="class-card text-center position-relative mb-5 mb-lg-0">
                        <img src="<?php echo base_url('img/ilustrasi/Tahfidz_Illust.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji">
                        <div class="class-name w-100 position-absolute" data-toggle="tooltip" title="Hafal lebih banyak surah dan ayat dengan mengikuti kelas Tahfidz. Insya Allah guru ngaji siap membimbing kamu menjadi Hafidz/Hafizah">
                            TAHFIDZ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end class-->

    <!--prices-->
    <div class="gtco-testimonials study-packages">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <div class="text-choose-package" style="margin-top: 100px;">Pilih Paket Mengaji mu</div>
                    </div>
                    <form action="" style="font-size: 20px;">
                        <label class="radio-inline">
                            <input type="radio" name="learningPackages" id="package_online" value="online"> <strong>Paket online</strong>
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="learningPackages" id="package_offline" value="offline"> <strong>Paket offline</strong>
                        </label>
                    </form>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Mengaji lebih seru dengan paket bulanan yang sesuai dengan kebutuhan mu</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
            <?php
            class StudyPackage
            {
                public $name;
                public $price;
                public $partner;
                public $class_type;
                public $max_student;
                public $study_duration;
                public $testimony;
            }

            $packages = $price['data'];

            if (isset($packages)) {

                foreach ($packages as $package) {
                    if ($package['package_name'] == 'family') {
                        $container_class = 'keluarga';
                    } elseif ($package['package_name'] == 'group') {
                        $container_class = 'kelompok';
                    } else {
                        $container_class = $package['package_name'];
                    }

                    if ($package['session_type'] == 'monthly') {
                        $session_type = 'Bulan';
                    } else {
                        $session_type = 'Pertemuan';
                    }


            ?>
                    <div class="card text-center package-card <?php echo $container_class; ?> <?php echo $package['class_type']; ?>">
                        <img class="card-img-top" src="<?php echo base_url('img/icon/new/keluarga.svg') ?>" alt="">
                        <div class="card-body">
                            <h3 class="package-name"><?php echo $package['package_name']; ?></h3>
                            <br />
                            <p class="package-price">
                                <?php
                                $num = $package['price'];
                                ?>
                                Rp <?php echo number_format($num, 0, ",", "."); ?>/<span><?php echo $session_type; ?></span>
                            </p>
                            <br />
                            <div class="col-sm-6 package-detail">
                                Tipe Kelas: <?php echo $package['class_type']; ?>
                            </div>
                            <div class="col-sm-6  package-detail">
                                Max. Santri: <?php echo $package['max_student']; ?> orang
                            </div>
                            <div class="col-sm-12  package-detail">
                                Durasi Belajar: <?php echo $package['learning_duration']; ?> Menit
                            </div>
                            <p class="package-description">
                                <?php echo $package['description']; ?>
                            </p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>



        </div>
    </div>
    <!--end price-->

    <div class="content-box-md santri-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row visible-xs">
                        <div class="col-xs-12 student-title">
                            <!-- <div class="text-count-student text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($count)) { ?>
                                    <?php echo $count['data'][0]['count'] ?>
                                <?php } ?>
                            </div>
                            <div class="text-student text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($count)) { ?>
                                    <?php echo $count['data'][0]['name'] ?>
                                <?php } ?>
                            </div> -->

                            <div class="text-count-student text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($report)) { ?>
                                    <?php echo $report['data'] ?>
                                <?php } ?>
                            </div>
                            <div class="text-student text-center pull-left" style="font-size:48px;">
                                PERTEMUAN
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="<?php echo base_url('img/guru-ngaji/santri.png') ?>" class="img-responsive" alt="Belajar Ngaji" height="auto">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row hidden-xs">
                        <div class="col-xs-12">
                            <div class="text-count-student text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($report)) { ?>
                                    <?php echo number_format($report['data'], 0, ",", "."); ?>
                                <?php } ?>
                            </div>
                            <div class="text-student text-center pull-left" style="font-size:48px;">
                                PERTEMUAN
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="text-left">
                                <p class="text-santri">
                                    Saat ini Maungaji telah memiliki santri-santri dari segala jenis usia, tempat tinggal dan latar belakang. Antusias belajar ngaji yang disebarkan oleh mereka membuat kami bersemangat untuk terus memberikan fasilitas terbaik bagi para pembelajar Qur’an.
                                </p>
                            </div>
                            <div class="text-center">
                                <p class="text-register-student text-center" style="color: #3597D4;">
                                    <a href="https://bit.ly/Maungajiapa" target="_blank">Daftar Jadi Santri Ngaji <i class="fa fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-box-md teacher-box" style="margin-top:-100px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-12 teacher-title">
                            <div class="text-count-teacher text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($count)) { ?>
                                    <?php echo $count['data'][1]['count'] ?>
                                <?php } ?>
                            </div>
                            <div class="text-teacher text-center pull-left" style="font-size:48px;">
                                <?php if (!empty($count)) { ?>
                                    <?php echo $count['data'][1]['name'] ?>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <div class="text-left">
                                <p class="text-guru">
                                    Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <span style="color: #3597D4">Terpercaya, Berpengalaman</span>, dan <span style="color: #3597D4">Terkualifikasi.</span> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.
                                </p>
                            </div>
                            <div class="text-center">
                                <p class="text-register-teacher text-center" style="color: #3597D4;">
                                    <a href="https://bit.ly/Maungajiapa" target="_blank">Daftar Jadi Guru Ngaji <i class="fa fa-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="<?php echo base_url('img/guru-ngaji/guru-ngaji.png') ?>" class="img-responsive" alt="Belajar Ngaji" height="auto">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 visible-xs">
                            <div class="text-left">
                                <p class="text-guru">
                                    Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <span style="color: #3597D4">Terpercaya, Berpengalaman</span>, dan <span style="color: #3597D4">Terkualifikasi.</span> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.
                                </p>
                            </div>
                            <div class="text-center">
                                <p class="text-register-teacher text-center" style="color: #3597D4;">
                                    <a href="https://play.google.com/store/apps/details?id=com.maungaji.guruapp" target="_blank">Daftar Jadi Guru Ngaji <i class="fa fa-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="prons-mau" class="content-mau text-left">
        <section>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-12 col-sm-12">
                        <p>
                        <h3 style="font-family: 'Poppins'; font-weight: 1000; font-size: 30px;">Kelebihan Maungaji</h3>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="<?php echo base_url('img/ilustrasi/Shield.png') ?>" style="left: 10%;" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                            Aman dan Nyaman
                        </p>
                        <p style="font-size:15px;">
                            Kenali dan Verifikasi Guru Ngaji mu dengan fitur scan barcode di aplikasi.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="<?php echo base_url('img/ilustrasi/Hands.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                            Berdasarkan Syari'ah
                        </p>
                        <p style="font-size:15px;">
                            Demi menjalani syariah, kami menyarankan para santri untuk memilih gender guru ngaji sesuai dengan gender santri pemesan, laki laki dengan laki laki,perempuan dengan perempuan.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="<?php echo base_url('/img/ilustrasi/Report.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                            Laporan Belajar
                        </p>
                        <p style="font-size:15px;">
                            Kamu dapat melihat perkembangan belajarmu melalui aplikasi
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-6 text-center square-kelebihan-maungaji" style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                        <p>
                            <img src="<?php echo base_url('img/ilustrasi/Certificate.png') ?>" class="img-responsive center-block" alt="Belajar Ngaji" height="auto">
                        </p>
                        <p style="color:#FFFFFF; font-size:25px; font-family:Poppins;">
                            Dapat sertifikat
                        </p>
                        <p style="font-size:15px;">
                            Pelajari apa yang anda inginkan dan dapatkan sertifikasi pada mata pelajaran tertentu.
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </section>
    </div>

    <!-- Faq -->
    <div id="faq" class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="about-item text-left">
                <div id="tech-statement" class="text-left">
                    <h3 style="font-size:50px; font-family: 'Poppins'; font-weight: 1000;">FAQ</h3>
                </div>
                <div style="color:#8A8787">
                    <h5 style="font-size: 20px;">Yang biasa di tanyakan oleh ayah, bunda, atau kaka yang ingin mengaji</h5>
                </div>
            </div>
        </div>

        <?php
        if ($faq) {
            foreach ($faq['data'] as $dataFaq) {
        ?>
                <div class="panel-group" id="faqAccordion">
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0" style="background: #3597D4">
                            <h4 class="panel-title">
                                <div style="color:#FFFFFF; font-family:Poppins;">
                                    <?php echo $dataFaq['question']; ?>
                                </div>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <p style="font-family:Poppins;">
                                <?php echo $dataFaq['answer']; ?>
                            </p>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <!--End Faq-->

    <!--article-->
    <div class="gtco-article">
        <div class="container">
            <div class="row">
                <div class="about-item text-left">
                    <div id="tech-statement">
                        <h3 style="font-size: 50px; font-family: 'Poppins'; font-weight: 1000;">Artikel</h3>
                    </div>
                    <div style="color:#8A8787">
                        <h5 style="font-size: 20px;">Baca informasi terbaru seputar Al-Quran dan islami disini</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel owl-carousel1 owl-theme" style="margin-top: -50px;">
            <?php
            if ($article) {
                foreach ($article as $art) {
            ?>
                    <div class="card text-center" style="background: #FFFFFF">
                        <img class="img-article img-responsive" src="<?php if (!empty($article)) { ?>
                                    <?php echo $art['jetpack_featured_media_url'] ?>
                                    <?php } ?>" alt="">
                        <div class="card-body" style="font-family:Poppins;">
                            <br />
                            <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;
                                    box-sizing: border-box;
                                    border-radius: 16px;
                                    font-weight: 600;
                                    ">
                                <?php if (!empty($article)) { ?>
                                    <?php echo $art['title']['rendered'] ?>
                                <?php } ?>
                            </p>
                            <br />
                        </div>

                        <div class="text-center">
                            <p>
                                <a href="<?php if (!empty($article)) { ?> <?php echo $art['link'] ?> <?php } ?>" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>
                            </p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!--end article-->

    <div id="tech-statement" class="text-center" style="margin-top: 50px;">
        <div class="vertical-heading">
            <div class="media">
                Telah Diliput dan Bekerja Sama Dengan
            </div>
        </div>
    </div>

    <section id="pers" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <div id="logo" class="text-center" style="margin-bottom: 50px; margin-top: 25px;">
                        <div class="vertical-heading">
                            <ul class="list-inline text-center">
                                <?php
                                $partners = $partner['data'];
                                foreach ($partners as $partner) {
                                ?>
                                    <li>
                                        <a href="<?php echo $partner['url'] ?>">
                                            <img src="<?php echo 'http://cms.maungaji.co.id/images/' . $partner['photo']; ?>" class="img-responsive img-media-tempo" width="200px" height="auto" alt="<?php echo $partner['description'] ?>">
                                        </a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>