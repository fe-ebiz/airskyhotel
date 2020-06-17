<?php if($_GET["r"] == "") {
    echo "<script>location.href='/rooms/?r=dx_oc_ondol'</script>";
    exit;
} ?>
<div class="body"></div>
<br class="br_sub">

<div class="sub room_detail">
    <div id="slider_room" class="slider_container room">
        <div data-u="slides" class="slides">
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/pr_oc_ondol/001.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/pr_oc_ondol/002.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/dx_oc_ondol/003.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/dx_oc_ondol/004.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/dx_oc_ondol/005.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_05.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_06.jpg" alt="객실사진" /></div>
            <div data-p="112.50"><img data-u="image" class="room-visibility" src="http://img.hotelairsky.co.kr/svc/img/rooms/comm_07.jpg" alt="객실사진" /></div>
        </div>
        <span u="arrowleft" class="jssor-sprite arow-left" style="width: 21px; height: 32px; top: 290px; left: 20px;"></span>
        <span u="arrowright" class="jssor-sprite arow-right" style="width: 21px; height: 32px; top: 290px; right: 20px"></span>
    </div>

    <?php include('./navi_new.php'); ?>

    <div class="container">
        <div class="detail box_center">
            <div class="box_right">
                <h3>RESERVATION</h3>
                <?php include('./reservation.php'); ?>
            </div>
            <div class="box_left">
                <?php include('./useicon.php'); ?>
                <div class="description">
                    <div class="title">
                        <h5>ROOM QUICKVIEW</h5>
                    </div>
                    <div class="cont">
                        <ul class="c_list">
                            <li>객실 크기 : 22.8㎡ (6.9평)</li>
                            <li>침대 타입 : 온돌</li>
                            <li>객실당 인원 : 기준 인원 4인, 최대 인원 4인</li>
                        </ul>
                    </div>
                </div>
                <?php include('./description.php'); ?>
            </div>
            <!-- /.box_left -->
        </div>
    </div>
</div>