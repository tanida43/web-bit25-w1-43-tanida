<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <title>WHILE LOOP</title>
</head>
<body>
    
    <div class="container">
    <h1>งานที่ 1 ธนิดา บุญท้าวแก้ว BIT.2/5 เลขที่ 41</h1>

    <a href="index.php">For Loop</a>

    <form action="">
        <div class="b1">
        <label for="">เลขแม่สูตรคูณ</label> <br></div>
        <div class="b2">
            <input type="number" name="num" id="">
        
        <input type="submit" value="คำนวน"></div>
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "<div class='result'>";

            echo "สูตรคูณแม่ " . $num . "<br>";

            $i = 1;

            while($i <= 12){

                echo $num . " x " .$i . " = " . ($num * $i) ."<br>";

                $i++;
            }
            
            echo "</div>";

        }
    ?>
    </div>

</body>
</html>