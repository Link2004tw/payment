<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body>
    <div class="flex">
        @foreach ($products as $product)
            <x-product-card :$product />
        @endforeach
    </div>
    
</body>
</html>