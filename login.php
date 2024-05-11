<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10;
            background-color: antiquewhite;
        }

        .container {
            width: 350px;
            border: 2px solid #463d3d;
            padding: 60px;
            background-color: #fff;

        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        label,
        input,
        button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"] {
            padding: 9px;
        }

        button {
            background-color: #b94141;
            color: azure;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="controllers/loginbackend.php" method="post">
            <h1>Login</h1>
            <label name="email" for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input name="password" type="password" id="password" name="password" required>
            <br>
            <button name="l_user" type="submit">Submit</button>
        </form>
    </div>
</body>

</html>