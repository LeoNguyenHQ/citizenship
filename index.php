<?php

$questions = [
    [
        'question' => 'What are two Cabinet-level positions?',
        'options' => [
            'Secretary of Weather and Secretary of Energy',
            'Secretary of Health and Human Services and Secretary of the Navy',
            'Secretary of State and Secretary of Labor',
            'Secretary of the Interior and Secretary of History',
        ],
        'answer' => 2,
    ],
    [
        'question' => 'In what month do we vote for President?',
        'options' => [
            'January',
            'October',
            'February',
            'November',
        ],
        'answer' => 3,
    ],
    [
        'question' => 'Who was the first President?',
        'options' => [
            'South Dakota',
            'Thomas Jefferson',
            'Abraham Lincoln',
            'George Washington',
        ],
        'answer' => 3,
    ],
    [
        'question' => 'Name one state that borders Canada.',
        'options' => [
            'South Dakota',
            'Maine',
            'Rhode Island',
            'Oregon',
        ],
        'answer' => 1,
    ],
    [
        'question' => 'Why does the flag have 13 stripes?',
        'options' => [
            'because the stripes represent the members of the Second Continental Congress',
            'because it was considered lucky to have 13 stripes on a flag',
            'because the stripes represent the number of signatures on the U.S. Constitution',
            'because the stripes represent the original colonies',
        ],
        'answer' => 3,
    ],
];

function result($key, $questions): void
{
    if (isset($_POST["answer-$key"])) {
        if ($_POST["answer-$key"] == $questions[$key]['answer']) {
            echo '<p class="mt-3 fw-bold text-success">Your answer is right.</p>';
        } else {
            echo '<p class="mt-3 fw-bold text-danger">Your answer is wrong.</p>';
        }
    }
}

if (isset($_POST['submit'])) {
    $score = 0;

    foreach ($questions as $key => $question) {
        if ($_POST["answer-$key"] == $question['answer']) {
            $score++;
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
        <?php foreach ($questions as $key => $question): ?>
            <p class="fw-bold"><?= $question['question'] ?></p>

            <?php foreach ($question['options'] as $optionKey => $option): ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="answer-<?= $key ?>" id="answer-<?= "$key-$optionKey" ?>" value="<?= $optionKey ?>">
                    <label class="form-check-label" for="answer-<?= "$key-$optionKey" ?>">
                        <?= $option ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <?php
            result($key, $questions);
            ?>

            <hr>
        <?php endforeach; ?>

        <?php
        if (isset($_POST['submit'])) {
            echo "<p>Your score is: $score. Your result is: $result.</p>";
        }
        ?>

        <button type="submit" class="btn btn-primary mt-3" name="submit" value="1">Submit</button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
