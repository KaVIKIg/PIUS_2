<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <table class="table table-bordered mb-5">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Category_id</th>

            </tr>
            <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->name }}</td>
                <td>{{ $products->slug }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->price }}</td>
                <td> img </td>
                <td>{{ $products->quantity }}</td>
                <td>{{ $products->category_id }}</td>
            </tr>
        </table>
    </div>
</body>
