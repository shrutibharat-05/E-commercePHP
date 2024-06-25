<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chat AI Assistant</title>
<link rel="stylesheet" href="chat.css">
</head>
<body>

<h1>Chat AI Assistant</h1>

<div class="container">
  <form action="chat.php" method="GET">
    <label for="user_input">Your message:</label>
    <input type="text" id="user_input" name="user_input" required>
    <button type="submit">Send</button><br><br>
    
  </form><form action="shop.php">
  <button  type="submit">Go back</button>
</form>
</div>

</body>
</html>
<center>
<?php

// Define array of possible user inputs and corresponding AI assistant responses
$responses = [
    "hello" => "Hi there! How can I assist you today?",
    "who are you" => "I'm just a virtual assistant, but I'm here to help you!",
    "product" => "Sure, let me help you find the perfect product. What are you looking for?",
    "bye" => "Goodbye! Feel free to reach out if you need assistance in the future.",
    "default" => "I'm sorry, I didn't understand that. Can you please rephrase?"
];


$userInput = isset($_GET['user_input']) ? strtolower($_GET['user_input']) : "hello";


if (array_key_exists($userInput, $responses)) {
    echo $responses[$userInput];}
    else {
    echo $responses["default"];
}
?>
