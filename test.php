<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 9/17/2021
 * Time: 3:33 PM
 */
$list1 = '';
for ($i = 50; $i >= 20; $i--){
    $list1 .="<li class='list-group-item d-flex align-items-center justify-content-between'>Reverse List Item: <span class='badge badge-primary badge-pill'>$i</span></li>";
}
$name_list = '';
$names = ['jerry ukadike', 'obinna okehie', 'ebuka okorie', 'love nwangaga', 'felix', 'ebuka nwanjokwu'];
//for ($i = 0; $i <= count($names); $i++){
//    $name_list .= "<li class='list-group-item'>".ucwords($names[$i])."</li>";
//}


foreach ($names as $name) {
    $name_list .= "<li class='list-group-item'>".ucwords($name)."</li>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5 mb-5" style="height: 400px; overflow: auto;">
        <ul class="list-group list-group-flush">
            <?php
            for($i = 1; $i <= 50; $i++){
                echo "<li class='list-group-item d-flex align-items-center justify-content-between'>List item: <span class='badge badge-primary badge-pill'>$i</span></li>";
            }
            ?>
        </ul>
    </div>
    <div class="container mt-5 mb-5" style="height: 400px; overflow: auto;">
        <ul class="list-group list-group-flush">
            <?=$list1?>
        </ul>
    </div>

    <div class="container mt-5">
        <ul class="list-group list-group-flush">
            <?=$name_list?>
        </ul>
    </div>
</body>
</html>
