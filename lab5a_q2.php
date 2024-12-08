<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Details</title>
</head>
<body>
    <?php
    // Define the students array
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ],
    ];
    ?>

    <table border = "1">
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        // Loop through the students array and display each row in the table
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>{$student['name']}</td>";
            echo "<td>{$student['program']}</td>";
            echo "<td>{$student['age']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
