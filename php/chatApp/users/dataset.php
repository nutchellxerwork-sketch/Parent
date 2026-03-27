<?php
// SERVER LOGIC (index.php)
$log = "chat_data.txt";

// 1. SAVE MESSAGE (POST)
if (isset($_POST['u']) && isset($_POST['m'])) {
    $u = htmlspecialchars($_POST['u']);
    $m = htmlspecialchars($_POST['m']);
    $t = date("H:i");
    $line = "<div class='msg'>[$t] <b>$u</b>: $m</div>\n";
    file_put_contents($log, $line, FILE_APPEND);
    echo "OK";
    exit;
}

// 2. LOAD MESSAGES (GET)
if (file_exists($log)) {
    echo file_get_contents($log);
} else {
    echo "<i>No messages yet...</i>";
}
?>

