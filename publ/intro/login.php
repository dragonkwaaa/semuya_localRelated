<!-- :: ksg_1 = ksg_20201204_1919 -->
<!-- :: ksg_2 = ksg_20201205_1006 -->
<!-- :: ksg_3 = ksg_20201205_2037 -->
<!-- :: ksg_4 = ksg_20201220_1137 -->
<!-- :: ksg_5 = ksg_20201220_2049 -->
<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/head.php';
$pgCode					=	'03';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/header.php';?>
	<div class="contents">
        <!-- :: open : ksg_4 : [세무야] 로그인 페이지 상단의 단일 이미지 배너 파트. -->
        <div class="imgBannerGroup pgTopSort">
            <img class="bannerImg absoluteCSort" alt="" src="/publ/common/img/topSliderImg_4.png">
        </div>
        <!-- :: close : ksg_4 : [세무야] 로그인 페이지 상단의 단일 이미지 배너 파트. -->
        <!-- :: open : ksg_5 : [세무야] 로그인 박스 파트. -->
        <div class="section loginSort">
            <div class="titleBox sectCSort">
                LOGIN
            </div>
            <div class="logInfoBox">
                <div class="regGroup loginSort">
                    <div class="tBoxGroup memberSort fstChd">
                        <input class="tbox" placeholder="아이디">
                        <div class="tipBox redSort">* 아이디를 입력해주세요.</div>
                    </div>
                    <div class="tBoxGroup memberSort">
                        <input class="tbox" placeholder="비밀번호">
                    </div>
                    <!-- :: open : ksg_20201101_1844 open : dev 요청에 따라 비회원 로그인에서 불필요한 주문번호를 제거하는 내용. -->
                    <!-- <div class="tBoxGroup guestSort hide">
                        <input class="tbox" placeholder="주문번호">
                    </div> -->
                    <!-- :: close : ksg_20201101_1844 open : dev 요청에 따라 비회원 로그인에서 불필요한 주문번호를 제거하는 내용. -->
                    <div class="tBoxGroup guestSort hide">
                        <input class="tbox" placeholder="휴대폰번호 (‘-’없이 숫자만 입력)">
                    </div>
                    <div class="chkBlock">
                        <label>
                            <input type="checkbox" value="" name="logStay" class="">
                            <span>로그인 유지</span>
                        </label>
                    </div>
                </div>
                <div class="btnGroup loginBotSort">
                    <!-- :: open : ksg_20201101_1844 : dev 요청에 따라 비회원 로그인의 버튼 명칭을 "인증하기" 로 표시되게 하는 내용. -->
                    <!-- :: open : 기존 내용 파트. -->
                    <!-- <a href="javascript:void(0);" class="bgBtn">로그인</a> -->
                    <!-- :: close : 기존 내용 파트. -->    
                    <!-- :: open : 변경 내용 파트. -->
                    <a href="javascript:void(0);" class="bgBtn memberSort">로그인</a>
                    <a href="javascript:void(0);" class="bgBtn guestSort hide">인증하기</a>
                    <!-- :: close : 변경 내용 파트. -->
                    <!-- :: close : ksg_20201101_1844 : dev 요청에 따라 비회원 로그인의 버튼 명칭을 "인증하기" 로 표시되게 하는 내용. -->                    
                </div>
                <div class="linkToGroup logSort">
                    <a href="javascript:void(0);" class="btn">아이디찾기</a>
                    <span class="bulkheadCell"></span>
                    <a href="javascript:void(0);" class="btn">비밀번호찾기</a>
                </div>
                <!-- :: single : ksg_5 : [폰스] 간편 로그인 버튼이 있던 곳. -->
            </div>
            <!-- :: open : ksg_5 : [세무야] 회원가입 버튼 파트. -->
            <div class="btnGroup logBoxBotSort">
                <a class="bgBtn" href="/publ/intro/join">회원가입</a>
            </div>
            <!-- :: close : ksg_5 : [세무야] 회원가입 버튼 파트. -->
        </div>
        <!-- :: close : ksg_5 : [세무야] 로그인 박스 파트. -->
        <a href="javascript:Void(0);" class="icBtn rtFloat"></a>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/footer.php';?>
</div>
<script>
</script>
</body>
</html>