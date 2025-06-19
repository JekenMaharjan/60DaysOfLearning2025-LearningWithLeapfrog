<?php
// # PHP Global Variables - Superglobals:
// -> Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
// -> The PHP superglobal variables are:
//     - $GLOBALS
//     - $_SERVER
//     - $_REQUEST
//     - $_POST
//     - $_GET
//     - $_FILES
//     - $_ENV
//     - $_COOKIE
//     - $_SESSION

//     # PHP $GLOBALS:
//     -> $GLOBALS is an array that contains all global variables.

//         # Global Variables
//         -> Global variables are variables that can be accessed from any scope.
//         -> Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.
//         -> To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.
//         -> Example: Refer to the global variable $x inside a function:
                $x = 75;
                
                function myfunction() {
                echo $GLOBALS['x'];
                }
                
                myfunction()
        // -> This is different from other programming languages where global variables are available without specifically referring to them as global.
        // -> Example: In PHP you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax:
                $x = 75;
                
                function myfunction() {
                echo $x;
                }
            
            myfunction()
        // -> You can also refer to global variables inside functions by defining them as global with the global keyword.
        // -> Example: Define $x as global inside a function:
                $x = 75;
                
                function myfunction() {
                global $x;
                echo $x;
                }
                
                myfunction()

        // # Create Global Variables:
        // -> Variables created in the outer most scope are global variables either if they are created using the $GLOBALS syntax or not:
        // -> Example:
                $x = 100;
        
                echo $GLOBALS["x"];
                echo $x;
        // -> Variables created inside a function belongs only to that function, but you can create global variables inside a function by using the $GLOBALS syntax:
        // -> Example: Create a global variable from inside a function, and use it outside of the function:
                function myfunction() {
                $GLOBALS["x"] = 100;
                }
                
                myfunction();
                
                echo $GLOBALS["x"];
                echo $x;

    // # PHP - $_SERVER:
    // -> $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
    // -> The example below shows how to use some of the elements in $_SERVER:
    // -> Example:
            echo $_SERVER['PHP_SELF'];
            echo $_SERVER['SERVER_NAME'];
            echo $_SERVER['HTTP_HOST'];
            echo $_SERVER['HTTP_REFERER'];
            echo $_SERVER['HTTP_USER_AGENT'];
            echo $_SERVER['SCRIPT_NAME'];
    // -> The following table lists the most important elements that can go inside $_SERVER:
                
    //         Element/Code	                            Description
    //         -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //         $_SERVER['PHP_SELF']	                    Returns the filename of the currently executing script
    //         $_SERVER['GATEWAY_INTERFACE']	            Returns the version of the Common Gateway Interface (CGI) the server is using
    //         $_SERVER['SERVER_ADDR']	                    Returns the IP address of the host server
    //         $_SERVER['SERVER_NAME']	                    Returns the name of the host server (such as www.w3schools.com)
    //         $_SERVER['SERVER_SOFTWARE']	                Returns the server identification string (such as Apache/2.2.24)
    //         $_SERVER['SERVER_PROTOCOL']	                Returns the name and revision of the information protocol (such as HTTP/1.1)
    //         $_SERVER['REQUEST_METHOD']	                Returns the request method used to access the page (such as POST)
    //         $_SERVER['REQUEST_TIME']	                Returns the timestamp of the start of the request (such as 1377687496)
    //         $_SERVER['QUERY_STRING']	                Returns the query string if the page is accessed via a query string
    //         $_SERVER['HTTP_ACCEPT']	                    Returns the Accept header from the current request
    //         $_SERVER['HTTP_ACCEPT_CHARSET']	            Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
    //         $_SERVER['HTTP_HOST']	                    Returns the Host header from the current request
    //         $_SERVER['HTTP_REFERER']	                Returns the complete URL of the current page (not reliable because not all user-agents support it)
    //         $_SERVER['HTTPS']	                        Is the script queried through a secure HTTP protocol
    //         $_SERVER['REMOTE_ADDR']	                    Returns the IP address from where the user is viewing the current page
    //         $_SERVER['REMOTE_HOST']	                    Returns the Host name from where the user is viewing the current page
    //         $_SERVER['REMOTE_PORT']	                    Returns the port being used on the user's machine to communicate with the web server
    //         $_SERVER['SCRIPT_FILENAME']	                Returns the absolute pathname of the currently executing script
    //         $_SERVER['SERVER_ADMIN']	                Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
    //         $_SERVER['SERVER_PORT']	                    Returns the port on the server machine being used by the web server for communication (such as 80)
    //         $_SERVER['SERVER_SIGNATURE']	            Returns the server version and virtual host name which are added to server-generated pages
    //         $_SERVER['PATH_TRANSLATED']	                Returns the file system based path to the current script
    //         $_SERVER['SCRIPT_NAME']	                    Returns the path of the current script
    //         $_SERVER['SCRIPT_URI']	                    Returns the URI of the current page

    // # PHP - $_REQUEST:
    // -> $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data.
    // -> In other words, $_REQUEST is an array containing data from $_GET, $_POST, and $_COOKIE.
    // -> You can access this data with the $_REQUEST keyword followed by the name of the form field, or cookie, like this:
        $_REQUEST['firstname']

        // # Using $_REQUEST on $_POST Requests
        // -> POST request are usually data submitted from an HTML form.
        // -> Here is an example of how a HTML form could look like:
        // -> HTML form:
                <html>
                <body>

                <form method="post" action="demo_request.php">
                Name: <input type="text" name="fname">
                <input type="submit">
                </form>

                </body>
                </html>
        // -> When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
        // -> In the action file we can use the $_REQUEST variable to collect the value of the input field.
        // -> PHP file:
                $name = $_REQUEST['fname'];
                echo $name;
        // -> In the example below we have put the HTML form and PHP code in the same PHP file.
        // -> We have also added some extra lines for security.
        // -> Example:
                <html>
                <body>

                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name: <input type="text" name="fname">
                <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_REQUEST['fname']);
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
                }
                ?>

                </body>
                </html>

    // # Using $_REQUEST on $_GET Requests
    // -> GET request can be form submissions as in the example above, with the method attribute of the HTML <form> element set to GET.
    // -> GET requests can also be data from a query string (information added after a URL address).
    // -> Here is an example of how an HTML hyperlink, with a query string could look like:
    // -> HTML link:
            <html>
            <body>

            <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

            </body>
            </html>
    // -> When a user clicks the link, the query string data is sent to demo_phpfile.php.
    // -> In the PHP file we can use the $_REQUEST variable to collect the value of the query string.
    // -> Example: The PHP file demo_phpfile.php:
            <html>
            <body>

            <?php
            echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];
            ?>

            </body>
            </html>

    // # PHP - $_POST:
    // -> $_POST contains an array of variables received via the HTTP POST method.
    // -> There are two main ways to send variables via the HTTP Post method:
    //     - HTML forms
    //     - JavaScript HTTP requests

    //     # $_POST in HTML Forms
    //     -> A HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".
    //     -> To demonstrate this, we start by creating a simple HTML form:
    //     -> HTML Form:
                <html>
                <body>

                <form method="POST" action="demo_request.php">
                Name: <input type="text" name="fname">
                <input type="submit">
                </form>

                </body>
                </html>
        // -> When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
        // -> In the action file we can use the $_POST variable to collect the value of the input field.
        // -> PHP file:
                $name = $_POST['fname'];
                echo $name;
        // -> In the example below we have put the HTML form and PHP code in the same PHP file.
        // -> We have also added some extra lines for security.
        // -> Example:
                <html>
                <body>

                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                Name: <input type="text" name="fname">
                <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['fname']);
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
                }
                ?>

                </body>
                </html>

        // # $_POST in JavaScript HTTP Requests:
        // -> When sending a HTTP request in JavaScript, you can specify that the HTTP method is POST.
        // -> To demonstrate this we start by creating a JavaScript function containing a HTTP request:
        // -> JavaScript function:
                function myfunction() {
                const xhttp = new XMLHttpRequest();
                xhttp.open("POST", "demo_phpfile.php");
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onload = function() {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
                xhttp.send("fname=Mary");
                }
                }
        // -> The code above will:
        //     1. Intiate a HTTP request
        //     2. Set the HTTP method to POST
        //     3. Set a valid request header
        //     4. Create a function to execute when the request is done
        //     5. Send the HTTP request with a variable fname set to Mary
        // -> Look at the function that will be executed when the request is done:
                xhttp.onload = function() {
                    document.getElementById("demo").innerHTML = this.responseText;
                }
        // -> It will try to write a response from the operation in a HTML element with id="demo".
        // -> Let us make a HTML page with such element, and also a button that executes the function.
        // -> If we also add the the JavaScript, the page looks like this:
        // -> Example: How to post and receive data from a HTTP request:
                <html>
                <script>
                function myfunction() {
                    const xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "demo_ajax.php");
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.onload = function() {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                    xhttp.send("fname=Mary");
                    }
                }
                </script>
                <body>

                <button onclick="myfunction()">Click me!</button>

                <h1 id="demo"></h1>

                </body>
                </html>
        // -> In the PHP file that receive this HTTP request (demo_ajax.php), we simply use the $_POST variable to retrieve the fname variable, and writes it as a response.
        // -> PHP file:
                $name = $_POST['fname'];
                echo $name;

    // # PHP $_GET:
    // -> $_GET contains an array of variables received via the HTTP GET method.
    // -> There are two main ways to send variables via the HTTP GET method:
    //     - Query strings in the URL
    //     - HTML Forms

    //     # Query string in the URL
    //     -> A query string is data added at the end of a URL. In the link below, everything after the ? sign is part of the query string:
                <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
        // -> The query string above contains two key/value pairs:
        //         subject=PHP
        //         web=W3schools.com
        // -> In the PHP file we can use the $_GET variable to collect the value of the query string.
        // -> Example:The PHP file demo_phpfile.php:
                <html>
                <body>

                <?php
                echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
                ?>

                </body>
                </html>

        // # $_GET in HTML Forms
        // -> A HTML form submits information via the HTTP GET method if the form's method attribute is set to "GET".
        // -> To demonstrate this, we start by creating a simple HTML form:
        // -> HTML Form:
                <html>
                <body>

                <form action="welcome_get.php" method="GET">
                Name: <input type="text" name="name">
                E-mail: <input type="text" name="email">
                <input type="submit">
                </form>

                </body>
                </html>
        // -> When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.
        // -> The form fields are sent to the PHP file, with your input, as query strings:
                welcome_get.php?name=John&email=john@example.com
        // -> In the action file we can use the $_GET variable to collect the value of the input fields.
        // -> Example: PHP code inside the welcome_get.php page:
                <html>
                <body>

                Welcome <?php echo $_GET["name"]; ?><br>
                Your email address is: <?php echo $_GET["email"]; ?>

                </body>
                </html>
        