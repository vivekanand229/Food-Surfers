<?php
// Database connection settings
$servername = "localhost";
$username = "u484908010_Rahul";
$password = "Rahul123";
$dbname = "u484908010_FoodSurfers";




















// List of mobile numbers to use for updating
$mobileNumbers = ['11111', '22222', '33333', '44444', '55555'];

try {
    // Create a PDO database connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Initialize a variable to keep track of the mobile number index
    $mobileIndex = 0;

    // Retrieve rows where RM_mobile is '8956925460'
    $stmt = $conn->prepare("SELECT * FROM NEW_LEADS WHERE RM_mobile = '8956925460'");
    $stmt->execute();

    // Update rows in a round-robin fashion
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $newMobile = $mobileNumbers[$mobileIndex];
        $leadId = $row['lead_id']; // Replace with your actual primary key field name

        // Update the RM_mobile field
        $updateStmt = $conn->prepare("UPDATE NEW_LEADS SET RM_mobile = :newMobile WHERE lead_id = :leadId");
        $updateStmt->bindParam(':newMobile', $newMobile);
        $updateStmt->bindParam(':leadId', $leadId);
        $updateStmt->execute();

        // Move to the next mobile number in a round-robin fashion
        $mobileIndex = ($mobileIndex + 1) % count($mobileNumbers);
    }

    echo "Records updated successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>
