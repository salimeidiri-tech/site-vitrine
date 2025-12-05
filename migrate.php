<?php
require_once 'include/db.php';

try {
    // Read the SQL file
    $sql = file_get_contents('include/site.sql');

    // Split into individual statements
    $statements = array_filter(array_map('trim', explode(';', $sql)));

    foreach ($statements as $statement) {
        if (!empty($statement)) {
            $pdo->exec($statement);
        }
    }

    echo "Migration completed successfully.";
} catch (Exception $e) {
    echo "Migration failed: " . $e->getMessage();
}
?>
