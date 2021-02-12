<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'04';
$rCode 					=	'04';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/taxManage/pages/taxManage_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">세무관리</div>
						<div class="titleText subMod">세무상품 등록</div>
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
								<th>상품명</th>  
								<td>
                                    <input class="tbox singleNorm2" value="" placeholder="상품명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>상품가격</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="상품가격을 숫자로만 입력해주세요.">
                                    <span class="measureGaugeTxt">원</span>
								</td>
                            </tr>
                            <tr>
								<th>연락처</th>  
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
								<th>이름</th>  
								<td>
                                    <input class="tbox singleNorm2" value="" placeholder="이름을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
								<th>상품 옵션</th>  
								<td>
                                    <div class="optionRegComplex">
                                        <div class="vertCase_inReg">
                                            <input class="tbox singleNorm2" value="" placeholder="옵션명"> 
                                            <input class="tbox twinShort2 ml8" value="" placeholder="가격">
                                            <span class="measureGaugeTxt leftTightSort">원</span>
                                            <a href="javascript:void(0);" class="regTblBtn_inputRSort leftLooseSort">등록</a>
                                        </div>
                                        <div class="vertCase_inReg">
                                            <input class="tbox singleNorm2" value="옵션1" placeholder="옵션명"> 
                                            <input class="tbox twinShort2 ml8" value="1,000" placeholder="가격">
                                            <span class="measureGaugeTxt leftTightSort">원</span>
                                            <a href="javascript:void(0);" class="regTblBtn_inputRSort leftLooseSort">삭제</a>
                                        </div>
                                        <div class="vertCase_inReg">
                                            <input class="tbox singleNorm2" value="옵션2" placeholder="옵션명"> 
                                            <input class="tbox twinShort2 ml8" value="21,000" placeholder="가격">
                                            <span class="measureGaugeTxt leftTightSort">원</span>
                                            <a href="javascript:void(0);" class="regTblBtn_inputRSort leftLooseSort">삭제</a>
                                        </div>
                                    </div>
								</td>
                            </tr>
                            <tr>
                                <th>첨부파일</th>
                                <td>
									<div class="imgUploadBox textOnlySort">
										<div class="fileNameCase"></div>
										<div class="filePholder">+ 첨부파일 추가</div>
										<input type="file" class="hide imgInput" accept="image/*,.pdf" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0)" class="btn wordSearchMod imgDownMod ml10" onclick="img_upload(this)">파일등록</a>
										<a href="javascript:void(0);" class="btn delMod imgDelMod ml10" onclick="delImg(this)">삭제</a>
									</div>
								</td>
                            </tr>
                            <tr>
                                <th>사용유무</th>  
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
                            </tr>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/manageGoods" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/manageGoods" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/manager/common/js/exif-js.js"></script>
<script src="/manager/common/js/imgSet.js"></script>
</body>
</html>