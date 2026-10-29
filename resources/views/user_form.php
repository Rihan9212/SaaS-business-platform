<html>
    <head>Send POST data</head>
    <body>
        <h1>Send user information</h1>

        
        <form action="<?=url('get-userdata')  ?>" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name"><br>

        <label for="">age:</label>
        <input type="text" name="age"><br>
        
        <label for="">phone:</label>
        <input type="text" name="phone"><br>

        <input type="hidden" name="token" value="<?= csrf_token() ?>">

        <input type="submit" value="send">

    </form>
    </body>
</html>