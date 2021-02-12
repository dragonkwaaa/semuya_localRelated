<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'04';
$rCode 					=	'02';
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
						<div class="titleText subMod">모의측정설문 등록</div>
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
								<th>문의유형</th>  
								<td>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>유형</option>
								    		<option>유형1</option>
								    	</select>
								    </div>
								</td>
                            </tr>
                            <tr>
                                <th>제목</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="제목을 입력해주세요."> 
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
                                <th>등록일</th>  
								<td>
									<input class="tbox singleNorm2" value="2021-01-01 11:00:11" placeholder="" readonly> 
								</td>
                            </tr>
                            <tr>
                                <th>최근 수정일</th>  
								<td>
									<input class="tbox singleNorm2" value="2021-01-03 16:42:51" placeholder="" readonly> 
								</td>
                            </tr>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/taxManage" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/taxManage" class="btn pageConfirmMod">등록</a>
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