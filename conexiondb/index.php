<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Sign up</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Password">
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" placeholder="E-Mail">
        <button>Sign up</button>
    </form>

    <h3>Update account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <label for="usernameUpdate">Username</label>
        <input type="text" id="usernameUpdate" name="usernameUpdate" placeholder="Username">
        <label for="passwordUpdate">Password</label>
        <input type="password" id="passwordUpdate" name="passwordUpdate" placeholder="Password">
        <label for="emailUpdate">E-Mail</label>
        <input type="email" id="emailUpdate" name="emailUpdate" placeholder="E-Mail">
        <button>Update</button>
    </form>

    <h3>Delete account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <label for="usernameDelete">Username</label>
        <input type="text" id="usernameDelete" name="usernameDelete" placeholder="Username">
        <label for="passwordDelete">Password</label>
        <input type="password" id="passwordDelete" name="passwordDelete" placeholder="Password">
        <button>Delete</button>
    </form>
</body>

<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    h3 {
        text-align: center;
    }

    label, input {
        margin-bottom: 5px;
    }

    button {
        margin-top: 5px;
    }
</style>

</html>
