<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?php include 'common/resource.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title>查看交易</title>
    </head>
    <body>
        <?php include 'common/nav.html'; ?>
        <div class="container mt-5">
            <h2>交易列表</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>日期</th>
                        <th>类型</th>
                        <th>类别</th>
                        <th>金额</th>
                        <th>描述</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // receive all data from table transactions
                    $sql = 'SELECT * FROM transactions';
                    $result = mysqli_query($conn, $sql);
                    $transactions  = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    // perp for type
                    $typeArr=array(
                            '1'=>'收入',
                            '2'=>'支出'
                    );
                    // perp for category
                    $sql = 'SELECT id, name FROM categories';
                    $result = mysqli_query($conn, $sql);
                    $categoriesArr = [];
                    while ($row = mysqli_fetch_assoc($result)) {
                        $categoriesArr[$row['id']] = $row['name'];
                    }

                    foreach($transactions as $transaction) {
                        echo "<tr>
                                <td>" . date('Y-m-d H:i', $transaction['datetime']) . "</td>
                                <td>" . $typeArr[$transaction["type"]] . "</td>
                                <td>" . $categoriesArr[$transaction["cid"]] . "</td>
                                <td>" . $transaction["amount"] . "</td>
                                <td>" . $transaction["description"] . "</td>
                             </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php include 'common/footer.html'; ?>
    </body>

</html>
