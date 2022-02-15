<!doctype html>
<html lang="en">

<head>
    <title>Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<?php
$users = [
    (object)[
        "id" => 1,
        "name" => "ahmed",
        "gender" => (object)[
            "gender" => "m"
        ],
        "hobbies" => [
            "football", "swimming", "running"
        ],
        "activities" => [
            "school" => "drawing",
            "home" => "painting"
        ],
        "email" => "ahmed.m2@gmail.com",
        "phone" => [1111, 5555, 3333]

    ],
    (object)[
        "id" => 2,
        "name" => "mohamed",
        "gender" => (object)[
            "gender" => "m"
        ],
        "hobbies" => [
            "swimming", "running",
        ],
        "activities" => [
            "school" => "painting",
            "home" => "drawing"
        ],
        "email" => "mohamed567@gmail.com",
        "phone" => [5555, 8888]
    ],
    (object)[
        "id" => 3,
        "name" => "menna",
        "gender" => (object)[
            "gender" => "f"
        ],
        "hobbies" => [
            "running", "reading"
        ],
        "activities" => [
            "school" => "painting",
            "home" => "drawing"
        ],
        "email" => "",
        "phone" => []
    ],

];




?>

<body>
    <div class="container">
    <?php
    if (count($users) > 0) {
    ?>
        <table class="table table-hover">
            <thead>
                <?php 
                foreach ($users[count($users) - 1] as $property => $personalue) { 
                ?>
                <th> <?= $property ?> </th>
                <?php } ?>
            </thead>
            <tbody>
                <?php foreach ($users as  $user) { ?>
                    <tr>
                        <?php foreach ($user as $property => $personalue) { ?>
                            <td>
                                <?php
                                if (gettype($personalue) == "array" || gettype($personalue) == "object") {
                                    foreach ($personalue as $gender => $person) {
                                        if ($property  == "gender") {
                                            if ($person == "m") {
                                                $person = "male";
                                            } elseif ($person == "f") {
                                                $person = "female";
                                            }
                                        }
                                        echo $person . " , ";
                                    }
                                } else {
                                    echo $personalue;
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>