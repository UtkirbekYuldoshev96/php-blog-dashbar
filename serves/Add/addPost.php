<?php
require('../../database.php');

if (
      isset($_POST['name']) &&
      isset($_POST['description']) &&
      isset($_POST['category']) &&
      $_FILES['image']['name'] != ''
){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $category = $_POST['category'];

  $uploaddir = '../../images';
  $uploadfile = $uploaddir . basename($_FILES['image']['name']); // images/1.png

  echo '<pre>';
  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
      echo "Fayl to'g'ri va muvaffaqiyatli yuklab olingan.\n";
  } else {
      echo "Faylni yuklab olish orqali mumkin bo'lgan hujum!\n";
  }

  $add_sql = "INSERT INTO news (name, image, description, category_id, author_id)
  VALUES ('{$name}', '{$uploadfile}', '{$description}', '{$category}', 1);";

  if ($conn->query($add_sql)){
      header('Location: allPosts.php');
  }else{
      die($conn->error);
  }
}


?>

<?php require('../../includes/header.php'); ?>
<?php require('../../includes/navbar.php'); ?>
<?php require('../../includes/nav.php'); ?>



<!-- Main Container -->
<main id="main-container">
      <!-- Hero -->
      <div class="bg-body-light">
            <div class="content content-full">
                  <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Yangi maqola yaratish</h1>
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
            <form action="add-post.php" method="POST" enctype="multipart/form-data">
                  <div class="block">
                        <div class="block-header block-header-default">
                              <a class="btn btn-alt-secondary" href="all-posts.php">
                                    <i class="fa fa-arrow-left me-1"></i> Barcha maqolalar
                              </a>
                              <div class="block-options">
                                    <div class="form-check form-switch">
                                          <input class="form-check-input" type="checkbox" value=""
                                                id="dm-post-add-active" name="dm-post-add-active">
                                          <label class="form-check-label" for="dm-post-add-active">Set active</label>
                                    </div>
                              </div>
                        </div>
                        <div class="block-content">
                              <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                          <div class="mb-4">
                                                <label class="form-label" for="dm-post-add-title">Sarlavha</label>
                                                <input type="text" class="form-control" id="dm-post-add-title"
                                                      name="name" placeholder="Sarlavhani kiriting..">
                                          </div>
                                          <div class="row mb-4">
                                                <div class="col-xl-6">
                                                      <label class="form-label" for="example-select">Maqola turini
                                                            tanlash</label>
                                                      <select class="form-select" id="example-select" name="category">
                                                            <option selected="">Maqola turini tanlang...</option>
                                                            <option value="1">Tur #1</option>
                                                            <option value="2">Tur #2</option>
                                                      </select>
                                                </div>
                                                <div class="col-xl-6">
                                                      <label class="form-label" for="dm-post-add-image">Maqola uchun
                                                            rasm</label>
                                                      <input class="form-control" type="file" id="dm-post-add-image"
                                                            name="image">
                                                </div>
                                          </div>
                                          <div class="mb-4">
                                                <!-- CKEditor (js-ckeditor-inline + js-ckeditor ids are initialized in Helpers.jsCkeditor()) -->
                                                <!-- For more info and examples you can check out http://ckeditor.com -->
                                                <label class="form-label">Maqola matni</label>
                                                <textarea id="js-ckeditor" name="description"></textarea>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="block-content bg-body-light">
                              <div class="row justify-content-center push">
                                    <div class="col-md-10">
                                          <button type="submit" class="btn btn-alt-primary">
                                                <i class="fa fa-fw fa-check opacity-50 me-1"></i> Maqolani saqlash
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

<?php require('../../includes/footer.php'); ?>
