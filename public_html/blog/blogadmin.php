<?php require('header.php'); ?>

<style>
    .admin-content {
        margin: 20px;
    }
    .admin-content .btn {
        background-color: #adb1b8;
        margin-left: 30px;
        Margin-top: 15px; 
    }
    .admin-content .bts {
        background-color: #adb1b8;
        margin-left: 1000px; 
    }
    .admin-content .page-title{
        text-align: center;
        margin-bottom: 1.5rem;
    }
    form div {
        margin-bottom: 15px;
    }
</style>

    <!-- Admin -->
    <div class="admin-content">
        <div class="button-group">
            <a href="bloghome.php" class="btn">Return to Blog Home</a>           
        </div>

        <div class="content">
            <h2 class="page-title">Write a Post</h2>
            <form action="createcode.php" method="POST">
                <div>
                    <label>Title</label>
                    <textarea name="title" id="title" cols="80" rows="1"></textarea>
                </div>
                <div>
                    <label>Body</label>                        
                    <textarea name="body" id="body" cols="80" rows="10"></textarea>
                </div>
                
                <left>
                    <input type="submit" class="bts" value="Submit"></input>
                </left>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    
<?php require('../footer.php'); ?>