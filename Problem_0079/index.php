<?php

// Function to perform topological sorting on the graph
function topologicalSort($graph) {
    $inDegree = array_fill_keys(array_keys($graph), 0);

    // Calculate in-degrees for each character
    foreach ($graph as $char => $data) {
        foreach ($data['after'] as $after) {
            $inDegree[$after]++;
        }
    }

    $queue = new SplQueue();

    // Initialize the queue with characters that have no dependencies
    foreach ($inDegree as $char => $degree) {
        if ($degree === 0) {
            $queue->enqueue($char);
        }
    }

    $result = '';

    while (!$queue->isEmpty()) {
        $char = $queue->dequeue();
        $result .= $char;

        // Update in-degrees and enqueue characters with no dependencies
        foreach ($graph[$char]['after'] as $after) {
            $inDegree[$after]--;
            if ($inDegree[$after] === 0) {
                $queue->enqueue($after);
            }
        }
    }

    return $result;
}

// Read the keylog.txt file into an array of strings
$lines = file('0079_keylog.txt', FILE_IGNORE_NEW_LINES);

// Create an array to store the relationships between characters
$graph = [];

// Build the graph based on the relationships
foreach ($lines as $line) {
    $chars = str_split($line); // Split the login attempt into characters

    // Add characters to the graph
    foreach ($chars as $char) {
        if (!isset($graph[$char])) {
            $graph[$char] = ['before' => [], 'after' => []];
        }
    }

    // Update relationships in the graph
    for ($i = 0; $i < count($chars) - 1; $i++) {
        $before = $chars[$i];
        $after = $chars[$i + 1];

        if (!in_array($after, $graph[$before]['after'])) {
            $graph[$before]['after'][] = $after;
        }

        if (!in_array($before, $graph[$after]['before'])) {
            $graph[$after]['before'][] = $before;
        }
    }
}

$shortestPasscode = topologicalSort($graph);
echo $shortestPasscode;