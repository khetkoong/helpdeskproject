<?php

require '../connect.php';

session_start();

// if login yet
if (!isset($_SESSION['id'])) {
    header("Location: form_login.php");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Helpdesk: Repairman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="../main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button hidden type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">เมนู</li>
                            <li>
                                <a href="#" class="mm-active">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    หน้าหลัก
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/pending_job.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    การแจ้งซ่อมที่กำลังดำเนินการ
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/success_job.php">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    การแจ้งซ่อมที่เสร็จสิ้น
                                </a>
                            </li>
                            <!-- <li>
                                <a href="/helpdeskproject/repairman/success_tick.php">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    ปัญหาที่ได้รับการแก้ไขแล้ว
                                </a>
                            </li>
                            <li>
                                <a href="/helpdeskproject/repairman/all_tick.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    รวมการแจ้งปัญหา
                                </a>
                            </li> -->
                            <li>
                                <a href="/helpdeskproject/logout.php">
                                    <i class="metismenu-icon pe-7s-power"></i>
                                    ออกจากระบบ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>หน้าหลัก
                                    <div class="page-title-subheading">หน้าหลักจะแสดงข้อมูลต่างๆ ที่ผู้ใช้งานได้แจ้งปัญหาไว้
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo "<h1>ยินดีต้อนรับ : " . $_SESSION['name'] ."</h1>" ?>
                    <?php echo "แผนก : " . $_SESSION['department'] . "" ?><br />

                    <hr />
                    <br />

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">แจ้งซ่อม</div>
                                        <div class="widget-subheading">ทั้งหมด</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $sql = "SELECT COUNT(*) FROM ticket";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-sunny-morning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">งานที่กำลังรอ</div>
                                        <div class="widget-subheading">รอพนักงานซ่อม</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $name = $_SESSION['name'];
                                                $sql = "SELECT COUNT(*) FROM ticket WHERE `job_status` = 'waiting'";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">ปัญหาที่ได้รับแก้ไขแล้ว</div>
                                        <div class="widget-subheading">พนักงานซ่อมเรียบร้อย</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>
                                                <?php
                                                $name = $_SESSION['name'];
                                                $sql = "SELECT COUNT(*) FROM ticket WHERE `job_status` = 'success'";
                                                $result = $dbcon->query($sql);
                                                $row = $result->fetch_row();
                                                echo $row[0];
                                                ?>
                                            </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN LAYOUT START HERE -->
                    <?php
                    $sql = "SELECT * FROM ticket WHERE job_status = 'waiting'";
                    $result = $dbcon->query($sql);  ?>

                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">การแจ้งซ่อมทั้งหมด</h5>
                            <?php
                            $sql = "SELECT * FROM ticket WHERE job_status = 'waiting'";
                            $result = $dbcon->query($sql);

                            if ($result->num_rows > 0) {
                                // head of table
                                echo "<table class='mb-0 table table-hover'>";
                                echo "<tr align='center'>";
                                echo "<th>รหัสการแจ้งปัญหา</th>";
                                echo "<th>ห้อง</th>";
                                echo "<th>สิ่งของ</th>";
                                echo "<th>Serial Number</th>";
                                echo "<th>รายละเอียด</th>";
                                echo "<th>ชื่อผู้แจ้งซ่อม</th>";
                                echo "<th>วันที่ และ เวลา</th>";
                                echo "<th>สถานะ</th>";
                                echo "<th>รับงาน</th>";
                                echo "</tr>";
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr align='center'>";
                                    echo "<td>" . $row["id"] . " </td>";
                                    echo "<td>" . $row["room"] . "</td>";
                                    echo "<td>" . $row["item"] . "</td>";
                                    echo "<td>" . $row["serial_num"] . "</td>";
                                    echo "<td>" . $row["detail"] . "</td>";
                                    echo "<td>" . $row["submitted_name"] . "</td>";
                                    echo "<td>" . $row["created_at"] . "</td>";
                                    echo "<td>" . "<div class='badge badge-info'>" . $row["job_status"] . "</div>" . "</td>";
                                    echo "<td><div class='dropdown d-inline-block'>
                            <button type='button' aria-haspopup='true' aria-expanded='false' data-toggle='dropdown' class='dropdown-toggle btn btn-primary'>จัดการ</button>
                            <div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu'>

                                <form action='update_jobs.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit' tabindex='0' class='dropdown-item' style='color:green;'>รับงาน</button>
                                </form>

                                <form action='detail.php' method='post'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button type='submit' tabindex='0' class='dropdown-item'>ดูรายละเอียด</button>
                                </form>

                            </div>
                            </div>
                            </td>";
                                    echo "</tr>";
                                    echo "<input hidden name='id' type='text' value='" . $row['id'] . "'>";
                                }
                                echo "</table>";
                            } else {
                                echo "ขณะนี้ไม่มีการแจ้งซ่อม<br />";
                            }

                            ?>
                        </div>
                    </div>

                    <!-- MAIN LAYOUT STOP HERE -->
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>