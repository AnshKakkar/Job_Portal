<?php include 'header.php' ?>
<<?php include 'config.php' ?>
<!-- Page content -->
<div class="content2">
  <button type="button" class="collapsible">Post Job</button>
<div class="content1">
  <form method="POST">
    <div class="mb-3">
      <label for="Company Name" class="form-label">Company Name</label>
      <input type="text" class="form-control" id="" name="cname">
    </div>
    <div class="mb-3">
      <label for="exampleInputPosition" class="form-label">Position</label>
      <input type="text" class="form-control" id="exampleInputPosition" name="pos">
    </div>

    <div class="mb-3">
      <label for="Skills" class="form-label">Skills Required</label>
      <input type="text" class="form-control" id="Skills" name="skills">
    </div>
    <div class="mb-3">
      <label for="CTC" class="form-label">CTC</label>
      <input type="text" class="form-control" id="CTC" name="CTC">
    </div>
    <button type="submit" class="btn btn-primary" name="sbmt">Submit</button>
  </form>
</div>

</div>
<div class="tbe">
  <h1>JOBS POSTED</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Company Name</th>
        <th scope="col">Position</th>
        <th scope="col">CTC</th>
      </tr>
    </thead>

      <?php
      $sql="SELECT cname,position,CTC from jobs";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo"
          <tbody>
          <tr>
          <td>".++$i."</td>
          <td>".$rows['cname']."</td>
          <td>".$rows['position']."</td>
          <td>".$rows['CTC']."</td>
          </tr>";
        }
      }
      else {
        echo "";
      }
      ?>

    </tbody>
  </table>

</div>
<script src="index.js" charset="utf-8">

</script>
<script type="text/javascript">
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
