<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'common/resource.php'; ?>
        <title>Manage Categories</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>Manage Categories</h2>
            <form action="process_add_category.php" method="post" class="mb-4">
                <div class="input-group">
                    <input type="text" name="category_name" class="form-control" placeholder="New Category Name" required>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fake data
                    $categories = [
                        ["id" => 1, "name" => "Groceries"],
                        ["id" => 2, "name" => "Salary"],
                        ["id" => 3, "name" => "Rent"],
                        ["id" => 4, "name" => "Utilities"],
                        ["id" => 5, "name" => "Entertainment"]
                    ];

                    // Output data of each row
                    foreach ($categories as $category) {
                        echo "<tr>
                                <td>" . $category["name"] . "</td>
                                <td>
                                    <a href='edit_category.php?id=" . $category["id"] . "' class='btn btn-secondary btn-sm'>Edit</a>
                                    <a href='delete_category.php?id=" . $category["id"] . "' class='btn btn-danger btn-sm'>Delete</a>
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
