<template>
  <div class="container">
        <div class="search">
            <input type="text" placeholder="Search">
            <button>
              <i class="fas fa-search"></i>
            </button>
          </div>
          <div class="container">
            <table class="staff-table">
                <thead>
                    <tr>
                        <th>STAFF ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>DATE AND TIME</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Catherine</td>
                        <td>Mon</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>101</td>
                        <td>Kent</td>
                        <td>Ecal</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>102</td>
                        <td>Justin</td>
                        <td>Del Rosario</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>103</td>
                        <td>Janico</td>
                        <td>Sorio</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>104</td>
                        <td>Johannes</td>
                        <td>De Jesus</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>105</td>
                        <td>Johannes</td>
                        <td>De Jesus</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>106</td>
                        <td>Johannes</td>
                        <td>De Jesus</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                    <tr>
                        <td>107</td>
                        <td>Johannes</td>
                        <td>De Jesus</td>
                        <td>2024-10-17 8:39:19.0</td>
                    </tr>
                </tbody>
            </table>
            <div class="delete-section">
                <input type="text" placeholder="STAFF ID" class="staff-id-input" />
                <button class="delete-button">DELETE</button>
            </div>
        </div>
        <nav class="navbar">
            <div class="logo">
                <a href="main.html">
                    <img src='/public/logo.png' alt="StockUp Logo">
                </a>
            </div>
            <ul>
                <li><a href="dashboard.html">DASHBOARD</a></li>
                <li><a href="inventory.html">INVENTORY</a></li>
                <li><a href="stockreport.html">STOCK REPORT</a></li>
                <li><a href="logintracker.html">LOGIN TRACKER</a></li>
            </ul>
            <div class="logout">
                <a href="#">Log Out  <i class="fas fa-sign-out-alt"></i></a>            
            </div>
        </nav>
    </div>
</template>

<style scoped src = "../assets/styles/loginTracker.css"></style>