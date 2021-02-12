<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>전문가관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/expert" class="tabBtn">
					<span>전문가 목록</span>
				</a>
			</li>
            <li class="subTabSort <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/expert/expertReg" class="tabBtn">
					<span>전문가 등록</span>
				</a>
			</li>
            <li class="subTabSort <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/expert/offDay" class="tabBtn">
					<span>휴무일 설정</span>
				</a>
			</li>
            <li class="subTabSort <?php if($rCode == '04') echo 'activated';?>">
                <a href="/manager/expert/expertConsult" class="tabBtn">
					<span>전문가 세무상담내역</span>
				</a>
			</li>
		</ul>
	</div>
</nav>