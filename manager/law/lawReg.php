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
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">법령정보관리</div>
						<div class="titleText subMod">법령 등록</div>
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
								<th>카테고리키</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="카테고리 키를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>카테고리명</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="카테고리명을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>분류1</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="분류를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>분류2</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="분류를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>문서번호</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="문서번호를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>납세자회신번호</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="납세자회신번호를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>세목</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="세목을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>제목</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="제목을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>요지</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="요지를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>답변내용</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="내용을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>관련볍령</th>  
								<td>
									<input class="tbox singleLong1" value="" placeholder="내용을 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th class="vertTopSort">본문(PC)</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="내용을 입력해주세요."></textarea>
								</td>
                            </tr>
                            <tr>
                                <th class="vertTopSort">본문(스마트폰용)</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="내용을 입력해주세요."></textarea>
								</td>
                            </tr>
                            <!-- :: open : ksg_20210210_1740 : [세무야] 셀렉트박스. 여기서는 사용하지 않을 것이므로 주석으로 숨김처리. -->
                            <!-- <tr>
								<th>수신여부</th>
								<td>
									<div class="sbox shortMod">
										<select>
											<option>수신</option>
											<option>수신거부</option>
										</select>
									</div>
								</td>
                            </tr> -->
                            <!-- :: close : ksg_20210210_1740 : [세무야] 셀렉트박스. 여기서는 사용하지 않을 것이므로 주석으로 숨김처리. -->
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/law" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/law" class="btn pageConfirmMod">등록</a>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>