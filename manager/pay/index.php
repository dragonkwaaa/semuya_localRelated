<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'02_1';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/pay/pages/pay_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">결제관리</div>
						<div class="titleText subMod">결제내역</div>
					</div>
				</div>
				<div class="sectionCon">
					<div class="setField searchSort">
						<table class="searchTable">
							<colgroup>
								<col style="width : 100px;">
								<col style="width : 800px;">
							</colgroup>
							<tbody>
							<tr>
								<th>검색어</th>
								<td>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>- 전체 -</option>
								    	</select>
								    </div>
									<input class="tbox twinLong1 ml8" value="" placeholder="검색어를 입력해주세요.">
								</td>
                            </tr>
                            <tr>
								<th>기간</th>
								<td>
									<input id="startDate" class="tbox datepickMod" name="startDate" value="" readonly="">
									<span class="dateRangeSign">~</span>
									<input id="endDate" class="tbox datepickMod" name="endDate" value="" readonly="">
									<div class="btnGroup dateTermSort">
										<a href="javascript:setSearchDate('0d');" class="btn activated">당일</a>
										<a href="javascript:setSearchDate('1w');" class="btn">일주일</a>
										<a href="javascript:setSearchDate('1m');" class="btn">1개월</a>
										<a href="javascript:setSearchDate('3m');" class="btn">3개월</a>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
                    <!-- :: starting : ksg_20210210_1501 : [세무야] 검색파트 하단 "검색" 버튼 파트. -->
                    <div class="btnGroup searchSingleSort">
						<a href="javascript:void(0);" class="btn searchBtn">검색</a>
					</div>
					<div class="listField">
						<div class="headLine listUpperSort">
							<div class="leftPart">
                                <a href="javascript:void(0);" class="ctrlBtn">선택삭제</a>
							</div>
                            <!-- :: starting : ksg_20210210_1441 : [세무야] 테이블 우상단 컨트롤박스 파트. -->
                            <div class="rightPart">
								<div class="sbox shortMod">
									<select>
										<option>최신순</option>
                                        <option>문서번호순</option>
                                        <option>카테고리순</option>
										<option>제목순</option>
									</select>
								</div>
								<div class="sbox shortMod">
									<select>
										<option>10개씩</option>
										<option>20개씩</option>
									</select>
								</div>
                                <a href="javascript:void(0);" class="ctrlBtn_rSort">엑셀저장</a>
							</div>
						</div>
						<div class="tableBox">
							<table class="listTable">
								<colgroup>
									<col style="width:50px;">
                                    <col style="width:120px;">
                                    <col style="width:100px;">
                                    <col style="width:120px;">
                                    <col style="width:120px;">
                                    <col style="width:200px;">
                                    <col style="width:120px;">
                                    <col style="width:100px;">
                                    <col style="width:150px;">
                                    <col style="width:100px;">
                                    <col style="width:100px;">
								</colgroup>
								<thead>
								<tr>
									<th>
										<div class="checkBoxCase">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
									</th>
									<th>아이디</th>
                                    <th>이름</th>
                                    <th>상호명</th>
                                    <th>전화번호</th>
                                    <th>결제수단</th>
                                    <th>결제금액</th>
                                    <th>이용 서비스</th>
                                    <th>결제일</th>
                                    <th>관리</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<div class="checkBoxCase">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
                                    </td>
                                    <td>kwadd</td>
                                    <td>곽반장</td>
                                    <td>곽회사</td>
                                    <td>010-1243-1234</td>
                                    <td>
                                        우리카드 / (1234-12-1234)
                                    </td>
                                    <td>1,432,200 원</td>
                                    <td>상세유료진단1</td>


                                    <td>2020-11-14 23:00</td>
                                    <td>
										<div class="btnGroup listControlSort">
                                            <a href="javascript:openWPop();" class="btn small darkGreyMod">환불</a>
                                            <a href="javascript:void(0);" class="btn small pinkMod">삭제</a>
										</div>
									</td>
                                </tr>
								</tbody>
							</table>
						</div>
						<div class="pageGroup">
							<ul class="pageBox">
								<li class="prevBtn"><a href="javascript:void(0);">이전</a></li>
								<li class="pageNum activated"><a href="javascript:void(0);">1</a></li>
								<li class="pageNum"><a href="javascript:void(0);">2</a></li>
								<li class="pageNum"><a href="javascript:void(0);">3</a></li>
								<li class="nextBtn"><a href="javascript:void(0);">다음</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- :: open : ksg_20210216_1628 : [세무야] 환불 안내문구 팝업. -->
<div class="popup centerSort warnRefundPop">
	<div class="titleBox popupSort">
		<div>환불확인</div>
		<a href="javascript:closePop()" class="btn closeBtn"></a>
	</div>
	<div class="popupCon">
		<div class="section regSort">
			<div class="sectionCon">
                <!-- :: open : ksg_20210216_1631 : [세무야] 단순 안내문구 파트. -->
                <div class="popTxtBox_single1">
                    정말 환불하시겠습니까?
                </div>
                <!-- :: close : ksg_20210216_1631 : [세무야] 단순 안내문구 파트. -->
			</div>
		</div>
		<div class="btnGroup underPopSort">
			<a href="javascript:closePop()" class="btn underPop_smoke">취소</a>
			<a href="javascript:choicePop()" class="btn underPop_orange">환불</a>
		</div>
	</div>
</div>
<!-- :: close : ksg_20210216_1628 : [세무야] 환불 안내문구 팝업. -->
<script>
// :: open : ksg_20210216_1455 : [세무야] 환불 안내 팝업창 오픈 스크립트.
function openWPop(){
	$('.contents').addClass('overlay');
	$('.popup.warnRefundPop').show();
};
// :: close : ksg_20210216_1455 : [세무야] 환불 안내 팝업창 오픈 스크립트.
</script>
</body>
</html>