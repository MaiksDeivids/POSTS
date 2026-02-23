<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create new post</h1>

    <form action="/posts" method="post">
        @csrf
        <div>
            <label for="title">Virsraksts</label>
            <input type="text" name="title" id="title" />
        </div>
        <div>
            <label for="content">Saturs</label>
            <textarea name="content" id="content"></textarea>
        </div>
        <div>
            <input type="submit" value="Izveidot" />
        </div>
    </form>
</body>
</html>