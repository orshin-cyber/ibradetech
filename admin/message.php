<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}

?>
<style type="text/css">
    label{
        font-size: 16px;
        font-family: cambria;
        color: teal;
        font-weight: bold;
        text-transform: capitalize;
    }
    h3{
        font-family: cambria;
        text-transform: capitalize;
        word-spacing: 10px;
        letter-spacing: 10px
    }
    input{
        font-family: cambria;
        font-size: 16px;
        font-weight: bold;
    }
</style>

  <?php include 'navbar.php' ?>

                <section>
                    <div class="table-responsive-sm">
                    <table class="table table-striped">
            <thead>
                <th>Sender's Name</th>
                <th>Subject</th>
                <th>Sender's E-mail</th>
                <th>Date & Time</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
                <?php 
                    include('script/connect.php');
                    $select = "SELECT * FROM mail ORDER BY status desc";
                    $query = mysqli_query($conn, $select);
                    $messages = mysqli_fetch_all($query, MYSQLI_ASSOC);
                    mysqli_free_result($query);
                    mysqli_close($conn);
                ?>

            <tbody style="text-transform: capitalize;">
                <?php foreach ($messages as $message) : ?>
                <tr>
                    <td><?php echo $message['fullname'];?></td>
                    <td><?php echo $message['title'];?></td>
                    <td><?php echo $message['email'];?></td>
                    <td><?php echo $message['date'];?></td>
                    <td><?php echo $message['status'];?></td>
                    <td>
                        <span  ><a class="btn btn-dark text-light" type="button" data-toggle="tooltip" data-placement="left" title="Read message" href="readmessage.php?details=<?php echo $message['id'];?>">
                            <i style="color:white;" class="fas fa-readme"></i></a>
                        </span> |
                        <span  ><a class="btn btn-dark text-light" type="button" data-toggle="tooltip" data-placement="left" title="Reply message" href="replymessage.php?details=<?php echo $message['id'];?>">
                            <i style="color:white;" class="fas fa-reply"></i></a>
                        </span> |
                        <span ><a class="btn btn-dark text-light"   type="button" data-toggle="tooltip" data-placement="left" title="Delete  message" onclick="return confirm('YOU MEAN TO DELETE')"; href="deletemessage.php?details=<?php echo $message['id'];?>" >
                            <i style="color:red;" class="fas fa-trash-alt"></i></a>
                        </span>
                    </td>
                </tr>
                <span> 
                        
            <?php endforeach ?>

                <script>
                function ConfirmDelete(){
                var i = confirm("YOU MEAN TO DELETE???");
                    if (i) 
                        return true;
                            else
                                return false;
                        }
                </script>
            </tbody>
        </table>
        </div>
                </section>
            </main>
    </div>  

</div>


    

<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
<script src="js/header.js"></script>
          <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>