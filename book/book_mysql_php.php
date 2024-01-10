<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $myDB = new mysqli('localhost','root',' ','bookstore');
            if ($myDB->connect_error) {
                die('Connect ErrorException: '. $myDB->connect_error . ' ' . $myDB->connect_errno);
            }else {
                echo "Connect Successfully";
            }
            $sql = "SELECT * FROM 'books' WHERE 'available' = 1 ORDER BY 'title'";
            $result = $myDB -> query($sql);
            if ($result -> fetch_assoc()) {
                echo '<br>load done';
            }else {
                echo '<br>load error';
            }
        ?>
        <h1>There books are currently available</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">BookID</th>
                    <th scope="col">Title</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Publish Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th>Mark</th>
                    <th>Otto</th>
                    <th>@mdo</th>
                </tr>
                  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <?php
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>";
                    echo $row['bookid'];
                    echo "</th>";
                    echo "<td>";
                    echo $row['title'];
                    echo "</td>";
                    echo "<td>";
                    echo $row["ISBN"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["pub_year"];
                    echo "</td>";
                    echo "<td>";
                }
            ?>
            </tbody>
        </table>
        <!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>               
    </body>
</html>