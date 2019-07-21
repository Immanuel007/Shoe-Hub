<?php require 'Header.php';?>
<?php
include 'Config.php';
if(isset($_SESSION['user_email'])){
    $email = $_SESSION['user_email'];
    echo $email."LOve";
}

?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        #create a query/instruction to the db
        $Sql = "SELECT * FROM `personal`";

        #fetch data from the database by issueing the query
        #the data will be stored in the variable '$fetched_results'
        $fetched_results = mysqli_query($connect,$Sql);

        #To get individual data use a loop (while loop)

        #convert fetched data into an associative array(key/value)
        while($row = mysqli_fetch_assoc($fetched_results)){
            # for each record in the while loop grab the data in thier
            #respective columns
            extract($row);

            echo "
                    <tr>
                       <td>$id</td>
                        <td>$firstname</td>
                        <td>$lastname</td>
                        <td>$email</td>
                        <td>
                        
                            <a href='Update.php?user_id=$id&u_firstname=$firstname&u_lastname=$lastname&u_email=$email' class='btn-info' style='padding: 5px'>Update </a>
                            <a href='Delete.php?user_id=$id' class='btn-danger'>Delete </a>
                        </td>
                        </tr>
                ";
        }
        ?>

        </tbody>
    </table>
    </div>
    </div>

<?php include 'Footer.php'?>