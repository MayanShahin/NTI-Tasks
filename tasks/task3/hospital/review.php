
<!doctype html>
<html lang="en">

<head>
    <title>review</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="result.php">
            <div class="input">
                <div class="review m-5">
                    <table class="rev table-striped ">
                        <thead>
                           <h6> Questions </h6>
                        </thead>
                            <tr>
 <td>Are you satisfied with the level of cleanliness ? <br>
<input type="radio" name="check_list" value="Bad"><label>Bad</label><br/>
<input type="radio" name="check_list" value="Good"><label>Good</label><br/>
<input type="radio" name="check_list" value="Very Good"><label>Very Good</label><br/>
<input type="radio" name="check_list" value="Excellent"><label>Excellent</label><br/></td>
                            </tr>
                            <tr>
                                
 <td> Are you satisfied with the service prices ? <br>
<input type="radio" name="check_list" value="Bad"><label>Bad</label><br/>
<input type="radio" name="check_list" value="Good"><label>Good</label><br/>
<input type="radio" name="check_list" value="Very Good"><label>Very Good</label><br/>
<input type="radio" name="check_list" value="Excellent"><label>Excellent</label><br/>
                                </td>
                            </tr>
                            <tr>
 <td>Are you satisfied with the nursing service ? <br>
<input type="radio" name="check_list" value="Bad"><label>Bad</label><br/>
<input type="radio" name="check_list" value="Good"><label>Good</label><br/>
<input type="radio" name="check_list" value="Very Good"><label>Very Good</label><br/>
<input type="radio" name="check_list" value="Excellent"><label>Excellent</label><br/>
</td>
    </tr>
    <tr>
 <td>Are you satisfied with the level of the doctor? <br>
<input type="radio" name="check_list" value="Bad"><label>Bad</label><br/>
<input type="radio" name="check_list" value="Good"><label>Good</label><br/>
<input type="radio" name="check_list" value="Very Good"><label>Very Good</label><br/>
<input type="radio" name="check_list" value="Excellent"><label>Excellent</label><br/>
</td>
    </tr>
     <tr>
<td>Are you satisfied with the calmness in the hospital? <br>
<input type="radio" name="check_list" value="Bad"><label>Bad</label><br/>
<input type="radio" name="check_list" value="Good"><label>Good</label><br/>
<input type="radio" name="check_list" value="Very Good"><label>Very Good</label><br/>
<input type="radio" name="check_list" value="Excellent"><label>Excellent</label><br/>
</td>
    </tr>
   </div>            
</form><input type="submit" class="mb-2" name="submit" value="Submit"/>

 

<!-- if(isset($_POST['submit'])){
if(!empty($_POST['check_list'])){
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
} -->
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>