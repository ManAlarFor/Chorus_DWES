<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chorus - LogIn</title>

    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="shortcut icon" href="../assets/img/chorusIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="card position-absolute top-50 start-50 translate-middle"  style="width: 40rem;">
        <div class="card-header bg-titulo text-center">
            <h1>CHORUS</h1>
        </div>
        <form class="p-5 bg-clarito">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control bg-input" id="correo">
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label">Contraseña</label>
                <input type="password" class="form-control bg-input" id="passwd">
            </div>
            <button type="submit" class="btn bg-titulo">Submit</button>
        </form>
    </div>

</body>
</html>