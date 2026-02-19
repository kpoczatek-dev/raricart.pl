<?php
// packages/debug_env.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Debug Environment (Subdomain)</h1>";
echo "<p><strong>CWD:</strong> " . getcwd() . "</p>";
echo "<p><strong>DIR:</strong> " . __DIR__ . "</p>";
echo "<p><strong>Host:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";

$navbar_path = '../site/parts/navbar.php';
$real_path = realpath($navbar_path);

echo "<p><strong>Navbar Path (Relative):</strong> " . $navbar_path . "</p>";
echo "<p><strong>Navbar Realpath:</strong> " . ($real_path ? $real_path : 'FALSE (File not found or access denied)') . "</p>";
echo "<p><strong>File Exists:</strong> " . (file_exists($navbar_path) ? 'YES' : 'NO') . "</p>";

echo "<h2>Try Include:</h2>";
try {
    include $navbar_path;
    echo "<p style='color:green'>Include SUCCESS</p>";
} catch (Throwable $t) {
    echo "<p style='color:red'>Include ERROR: " . $t->getMessage() . "</p>";
}
?>
