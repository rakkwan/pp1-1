<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program1</title>
</head>
<body>
    <h1>Pair Program1</h1>

    <?php
        $numbers = array(7, 9, 8, 9, 8, 8, 6);

        function printArr($number)
        {
            foreach ($number as $num)
            {
                echo $num . "\n";
            }
        }

        printArr($numbers);

    ?>

</body>
</html>