<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Customer</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 190px;
            background-color: #000000;
            color: #fff;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 9px;
        }

        .menu-item {
            padding: 10px;
            margin-bottom: 7px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .menu-item:hover {
            background-color: #555;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
        }

        .box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ffffff;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f200;
            text-align: center;
        }

        .edit-button {
            background-color: #a2d823;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #ff6347;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fefefe;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 2;
            text-align: center;
        }

        .modal input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .modal button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="sidebar">
        <div class="header">Cyber Cartel</div>
        <div class="menu-item">
            <a href="{{ url('/dashboards') }}">Dashboard</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/customers') }}">Customers</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/agegroups') }}">Age Group  </a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/productmanagements') }}">Product Management</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="box">
                <h2>Customer Information</h2>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      
                        <tr onclick="editRow(this)">
                          <td>Josh</td>
                          <td>josh@gmail.com</td>
                          <td>Dagupan City</td>
                          <td>0987345621</td>
                          <td>
                            <button class="delete-button" onclick="deleteRow(this)">
                              Delete
                            </button>
                        </td>
                      
                        <tr onclick="editRow(this)">
                          <td>Josh</td>
                          <td>josh@gmail.com</td>
                          <td>Dagupan City</td>
                          <td>0987345621</td>
                          <td>
                            <button class="delete-button" onclick="deleteRow(this)">
                              Delete
                            </button>
                        </td>

                        <tr onclick="editRow(this)">
                          <td>Josh</td>
                          <td>josh@gmail.com</td>
                          <td>Dagupan City</td>
                          <td>0987345621</td>
                          <td>
                            <button class="delete-button" onclick="deleteRow(this)">
                              Delete
                            </button>
                        </td>

                        <tr onclick="editRow(this)">
                          <td>Josh</td>
                          <td>josh@gmail.com</td>
                          <td>Dagupan City</td>
                          <td>0987345621</td>
                          <td>
                            <button class="delete-button" onclick="deleteRow(this)">
                              Delete
                            </button>
                        </td>

                        <tr onclick="editRow(this)">
                          <td>Josh</td>
                          <td>josh@gmail.com</td>
                          <td>Dagupan City</td>
                          <td>0987345621</td>
                          <td>
                            <button class="delete-button" onclick="deleteRow(this)">
                              Delete
                            </button>
                        </td>
                    </tr>
                    <!-- Add your Blade directives to generate table rows here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal for Editing -->
    <div id="editModal" class="modal">
        <h2>Edit Customer</h2>
        <input type="text" id="editName" placeholder="Name"/>
        <input type="text" id="editEmail" placeholder="Email"/>
        <input type="text" id="editLocation" placeholder="Location"/>
        <input type="text" id="editContact" placeholder="Contact"/>
        <button onclick="saveEdit()">Save</button>
    </div>
</div>

<script>
    function deleteRow(button) {
        event.stopPropagation();

        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

</script>
</body>
</html>
