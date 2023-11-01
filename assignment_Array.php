<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>
<body>
<div class="conatiner mt-5">
<div class="row justify-content-center">
    <div class="col-6">
        <div class="card">
            <div class="card-head">
            <h2 style="color:green;">ASSIGNMENT TWO PHP </h2><br> <br>
            </div>
        
        
        <caption><h2>MY Information</h2></caption>
        <br>
            <table border="1" width="70%" cellpadding="8">
        <tbody>
            <tr>
                <th>Student ID</th>
                <td>C120080</td>
                <th>Name</th>
                <td class="fw-bold">Abdirashiid Abdikarim Elmi</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>CA2013</td>
                <th>Department</th>
                <td>Computer Application</td>
            </tr>
            <tr>
                <th>Course</th>
                <td>PHP & MySQL</td>
                <th>Lecturer</th>
                <td>Abdisalam jarane</td>
            </tr>
        </tbody>
    </table>
    
        </div>
        
    </div>
</div>
</div>

     
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
</body>
</html> 

<?php
function decimalToBinary($decimal)
{
    
    
$binary='';
   
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = (int)($decimal / 2);
    }
    return $binary;
}

function decimalToOctal($decimal)
{
    $octal = '';
    while ($decimal > 0) {
        $octal = ($decimal % 8) . $octal;
        $decimal = (int)($decimal / 8);
    }
    return $octal;
}

function decimalToHexadecimal($decimal)
{
    $hexadecimal = '';
    while ($decimal > 0) {
        $digit = $decimal % 16;
        if ($digit < 10) {
            $hexadecimal = $digit . $hexadecimal;
        } else {
            $hexadecimal = chr($digit + 55) . $hexadecimal;
        }
        $decimal = (int)($decimal / 16);
    }
    return $hexadecimal;
}

$decimal = 123;

$binary = decimalToBinary($decimal);
$octal = decimalToOctal($decimal);
$hexadecimal = decimalToHexadecimal($decimal);

echo '<br><h2>QUES 1</h2><----------------------->';
echo '<br>';

echo '<br>';
echo "Decimal: $decimal";
echo '<br>';
echo "Binary: $binary";
echo '<br>';
echo "Octal: $octal";
echo '<br>';
echo "Hexadecimal: $hexadecimal";
echo '<br>';
echo '<br>';
echo '<br><h2>QUES 2</h2><----------------------->';


echo '<br>';

echo '<br>';


function binaryToDecimal($binary)
{
    $decimal = 0;
    $binaryDigits = str_split($binary);
    $binaryDigits = array_reverse($binaryDigits);
    $power = 0;

    foreach ($binaryDigits as $digit) {
        $decimal += $digit * pow(2, $power);
        $power++;
    }

    return $decimal;
}

function binaryToOctal($binary)
{
    $decimal = binaryToDecimal($binary);
    $octal = decimalToOctal($decimal);
    return $octal;
}

function binaryToHexadecimal($binary)
{
    $decimal = binaryToDecimal($binary);
    $hexadecimal = decimalToHexadecimal($decimal);
    return $hexadecimal;
}

function decimalToOctals($decimal)
{
    $octal = '';
    while ($decimal > 0) {
        $octal = ($decimal % 8) . $octal;
        $decimal = (int)($decimal / 8);
    }
    return $octal;
}
function decimalToHexadecimals($decimal)
{
    $hexadecimal = '';
    while ($decimal > 0) {
        $digit = $decimal % 16;
        if ($digit < 10) {
            $hexadecimal = $digit . $hexadecimal;
        } else {
            $hexadecimal = chr($digit + 55) . $hexadecimal;
        }
        $decimal = (int)($decimal / 16);
    }
    return $hexadecimal;
}

$binary = '11010';

$decimal = binaryToDecimal($binary);
$octal = binaryToOctal($binary);
$hexadecimal = binaryToHexadecimal($binary);

echo "Binary: $binary\n";
echo '<br>';
echo "Decimal: $decimal\n";
echo '<br>';
echo "Octal: $octal\n";
echo '<br>';
echo "Hexadecimal: $hexadecimal\n";
echo '<br>';


echo '<br>';
echo '<br><h2>QUES 3</h2><----------------------->';
echo '<br>';

echo '<br>';
// Declare and initialize the array
$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Print all elements of the array
echo "Array elements: " . implode(", ", $array) . "\n";

echo "<br>";

// Calculate and print the total of all elements
$total = array_sum($array);
echo "Total of all elements: $total\n";
echo '<br>';

// Calculate and print the total of even elements
$evenTotal = 0;
foreach ($array as $num) {
    if ($num % 2 === 0) {
        $evenTotal += $num;
    }
}
echo "Total of even elements: $evenTotal\n";
echo '<br>';

// Calculate and print the total of odd elements
$oddTotal = 0;
foreach ($array as $num) {
    if ($num % 2 !== 0) {
        $oddTotal += $num;
    }
}
echo "Total of odd elements: $oddTotal\n";
echo '<br>';

// Find the minimum element and its positions
$min = min($array);
$minPositions = array_keys($array, $min);
echo "Minimum element: $min\n";
echo "Positions of minimum element: " . implode(", ", $minPositions) . "\n";
echo '<br>';

// Find the maximum element and its positions
$max = max($array);
$maxPositions = array_keys($array, $max);
echo "Maximum element: $max\n";
echo "Positions of maximum element: " . implode(", ", $maxPositions) . "\n";
echo '<br>';

echo '<br>';
echo '<br><h2>QUES 4</h2><----------------------->';
echo '<br>';

echo '<br>';


// Declare the associative array of two dimensions
$array = array(
    'Light' => array(
        'Red' => 'Light Red',
        'Green' => 'Light Green',
        'Blue' => 'Light Blue'
    ),
    'Normal' => array(
        'Red' => 'Normal Red',
        'Green' => 'Normal Green',
        'Blue' => 'Normal Blue'
    ),
    'Dark' => array(
        'Red' => 'Dark Red',
        'Green' => 'Dark Green',
        'Blue' => 'Dark Blue'
    )
);

// Function to print a bordered table using Bootstrap
function printesBorderedTable($data)
{
    echo '<table class="table table-bordered col-sm-6">';
    echo '<thead class="thead">';
    echo '<tr>';
    echo '<th></th>'; // Empty cell for the first column
    foreach (array_keys($data['Light']) as $column) {
        echo '<th>' . $column . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($data as $rowName => $row) {
        echo '<tr>';
        echo '<th>' . $rowName . '</th>'; // Row name cell
        foreach ($row as $cell) {
            echo '<td>' . $cell . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
// Print the array elements as a bordered table
printesBorderedTable($array);

echo '<br><h2>QUES 5</h2><----------------------->';
echo "<br>";    
echo "<br>";    

$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

$oddTotal = 0;
$evenTotal = 0;
$total = 0;
$minValue = INF;
$maxValue = -INF;
$minPositions = [];
$maxPositions = [];

foreach ($array as $rowIndex => $row) {
    foreach ($row as $colIndex => $element) {
        if ($element % 2 != 0) {
            $oddTotal += $element;
        } else {
            $evenTotal += $element;
        }

        $total += $element;

        if ($element < $minValue) {
            $minValue = $element;
            $minPositions = [[$rowIndex, $colIndex]];
        } elseif ($element == $minValue) {
            $minPositions[] = [$rowIndex, $colIndex];
        }

        if ($element > $maxValue) {
            $maxValue = $element;
            $maxPositions = [[$rowIndex, $colIndex]];
        } elseif ($element == $maxValue) {
            $maxPositions[] = [$rowIndex, $colIndex];
        }
    }
}

$columns = [
    [-3, 3, 3, 8, 16],
    [4, 2, -6, 8, 4],
    [1, -6, 1, 6, 1],
    [9, 7, 8, -6, 9],
    [16, 3, 3, 8, -3]
];
echo "<table class='table table-bordered col-5'>";
echo "<tr><td colspan='5'>Total Odd Elements = $oddTotal</td></tr>";
echo "<tr><td colspan='5' >Total Even Elements = $evenTotal</td></tr>";
foreach ($columns as $rowIndex => $column) {
    echo "<tr>";
    foreach ($column as $colIndex => $element) {
        $style = '';
        if ($rowIndex == 0 && $colIndex == 0) {
            $style = 'background-color: #808080;';
        } elseif ($rowIndex == 0 && $colIndex == 4) {
            $style = 'background-color: #808080;';
        }
        elseif ($rowIndex == 4 && $colIndex == 0) {
            $style = 'background-color: #808080;';
        }
        elseif ($rowIndex == 4 && $colIndex == 4) {
            $style = 'background-color: #808080;';
        }
        echo "<td style='$style'>$element</td>";
    }
    echo "</tr>";
}
echo "<tr style='display: none;'><td colspan='5'></td></tr>";
echo "<tr style='display: none;'><td colspan='5'></td></tr>";
echo "<tr class='text-center'><td colspan='5'>Total Of All Elements = $total</td></tr>";
$minPositionsStr = implode(', ', array_map(function ($pos) {
    return "[$pos[0],$pos[1]]";
}, $minPositions));
echo "<tr><td colspan='5' style='text-align: center;'>Min Element is $minValue in " . count($minPositions) . " positions $minPositionsStr</td></tr>";
$maxPositionsStr = implode(', ', array_map(function ($pos) {
    return "[$pos[0],$pos[1]]";
}, $maxPositions));
echo "<tr><td colspan='5' style='text-align: center;'>Maximum Element is $maxValue in " . count($maxPositions) . " positions $maxPositionsStr</td></tr>";
echo "</table>";
echo '<br>';

echo '<br>';
echo '<br><h2>QUES 6</h2><----------------------->';
echo '<br>';



// Declare the associative array
$array = array(
    'CA201' => array(
        'Name' => 'Bashiir Abdinor Ahmed ',
        'Phone' => '0615678909',
        'Address' => 'Mogadisho-Somali'
    ),
    'CA205' => array(
        'Name' => 'Abdulahi mohamed faarax',
        'Phone' => '0617890956',
        'Address' => 'Mogadisho-Somali'
    ),
    'CA206' => array(
        'Name' => 'Sadaq Abullhi Rage',
        'Phone' => '0616777399',
        'Address' => 'Mogadisho-Somali'
    )
);

echo '<br>';

echo '<br>';

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
          
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #dee2e6;
        }
        th {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <table class="table table-bordered col-sm-6">
            <thead class="thead-">
                <tr>
                    <th scope="col">Row</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($array as $row => $data): ?>
                    <tr>
                        <td><?php echo $row; ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Phone']; ?></td>
                        <td><?php echo $data['Address']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php

echo '<br><h2>QUES 7</h2><----------------------->';

// Declare the array of student transcripts
$transcripts = array(
    array(
        'Semester', 'Course', 'CW1', 'MidTerm', 'CW2', 'Final', 'Total', 'Status'
    ),
    array(
        'Semester 1', array(
            array('subject1', 9, 26, 10, 40, 85, 'Pass'),
            array('subject2', 9, 26, 10, 40, 85, 'Pass'),
            array('subject3', 9, 26, 10, 40, 85, 'Pass')
        )
    ),
    array(
        'Semester 2', array(
            array('subject1', 9, 26, 10, 0, 45, 'Fail'),
            array('subject2', 9, 26, 10, 40, 85, 'Pass'),
            array('subject3', 9, 26, 10, 40, 85, 'Pass')
        )
    )
);

// Function to print a bordered table using Bootstrap
function printBordereddTable($data)
{
    echo '<table class="table table-bordered col-5">';
    echo '<thead class="thead-">';
    echo '<tr>';
    foreach ($data[0] as $cell) {
        echo '<th>' . $cell . '</th>';
    }
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    for ($i = 1; $i < count($data); $i++) {
        echo '<tr>';
        echo '<td rowspan="' . (count($data[$i][1]) + 1) . '">' . $data[$i][0] . '</td>';
        $subjects = $data[$i][1];
        foreach ($subjects as $subject) {
            echo '<tr>';
            foreach ($subject as $cell) {
                echo '<td>' . $cell . '</td>';
            }
            echo '</tr>';
        }
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}

// Print the array elements as a bordered table
printBordereddTable($transcripts);

?>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .total {
        font-weight: bold;
    }
    .ques{
        font-weight: bold;
    }
</style>