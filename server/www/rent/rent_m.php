<link rel="stylesheet" href="http://static.go.co.kr/css/mobile_layout_goco.css" type="text/css">
<link rel="stylesheet" href="http://static.seabay.co.kr/svc/css/rent/init_m.css">
<link rel="stylesheet" href="http://static.hotelairsky.co.kr/svc/css/rent/init_m.css">

<div class="body"></div>
<br class="br_sub">

<!-- 190109 .type-2 클래스 추가 -->
<table id="product_info" class="type-2">
    <colgroup>
        <col width="25%">
        <col width="75%">
    </colgroup>
    <tbody>
        <tr>
            <!-- 스타일 수정 -->
            <td colspan="2" height="35" class="product_info_title" style="padding:0; font-weight:bold; font-size:16px; text-align: center; color: #000; background: #fff">
                7일부터 6개월까지 이용가능!
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="roomINFO" width="100%">
                    <colgroup>
                        <col width="40%">
                        <col width="30%">
                        <col width="30%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td class="tit">상품정보</td>
                            <td class="tit">숙박기간</td>
                            <td class="tit">특혜</td>
                        </tr>
                        <tr class="bd-b0">
                            <th rowspan="4">
                                
                                디럭스룸<br>
                                프리미어룸<br>
                                스위트룸
                            </th>
                            <th>14일
                            </th>
                            <td rowspan="4" style="font-weight:bold; letter-spacing: -1px; color:#ff0000;">
                                <span style="font-size:14px;">공과금 일체 포함</span>
                                <span style="display: block; font-size:10px;">(전기,수도,가스요금 등)</span>
                            </td>
                        </tr>
                        <tr class="bd-b0">
                            <th>1개월</th>
                        </tr>
                        <tr class="bd-b0">
                            <th>6개월</th>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <script type="text/javascript">
            $(function() {
                $("input[name='rent_checkin']").val($(".sdate").val());
                $("input[name='rent_checkout']").val($(".edate").val());
                $("input[name='rent_r_no']").val($(":input:radio[name=room_type]:checked").val());


                /*$(".sdate").datepicker({
                    dateFormat: "yy-mm-dd",
                    showAnim: "slideDown",
                    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
                    minDate: "2019-01-09",
                    changeMonth: true,
                    changeYear: true,

                });


                $('.sdate').datepicker("option", "onClose", function(selectedDate) {
                    edate = ($(".sdate").val()).split("-");
                    var dt = new Date(edate[1] + "/" + edate[2] + "/" + edate[0]);
                    var day = dt.getDate();
                    var month = (dt.getMonth()) + 1;
                    var year = dt.getFullYear();

                    dt.setDate(dt.getDate() + 1);
                    day = dt.getDate();
                    month = (dt.getMonth()) + 1;
                    year = dt.getFullYear();

                    edate_val = year + "-" + month + "-" + day;
                    $(".edate").datepicker("option", "minDate", edate_val);
                });
                $('.edate').datepicker("option", "minDate", $(".sdate").val());
                $("#nseldate").datepicker({
                    dateFormat: "yy-mm-dd",
                    showAnim: "slideDown",
                    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
                    minDate: "2019-01-10",
                    changeMonth: true,
                    changeYear: true
                });*/
            });

            function rent_price() {
                $.ajax({
                    type: "POST",
                    url: "./state.php",
                    data: $("form[name='rent_form']").serialize(),
                    success: function(e) {
                        var res = e.split("||");
                        $("#room_price").html(res[0] + "원");
                        $("#serve_price").html(res[1] + "원");
                        $("#vat_price").html(res[2] + "원");
                        $("#total_price").html(res[3] + "원");
                        $("input[name='night']").val(res[4]);
                    }
                });
            }
        </script>
        <?php
			include("./rent_price_m.php");
		?>
        <tr>
            <td height="40" colspan="2" align="center" class="info_title">소개</td>
        </tr>
        <tr>
            <th height="37">주소</th>
            <td>인천광역시 중구 은하수로29번길 31</td>
        </tr>
        <tr>
            <th height="37">홈페이지</th>
            <td class="link">
                <a href="http://hotelairsky.co.kr/" title="에어스카이호텔 홈페이지" target="_blank">http://hotelairsky.co.kr/</a>
            </td>
        </tr>
        <tr>
            <th height="37">건축규모</th>
            <td>스탠다드룸(6.9평형), 디럭스룸(6.9평형), 프리미어룸(6.9평형), 스위트룸(13.1평형)</td>
        </tr>
        <tr>
            <th height="37">총 객실수</th>
            <td>457개 객실</td>
        </tr>
        <tr>
            <th height="57">기본시설</th>
            <td>TV / 개별냉난방기 / 객실금고 / USB충전단자 / 무료WIFI / 욕실용품 등</td>
        </tr>
        <tr>
            <th height="57">부대시설</th>
            <td>레스토랑 / 비즈니스센터 / 컨퍼런스룸 / 세미나룸 / 세미나룸 / 편의점 / 주차장</td>
        </tr>
        <tr>
            <th height="57">주변안내</th>
            <td>인천국제공항 / 영종레일바이크 / 월미테마파크 / 팔미도유람선 / BMW드라이빙센터 / 마시안해변 / 무의도 / 왕상해수욕장 / 을왕리해수욕장 등</td>
        </tr>

        <tr>
            <td height="40" colspan="2" align="center" class="info_title info_detail">상세정보 <img src="http://img.go.co.kr/mobile/icon_arrow_open.jpg" width="10"></td>
        </tr>
        <tr>
            <td>
                <!-- 호텔 상세이미지 -->
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/01.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_1.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/02_2.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/03.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/04.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
                <img src="http://img.hotelairsky.co.kr/svc/img/rent/detail/05.jpg" alt="에어스카이 호텔 소개이미지" style="width:400%">
            </td>
        </tr>
        <tr>
            <td height="40" colspan="2" align="center" class="info_title">인사말 <img src="http://img.go.co.kr/mobile/icon_arrow_open.jpg" width="10"></td>
        </tr>
        <tr>
            <td colspan="2" class="info_text">
                <div id="" class="text">
                    수려한 녹음, 푸른 하늘과 드넓은 바다가 숨쉬는 특급호텔! <br>
                    영종 에어스카이호텔!<br>
                    2019년 4월에 오픈한 ‘에어스카이호텔’은 서해의 일출과 석양, 싱그러움 가득한 초록공원, 푸른 인천 바다가 맞닿은 인천 영종도에 위치해 있습니다.<br>
                    에어스카이는 고객님께 삶의 여유와 활력을 더하는 공간이 될 수 있도록 노력하고 있습니다. 아름다운 자연 속에서 최고의 하루를 선사할 수 있는 휴식처이자, 오랜 기억 속에 남을 수 있는 공간이 되어 드리겠습니다. 전 임직원은 최상의 호텔 서비스에 최선을 다할 것을 약속 드립니다.<br>
                    영종도의 아름다움을 한 곳에서 담고 즐기실 수 있는 최고의 여유를 만나보세요.<br>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="btn_search"><a href="tel:01088171634" title="전화걸기">전화문의 010-8817-1634 </a></div>
            </td>
        </tr>
    </tbody>
</table>

<!-- 상단 슬라이드 -->
<!-- <script text="text/javascript">
    $(function() {

        var swiper = new Swiper('.swiper-container', {
            scrollbar: '.swiper-scrollbar', // 스크롤
            scrollbarHide: false, // 스크롤 안할때도 스크롤바 숨기지 않음
            uniqueNavElements: true,
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',

            autoplayDisableOnInteraction: false,
            paginationBulletRender: function(index, className) {
                return '<span class="' + className + '"></span>';
            }
        });

    });
</script> -->
<!--//190109 장단기숙박 -->


<div class="clr"></div>


<!--버튼_스크롤 탑으로-->
<div class="btn-scroll-move-box">
    <a href="javascript:;" class="btn-move-top" role="button" onclick="$( 'html, body' ).animate( { scrollTop : 0 }, 400 )">
        <img src="http://img.monopalace.com/landing/inquiry/go_top.png" alt="위로">
    </a>
</div>
<script>
    $(document).ready(function(){
        $(window).scroll(function(){
            let scroll_H = $(document).scrollTop();
            if(scroll_H > 500){
                $(".btn-scroll-move-box").show();
            }
            else{
                $(".btn-scroll-move-box").hide();
            }
        });
    })
</script>
<!--///버튼_스크롤 탑으로-->