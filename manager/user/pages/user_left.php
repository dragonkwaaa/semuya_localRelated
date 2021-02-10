<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>회원관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/user" class="tabBtn">
					<span>회원 목록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/user/userReg" class="tabBtn">
					<span>회원 등록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/user" class="tabBtn">
					<span>세무조사위험진단 내역</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '04') echo 'activated';?>">
                <a href="/manager/user" class="tabBtn">
					<span>결제내역</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '05') echo 'activated';?>">
                <a href="/manager/user" class="tabBtn">
					<span>채팅상담 내역</span>
				</a>
			</li>
		</ul>
	</div>
</nav>