<!DOCTYPE html>
<html>
<head>
    <title>Latihan3a</title>
    <style>
        .highlight {
            color: #1A0547; 
            font-weight: bold;
            font-style: italic;
            text:28px;
        }
    </style>
</head>
<body>
    <?php
    function ubahStyle($string, $kelas) {
       
        return '<span class="' . $kelas . '">' . $string . '</span>';
    }

   
    $tulisan = "Hello World! Here I come!";
    $kelas = "highlight";

   
    $styledText = ubahStyle($tulisan, $kelas);
    echo $styledText;
    ?>
</body>
</html>