<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width:100%;
            color: #eb4034;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #eb4034;
            color: white;
        }

        tr:nth-child(even) {background-color: #d3f2af;}
        tr:nth-child(odd) {background-color: #9ad853;}

    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>email</th>
                <th>password</th>
                <th>name</th>
                <th>branch</th>
                <th>phone</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "puma");
            $sql = "SELECT * FROM members";
            $result = $conn->query($sql);

            if($result->num_rows>0){
                while($row = $result->fetch_assoc())
                {
                    echo"<tr><td>" . $row["ID"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["name"] . "</td><td>" . $row["branch"] . "</td><td>" . $row["phone"] . "</td></tr>";
                }
            }
            else{
                echo"No data found";
            }
            $conn->close();
            
            ?>
        </table>
    </div>
</body>
</html>