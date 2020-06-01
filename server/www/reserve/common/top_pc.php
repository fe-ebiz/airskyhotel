<!DOCTYPE html>
<!--[if IE 8]><html lang="ko-KR" class="no-js ie8 lt-ie10"><![endif]-->
<!--[if IE 9]><html lang="ko-KR" class="no-js ie9 lt-ie10"><![endif]-->
<!--[if !IE]><!-->
<html lang="ko-KR">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>에어스카이호텔</title>
    <meta name="title" content="에어스카이호텔">
    <meta name="description" content="">
    <meta name="keywords" content="에어스카이호텔">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="에어스카이호텔">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?=base_img?>/svc/img/sample/sns_thumb.jpg">

    <!--폰트-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,500,700&display=swap" rel="stylesheet">

    <!--공통 Css-->
    <link rel=stylesheet href="<?=base_static?>/goco/css/reset.css">
    <link rel=stylesheet href="<?=base_static?>/goco/css/common.css">
    <link rel=stylesheet href="<?=total_css?>/swiper.min.css">
    <!--개별 Css-->
    <link rel=stylesheet href="<?=base_static?>/goco/css/reservation/init.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/detectizr/1.5.0/detectizr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        Modernizr.Detectizr.detect();

		var base_url = "hotelairsky.co.kr";
		var base_url2 = "hotelairsky.co.kr";
    </script>

    <!--공통 Js-->
    <script src="<?=base_static?>/goco/js/common.js"></script>
    <script src="<?=total_js?>/swiper.min.js"></script>
    <!--개별 Js-->
	<?php
		if($cus == "reserve") {
	?>
    <script src="<?=base_static?>/goco/js/reservation/init.js"></script>
	<script src="<?=total_js?>/jwSlide_ver2.js"></script>
	<script src="<?=total_js?>/picker_pc.js"></script>
	<script src="<?=total_js?>/reserve_pc.js"></script>
	<?php
		}
	?>
    <link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/css/reserve.footer.css">
    <!--[if lt IE 9]>
        <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<script>
	function button_count(pno, bt_type) {
		$.ajax({
			url : "../reservation/state.php",
			type: "post",
			data: "mode=bt_count&pno="+pno+"&bt_type="+bt_type,
			success: function(e) {
			
			}
		}); 
	}
	</script>

	<?php if(USER_FLAG == "M") { ?>
		<link rel="stylesheet" href="<?=total_css?>/moblie_reset.css" type="text/css">
		<link rel="stylesheet" href="<?=total_css?>/mobile_layout3.css" type="text/css">
		<link rel="stylesheet" href="//static.go.co.kr/css/totalmobile.css" type="text/css">
	<?php } else { ?>
		<link rel="stylesheet" type="text/css" href="<?=total_css?>/reset.css">
		<link rel="stylesheet" type="text/css" href="<?=total_css?>/layout2.css">
		<link rel="stylesheet" href="//static.go.co.kr/css/totalweb.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="http://static.ocean2you.co.kr/css/layout_init.css?ver=20170904133210">
	<?php } ?>

    <script type="text/javascript" src="<?=total_js?>/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?=total_js?>/jquery.number.min.js"></script>

</head>

<body class="page-reservation">

    <div class="wrapper">
        <header class="header">
            <div class="gnb">
                <div class="group inner">
                    <h1 class="logo">
						<a href="<?=base_url;?>">
							<img src="<?=base_img?>/goco/common/logo_rsv.jpg" alt="<?=site_title?>" style="display:none;">
							<em style="line-height:60px;"><?=site_title?></em>
						</a>
					</h1>
                    <nav class="g-nav">
                        <ul class="menu cf">
                            <li class="c-blue">
								<a href="/reserve"><img src="<?=base_img?>/goco/common/icon/rsv.png" alt="예약"> <span>예약하기</span></a>
							</li>
                            <li class="c-blue">
								<a href="/history/?dd=<?=$go_util->XOREncode("buylist")?>">
									<img src="<?=base_img?>/goco/common/icon/search.png" alt="검색"> <span>예약확인</span>
								</a>
							</li>
                            <li class="c-blue">
								<?php
									if($login_mode == false) {
								?>
								<a href="/member"><span>로그인</span></a>
								<?php
									}
								?>
							</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="call-bar">
                <div class="group inner">
                    <img src="<?=base_img?>/goco/common/icon/call.png" alt="전화">
                    <span class="tt">예약문의</span>
                    <span class="t"><?=GOCO_tel?></span>
                </div>
            </div>
        </header>
        <!-- /.header -->

        <div class="contents reservation">
        </div>
        <!--//.contents-->