<?php
// Repository: php-pagination-system
// New Feature: Add "Previous" and "Next" buttons

echo "<br>";
if ($page > 1) {
    echo "<a href='?page=" . ($page - 1) . "'>Previous</a> ";
}
if ($page < $totalPages) {
    echo "<a href='?page=" . ($page + 1) . "'>Next</a>";
}
?>
