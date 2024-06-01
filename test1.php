<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination Example</title>
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }
        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            color: #007BFF;
            border: 1px solid #007BFF;
            border-radius: 5px;
        }
        .pagination a:hover {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="pagination">
        <?php
            $current = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $prev_page = $current - 1;
            $next_page = $current + 1;

            if ($prev_page > 0) {
                echo "<a href='test$prev_page.php'>&laquo; Previous</a>";
            }

            echo "<span> Page $current </span>";

            if ($next_page < 11) {
                echo "<a href='test$next_page.php'>Next &raquo;</a>";
            }
        ?>
    </div>
</body>
</html>
