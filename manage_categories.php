<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>类别管理</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>类别管理</h2>
            <form action="" method="post" class="mb-4">
                <div class="input-group">
                    <input type="text" name="category_name" class="form-control" placeholder="New Category Name">
                    <button type="submit" name="submit" class="btn btn-primary">添加类别</button>
                </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
                if (empty($_POST['category_name'])) {
                    echo '<div class="alert alert-danger" role="alert">请输入一个类别名称</div>';
                } else {
                    $category_name = $_POST['category_name'];
                    $sql = "INSERT INTO categories (name) VALUE('$category_name')";
                    mysqli_query($conn, $sql);
                }
            }
            ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>类别名称</th>
                        <th style="text-align: right">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = 'SELECT * FROM categories';
                    $result = mysqli_query($conn, $sql);
                    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($categories as $category) {
                        echo "<tr>
                                <td>" . $category["name"] . "</td>
                                <td>
                                    <div style='text-align: right;'>
                                        <a class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#editCategoryModal' data-id='" . $category['id'] . "' data-name='" . $category['name'] . "'>编辑</a>
                                        <form action='' method='post' style='display: inline-block;'>
                                            <input type='hidden' name='delete_id' value='" . $category["id"] . "'>
                                            <button type='submit' name='delete_submit' class='btn btn-danger btn-sm' style='margin-left: 5px;'>删除</button>
                                        </form>
                                    </div>
                                </td>
                             </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCategoryModalLabel">编辑类别</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="updated_name" class="form-label">类别名称</label>
                                <input type="text" class="form-control" id="updated_name" name="updated_name">
                                <input type="hidden" id="category_id" name="id">
                            </div>
                            <button type="submit" name="update" class="btn btn-primary">更新类别</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if (isset($_POST['update']) && !empty($_POST['updated_name']) && !empty($_POST['id'])) {
            $updated_name = $_POST['updated_name'];
            $category_id = $_POST['id'];
            $sql = "UPDATE categories SET name=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "si", $updated_name, $category_id);
            mysqli_stmt_execute($stmt);
        }
        if (isset($_POST['delete_id'])) {
            $delete_id = $_POST['delete_id'];
            $sql = "DELETE FROM categories WHERE id='$delete_id'";
            mysqli_query($conn, $sql);
        }
        ?>

        <?php include 'common/footer.html'; ?>
    </body>
    <script>
        var editCategoryModal = document.getElementById('editCategoryModal');
        editCategoryModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var id = button.getAttribute('data-id');
            var name = button.getAttribute('data-name');
            var modalInputName = editCategoryModal.querySelector('.modal-body input[name="updated_name"]');
            var modalInputId = editCategoryModal.querySelector('.modal-body input[name="id"]');
            modalInputName.value = name;
            modalInputId.value = id;
        });
    </script>
</html>
