<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice_table"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to select data from details_of_products view
$sql = "SELECT * FROM details_of_products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Data from details_of_products</h2>";
    echo "<table border='1'><tr>";

    // Output table column headers
    $field_info = $result->fetch_fields();
    foreach ($field_info as $field) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr>";

    // Output table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>{$cell}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>



//insert php.......................


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice_table"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statements to insert data into each table
$sql_customer = "INSERT INTO customers (customer_name) VALUES (?)";
$sql_order = "INSERT INTO orders (order_date, customer_id) VALUES (?, ?)";
$sql_product = "INSERT INTO products (product_name) VALUES (?)";
$sql_order_item = "INSERT INTO order_items (quantity, order_id, product_id) VALUES (?, ?, ?)";
$sql_order_status = "INSERT INTO order_status (status, order_id) VALUES (?, ?)";

// Prepare and bind parameters for each SQL statement
$stmt_customer = $conn->prepare($sql_customer);
$stmt_customer->bind_param("s", $customer_name);

$stmt_order = $conn->prepare($sql_order);
$stmt_order->bind_param("si", $order_date, $customer_id);

$stmt_product = $conn->prepare($sql_product);
$stmt_product->bind_param("s", $product_name);

$stmt_order_item = $conn->prepare($sql_order_item);
$stmt_order_item->bind_param("iii", $quantity, $order_id, $product_id);

$stmt_order_status = $conn->prepare($sql_order_status);
$stmt_order_status->bind_param("si", $status, $order_id);

// Get form data
$customer_name = $_POST['customer_name'];
$order_date = $_POST['order_date'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];

// Start transaction
$conn->begin_transaction();

// Execute each SQL statement
if ($stmt_customer->execute() && $stmt_order->execute() && $stmt_product->execute()) {
    $customer_id = $stmt_customer->insert_id;
    $order_id = $stmt_order->insert_id;
    $product_id = $stmt_product->insert_id;
    
    if ($stmt_order_item->execute() && $stmt_order_status->execute()) {
        // Commit transaction if all statements are successful
        $conn->commit();
        echo "Data inserted successfully.";
    } else {
        // Rollback transaction if any statement fails
        $conn->rollback();
        echo "Error: " . $conn->error;
    }
} else {
    // Rollback transaction if any statement fails
    $conn->rollback();
    echo "Error: " . $conn->error;
}

// Close statements and connection
$stmt_customer->close();
$stmt_order->close();
$stmt_product->close();
$stmt_order_item->close();
$stmt_order_status->close();
$conn->close();
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert Form</title>
</head>
<body>
    <h2>Data Insert Form</h2>
    <form action="insert_data.php" method="POST">
        <!-- Customer Information -->
        <label for="customer_name">Customer Name:</label><br>
        <input type="text" id="customer_name" name="customer_name"><br>
        
        <!-- Order Information -->
        <label for="order_date">Order Date:</label><br>
        <input type="date" id="order_date" name="order_date"><br>
        
        <!-- Product Information -->
        <label for="product_name">Product Name:</label><br>
        <input type="text" id="product_name" name="product_name"><br>
        
        <!-- Order Item Information -->
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br>
        
        <!-- Order Status Information -->
        <label for="status">Status:</label><br>
        <input type="text" id="status" name="status"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
