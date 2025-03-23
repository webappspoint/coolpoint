<?php
// List of the 10 richest people in the world
$richest_people = [
    ["name" => "Bernard Arnault", "net_worth" => "$230B", "company" => "LVMH"],
    ["name" => "Elon Musk", "net_worth" => "$200B", "company" => "Tesla, SpaceX"],
    ["name" => "Jeff Bezos", "net_worth" => "$180B", "company" => "Amazon"],
    ["name" => "Mark Zuckerberg", "net_worth" => "$160B", "company" => "Meta"],
    ["name" => "Bill Gates", "net_worth" => "$130B", "company" => "Microsoft"],
    ["name" => "Warren Buffett", "net_worth" => "$120B", "company" => "Berkshire Hathaway"],
    ["name" => "Larry Ellison", "net_worth" => "$110B", "company" => "Oracle"],
    ["name" => "Steve Ballmer", "net_worth" => "$100B", "company" => "Microsoft"],
    ["name" => "Mukesh Ambani", "net_worth" => "$95B", "company" => "Reliance"],
    ["name" => "Larry Page", "net_worth" => "$90B", "company" => "Google"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Richest People in the World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Top 10 Richest People in the World</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Net Worth</th>
                <th>Company</th>
            </tr>
            <?php foreach ($richest_people as $index => $person): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($person['name']); ?></td>
                    <td><?php echo htmlspecialchars($person['net_worth']); ?></td>
                    <td><?php echo htmlspecialchars($person['company']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
