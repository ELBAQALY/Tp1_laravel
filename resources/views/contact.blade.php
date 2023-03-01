<html>
<head>
</head>
    <body>
    <h1>Contact-nous</h1>

    <form method="POST" action="/contact">
    @csrf
        <div>
            <label for="name">Name :</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea  name="message"></textarea>
        </div>
        <button type="submit">Envoyer</button>
    </form>
    </body>
</html>