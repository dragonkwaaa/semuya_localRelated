<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>설정관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/setting" class="tabBtn">
					<span>사이트 설정</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/setting/corpIntro" class="tabBtn">
					<span>회사소개 설정</span>
				</a>
			</li>
		</ul>
	</div>
</nav>