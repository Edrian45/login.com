<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        align-items: center;
        justify-content: center;
        background-image: url(https://image.tmdb.org/t/p/original/8s1Cym5F7EesthvaLMDvi6DpMK5.jpg);
       background-size: cover;
       background-repeat: no-repeat;
        
    }
    .card{
        font-family: monospace;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
        
        
    }
    form{
       width: 290px;
       height: 60vh;
       padding: 20px;
        backdrop-filter: blur(5px);
        text-align: center;
    }
    form input:hover{
       cursor: pointer;
       background-color: aqua;
       
    }
    input{
        height: 20px;
        margin-bottom: 10px;
        width: 272px;
        height: 30px;
        border-radius: 5px;
        text-align: left;
    }
    form .panel p{
        display: flex;
    }
    header h1{
        text-align: center;
    }
    footer{
        text-align: center;
        margin-top: 70vh;
        background: rgba(82, 81, 81, 0.8);
        font-family: monospace;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        
    }
    .panel button{
        overflow: hidden;
        width: 100px;
        padding: 10px;
        margin-top: 5px;
        text-align: center;
    }
    button:hover{
        background-color: blue;
        cursor: pointer;
    }
</style>
<body>
    <div class="card">
        <form action="login">
            <header>
                <h1>login</h>
            </header>
            <div class="panel">
                <p>Email:</p>
                <input type="email" name="email" id="email" required>
                <p>Password:</p>
                <input type="password" name="password" id="password" required>
                <button type="submit" onclick="login(event)">Log in</button>
            </div>
        </form>
    </div>
    <footer>2024-<?php echo date("Y");?>  Login @Edrian Claveria</footer>
    <script>
        function login(event){
            event.preventDefault();
            let email=document.getElementById('email').value;
            let password=document.getElementById('password').value;

            if(email==="edrianclaveria24@gmail.com" && password==="12345"){
                <?php $_SESSION['loggedin'] = true; ?>
                location.href='s.php';
            }else{
                alert('Wrong Password/ Email Address');
            }
        }
    </script>
</body>
</html>