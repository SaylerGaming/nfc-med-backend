<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/auth/login" method="post">
        @csrf
        <input type="text" name='email' placeholder="email">
        <input type="text" name='password' placeholder="password">
        <button type="accept">login</button>
    </form>
    <h1>Register</h1>
    <form action="/auth/register" method="post">
        @csrf
        <input type="text" name='name' placeholder="name">
        <input type="text" name='email' placeholder="email">
        <input type="text" name='password' placeholder="password">
        <input type="text" name='password_confirmation' placeholder="password confirmation">
        <button type="accept">register</button>
    </form>

</body>
</html>