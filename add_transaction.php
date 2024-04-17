<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Transaction</title>
        <?php include 'common/resource.php'; ?>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>添加交易</h2>
            <form action="" method="post">
                <!-- Transaction Type -->
                <div class="mb-3">
                    <label for="transactionType" class="form-label">交易类型*</label>
                    <select class="form-select" id="transactionType" name="type" required>
                        <option value="">选择类型</option>
                        <option value="1">收入</option>
                        <option value="2">支出</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">金额*</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="输入金额" required>
                </div>

                <div class="mb-3">
                    <label for="transactionDate" class="form-label">时间*</label>
                    <input type="datetime-local" class="form-control" id="transactionDate" name="datetime" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">类别*</label>
                    <select class="form-select" id="category" name="category" required>
                        <option value="">选择类别</option> <!-- Default empty option -->
                        <?php
                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">描述</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="交易描述"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">添加交易</button>
            </form>
        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $type = $_POST['type'];
            $amount = $_POST['amount'];
            $datetime = strtotime($_POST['datetime']);
            $cid = $_POST['category'];
            $description = $_POST['description'];

            // Sanitize the input
            $type = mysqli_real_escape_string($conn, $type);
            $amount = mysqli_real_escape_string($conn, $amount);
            $datetime = mysqli_real_escape_string($conn, $datetime);
            $cid = mysqli_real_escape_string($conn, $cid);
            $description = mysqli_real_escape_string($conn, $description);

            // Insert transaction into the database
            $sql = "INSERT INTO transactions (type, amount, datetime, cid, description) 
            VALUES ('$type', '$amount', '$datetime', '$cid', '$description')";
            mysqli_query($conn, $sql);
        }

        ?>


        <?php include 'common/footer.html'; ?>
    </body>
</html>
