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
    border-bottom: 1px solid black;
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

</style>

<div class="admin-wrapper">
<!-- Left bar -->
    <div class="left-sidebar">
    <ul>
        <li><a href="blogindex.html">Manage Posts</a></li>
       
    </div>
<!-- Admin -->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn">Create Post</a>
       
    </div>

    <div class="content">
        <h2 class="page-title">Manage Posts</h2>
            <table>
                    <thead>
                        <th>Post #</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                                <td>1</td>
                                <td>This is the first post</td>
                                <td>Biensur Chang</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                        </tr>
                        <tr>
                                <td>2</td>
                                <td>This is the second post</td>
                                <td>Biensur Chang</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                        </tr>
            </table>
    </div>
</div>
