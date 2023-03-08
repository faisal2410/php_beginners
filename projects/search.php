<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>
<body>
    <h1>Search Student Name</h1>
	<form action="search.php" method="post" >
		<label for="student">Search by title:</label>
		<input type="text" name="student" id="student">		
		<button type="submit">Search</button>
	</form>
<br/>
    <?php
// retrieve search query from query parameter

$query = isset( $_REQUEST['student'] ) ? $_REQUEST['student'] : '';
echo "User is searched for ".$query."<br/><br/>";

// perform search and retrieve results from database
$results = search_student( $query );


function search_student( $query ) {
    // perform search and retrieve results from database
    $db = array("Faisal","Talha","Afnan" );
   $searchResult = array_search( $query, $db );

// Output the search result
if ( $searchResult !== false ) {
    echo "The searched student " . $query . " is at index " . $searchResult;
} else {
    echo "The searched student " . $query . " is not found in our database.";
}
}
?>

</body>
</html>