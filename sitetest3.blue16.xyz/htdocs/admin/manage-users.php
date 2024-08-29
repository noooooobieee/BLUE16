<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/css/global.css" rel="stylesheet">
<link rel="icon" href="/static/img/syntax.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script async="" src="./Admin - Syntax_files/js"></script>
<script src="/static/js/presence.js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-7P5LY26BKG');
        </script>
        <script src="./manage-users_files/presence.js"></script>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>Admin - Syntax</title>
        <meta name="robots" content="noindex">
        <link href="/static/css/admin.css" rel="stylesheet"> 
        <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    </head>
    <body>
<?php
  include('../header.php');
?>
        <div id="main">
            <div class="container" style="min-width: 1100px;">
                <a href="/admin" class="btn border-primary btn-sm mb-2">Back to Admin Panel</a>
                <h1>User Manager</h1>
                <form method="post">
                    <input >
                    <div class="input-group mb-3">
                        <div class="form-floating" style="width: 52%;">
                            <input type="text" class="form-control" id="user-search-input" name="user-search-input" value="" placeholder="ROBLOX">
                            <label for="user-search-input">Search</label>
                        </div>
                        <div class="form-floating" style="min-width: 130px;">
                            <select class="form-select" id="user-search-type" name="user-search-type">
                                <option value="userid">UserID</option>
                                <option value="username">Username</option>
                                <option value="discordid">Discord ID</option>
                            </select>
                            <label for="user-search-type">Search With</label>
                        </div>
                        <div class="form-floating" style="min-width: 160px;">
                            <select class="form-select" id="user-order-by" name="user-order-by">
                                <option value="userid">UserID</option>
                                <option value="creation">Creation Date</option>
                                <option value="lastonline">Last Online</option>
                                <option value="robux">Robux Balance</option>
                                <option value="tix">Tickets Balance</option>
                            </select>
                            <label for="user-order-by">Order By</label>
                        </div>
                        <div class="form-floating" style="min-width: 130px;">
                            <select class="form-select" id="user-order-direction" name="user-order-direction">
                                <option value="asc">Ascending</option>
                                <option value="desc">Descending</option>
                            </select>
                            <label for="user-order-direction">Order Direction</label>
                        </div>
                        <input type="submit" class="btn btn-outline-primary fw-bold" value="🔍">
                    </div>
                </form>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr class="rounded-top">
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Created</th>
                            <th scope="col">Last Online</th>
                            <th scope="col">Robux</th>
                            <th scope="col">Tickets</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                  <!--  <tbody class="table-group-divider" style="border-color: rgb(20,20,20);">-->
   <?php

if (!function_exists('getUserDataFromDatabase')) {
    function getUserDataFromDatabase($offset, $limit, $pdo)
    {
        try {
            $query = "SELECT * FROM users LIMIT :offset, :limit";
            $statement = $pdo->prepare($query);
            $statement->bindParam(":offset", $offset, PDO::PARAM_INT);
            $statement->bindParam(":limit", $limit, PDO::PARAM_INT);
            $statement->execute();

            $usersData = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $usersData;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}


$usersPerPage = 10;
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $usersPerPage;




    $usersData = getUserDataFromDatabase($offset, $usersPerPage, $pdo);



    foreach ($usersData as $user) {
        echo '<tr>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['username'] . '</td>';
        echo '<td>' . $user['join_date'] . '</td>';
        echo '<td>' . $user['status'] . '</td>';
        echo '<td>' . $user['robux'] . '</td>';
        echo '<td>' . $user['tickets'] . '</td>';
        echo '<td><a href="/admin/manage-users/' . $user['id'] . '" class="text-decoration-none btn btn-primary btn-sm w-100">View</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';

    $totalPages = ceil(count($usersData) / $usersPerPage);
    echo '<div class="mt-3 d-flex">';
    if ($page > 1) {
        echo '<a class="text-decoration-none me-auto text-primary" href="/admin/manage-users?page=' . ($page - 1) . '">Previous</a>';
    }
    echo '<p class="ms-2 me-2 text-white">Page ' . $page . '</p>';
    if ($page < $totalPages) {
        echo '<a class="text-decoration-none ms-auto text-primary" href="/admin/manage-users?page=' . ($page + 1) . '">Next</a>';
    }
    echo '</div>';

    $pdo = null; 

?>


               <!--     </tbody>-->
               <!-- </table>>-->
             <div class="mt-3 d-flex">
    <?php
    $currentPage = $page;
    $previousPage = ($currentPage > 1) ? ($currentPage - 1) : 1;
    $nextPage = $currentPage + 1;
    ?>
    <a class="text-decoration-none <?= ($currentPage == 1) ? 'disabled text-secondary' : 'ms-auto text-primary'; ?>" href="/admin/manage-users?page=<?= $previousPage; ?>">Previous</a>
    <p class="ms-2 me-2 text-white">Page <?= $currentPage; ?></p>
    <a class="text-decoration-none <?= ($currentPage == $totalPages) ? 'disabled text-secondary' : 'me-auto text-primary'; ?>" href="/admin/manage-users?page=<?= $nextPage; ?>">Next</a>
</div>

            </div>
        </div>
        <div id="footer">
            <div class="container pt-4 pb-4">
                <div class="row">
                    <div class="col-4">
                        <b>©2023 syntax.free.nf</b>
                        <p>syntax.free.nf is not affiliated or related to the Roblox Corporation or any of its subsidaries.</p>
                    </div>
                    <div class="col" id="footerlist">
                        <a href="/terms">Terms of Service</a>
                        <a href="/privacy">Privacy Policy</a>
                        <a href="https://discord.gg/cBMp3Z52UM">Discord</a>
                    </div>
                    <div class="col" id="footerlist">
                        <a href="/home">Home</a>
                        <a href="/games">Games</a>
                        <a href="/catalog">Catalog</a>
                        <a href="/develop">Develop</a>
                    </div>
                    <div class="col" id="footerlist">
                        <a href="/settings">Settings</a>
                        <a href="/currency-exchange">Currency Exchange</a>
                        <a href="/download">Downloads</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
