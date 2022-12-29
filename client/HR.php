<?php
include "../server/FatchData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>
            Accommodation requests
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="./JavaScript/validation.js"> </script>
        <link rel="stylesheet" href="./CSS/styles.css" />
        
    </head>
<body>
    <form class="search_continer" method="get">
        <input class="search_class" type="text" placeholder="Search.." name="Email">
        <select class="search_class"  name="department" id="department"  class="employee_container_request_form_input" >
                    <option value=""></option>
                    <option value="Other">Other</option>
                    <option value="Account Department">Account Department</option>
                    <option value="Personnel Department">Personnel Department</option>
                    <option value="Sales Department">Sales Department</option>
                    <option value="Planning Department">Planning Department</option>
                    <option value="Technocal Department">Technocal Department</option>
        </select>
        <select class="search_class"  name="employment_status" id="employment_status"  class="employee_container_request_form_input" >
                    <option value=""></option>
                    <option value="Other">Other</option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="Bussiness">Bussiness</option>
                    <option value="Student">Student</option>
                    <option value="Employed">Employed</option>
        </select>
        <button class="search_class"  type="submit"><i class="fa fa-search"></i></button>
    </form>
    <table>
        <tr>
            <th>Series No</th>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Department</th>
            <th>Employment Status</th>
            <th>Accommodation requests</th>
            <th>File</th>

        </tr>
            <?php
             foreach ($stmt->fetchAll() as $valueOfProductArray) { ?>
            <tr class="<?php echo $tdClass ?>">
                <?php foreach ($valueOfProductArray as $key => $values) { ?>
                    <td>
                        <?php echo $values; ?>
                        <?php if($key == "file"){
                            echo "<a href=../server/files/".$values." Download>Download</a>";
                        } ?>
                    </td>
                    <?php
                } ?>
            </tr>
        <?php } ?>
        </table>
</body>
</html>
