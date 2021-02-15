<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'08';
$rCode 					=	'01';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/setting/pages/setting_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">설정관리</div>
						<div class="titleText subMod">사이트 설정</div>
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
                                <th>회사명</th>
                                <td>
									<div class="sbox normMod1">
								    	<select>
								    		<option>업태</option>
								    	</select>
								    </div>
                                    <input class="tbox singleNorm2 ml8" value="" placeholder="회사명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>대표자명</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="대표자명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>로고</th>
                                <td>
									<div class="imgUploadBox textOnlySort">
										<div class="fileNameCase"></div>
										<div class="filePholder">+ 첨부파일 추가</div>
										<input type="file" class="hide imgInput" accept="image/*,.pdf" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0)" class="btn wordSearchMod imgDownMod ml10" onclick="img_upload(this)">로고등록</a>
										<a href="javascript:void(0);" class="btn delMod imgDelMod ml10" onclick="delImg(this)">삭제</a>
									</div>
								</td>
                            </tr>
                            <tr>
								<th>주소</th>  
								<td>
                                    <input class="tbox twinShort2" value="" placeholder="우편번호">
									<input class="tbox twinLong2" value="" placeholder="주소">
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
                                <th>연락처</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="연락처를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>금지어관리</th>  
								<td>
                                    <!-- :: open : ksg_20210215_1735 : [세무야] 금지어 박스 파트. -->
                                    <div class="setGroup_word prohibit1">
                                        <div class="setWord">
                                            <span>금지어1</span>
                                            <a href="javascript:Void(0);" class="delBtn_setSort"></a>
                                        </div>
                                        <div class="setWord">
                                            <span>금지어2</span>
                                            <a href="javascript:Void(0);" class="delBtn_setSort"></a>
                                        </div>
                                    </div>
                                    <!-- :: close : ksg_20210215_1735 : [세무야] 금지어 박스 파트. -->
                                    <a href="javascript:void(0);" class="regTblBtn_inputRSort">추가</a>
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