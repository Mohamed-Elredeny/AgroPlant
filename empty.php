<?php

header('location:cpanel.php');



<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<center>
    <form action="cpanel.php" method="POST">

        <div class="card" style="height: 600px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
    اضافة منتج جديد
<div class="card-body">
                <table class="table" style="text-align: right;direction: rtl">
                    <tbody>
                    <tr>
                        <th scope="row">اسم المنتج</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="productName"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">وصف المنتج</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="productDescription"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">الاستخدام</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="productUsage"  style="text-align: right">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">سعة العبوه </th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="productCapacity"  style="text-align: right">
                        </td>
                    </tr>



                    </tbody>
                </table>

                <input type="submit" value="أضافة منتج جديد" class="btn btn-primary" name="AddNewCus" onclick="writeUserData()">

            </div>
        </div>

    </form>

</center>



]





<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block">Copyright &copy @  </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block"> done <i class="ft-heart pink"></i></span>
    </p>
</footer>
