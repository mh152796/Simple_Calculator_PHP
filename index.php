<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    $result = "0";
    if(isset($_POST['count']))
    {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $res = $_POST['operator'];
        if($res == "add")
        {
            $result = $n1 + $n2;
        }

        else if($res == "sub")
        {
            $result = $n1 - $n2;
        }
        else if($res == "mul")
        {
            $result = $n1 * $n2;
        }
        else if($res == "div")
        {
            $result = $n1 / $n2;
        }
        
    }
     ?>

    <form action="index.php" method="post">
        <div id="home">
            <div id="home-four">
                <h1 class="calculator">CALCULATOR</h1>
                <input type="text" name="num1" class="form-control space" placeholder="Enter the first number">
                <input type="text" name="num2" class="form-control space" placeholder="Enter the second number">
                <select class="custom-select space-two" name="operator" id="">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mul">*</option>
                    <option value="div">/</option>
                </select>
                <input type="submit" name="count" value="count" class="count">
                <input type="text" name="s3" class="form-control" value="<?php echo $result; ?>" readonly>
            </div>
        </div>
    </form>

 

    

</body>

</html>