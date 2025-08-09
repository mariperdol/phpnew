<?php
// Repository: php-pagination-system
// Description: A script to implement pagination for large datasets.

$data = range(1, 100); // Simulated data
$perPage = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = ceil(count($data) / $perPage);

// Validate page number
if ($page < 1 || $page > $totalPages) {
    die("Invalid page number.");
}

// Slice data for current page
$start = ($page - 1) * $perPage;
$currentPageData = array_slice($data, $start, $perPage);

// Display data
echo "Page $page of $totalPages:\n";
print_r($currentPageData);

// Pagination links
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
?>
