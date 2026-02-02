<?php
header("Content-Type: application/json");

spl_autoload_register(function ($className) {
    $file = __DIR__ . "/" . $className . ".php";

    if (file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Class file $className.php not found");
    }
});

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Only POST allowed"]);
    exit;
}

// Get inputs
$num1     = $_POST['number_1'] ?? null;
$num2     = $_POST['number_2'] ?? null;
$operator = $_POST['operator'] ?? null;

// Check required fields
if ($num1 === null || $num2 === null || $operator === null) {
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

// Validate numbers (no alphabets or special chars)
if (! is_numeric($num1) || ! is_numeric($num2)) {
    echo json_encode(["status" => "error", "message" => "Inputs must be numbers"]);
    exit;
}

$num1 = (float) $num1;
$num2 = (float) $num2;

// Operator validation
try {
    switch ($operator) {
        case '+':
            // require_once 'Add.php';
            $calc = new Add($num1, $num2);
            break;

        case '-':
            // require_once 'Subtract.php';
            $calc = new Subtract($num1, $num2);
            break;

        case '*':
            // require_once 'Multiply.php';
            $calc = new Multiply($num1, $num2);
            break;

        case '/':
            // require_once 'Divide.php';
            $calc = new Divide($num1, $num2);
            break;

        default:
            echo json_encode(["status" => "error", "message" => "Invalid operator"]);
            exit;
    }

    echo json_encode([
        "status" => 200,
        "result" => $calc->calculate(),
    ]);

} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
