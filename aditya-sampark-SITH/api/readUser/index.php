<?php
include ('../DB/dbConnection.php');
$result=mysqli_query($con,"Select * from samparkdata LIMIT 5");

if(mysqli_num_rows($result)>0){ 
    while($row = mysqli_fetch_array($result)){ 
	
		
            echo '<table border="1">
            
            <tr>
                    <td><button id="editData">Edit</button></td>
					<td>'.$row['id'].'</td>
					<td>'.$row['refname'].'</td>
					<td>'.$row['fullname'].'</td>
                    <td>'.$row['nickname'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['dob'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['mobile'].'</td>
                    <td>'.$row['home'].'</td>
                    <td>'.$row['office'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['qualification'].'</td>
                    <td>'.$row['majorsub'].'</td>
                    <td>'.$row['edustatus'].'</td>
                    <td>'.$row['attendence'].'</td>
                    <td>'.$row['followupname'].'</td>
                </tr>
        </table>';
        }
        mysqli_free_result($result);
        } 
?>