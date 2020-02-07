<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Título</label>
            <input type="text" id="title" name="title">
            
            <label for="">Fotos</label>
            <input type="file" name="images[]" multiple>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>