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
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <aside>
                    <form action="/category">


                        <div class="form-group">
                        <input type="text" name="price" placeholder="Filter by price" value="{{ request()->price }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </aside>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category_id</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->slug }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{ img }</td>
                    <td>{{ $data->quantity }}</td>
                    <td>{{ $data->category_id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $products->links() !!}
        </div>
    </div>
</body>
</html>
