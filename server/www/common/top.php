<?php
	include("/home/ebizdev/hotelairsky.co.kr/config/config.php");
	include(INC_DIR."/class/go_basic.class.php");
	define("group_tel", "010-3066-4665");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>에어스카이호텔</title>
    <meta name="title" content="에어스카이호텔">
    <meta name="description" content="인천 중구 영종도, 인천국제공항 인근 호텔, 인천차이나타운, 을왕리해수욕장, 월미도, 송도센트럴파크, 인천가볼만한곳">
    <meta name="keywords" content="에어스카이호텔">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="naver-site-verification" content="ce542237c4c5c9e80418daa1900e8af5c25418a7" /> 
    <meta property="og:type" content="website">
    <meta property="og:title" content="에어스카이호텔">
    <meta property="og:description" content="인천 중구 영종도, 인천국제공항 인근 호텔, 인천차이나타운, 을왕리해수욕장, 월미도, 송도센트럴파크, 인천가볼만한곳">
    <meta property="og:image" content="<?=base_img?>/svc/img/sample/sns_thumb.jpg">

    <!-- <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/common/font/nanumgothic/nanumgothic.css" /> -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/common/javascript/lib/datepicker/css/theme01.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/lib/slick-master/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/lib/slick-master/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/icomoon/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/svc/lib/mng/assets/hotelstory/amenitys/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/common/css/init.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_static?>/svc/css/style.min.css" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?=base_img?>/svc/img/symbol/favicon.ico" /> -->

    <!-- http://hotelairsky.co.kr/ -->
    <script type="text/javascript" src="<?=base_static?>/svc/common/javascript/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?=base_static?>/svc/common/javascript/lib/jquery/jquery-ui-1.12.1.min.js"></script>
    <script type="text/javascript" src="<?=base_static?>/svc/js/common.js"></script>

    <link rel="stylesheet" href="<?=base_static?>/svc/css/totalweb.css">
    <script src="<?=base_static?>/svc/js/totalweb.js"></script>

    <!--[if lt IE 9]>
		<script type="text/javascript" src="<?=base_static?>/svc/common/javascript/lib/support/flexibility.min.js"></script>

		<script type="text/javascript" src="<?=base_static?>/svc/common/javascript/lib/support/html5shiv.js"></script>
		<script type="text/javascript" src="<?=base_static?>/svc/common/javascript/lib/support/respond.min.js"></script>
    <![endif]-->
</head>

<?php
	$b_class = "";
	$h_class = "";
	if($cus == "home") {
		$b_class = "class=\"page-home\"";
	}
	if($cus == "rooms") {
		$b_class = "class=\"page-rooms\"";
	}

	if($cus == "park") {
		$b_class = "class=\"page-landing\"";
	}

	if($cus == "home") $h_class = "vid";
?>

<body <?=$b_class;?>>

<header class="header <?=$h_class;?>">
	<div class="ajax_loader b_hide">
		<div>
			<img src="<?=base_img?>/svc/img/loader/loading.gif" />
			<p>처리 요청 중입니다.</p>
		</div>
	</div>

	<div class="image_view_container">
		<div class="view">
			<i class="icon-10 img-remove"></i>
		</div>
	</div>

	<div class="gnb">
            <div class="group-f">
                <!-- 190910 logo 추가 수정 -->
                <a href="/" class="logo-box com">
                    <h1>
                        <img src="<?=base_img?>/svc/img/symbol/top_logo.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="<?=base_img?>/svc/img/symbol/m_top_logo.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>
                <a href="/" class="logo-box vid">
                    <h1>
                        <img src="<?=base_img?>/svc/img/symbol/top_logo_w.png" alt="에어스카이호텔" class="logo hidden-smxs">
                        <img src="<?=base_img?>/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-m hidden-mdlg">
                    </h1>
                </a>

                <button class="nav-tab hidden-mdlg">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
                <nav class="cf nav">
                    <span class="sr-only">전체 메뉴</span>
                    <div class="bg-drop"></div>
                    <div class="nav-box">
                        <div class="nav-tit hidden-mdlg">
                            <img src="<?=base_img?>/svc/img/symbol/m_top_logo_w.png" alt="에어스카이호텔" class="logo-menu"><span class="i-x" onclick=""></span>
                            <div class="menu-btn-box">
                                <a href="/reserve" class="btn-bk">객실예약</a>
                                <a href="/history/?dd=Sws5TzdVKg==" class="btn-bkc">예약확인</a>
                            </div>
                        </div>
                        <ul class="cf menu">
                            <li>
                                <a href="/main/about" class="title">호텔소개</a>
                                <ul class="sub">
                                    <li><a href="/main/about">호텔 소개</a></li>
                                    <li><a href="/main/factsheet">시설 개요</a></li>
                                    <li><a href="/main/map">오시는 길</a></li>
                                    <!-- <li><a href="/brd/lists/notice.php">공지사항</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="/rooms/?r=std_db" class="title">객실안내</a>
                                <!-- 190719 메뉴 수정 -->
                                <ul class="sub">
                                    <li><a href="/rooms/?r=std_db">슈페리어 더블</a></li>
                                    <!-- <li><a href="/rooms/?r=std_tw">스탠다드 트윈</a></li> -->
                                    <li><a href="/rooms/?r=dx_oc_db">디럭스 오션 더블</a></li>
                                    <li><a href="/rooms/?r=dx_oc_tw">디럭스 오션 트윈</a></li>
                                    <li><a href="/rooms/?r=dx_oc_ondol">디럭스 오션 한실</a></li>
                                    <li><a href="/rooms/?r=pr_oc_db">프리미어 오션 더블</a></li>
                                    <li><a href="/rooms/?r=pr_oc_tw">프리미어 오션 트윈</a></li>
                                    <li><a href="/rooms/?r=pr_oc_ondol">프리미어 오션 온돌</a></li>
                                    <li><a href="/rooms/?r=pr_oc_famtw">프리미어 오션 패밀리 트윈</a></li>
                                    <li><a href="/rooms/?r=suite">스위트</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/facilities/restaurant.php" class="title">다이닝&amp;부대시설</a>
                                <ul class="sub">
                                    <li><a href="/facilities/restaurant.php">레스토랑</a></li>
                                    <li><a href="/facilities/conference.php">컨퍼런스룸</a></li>
                                    <li><a href="/facilities/seminar.php">세미나룸</a></li>
                                    <li><a href="/facilities/businesscenter.php">비즈니스센터</a></li>
                                    <li><a href="/facilities/convenience.php">편의점</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/group" class="title">단체문의</a>
                            </li>
                            <li>
                                <a href="/rent" class="title">장기/단기 숙박</a>
                            </li>
                            <li>
                                <a href="/event" class="title">이벤트/축제</a>
                            </li>
                            <li>
                                <a href="/tourist/?tour_nearby" class="title">주변관광지</a>
                            </li>
                            <li>
                                <a href="/tourist/?tour_fishing" class="title">낚시포인트</a>
                            </li>
                            <li>
                                <a href="/tourist/?tour_foreshore" class="title">갯벌체험</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="bk-menu hidden-smxs airsky">
                    <a href="/reserve" class="btn-bk">예약하기</a>
                    <ul class="bk-list">
                        <li class="item item-1 fst"><a href="/reserve">객실예약</a></li>
                        <li class="item item-2"><a href="/history/?dd=Sws5TzdVKg==">예약확인</a></li>
                        <li class="item item-3"><a href="/group">단체예약</a></li>
                        <li class="item item-4"><a href="/rent">장기/단기예약</a></li>
                        <!-- <li class="item item-4"><a href="javascript:;" onclick="alert('준비중입니다.')">장기/단기예약</a></li> -->
                    </ul>
                </div>
            </div>
        </div>	
</header>