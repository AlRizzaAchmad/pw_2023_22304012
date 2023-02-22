<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C1</title>
    <style>
        .kotak {
            display:block;
            background-color:green ;
            width: 50px;
            height: 40px;
            border:1px solid black;
            text-align:center;
            padding: 2 0;
            padding-top:10px;
        }
    </style>
</head>
<body>
    
    <div style="">
        <div class="kotak">1</div>
        <div style="display:inline-flex;">
            <div class="kotak">2</div>
            <div class="kotak">2</div>
        </div>
        <br>
        <div style="display:inline-flex;">
            <div class="kotak">3</div>
            <div class="kotak">3</div>
            <div class="kotak">3</div>
        </div>
    </div>
</body>
</html>