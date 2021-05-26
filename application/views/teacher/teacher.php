  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div style="font-family: 'Poppins';font-weight: 1000;margin-top: 150px;">
        <h3 style="color: #3597D4;font-family: 'Poppins';font-weight: bold;line-height: 50px;text-align: center;font-size: 28px;">Mitra Guru Maungaji</h3>
      </div>
      <div class="new-text">
          <p style="font-size: 20px;line-height: normal;text-align: center; font-family: 'Poppins';">Insya Allah mitra guru ngaji di Maungaji memiliki 3 poin kompetensi yakni <b>Terpercaya, Berpengalaman, dan Terkualifikasi.</b> Maungaji juga membuka kesempatan bagi Guru Ngaji untuk bergabung bersama kami sebagai mitra maungaji.</p>
      </div>
      </br>
      <br> 
      <div class="col-md-12">
      <?php
      
      if($teacher['data']){
          foreach ($teacher['data'] as $key => $list) {
            if($list['teacher']['avatar'] != null){
            ?>
            <?php
            ?>
                <div class="col-sm-6 col-md-4">
                  <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                      <div class="thumbnail pt-5" style="border-color: #3597d4;border-radius: 32px; border: 2px solid #3597d4;">
                        <?php if($list['teacher']['avatar']): ?>
                          <a href="#aboutModal" data-toggle="modal" data-target="#myModal">
                            <div
                                class="profile-photo center-block"
                                style="background: url(<?php echo $url .'/'.$list['teacher']['avatar'] ?>"
                                ></div>
                          </a>
                        <?php endif; ?>
                        <div style="text-align: center;display: flex;flex-wrap: wrap;justify-content: center;">
                          <br>
                          <div class="form-group" style="font-family:Poppins;">
                              <h4 class="text-center" style="font-size: 12px;"><strong><?php echo $list['teacher']['name']; ?></strong></h4>
                              <?php if($list['teacher']['status_online'] == 1): ?>
                                 <span class="label label-success">Online</span>
                              <?php else: ?>
                                 <span class="label label-warning">Offline</span>
                              <?php endif; ?>
                              </br>
                              <div class="col-md-12">
                              <h4 class="text-center" style="font-size: 15px;"><i class="fa fa-envelope"></i> <?php echo $list['teacher']['email']; ?></h4>
                              </br>
                              </div>
                              <a href="#aboutModal" data-toggle="modal" data-target="#myModal<?php echo $list['teacher']['id']; ?>" class="btn btn-primary" role="button" style="padding: 15px 30px; background-color: #3597D4; color: #fff; letter-spacing:2px; text-transform: uppercase; font-size: 15px; opacity: 20.7; border-radius: 2rem;">Lihat Detail</a></p>
                          </div>
                          <!-- modal -->
                          <div class="modal fade" id="myModal<?php echo $list['teacher']['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header" style="background: #3597D4;">
                                    <div class="col-md-6">
                                        <h4 class="modal-title">
                                        <?php if($list['teacher']['avatar']): ?>
                                            <div
                                            class="profile-photo"
                                            style="background: url(<?php echo $url .'/'.$list['teacher']['avatar'] ?>"
                                            ></div>
                                        <?php endif; ?>
                                        </h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 style="font-family: Poppins; font-style: normal;font-weight: 600;font-size: 20px;line-height: 72px;color: #FFFFFF;text-align: center;" class="modal-title" id="myModalLabel">
                                        <?php echo $list['teacher']['name']; ?>
                                        </h4>
                                    </div>
                                  </div>
                                  <div class="modal-body">
                                  <div class="col-md-12" style="margin-top: 20px">
                                      <p style="text-align:center;font-family: Poppins;font-style: normal;font-size: 15px;line-height: 26px;color: #263238;">
                                         Deskripsi : <b><?php echo $list['teacher']['description']; ?></b>
                                      </p>
                                      <p style="text-align:center;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 14px;line-height: 21px;color: #3B97D3;">
                                         <!--  > -->
                                         <a href="https://play.google.com/store/apps/details?id=com.maungaji&hl=in&gl=US" target="_blank">yuk belajar dengan ustadz/ah  <?php echo $list['teacher']['name']; ?> di aplikasi maungaji -></a>
                                      </p>
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
        }  
      ?>  
      </div>   
    </div>
  </div>
  <br>
  <br>
