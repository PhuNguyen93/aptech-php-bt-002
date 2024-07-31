<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kiểm tra Số Nguyên Tố</title>
</head>
<body>
    <h2>Kiểm tra Số Nguyên Tố</h2>
    <form method="post">
        <label for="number">Nhập một số:</label>
        <input type="text" id="number" name="number" >
        <input type="submit" value="Kiểm tra">
    </form>
    <hr>
    <?php
        function isPrime($number) {
            if($number <2) return false;
            for($i = 2; $i <= sqrt($number); $i++) {
                if($number % $i == 0) return false;
            }
            return true;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            

            if (empty($_POST["number"])) {
                echo  "Vui lòng nhập một số";
            } else {
                $number = $_POST["number"];
                if (!preg_match('/^[1-9][0-9]*$/', $number)) {
                    echo "Chỉ chấp nhận số nguyên dương";
                } else {
                    if (isPrime($number)) {
                        echo "$number là số nguyên tố.";
                    } else {
                        echo "$number không phải là số nguyên tố.";
                    }
                }
            }
        }
    ?>
</body>
</html>
