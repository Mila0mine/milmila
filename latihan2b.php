<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 </title>
   
</head>

<body>

    <div class="square">

        <?php
        for ($mi = 1; $mi <= 5; $mi++) {
            for ($H = 1; $H <= $mi; $H++) {
                echo "<div class='clear'>" . $H. "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>


    
</body>
<style>
        .square {
            border: 5px solid yellowgreen;
            padding: 10px;
            margin: 10px;
            width: 40%;
        }


        .clear {
            border: 4px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>

</html>