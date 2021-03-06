<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The name is Deji. Deji Joseph.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid">
        <div class="row vh-100">

            <!-- only apply to larger screens -->
            <div class="col-md-7 d-none d-md-block bg-dark">
                <div class="row h-100 align-items-center">
                    <div class="col">
                        <div class="p-5 m-3">
                            <p class="lead text-muted">The name is</p>
                            <h1 class="display-1 fw-bolder text-light">Deji.</h1>
                            <h1 class="display-1 fw-bolder text-light">Deji Joseph</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-none d-md-block bg-light">
                <div class="row h-100 align-items-center">
                    <div class="col">
                        <div class="p-5 m-3">
                            <p class="lead text-muted">You could introduce yourself</p>
                            <form action="/message.php">
                                <div class="mb-3">
                                    <label for="name" class="form-label">What are you called</label>
                                    <input type="text" class="form-control" id="name" placeholder="Marcus Aurelius?">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Leave me a message</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What do you want to say">You could leave your contact..</textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- apply to smaller screens -->
            <div class="col-md-7 d-sm-block d-md-none bg-dark mh-50 ">
                <div class="row h-100 align-items-center">
                    <div class="col">
                        <div class="m-3">
                            <p class="lead text-muted">The name is</p>
                            <h1 class="display-2 fw-bolder text-light">Deji.</h1>
                            <h1 class="display-2 fw-bolder text-light">Deji Joseph</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-sm-block d-md-none bg-light mh-50">
                <div class="row h-100 align-items-center">
                    <div class="col">
                        <div class="m-3">
                            <p class="lead text-muted">How about you introduce yourself</p>
                            <form action="/message.php">
                                <div class="mb-3">
                                    <label for="name" class="form-label">What are you called</label>
                                    <input type="text" class="form-control" id="name" placeholder="Marcus Aurelius?">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Leave me a message</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="What do you want to say">You could leave your contact..</textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>