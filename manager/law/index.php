<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'06';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/law/pages/law_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">법령정보관리</div>
						<div class="titleText subMod">법령목록</div>
					</div>
					<div class="btnGroup headLineSort rightSideMod">
						<a href="/manager/law/lawReg" class="btn">법령 등록</a>
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
                                    <input class="tbox twinShort" value="" placeholder="카테고리 키">
									<input class="tbox twinLong" value="" placeholder="카테고리명을 입력해주세요.">
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
									<col style="width:150px;">
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
									<th>카테고리키</th>
									<th>카테고리명</th>
									<th>분류1</th>
									<th>분류2</th>
                                    <th>문서번호</th>
                                    <th>납세자 회신번호</th>
                                    <th>제목</th>
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
                                    <td>0000000</td>
                                    <td>특수관계자</td>
                                    <td>분류1_1</td>
                                    <td>분류2_1</td>
									<td>102</td>
                                    <td>02-1234-1234</td>
                                    <td>특수관계자 접대비</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
										<div class="btnGroup listControlSort">
											<a href="/manager/law/lawReg" class="btn small darkGreyMod">상세</a>
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
                                    <td>0000000</td>
                                    <td>특수관계자</td>
                                    <td>분류1_1</td>
                                    <td>분류2_1</td>
									<td>102</td>
                                    <td>02-1234-1234</td>
                                    <td>특수관계자 접대비</td>
                                    <td>2021-01-01 11:00:34</td>
                                    <td>
                                        <div class="btnGroup listControlSort">
											<a href="/manager/law/lawReg" class="btn small darkGreyMod">상세</a>
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