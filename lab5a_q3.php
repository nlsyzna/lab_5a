<!DOCTYPE html>
<html lang="en">
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Function to generate the multiplication table
    function multiplication($multiplier) {
        $result = [];
        for ($i = 1; $i <= 12; $i++) {
            $result[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $result;
    }

    // Generate multiplication table for 2
    $tableData = multiplication(2);
    ?>

    <table border = "1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php
        // Loop through the generated table data and display it in rows
        foreach ($tableData as $row) {
            echo "<tr>";
            echo "<td>{$row['no']}</td>";
            echo "<td>{$row['multiplier']}</td>";
            echo "<td>{$row['answer']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
