<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>솔루션관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/solution" class="tabBtn">
					<span>솔루션문의 목록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/solution" class="tabBtn">
					<span>솔루션 등록</span>
				</a>
			</li>
		</ul>
	</div>
</nav>