<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Calculator</h1>
        <form method="post">
            <p>Enter the first number</p>
            <input type="text" name="numb1" placeholder="enter the number">
            <p>Enter the second number</p>
            <input type="text" name="numb2" placeholder="enter the number">
            <div class="box">
                <select name="operator" class="operator">
                    <option selected>Operator</option>
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <button type="submit" name="submit" value="submit">Calculate</button>
            </div>
        </form>
        <div class="answer">
            Answer:
            <?php
                if (isset($_POST['submit'])) {
                    $result1 = $_POST['numb1'];
                    $result2 = $_POST['numb2'];
                    $operator = $_POST['operator'];
                    switch ($operator) {
                        case 'Operator':
                            echo "You need to select any operator";
                            break;
                        case '+':
                            $res = $result1 + $result2;
                            echo "<span>$res</span>";
                            break;
                        case '-':
                            $res = $result1 - $result2;
                            echo "<span>$res</span>";
                            break;
                        case '*':
                            $res = $result1 * $result2;
                            echo "<span>$res</span>";
                            break;
                        case '/':
                            $res = $result1 / $result2;
                            echo "<span>$res</span>";
                            break;
                    }
                }
            ?>
        </div>
    </div>
</body>

</html>