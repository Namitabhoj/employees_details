<!DOCTYPE html>
<html>
    <head>
        <title>
            Accommodation requests
        </title>
        <script type="text/javascript" src="./JavaScript/validation.js"> </script>
        <link rel="stylesheet" href="./CSS/styles.css" />
    </head>
    <body>
        <div class="employee_container">
            <form class="employee_container_request_form" action="../server/InsertUserInfo.php" method="post" enctype="multipart/form-data">
                <h2>Choose Account Type</h2>
                <label>name</label>
                <input class="employee_container_request_form_input" type="text" name="name" id="name" required>
                <label>ID</label>
                <input class="employee_container_request_form_input" type="text" name="ID" id="ID" required>
                <label>Email</label>
                <input class="employee_container_request_form_input" type="text" name="email" id="email" required>
                <label>Department</label>
                <select name="department" id="department"  class="employee_container_request_form_input" required>
                    <option value="Other">Other</option>
                    <option value="Account Department">Account Department</option>
                    <option value="Personnel Department">Personnel Department</option>
                    <option value="Sales Department">Sales Department</option>
                    <option value="Planning Department">Planning Department</option>
                    <option value="Technocal Department">Technocal Department</option>
                </select>
                <label>Employment Status</label>
                <select name="employment_status" id="employment_status"  class="employee_container_request_form_input" required>
                    <option value="Other">Other</option>
                    <option value="Unemployed">Unemployed</option>
                    <option value="Bussiness">Bussiness</option>
                    <option value="Student">Student</option>
                    <option value="Employed">Employed</option>
                </select>
                <label>Accommodation requests</label>
                <textarea class="employee_container_request_form_input" type="text" name="accommodation_requests" id="accommodation_requests" style="height:90px" required></textarea>
                <label>Upload File</label>
                <input class="employee_container_request_form_input" type="file" name="file" id="file" required>
                <button>Submit</button>
            </form>
        </div>
    </body>
</html>