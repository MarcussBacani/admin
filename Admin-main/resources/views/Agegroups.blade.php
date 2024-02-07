<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Group</title>
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

        .filter-container {
            margin: 20px;
        }

        .filtered-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .filtered-item {
            flex: 1 1 calc(33.33% - 20px); /* Adjust the width as needed */
            box-sizing: border-box;
        }

        .filtered-item-container {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            transition: box-shadow 0.3s;
            cursor: pointer;
        }

        .filtered-item-container:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .filter-dropdown {
            margin-bottom: 10px;
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
            <div class="filter-container">
                <div class="filter-dropdown">
                    <label for="categoryFilter">Filter by Age Group:</label>
                    <select id="categoryFilter">
                        <option value="all">All Ages</option>
                        <option value="category1">13-18 Years Old</option>
                        <option value="category2">18-26 Years Old</option>
                        <option value="category3">26-36 Years Old</option>
                    </select>
                </div>

                <div class="filtered-container">
                    <div class="filtered-item" data-categories="category1">
                        <div class="filtered-item-container">
                            <h3>Josh (13 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category1">
                        <div class="filtered-item-container">
                            <h3>Josh (15 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category1">
                        <div class="filtered-item-container">
                            <h3>Josh (18 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category2">
                        <div class="filtered-item-container">
                            <h3>Josh (18 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category2">
                        <div class="filtered-item-container">
                            <h3>Josh (24 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category2">
                        <div class="filtered-item-container">
                            <h3>Josh (26 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category3">
                        <div class="filtered-item-container">
                            <h3>Josh (26 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category3">
                        <div class="filtered-item-container">
                            <h3>Josh (30 years old)</h3>
                        </div>
                    </div>
                    <div class="filtered-item" data-categories="category3">
                        <div class="filtered-item-container">
                            <h3>Josh (35 years old)</h3>
                        </div>
                    </div>
                    <!-- Add more items as needed -->
                </div>
            </div>
        </div>

        <script>
            const categoryFilter = document.getElementById('categoryFilter');
            const filteredItems = document.querySelectorAll('.filtered-item');

            categoryFilter.addEventListener('change', updateFilter);

            function updateFilter() {
                const selectedCategory = categoryFilter.value;

                filteredItems.forEach(item => {
                    const itemCategories = item.dataset.categories.split(' ');
                    const isVisible = selectedCategory === 'all' || itemCategories.includes(selectedCategory);
                    const container = item.querySelector('.filtered-item-container');
                    container.style.display = isVisible ? 'block' : 'none';
                });
            }
        </script>
    </div>
</body>
</html>
