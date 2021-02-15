<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'07';
$rCode 					=	'06';
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
						<div class="titleText subMod">뉴스기사 등록</div>
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
                                <th>제목</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="제목을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>뉴스주소</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="링크를 입력해주세요."> 
								</td>
                            </tr>
							</tbody>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/board/news" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/board/news" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>