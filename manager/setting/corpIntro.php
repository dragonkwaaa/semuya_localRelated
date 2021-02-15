<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'08';
$rCode 					=	'02';
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
						<div class="titleText subMod">회사소개 설정</div>
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
                                <th>회사소개</th>
                                <td>
                                    <textarea class="tarea singleLong1" placeholder="내용을 입력해주세요."></textarea>
								</td>
                            </tr>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="javascript:void(0);" class="btn pageCancelMod">취소</a>
					    	<a href="javascript:void(0);" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>