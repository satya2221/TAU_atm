<?php
    $receiver = $_POST ['receiver'];
    $amount = $_POST ['amount'];

    echo "<h1>Successfull, $".($amount). " transfered to ".($receiver)."</h1>";