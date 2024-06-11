<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <form action="{{ route('products.search') }}" method="GET">
        <input type="text" name="query" placeholder="Search for products">
        <button type="submit">Search</button>
    </form>

    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product->title }}</li>
        @endforeach
    </ul>
</body>
</html>
