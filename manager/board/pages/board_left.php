<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>고객지원관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/board/notice" class="tabBtn">
					<span>공지사항</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/board" class="tabBtn">
					<span>자주묻는질문</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/board" class="tabBtn">
					<span>자주묻는질문 등록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '04') echo 'activated';?>">
                <a href="/manager/board" class="tabBtn">
					<span>1:1문의</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '05') echo 'activated';?>">
                <a href="/manager/board" class="tabBtn">
					<span>뉴스기사</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '06') echo 'activated';?>">
                <a href="/manager/board" class="tabBtn">
					<span>뉴스기사 등록</span>
				</a>
			</li>
		</ul>
	</div>
</nav>