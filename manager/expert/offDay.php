<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'03';
$rCode 					=	'03';
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
						<div class="titleText subMod">휴무일 설정</div>
					</div>
				</div>
				<div class="sectionCon">
					<div class="setField searchSort">
						<table class="searchTable">
							<colgroup>
								<col width="10%">
								<col width="40%">
								<col width="10%">
								<col width="40%">
							</colgroup>
							<tbody>
							<tr>
								<th>카테고리 키/명</th>
								<td>
                                    <input class="tbox twinShort1" value="" placeholder="카테고리 키">
									<input class="tbox twinLong1" value="" placeholder="카테고리명을 입력해주세요.">
								</td>
                                <th>문서번호</th>
								<td>
									<div class="relative">
                                        <input class="tbox singleNorm1" value="" placeholder="문서번호를 입력해주세요.">
									</div>
                                </td>
                                <!-- :: open : ksg_20210210_1504 : [세무야] 테이블 내 검색 버튼 내용. 불필요하므로 주석 처리. -->
                                <!-- <td rowspan="2">
									<a href="javascript:void(0);" class="searchBtn_fullHSort">검색</a>
								</td> -->
                                <!-- :: close : ksg_20210210_1504 : [세무야] 테이블 내 검색 버튼 내용. 불필요하므로 주석 처리. -->
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
									<th>연락처</th>
									<th>휴무일</th>
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
                                    <td>2021-01-04 ~ 2021-01-06</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="javascript:void(0);" class="btn small darkGreyMod">승인</a>
                                            <a href="javascript:void(0);" class="btn small pinkMod">취소</a>
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