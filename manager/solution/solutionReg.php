<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'05';
$rCode 					=	'02';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/solution/pages/solution_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">솔루션관리</div>
						<div class="titleText subMod">솔루션 등록</div>
					</div>
				</div>
				<div class="sectionCon">
					<div class="setField regSort">
						<table class="regTable">
							<colgroup>
								<col style="width : 100px;">
								<col style="width : 900px;">
							</colgroup>
							<tbody>
                            <tr>
                                <th>고객명</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="고객명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>고객 아이디</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="고객 아이디를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>고객 연락처</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="고객 연락처를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>고객 업체</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="고객 업체를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>직전3개년매출액</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="직전3개년매출액을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>직원 수</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="직원 수를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>담당자명</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="담당자명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>고객 연락처</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="고객 연락처를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>문의항목</th>  
								<td>
                                    <div class="inquRegComplex">
                                        <div class="vertCase_inReg">
									        <input class="tbox twinLong2" value="" placeholder="문의항목">
                                            <a href="javascript:void(0);" class="regTblBtn_inputRSort">삭제</a>
                                        </div>
                                        <div class="vertCase_inReg">
									        <input class="tbox twinLong2" value="" placeholder="문의항목">
                                            <a href="javascript:void(0);" class="regTblBtn_inputRSort">추가</a>
                                        </div>
                                    </div>
								</td>
                            </tr>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/solution" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/solution" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>