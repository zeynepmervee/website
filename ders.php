<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: navy;
            color: lightskyblue;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 13%;
        }
        .submit-button {
            background-color: navy;
            color: white;
            padding: 3px 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .form-group {
            display: inline-block;
            margin-right: 10px;
        }
        .register-form {
            width: 20%;
            position: fixed;
            bottom: 150px;
            right: 150px;
            padding: 30px;
              
        }
        .register-form label {
            display: block;
            margin-bottom: 5px;
        }
        .register-form input {
            width: calc(150% - 12px);
            padding: 5px;
            margin-bottom: 5px;
            border: 1px solid #000;
            border-radius: 3px;
        }
        .register-form button {
            width: calc(60% - 12px);
            padding: 5px;
            background-color: green;
            color: white;
            border: 1px solid #000;
            border-radius: 3px;
            cursor: pointer;
        }
        #ustDiv {
            position: fixed;
            top: 10px;
            right: 60px;
            background-color: navy;
            padding: 10px;
            border: 0px solid #ccc;
            border-radius: 5px;
        }
        .altiCizik {
            text-decoration: underline;
            cursor: pointer;
        }
        .altiCizik2 {
            text-decoration: underline;
            cursor: pointer;
            margin-left: 30px;
        }
        .altiCizik3 {
            text-decoration: underline;
            cursor: pointer;
            margin-left: 1px;
        }
        .forgot-password {
            display: inline-block;
            color: lightskyblue; 
            cursor: pointer;
            margin-top: 6px; 
            margin-left: 32px;
        }
        .welcome-message {
            position: fixed;
            bottom: 230px;
            left: 120px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<header>
    <h2><span class="altiCizik2">Circuit Analysis</span></h2>
    <h5><span class="altiCizik2">English</span> <span class="altiCizik3">Türkçe</span></h5>

    <div id="ustDiv">
        <div class="form-group">
            <label for="email">E-Mail</label><br>
            <input type="text" id="email" name="email" required><br>
        </div>
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" required><br>
        </div>
    
        <input type="submit" value="Log In" class="submit-button"><br>
        <input type="checkbox" id="check" name="check">
        <label for="check">Keep Me Signed In</label>
        <span class="forgot-password altiCizik">Forgot Password?</span>
    </div>
</header>

<div class="register-form">   
    <h2>Sign Up</h2>
    <h3>It is quick and easy</h3>
    
    <form method="post" action="register_process.php">
       
        <label for="email"></label><br>
        <input type="email" id="email" name="email" placeholder="Email Adress" required><br>
        
        <label for="job"></label><br>
        <input type="text" id="job" name="job" placeholder="Job" required><br>
        
        <label for="password"></label><br>
        <input type="password" id="password" name="password" placeholder="Password" required><br>
        
        <label for="confirm_password"></label><br>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required><br><br>
        
        <br><button type="submit">Sign Up</button><br>
    </form>
</div>

<div class="welcome-message">
    <p>Welcome to Circuit Analysis Platform...</p>
    <p>This platform serves to perform the analysis of direct current circuits with the solution<br>steps.</p>
    <p>The details about how to use the software will be explained in the page directed after<br>the login successful.</p>
    <p>The registration process is required to protect system resources and to obtain user<br>feedback about the software.</p>
    <p>Your feedback is very important for us.</p>
    <p>After using the software, you can send your feedback to us from the next page.</p>
</div>
</body>
</html>
