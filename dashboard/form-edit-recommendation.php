<?php
include 'koneksi.php';


$id= $_GET['id'];
$sql = "SELECT*FROM rekomen WHERE id = '$id'";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1){ 
    die ("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Favors - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.php" class="logo">
                    <h1 style="margin-top: 20px; font-family:'quicksand'; color: #680a83; font-weight: 800;">Favors</h1>
                </a>
                <a href="index.php" class="logo logo-small">
                    <img src="assets/img/Untitled design.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            <div class="top-nav-search">
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                </a>


            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                        </li>
                        <li>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-users"></i> <span style="color: #680a83;;"> Tambah Data</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="hero.php" class="active">Hero</a></li>
                                <li><a href="best.php" style="color: black;">Best Seller</a></li>
                                <li><a href="recommendation.php">Recommendation</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </li>

                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="content container-fluid">

                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Edit Data Recommendation</h3>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Edit Data Recommendation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Edit Data</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="update-rekom.php" method="post">
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2">Id</label>
                                                    <div class="col-md-10">
                                                    <input type="text" name="id" value="<?php echo $data['id']?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2">Nama</label>
                                                    <div class="col-md-10">
                                                    <input type="text" name="nama"
                                                            value="<?php echo $data['nama']?>" required="required"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2">Harga Awal</label>
                                                    <div class="col-md-10">
                                                    <input type="text" name="harga"
                                                            value="<?php echo $data['harga']?>" required="required"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2">Harga Diskon</label>
                                                    <div class="col-md-10">
                                                    <input type="text" name="diskon"
                                                            value="<?php echo $data['diskon']?>" required="required"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-form-label col-md-2">Gambar</label>
                                                    <div class="col-md-10">
                                                    <img src="gambar/<?php echo $data['gambar']; ?>"
                                                            style="width: 70px; margin-bottom: 30px;">
                                                        <input type="file" name="gambar" class="form-control">
                                                    </div>
                                                    <input type="submit" name="simpan" value="simpan" style="width:200px; height: 40px; border: none; margin: auto; margin-top: 40px; color: white; background-color: #680a83; border-radius: 20px; font-family: 'quicksand'; font-weight: 800;">
                                                </div>
                                            </form>
                                        </div>
                                        </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>


        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/script.js"></script>
</body>

</html>