<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'03';
$rCode 					=	'02';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/expert/pages/expert_left.php'; ?>
		<div class="contents">
			<div class="section regSort">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
                        <div class="titleText mainMod">전문가관리</div>
						<div class="titleText subMod">전문가 등록</div>
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
                                <th>직함</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="직함을 입력해주세요."> 
								</td>
                            </tr>
							<tr>
								<th>대표문구</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="대표문구를 입력해주세요.">
								</td>
                            </tr>
							<!-- :: open : ksg_20210216_1649 : [세무야] 경력 입력창 파트. 단순 인풋 버전. -->
							<tr>
                                <th>경력1</th>  
								<td>
									<input class="tbox singleNorm2 ml8" maxlength="25" value="" placeholder="경력을 입력해주세요(최대 25자)."> 
								</td>
                            </tr>
                            <tr>
                                <th>경력2</th>  
								<td>
									<input class="tbox singleNorm2 ml8" maxlength="25" value="" placeholder="경력을 입력해주세요(최대 25자)."> 
								</td>
                            </tr>
							<tr>
                                <th>경력3</th>  
								<td>
									<input class="tbox singleNorm2 ml8" maxlength="25" value="" placeholder="경력을 입력해주세요(최대 25자)."> 
								</td>
                            </tr>
							<!-- :: close : ksg_20210216_1649 : [세무야] 경력 입력창 파트. 단순 인풋 버전. -->
							<!-- :: open : ksg_20210216_1648 : [세무야] 학력 등록 파트. 드롭박스 포함된 버전. 여기서는 미사용. -->
                            <!-- <tr>
                                <th>학력1</th>  
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
                                <th>학력2</th>  
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
                                <th>학력3</th>  
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
                            </tr> -->
							<!-- :: close : ksg_20210216_1648 : [세무야] 학력 등록 파트. 드롭박스 포함된 버전. 여기서는 미사용. -->
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
                                <th>규모</th>  
								<td>
									<input class="tbox singleNorm2" value="" placeholder="매출액을 숫자로만 입력해주세요.">
								</td>
                            </tr>
							<!-- :: open : ksg_20210216_1643 : [세무야] 담당영역(전문분야) 파트. 체크박스로 구성된 버전. -->
							<tr>
                                <th>전문분야</th>  
								<td>
									<div class="relative"> 
										<div class="radioGroup searchSort">
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">세무조사대응</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">종합소득세</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">부가가치세</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">양도소득세</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">종합부동산세</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">상속세/증여세</div>
											</div>
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">법인세</div>
											</div> 
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">국세조세</div>
											</div> 
											<div class="radioCase">
												<div class="radioIconBox">
													<input type="checkbox" name="expertType">
													<label></label>
												</div>
												<div class="radioTitle">기타</div>
											</div> 
										</div>
									</div>
								</td>
                            </tr>
							<!-- :: close : ksg_20210216_1643 : [세무야] 담당영역(전문분야) 파트. 체크박스로 구성된 버전. -->
							<!-- :: open : ksg_20210216_1640 : [세무야] 담당영역(전문분야) 파트. 드롭박스 분류 구분 버전. 여기서는 미사용. -->
                            <!-- <tr>
                                <th>담당영역</th>  
								<td>
                                    <div class="vertCase_inReg fstChd">
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
                                    </div>
                                    <div class="vertCase_inReg">
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
                                    </div>
                                    <div class="vertCase_inReg">
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
                                    </div>
								</td>
                            </tr> -->
							<!-- :: close : ksg_20210216_1640 : [세무야] 담당영역(전문분야) 파트. 드롭박스 분류 구분 버전. 여기서는 미사용. -->
							<!-- :: open : ksg_20210216_1646 : [세무야] 경력관리, 포트폴리오 텍스트 에어리어 파트. 일단은 미사용. -->
                            <!-- <tr>
                                <th class="vertTopSort">경력관리</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="경력사항을 입력해주세요."></textarea>
								</td>
                            </tr>
                            <tr>
                                <th class="vertTopSort">포트폴리오</th>  
								<td>
                                    <textarea class="tarea singleLong1" placeholder="포트폴리오를 등록해주세요."></textarea>
                                    <div class="imgUploadBox textOnlySort mt10">
										<div class="fileNameCase"></div>
										<div class="filePholder">+ 첨부파일 추가</div>
										<input type="file" class="hide imgInput" accept="image/*,.pdf" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0)" class="btn wordSearchMod imgDownMod ml10" onclick="img_upload(this)">업로드</a>
										<a href="javascript:void(0);" class="btn delMod imgDelMod ml10" onclick="delImg(this)">삭제</a>
									</div>
								</td>
                            </tr> -->
							<!-- :: close : ksg_20210216_1646 : [세무야] 경력관리, 포트폴리오 텍스트 에어리어 파트. 일단은 미사용. -->
                            <!-- :: open : ksg_20210212_1358 : [세무야] 단독 tr 버전 이미지 업로드 기능. th는 공간을 차지하되, 글자는 보이지 않도록 한 버전. 여기서는 사용하지 않으므로 주석으로 숨김 처리. -->
                            <!-- <tr>
                                <th class="voidSpace_invis">파일 업로드</th>
                                <td>
									<div class="imgUploadBox textOnlySort">
										<div class="fileNameCase"></div>
										<div class="filePholder">+ 첨부파일 추가</div>
										<input type="file" class="hide imgInput" accept="image/*,.pdf" name="img_1" onchange="img_sel(this, event)">
										<a href="javascript:void(0)" class="btn wordSearchMod imgDownMod" onclick="img_upload(this)">업로드</a>
										<a href="javascript:void(0);" class="btn delMod imgDelMod ml10" onclick="delImg(this)">삭제</a>
									</div>
								</td>
                            </tr> -->
                            <!-- :: close : ksg_20210212_1358 : [세무야] 단독 tr 버전 이미지 업로드 기능. th는 공간을 차지하되, 글자는 보이지 않도록 한 버전. 여기서는 사용하지 않으므로 주석으로 숨김 처리. --> 
							<tr>
                        	    <th>상담완료 수</th>  
								<td>
									<input class="tbox singleShort1" value="43" placeholder="" readonly="">
								</td>
                        	</tr>
							</tbody>
						</table>
                        <div class="btnGroup bottomSort">
                            <a href="/manager/expert" class="btn pageCancelMod">취소</a>
					    	<a href="/manager/expert" class="btn pageConfirmMod">등록</a>
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