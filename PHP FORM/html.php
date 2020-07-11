<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 login-left" >
                <h2>login here</h2>
                <form action="form.php" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date of birth</label>
                        <input type="text" name="DOB" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" name="occupation" class="form-control" required>
                    </div>
                    <button type="submit"  class="btn btn-primary" >Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>