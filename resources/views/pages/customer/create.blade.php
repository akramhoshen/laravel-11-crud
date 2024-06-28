<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Create Customer</h3>
            </div>
            <form class="form" action={{ url('customers') }} method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="phone" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" id="address" value="" placeholder="Address" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="photo" id="photo" value="" placeholder="Photo" />
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" value="Create" name="btnSubmit" class="btn btn-info" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
