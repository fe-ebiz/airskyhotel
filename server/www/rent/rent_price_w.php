<?php

	$rent_room = array();
	// $rent_room[0]["no"] = "719632";	$rent_room[0]["name"] = "<span style='font-size:14px'>스탠다드 더블</span>";
	// $rent_room[0]["no"] = "719633";	$rent_room[0]["name"] = "<span style='font-size:14px'>스탠다드룸</span>";
	$rent_room[0]["no"] = "719629";	$rent_room[0]["name"] = "<span style='font-size:14px'>디럭스룸</span>";
	// $rent_room[0]["no"] = "719630";	$rent_room[0]["name"] = "<span style='font-size:14px'>디럭스 트윈(오션)</span>";
	// $rent_room[0]["no"] = "719631";	$rent_room[0]["name"] = "<span style='font-size:14px'>디럭스 한실(오션)</span>";
	// $rent_room[0]["no"] = "719634";	$rent_room[0]["name"] = "<span style='font-size:14px'>프리미어 더블(오션)</span>";
	$rent_room[1]["no"] = "719635";	$rent_room[1]["name"] = "<span style='font-size:14px'>프리미어룸</span>";
	// $rent_room[7]["no"] = "719636";	$rent_room[7]["name"] = "<span style='font-size:14px'>프리미어 패밀리트윈(오션)</span>";
	$rent_room[2]["no"] = "719637";	$rent_room[2]["name"] = "<span style='font-size:14px'>스위트룸</span>";

	$rent_p_no = p_no;

	$sdate = date("Y-m-d");
	$edate = date("Y-m-d", strtotime(date("Y-m-d")." + 1day"));	//노출시킬 일자 세팅
	$enddate = $edate;
?>

<script>

function rent_person_change(val) {
	$("input[name='rent_person']").val(val);
}

$(function() {
	rent_person_change("1");
	$("input[name='rent_checkin']").val($(".sdate").val());
	$("input[name='rent_checkout']").val($(".edate").val());
	$("input[name='rent_r_no']").val($(":input:radio[name=room_type]:checked").val());

    var chkin = $('.sdate');
    var chkot = $('.edate');
    var datepicker_ot = new Object;
    var datepicker_in = new Object;

    if (chkin.length !== 0) {
        var opt = {
            format: 'yyyy-mm-dd',
            language: 'tm',
            autoclose: !0,
            startDate: get_today()
        }
        datepicker_in = chkin.datepicker(opt);
    }
    if (chkot.length !== 0) {
        var opt = {
            format: 'yyyy-mm-dd',
            language: 'tm',
            autoclose: !0,
        };
        opt.startDate = chkin.length !== 0 ? calculation_date(chkin.val(), 1, '+') : $('[name*="v_sttdate"]').val();
        datepicker_ot = chkot.datepicker(opt);
    }

	datepicker_in.on('changeDate', function () {
		var click = new convert_date($(this));
		var click_date = click.getUnix();
		var out_date = date_unix(datepicker_ot.val());
		datepicker_ot.datepicker('setStartDate', false);
		datepicker_ot.datepicker('setDate', click.getOpdt(+1));
		datepicker_ot.datepicker('setStartDate', click.getOpdt(+1));
	});

});


function rent_price() {
	<?php	/*예상금액 연산*/	?>
	$.ajax({
		type	:	"POST",
		url		:	"./state.php",
		data	:	$("form[name='rent_form']").serialize(),
		success	:	function(e) {
			var res = e.split("||");
			$("#room_price").html(res[0]+"원");
			$("#serve_price").html(res[1]+"원");
			$("#vat_price").html(res[2]+"원");
			$("#total_price").html(res[3]+"원");
			$("input[name='night']").val(res[4]);

			$("input[name='rent_checkin']").val($(".sdate").val());
			$("input[name='rent_checkout']").val($(".edate").val());
			$("input[name='rent_person']").val($("#person option:selected").val());
			$("input[name='rent_r_no']").val($(":input:radio[name=room_type]:checked").val());
			$("input[name='rent_price']").val(res[3]);
		}
	});
}
function on(obj){
	var a = (obj == "#pop") ? 300 : ($(window).height() - $(obj).height()) / 2;
	var b = ($(window).width() - $(obj).width()) / 2;

	switch(obj) {
		case "#mailing_pop_wrap":
		case "#call_pop_wrap":
		case "#call_pop_wrap1":
		case "#loadcard":
		case "#zippop":
			a = $(obj).offset().top;
			a = a+300;
			break;
		default:
			a = a;
			break;
	}
	
	var arrPageSizes = ___getPageSize();
	$("body").append("<div id=\"overlay\"></div>");
	if(obj == "#menu_bg") {
		$("#overlay").css({"background-color":"#000", "opacity":"0.7", "width":arrPageSizes[0], "height":$(window).height()});

	} else {
		$("#overlay").css({"background-color":"#000", "opacity":"0.7", "width":arrPageSizes[0], "height":arrPageSizes[1]});
	}
	$(obj).css({"top": a, "left": b, "z-index": 500 }).show();
}

</script>


<form action="./state.php" name="rent_form">
<input type="hidden" name="mode" value="rent_price_chk" />
<input type="hidden" name="p_no" value="<?=$rent_p_no?>" />
	<h2 class="tbl-tit">이용 시 예상 요금을 알아볼까요?</h2>
		<div class="grid-contents grid-type-2">
			<table class="tbl-base tbl-2">
				<colgroup>
					<col style="width:18%">
					<col style="width:24%">
					<col style="width:59%">
				</colgroup>
				<thead class="rowgroup">
					<tr>
						<th>객실타입</th>
						<th>예상 체류기간</th>
						<th>이용 시 예상요금</th>
					</tr>
				</thead>
				<tbody class="rowgroup">
					<tr>
						<td class="nth-1">
							<?php
								for($i=0; $i<count($rent_room); $i++) {
									$inum = $i+1;
									$chk = $i == 0 ? "checked" : "";
							?>
							<p class="row clr">
								<span class="rdo-box">
									<input type="radio" name="room_type" class="rdo" id="radio-<?=$inum;?>" value="<?=$rent_room[$i]["no"]?>" <?=$chk?>>
									<label for="radio-<?=$inum;?>" class="lbl"><?=$rent_room[$i]["name"]?></label>
								</span>
							</p>
							<?php
								}
							?>
						</td>
						<td class="nth-2">
							<p class="row clr">
								<span class="inp-box">
									<label for="" class="lbl">체크인</label>
									<input type="text" name="hseldate" id="hseldate" class="inp sdate" value="<?=$sdate?>" readonly="" style="cursor:pointer">
								</span>
							</p>
							<p class="row clr">
								<span class="inp-box">
									<label for="" class="lbl">체크아웃</label>
									<input type="text" name="nseldate" id="nseldate" class="inp edate" value="<?=$edate?>" readonly="" style="cursor:pointer">
								</span>
							</p>
							<p class="row clr">
								<span class="inp-box">
									<label for="" class="lbl">이용기간</label>
									<input type="text" name="night" class="inp" readonly />
								</span>
							</p>
							<p class="row clr">
								<span class="inp-box">
									<label for="" class="lbl">인원수</label>
									<?php
										$person = 2;
									?>
									<select name="person" id="person" class="slt" onchange="rent_person_change(this.value)">
										<?php	for($p=1; $p<=$person; $p++) {	?>
										<option value="<?=$p?>"><?=$p?></option>
										<?php	}	?>
									</select>
								</span>
							</p>
							<div class="row">
								<button type="button" class="btn-base btn-gray flt-r" onclick="javascript:rent_price();">예상요금</button>
							</div>
						</td>
						<td class="clr nth-3">
							<div class="split-1">
								<dl>
									<dt>객실요금</dt>
									<dd id="room_price">0원</dd>
								</dl>
								<dl>
									<dt>봉사료</dt>
									<dd id="serve_price">0원</dd>
								</dl>
								<dl>
									<dt>세금</dt>
									<dd id="vat_price">0원</dd>
								</dl>
								<hr class="sun">
								<dl>
									<dt>총 예상요금</dt>
									<dd id="total_price">0원</dd>
								</dl>
							</div>
							<div class="split-2">
								<span class="fg-red-1">
									이용기간의 일별 표준요금 기준이며,<br>장기이용은 전화상담시 이용일자에 따라 <br>최대 40~50%의 할인요금을 제안드립니다.
								</span>
								<p class="row clr">
									<!-- <button type="button" onclick="javascript:on('#call_pop_wrap')" class="btn-base btn-gray">문의신청 010-8817-1634</button> -->
									<button type="button" class="btn-base btn-gray">문의신청 010-8817-1634</button>
								</p>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
</form>