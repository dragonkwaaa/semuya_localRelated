<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'02';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/user/pages/user_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">회원관리</div>
						<div class="titleText subMod">회원목록</div>
					</div>
					<div class="btnGroup headLineSort rightSideMod">
						<!-- :: open : ksg_20210216_1455 : [세무야] 회원등록 페이지로 연결되는 버튼 내용. -->
						<!-- <a href="/manager/user/userReg" class="btn">회원등록</a> -->
						<!-- :: close : ksg_20210216_1455 : [세무야] 회원등록 페이지로 연결되는 버튼 내용. -->
						<a href="javascript:openPPop();" class="btn">회원등록</a>
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
									<!-- :: open : ksg_20210215_2049 : 제거. -->
                                    <!-- <input class="tbox twinShort1" value="" placeholder="카테고리 키"> -->
									<!-- :: close : ksg_20210215_2049 : 제거. -->
									<div class="sbox normMod1">
								    	<select>
								    		<option>전체</option>
								    	</select>
								    </div>
									<input class="tbox twinLong1 ml8" value="" placeholder="검색어를 입력해주세요.">
								</td>
                            </tr>
                            <tr>
								<th>등록일</th>
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
									<col style="width:80px;">
									<col style="width:100px;">
									<col style="width:80px;">
									<col style="width:100px;">
									<col style="width:250px;">
									<col style="width:100px;">
									<col style="width:120px;">
									<col style="width:100px;">
									<col style="width:100px;">
                                    <!-- <col style="width:100px;"> -->
                                    <col style="width:120px;">
								</colgroup>
								<thead>
								<tr>
									<th>
										<div class="checkBoxCase">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
									</th>
									<th>회사명</th>
									<th>이름</th>
									<th>사업자번호</th>
									<th>업태</th>
                                    <th>종목</th>
                                    <th>주소</th>
									<th>챗봇 문의</th>
                                    <th>전문가 요청</th>
                                    <th>위험도 측정</th>
                                    <!-- <th>세무조사받은경험</th> -->
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
                                    <td>
                                        <div>에이디치히얌</div>
										<div class="inListBtnGroup">  
										    <a href="javascript:void(0);" class="btn borderedSort">메모</a>
										</div> 
									</td>
                                    <td>곽반장</td>
                                    <td>111-11-1111</td>
                                    <td>도매업</td>
									<td>생활용품 도매업</td>
                                    <td>서울시 마포구 마포대로 </td>
                                    <td>
										<div class="emptyTxt_horLine">-</div>
									</td>
                                    <td>
										<div class="emptyTxt_horLine">-</div>
									</td>
									<td>
										<div class="emptyTxt_horLine">-</div>
									</td>
                                    <!-- <td>
										<div class="emptyTxt_horLine">-</div>
									</td> -->
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<!-- :: open : ksg_20210216_1535 : [세무야] 등록 페이지로 연결하는 버튼. 여기서는 미사용. -->
											<!-- <a href="/manager/user/userReg" class="btn small darkGreyMod">상세</a> -->
											<!-- :: close : ksg_20210216_1535 : [세무야] 등록 페이지로 연결하는 버튼. 여기서는 미사용. -->
											<a href="javascript:openMPop();" class="btn small darkGreyMod">상세</a>
                                            <a href="javascript:void(0);" class="btn small pinkMod">삭제</a>
										</div>
									</td>
                                </tr>
                                <tr>
									<td>
										<div class="checkBoxCase">
											<input type="checkbox" name="" value="">
											<label></label>
										</div>
                                    </td>
                                    <td>
                                        <div>에이디치히얌</div>
										<div class="inListBtnGroup">  
										    <a href="javascript:void(0);" class="btn borderedSort">메모</a>
										</div> 
									</td>
                                    <td>곽반장</td>
                                    <td>111-11-1111</td>
                                    <td>도매업</td>
									<td>생활용품 도매업</td>
                                    <td>서울시 마포구 마포대로</td>
                                    <td>1</td>
                                    <td>6</td>
                                    <td>3</td>
									<!-- <td>0</td> -->
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="javascript:openMPop();" class="btn small darkGreyMod">상세</a>
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



<!-- :: open : ksg_20210216_1450 : [세무야] 등록 팝업창. -->
<div class="popup centerSort regUserPop">
	<div class="titleBox popupSort">
		<div>회원등록</div>
		<a href="javascript:closePop()" class="btn closeBtn"></a>
	</div>
	<div class="popupCon">
		<div class="section regSort">
			<!-- :: open : ksg_20210216_1532 : [세무야] 등록섹션 제목 파트. 여기서는 미사용. -->
			<!-- <div class="sectionHeadline">
				<div class="titleBox headLineSort">
                    <div class="titleText mainMod">회원관리</div>
					<div class="titleText subMod">회원등록</div>
				</div>
			</div> -->
			<!-- :: close : ksg_20210216_1532 : [세무야] 등록섹션 제목 파트. 여기서는 미사용. -->
			<div class="sectionCon scrollSort">
				<div class="setField regSort">
					<table class="regTable">
						<colgroup>
							<col style="width : 200px;">
							<col style="width : 600px;">
						</colgroup>
						<tbody>
						<tr>
							<th>분류</th>  
							<td>
								<div class="sbox shortMod2">
							    	<select>
							    		<option>일반회원</option>
							    		<option>개인사업자</option>
										<option>법인사업자</option>
							    	</select>
							    </div>
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
                            <th>이름</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="연락처를 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>연락처</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="연락처를 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>회사명</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="회사명을 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>사업자번호</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="사업자번호를 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
                            <th>회사 전화번호</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="회사 전화번호를 입력해주세요."> 
							</td>
                        </tr>
						<!-- :: open : ksg_20210216_1539 : [세무야] 업태 및 종목 등록 파트. 일단은 미사용. -->
                        <!-- <tr>
                            <th>업태</th>  
							<td>
                                <div class="sbox shortMod2">
							    	<select>
							    		<option>- 대분류 -</option>
							    		<option>대분류1</option>
							    	</select>
							    </div>
                                <div class="sbox shortMod2">
							    	<select>
							    		<option>- 소분류 -</option>
							    		<option>소분류1</option>
							    	</select>
							    </div>
								<input class="tbox singleNorm2 ml8" value="" placeholder="직접입력"> 
							</td>
                        </tr>
                        <tr>
                            <th>종목</th>  
							<td>
                                <div class="sbox shortMod2">
							    	<select>
							    		<option>- 대분류 -</option>
							    		<option>대분류1</option>
							    	</select>
							    </div>
                                <div class="sbox shortMod2">
							    	<select>
							    		<option>- 소분류 -</option>
							    		<option>소분류1</option>
							    	</select>
							    </div>
								<input class="tbox singleNorm2 ml8" value="" placeholder="직접입력"> 
							</td>
                        </tr> -->
						<!-- :: close : ksg_20210216_1539 : [세무야] 업태 및 종목 등록 파트. 일단은 미사용. -->
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
                        <tr>
                            <th>챗봇문의 수</th>  
							<td>
								<input class="tbox singleShort1" value="0" placeholder="" readonly>
							</td>
                        </tr>
                        <tr>
                            <th>전문가 요청 수</th>  
							<td>
								<input class="tbox singleShort1" value="8" placeholder="" readonly>
							</td>
                        </tr>
                        <tr>
                            <th>위험도 측정 수</th>  
							<td>
								<input class="tbox singleShort1" value="18" placeholder="" readonly>
							</td>
                        </tr>
					</table>
					<!-- :: open : ksg_20210216_1521 : [세무야] 입력파트 등록 버튼 그룹. 팝업에서는 미사용. -->
                    <!-- <div class="btnGroup bottomSort">
                        <a href="/manager/law" class="btn pageCancelMod">취소</a>
				    	<a href="/manager/law" class="btn pageConfirmMod">등록</a>
				    </div> -->
					<!-- :: close : ksg_20210216_1521 : [세무야] 입력파트 등록 버튼 그룹. 팝업에서는 미사용. -->
				</div>
			</div>
		</div>
		<div class="btnGroup underPopSort">
			<a href="javascript:closePop()" class="btn underPop_smoke">취소</a>
			<a href="javascript:choicePop()" class="btn underPop_orange">등록</a>
		</div>
	</div>
</div>
<!-- :: close : ksg_20210216_1450 : [세무야] 등록 팝업창. -->
<!-- :: open : ksg_20210216_1531 : [세무야] 상세정보 팝업창. -->
<div class="popup centerSort modiUserPop">
	<div class="titleBox popupSort">
		<div>회원상세</div>
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
							<th>분류</th>  
							<td>
								<div class="sbox shortMod2">
							    	<select>
							    		<option>일반회원</option>
							    		<option selected="">개인사업자</option>
										<option>법인사업자</option>
							    	</select>
							    </div>
							</td>
                        </tr>
						<tr>
							<th>아이디</th>  
							<td>
								<input class="tbox singleNorm2" value="dragonLwad" placeholder="아이디를 입력해주세요.">
                                <a href="javascript:void(0);" class="regTblBtn_inputRSort">중복확인</a>
							</td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>  
							<td>
								<input class="tbox singleNorm2" value="123***" placeholder="비밀번호를 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
                            <th>비밀번호 재입력</th>  
							<td>
								<input class="tbox singleNorm2" value="" placeholder="비밀번호를 한번 더 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
                            <th>이름</th>  
							<td>
								<input class="tbox singleNorm2" value="곽반장" placeholder="연락처를 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>연락처</th>  
							<td>
								<input class="tbox singleNorm2" value="010-123-1234" placeholder="연락처를 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>회사명</th>  
							<td>
								<input class="tbox singleNorm2" value="곽회사" placeholder="회사명을 입력해주세요."> 
							</td>
                        </tr>
						<tr>
                            <th>사업자번호</th>  
							<td>
								<input class="tbox singleNorm2" value="123-12-1234" placeholder="사업자번호를 입력해주세요."> 
							</td>
                        </tr>
                        <tr>
                            <th>회사 전화번호</th>  
							<td>
								<input class="tbox singleNorm2" value="02-1234-1234" placeholder="회사 전화번호를 입력해주세요."> 
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
                        <tr>
                            <th>챗봇문의 수</th>  
							<td>
								<input class="tbox singleShort1" value="0" placeholder="" readonly>
							</td>
                        </tr>
                        <tr>
                            <th>전문가 요청 수</th>  
							<td>
								<input class="tbox singleShort1" value="8" placeholder="" readonly>
							</td>
                        </tr>
                        <tr>
                            <th>위험도 측정 수</th>  
							<td>
								<input class="tbox singleShort1" value="18" placeholder="" readonly>
							</td>
                        </tr>
					</table>
				</div>
			</div>
		</div>
		<div class="btnGroup underPopSort">
			<a href="javascript:closePop()" class="btn underPop_smoke">취소</a>
			<a href="javascript:choicePop()" class="btn underPop_orange">저장</a>
		</div>
	</div>
</div>
<!-- :: close : ksg_20210216_1531 : [세무야] 상세정보 팝업창. -->


<script>
// :: open : ksg_20210216_1455 : [세무야] 등록 팝업창 오픈 스크립트.
function openPPop(){
	$('.contents').addClass('overlay');
	$('.popup.regUserPop').show();
};
// :: close : ksg_20210216_1455 : [세무야] 등록 팝업창 오픈 스크립트.


// :: open : ksg_20210216_1534 : [세무야] 수정 팝업창 오픈 스크립트.
function openMPop(){
	$('.contents').addClass('overlay');
	$('.popup.modiUserPop').show();
};
// :: close : ksg_20210216_1534 : [세무야] 수정 팝업창 오픈 스크립트.
</script>

</body>
</html>