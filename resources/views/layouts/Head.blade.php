<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Numex app</title>
    <meta name="keywords" content="JaysetCRM" />
    <meta name="description" content="JaysetCRM">
    <meta name="author" content="JaysetCRM">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    <link href="resources/asset/img/favicon.png" rel="icon">
    <link href="resources/asset/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <!-- Theme Custom CSS -->
    <!-- <link rel="stylesheet" href="{{url('/')}}/resources/css/payroll.css"> -->
    <link rel="stylesheet" href="/resources/css/payroll.css">
    
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap'); 
.main-body{
    width: 100%;
    background-color: rgb(241,241,241);
    height: max-content;

}
body{
    background-color: rgb(241,241,241);
    font-family: 'Poppins', sans - serif!important;
    font-size: 14px;
    font-weight: 500;

}
.table_head{
    border: none !important;
}
a,input,p,div{
    font-family: 'Poppins', sans - serif!important;
    font-size: 14px;
    font-weight: 500;
    
 }

.search{
    margin-top: 5%;
    width: 90%;
    margin-left: 5%;
}

.cus-table{
    width: 95%;
    margin-left: 2.5%;
}

.external-link {
    cursor: pointer;
    color: blue
}

.cus-payroll-card{
    margin-top: 10%;
    margin-left: 15.5%;
}

.cus-side-card{
    width: 18%;
    margin-top: 10%;
    margin-left: 1%;
}
.hiddenRow {
    padding: 0 0px !important;
    /* background-color: #eeeeee; */
    font-size: 14px;
}

.side-table{
    border-radius: 8px;
    background-color: rgb(241,241,241);
}

.cus-flex{
    display: flex;
}
.cus-collapse{
    background-color:rgb(241,241,241) ;
    border-radius: 6px;
}
.calculator{
    background-color: rgb(91, 158, 230);
    width: 50PX;
    height: 50PX;
    border-radius: 50%;
    behavior: url(PIE.htc);
    font-size: 25px;
    margin-right:  1%;
    margin-top: 0.32%;

}

.calculator .fa-icon{
    margin-left: 13px;
    margin-top: 13px;
}

.heading{
    display: flex;
    width: 40%;
}
.heading1{
    display: flex;
    margin-top: 1%;
}

.heading-m{
    margin-left: 10%;
}
.heading-f{}

.heading-table{
    width: 20%;
    margin-left: 23.7%;
}
.pb-15{
    padding-bottom: 2%;
}

.payroll-card{
    display: flex;
    background-color: rgb(241,241,241);
    width: 100%;
    height: 100vh;
    font-family: 'Poppins', sans - serif!important;
}

.pay-w{
    width: 18%;
    background-color: white;
    height: 30%;
    border-radius: 10px;
    z-index: 1000;
    margin-top: -3%;
}
.pay-w1{
    width: 50%;
    background-color: white;
    height: 30%;
    margin-right: 1%;
    margin-left: 14%;
    border-radius: 10px;
    z-index: 1000;
    margin-top: -3%;
}
.b-pill{
    width: 100%;
    display: flex;
}

.b-pill h5{
    font-size: 15px;
    margin-left: 3%;
    margin-top: 1%;
}

.b-pill p{
    font-size: 15px;
    margin-left: 3%;
    margin-top: 1%;
}

.review-button{
    margin-top: 5%;
    border-radius: 20px;
    width: 100%;
}

.expand-div{
    display: flex;
}

.expand-div-inner1{
    width: 45%;
    margin-left: 2%;
    font-family: 'Poppins', sans - serif!important;
}

.expand-div-inner2{
    width: 45%;
    margin-left: 5%;  
    font-family: 'Poppins', sans - serif!important;
}

.inb-r{
    border-radius: 5px;
}

.ra{
    text-align: right;
}
.move-a-right{
    margin-left: 50%;
}
.move-a-right1{
    margin-left: 33%;
}

.monthly-pay{
    background-color: white;
    width: 40%;
    height: 30px;
    margin-top: 3%;
    border-radius:5px ;
}
.m-l{
    margin-left: 5%;
}
.mp-span{
    margin-top: 4%;
    margin-left: 5%;
    width: 10%;
}

.pay-input{
    width: 80%;
    outline: none;
    text-decoration: none;
    border: 2px solid rgb(108,117,125);
    border-radius: 5px;

}

.pay-input1{
    width: 50%;
    outline: none;
    text-decoration: none;
    border: 2px solid rgb(108,117,125);
    border-radius: 5px;
    margin-left: 1%;
}

.mp-span1{
    margin-top: 4%;
    margin-left: 10%;
    width: 10%;
}

.add-salary{
    padding-top: 5%;
    padding-bottom: 5%;
}

.modal-input-div{
    background-color:rgb(241,241,241) ;
    height: 40px;
    border-radius: 5px;
    width: 100%;
}
.modal-input-div1{
    background-color:rgb(241,241,241) ;
    border-radius: 5px;
    width: 100%;
    height: 80px;
}
.modal-input-div2{
    background-color:rgb(241,241,241) ;
    border-radius: 5px;
    width: 100%;
    height: 50px;
}
.modal-input-div1 textarea{
    width: 210%;
    height: 70px;
    margin-top:3% ;
    margin-left: 3%;
    border-radius: 5px;
    border: 2px solid rgb(108,117,125);
}

.modal-input-div input{
    margin-top: 3%;
    width: 244%;
    background-color:rgb(241,241,241) ;
    text-decoration: none;
    border: none;
    outline: none;
}

.modal-span{
    margin-left: 54%;
    margin-top: 2%;
}
.modal-span span{
    font-size: 15px;
}

.biv-button{
    width: 100%;
    margin-top: 3%;
}

.modal-table{
    background-color:rgb(241,241,241) ;
    margin-top: 3%;
    border-radius: 5px;
}

.modal-slect{
    width: 45%;
    margin-top: 1%;
    margin-left: 3.3%;
}
.h-95{
    height: 90%;
    border-radius: 5px;
    border: 2px solid rgb(108,117,125);
}

.modal-s-1{
    margin-left: 4%;
    margin-top: 3%;;
}

.modal-s-2{
    margin-left: 28%;
    margin-top: 3%;;
}
.red{
    color: red;
    margin-left: 1%;
}

.d-n{
    display: none;
}

.f-s-16{
    font-size: 13px;
}

.p-r{
    margin-left: 5%;
    padding-top: 3%;
    margin-top: 2%;
}

.p-b-10{
    margin-bottom: 5%;
}

.p-t-5{
    margin-top: 5%;
}

.m-l-6{
    margin-left: 35%;
}

.m-l-5{
    margin-left: 36%;
}

.m-l-4{
    margin-left: 1%;
}

.shape{
    width: 20%;
    height: 36px;
    background-color: rgb(247,247,247);
    border-radius: 7px;
    padding-top: 1%;
}

.shape span{
    margin-top: 2%;
    margin-left: 15%;
    font-size: 14px;
}

.shape1{
    width: 45%;
    height: 7px;
    background-color: rgb(247,247,247);
    margin-top: 2%;
}

.ca{
    text-align: center;
}

.i-ma{
    color: blue;
    margin-right: 3%;
    font-size: 19px;
}

.check-box-table{
    margin-top: 3%;
}
.f-13{
    font-size: 13px;
}


</style>
<body>

    @yield('content')
</body>
</html>