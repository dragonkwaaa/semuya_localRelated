<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'03_1';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/staff/pages/staff_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">직원관리</div>
						<div class="titleText subMod">직원목록</div>
					</div>
                    <div class="btnGroup headLineSort rightSideMod">
						<a href="javascript:openRegPop();" class="btn">직원등록</a>
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
								<th>프로세스명</th>
								<td>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>검색유형</option>
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
                                    <col style="width:100px;">
                                    <col style="width:100px;">
									<col style="width:100px;">
                                    <col style="width:180px;">
                                    <col style="width:100px;">
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
									<th>직원명</th>
                                    <th>아이디</th>
									<th>연락처</th>
                                    <th>사용유무</th>
                                    <th>최근 수정일</th>
                                    <th>등록일</th>
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
									<td>곽반장</td>
                                    <td>drKwaa</td>
									<td>010-1234-1234</td>
                                    <td>
                                        <div class="radioGroup">
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus" value="0" checked="">
								    				<label></label>
								    			</div>
								    			<div class="radioTitle">사용</div>
								    		</div>
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus" value="1">
								    				<label></label>
								    			</div> 
								    			<div class="radioTitle">미사용</div>
								    		</div>
								    	</div>
								    </td>
                                    <td>2021-01-11 23:00</td>
                                    <td>2020-11-14 23:00</td>
                                    <td>
										<div class="btnGroup listControlSort">
                                            <a href="javascript:void(0);" class="btn small darkGreyMod">상세</a>
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




<!-- :: open : ksg_20210217_1648 : [세무야] 직원 등록 팝업. -->
<div class="popup centerSort regStaffPop">
	<div class="titleBox popupSort">
		<div>직원등록</div>
		<a href="javascript:closePop()" class="btn closeBtn"></a>
	</div>
	<div class="popupCon">
		<div class="section regSort">
			<div class="sectionCon scrollSort">
				<div class="setField regSort">
					<table class="regTable">
						<colgroup>
							<col style="width : 200px;">
							<col style="width : 600px;">
						</colgroup>
						<tbody>
						<tr>
							<th>직원명</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="직원명을 입력해주세요.">
							</td>
                        </tr>
						<tr>
							<th>아이디</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="아이디를 입력해주세요.">
                                <a href="javascript:void(0);" class="regTblBtn_inputRSort">중복확인</a>
							</td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="비밀번호를 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
                            <th>비밀번호 재입력</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="비밀번호를 한번 더 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>연락처</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="연락처를 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
							<th>주소</th>  
							<td>
                                <input class="tbox twinShort2" value="" placeholder="우편번호">
								<input class="tbox twinLong3" value="" placeholder="주소">
                                <a href="javascript:void(0);" class="regTblBtn_inputRSort">주소검색</a>
							</td>
                        </tr>
                        <tr>
                            <th>상세주소</th>  
							<td>
								<input class="tbox singleLong1" value="" placeholder="나머지 주소를 입력해주세요."> 
							</td>
                        </tr>
					</table>
			</div>
		</div>
		<div class="btnGroup underPopSort">
			<a href="javascript:closePop()" class="btn underPop_smoke">취소</a>
			<a href="javascript:choicePop()" class="btn underPop_orange">등록</a>
		</div>
	</div>
</div>
<!-- :: close : ksg_20210217_1648 : [세무야] 직원 등록 팝업. -->

<script>
// :: open : ksg_20210217_1650 : [세무야] 등록 팝업창 오픈 스크립트.
function openRegPop(){
	$('.contents').addClass('overlay');
	$('.popup.regStaffPop').show();
};
// :: close : ksg_20210217_1650 : [세무야] 등록 팝업창 오픈 스크립트.
// :: open : ksg_20210216_1534 : [세무야] 수정 팝업창 오픈 스크립트.
function openModiPop(){
	$('.contents').addClass('overlay');
	$('.popup.modiStaffPop').show();
};
// :: close : ksg_20210216_1534 : [세무야] 수정 팝업창 오픈 스크립트.
</script>
</body>
</html>