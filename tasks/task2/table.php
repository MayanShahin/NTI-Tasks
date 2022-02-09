<?php
$rows = 5; 
$cols = 7;

echo "<table border='1'>";

for($tr=1;$tr<=$rows;$tr++){

    echo "<tr>";
        for($td=1;$td<=$cols;$td++){
               echo "<td>row: ".$tr." column: ".$td."</td>";
        }
    echo "</tr>";
}

echo "</table>";


// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female


// collection => laravel => array of objects
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'male'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            'drawing', 'painting'
        ],
        'email' => ['ahmed.m@gmail.com'],
        'phone' => ['01123467802'],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'male'
        ],
        'hobbies' => [
            'football', 'swimming', 'running',
        ],
        'activities' => [
             'drawing'
    ],
    'email' => ['mohamed.5@gmail.com'],
    'phone' => ['019867802'],

    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'female'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
             'painting', 'drawing'
        ],
    
    'email' => ['menna.sss@gmail.com'],
    'phone' => ['01523467802' , '01022367718'],

    (object)[
        'id' => 3,
        'name' => 'rana',
        "gender" => (object)[
            'gender' => 'female'
        ],
        'hobbies' => [
            'music',
        ],
        'activities' => [
             'reading', 'painting', 'drawing'
        ]
    ]
        ];
    
?>
<!-- <!doctype html>
<html lang="en">
  <head>
    <title>table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
    <table>
        <thead>
                <th></th>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
 -->



