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
			<!-- :: open : ksg_20210216_1654 : [세무야] 회원 등록 페이지로 연결되는 버튼. 일단은 미사용. -->
            <!-- <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/user/userReg" class="tabBtn">
					<span>회원 등록</span>
				</a>
			</li> -->
			<!-- :: close : ksg_20210216_1654 : [세무야] 회원 등록 페이지로 연결되는 버튼. 일단은 미사용. -->
            <li class="subTabSort fstChd <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/user/userMeasure" class="tabBtn">
					<span>세무조사위험진단 내역</span>
				</a>
			</li>
			<!-- :: open : ksg_20210216_1619 : [세무야] 결제내역 페이지 연결 버튼. 결제 파트를 개별 헤드메뉴로 빼내고, 이것은 미사용. -->
            <!-- <li class="subTabSort fstChd <?php if($rCode == '04') echo 'activated';?>">
                <a href="/manager/user/userPay" class="tabBtn">
					<span>결제내역</span>
				</a>
			</li> -->
			<!-- :: close : ksg_20210216_1619 : [세무야] 결제내역 페이지 연결 버튼. 결제 파트를 개별 헤드메뉴로 빼내고, 이것은 미사용. -->
            <li class="subTabSort fstChd <?php if($rCode == '05') echo 'activated';?>">
                <a href="/manager/user/userConsulting" class="tabBtn">
					<span>채팅상담 내역</span>
				</a>
			</li>
		</ul>
	</div>
</nav>