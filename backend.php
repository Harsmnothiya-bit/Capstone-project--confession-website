<?php

if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $category = $_POST['category'];
    $text = $_POST['text'];

    $conn = mysqli_connect("localhost", "user", "password", "database_name");
    $sql = "INSERT INTO confessions (date, category, text) VALUES ('$date', '$category', '$text')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

$conn = mysqli_connect("localhost", "user", "password", "database_name");
$sql = "SELECT * FROM confessions";
$result = mysqli_query($conn, $sql);
$confessions = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($conn);
// Check if the confessions file exists, if not create it
if (!file.exists()) {
  file.createNewFile();
}

// Prompt user for confession
System.out.print("Enter your confession: ");
String confession = input.nextLine();
confessions.add(confession);

// Write confessions to file
FileWriter writer = new FileWriter(file, true);
for (String conf : confessions) {
  writer.write(conf + "\n");
}
writer.close();

System.out.println("Confession added successfully!");

?>
