<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Timer</title>    
    <link rel="stylesheet" type="text/css" href="styles.css?<?php echo time(); ?>" />
</head>
<body>

    <div id="Timer"></div>
    
    <script>
    // Set the date we're counting down to
    var month = new Date().getMonth() + 1;   
    var day = new Date().getDate();
    var year = new Date().getFullYear();
    var hour = new Date().getHours();
    var minutes = new Date().getMinutes() + 1; //1 minutes
    var second = new Date().getSeconds() + 2;
    var time = hour + ":" + minutes + ":" + second;
    var ResetTime = new Date(month + " " + day + ", " + year + " " + time).getTime();


    var x = setInterval(function() {
     
        var now = new Date().getTime(); 
        var distance = ResetTime - now; 
       
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("Timer").innerHTML = "<h1>Login is blocked</h1>" + minutes + "m " + seconds + "s ";
       

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("Timer").innerHTML = "<?php session_destroy();  ?>";
            window.location.href = 'Login_form.php';
        }
    }, 1000);//1 sec = 1000 milisecond
    </script>

</body>

</html>