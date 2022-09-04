$(function() {
  console.log('Mahesa M. Elba was here')

  // Fetching counts
  $.ajax({
    url: '/home/count',
    dataType: 'json',
    method: "GET",
  }).done(function(response){
    $('.text-count-teacher').text(response.data[1].count)
    $('.text-teacher').text(response.data[1].name)
  }).fail(function(error){
    console.log('Error fetching counts')
    console.log(error)
  })

  // Fetching reports
  $.ajax({
    url: '/home/report',
    dataType: 'json',
    method: "GET",
  }).done(function(response){
    $.each(response.data, function( index, value ) {
      $('.text-count-student').text(value.report)
    })
  }).fail(function(error){
    console.log('Error fetching reports')
    console.log(error)
  })

  // Fetching videos
  $.ajax({
    url: '/home/video',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response.data, function( index, value ) {
          $('.video-list').append('<div class="row">\
                                        <div class="col-md-6">\
                                          <video controls="" style="width:100%;border-radius: 20px;" muted playsinline preload="auto">\
                                            <source src="http://cms.maungaji.co.id/images/'+value.video+'" width="320" height="240"  type="video/mp4">\
                                          </video>\
                                        </div>\
                                        <div class="col-md-6 testimony-video-description">\
                                          '+value.description+'\
                                        </div>\
                                      </div>')
        })
      }

      function carouselLoad () {
        $(".video-list").owlCarousel({
          loop: true,
          items: 1,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: true,
          navText : ["<i class='fa fa-chevron-left' style='color: #3597d4;'></i>","<i class='fa fa-chevron-right' style='color: #3597d4;'></i>"]
        })
      }

      $.when(
        loopRes(),
        carouselLoad()
      ).then(function () {
         $('.video-list-loading').remove()
      });
      
    },
    error: function () {
      console.log('Error fetching videos')
      console.log(error)
    }
  })

  // Fetching testimonies
  $.ajax({
    url: '/home/testimony',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response.data, function( index, value ) {
          $('.testimony-list').append('<div>\
                                        <div class="card text-center pt-5 testimony-card">\
                                          <div class="profile-photo center-block mb-5" style="background: url(https://cms.maungaji.co.id/images/'+value.photo+'"></div>\
                                          <div>\
                                            <h5><strong>'+value.fullname+'</strong></h5><br />\
                                            <div>\
                                                '+value.comment+'\
                                            </div>\
                                          </div>\
                                        </div>\
                                      </div>')
        })
      }

      function carouselLoad () {
        $(".testimony-list").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        })
      }

      $.when(
        loopRes(),
        carouselLoad()
      ).then(function () {
         $('.testimony-list-loading').remove()
      });
      
    },
    error: function () {
      console.log('Error fetching testimonies')
      console.log(error)
    }
  })

  // Fetching packages
  $.ajax({
    url: '/home/package',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response.data, function( index, value ) {
          var containerClass = ''
          var sessionType = ''

          if (value.package_name == 'family') {
            containerClass = 'keluarga'
          } else if (value.package_name == 'group') {
            containerClass = 'kelompok'
          } else {
            containerClass = value.package_name
          }

          if (value.session_type == 'monthly') {
            sessionType = 'Bulan';
          } else {
            sessionType = 'Pertemuan';
          }

          $('.package-list').append('<div class="card text-center package-card '+containerClass+' '+value.class_type+'">\
                                      <img class="card-img-top" src="/img/icon/new/keluarga.svg" alt="">\
                                      <div class="card-body">\
                                          <h3 class="package-name">'+value.package_name+'</h3>\
                                          <br />\
                                          <p class="package-price">\
                                            Rp '+value.price+'/<span>'+sessionType+'</span>\
                                          </p>\
                                          <br />\
                                          <div class="col-sm-6 package-detail">\
                                              Tipe Kelas: '+value.class_type+'\
                                          </div>\
                                          <div class="col-sm-6  package-detail">\
                                              Max. Santri: '+value.max_student+' orang\
                                          </div>\
                                          <div class="col-sm-12  package-detail">\
                                              Durasi Belajar: '+value.learning_duration+' Menit\
                                          </div>\
                                          <div class="pb-5">\
                                              '+value.description+'\
                                              <a href="'+value.url_woocommerce+'"><button class="btn btn-warning" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Pilih</button></a>\
                                          </div>\
                                      </div>\
                                    </div>')
        })
      }

      function carouselLoad () {
        $(".package-list").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        })
      }

      $.when(
        loopRes(),
        carouselLoad()
      ).then(function () {
         $('.package-list-loading').remove()
      });
      
    },
    error: function () {
      console.log('Error fetching packages')
      console.log(error)
    }
  })

  // Fetching FAQs
  $.ajax({
    url: '/home/faq',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response.data, function( index, value ) {
          $('.faq-list').append('<div class="panel-group" id="faqAccordion">\
                                  <div class="panel panel-default ">\
                                      <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0" style="background: #3597D4">\
                                          <h4 class="panel-title">\
                                              <div style="color:#FFFFFF; font-family:Poppins;">\
                                                  '+value.question+'\
                                              </div>\
                                          </h4>\
                                      </div>\
                                      <div class="panel-body">\
                                          <p style="font-family:Poppins;">\
                                              '+value.answer+'\
                                          </p>\
                                      </div>\
                                  </div>\
                              </div>')
        })
      }

      $.when(
        loopRes()
      ).then(function () {
         $('.faq-list-loading').remove()
      })
    },
    error: function () {
      console.log('Error fetching FAQs')
      console.log(error)
    }
  })

  // Fetching articles
  $.ajax({
    url: '/home/article',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response, function( index, value ) {
          $('.article-list').append('<div class="card text-center" style="background: #FFFFFF">\
                                      <img class="img-article img-responsive" src="'+value.jetpack_featured_media_url+'" alt="">\
                                      <div class="card-body" style="font-family:Poppins;">\
                                          <br />\
                                          <p class="card-text" style="color:#263238; font-family:Poppins; margin-top:10px;background-color: #FFFFFF;border: 1px solid #FFFFFF;box-sizing: border-box;border-radius: 16px;font-weight: 600;">\
                                              '+value.title.rendered+'\
                                          </p>\
                                          <br />\
                                      </div>\
                                      <div class="text-center">\
                                          <p>\
                                              <a href="'+value.link+'" class="btn btn-warning btn-lg" role="button" target="_blank" style="background-color: #FFD93B; text-transform:capitalize; border-radius: 20px; width: 250px; color: #263238; font-weight: 800;">Read More</a>\
                                          </p>\
                                      </div>\
                                  </div>')
        })
      }

      function carouselLoad () {
        $(".article-list").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        })
      }

      $.when(
        loopRes(),
        carouselLoad()
      ).then(function () {
         $('.article-list-loading').remove()
      });
      
    },
    error: function () {
      console.log('Error fetching articles')
      console.log(error)
    }
  })

  // Fetching partners
  $.ajax({
    url: '/home/partner',
    dataType: 'json',
    method: "GET",
    success: function (response) {
      function loopRes () {
        $.each(response.data, function( index, value ) {
          $('.partner-list').append('<li>\
                                      <a href="'+value.url+'">\
                                        <img src="http://cms.maungaji.co.id/images/'+value.photo+'" class="img-responsive img-media-tempo" width="200px" height="auto" alt="'+value.description+'">\
                                      </a>\
                                    </li>')
        })
      }

      $.when(
        loopRes()
      ).then(function () {
         $('.partner-list-loading').remove()
      });
      
    },
    error: function () {
      console.log('Error fetching partners')
      console.log(error)
    }
  })

  $('[data-toggle="tooltip"]').tooltip();

  $('#package_online').on('change', function() {
    if ($(this).is(':checked')) {
      $('.package-card.online').parent().removeClass('hidden')
      $('.package-card.offline').parent().addClass('hidden')
    }
  })
  
  $('#package_offline').on('change', function() {
    if ($(this).is(':checked')) {
      $('.package-card.online').parent().addClass('hidden')
      $('.package-card.offline').parent().removeClass('hidden')
    }
  })
});