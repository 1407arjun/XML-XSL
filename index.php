<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/styles.css" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">
    <title>CarHub</title>
</head>

<?php
    include "database.php";
    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);
?> 

<body>  
    <main>
    <section class="py-4 text-center container">
        <div class="row py-lg-4">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-semibold">CarHub</h1>
            <p class="lead text-muted">A hub for all cars</p>
            <p class="lead text-muted">Logged in as <?php echo 'Arjun Sivaraman'; ?></p>
            <a href="#" class="btn btn-primary my-2">Book a test drive</a>
            <a href="#cars" class="btn btn-secondary my-2">View Catalog</a>
            <button class="btn btn-danger my-2">Logout</button>
            </form>
            </p>
        </div>
        </div>
    </section>
    
    <div class="album py-5 bg-light" id="cars">
        <div class="container">
        <h2 class="fw-bold mb-4" align="center">Featured collection</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
            <div class="col">
            <div class="card shadow-sm">
                <img src=<?php echo $row['image']; ?> class="bd-placeholder-img card-img-top" width="100%" height="225">
    
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                <p class="card-text"><?php echo $row['des']; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                    <small class="text-muted">&#11088;<?php echo $row['rating']; ?> stars</small>
                </div>
                </div>
            </div>
            </div>
            <?php       }

            }

        ?> 
    </div>
    
    </main>
    
    <footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
        <a href="#">Back to top</a>
        </p>
        <p class="mb-1">&copy; CarHub - One stop destination for all cars</p>
        <p class="mb-0">Logged in as <?php echo 'Arjun Sivaraman'; ?></p>
    </div>
    </footer>
</body>
</html>