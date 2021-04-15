<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.lightcounting.com/build/favicon.ico" />
    <link rel="stylesheet" href="/css/main.css" />
    <title>Document</title>
</head>
<body class="is-preload homepage">
    <div id="page-wrapper">
        @section('header')
        <div id="header-wrapper">
            <header id="header" class="container">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="/images/wise-intern-logo.png" width="103" height="49" alt="Wise Intern"/></a>
                </div>
                <!-- Nav -->
                <nav id="nav">
                    <ul>
			            <li><a href="projects.html">Projects</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#" class="button-solid">Signup</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        @show

        <div>@yield('content')</div>

        @section('footer')
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
        @show
    </div>
    
</body>
</html>