<?php  

$result = "0"; 
$txt1 = $txt2 = "";

if (isset($_POST['cal'])) {
    $txt1 = isset($_POST['n1']) ? (float)$_POST['n1'] : 0;
    $txt2 = isset($_POST['n2']) ? (float)$_POST['n2'] : 0;
    $ans = $_POST['cal'];

    switch ($ans) {
        case 'Add (+)':
            $result = $txt1 + $txt2;
            break;
        case 'Subtract (-)':
            $result = $txt1 - $txt2;
            break;
        case 'Multiply (x)':
            $result = $txt1 * $txt2;
            break;
        case 'Divide (/)':
            if ($txt2 == 0) {
                $result = "Error: Division by 0";
            } else {
                $result = $txt1 / $txt2;
            }
            break;
        case 'Modulo/Remainder (%)':
            if ($txt2 == 0) {
                $result = "Error: Division by 0, Modulo is undefined";
            } else {
                $result = $txt1 % $txt2;
            }
            break;
        case 'To the power (^)':
            $result = pow($txt1, $txt2);
            break;
        default:
            $result = "Invalid Operation";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Calculator</h2>
    <h4>    <?php echo "<br>Enter the values to get the answer.<br>"; ?> </h4>
        <form method="post" action="">
            <div class="mb-3">
                <label for="n1" class="form-label">Number 1:</label>
                <input type="number" step="any" class="form-control" id="n1" name="n1" value="<?php echo htmlspecialchars($txt1); ?>">
            </div>
            <div class="mb-3">
                <label for="n2" class="form-label">Number 2:</label>
                <input type="number" step="any" class="form-control" id="n2" name="n2" value="<?php echo htmlspecialchars($txt2); ?>">
            </div>
            <div class="mb-3">
                <label for="result" class="form-label">Result:</label>
                <input type="text" class="form-control" id="result" name="result" value="<?php echo htmlspecialchars($result); ?>" readonly>
            </div>
            <div class="d-grid gap-2">
                <input type="submit" class="btn btn-primary" name="cal" value="Add (+)">
                <input type="submit" class="btn btn-secondary" name="cal" value="Subtract (-)">
                <input type="submit" class="btn btn-success" name="cal" value="Multiply (x)">
                <input type="submit" class="btn btn-info" name="cal" value="Divide (/)">
                <input type="submit" class="btn btn-warning" name="cal" value="Modulo/Remainder (%)">
                <input type="submit" class="btn btn-danger" name="cal" value="To the power (^)">
            </div>
        </form>
    </div>
</body>
</html>
