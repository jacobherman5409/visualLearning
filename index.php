<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visuallearning</title>
</head>
<body>
    <div class=outer_frm>
        <form name="login" onsubmit="return validateForm()">
            <!-- <fieldset> -->
                <!-- <label for=fname>username:</label><br> -->
                <input type="text" id="fname" name="fname" placeholder ="username"><br>
                <!-- <label for=pwd>password:</label><br> -->
                <input type="text" id="pwd" name="pwd" placeholder="password"><br>
                <div id="button_wrapper">
                    <input type="submit" value="submit">
                </div>
                
             <!-- </fieldset>  -->
        </form>

    </div>
    <script>
        function validateForm(){
            var x = document.forms["login"]["fname"].value;
            var y = document.forms["login"]["pwd"].value;
            if( x == "" || y == "") {
                alert("must be filled out");

                return false;
            }
        }
    </script>
</body>
</html>