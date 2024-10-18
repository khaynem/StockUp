<template>
   <div>
      <img src="../assets/bg.png" alt="StockUp Logo" class="bgimg" />
      <div class="container">
        <nav class="navbar">
          <div class="logo">
            <a href="">
              <img src="../assets/logo.png" alt="StockUp Logo" />
            </a>
          </div>
          <ul>
            <li><a href="dashboard.vue">DASHBOARD</a></li>
            <li><a href="inventory.html">INVENTORY</a></li>
            <li><a href="stockreport.html">STOCK REPORT</a></li>
            <li><a href="logintracker.html">LOGIN TRACKER</a></li>
          </ul>
          <div class="logout">
            <a href="#">Log Out <i class="fas fa-sign-out-alt"></i></a>
          </div>
        </nav>
  
        <main>
          <h1>Welcome!</h1>
          <h2>StockUp</h2>
          <p>Inventory Management System for School Supplies</p>
        </main>
      </div>
    </div>
</template>

<script>
 export default {
    name: 'HelloWorld'
            
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, sans-serif;
    display: flex;
    min-height: 100vh;
    background-color: #1f3b60;
  }
  
  .container {
    display: flex;
    width: 100%;
  }
  
  .navbar {
    background-color: white;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 300px;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100vh;
    position: fixed;
    text-align: center;
    font-weight: bold;
  }
  
  .navbar .logo {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: 20px;
  }
  
  .navbar .logo img {
    width: 260px;
    height: 230px;
  }
  
  .navbar ul {
    list-style: none;
  }
  
  .navbar ul li {
    margin: 15px 0;
  }
  
  .navbar ul li a {
    color: black;
    text-decoration: none;
    font-size: 18px;
    display: block;
    padding: 16px;
    transition: 0.3s;
  }
  
  .navbar ul li a:hover {
    background-color: #9b9ea4;
    border-radius: 5px;
  }
  
  .navbar .logout a {
    color: black;
    text-decoration: none;
    display: block;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
  }
  
  .navbar .logout a:hover {
    background-color: #9b9ea4;
    border-radius: 5px;
  }
  
  main {
    margin-left: 290px;
    width: 100%;
    padding: 50px;
    text-align: center;
    color: white;
    margin-top: 120px;
  }
  
  main h1 {
    font-size: 60px;
    margin-bottom: 10px;
    font-family: 'Trebuchet MS';
  }
  
  main h2 {
    font-size: 180px;
    margin-bottom: 10px;
    letter-spacing: 5px;
    font-family: 'Jazz LET', fantasy;
    text-shadow: 0 0 30px #021f3d;
  }
  
  main p {
    font-size: 30px;
  }
  
  .bgimg {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.5;
    z-index: -1;
  }
</style>
