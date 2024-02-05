<?php
require('settings.php');

if (isset($_POST['name']) && isset($_POST['id'])){
    $name = $_POST['name'];
    $id = $_POST['id'];

    $add_sql = "UPDATE category SET name = '{$name}' WHERE id = '{$id}'";

    if (!$conn->query($add_sql)){
        header('Location: error.php');
    }else{
        header('Location: all-categories.php');
    }
}

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM category where id = {$id}";

    if (!$result = $conn->query($sql)){
        header('Location: error.php');
    }
    $category = mysqli_fetch_assoc($result);
}
?>

<?php require('head.php'); ?>
<?php require('sidebar.php'); ?>
<?php require('header.php'); ?>

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
            <form action="edit-category.php" method="POST">
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
                                    <input type="text" class="form-control" id="dm-post-add-title" name="name" placeholder="Tur nomini kiriting.." value="<?= $category['name']?>">
                                    <input type="hidden" name="id" value="<?= $category['id']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content bg-body-light">
                        <div class="row justify-content-center push">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-fw fa-check opacity-50 me-1"></i> Turni o'zgartirish
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

<?php require('footer.php'); ?>
