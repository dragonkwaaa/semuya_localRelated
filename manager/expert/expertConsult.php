<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'03';
$rCode 					=	'04';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/expert/pages/expert_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">전문가관리</div>
						<div class="titleText subMod">전문가 세무상담내역</div>
					</div>
				</div>
				<div class="sectionCon">
					<div class="setField searchSort">
						<table class="searchTable">
							<colgroup>
								<col width="10%">
								<col width="40%">
								<col width="50%">
							</colgroup>
							<tbody>
							<tr>
								<th>검색어</th>
								<td>
									<div class="sbox normMod1">
								    	<select>
								    		<option>전체</option>
								    	</select>
								    </div>
									<input class="tbox twinLong1 ml8" value="" placeholder="검색어를 입력해주세요.">
								</td>
								<td>
									<div class="relative"> 
										<div class="radioGroup searchSort">
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="payStat">
													<label></label>
												</div>
												<div class="radioTitle">미정산</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="payStat">
													<label></label>
												</div>
												<div class="radioTitle">정산완료</div>
											</div>
										</div>
									</div>
								</td>
                            </tr>
                            <tr>
								<th>등록일</th>
								<td colspan="2">
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
								<a href="javascript:void(0);" class="ctrlBtn_lSort">선택항목 정산</a>
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
									<col style="width:80px;">
									<col style="width:100px;">
									<col style="width:100px;">
									<col style="width:100px;">
									<col style="width:100px;">
									<col style="width:100px;">
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
									<th>전문가명</th>
									<th>고객 연락처</th>
                                    <th>고객 업체</th>
                                    <th>진행상태</th>
									<th>신청일</th>
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
                                    <td>곽반장(kwaddd)</td>
                                    <td>010-1234-5678</td>
                                    <td>에이디치히얌</td>
                                    <td>미완료</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<!-- :: open : ksg_20210216_1729 : [세무야] 상세 페이지로 연결되는 버튼. 여기서는 미사용. -->
											<!-- <a href="/manager/expert/expertConsultSpec" class="btn small darkGreyMod">상세</a> -->
											<!-- :: close : ksg_20210216_1729 : [세무야] 상세 페이지로 연결되는 버튼. 여기서는 미사용. -->
											<a href="javascript:void(0);" class="btn small darkGreyMod">상담완료</a>
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
                                    <td>곽반장(kwaddd)</td>
                                    <td>010-1234-5678</td>
                                    <td>에이디치히얌</td>
                                    <td>상담완료</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="javascript:void(0);" class="btn small darkGreyMod hide">완료</a>
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
                                    <td>곽반장(kwaddd)</td>
                                    <td>010-1234-5678</td>
                                    <td>에이디치히얌</td>
                                    <td>정산완료</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="javascript:void(0);" class="btn small darkGreyMod hide">완료</a>
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
</body>
</html>