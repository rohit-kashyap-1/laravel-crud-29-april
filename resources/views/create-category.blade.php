<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class='container pt-4'>
        <div class='row'>
            <div class='col-md-4'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Create Category</h1>
                    </div>
                    <div class='card-body'>
                        <form method='POST' action='/create-category' enctype='multipart/form-data'>
                            <input type='hidden' name='_token' value='{{csrf_token()}}'>
                            <div class='mb-3'>
                                <label for='title' class='form-label'>Title</label>
                                <input type='text' class='form-control' id='title' name='title'>
                            </div>
                            <div class='mb-3'>
                                <label for='description' class='form-label'>Description</label>
                                <textarea class="form-control"  name='description'></textarea>
                            </div>
                            <button class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>

</body>
</html>
