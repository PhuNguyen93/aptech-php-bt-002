<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kiểm tra năm nhuận</title>
</head>

<body>
    <h2>Kiểm tra năm nhuận</h2>
    <form method="post">
        <label for="number">Nhập năm:</label>
        <input type="text" id="number" name="number">
        <input type="submit">
    </form>
    <hr>
    <?php
    function isLeapYear($n)
    {
        if (($n % 4 == 0 && $n % 100 != 0) || $n % 400 == 0) {
            return true;
        }
        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["number"])) {
            echo  "Vui lòng nhập một số";
        } else {
            $number = $_POST["number"];
            if (!preg_match('/^[1-9][0-9]*$/', $number)) {
                echo "Chỉ chấp nhận số nguyên dương";
            } else {
                if (isLeapYear($number)) {
                    echo "$number là năm nhuận";
                } else {
                    echo "$number không phải là năm nhuận.";
                }
            }
        }
    }
    ?>
</body>

</html>