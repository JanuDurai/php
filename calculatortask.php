<?php
header("Content-Type: application/json");

// Receives form data

$data_1 = $_POST['number_1'];
$data_2 = $_POST['number_2'];
$operator = $_POST['operator'];

if ((!is_int($data_1) || !is_int(($data_2)))) {
    echo json_encode([
        "status" => "error",
        "message" => "Intput must be integer"
    ]);
    return;
}

if (!$data_1 || !$data_2 || !$operator) {
    echo json_encode([
        "status" => "error",
        "message" => "All the fields are required"
    ]);
    return;
}

$result;

switch ($operator) {
    case '+':
        $result = $data_1 + $data_2;
        break;
    case '-':
        $result = $data_1 - $data_2;
        break;
    case '*':
        $result = $data_1 * $data_2;
        break;
    case '/':
        $result = $data_1 / $data_2;
        break;
    default:
        $result = 'Operator is not valid';
}


echo json_encode([
    "status" => 200,
    "response" => $result
])

    ?>