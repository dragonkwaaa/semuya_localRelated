<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>법령정보관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/law" class="tabBtn">
					<span>법령목록</span>
				</a>
			</li>
            <li class="subTabSort <?php if($rCode == '02') echo 'activated';?>">
                <a href="javascript:void(0);" class="tabBtn">
					<span>법령 등록</span>
				</a>
			</li>
            <li class="subTabSort <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/law/projectReg" class="tabBtn">
					<span>프로젝트 설정</span>
				</a>
			</li>
		</ul>
	</div>
</nav>