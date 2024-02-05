<?php
// require('../database.php');


// if (isset($_POST['name'])) {
//       $name = $_POST['name'];

//       $add_category_sql = "INSERT INTO category (name) VALUES ('{$name}');";

//       if ($conn->query($add_category_sql)) {
//             header('Location: all-categories.php');
//       } else {
//             die($conn->error);
//       }
// }

?>

<?php require('../includes/header.php'); ?>
<?php require('../includes/navbar.php'); ?>
<?php require('../includes/nav.php'); ?>


<!-- Main Container -->
<main id="main-container">
      <!-- Hero -->
      <div class="bg-body-light">
            <div class="content content-full">
                  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Yangi tur yaratish</h1>
                        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Sahifalar</li>
                                    <li class="breadcrumb-item">Blog</li>
                                    <li class="breadcrumb-item active" aria-current="page">Yangi</li>
                              </ol>
                        </nav>
                  </div>
            </div>
      </div>
      <!-- END Hero -->

      <!-- Page Content -->
      <div class="content content-full content-boxed">
            <!-- New Post -->
            <form action="add-category.php" method="POST">
                  <div class="block">
                        <div class="block-header block-header-default">
                              <a class="btn btn-alt-secondary" href="all-categories.php">
                                    <i class="fa fa-arrow-left me-1"></i> Barcha turlar
                              </a>
                        </div>
                        <div class="block-content">
                              <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                          <div class="mb-4">
                                                <label class="form-label" for="dm-post-add-title">Tur nomi</label>
                                                <input type="text" class="form-control" id="dm-post-add-title"
                                                      name="name" placeholder="Tur nomini kiriting..">
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="block-content bg-body-light">
                              <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                          <button type="submit" class="btn btn-alt-primary">
                                                <i class="fa fa-fw fa-check opacity-50 me-1"></i> Turni saqlash
                                          </button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </form>
            <!-- END New Post -->
      </div>
      <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php require('../includes/footer.php'); ?>