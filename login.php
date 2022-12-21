<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url('img/carousel2.jpg');
        background-size: 100%;
        
    }
    
    .container {
        width: 100%;
        display: flex;
        max-width: 850px;
        background: rgb(230, 227, 227,0.6);
        border-radius: 15px;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    
    .login {
        width: 400px;
    }
    
    form {
        width: 250px;
        margin: 60px auto;
    }
    
    h1 {
        margin: 20px;
        text-align: center;
        font-weight: bolder;
        text-transform: uppercase;
    }
    
    hr {
        border-top: 3px solid #ffa12c;
    }
    
    p {
        text-align: center;
        margin: 10px;
    }
    
    .right img {
        width: 450px;
        height: 100%;
        padding-right: 50px;
        padding-top: 35px;
        padding-bottom: 35px;
    }
    
    form label {
        display: block;
        font-size: 16px;
        font-weight: 600;
        padding: 5px;
    }
    
    input {
        width: 100%;
        margin: 2px;
        border: none;
        outline: none;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    
    button {
        border: none;
        outline: none;
        padding: 8px;
        width: 252px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        border-radius: 5px;
        background: #ffa12c;
    }
    
    button:hover {
        background: rgba(214, 86, 64, 1);
    }
    
    
    @media (max-width: 880px) {
        .container {
            width: 100%;
            max-width: 750px;
            margin-left: 20px;
            margin-right: 20px;
        }
    
        form {
            width: 300px;
            margin: 20px auto;
        }
    
        .login {
            width: 400px;
            padding: 20px;
        }
    
        button {
            width: 100%;
        }
    
        .right img {
            width: 100%;
            height: 100%;
        }
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN 043950 </title>
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="config/ceklogin.php">
                <h1>Login</h1>
                <hr>
                <p>SD Negeri 043950</p>
                <label for="user-username">Username</label>
                <input id="user-username" class="form-content" type="username" name="username" autocomplete="on" required />
                <label for="user-password">Password</label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <button>Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/iconsd.png" alt="SD Negeri 043950">
        </div>
    </div>
</body>

</html>