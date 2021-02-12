<header>
	<div class="logoCase">
		<i></i>
	</div>
	<div class="btnGroup headerMenuSort">
		<a href="javascript:void(0);" class="btn <?php if($lCode == '01') echo 'activated';?>">대시보드</a>
		<a href="/manager/user" class="btn <?php if($lCode == '02') echo 'activated';?>">회원관리</a>
		<a href="/manager/expert" class="btn <?php if($lCode == '03') echo 'activated';?>">전문가관리</a>
		<a href="/manager/taxManage" class="btn <?php if($lCode == '04') echo 'activated';?>">세무관리</a>
		<a href="javascript:void(0);" class="btn <?php if($lCode == '05') echo 'activated';?>">솔루션관리</a>
		<a href="/manager/law" class="btn <?php if($lCode == '06') echo 'activated';?>">법령정보관리</a>
		<a href="javascript:void(0);" class="btn <?php if($lCode == '07') echo 'activated';?>">고객지원관리</a>
		<a href="javascript:void(0);" class="btn <?php if($lCode == '08') echo 'activated';?>">설정관리</a>
	</div>  
	<div class=" btnGroup headerRightSort">
		<a href="/manager/intro/login" class="btn logoutSort">로그아웃</a>
	</div>
</header>

<script>
// :: ksg_20200604_1132 single : 클릭하면 메뉴의 글씨 색상을 흰색으로 변경. 실 사용 파일에서는 지울 것. 
$(document).on('click', '.btnGroup.headerMenuSort .btn', function(){
	$('.btnGroup.headerMenuSort .btn').removeClass('activated');
	$(this).addClass('activated');
});
</script>