<?php



function checkSession($requiredUserType = null)
{
    if (!isset($_SESSION['user_id'])) {
        header('Location: /login');
        exit;
    }

    $userId = $_SESSION['user_id'];


    global $pdo;



    if ($requiredUserType && $_SESSION['user_type'] !== $requiredUserType) {
        $previousPage = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        echo "Unauthorized access. Only " . htmlspecialchars($requiredUserType) . "s can view this page. ";
        echo "Go back to <a href='?' onclick='history.back()'>Previous Page</a>";
        exit;
    }
}
