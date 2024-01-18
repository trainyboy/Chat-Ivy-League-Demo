<?php
// Command to execute Python script
$command = escapeshellcmd('/Applications/XAMPP/xamppfiles/cgi-bin/gpt.py');

// Execute the command and capture the output
$output = null;
$retval = null;
exec($command, $output, $retval);

// Return output or error
if ($retval == 0) {
    echo implode("\n", $output);
} else {
    echo "Error executing Python script.";
}
?>