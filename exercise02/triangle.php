<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vẽ Tam Giác</title>
</head>
<body>
    <h2>Vẽ Tam Giác</h2>
    <form method="post">
        <label for="height">Nhập chiều cao của tam giác:</label>
        <input type="text" id="height" name="height" required>
        <input type="submit" value="Vẽ">
    </form>
    <hr>
    <?php
    function validate_input($number) {
        // Kiểm tra nếu đầu vào là số nguyên dương lớn hơn hoặc bằng 1
        return preg_match('/^[2-9]*$/', $number) ? $number : false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["height"];
        if (empty($number)) {
            echo "<span style='color: red;'>Vui lòng nhập một số</span>";
        } else {
            $valid_number = validate_input($number);
            if ($valid_number === false) {
                echo "<span style='color: red;'>Vui lòng nhập số nguyên dương lớn hơn 1</span>";
            } else {
                triangle($valid_number);
            }
        }
    }

    function triangle($n) {
        // Vẽ tam giác tăng dần
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        // Vẽ tam giác giảm dần
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
