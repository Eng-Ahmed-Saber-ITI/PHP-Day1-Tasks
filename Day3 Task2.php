<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day3 Task2</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
            
            <?php
                function html_table1($students = array()){
                    // echo ("<tr>"."<th>Name</th>. <td>Name</td>"."<td>Email</td>"."<td>Status</td>"."</tr>");
                    $rows = array();
                    foreach ($students as $row) {
                    $cells = array();
                    foreach ($row as $cell) {
                        $cells[] = "<td>{$cell}</td>";
                    }
                    $rows[] = "<tr>" . implode('', $cells) ;
                    }
                    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
                }   
                $students = [
                    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
                    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
                    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
                    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
                    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
                ];
                    echo html_table1($students);
            ?>
        </tbody>
    </table>
</body>

</html>