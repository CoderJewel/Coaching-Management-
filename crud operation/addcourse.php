
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Course</h2>
    <form class="post-form" action="functions/addcoursedata.php" method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="course_trainer">
                <option value=""selected disabled>Select Course</option>
                <option value="1" >Eavn</option> 
                <option value="2" > Tarek</option> 
                <option value="3" >  Jahid</option>  
      
                
            </select>
        </div>
        <div class="form-group">
            <label>Course Price</label>
            <input type="number" name="cprice" />
        </div>
         <div class="form-group">
            <label>Course Durations</label>
            <input type="number" name="cduration" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>