# 项目实战：个人财务管理APP

    我们将构建一个基于PHP的个人财务追踪应用程序。这个应用程序将帮助用户跟踪他们的财务状况并管理他们的个人收支情况。  
    该项目使用Bootstrap框架来构建网站的用户界面，使其看起来更加美观和易于使用。  

**个人财务追踪应用程序将提供以下功能：**

（PENDING）
- 首页：欢迎页面，向用户展示应用程序的一般信息，并提供导航到其他页面的功能。在首页，用户可以了解到应用程序的基本介绍，以及如何使用导航链接访问其他功能页面，例如交易录入、交易列表、分类管理和个性化仪表板。

- 交易录入表单：用户可以在此页面录入新的收入或支出记录。该页面提供表单，用户可以填写相关的交易信息，如金额、日期、类别等，并进行验证。录入的交易信息将通过PHP代码进行处理，并存储到数据库中，以便后续的管理和显示。

- 交易列表：该页面展示了所有录入的交易记录列表。用户可以在此页面查看所有的交易记录，并了解每笔交易的详细信息，如日期、金额、类别等。通过PHP代码从数据库中获取交易数据，并以列表的形式呈现给用户，以便他们更好地管理和分析自己的财务状况。

- 类型管理：用户可以在此页面进行交易类别的管理操作，包括添加新的类别、编辑已有类别或删除类别。该页面提供表单，用户可以填写新类别的信息，并显示已存在的类别列表，以供用户选择编辑或删除。通过PHP代码，管理页面可以实现对类别表的插入、更新和删除操作，以确保用户可以自由地管理自己的交易分类。

- 可定制的仪表板：用户可以在个性化仪表板页面查看自己的财务状况概览，包括最近的交易记录、预算情况和目标达成进度。该页面通过PHP代码从数据库中获取各项财务数据，并以图表或摘要的形式展示给用户，以便他们更直观地了解自己的财务状况和制定未来的理财计划。

## 1.项目配置
### 1.1 创建项目文件夹

==该项目以MAMP服务器为例==

**步骤：**
<hr>

1. 在MAMP找到文件夹`htdoc`，创建一个新的文件夹`pocket-guard`点击Document root下的文件夹图标  
   
    ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc17aea46e.jpg)

2. 选中刚刚创建的项目  
   
    ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc1d0202aa.jpg)

### 1.2启动服务器

**步骤：**
<hr>
1. 在项目文件夹创建文件`index.php`,并在该写入`TEST`或者任意内容以在接下来的步骤测试服务器是否启动成功

2. 配置自己服务器与数据库的端口号  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc2372f42d.jpg)
3. 开机  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc27778869.jpg)
4. 在浏览器输入`localhost:[自己指定的服务器端口号]`  
   ![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc2f2ef6a1.jpg)   
   若看到自己刚刚在`index.php`写上的测试文本，则说明启动成功

### 1.3创建基础静态文件
#### 1.3.1 创建通用文件
创建通用文件，将通用文件放置在单独的文件夹中并在需要的地方引入它们，可以提高代码的重用性，简化维护和更新，使代码更加整洁和易读。  
这种模式最大的好处之一是，对于在每个页面都会出现的内容，当你需要修改这些内容的一部分时，你不需要在每个页面修改他们。

**通用文件包含：**
- 通用资源`resource.html`: 包括bootstrap的脚本文件等
- 网站的导航文件`nav.html`: 网站的导航
- 页脚文件`footer.html`: 项目的页脚文件，包含版权信息

**步骤：**
<hr>

1. 在项目文件夹下，创建文件夹`common`  
   <img src="https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_6618625b02a87.jpg" alt="image" width="300">
2. 创建 `resource.php`  
   `php`文件。后面需要插入php内容，该文件若为`html`格式将无法识别`php`内容
```php  
<meta charset="UTF-8">  <meta name="viewport" content="width=device-width, initial-scale=1.0">  <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">  <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>  
```  

3. 创建`nav.html

```html  

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Pocket Guard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="add_transaction.php">添加交易</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_transactions.php">查看交易</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage_categories.php">类别管理</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">仪表板</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
```  

4. 创`footer.html`
```html  
<footer class="footer mt-5 py-4 text-gray" style="background-color: #f4f5f8;color:#39383d;">    
    <div class="container">    
        <div class="row">    
            <div class="text-center text-md-left">    
                <h5 class="mb-0">&copy; 2024 Pocket Guard. All rights reserved.</h5>    
            </div>    
        </div>    
        <div class="row">    
            <div class="text-center text-md-right">    
                <p>Designed and Developed by <a href="https://github.com/" class="text-primary">Percival</a></p>    
            </div>    
        </div>    
        <div class="row mt-3">    
            <div class="col-md-12 text-center">    
                <ul class="list-inline">    
                    <li class="list-inline-item"><a href="#" class="footer-link text-dark text-decoration-none">Home</a></li>    
                    <li class="list-inline-item"><a href="#" class="footer-link text-dark text-decoration-none">About</a></li>    
                    <li class="list-inline-item"><a href="#" class="footer-link text-dark text-decoration-none">Services</a></li>    
                    <li class="list-inline-item"><a href="#" class="footer-link text-dark text-decoration-none">Contact</a></li>    
                </ul>    
            </div>    
        </div>    
</div>  </footer>  
```  
#### 1.3.2 创建网页文件
创建组成该项目的基础网页文件  
**网页文件包含：**
- 首页`index.php`: 欢迎页面，提供关于应用程序的一般信息，并导航到其他页面
- 添加交易记录界面`add_transaction.php`: 允许用户添加新的收入或支出记录的页面
- 查看交易记录界面`view_transactions.php`: 显示所有已输入交易记录的页面
- 类别管理界面`manage_categories.php`: 允许用户添加、编辑或删除交易类别的页面
- 控制面板界面`dashboard.php`: 个性化的仪表板，用户可以查看其财务状况的快速概览，包括最近的交易、预算和目标

🌟在创建网页的同时引入通用文件
```php  
<head>    
    <!--标题-->  
    <?php include 'common/resource.html'; ?>  
</head>  
<body>    
    <?php include 'common/nav.html'; ?>  
    <!--网页内容-->  
    <?php include 'common/footer.html'; ?>  
</body>  
```  

**步骤：**
<hr>

1. 创建`index.php`
```php  
<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <title>Personal Finance Tracker</title>  
        <?php include 'common/resource.php'; ?>  
    </head>  
    <body>  
        <?php include 'common/nav.html'; ?>  
  
        <div class="container mt-5">  
            <h1 class="text-center">欢迎使用您的个人财务跟踪器</h1>  
            <p class="text-center">通过轻松跟踪收入和支出，掌控您的财务生活。</p>  
            <section id="dashboard-overview" class="text-center mb-5 py-5 bg-light">  
                <h3 class="mb-3 display-4">您的财务仪表板</h3>  
                <p class="mb-4 text-muted">以下是我们与社区共同取得的成就！</p>  
                <div class="row justify-content-center">  
                    <div class="col-md-3 mb-3">  
                        <div class="card shadow rounded p-3">  
                            <h5 class="card-title mb-3">活跃用户</h5>  
                            <p class="card-text h3 text-dark">10,000+</p>  
                            <p class="card-text"><small class="text-muted">加入我们不断增长的社区！</small></p>  
                        </div>  
                    </div>  
                    <div class="col-md-3 mb-3">  
                        <div class="card shadow rounded p-3">  
                            <h5 class="card-title  mb-3">跟踪的交易</h5>  
                            <p class="card-text h3 text-dark">500,000+</p>  
                            <p class="card-text"><small class="text-muted">超过五十万笔交易，数量不断增加。</small></p>  
                        </div>  
                    </div>  
                    <div class="col-md-3 mb-3">  
                        <div class="card shadow rounded p-3">  
                            <h5 class="card-title  mb-3">资金管理</h5>  
                            <p class="card-text h3 text-dark">$1M+</p>  
                            <p class="card-text"><small class="text-muted">已跟踪资产超过一百万美元。</small></p>  
                        </div>  
                    </div>  
                </div>  
            </section>  
        </div>  
        <?php include 'common/footer.html'; ?>  
    </body>  
</html>
```  

**效果图：**  
![img.png](img.png)

1. 创建`add_transaction.php`
```php  
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
            <form action="process_transaction.php" method="post">  
                <!-- Transaction Type -->  
                <div class="mb-3">  
                    <label for="transactionType" class="form-label">交易类型</label>  
                    <select class="form-select" id="transactionType" name="transaction_type" required>  
                        <option value="">选择类型</option>  
                        <option value="Income">收入</option>  
                        <option value="Expense">支出</option>  
                    </select>  
                </div>  
  
                <div class="mb-3">  
                    <label for="amount" class="form-label">金额</label>  
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="输入金额" required>  
                </div>  
  
                <div class="mb-3">  
                    <label for="transactionDate" class="form-label">日期</label>  
                    <input type="date" class="form-control" id="transactionDate" name="transaction_date" required>  
                </div>  
  
                <div class="mb-3">  
                    <label for="category" class="form-label">类别</label>  
                    <input type="text" class="form-control" id="category" name="category" placeholder="类别（例如，杂货，工资）" required>  
                </div>  
  
                <div class="mb-3">  
                    <label for="description" class="form-label">描述</label>  
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="交易描述"></textarea>  
                </div>  
  
                <button type="submit" class="btn btn-primary">添加交易</button>  
            </form>  
        </div>  
  
        <?php include 'common/footer.html'; ?>  
    </body>  
</html>
```  

**效果图：**  
![img.png](img_2.png)  
  
3. 创建`view_transaction.php`  
```php  
<!DOCTYPE html>  <html lang="en">    
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
                      
                </tbody>    
            </table>    
        </div>    
    
        <?php include 'common/footer.html'; ?>    
    </body>    
    
</html>  
```  

- **添加模拟数据**  
  我们需要一些模拟数据来填充该界面，以展示页面的样式和功能。旨在  
  帮助我们更好地了解页面的布局和交互，对最终的展示有一个更清晰的预期
```php  
<tbody>    
    <?php    
    // Fake data    
    $transactions = [    
        ["date" => "2023-12-01", "type" => "Expense", "category" => "Groceries", "amount" => 100, "description" => "Weekly groceries"],    
        ["date" => "2023-12-02", "type" => "Income", "category" => "Salary", "amount" => 2000, "description" => "Monthly salary"],    
        ["date" => "2023-12-03", "type" => "Expense", "category" => "Rent", "amount" => 500, "description" => "Monthly rent"],    
        ["date" => "2023-12-04", "type" => "Expense", "category" => "Utilities", "amount" => 150, "description" => "Utility bills"],    
        ["date" => "2023-12-05", "type" => "Expense", "category" => "Entertainment", "amount" => 200, "description" => "Movie tickets"]    
    ];    
    
    // Output data of each row    
    foreach($transactions as $transaction) {    
        echo "<tr>    
                <td>" . $transaction["date"] . "</td>    
                <td>" . $transaction["type"] . "</td>    
                <td>" . $transaction["category"] . "</td>    
                <td>" . $transaction["amount"] . "</td>    
                <td>" . $transaction["description"] . "</td>    
             </tr>";    
    }    
?>  </tbody>  
```
![](https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_661fc3a96a5ee.jpg)

**效果图：**  
![img_1.png](img_1.png)  

4. 创建`manage_categories.php`
```php  
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
            <form action="process_add_category.php" method="post" class="mb-4">  
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
                    
                </tbody>  
            </table>  
        </div>  
  
        <?php include 'common/footer.html'; ?>  
    </body>  
</html>
```  
- **添加模拟数据**
```php  
<<?php  
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
                                    <div style='text-align: right;'>
                                        <a href='edit_category.php?id=" . $category["id"] . "' class='btn btn-secondary btn-sm'>编辑</a>
                                        <a href='delete_category.php?id=" . $category["id"] . "' class='btn btn-danger btn-sm'>删除</a>
                                    </div>
                                </td>
                             </tr>";
                    }
?>  
```  

![](https://zhjyshop.osshangzhou.aliyuncs.com/Public/Uploads/m_661fc4027b3d4.jpg)  

**效果图：**  
![img_4.png](img_4.png)

5. 创建`dashboard.php`
```php  
<!DOCTYPE html>  
<html lang="zh-CN">  
    <head>  
        <?php include 'common/resource.php'; ?>  
        <title>仪表板</title>  
    </head>  
    <body>  
        <?php include 'common/nav.html'; ?>  
        <div class="container mt-5">  
            <h2>仪表板</h2>  
            <div class="row">  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">总余额</h5>  
                            <p class="card-text">$1,200</p>  
                        </div>  
                    </div>  
                </div>  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">本月总收入</h5>  
                            <p class="card-text">$3,000</p>  
                        </div>  
                    </div>  
                </div>  
                <div class="col-md-4">  
                    <div class="card text-center">  
                        <div class="card-body">  
                            <h5 class="card-title">本月总支出</h5>  
                            <p class="card-text">$1,800</p>  
                        </div>  
                    </div>  
                </div>  
            </div>  
            <div class="row mt-4">  
                <div class="col-md-7">  
                    <h4>每月支出细分</h4>  
                    <canvas id="monthlyExpenseChart"></canvas>  
                </div>  
                <div class="col-md-7">  
                    <h4>收入 vs. 支出</h4>  
                    <canvas id="incomeVsExpenseChart"></canvas>  
                </div>  
            </div>  
        </div>  
        <?php include 'common/footer.html'; ?>  
    </body>  
</html>
```  
**效果图：**  
![[Pasted image 20240412051915.png]]




## 2.数据库配置
### 2.1 创建数据库表
创建该项目需要的数据库与数据库表
1. 创建数据库`pocket_guard`,并选择
```sql  
 CREATE DATABASE pocket_guard; USE pocket_guard;  
```  

2. 创建交易表`transactions
```sql  
CREATE TABLE transactions (
	id INT AUTO_INCREMENT PRIMARY KEY,
	date int(10),
	cid INT,
	category_id INT,
	amount DECIMAL ( 10, 2 ),
	description TEXT 
);
```  
- **`id`**: 唯一标识每条交易的自增主键
- **`date`**: 交易发生的日期和时间
- **`cid`**: 记录交易类别表的id
- **`category_id`**: 类别ID，表示交易所属的类别
- **`amount`**: 交易金额，以十进制格式存储，保留两位小数
- **`description`**: 交易描述，包括有关交易的详细信息

  **插入数据**
```sql  
INSERT INTO transactions (date, cid, category_id, amount, description) VALUES
(1703662617, 1, 1, 100.50, 'Purchase of groceries'),
(1703677800, 2, 2, 50.25, 'Payment for utilities'),
(1703690700, 3, 1, 75.75, 'Dining out with friends'),
(1703750100, 4, 3, 120.00, 'Online shopping'),
(1703763600, 5, 1, 90.20, 'Fuel refill for car'),
(1703842200, 6, 2, 60.75, 'Electricity bill payment'),
(1703856300, 7, 3, 45.60, 'Purchase of office supplies'),
(1703924400, 8, 1, 85.90, 'Lunch at a restaurant'),
(1703942400, 9, 2, 70.35, 'Internet bill payment'),
(1704013500, 10, 1, 110.80, 'Grocery shopping for the week'),
(1704029700, 11, 3, 55.45, 'Purchase of books'),
(1704111000, 12, 2, 40.00, 'Mobile phone bill payment');
```  


3. 创建交易类型表`categories`
```sql  
CREATE TABLE categories (
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR ( 50 ) NOT NULL 
); 
```  
- **`id`**: 唯一标识每个类别的自增主键。
- **`name`**: 类别名称，限制为最大长度为50的字符串，不能为空。

  **插入数据**
```sql  
INSERT INTO categories (name) VALUES 
('Groceries'),
('Salary'),
('Rent'),
('Utilities'),
('Entertainment');
```  



### 2.2 创建数据库配置文件

**步骤：**
<hr>

1. 在项目文件夹下，创建文件夹 `config`该文件夹用于存放配置类文件

    <img src="https://zhjyshop.oss-cn-hangzhou.aliyuncs.com/Public/Uploads/m_66186209ae3dc.jpg" alt="image" width="300">  


2. 创建数据库配置文件`db.php`
```php  
<?php  define('DB_HOST', 'localhost');  define('DB_USER', 'root');  define('DB_PASS', 'root');  define('DB_NAME', 'pocket_guard');  define('DB_PORT', '3307');    
    
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);    
    
// CONNECTION TEST /*if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);}  echo "Connected successfully";*/  // /CONNECTION TEST  ?>  
```  

3. 在`resource.html` 添加数据库配置文件
```php  
<?php include 'config/db.php'; ?>  
```

## 3.项目搭建
### 3.1  类别管理
首先搭建类别管理，我们会在添加交易的时候用到类别管理的数据

### 3.1.1 数据显示
**步骤：**
<hr>

1.将模拟数据切换成数据库的数据

```php
$sql = 'SELECT * FROM categories';
$result = mysqli_query($conn, $sql);
$categories  = mysqli_fetch_all($result, MYSQLI_ASSOC);
```
通过替换原来的内容以动态化写死的数据

![img_7.png](img_7.png)


### 3.1.2 添加类别功能

增加一种类别到数据库，以供添加交易记录的时候选择

**步骤：**
<hr>

1. 添加`php`数据添加逻辑
```php
<?php
if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO categories (name) VALUE('$category_name')";
    mysqli_query($conn, $sql);
}
?>
```

![img_5.png](img_5.png)

2. 添加空值判断

```php
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
 
```
![img_8.png](img_8.png)
![img_6.png](img_6.png)

- `<div class="alert alert-danger" role="alert">请输入一个类别名称</div>` 是一个带有 Bootstrap 样式的 div 元素，它会显示为红色背景的框，提示用户输入一个类别名称。
- `class="alert alert-danger"` 是 Bootstrap 的样式类，表示这是一个危险（danger）级别的提示框，通常用于显示错误或警告信息。
- `role="alert"` 是一个辅助性的 ARIA 角色属性，用于定义元素的作用，这里表示这个 div 元素是一个警告框。





 


