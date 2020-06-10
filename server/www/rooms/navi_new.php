<?php
switch($_GET["r"]) {
    case "std_db":
        $p_title  = "스탠다드 더블";
        $p_stitle = "모던한 원목 질감의 바닥과 온화한 감성으로 장식된 객실은 안락한 침대와 가구를 갖추고 있습니다.<br>여행의 가치를 추구하는 연인, 친구, 가족 2인 고객님께 적합한 더블타입 베드를 제공합니다.";
    break;
    case "std_tw":
        $p_title  = "스탠다드 트윈";
        $p_stitle = "모던한 원목 질감의 바닥과 온화한 감성으로 장식된 객실은 안락한 침대와 가구를 갖추고 있습니다.<br>친구, 가족 등 2인 여행객들에게 적합한 개인용 싱글배드 2개를 제공합니다.";
    break;
    case "dx_oc_db":
        $p_title  = "디럭스 오션 더블";
        $p_stitle = "오크 질감의 바닥과 따뜻한 느낌으로 장식 된 객실은 편안함과 안락함을 제공하기 위해 최상의 컨디션을 유지합니다.<br>편안한 시설과 드넓은 바다 전망으로 특별한 하루를 보내세요.";
    break;
    case "dx_oc_tw":
        $p_title  = "디럭스 오션 트윈";
        $p_stitle = "오크 질감의 바닥과 따뜻한 느낌으로 장식 된 객실은 편안함과 안락함을 제공하기 위해 최상의 컨디션을 유지합니다.<br>편안한 개인용 싱글배드와 드넓은 바다 전망으로 특별한 하루를 보내세요.";
    break;
    case "dx_oc_ondol":
        $p_title  = "프리미어 오션 온돌";
        $p_stitle = "따뜻한 느낌으로 장식 된 한실 객실로 온돌 타입을 선호하는 여행객 분들께 권합니다.<br>공간 활용에 좋은 한실 타입 객실과 드넓은 바다 전망으로 특별한 하루를 보내세요.";
    break;
    case "pr_oc_db":
        $p_title  = "프리미어 오션 더블";
        $p_stitle = "특별한 하루를 만들어줄 객실은 천장부터 바닥 까지 탁월한 인테러리어 조화로 구성되어 있습니다.<br>연인, 친구, 가족 2인 여행객들에게 적합한 더블타입 베드를 제공합니다.";
    break;
    case "pr_oc_tw":
        $p_title  = "프리미어 오션 트윈";
        $p_stitle = "특별한 하루를 만들어줄 객실은 천장부터 바닥 까지 탁월한 인테러리어 조화로 구성되어 있습니다.<br>친구, 가족 등 2인 여행객들에게 적합한 개인용 싱글배드 2개를 제공합니다.";
    break;
    case "pr_oc_famtw":
        $p_title  = "프리미어 오션 패밀리 트윈";
        $p_stitle = "특별한 하루를 만들어줄 객실은 천장부터 바닥 까지 탁월한 인테러리어 조화로 구성되어 있습니다.<br>친구, 가족 등 2~3인 여행객들에게 어울리는 더블배드와 싱글배드를 제공합니다.";
    break;
    case "suite":
        $p_title  = "스위트";
        $p_stitle = "바다의 장엄한 일출을 볼 수 있으며 쇼파와 테이블이 추가된 스위트 거실 공간을 제공합니다.<br>개인물품 보관을 위한 세이프티박스와 쾌적한 추가 공간이 최고의 만족을 드립니다.";
    break;
}
?>
<div class="sub_top_menu">
    <h4 class="page_title"><?=$p_title;?></h4>
    <h6 class="page_sub_title"><?=$p_stitle;?></h6>
    <ul class="menu_wrap container">
        <li class="menu_item <?php if($_GET["r"] == "std_db") echo "active"; ?>"><a href="./?r=std_db">스탠다드 더블</a></li>
        <li class="menu_item <?php if($_GET["r"] == "std_tw") echo "active"; ?>"><a href="./?r=std_tw">스탠다드 트윈</a></li>
        <li class="menu_item <?php if($_GET["r"] == "dx_oc_db") echo "active"; ?>"><a href="./?r=dx_oc_db">디럭스 오션 더블</a></li>
        <li class="menu_item <?php if($_GET["r"] == "dx_oc_tw") echo "active"; ?>"><a href="./?r=dx_oc_tw">디럭스 오션 트윈</a></li>
        <li class="menu_item <?php if($_GET["r"] == "dx_oc_ondol") echo "active"; ?>"><a href="./?r=dx_oc_ondol">프리미어 오션 온돌</a></li>
        <li class="menu_item <?php if($_GET["r"] == "pr_oc_db") echo "active"; ?>"><a href="./?r=pr_oc_db">프리미어 오션 더블</a></li>
    </ul>
    <ul class="menu_wrap container">
        <li class="menu_item <?php if($_GET["r"] == "pr_oc_tw") echo "active"; ?>"><a href="./?r=pr_oc_tw">프리미어 오션 트윈</a></li>
        <li class="menu_item <?php if($_GET["r"] == "pr_oc_famtw") echo "active"; ?>"><a href="./?r=pr_oc_famtw">프리미어 오션 패밀리 트윈</a></li>
        <li class="menu_item <?php if($_GET["r"] == "suite") echo "active"; ?>"><a href="./?r=suite">스위트</a></li>
    </ul>
</div>