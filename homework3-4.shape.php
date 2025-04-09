<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>도형 계산기</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        form { margin-bottom: 20px; }
        label, input, select { display: block; margin: 5px 0; }
    </style>
</head>
<body>

<h2>도형 계산기</h2>

<form method="post">
    <label>도형 선택:</label>
    <select name="shape" onchange="showInputs(this.value)">
        <option value="">-- 선택하세요 --</option>
        <option value="triangle">삼각형</option>
        <option value="rectangle">직사각형</option>
        <option value="circle">원</option>
        <option value="cuboid">직육면체</option>
        <option value="cylinder">원통</option>
        <option value="sphere">구</option>
    </select>

    <div id="inputs"></div>
    <input type="submit" value="계산">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shape = $_POST['shape'];
    $result = '';

    switch ($shape) {
        case 'triangle':
            $width = $_POST['width'];
            $height = $_POST['height'];
            $result = "삼각형 면적: " . ($width * $height / 2);
            break;
        case 'rectangle':
            $width = $_POST['width'];
            $height = $_POST['height'];
            $result = "직사각형 면적: " . ($width * $height);
            break;
        case 'circle':
            $radius = $_POST['radius'];
            $result = "원 면적: " . (pi() * pow($radius, 2));
            break;
        case 'cuboid':
            $width = $_POST['width'];
            $length = $_POST['length'];
            $height = $_POST['height'];
            $result = "직육면체 체적: " . ($width * $length * $height);
            break;
        case 'cylinder':
            $radius = $_POST['radius'];
            $height = $_POST['height'];
            $result = "원통 체적: " . (pi() * pow($radius, 2) * $height);
            break;
        case 'sphere':
            $radius = $_POST['radius'];
            $result = "구 체적: " . (4/3 * pi() * pow($radius, 3));
            break;
        default:
            $result = "도형을 선택하세요.";
    }

    echo "<h3>결과: $result</h3>";
}
?>

<script>
function showInputs(shape) {
    let html = '';
    switch(shape) {
        case 'triangle':
            html += '<label>밑변 (width): <input type="number" name="width" required></label>';
            html += '<label>높이 (height): <input type="number" name="height" required></label>';
            break;
        case 'rectangle':
            html += '<label>가로 (width): <input type="number" name="width" required></label>';
            html += '<label>세로 (height): <input type="number" name="height" required></label>';
            break;
        case 'circle':
        case 'sphere':
            html += '<label>반지름 (radius): <input type="number" name="radius" required></label>';
            break;
        case 'cuboid':
            html += '<label>가로 (width): <input type="number" name="width" required></label>';
            html += '<label>세로 (length): <input type="number" name="length" required></label>';
            html += '<label>높이 (height): <input type="number" name="height" required></label>';
            break;
        case 'cylinder':
            html += '<label>반지름 (radius): <input type="number" name="radius" required></label>';
            html += '<label>높이 (height): <input type="number" name="height" required></label>';
            break;
    }
    document.getElementById('inputs').innerHTML = html;
}
</script>

</body>
</html>
