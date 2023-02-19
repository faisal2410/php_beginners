<?php
// Super Global Variables in PHP

// In PHP, there are several pre-defined variables that are available in any scope, known as super global variables. These variables can be accessed from anywhere in your PHP code, and they are prefixed with a special character, "$". These variables are also automatically populated with data by the server, which makes them very useful for a variety of tasks.



// $_GET

// The $_GET super global variable is used to retrieve data from the query string of a URL. For example, if a user navigates to the following URL: http://example.com/index.php?name=John&age=30, you can access the values of "name" and "age" using the $_GET super global variable.

$name = $_GET['name'];
$age = $_GET['age'];

echo "Your name is " . $name . " and you are " . $age . " years old.";
// Output:
// Your name is John and you are 30 years old.

// $_POST

// The $_POST super global variable is used to retrieve data that was submitted through an HTML form. When a form is submitted, the data is sent to the server using the HTTP POST method, and the data is stored in the $_POST super global variable.

$name = $_POST['name'];
$email = $_POST['email'];

echo "Thank you, " . $name . ", for signing up with email: " . $email;
// This code will output a message thanking the user for signing up with their name and email.


// $_SERVER

// The $_SERVER super global variable contains information about the server and the current request. It includes information such as the request method, the URI, the server software being used, and more.

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

echo "You are using the " . $method . " method to access " . $uri;
// This code will output a message indicating the HTTP method and URI being used to access the current page.

// $_SESSION

// The $_SESSION super global variable is used to store data that should be persisted across multiple requests. This is often used to store data that is specific to a user, such as their username or preferences.


session_start();

$_SESSION['username'] = 'JohnDoe';

echo "Welcome, " . $_SESSION['username'];
// This code will output a welcome message using the username stored in the $_SESSION super global variable.

// $_COOKIE

// The $_COOKIE super global variable is used to retrieve data from cookies that were previously set on the client side. Cookies are small pieces of data that are stored on the client's computer and sent back to the server with each request.

$favorite_color = $_COOKIE['favorite_color'];

echo "Your favorite color is " . $favorite_color;
// This code will output the user's favorite color, which was stored in a cookie on the client's computer.

// $_FILES

// The $_FILES super global variable is used to retrieve data that was uploaded through a form using the HTTP POST method with the enctype attribute set to "multipart/form-data". This is commonly used to allow users to upload files to a server.


// $file_name = $_FILES['file']['name'];
// $file_size = $_FILES['



// $_ENV

// The $_ENV super global variable is used to retrieve data from environment variables that are set on the server. Environment variables are system-wide variables that can be accessed by processes running on the server.


$database_host = $_ENV['DATABASE_HOST'];
$database_name = $_ENV['DATABASE_NAME'];

echo "Connecting to " . $database_name . " database on host " . $database_host;
// This code will output a message indicating the name and host of the database being connected to, which was retrieved from environment variables set on the server.

// $GLOBALS

// The $GLOBALS super global variable is used to access global variables from anywhere in your PHP code. This can be useful in certain situations, but it is generally recommended to avoid using global variables as they can make your code more difficult to read and maintain.


$counter = 0;

function increment_counter() {
    global $counter;
    $counter++;
}

increment_counter();

echo "Counter value: " . $GLOBALS['counter'];
// This code will output the value of the $counter variable, which was incremented in the increment_counter() function using the global keyword to access the global variable.

// Conclusion

// Super global variables are an important part of PHP, and they can be used to simplify many common tasks such as retrieving data from the query string of a URL, processing form submissions, and persisting data across multiple requests. By understanding how to use these variables, you can write more efficient and effective PHP code.






