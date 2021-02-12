<nav class="tabGroup leftSideSort">
	<div class="navCon">
		<ul class="leftMenuTab">
			<li class="firstTabSort">
				<a href="javascript:void(0);" class="tabBtn">
					<span>세무관리</span>
				</a>
            </li>
            <li class="subTabSort fstChd <?php if($rCode == '01') echo 'activated';?>">
                <a href="/manager/taxManage" class="tabBtn">
					<span>모의측정설문 목록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '02') echo 'activated';?>">
                <a href="/manager/taxManage" class="tabBtn">
					<span>모의측정설문 등록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '03') echo 'activated';?>">
                <a href="/manager/taxManage" class="tabBtn">
					<span>세무상품 목록</span>
				</a>
			</li>
            <li class="subTabSort fstChd <?php if($rCode == '04') echo 'activated';?>">
                <a href="/manager/taxManage" class="tabBtn">
					<span>세무상품 등록</span>
				</a>
			</li>
		</ul>
	</div>
</nav>