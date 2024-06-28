<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Customer List</h3>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Photo</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($customers as $customer)
                    <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->mobile}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <img src="img/{{$customer->photo}}" alt="" width="80">
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                        <a style="background:#0fb9b1; color:#fff;" class="btn" href="customers/{{$customer->id}}"><i class="fa-solid fa-eye"></i></a>
                        <a style="background:#3867d6; color:#fff;" class="btn" href="customers/{{$customer->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="customers/{{$customer->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:#eb3b5a; color:#fff;" class="btn rounded-start-0" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
