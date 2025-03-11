# mingyupark-2.github.io

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>My First Heading-박민규</h1>
<p>My first paragraph.-PMG</p>

웹 개발(web development)은 인터넷(월드 와이드 웹)이나 인트라넷(사설망)을 위한 웹사이트를 개발하는 일을 가리킨다. 웹 개발은 가장 단순한 단일 정적 문서의 플레인 텍스트에서부터 가장 복잡한 웹 기반 인터넷 애플리케이션, 전자 비즈니스, 소셜 네트워크 서비스에 이르기까지 개발 범위가 다양하다. 일반적으로 웹 개발이라 부를 때 더 포괄적인 작업으로는 웹 디자인, 웹 콘텐츠 개발, 클라이언트 사이드/서버 사이드 스크립트 작업, 웹 서버 및 네트워크 보안 구성, 전자 상업 개발을 아우른다. 우리 일상과 밀접한 관계를 맺고 있는 인터넷 및 WWW 이해, 개발자로서의 웹 프로그래밍 이론과 관련 기술 습득, 웹 프로그래밍 언어 이해와, 이를 바탕으로 HTML&CSS과 Javascript를 살펴보고, PHP 프로그래밍 기법 학습, MySQL 연동을 통해 웹 프로그래밍에서 데이터베이스를 이용하는 방법 습득한다.
http://en.wikipedia.org/wiki/Web_development

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행 일정</title>
</head>
<body>

    <h1>여행 일정</h1>

    <ul>
        <li><strong>1일차:</strong> 영국 해리포터 성 방문</li>
        <li><strong>2일차:</strong> 타워 브릿지, 그리니치 천문대, 토트넘 핫스퍼 스타디움</li>
        <li><strong>3일차:</strong> 프랑스 에펠탑, 개선문</li>
        <li><strong>4일차:</strong> 루브르 박물관, 몽생미셸</li>
    </ul>

</body>
</html>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행 일정</title>
</head>
<body>

    <h1>여행 일정</h1>

    <table border="1">
        <thead>
            <tr>
                <th>일자</th>
                <th>일정</th>
                <th>관람 내용</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1일차</td>
                <td>영국 해리포터 성 방문</td>
                <td>
                    <ul>
                        <li>움직이는 계단체험</li>
                        <li>버터맥주 먹기</li>
                        <li>해리포터 성 축소 모형 관람</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>2일차</td>
                <td>타워 브릿지, 그리니치 천문대, 토트넘 핫스퍼 스타디움</td>
                <td>
                    <ul>
                        <li>타워 브릿지에서 사진 촬영</li>
                        <li>그리니치 천문대에서 본초 자오선 관람</li>
                        <li>토트넘 구장 안 관람</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>3일차</td>
                <td>프랑스 에펠탑, 개선문</td>
                <td>
                    <ul>
                        <li>에펠탑 구경과 사진 촬영</li>
                        <li>개선문 전망대에 올라가서 파리의 야경 구경</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>4일차</td>
                <td>루브르 박물관, 몽생미셸</td>
                <td>
                    <ul>
                        <li>루브르 박물관에서 모나리자 등 다양한 그림 작품 구경</li>
                        <li>몽생미셸의 야경 관람</li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행 일정</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }
        .column {
            width: 45%;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>여행 일정</h1>

    <div class="container">
        <div class="column">
            <h2>1일차 - 영국</h2>
            <p>해리포터 성 방문</p>
        </div>
        <div class="column">
            <h2>2일차 - 영국</h2>
            <p>타워 브릿지, 그리니치 천문대, 토트넘 핫스퍼 스타디움</p>
        </div>
    </div>

    <div class="container">
        <div class="column">
            <h2>3일차 - 프랑스</h2>
            <p>에펠탑, 개선문</p>
        </div>
        <div class="column">
            <h2>4일차 - 프랑스</h2>
            <p>루브르 박물관, 몽생미셸</p>
        </div>
    </div>

</body>
</html>

