<?php
header('Content-Type: application/json');

$response = [
    "result" => [
        "title" => "Result",
        "roll_number" => $rollNumber, // dynamically set this value
        "message" => isset($rollNumber) ? "Match found for Roll Number: $rollNumber" : "",
        "record" => $record, // dynamically set this value
        "no_match_message" => "No match found.",
        "link" => [
            "text" => "Capture another image",
            "href" => "your_upload_file_url" // dynamically set this URL
        ]
    ]
];

echo json_encode($response);
?>
