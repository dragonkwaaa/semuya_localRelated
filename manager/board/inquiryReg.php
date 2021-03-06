<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'07';
$rCode 					=	'04';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/board/pages/board_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">고객지원관리</div>
						<div class="titleText subMod">1:1문의 상세</div>
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
                                <th>문의 구분</th>  
								<td>
									<div class="sbox normMod1">
								    	<select>
								    		<option>세무상담</option>
								    	</select>
								    </div>
								</td>
                            </tr>
                            <tr>
                                <th>제목</th>  
								<td>
									<input class="tbox singleLong1" value="세무상담 과정을 알려주세요" placeholder="제목을 입력해주세요."> 
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
                                <th class="vertTopSort">질문내용</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="질문내용을 입력해주세요." readonly="">세무상담 과정이 어떻게 되는지 알려주시면 감사하겠습니다.</textarea>
								</td>
                            </tr>
                            <tr>
                                <th class="vertTopSort">답변내용</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="답변내용을 입력해주세요."></textarea>
								</td>
                            </tr>
							</tbody>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/board/inquiry" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/board/inquiry" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>