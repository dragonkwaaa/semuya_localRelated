<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'01';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/dash/pages/dash_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">대시보드</div>
						<div class="titleText subMod">대시보드1</div>
					</div>


					<div class="btnGroup headLineSort rightSideMod">
						<a href="/manager/board/noticeReg" class="btn">공지사항 등록</a>
					</div>





				</div>
				<div class="sectionCon">
					<div class="setField searchSort">
                        <div class="headLine listUpperSort pageTabMod">
							<div class="tabGroup">
								<a href="/manager/dash/dashboard_order" class="btn">주문현황</a>
								<a href="javascript:void(0);" class="btn activated">매입현황</a>
							</div>
						</div>
						<table class="searchTable">
							<colgroup>
								<col width="17%">
								<col width="*">
								<col width="17%">
								<col width="*">
							</colgroup>
							<tbody>
							<tr>
								<th>모델</th>
								<td>
									<input class="tbox full onlyNum" value="">
								</td>
								<th>고객명</th>
								<td>
									<input class="tbox full" value="">
								</td>
							</tr>
							<tr>
								<th>주문번호</th>
								<td>
									<div class="relative">
                                        <input class="tbox full" value="">
									</div>
                                </td>
                                <th>주문자</th>
                                <td>
                                    <div class="relative">
                                        <input class="tbox full nearBtnFullMod" value="">
										<a href="javascript:void(0);" class="btn rightSideSort">검색</a>
									</div>
                                </td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="listField goodsSort">
						<div class="headLine listUpperSort">
							<div class="leftPart">                                
                                <a href="javascript:void(0);" class="btn">선택해제</a>
                                <a href="javascript:void(0);" class="btn">선택삭제</a>
							</div>
						</div>
						<div class="tableBox goodsTableSort">
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
									<th>일일 기준 주문번호</th>
									<th>주문자</th>
									<th>주문합계</th>
									<th>결제방법</th>
                                    <th>주문상태</th>
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
                                    <td>강주원</td>
                                    <td>5,000</td>
                                    <td>신용카드 결제</td>
									<td>
										배송완료
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
                                    <td>강주원</td>
                                    <td>5,000</td>
                                    <td>신용카드 결제</td>
									<td>
										배송완료
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