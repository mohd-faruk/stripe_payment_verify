<?php

header('Content-Type: application/json');

try {
    // Update clientSecret with your paymentIntent's clientSecret.
    $output = [
        'clientSecret' => 'pi_3Rqp2JSJ1',
        'customerSessionClientSecret' => 'cs_test_a1b2c3d4e5f6g7h8i9j0',
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
