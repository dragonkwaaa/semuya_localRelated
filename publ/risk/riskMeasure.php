<!-- :: ksg_1 = ksg_20201204_1919 -->
<!-- :: ksg_2 = ksg_20201205_1006 -->
<!-- :: ksg_3 = ksg_20201205_2037 -->
<!-- :: ksg_4 = ksg_20201220_1137 -->
<!-- :: ksg_5 = ksg_20201220_2049 -->
<!-- :: ksg_6 = ksg_20201226_2035 -->
<!-- :: ksg_7 = ksg_20201227_1754 -->
<!DOCTYPE html>
<html lang="ko">
<?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/head.php';
$pgCode					=	'03';
?>
<body>
<div class="container">
	<?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/header.php';?>
	<div class="contents">
        <!-- :: open : ksg_1 : [세무야] 위험도 측정 페이지 상단의 단일 이미지 배너 파트. -->
        <div class="imgBannerGroup pgTopSort">
            <img class="bannerImg absoluteCSort" alt="" src="/publ/common/img/topSliderImg_3.png">
        </div>
        <!-- :: close : ksg_1 : [세무야] 위험도 측정 페이지 상단의 단일 이미지 배너 파트. -->
        <!-- :: open : ksg_6 : [세무야] 모의진단 입력 파트. -->
        <div class="mainCon userRegSort">
		    <div class="section measureSort">
                <!-- :: open : ksg_7 : [세무야] 페이지 제목 파트. (가운데 정렬 버전) -->
                <div class="titleBox sectCSort">
                    <div>세무진단표 측정</div>
                    <div class="subTitle">세무조사 위험도를 측정해보세요.</div>
                </div>
                <!-- :: close : ksg_7 : [세무야] 페이지 제목 파트. (가운데 정렬 버전) -->
                <!-- :: open : ksg_7 : [세무야] 각 문단의 제목 파트. 사용할지도 모르므로 주석으로 숨겨놓음. -->
                <!-- <div class="titleBox sectSort">
                    <div>기초 검사</div>
                </div> -->
                <!-- :: close : ksg_7 : [세무야] 각 문단의 제목 파트. 사용할지도 모르므로 주석으로 숨겨놓음. -->
                <div class="regGroup measureSort">



                    <!-- :: open : ksg_7 : [세무야] 라디오 박스 그룹. 라디오 동그라미가 순번으로 표시되는 버전. -->
                    <div class="tBoxGroup">


                        <!-- :: open : ksg_7 : [세무야] 각 측정 항목에 붙는 소제목 파트. -->
                        <div class="titleBox segMinSort">
                            <div>영위업종</div>
                            <!-- :: open : ksg_7 : [세무야] 소제목의 서브제목 파트. 사용할지도 모르므로 주석으로 숨겨놓음. -->
                            <!-- <div class="subTitle">4지선다 문항입니다.</div> -->
                            <!-- :: close : ksg_7 : [세무야] 소제목의 서브제목 파트. 사용할지도 모르므로 주석으로 숨겨놓음. -->
                        </div>
                        <!-- :: close : ksg_7 : [세무야] 각 측정 항목에 붙는 소제목 파트. -->


                        <div class="radioGroup numCountSort">
							<div class="radioCase">
								<div class="radioIconBox">
									<input type="radio" name="certifyCheck" value="0" checked="">
									<label>1</label>
								</div>
								<div class="radioTitle">제조・수출 등</div>
							</div>
							<div class="radioCase">
								<div class="radioIconBox">
									<input type="radio" name="certifyCheck" value="1">
									<label>2</label>
								</div>
								<div class="radioTitle">일반 업종 기타이외</div>
                            </div>
                            <div class="radioCase">
								<div class="radioIconBox">
									<input type="radio" name="certifyCheck" value="1">
									<label>3</label>
								</div>
								<div class="radioTitle">신종・호황업종</div>
                            </div>
                            <div class="radioCase">
								<div class="radioIconBox">
									<input type="radio" name="certifyCheck" value="1">
									<label>4</label>
								</div>
								<div class="radioTitle">고소득자 영업</div>
                            </div>
						</div>
                        <div class="tipBox leftClosed redSort">* 4개 중 하나를 골라주세요.</div>
                    </div>
                    <!-- :: close : ksg_7 : [세무야] 라디오 박스 그룹. 라디오 동그라미가 순번으로 표시되는 버전. -->

                    <!-- :: open : ksg_7 : [세무야] 비대칭 인풋창 구성 파트. 짧은 인풋 + 긴 인풋 구성. -->
                    <div class="tBoxGroup">
                        <div class="titleBox segMinSort">
                            <div>최근 3년 이내 1,000만원 이상의 현금 입출금 횟수와 금액 기재</div>
                        </div>
                        <input class="tbox shortSort" placeholder="횟수"/>
                        <input class="tbox normSort horizGapSort" placeholder="금액"/>
                        <div class="tipBox leftClosed redSort">* 횟수와 금액 모두 기재해 주세요.</div>
                    </div>
                    <!-- :: close : ksg_7 : [세무야] 비대칭 인풋창 구성 파트. 짧은 인풋 + 긴 인풋 구성. -->
                    <!-- :: open : ksg_7 : [세무야] 단일 드롭박스 (긴 버전) -->
                    <div class="tBoxGroup">
                        <div class="titleBox segMinSort">
                            <div>업종</div>
                        </div>
                        <select class="sbox fullSort">
                            <option>-선택-</option>
                        </select>
                        <div class="tipBox leftClosed redSort">
                            * 업종을 선택해 주세요.
                         </div>
                    </div>
                    <!-- :: close : ksg_7 : [세무야] 단일 드롭박스 (긴 버전) -->
                    <!-- :: open : ksg_7 : [세무야] 단일 드롭박스 (짧은 버전) -->
                    <div class="tBoxGroup">
                        <div class="titleBox segMinSort">
                            <div>세무조사 경험</div>
                        </div>
                        <select class="sbox fullSort">
                            <option>-선택-</option>
                        </select>
                        <div class="tipBox leftClosed redSort">
                            * 세무조사 경험 여부를 선택해주세요..
                         </div>
                    </div>
                    <!-- :: close : ksg_7 : [세무야] 단일 드롭박스 (짧은 버전) -->



                    <!-- :: open : ksg_7 : [세무야] 다중 드롭박스(제목 2개 + 드롭박스 2개 구조) -->
                    <div class="tBoxGroup halfSort">
                        <div class="titleBox segMinSort">
                            <div>세무조사 경험</div>
                        </div>
                        <select class="sbox fullSort">
                            <option>-선택-</option>
                        </select>
                        <div class="tipBox leftClosed redSort">
                            * 세무조사 경험 여부를 선택해주세요..
                         </div>
                    </div>
                    <div class="tBoxGroup halfSort">
                        <div class="titleBox segMinSort">
                            <div>세무조사 경험</div>
                        </div>
                        <select class="sbox fullSort">
                            <option>-선택-</option>
                        </select>
                        <div class="tipBox leftClosed redSort">
                            * 세무조사 경험 여부를 선택해주세요..
                         </div>
                    </div>
                    <!-- :: close : ksg_7 : [세무야] 다중 드롭박스(제목 2개 + 드롭박스 2개 구조) -->













                
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="아이디"/>
                        <div class="tipBox redSort">4개 중 하나를 골라주세요.</div>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="비밀번호"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="비밀번호 확인"/>
                    </div>
                </div>







                <!-- :: open : ksg_5 : [세무야] 회원가입 페이지 두번째 인풋 그룹 파트. -->
                <div class="titleBox sectSort">
                    <div>개인정보 입력</div>
                    <!-- :: single : [폰스] 모바일 단계 구분 플랫라인 있던 곳. -->
                </div>
                <div class="regGroup joinSort">
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="이름"/>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="휴대폰번호"/>
                        <a href="javascript:void(0);" class="bdBtn">인증번호 발송</a>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="인증번호"/>
                        <a href="javascript:void(0);" class="bgBtn">인증하기</a>
                        <div class="tipBox tCount">2:29</div>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="휴대폰번호"/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="주소"/>
                    </div>
                    <!-- ::  single : ksg_5 : [폰스] 우편번호 검색 있던 곳. -->
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="나머지 주소를 입력해주세요."/>
                    </div>
                    <div class="tBoxGroup">
                        <input class="tbox" placeholder="이메일"/>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="휴대폰번호 ('-'빼고 입력)"/>
                        <a href="javascript:void(0);" class="bgBtn">인증</a>
                    </div>
                    <div class="tBoxGroup btnMixSort">
                        <input class="tbox" placeholder="인증번호"/>
                        <a href="javascript:void(0);" class="bgBtn">완료</a>
                        <div class="tipBox tCount">2:29</div>
                    </div>
                    <div class="tipBox blackSort">인증되었습니다.</div>
                </div>
                <!-- :: close : ksg_5 : [세무야] 회원가입 페이지 두번째 인풋 그룹 파트. -->










                
                <div class="btnGroup regBotSort">
                    <a href="/publ/" class="bgBtn">가입 완료</a>
                </div>
            </div>
        </div>
        <!-- :: close : ksg_6 : [세무야] 모의진단 입력 파트. -->
        <a href="javascript:Void(0);" class="icBtn rtFloat"></a>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] .  '/publ/common/pages/footer.php';?>
</div>
<script>
</script>
</body>
</html>