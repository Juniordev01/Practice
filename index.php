<!-- <?php
        require('config.php');
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 ">
                <form action="" method="post">
                    <div class="row g-3">
                        <div class="col">
                        <label for="fname">First Name</label>
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname">
                        </div>
                        <div class="col">
                        <label for="lname">Email</label>
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" class="form-control" id="Email">
                    </div>
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="text" name="Age" class="form-control" id="Age">
                    </div>
                    <div class="form-group">
                        <label for="Gender">Gender</label>
                        <input type="text" name="Gender" class="form-control" id="Gender">
                    </div>
                    <div class="form-g">
                        <label for="profile_pic">Profile Image</label>
                        <input type="file" name="profile_pic" id="profile_pic">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>