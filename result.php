<?php

$answer1 = $_POST['answer-1'] ?? null;
$answer2 = $_POST['answer-2'] ?? null;
$answer3 = $_POST['answer-3'] ?? null;
$answer4 = $_POST['answer-4'] ?? null;
$answer5 = $_POST['answer-5'] ?? null;

$score = 0;

if ($answer1 === 'c') {
    $score++;
}

if ($answer2 === 'd') {
    $score++;
}

if ($answer3 === 'd') {
    $score++;
}

if ($answer4 === 'b') {
    $score++;
}

if ($answer5 === 'd') {
    $score++;
}

if ($score >= 4) {
    $result = 'PASSED';
} else {
    $result = 'FAILED';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citizenship</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
include('navigation.php');
?>

<main class="container mt-3">
    <h1 class="mb-5">Citizenship Test</h1>

    <p>Your score is: <?= $score; ?>. Your result is: <?= $result ?>.</p>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
