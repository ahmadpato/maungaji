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
                                <div class="thumbnail pt-5" style="border-color: #3597d4;border-radius: 32px; border: 2px solid #3597d4;">
                                  <?php if($list['photo']): ?>
                                  <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
                                    <div
                                    class="profile-photo center-block"
                                    style="background: url(<?php echo $url .'/'.$list['photo'] ?>"
                                    ></div>
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
                                        <h5 class="text-center"><i class="fa fa-envelope" style="font-size:20px;"></i> <?php echo $list['email']; ?></h5>
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
                                                            <div
                                                            class="profile-photo"
                                                            style="background: url(<?php echo $url .'/'.$list['photo'] ?>"
                                                            ></div>
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
