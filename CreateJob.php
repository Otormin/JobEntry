<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00795a;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 60px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #2B3940;
        }

        form input, 
        form select, 
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #2B3940;
            border-radius: 4px;
            font-size: 14px;
            color: #2B3940;
            background-color: #EFFDF5;
        }

        form textarea {
            resize: none;
        }

        form input[type="submit"] {
            background-color: #00B074;
            color: white;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }

        form input[type="submit"]:hover {
            background-color: #00795a;
        }

        .cancel-btn {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .cancel-btn a {
            text-decoration: none;
        }

        .cancel-btn button {
            background: #2B9BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .cancel-btn button:hover {
            background: #1e7bd6;
        }

        label {
            font-weight: bold;
            color: #2B3940;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Job</h1>
        <form method="post" action="Job.php">
            <label for="jTitle">Job Title</label>
            <input type="text" name="jTitle" id="jTitle" placeholder="Job Title" required>
            
            <label for="jobNature">Job Nature</label>
            <select name="jNature" id="jobNature" required>
                <option value="" disabled selected>Select Job Nature</option>
                <option>Full Time</option>
                <option>Part Time</option>
            </select>
            
            <label for="pay">Pay</label>
            <input type="number" name="pay" id="pay" placeholder="Pay" required>
            
            <label for="jDescription">Job Description</label>
            <textarea name="jDescription" id="jDescription" placeholder="Job Description" rows="5" cols="10" required></textarea>
            
            <label for="jResponsibility">Responsibility</label>
            <textarea name="jResponsibility" id="jResponsibility" placeholder="Responsibility" rows="5" cols="10" required></textarea>
            
            <label for="jQualification">Qualification</label>
            <textarea name="jQualification" id="jQualification" placeholder="Qualification" rows="5" cols="10" required></textarea>
            
            <label for="dLine">Date line</label>
            <input type="date" name="dLine" id="dLine" placeholder="Date line" required>
            
            <label for="jLocation">Job Location</label>
            <input type="text" name="jLocation" id="jLocation" placeholder="Job Location" required>
            
            <label for="jCategory">Job Category</label>
            <select name="jCategory" id="jCategory" required>
                <option value="" disabled selected>Select Job Category</option>
                <option>Marketing</option>
                <option>Customer Service</option>
                <option>Human Resource</option>
                <option>Project Management</option>
                <option>Business Development</option>
                <option>Sales and Communication</option>
                <option>Teaching and Education</option>
                <option>Design and Creative</option>
                <option>Others</option>
            </select>
            
            <input type="submit" value="Create" name="create">
        </form>
        <div class="cancel-btn">
            <a href="Profile.php"><button type="button">Cancel</button></a>
        </div>
    </div>
</body>
</html>
