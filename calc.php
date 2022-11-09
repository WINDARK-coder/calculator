<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body style="font-family: 'Nanum Gothic', sans-serif;">
    <div style="display: flex;justify-content: center;text-align: center;">
        <form action="calcact.php" method="POST" style="    background-color: rgb(0,55, 255, 0.8);
    border-radius: 10px; margin-top:20px;padding:0px 10px 0px 10px">
            <h2>Calculator</h2>
            <input type="text" name="num1"> Number 1
            <br>
            <br>
            <input type="text" name="num2"> Number 2
            <br>
            <br>
            <input type="radio" name="operation" value="add">Add
            <input type="radio" name="operation" value="subtract">Subtract
            <input type="radio" name="operation" value="multiply">Multiply
            <input type="radio" name="operation" value="divide">Divide
            <br>
            <br>
            <button type="submit" name="calculate" style="background-color: green;border-color: rgba(0, 128, 0, 0.253);width: 200px;height: 40px;margin-bottom: 10px;font-family: 'Nanum Gothic', sans-serif;">Calculate

        </form>

    </div>
</body>

</html>