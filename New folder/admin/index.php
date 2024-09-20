<?php include('header.php'); ?>


<?php 

if(!isset($_SESSION['admin_logged_in'])){
    header('location: login.php');
    exit;
}

?>


<div class="container-fluid">
    <div class="row" style="min-height: 1000px">
        <nav id="sidebarmenu" class="col-md-3 col-lg-2 col-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href= "#" class="nav-link active" aria-current="page">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href= "#" class="nav-link">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href= "#" class="nav-link">
                            <span data-feather="shopping-cart"></span>
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href= "#" class="nav-link">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href= "#" class="nav-link">
                            <span data-feather="bar-chart-2"></span>
                            Create Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href= "#" class="nav-link">
                            <span data-feather="layers"></span>
                            Account
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h2">Dahboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">

                    </div>
                </div>
            </div>


            <h2>Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                            <th scope="col">Header</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </main>
    </div>
</div>