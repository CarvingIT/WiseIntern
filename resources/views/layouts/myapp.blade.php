<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.lightcounting.com/build/favicon.ico" />
    <link rel="stylesheet" href="/css/main.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        #header-wrapper {
            background-color: white;
            color: #333;
            padding: 5px; /* Reduced padding */
            display: flex; /* Added flexbox */
            justify-content: space-between; /* Align items */
            align-items: center; /* Align items */
        }

        #logo img {
            vertical-align: middle;
        }

        #nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex; /* Added flexbox */
        }

        #nav ul li {
            margin-right: 10px;
        }

        #nav ul li:last-child {
            margin-right: 0;
        }

        #footer-wrapper {
            background-color: #333;
            color: #fff;
            padding: 5px; /* Reduced padding */
            margin-top: 50px; /* Increased margin to move footer below table */
        }

        #footer ul {
            list-style: none;
            padding: 0;
        }

        #footer ul li {
            display: inline;
            margin-right: 10px;
        }

        #footer ul li:last-child {
            margin-right: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .textcenter {
            text-align: center;
        }

        .widget.contact {
            margin-top: 20px;
        }

        .button-solid {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .button-solid:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="is-preload homepage">
    <div id="header-wrapper">
        <header id="header" class="container">
            <!-- Logo -->
            <div id="logo">
                <a href="index.html"><img src="/images/wise-intern-logo.png" width="103" height="49" alt="Wise Intern"/></a>
            </div>
            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li><a href="myprojects">Projects</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact">Contact</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="#" class="button-solid">Signup</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="col-12 textcenter">
                    <section class="widget contact">
                        <ul>
                            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        </ul>
                        <div id="copyright">
                            &copy; 2021 Wise Intern. All rights reserved
                        </div>
                    </section>
                </div>
            </div>
        </footer>
    </div>
    
</body>
</html>
