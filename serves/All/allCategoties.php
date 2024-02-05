<?php
require('../../database.php');

$all_news_sql = 'SELECT * FROM category ORDER BY id desc';
if (!$result = $conn->query($all_news_sql)){
    die("Baza bilan bog'liq xatolik bo'ldi: " . $conn->error);
}
$news = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Barcha kategoriyalar</h1>
                <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Sahifalar</li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active" aria-current="page">Boshqarish</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-full">
        <!-- Posts Statistics -->
        <div class="row text-center">
            <div class="col-6 col-xl-3">
                <!-- All Posts -->
                <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="far fa-2x fa-file-alt text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                150
                            </p>
                            <p class="text-muted mb-0">
                                Barcha kategoriyalar
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END All Posts -->
            </div>

            <div class="col-6 col-xl-3">
                <!-- New Post -->
                <a class="block block-rounded" href="add-category.php">
                    <div class="block-content block-content-full">
                        <div class="py-md-3">
                            <div class="py-3 d-none d-md-block">
                                <i class="fa fa-2x fa-plus text-primary"></i>
                            </div>
                            <p class="fs-4 fw-bold mb-0">
                                <i class="fa fa-plus text-primary me-1 d-md-none"></i> Yangi kategoriya
                            </p>
                            <p class="text-muted mb-0">
                                John Doe dan
                            </p>
                        </div>
                    </div>
                </a>
                <!-- END New Post -->
            </div>
        </div>
        <!-- Post Statistics -->

        <!-- Posts -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Maqolalar (150)</h3>
            </div>
            <div class="block-content">
                <!-- Search Posts -->
                <form class="push" action="be_pages_blog_post_manage.html" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Maqola qidirish..">
                        <span class="input-group-text">
                <i class="fa fa-fw fa-search"></i>
              </span>
                    </div>
                </form>
                <!-- END Search Posts -->

                <!-- Posts Table -->
                <table class="table table-striped table-borderless table-vcenter">
                    <thead>
                    <tr class="bg-body-dark">
                        <th style="width: 60px;">ID</th>
                        <th style="width: 33%;">Kategoriya nomi</th>
                        <th style="width: 100px;" class="text-center">Amallar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(count($news) > 0):?>
                        <?php foreach ($news as $post): ?><tr>
                            <td>
                                <?= $post['id'] ?>
                            </td>
                            <td>
                                <i class="fa fa-eye text-success me-1"></i>
                                <a href="be_pages_blog_story.html">
                                    <?= $post['name'] ?>
                                </a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-alt-secondary" href="edit-category.php?id=<?= $post['id'] ?>">
                                    <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                                </a>
                                <a class="btn btn-sm btn-alt-secondary" href="delete-category.php?id=<?= $post['id'] ?>">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </a>
                            </td>
                            </tr>

                        <?php endforeach; ?>
                    <?php endif;?>
                    </tbody>
                </table>
                <!-- END Posts Table -->

                <!-- Posts Pagincation -->
                <nav aria-label="Posts Navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                  </span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                  </span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END Posts Pagincation -->
            </div>
        </div>
        <!-- END Posts -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php require('../../includes/footer.php'); ?>