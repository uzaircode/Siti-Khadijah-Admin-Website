<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Categories Details | Siti Khadijah Online</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="cssiwp.css">
    <link rel="stylesheet" href="add.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-user-circle"></span> <span>Siti Khadijah</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin page iwp project.html"><span class="las la-igloo"></span><span>Dashboard</span></a>
                <li>
                    <a href="viewstaff.html"><span class="las la-heart"></span><span>Staffs</span></a>
                </li>
                <li>
                    <a href="viewmembers.html"><span class="las la-user-shield"></span><span>Members</span></a>
                </li>
                <li>
                    <a href="viewcustomer.html"><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href="viewcategory.html" class="active"><span class="las la-list"></span><span>Categories</span></a>
                </li>
                <li>
                    <a href="viewinvoice.html"><span class="las la-receipt"></span><span>Invoices</span></a>
                </li>
                <li>
                    <a href="vieworder.html"><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>
                <li>
                    <a href="viewproduct.html"><span class="las la-tshirt"></span><span>Products</span></a>
                </li>
                <li>
                    <a href="viewsales.html"><span class="las la-dollar-sign"></span><span>Sales</span></a>
                </li>
                <li>
                    <a href="loginadmin.html"><span class="las la-lock"></span><span>Log Out</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>

                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholeder="search here" />
            </div>

            <div class="user-wrapper">
                <img src="img nik.png" width="40px" height=40px alt="">
                <div>
                    <h4>Nik Ahmad Uzair</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                    </div>
                <div class="card-single">
                    <div>
                        <h1>100</h1>
                        <span>Products</span>
                    </div>
                    <div>
                        <span class="las la-envelope"></span>
                    </div>
                </div>
                    <div class="card-single">
                    <div>
                        <h1>74</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                    </div>
                    <div class="card-single">
                    <div>
                        <h1>6</h1>
                        <span>Staffs</span>
                    </div>
                    <div>
                        <span class="las la-money-bill-wave"></span>
                    </div>
                    </div>
            </div>
             <div class="title-acc">
     <h1 style="text-align: center; font-size: 40px;"> Category Details </h1>
 </div>

    <div class="accountDetails">
        <div class="acc-detail">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Category Name</span>
                        <input type="text"  name="ctName" required >
                    </div>
                    <div class="input-box">
                        <span class="details">Stock</span>
                        <input type="number" name="ctStock" min="1" max="5000"/>
                    </div>
                    <div class="input-box">
                        <span class="details">Sales</span>
                        <input type="type"  name="ctSales"  >
                    </div>
                </div>

                <div class="bttn">
                    <input type="submit" value="ADD NEW CATEGORY" onclick="alert('New Category has added');"/>
                </div>

            </form>
        </div>
    </div>

        </main>



    </div>
    </body>
</html>
