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
                        <p><h3 class="text-header">Belajar Mengaji</h3></p>
                        <p><h3 class="text-header">Makin Mudah</h3></p>
                        <br>
                        <p>
                        <h4 style="color: #FFF; line-height: normal;">dengan Guru Ngaji Terbaik se-Indonesia <span style="color: #FFE604">Tatap Muka Langsung</span> ataupun <span style="color: #FFE604">Kelas Online.</span> Mudah, Murah dan Sesuai Syariah.
                        </h4>
                        </p>
                        <br>
                        <div class="btn-download-header">
                            <div class="button-download">
                                <!-- <a href="https://apps.apple.com/id/app/maungaji/id1497420237" target="_blank">
                                    <img src="https://maungaji.co.id/img/logo/appstore.svg">
                                </a> -->
                                <a href="https://play.google.com/store/apps/details?id=com.maungaji" target="_blank" style="margin-left: 15px;">
                                    <img src="https://maungaji.co.id/img/logo/playstore.svg">
                                </a>
                            </div>
                        </div> 
                        <br>  
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="../img/ilustrasi/Hero_Illust.svg" class="img-responsive" alt="Belajar Ngaji" style="height: 450px; width: 100%;">  
                    </div>
                    <br>
                    <br>
                    <div id="socmed" class="col-md-2 col-sm-2" style="padding-left:100px;">
                        <ul>
                            <li><a href="https://api.whatsapp.com/send?text=Assalamua'alaikum&phone=6281213419253" target="_blank"><img src="../img/icon/new/wa_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.instagram.com/maungaji/" target="_blank"><img src="../img/icon/new/ig_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.facebook.com/maungaji/" target="_blank"><img src="../img/icon/new/fb_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://twitter.com/MaungajiIndo" target="_blank"><img src="../img/icon/new/tw_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
                            <br>
                            <li><a href="https://www.linkedin.com/company/maungaji-indonesia/?originalSubdomain=id" target="_blank"><img src="../img/icon/new/ln_icon.png" class="img-responsive" style="height: 48px; width: 48px;"></a></li>
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
    <div class="container">
        <div class="row">
                <div style="font-family: 'Poppins';font-weight: 1000;margin-top: 150px;">
                    <h3 style="color: #3597D4;font-family: 'Poppins';font-weight: bold;line-height: 50px;text-align: center;font-size: 28px;">Daftar Maungaji Army</h3>
                </div>
                <div class="new-text">
                    <p style="font-size: 20px;line-height: normal;text-align: center; font-family: 'Poppins';">Maungaji Army adalah tim sales yang bertugas menjual produk, barang, atau jasa dari Maungaji Indonesia kepada pengguna jasa serta menjalin komunikasi dari satu prospek ke satu prospek lainnya.</p>
                </div>
                </br>
                <div class="col-md-12">
                <?php
                    if($army['data']){
                        foreach ($army['data'] as $key => $list) {
                          ?>
                          <?php
                          ?>
                          <div class="col-sm-6 col-md-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <div class="thumbnail" style="border-color: #3597d4;border-radius: 32px; border: 2px solid #3597d4;">
                                  <?php if($list['photo']): ?>
                                  <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
                                    <img src="<?php echo $url .'/'.$list['photo'] ?>" style="width:250px;height:250px;" class="img-circle">
                                </a>
                                  <?php endif; ?> 
                                  <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: center;">
                                    <br>
                                    <div class="form-group" style="font-family:Poppins;">
                                        <h4 class="text-center"><strong><?php echo $list['fullname']; ?></strong></h4>
                                        </br>
                                        <div class="col-md-12"><h5 class="text-center"><strong>No. ID : <?php echo $list['agent_code']; ?></strong></h5>
                                        </div>
                                        </br>
                                        </br>
                                        <div class="col-md-12">
                                        <h5 class="text-center"><i class="fa fa-envelope" style="font-size:20px;"> <?php echo $list['email']; ?></i></h5>
                                        </br>
                                        </div>
                                        <a href="#aboutModal" data-toggle="modal" data-target="#myModal<?php echo $list['id']; ?>" class="btn btn-primary" role="button" style="padding: 15px 30px; background-color: #3597D4; color: #fff; letter-spacing:2px; text-transform: uppercase; font-size: 15px; opacity: 20.7; border-radius: 2rem;">Lihat Detail</a></p>
                                    </div>
                                    <!-- modal -->
                                    <div class="modal fade" id="myModal<?php echo $list['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: #3597D4;">
                                                    <div class="col-md-6">
                                                        <h4 class="modal-title">
                                                        <?php if($list['photo']): ?>
                                                        <img src="<?php echo $url .'/'.$list['photo'] ?>" style="border-radius: 15%;width: 250px;height: 250px;"></a>
                                                        <?php endif; ?>
                                                        </h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 style="font-family: Poppins; font-style: normal;font-weight: 600;font-size: 47px;line-height: 72px;color: #FFFFFF;" class="modal-title" id="myModalLabel">
                                                        <?php echo $list['fullname']; ?>
                                                        </h4>
                                                    </div>
                                                </div>
                                                 <div class="col-md-12">
                                                    <div class="modal-body">
                                                        <div class="col-md-6" style="margin-top: 20px">
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-weight: bold;font-size: 15px;line-height: 26px;color: #263238;">
                                                                Data Agen 
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                                               No. ID : <b><?php echo $list['agent_code']; ?></b>
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                                                Kode Referral : <b><?php echo $list['referal_code']; ?></b>
                                                            </p>
                                                            <p style="text-align:justify;font-family: Poppins;font-style: normal;font-weight: normal;font-size: 12px;line-height: 22px;">
                                                                <span style="color: #FF5151">*</span> Dengan menggunakan kode referral dari, saya anda akan mendapatkan diskon 10% untuk semua paket belajar di Maungaji.
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;color: #3B97D3;">
                                                               <!--  > -->
                                                               <a href="https://play.google.com/store/apps/details?id=com.maungaji&hl=in&gl=US" target="_blank">yuk pakai kode referal di aplikasi maungaji -></a>
                                                            </p>
                                                        </div>

                                                        <div class="col-md-6" style="margin-top: 20px;">
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-weight: bold;font-size: 15px;line-height: 26px;color: #263238;">
                                                                Kontak Agen
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                                               No. Telepon : <b><?php echo $list['phone_number']; ?></b>
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                                                Email : <b><?php echo $list['email']; ?></b>
                                                            </p>
                                                            <p style="text-align:left;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                                                Alamat Agen : <b><?php echo $list['address']; ?></b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" style="background: #FF4D35; color: white;" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
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
    </div>
