<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/head.php';
$lCode					=	'04';
$rCode 					=	'02_2';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/common/pages/header.php'; ?>
	<div class="wrapper">
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/manager/expert/pages/expert_left.php'; ?>
		<div class="contents">
			<div class="section">
				<div class="sectionHeadline">
					<div class="titleBox headLineSort">
						<div class="titleText mainMod">전문가관리</div>
						<div class="titleText subMod">전문분야 관리</div>
					</div>
				</div>
				<div class="sectionCon">
					<div class="setField searchSort">
                        <!-- :: single : ksg_20210221_2154 : [세무야] 검색 파트 존재하던 곳. 불필요하므로 삭제. -->
                        <!-- :: starting : ksg_20210221_2156 : [세무야] 경력정보 등록 파트. -->
                        <table class="searchTable">
							<colgroup>
                                <col style="width : 200px;">
								<col style="width : 450px;">
								<col style="width : 800px;">
							</colgroup>
							<tbody>
							<tr>
                                <th>전문분야 등록</th>
								<td>
									<input class="tbox full" value="" placeholder="전문분야를 입력해주세요.">
								</td>
                                <td>
                                    <div class="btnGroup listControlSort">
								    	<a href="javascript:void(0);" class="btn small orangeMod">등록</a>
								    </div>
                                </td>
                            </tr>
							</tbody>
						</table>
					</div>
					<div class="listField">
                        <!-- :: single : ksg_20210221_2158 : [세무야] 테이블 상단 컨트롤 박스 있던 곳. 불필요 하므로 제거. -->
						<div class="tableBox">
							<table class="listTable regTiemTable">
								<colgroup>
									<col style="width:50px;">
									<col style="width:280px;">
                                    <col style="width:100px;">
                                    <col style="width:100px;">
                                    <col style="width:100px;">
                                    <col style="width:100px;">
                                    <col style="width:100px;">
								</colgroup>
								<thead>
								<tr>
									<th>순서</th>
									<th>전문분야</th>
									<th>상태</th>
                                    <th>적용대상 수</th>
                                    <th>관리</th>
								</tr>
								</thead>
								<tbody>
								<tr>
                                    <td>
                                        <!-- :: starting : ksg_20210221_2141 : [세무야] 순서 변경 버튼 파트. -->
                                        <div class="btnGroup_orderChange">
									        <a class="changeBtn listUpSort" href="javascript:void(0)">
									        	<i class="increaseIcon"></i>
									        </a>
        	            	                <a class="changeBtn listDownSort" href="javascript:void(0)">
									        	<i class="decreaseIcon"></i>
									        </a>
                                        </div>
									</td>
                                    <td>
                                        <input class="tbox full" value="국세청 38년 (국세청 조사국, 국제 조세국 등)" placeholder="경력정보를 입력해주세요.">
                                    </td>
                                    <td>
                                        <div class="radioGroup inList_vert1">
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus_1" value="0" checked="">
								    				<label></label>
								    			</div>
								    			<div class="radioTitle">사용</div>
								    		</div>
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus_1" value="1">
								    				<label></label>
								    			</div> 
								    			<div class="radioTitle">미사용</div>
								    		</div>
								    	</div>
								    </td>
                                    <td>42</td>
                                    <td>
										<div class="btnGroup listControlSort">
                                            <a href="javascript:void(0);" class="btn small darkGreyMod">저장</a>
                                            <a href="javascript:void(0);" class="btn small pinkMod">삭제</a>
										</div>
									</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btnGroup_orderChange">
									        <a class="changeBtn listUpSort" href="javascript:void(0)">
									        	<i class="increaseIcon"></i>
									        </a>
        	            	                <a class="changeBtn listDownSort" href="javascript:void(0)">
									        	<i class="decreaseIcon"></i>
									        </a>
                                        </div>
									</td>
                                    <td>
                                        <input class="tbox full" value="법인세 15년 / 세무조사 분야 13년" placeholder="경력정보를 입력해주세요.">
                                    </td>
                                    <td>
                                        <div class="radioGroup inList_vert1">
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus_2" value="0" checked="">
								    				<label></label>
								    			</div>
								    			<div class="radioTitle">사용</div>
								    		</div>
								    		<div class="radioCase">
								    			<div class="radioIconBox">
								    				<input type="radio" name="sellStatus_2" value="1">
								    				<label></label>
								    			</div> 
								    			<div class="radioTitle">미사용</div>
								    		</div>
								    	</div>
								    </td>
                                    <td>42</td>
                                    <td>
										<div class="btnGroup listControlSort">
                                            <a href="javascript:void(0);" class="btn small darkGreyMod">저장</a>
                                            <a href="javascript:void(0);" class="btn small pinkMod">삭제</a>
										</div>
									</td>
                                </tr>
								</tbody>
							</table>
						</div>
                        <!-- :: single : ksg_20210221_2207 : [세무야] 페이징 파트 존재하던 곳. 불필요하므로 제거. -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
// :: starting : ksg_20210221_2209 : [세무야] 테이블 내에서 화살표 클릭 시, 해당 내용을 위 또는 아래로 이동시키는 스크립트.
$(document).on("click", ".changeBtn.listUpSort", function(){
	var wrapper = $(this).closest('tr');
	wrapper.insertBefore(wrapper.prev());
})
$(document).on("click", ".changeBtn.listDownSort", function(){
	var wrapper = $(this).closest('tr');
	wrapper.insertAfter(wrapper.next());
})
</script>
</body>
</html>