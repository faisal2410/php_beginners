<?php
// In PHP, $_GET is a superglobal variable that contains the values of variables sent to the current script via the URL parameters. It is used to retrieve data that is submitted to the server via HTTP GET request.

// Here is an example that demonstrates how to use $_GET to retrieve data from a query string:

if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    echo "You searched for: $search_term";
}
// In the above example, we check if the search parameter is set in the $_GET variable, and if it is, we retrieve its value and use it to display a search result.

// Real-life use cases for $_GET include:

// Search functionality: $_GET is commonly used to implement search functionality in a web application. For example:

if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    // search database for matching results...
}

// Pagination: $_GET is often used to implement pagination in a web application. For example:

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$items_per_page = 10;
$offset = ($page - 1) * $items_per_page;
// retrieve items from database using $offset and $items_per_page...

// In the above example, we use the page parameter in $_GET to calculate the offset for the database query, so that we can retrieve the correct set of items for the current page.

// Sorting and filtering: $_GET can be used to implement sorting and filtering functionality in a web application. For example:

if (isset($_GET['sort_by'])) {
    $sort_by = $_GET['sort_by'];
    // sort results based on $sort_by...
}
if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];
    // filter results based on $filter...
}
// In the above example, we use the sort_by and filter parameters in $_GET to sort and filter the results of a database query.

// Sharing data: $_GET can be used to share data between different web pages or applications. For example, we can use a link with a query string to pass data from one page to another:

// <a href="example.php?param1=value1&param2=value2">Link to example.php</a>

// In the above example, we use the param1 and param2 parameters in $_GET to pass data from the current page to example.php.

// In summary, $_GET is a superglobal variable in PHP that is used to retrieve data that is submitted to the server via HTTP GET request. It is commonly used for search functionality, pagination, sorting and filtering, and sharing data between different web pages or applications. However, because it exposes data via the URL, it is important to use it carefully and validate user input to prevent security vulnerabilities such as CSRF and XSS.



