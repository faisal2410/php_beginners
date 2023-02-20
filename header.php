<?php
// In PHP, the "header" function is used to send a raw HTTP header to the client's web browser. An HTTP header is a set of instructions that the server sends to the client's web browser before it sends the actual page content. Headers contain metadata about the page, such as the content type, cache control, and location of the page.

// The "header" function in PHP allows you to manually set these headers and send them to the client's web browser. Here is the basic syntax of the "header" function:

// header(string $header, bool $replace = true, int $http_response_code = null): void
// Let's break down what each part of this function does:

// The first parameter, $header, is a required string that contains the header you want to set. The header should be in the format of "Header-Name: Header-Value". For example, to set the content type of the page to be HTML, you would use: header('Content-Type: text/html');

// The second parameter, $replace, is an optional boolean that specifies whether to replace any existing headers with the same name. By default, this is set to "true", meaning that any existing header with the same name will be replaced. If you set this to "false", the new header will be appended to any existing headers with the same name.

// The third parameter, $http_response_code, is an optional integer that specifies the HTTP response code to send. For example, if you want to send a "301 Moved Permanently" redirect header, you would use: header('Location: http://example.com/new-page.php', true, 301);

// Here's an example of how you might use the "header" function to send a redirect header:


// header('Location: http://example.com/new-page.php');
// exit;


// In this example, we're using the "header" function to send a "Location" header, which tells the client's web browser to redirect to a new page. We're using the "exit" function to stop the script from executing any further, since we don't want any content to be sent to the client's browser before the redirect happens.





