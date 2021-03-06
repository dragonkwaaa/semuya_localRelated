<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'06';
$rCode 					=	'02';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/user/pages/user_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">회원관리</div>
						<div class="titleText subMod">회원등록</div>
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
								<th>분류</th>  
								<td>
									<div class="sbox normMod1">
								    	<select>
								    		<option>일반회원</option>
								    		<option>개인사업자</option>
											<option>법인사업자</option>
								    	</select>
								    </div>
								</td>
                            </tr>
							<tr>
								<th>아이디</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="아이디를 입력해주세요.">
                                    <a href="javascript:void(0);" class="regTblBtn_inputRSort">중복확인</a>
								</td>
                            </tr>
                            <tr>
                                <th>비밀번호</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="비밀번호를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>비밀번호 재입력</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="비밀번호를 한번 더 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>이름</th>  
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
                                <th>회사명</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="회사명을 입력해주세요."> 
								</td>
                            </tr>
							<tr>
                                <th>사업자번호</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="사업자번호를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>회사 전화번호</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="회사 전화번호를 입력해주세요."> 
								</td>
                            </tr>
                            <tr>
                                <th>업태</th>  
								<td>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>- 대분류 -</option>
								    		<option>대분류1</option>
								    	</select>
								    </div>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>- 소분류 -</option>
								    		<option>소분류1</option>
								    	</select>
								    </div>
									<input class="tbox singleNorm2 ml8" value="" placeholder="직접입력"> 
								</td>
                            </tr>
                            <tr>
                                <th>종목</th>  
								<td>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>- 대분류 -</option>
								    		<option>대분류1</option>
								    	</select>
								    </div>
                                    <div class="sbox normMod1">
								    	<select>
								    		<option>- 소분류 -</option>
								    		<option>소분류1</option>
								    	</select>
								    </div>
									<input class="tbox singleNorm2 ml8" value="" placeholder="직접입력"> 
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
                                <th>챗봇문의 수</th>  
								<td>
									<input class="tbox singleShort1" value="0" placeholder="" readonly>
								</td>
                            </tr>
                            <tr>
                                <th>전문가 요청 수</th>  
								<td>
									<input class="tbox singleShort1" value="8" placeholder="" readonly>
								</td>
                            </tr>
                            <tr>
                                <th>위험도 측정 수</th>  
								<td>
									<input class="tbox singleShort1" value="18" placeholder="" readonly>
								</td>
                            </tr>
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