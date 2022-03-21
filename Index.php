<?php
    include 'header.php';
?>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <img src="img/logo.png" alt="" class="img-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto mb-2 mb-1g-0">
                            <nav class="navbar navbar-light ">
                                <form class="container-fluid justify-content-start">
                                    <button class="btn btn-outline-success me-2" type="button" href="#"><a href="CreateAcc.php" style="text-decoration: none; color:seagreen;">Create Your Blog</a></button>
                                    <button class="btn me-2" type="button" href="#"><a href="admin/admin-login.php" style="text-decoration: none; color:grey;">Admin</a></button>
                                </form>
                            </nav>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
 

    <header>
        <div class="header-text">
            <h1>Xuất bản ý tưởng theo cách riêng của bạn</h1>
            <a href="Login.php">Tạo Blog của bạn</a>
        </div>

    </header>

    <header-2>
        <div class="header-2-text">
            <h1>Chọn thiết kế hoàn hảo</h1>
            <h4>Để tạo ra một website như mong muốn của bạn</h4>
        </div>
        
    </header-2>
<?php
    include 'footer.php';
?>