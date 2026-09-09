<?php

// Starting data
$customerType = "student";
$mealPeriod = "lunch";

$menu = [
    "Burger" => 6.50,
    "Salad" => 5.75,
    "Pizza" => 4.50,
    "Soup" => 3.25
];


// ------------------------------------
// Ternary Expression
// ------------------------------------

$discountMessage = ($customerType == "student")
    ? "Student discount available"
    : "Regular price";


// ------------------------------------
// Switch Statement
// ------------------------------------

switch ($mealPeriod) {

    case "breakfast":
        $mealMessage = "Breakfast is served until 10:30 AM.";
        break;

    case "lunch":
        $mealMessage = "Lunch is now being served.";
        break;

    case "dinner":
        $mealMessage = "Dinner begins at 5:00 PM.";
        break;

    default:
        $mealMessage = "The café is currently closed.";
}


// ------------------------------------
// Match Expression
// ------------------------------------

$discountRate = match ($customerType) {
    "student" => 0.10,
    "employee" => 0.15,
    "guest" => 0.00,
    default => 0.00
};

$discountPercent = $discountRate * 100;


// ------------------------------------
// Menu Total
// ------------------------------------

$menuTotal = 0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Campus Café</title>
</head>

<body>

    <h1>Campus Café</h1>

    <p>
        <?php echo $discountMessage; ?>
    </p>

    <p>
        <?php echo $mealMessage; ?>
    </p>

    <p>
        Your discount is <?php echo $discountPercent; ?>%.
    </p>


    <h2>Menu</h2>

    <table>

        <thead>
            <tr>
                <th>Menu Item</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($menu as $item => $price) { ?>

                <tr>
                    <td><?php echo $item; ?></td>
                    <td>$<?php echo number_format($price, 2); ?></td>
                </tr>

                <?php
                $menuTotal += $price;
                ?>

            <?php } ?>

        </tbody>

    </table>


    <p>
        Number of menu items:
        <?php echo count($menu); ?>
    </p>

    <p>
        Combined menu price:
        $<?php echo number_format($menuTotal, 2); ?>
    </p>

</body>

</html>
