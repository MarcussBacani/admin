<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard</title>
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        border-radius: 9px;
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

      .bar-container {
        float: left; /* Align the container to the left */
        margin-top: 40px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 30px;
        width: 100%;
        max-width: 600px;
      }

      .new-customer-viewer {
        margin-left: 920px; /* Adjust margin as needed */
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 400px; /* Adjust max-width as needed */
        text-align: center;
      }
      
      .cards {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 20px;
      }

      .card {
        flex: 1;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-right: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .box {
        text-align: center;
        margin-left: 100px;
      }

      .bar-container {
        width: 100%;
        max-width: 800px; /* Set a maximum width for the chart container */
        margin: 20px auto; /* Center the container */
      }

      table {
        margin: auto; /* Center the table */
      }

      .profile-icon img {
        width: 30px; /* Adjust the width of the icon */
        height: 30px; /* Adjust the height of the icon */
        border-radius: 50%; /* Make the icon circular */
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
            <a href="{{ url('/agegroups') }}">Age Group</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/productmanagements') }}">Product Management</a>
        </div>
    </div>

    <div class="content">
        <div class="cards">
            <div class="card">
                <div class="box">
                    <h5>Blank Data</h5>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h5>Blank Data</h5>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h5>Blank Data</h5>
                </div>
            </div>
            <div class="card">
                <div class="box">
                    <h5>Blank Data</h5>
                </div>
            </div>
        </div>

        <div class="bar-container">
            <canvas id="barChart"></canvas>
        </div>

        <div class="new-customer-viewer">
            <h2>New Customers</h2>
            <table>
                @for($i = 0; $i < 10; $i++)
                    <tr>
                        <td class="profile-icon">
                            <!-- You can replace the image URL or use an img tag -->
                            <img src="{{ asset('images/icon.png') }}" alt="Profile Icon">
                        </td>
                        <td class="profile-name">Blank Data</td>
                    </tr>
                @endfor
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Sample data for the bar chart
        var chartData = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May"],
            datasets: [
                {
                    label: "Monthly Overview",
                    backgroundColor: "#4caf50",
                    data: [0, 0, 0, 0,  0], // Update with your actual data
                },
            ],
        };

        // Get the canvas element
        var ctx = document.getElementById("barChart").getContext("2d");

        // Create the bar chart
        var myBarChart = new Chart(ctx, {
            type: "bar",
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    });
</script>
</body>
</html>
