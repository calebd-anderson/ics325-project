<?php
    require('header.php');
    
?>


<style> 
.admin-wrapper 
    {
    display: flex;
    height: calc(100%);
    }
.admin-wrapper .left-sidebar
    {
    flex: 2;
    height: 100%;
    border: 1px solid black;
    background-color: #adb1b8;
    }
.admin-wrapper .left-sidebar ul
{
    list-style: none;
    margin: 6px;
    padding: 0px;
  

}
.admin-wrapper .left-sidebar ul li a
{
    padding: 18px;
    display: block;
    border-bottom: 1px solid black;
}
.admin-wrapper .left-sidebar ul li a:hover 
{
    background:  #6f7378;
}
.admin-wrapper .admin-content 
    {
    flex: 8;
    height: 100%;
    border: 1px solid black;
    padding: 40px 100px 100px;
    overflow-y: scroll;
    }
.admin-content .btn
{
background-color: #adb1b8;
}
.admin-content .page-title{
    text-align: center;
    margin-bottom: 1.5rem;
}
table{
    width: 100%;
    font-size: 1.1rem;

}
th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #adb1b8'
}
.edit{
    color: green;
}
.delete{
    color: red;
}
.publish{
    color: blue;
}
.edit:hover,
.delete:hover,
.edit:hover{
    text-decoration: underline;
}
form div {
    margin-bottom: 15px;
}
.body{
    width: 600px;
}
</style>

<div class="admin-wrapper">
<!-- Left bar -->
    <div class="left-sidebar">
    <ul>
        <li><a href="blogadmin.php">Manage Posts</a></li>
    </div>
<!-- Admin -->
    <div class="admin-content">
        <div class="button-group">
            <a href="blogadmin.php" class="btn">Return to Manage Post</a>
           
    </div>

    <div class="content">
        <h2 class="page-title">Manage Posts</h2>
<<<<<<< HEAD
            <form action="createcode.php" method="POST">
=======
            <form action="create.hphp" method="post">
>>>>>>> 4afa721d28734d2ab30f57a771ef115c178611c9
                <div>
                        <label>Title</label>
                        <textarea name="title" id="title" cols="80" rows="1"></textarea>
                </div>
                <div>
                        <label>Body</label>
                        
                        <textarea name="body" id="body" cols="80" rows="10"></textarea>
                </div>
               <div>
<<<<<<< HEAD
                   <input type="submit" class="btn" value="Submit"></input>
=======
                   <button type="submit" class="btn">Add Post</button>
>>>>>>> 4afa721d28734d2ab30f57a771ef115c178611c9
                </div>
    </div>
</div>

    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
