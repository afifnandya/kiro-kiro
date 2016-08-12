<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/jquery.rateyo.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/slick-theme.css">
</head>
<body>
    <?php $this->load->view('navbar') ?>
    <!--breadcumb-->
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Tas Wanita</a></li>
          <li class="active">Tas 1</li>
        </ol>
    </div>
    <!--end breadcumb-->
    <!--konten-->
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-lg-4">
            <div class="detail-gambar-produk">
                <div class="slider-gambar-main">
                    <img src="assets/img/tas1.jpg" class="img-repsonsive zoom" data-zoom-image="assets/img/tas1.jpg" height="200">
                    <img src="assets/img/tas1_2.jpg" class="img-repsonsive zoom" data-zoom-image="assets/img/tas1_2.jpg" height="200">
                    <img src="assets/img/tas1_3.jpg" class="img-repsonsive zoom" data-zoom-image="assets/img/tas1_3.jpg" height="200">
                    <img src="assets/img/tas1_4.jpg" class="img-repsonsive zomm" data-zoom-image="assets/img/tas1_4.jpg" height="200">
                </div>
                <div class="slider-gambar-nav">
                    <img src="assets/img/tas1.jpg" class="img-repsonsive">
                    <img src="assets/img/tas1_2.jpg" class="img-repsonsive">
                    <img src="assets/img/tas1_3.jpg" class="img-repsonsive">
                    <img src="assets/img/tas1_4.jpg" class="img-repsonsive">
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-xs-12 col-sm-8 col-lg-7 detail-produk">
            <form action="">
                <h3 class="detail-produk-nama">Fostelo Women's Handbag</h3>
                <div class="detail-produk-harga">
                    <span class="heading">Harga : </span><span class="harga">Rp.500.000</span>
                </div>
                <div class="detail-produk-ukuran">
                    <span class="heading">Ukuran : </span>
                        <a href="" class="ukuran">S</a>
                        <a href="" class="ukuran">M</a>
                        <a href="" class="ukuran">L</a>
                        <a href="" class="ukuran">XL</a>
                </div>
                <div class="detail-produk-beli">
                    <span class="heading">Jumlah : </span>
                    <input type="number" placeholder="1" min="1">
                    <button class="beli" type="submit">Tambah Ke Keranjang<i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    <a href="" class="heart">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-heart fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                </div>
            </form>
            <div class="detail-produk-stock">
                <p>Ready Stock</p>
            </div>
            <div class="detail-produk-deskripsi">
                <p class="deskripsi-heading">Deskripsi Produk</p>
                <p class="deskripsi-p">
                    Tas Kulit dengan model kekinian yang cocok menemani kegiatan anda
                </p>
                <ul class="deskripsi-ul">
                    <li>tas kulit sapi handmade</li>
                    <li>material kulit sapi embos croco</li>
                    <li>menggunakan penutup zipper</li>
                    <li>ukuran tas panjang 23cm, tinggi 27 cm, lebar 19cm</li>
                </ul>
            </div>
            <div class="detail-produk-tag">
                <p class="deskripsi-heading">Tag Produk</p>
                <form action="">
                    <a>Tas</a>
                    <a>Kulit</a>
                    <a>Coklat</a>
                    <a>Batik</a>
                    <a>Wanita</a>
                </form>
            </div>
            <div class="detail-produk-share hidden-xs">
                <span class="heading">Bagikan : </span>
                <a href="" class="fa-stack fa-lg medsos fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </a>
                <a href="" class="fa-stack fa-lg medsos gg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </a>
                <a href="" class="fa-stack fa-lg medsos tw">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </a>
            </div>
            <div class="detail-produk-share-mobile visible-xs-block">
                <span class="deskripsi-heading">Bagikan : </span>
                <a href="" class="fa-stack fa-lg medsos fb">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </a>
                <a href="" class="fa-stack fa-lg medsos gg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
                </a>
                <a href="" class="fa-stack fa-lg medsos tw">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-12 separator"></div>
        <p class="col-xs-12 produk-grup no-padding">Produk Lainya</p>
        <div class="col-xs-12 produk-lain no-padding">
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 produk-wrap">
                <span class="produk-img">
                    <img src="assets/img/tas1.jpg" class="img-responsive">
                    <div class="img-overlay"></div>
                    <div class="img-overlay2">
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Suka"><i class="fa fa-heart-o"></i></a>
                        <a href="#" class="overlay-item" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-search"></i></a>
                    </div>
                    <span class="img-badge">NEW</span>
                <a href="#" class="hidden-md hidden-lg img-overlay-mobile"></a>
                </span>
                <div class="home-produk">
                    <p class="home-produk-nama no-padding">Fostelo Women's Handbag</p>
                    <p class="home-produk-harga no-padding color">Rp. 100.000</p>
                </div>
            </div>
        </div>
    </div>
    <!--end konten-->
    <!--------notif-------->
    <div class="notif notif-cart">
        <div class="notif-image">
            <img src="assets/img/tas1.jpg" height="50" width="50">
            <i class="fa fa-cart-plus"></i>
        </div>
        <div class="notif-body">
            <span class="title">Fostelo Women's Handbag</span><br>
            <span class="sub-title">Ukuran : XL</span><br>
            <span class="status">Ditambah ke Keranjang</span>
        </div>
    </div>
    <div class="notif notif-heart">
        <div class="notif-image">
            <img src="assets/img/tas1.jpg" height="50" width="50">
            <i class="fa fa-heart"></i>
        </div>
        <div class="notif-body">
            <span class="title">Fostelo Women's Handbag</span><br>
            <span class="status">Ditambah ke Whistlist</span>
        </div>
    </div>
    <!--------end notif-------->
    <footer class="visible-xs-block">
        <div class="footer">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 push-down"></div>
                   <div class="col-xs-3"></div>
                    <div class="col-xs-6">
                        <img src="assets/img/logo-big.png" class="img-responsive">
                    </div>
                    <div class="col-xs-3"></div>
                    <div class="col-xs-6">
                        <h3>Pria</h3>
                        <ul>
                            <li><a href="#">Tas</a></li>
                            <li><a href="#">Pakaian</a></li>
                            <li> <a href="#">Baju</a> </li>
                            <li><a href="#">Aseksoris</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3>Wanita</h3>
                        <ul>
                            <li><a href="#">Tas</a></li>
                            <li><a href="#">Pakaian</a></li>
                            <li> <a href="#">Baju</a> </li>
                            <li><a href="#">Aseksoris</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3>Bantuan</h3>
                        <ul>
                            <li> <a href="#">Cara Pembelian</a> </li>
                            <li> <a href="#">Konfirmasi Pembelian</a> </li>
                            <li> <a href="#">Kritik Saran</a> </li>
                            <li> <a href="#">Hubungi Kami</a> </li>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3>Bantuan</h3>
                        <ul>
                            <li> <a href="#">Cara Pembelian</a> </li>
                            <li> <a href="#">Konfirmasi Pembelian</a> </li>
                            <li> <a href="#">Kritik Saran</a> </li>
                            <li> <a href="#">Hubungi Kami</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="hidden-xs">
        <div class="footer">
            <div class="container">
                <div class="row">
                   <div class="col-sm-12 push-down"></div>
                   <div class="col-sm-3">
                        <img src="assets/img/logo-big.png" class="img-responsive">
                   </div>
                   <div class="col-sm-9">
                    <div class="col-sm-3">
                        <h3>Pria</h3>
                        <ul>
                            <li><a href="#">Tas</a></li>
                            <li><a href="#">Pakaian</a></li>
                            <li> <a href="#">Baju</a> </li>
                            <li><a href="#">Aseksoris</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Wanita</h3>
                        <ul>
                            <li><a href="#">Tas</a></li>
                            <li><a href="#">Pakaian</a></li>
                            <li> <a href="#">Baju</a> </li>
                            <li><a href="#">Aseksoris</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Bantuan</h3>
                        <ul>
                            <li> <a href="#">Cara Pembelian</a> </li>
                            <li> <a href="#">Konfirmasi Pembelian</a> </li>
                            <li> <a href="#">Kritik Saran</a> </li>
                            <li> <a href="#">Hubungi Kami</a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h3>Akun</h3>
                        <ul>
                            <li> <a href="#">Whislist</a> </li>
                            <li> <a href="#">Keranjang Belanja</a> </li>
                            <li> <a href="#">Infromasi Akun</a> </li>
                        </ul>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script>
    $('document').ready(function(){
        var notif_cart = $('.notif-cart');
        var notif_heart = $('.notif-heart');
        var shop_count = $('.shop-count');
        var heart_count = $('.heart-count');
        $('.beli').click(function(e){
            notif_cart.css('display','block');
            e.preventDefault();
            notif_cart.velocity({
                properties : { right : 5,opacity : 1},
                options : { duration : 300}
            }).delay(5000).velocity({
                properties : { right : 0,opacity : 0},
                options : {
                    duration : 400,
                    complete :function(){
                        notif_cart.css('display','none');
                    }
                }
            });
            shop_count.velocity({
                properties : { scale : 0 , opacity : 0},
                options : { duration : 400 }
            });
            shop_count.velocity({
                properties : { scale : 1 , opacity : 1},
                options : {
                    duration : 400,
                    begin : function(){
                        var shop_count_val = parseInt(shop_count.text());
                        shop_count.text(shop_count_val+1);
                    }
                }
            });
        });
        $('.heart').click(function(e){
            notif_heart.css('display','block');
            e.preventDefault();
            notif_heart.velocity({
                properties : { right : 5,opacity : 1},
                options : { duration : 300}
            }).delay(5000).velocity({
                properties : { right : 0,opacity : 0},
                options : {
                    duration : 400,
                    complete : function(){
                        notif_heart.css('display','none');
                    }
                }
            });
            heart_count.velocity({
                properties : { scale : 0 , opacity : 0},
                options : {duration : 400}
            });
            heart_count.velocity({
                properties : { scale : 1 , opacity : 1},
                options : {
                    duration : 400,
                    begin : function(){
                        var heart_count_val = parseInt(heart_count.text());
                        heart_count.text(heart_count_val+1);
                    }
                }
            });
        });
    });
    </script>
    <script type="text/javascript">
        $('.produk-lain').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
        })
    </script>
    <script type="text/javascript">
     $('.slider-gambar-main').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-gambar-nav',
      adaptiveHeight: true
    });
    $('.slider-gambar-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-gambar-main',
      dots: true,
      focusOnSelect: true
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".medsos").hover(
                function(){
                    $(this).velocity({
                       properties : { translateY : -3},
                       options : { duration : 200 }
                    });
                },
                function(){
                    $(this).velocity({
                       properties : { translateY : 0},
                       options : { duration : 200 }
                    });
                }
            )
        });
    </script>
</body>
</html>
