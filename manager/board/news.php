<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'07';
$rCode 					=	'05';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/board/pages/board_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">고객지원관리</div>
						<div class="titleText subMod">뉴스기사</div>
					</div>
					<div class="btnGroup headLineSort rightSideMod">
						<a href="/manager/board/newsReg" class="btn">뉴스등록</a>
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
                                    <input class="tbox twinShort1" value="" placeholder="카테고리 키">
									<input class="tbox twinLong1" value="" placeholder="카테고리명을 입력해주세요.">
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
									<col style="width:250px;">
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
									<th>제목</th>
									<th>섬네일</th>
									<th>뉴스주소</th>
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
                                    <td>비대면 세무상담의 선두주자</td>
                                    <td>
                                        <div class="imgCase_inList">
                                            <img src="/manager/common/img/radio_full.png">
                                        </div>
                                    </td>


                                    <td>http://daum.net/</td>
                                    <td>2021-01-12 14:15:00</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="/manager/board/newsReg" class="btn small darkGreyMod">상세</a>
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
                                    <td>비대면 세무상담의 선두주자</td>
                                    <td>
                                        <div class="imgCase_inList">
                                            <img src="/manager/common/img/radio_full.png" style="display : none;">
                                        </div>
                                    </td>


                                    <td>http://daum.net/</td>
                                    <td>2021-01-12 14:15:00</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="/manager/board/newsReg" class="btn small darkGreyMod">상세</a>
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