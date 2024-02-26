<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Nilai</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Convert Nilai
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="partisipasi">Nilai Partisipasi:</label>
                                <input type="text" class="form-control" id="partisipasi" name="partisipasi" required>
                            </div>
                            <div class="form-group">
                                <label for="tugas">Nilai Tugas:</label>
                                <input type="text" class="form-control" id="tugas" name="tugas" required>
                            </div>
                            <div class="form-group">
                                <label for="uts">Nilai UTS:</label>
                                <input type="text" class="form-control" id="uts" name="uts" required>
                            </div>
                            <div class="form-group">
                                <label for="uas">Nilai UAS:</label>
                                <input type="text" class="form-control" id="uas" name="uas" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                            include 'process.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>