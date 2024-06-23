<?php

$answers = [
    'answer-1' => 'c',
    'answer-2' => 'd',
    'answer-3' => 'd',
    'answer-4' => 'b',
    'answer-5' => 'd',
];

function result($key, $answers)
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] === $answers[$key]) {
            echo '<p class="mt-3 fw-bold text-success">Your answer is right.</p>';
        } else {
            echo '<p class="mt-3 fw-bold text-danger">Your answer is wrong.</p>';
        }
    }
}

if (isset($_POST['answer-1'])) {
    $score = 0;

    foreach ($answers as $key => $value) {
        if (isset($_POST[$key])) {
            if ($_POST[$key] === $value) {
                $score++;
            }
        }
    }

    if ($score >= 4) {
        $result = 'PASSED';
    } else {
        $result = 'FAILED';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citizenship</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php
include('navigation.php');
?>

<main class="container mt-3">
    <h1 class="mb-5">Citizenship Test</h1>

    <form action="index.php" method="post">
        <p class="fw-bold">1. What are two Cabinet-level positions?</p>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-1" id="answer-1-a" value="a">
            <label class="form-check-label" for="answer-1-a">
                Secretary of Weather and Secretary of Energy
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-1" id="answer-1-b" value="b">
            <label class="form-check-label" for="answer-1-b">
                Secretary of Health and Human Services and Secretary of the Navy
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-1" id="answer-1-c" value="c">
            <label class="form-check-label" for="answer-1-c">
                Secretary of State and Secretary of Labor
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-1" id="answer-1-d" value="d">
            <label class="form-check-label" for="answer-1-d">
                Secretary of the Interior and Secretary of History
            </label>
        </div>

        <?php
        result('answer-1', $answers);
        ?>

        <hr>

        <p class="fw-bold">2. In what month do we vote for President?</p>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-2" id="answer-2-a" value="a">
            <label class="form-check-label" for="answer-2-a">
                January
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-2" id="answer-2-b" value="b">
            <label class="form-check-label" for="answer-2-b">
                October
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-2" id="answer-2-c" value="c">
            <label class="form-check-label" for="answer-2-c">
                February
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-2" id="answer-2-d" value="d">
            <label class="form-check-label" for="answer-2-d">
                November
            </label>
        </div>

        <?php
        result('answer-2', $answers);
        ?>

        <hr>

        <p class="fw-bold">3. Who was the first President?</p>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-3" id="answer-3-a" value="a">
            <label class="form-check-label" for="answer-3-a">
                John Adams
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-3" id="answer-3-b" value="b">
            <label class="form-check-label" for="answer-3-b">
                Thomas Jefferson
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-3" id="answer-3-c" value="c">
            <label class="form-check-label" for="answer-3-c">
                Abraham Lincoln
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-3" id="answer-3-d" value="d">
            <label class="form-check-label" for="answer-3-d">
                George Washington
            </label>
        </div>

        <?php
        result('answer-3', $answers);
        ?>

        <hr>

        <p class="fw-bold">4. Name one state that borders Canada.</p>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-4" id="answer-4-a" value="a">
            <label class="form-check-label" for="answer-4-a">
                South Dakota
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-4" id="answer-4-b" value="b">
            <label class="form-check-label" for="answer-4-b">
                Maine
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-4" id="answer-4-c" value="c">
            <label class="form-check-label" for="answer-4-c">
                Rhode Island
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-4" id="answer-4-d" value="d">
            <label class="form-check-label" for="answer-4-d">
                Oregon
            </label>
        </div>

        <?php
        result('answer-4', $answers);
        ?>

        <hr>

        <p class="fw-bold">5. Why does the flag have 13 stripes?</p>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-5" id="answer-5-a" value="a">
            <label class="form-check-label" for="answer-5-a">
                because the stripes represent the members of the Second Continental Congress
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-5" id="answer-5-b" value="b">
            <label class="form-check-label" for="answer-5-b">
                because it was considered lucky to have 13 stripes on a flag
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-5" id="answer-5-c" value="c">
            <label class="form-check-label" for="answer-5-c">
                because the stripes represent the number of signatures on the U.S. Constitution
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="answer-5" id="answer-5-d" value="d">
            <label class="form-check-label" for="answer-5-d">
                because the stripes represent the original colonies
            </label>
        </div>

        <?php
        result('answer-5', $answers);
        ?>

        <?php
        if (isset($_POST['answer-1'])) {
            echo "<p>Your score is: $score. Your result is: $result.</p>";
        }
        ?>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
