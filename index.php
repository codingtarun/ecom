<?php
include('includes/head.php');
?>

<body>
    <!-- Begin : Navbar -->
    <?php include('includes/navbar.php'); ?>
    <!-- End : Navbar -->
    <!-- Begin : Main Content  -->
    <div class="container-fluid">
        <?php include('includes/carousel.php'); ?>
        <hr>
        <div class="row px-5 my-3">
            <div class="col-12">
                <h3 class="text-center fs-1">Popular Items</h3>
            </div>
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-6 col-sm-3">
                    <img src="https://makeplaceholder.com?size=800x800&bg=CCFFE5&as=png&tcolor=ffffff&text=<?php echo $i; ?>" alt="" srcset="" class="img-fluid img-thumbnail">
                </div>
            <?php } ?>
        </div>
        <div class="row px-5 my-3">
            <div class="col-12">
                <h3 class="text-center fs-1">Latest Trends</h3>
            </div>
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-3">
                    <img src="https://makeplaceholder.com?size=800x800&bg=CCE5FF&as=png&tcolor=ffffff&text=<?php echo $i; ?>" alt="" srcset="" class="img-fluid img-thumbnail">
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- End : Main Content -->
    <!-- Begin : Scripts-->
    <?php
    include('includes/scripts.php');
    ?>
    <!-- End : Scripts-->
</body>

</html>