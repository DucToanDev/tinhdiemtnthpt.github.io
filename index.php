<!-- CÔNG CỤ TÍNH ĐIỂM THI TN THPT - BY T-DEV (PHAN ĐỨC TOÀN 2KA6) -->
<!-- https://www.facebook.com/ductoafn2907 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Điểm Thi TN THPT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>



<body>
    <!-- CÔNG CỤ TÍNH ĐIỂM THI TN THPT - BY T-DEV (PHAN ĐỨC TOÀN 2KA6) -->
    <!-- https://www.facebook.com/ductoafn2907 -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $math = floatval($_POST['math']);
        $literature = floatval($_POST['literature']);
        $english = floatval($_POST['english']);
        $physics = floatval($_POST['physics']);
        $chemistry = floatval($_POST['chemistry']);
        $biology = floatval($_POST['biology']);
        $medium = floatval($_POST['medium']);
        $kk = floatval($_POST['kk']);
        $ut = floatval($_POST['ut']);

        // Correct formula calculation
        $average_score = ($math + $literature + $english + (($physics + $chemistry + $biology + $kk) / 3)) / 4;
        $tongdiem = (($average_score * 7) + ($medium * 3)) / 10 + $ut;
    }
    ?>
    <form action="index.php" method="POST">
        <h1>Công cụ tính điểm Thi TN THPT</h1>
        <div class="form-group">
            <div>
                <label for="math">Nhập điểm toán</label>
                <input type="number" step="0.1" name="math" id="math" placeholder="Nhập điểm toán">
            </div>
            <div>
                <label for="literature">Nhập điểm ngữ văn</label>
                <input type="number" step="0.1" name="literature" id="literature" placeholder="Nhập điểm ngữ văn">
            </div>
            <div>
                <label for="english">Nhập điểm tiếng anh</label>
                <input type="number" step="0.1" name="english" id="english" placeholder="Nhập điểm tiếng anh">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="physics">Nhập điểm vật lý (lịch sử)</label>
                <input type="number" step="0.1" name="physics" id="physics" placeholder="Nhập điểm vật lí">
            </div>
            <div>
                <label for="chemistry">Nhập điểm hóa học (địa lí)</label>
                <input type="number" step="0.1" name="chemistry" id="chemistry" placeholder="Nhập điểm hóa học">
            </div>
            <div>
                <label for="biology">Nhập điểm sinh học (GDCD)</label>
                <input type="number" step="0.1" name="biology" id="biology" placeholder="Nhập điểm sinh học">
            </div>
        </div>
        <div class="form-group">
            <div>
                <label for="medium">Nhập điểm TB lớp 12</label>
                <input type="number" step="0.1" name="medium" id="medium" placeholder="Nhập điểm trung bình lớp 12">
            </div>
            <div>
                <label for="kk">Nhập điểm khuyến khích (Nếu có)</label>
                <input type="number" step="0.1" name="kk" id="kk" placeholder="Nhập điểm khuyến khích nếu có">
            </div>
            <div>
                <label for="ut">Nhập điểm ưu tiên (nếu có)</label>
                <input type="number" step="0.1" name="ut" id="ut" placeholder="Nhập điểm ưu tiên nếu có">
            </div>
        </div>
        <button type="submit" name="submit">Tính điểm</button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "<h2>Tổng điểm của bạn: $tongdiem</h2>";
        }
        ?>
    </form>


</body>

</html>