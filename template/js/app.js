/**
 * Created by root on 4/20/17.
 */
$(function () {

    $("#btnLogin").on("click",function () {

        var logUserName=$("#loginUserName").val();
        var logPassword=$("#loginPassword").val();

        $.ajax({
           type:"post",
            url:"login.php",
            data:{logUserName:logUserName,logPassword:logPassword},
            success:function (msg) {

                $("#loginInfo").html(msg);

                if(msg==="Login success!"){
                    window.location.replace("template/dashboard.php");
                }

            }

        });

    });

    $("#btnRegister").on("click",function () {

        var regUserName=$("#regUserName").val();
        var regPassword=$("#regPassword").val();
        var regConPassword=$("#regConPassword").val();

        $.ajax({
            type:"post",
            url:"register.php",
            data:{regUserName:regUserName,regPassword:regPassword,regConPassword:regConPassword},
            success:function (msg) {

                $("#registerInfo").html(msg);

                if(msg==="Register success!"){
                    window.location.replace("template/dashboard.php");
                }

            }

        });

    });

    $("#btnLogout").on("click",function () {
       $.ajax({
           type:"post",
           url:"logout.php",
           success:function (msg) {
               if(msg==="Logout!"){
                   window.location.replace("index.php");
               }
               
           }

       });

    });


    $("#btnAddCat").on("click",function () {
        var catName=$("#newCat").val();
        $.ajax({
            type:"post",
            url:"../newCategory.php",
            data:{newCatName:catName},
            success:function (msg) {

                $("#categoryInfo").html(msg);

                if(msg==="Successfully added!"){
                    window.location.replace("category.php");
                }


            }
        });

    });










});