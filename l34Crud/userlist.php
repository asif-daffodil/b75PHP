<?php  
    include_once("./header.php");
    if(!isset($_SESSION['user'])){
        header("location: ./login.php");
    }
    include_once("./formSubmit.php");
    $selectAllUsersQuery = "SELECT * FROM `users`";
    $selectAllUsers = $conn->query($selectAllUsersQuery); 

    $totalResult = $selectAllUsers->num_rows;
    $userPerPage = 5;
    $pageNo = $_GET['page'] ?? header("location: $page?page=1");
    $pageNo = (int) $pageNo;
    $totalPage = ceil($totalResult / $userPerPage);
    $startPoint = ($pageNo - 1) * $userPerPage;

    $usersQuery = "SELECT * FROM `users` LIMIT $startPoint, $userPerPage";
    $users = $conn->query($usersQuery);

    $SN = $startPoint + 1; 
    ?>
<div class="container-fluid">
  <div class="row">
    <?php include_once("./sideBar.php") ?>
    <div class="col-md-8 pt-5">
      <table class="table table-striped table-hover table-dark mb-3">
        <tr>
          <th>Sl.N.</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php  
                while($row = $users->fetch_object()){ ?>
        <tr>
          <td><?= $SN ?></td>
          <td><?= $row->name ?></td>
          <td><?= $row->email ?></td>
          <td>
            <a href="<?= "$page?page=$pageNo&edit=$row->id" ?>" class="btn btn-warning">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-id="<?= $row->id ?>">
              <i class="fa-solid fa-trash"></i>
            </a>
          </td>
        </tr>
        <?php ++$SN;} ?>
      </table>
      <ul class="pagination pagination-sm">
        <li class="page-item"><a class="page-link bg-dark text-white" href="#"><i class="fa-solid fa-angle-left"></i></a></li>
        <?php
            for ($i=1; $i <= $totalPage; $i++) {
        ?>
        <li class="page-item"><a class="page-link bg-dark text-white <?= $i === $pageNo ? 'active':null ?>" href="<?= $page."?page=$i" ?>"><?= $i ?></a></li>
        <?php } ?>
        <li class="page-item"><a class="page-link bg-dark text-white" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
      </ul>
      <?php 
        if(isset($_GET['edit'])){ 
            $edit = (int) $_GET['edit'];
            $query = "SELECT * FROM `users` WHERE `id` = $edit";
            $data = $conn->query($query);
            $data = $data->fetch_object();
      ?>
      <div class="my-3 col-md-6">
        <h2>Update User</h2>
        <?php  
            if($err){
                foreach($err as $er){
        ?>
            <div class="text-danger"><?= $er ?></div>
        <?php
                }
            }
        ?>
        <form action="" method="post">
            <input type="hidden" name="preEmail" value="<?=  $data->email ?>">
            <input type="hidden" name="uid" value="<?=  $data->id ?>">
            <div class="mb-3">
                <input type="text" placeholder="Email Address" name="upUserEmail" value="<?=  $data->email ?>" class="form-control">
            </div>
            <input type="submit" value="Update User" name="upUser" class="btn btn-dark">
        </form>
      </div>
      <?php } ?>
        
      <!-- modal start -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Do you realy want to delete the user?</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post">
                        <input type="hidden" id="delUserId" name="delUserId">
                        <button type="submit" class="btn btn-danger" name="delUser">Yes</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
      <!-- modal end -->
    </div>
  </div>
</div>
        <script src="./deleteUser.js"></script>
<?php  
    include_once("./footer.php");
?>
