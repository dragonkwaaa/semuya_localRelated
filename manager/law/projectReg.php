<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'06';
$rCode 					=	'03';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/law/pages/law_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">법령정보관리</div>
						<div class="titleText subMod">프로젝트 설정</div>
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
								<th>프로젝트 아이디</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="아이디를 입력해주세요."> 
								</td>
                            </tr>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="javascript:Void(0);" class="btn pageCancelMod">취소</a>
					    	<a href="javascript:Void(0);" class="btn pageConfirmMod">설정</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>