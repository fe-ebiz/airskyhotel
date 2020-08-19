<?php
    include("../common/top.php");
?>
<link rel="stylesheet" type="text/css" href="http://static.hotelairsky.co.kr/svc/css/tourist/init.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<link href="http://static.hotelairsky.co.kr/svc/css/jquery.bxslider.css" rel="stylesheet" />
<div class="body"></div>
<br class="br_sub">

<div class="contents group-contents">
    <div class="sub">
        <div class="sub_top_menu">
            <h4 class="page_title">낚시포인트 안내</h4>
            <h6 class="page_sub_title">서해 영종도의 피쉬뱅크, 많은 전문가들이 추천하는 낚시포인트 !</h6>
            <!--메뉴-->
            <nav class="tourist-sub-menu">
                <ul class="sub-menu-ul">
                    <li><a href="?tour_fishing">낚시포인트 안내</a></li>
                    <li><a href="?tour_foreshore">갯벌체험 안내</a></li>
                    <li><a href="?tour_nearby">주변관광지 안내</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub group_box container">
        <div class="sub_item_box">
            <div class="sub_item_wrap">
                <div class="sub_item tour-contents">
                    <!--하단메뉴부분-->
                        <section class="tourist-sec program-sec bottom-menu-sec">
                            <nav class="tourist-bottom-menu">
                                <ul class="bottom-menu-ul">
                                    <li>
                                        <a href="?tour_fishing">
                                            <div class="title-box">
                                                <h5>낚시포인트 안내</h5>
                                                <p class="txt-pc">영종도의 피쉬뱅크, 전문가들의 추천 낚시 포인트</p>
                                                <p class="txt-m">영종도 추천 낚시 포인트</p>
                                            </div>
                                            <img class="img-pc" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu01.jpg" alt="낚시포인트">
                                            <img class="img-m" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu01_m.jpg" alt="낚시포인트">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?tour_foreshore">
                                            <div class="title-box">
                                                <h5>갯벌체험 안내</h5>
                                                <p class="txt-pc">바지락, 게, 꼬막, 조개, 낙지 등 자연 액티비티</p>
                                                <p class="txt-m">서해만의 자연 액티비티</p>
                                            </div>
                                            <img class="img-pc" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu02.jpg" alt="갯벌체험 안내">
                                            <img class="img-m" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu02_m.jpg" alt="갯벌체험 안내">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?tour_nearby">
                                            <div class="title-box">
                                                <h5>주변관광지 안내</h5>
                                                <p class="txt-pc">더욱 알찬 여행을 즐기는 방법, 추천 주변관광지</p>
                                                <p class="txt-m">알찬 여행을 위한 가이드</p>
                                            </div>
                                            <img class="img-pc" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu03.jpg" alt="주변관광지 안내">
                                            <img class="img-m" src="http://img.hotelairsky.co.kr/svc/img/tourist/common/img_bottom_menu03_m.jpg" alt="주변관광지 안내">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                </div>
            </div>
        </div>
    </div>
    <div class="cf"></div>
</div>
<script>    
    $(document).ready(function(){
        //url 가져오기
        let hrefList = $(".sub-menu-ul li a");
        //url 가져오기
        let url = window.location.href;
        let url_last = url.split('?');

        //기본경로로 변경
        if(url_last.length < 2) {
            newLastUrl = $(hrefList[0]).attr('href');
            location.href = url + newLastUrl;
        }
        //누른 단추 확인
        hrefList.each(function(index, item){
            if($(item).attr('href') == ("?"+url_last[1])){
                $(item).parent().addClass('active');
                return false;
            }
        });

        
        
        $.each(pageInfo, function(index, item){
            if(item.urlName === url_last[1]){ 
                //상단 문구 변경
                $(".sub_top_menu .page_title").text(item.title);
                $(".sub_top_menu .page_sub_title").text(item.subTitle);
                //불러오기
                $("<div/>").load("./" + url_last[1] + ".php",function(){
                    $(".tour-contents").prepend($(this).html());
                });
            }
        });
        

    });
    let pageInfo = [
        {
            urlName:"tour_fishing",
            title:"낚시포인트 안내",
            subTitle:"서해 영종도의 피쉬뱅크, 많은 전문가들이 추천하는 낚시포인트 !"
        },
        {
            urlName:"tour_foreshore",
            title:"갯벌체험 안내",
            subTitle:"바지락, 게, 꼬막, 조개, 낙지, 쭈꾸미 등 서해만의 자연 필수 액티비티!"
        },
        {
            urlName:"tour_nearby",
            title:"주변관광지 안내",
            subTitle:"더욱 알찬 여행을 즐기는 방법! 추천 주변 관광지를 소개합니다."
        }
    ];
</script>
<?php
    include("../common/bottom.php");
?>