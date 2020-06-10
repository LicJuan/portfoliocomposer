<?php
$name = "Juan Rodriguez";
$limitMonths = 2000;
$jobs = [
    [
        'title' => 'PHP DEVELOPER',
        'description' => 'This is a work with PHP',
        'visible' => true,
        'months' => 16
    ],
    [
        'title' => 'PYTHON DEVELOPER',
        'description' => 'This is a work with PYTHON',
        'visible' => true,
        'months' => 14
    ],
    [
        'title' => 'GO DEVELOPER',
        'description' => 'This is a work with GO',
        'visible' => true,
        'months' => 5
    ]
];
function getDuration($months)
{
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    if ($years == 0) {
        return "$extraMonths months";
    }
    return "$years years $extraMonths months";
}

function printJob($job)
{
    echo '<h5 class="text-info">' . $job['title'] . '</h5>
    <p>' . $job['description'] . '</p>
    <ul class="unstyled">
        <li>' . getDuration($job['months']) . '</li>
        <li>item2</li>
    </ul>';
}
