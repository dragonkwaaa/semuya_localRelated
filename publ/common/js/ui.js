// :: 로그인 팝업창 열기 스크립트.
$(document).on('click', '.tOnlyBtn.loginTopBtn', function(){
    $('.popup.loginSort').show();
    $('.container').addClass('overlay');
});
// :: 장바구니 팝업창 열기 스크립트.
$(document).on('click', '.iconBtn.myBagSort', function(){
    $('.popup.cartSort').show();
    $('.container').addClass('overlay');
});
// :: 장바구니 팝업창 열기 스크립트(아이콘 버튼 말고, 페이지 내의 통상적인 버튼으로).
$(document).on('click', '.bdBtn.myCartOpSort', function(){
    $('.popup.cartSort').show();
    $('.container').addClass('overlay');
});




// :: 장바구니 삭제 확인 팝업창 열기 스크립트.
$(document).on('click', '.popup .iconBtn.TrashIcon', function(){
    $('.uberPop.delSort').show();
    $('.container').addClass('uberlay');
});
// :: 장바구니 삭제 확인 팝업창 닫기 스크립트
$(document).on('click', '.closeUberBtn', function(){
	$('.uberPop').hide();
	$('.container').removeClass('uberlay');
});



// :: 로그인 팝업창의 회원/비회원 버튼 클릭 시 밑줄 표시.
$(document).on('click', '.popTopSelector.loginSort .bdBtn', function(){
    $('.popTopSelector.loginSort').children('.bdBtn').removeClass('activated');
    $(this).addClass('activated');
});

// :: 로그인 팝업창의 "회원" 버튼 클릭 시, 전용 입력 요소를 표시.
$(document).on('click', '.popTopSelector.loginSort .bdBtn.memberBtn', function(){
    $('.regGroup.logPopSort').children('.tBoxGroup.memberSort').removeClass('hide');
    $('.regGroup.logPopSort').children('.tBoxGroup.guestSort').addClass('hide');
    $('.regGroup.logPopSort').children('.chkBlock').removeClass('hide');
    // :: open : ksg_20201101_1844 : 회원 전용 "로그인" 버튼 표시하는 내용.
    $('.btnGroup.loginBotSort').children('.bgBtn.memberSort').removeClass('hide');
    $('.btnGroup.loginBotSort').children('.bgBtn.guestSort').addClass('hide');
    // :: close : ksg_20201101_1844 : 회원 전용 "로그인" 버튼 표시하는 내용.
});

// :: 로그인 팝업창의 "비회원" 버튼 클릭 시, 전용 입력 요소를 표시.
$(document).on('click', '.popTopSelector.loginSort .bdBtn.guestBtn', function(){
    $('.regGroup.logPopSort').children('.tBoxGroup.guestSort').removeClass('hide');
    $('.regGroup.logPopSort').children('.tBoxGroup.memberSort').addClass('hide');
    $('.regGroup.logPopSort').children('.chkBlock').addClass('hide');
    // :: open : ksg_20201101_1844 : 비회원 전용 "인증하기" 버튼 표시하는 내용.
    $('.btnGroup.loginBotSort').children('.bgBtn.memberSort').addClass('hide');
    $('.btnGroup.loginBotSort').children('.bgBtn.guestSort').removeClass('hide');
    // :: close : ksg_20201101_1844 : 비회원 전용 "인증하기" 버튼 표시하는 내용.

});
// :: 팝업 닫기 스크립트
$(document).on('click', '.closePopBtn', function(){
	$('.popup').hide();
	$('.container').removeClass('overlay');
});

// :: 팝업창 "취소" 버튼 클릭 시 팝업 닫기 스크립트
$(document).on('click', '.popup .cancelBtn', function(){
	$('.popup').hide();
	$('.container').removeClass('overlay');
});


// :: open : 모바일 슬라이드 햄버거 메뉴 스크립트. 
$(document).on('click', '.hamIconGroup.mobOnly', function(){
	$('.popup.hamPop').show();
	$('.container').addClass('overlay');
});
// :: close : 모바일 슬라이드 햄버거 메뉴 스크립트. 
