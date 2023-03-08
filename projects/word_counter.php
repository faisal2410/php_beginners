<!DOCTYPE html>
<html>
<head>
    <title>Word Counter</title>
</head>
<body>
    <h1>Word Counter</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the text string from the form data
        $text = $_POST["text"];
        
        // Split the text into an array of words
        $words = explode(" ", $text);
        
        // Convert all of the words to lowercase
        $words = array_map('strtolower', $words);
        
        // Count the number of occurrences of each word
        $word_counts = array_count_values($words);
        
        // Find the most frequently occurring word(s)
        $max_count = max($word_counts);
        $most_frequent_words = array_keys($word_counts, $max_count);
        
        // Display the results
        echo "<p>Text: $text</p>";
        echo "<p>Number of words: " . count($words) . "</p>";
        echo "<p>Most frequent word(s): ";
        foreach ($most_frequent_words as $word) {
            echo "$word ";
        }
        echo "</p>";
    }
    ?>
    <form method="post">
        <label for="text">Enter text:</label><br>
        <textarea id="text" name="text" rows="10" cols="50"></textarea><br>
        <button type="submit">Count words</button>
    </form>
</body>
</html>
