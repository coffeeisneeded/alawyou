<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>ALAW YOU</title>
    <link rel="stylesheet" href="boostrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- topnav and searching box -->
    <div class="topnav">
        <a href="index.html">Home</a>
        <a href="webboard.php">Webboard</a>
        <a class="b" href="loginform.php">Login</a>
        <a class="b" href="register.php">Sign up</a>

    </div>
    <!-- top searching box -->
    <div class="header">
        <h1><b>ALAW YOU</b></h1>
        <p class="sctext">Start searching by using keywords or situation</p>
        <div class="searching">
            <form action="search.php" method="GET">
                <input name="keywordsearch" class="searchbox" type="text" placeholder="Search a section or type a keyword" size="50">
                <button type="submit ">Submit</button>
            </form>
        </div>
        <!-- example try this box -->
        <p class="trythis "><b>Try this !</b></p>
        <center>
            <p class="example ">He stabs me with chobsticks</p>
        </center>
    </div>

    <!-- first section -->
    <div class="d-flex flex-row px-3 py-5 justify-content-center ">
        <div class="p-1 justify-content-center ">
            <div class="d-flex justify-content-center minimizecontent ">
                <div class="flex-column center ">
                    <img src="image/search.svg " width=50px height=50px>
                    <p> </p>
                    <h5>Insight</h5>
                </div>
            </div>
            <div class="d-inline-flex p-2 justify-content-center center minimizecontent ">
                Searching by using only keywords or a situation
            </div>
        </div>
        <div class="p-1 justify-content-center ">
            <div class="d-flex justify-content-center minimizecontent ">
                <div class="flex-column center ">
                    <img src="image/book.svg " width=50px height=50px>
                    <p> </p>
                    <h5>Source</h5>
                </div>
            </div>
            <div class="d-inline-flex p-2 justify-content-center center minimizecontent ">
                Source of information that can be found within one stop
            </div>
        </div>
        <div class="p-1 justify-content-center ">
            <div class="d-flex justify-content-center minimizecontent ">
                <div class="flex-column center ">
                    <img src="image/lightbulb.svg " width=50px height=50px>
                    <p> </p>
                    <h5>Knowledge</h5>
                </div>
            </div>
            <div class="d-inline-flex p-2 justify-content-center center minimizecontent ">
                Center of information which help every people to know more about law
            </div>
        </div>
    </div>
    <!-- end of first section -->

    <!-- second section -->
    <div>

    </div>
    <!-- end of second section -->

    <footer>
    </footer>


</body>

</html>