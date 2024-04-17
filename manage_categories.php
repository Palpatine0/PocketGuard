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
                    <input type="text" name="category_name" class="form-control" placeholder="New Category Name" required>
                    <button type="submit" class="btn btn-primary">添加类别</button>
                </div>
            </form>
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
                    $categories  = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($categories as $category) {
                        echo "<tr>
                                    <td>" . $category["name"] . "</td>
                                    <td>
                                        <div style='text-align: right;'>
                                            <a class='btn btn-secondary btn-sm'>编辑</a>
                                            <a class='btn btn-danger btn-sm'>删除</a>
                                        </div>
                                    </td>
                                 </tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>



        <?php include 'common/footer.html'; ?>
    </body>
</html>

