<template>
    <div class="app-container">
      <nav class="navbar">
        <div class="logo">
          <a href="main.html">
            <img src="images/logo.png" alt="StockUp Logo" />
          </a>
        </div>
        <ul>
          <li><a href="dashboard.vue">DASHBOARD</a></li>
          <li><a href="inventory.vue">INVENTORY</a></li>
          <li><a href="stockreport.html">STOCK REPORT</a></li>
          <li><a href="logintracker.html">LOGIN TRACKER</a></li>
        </ul>
        <div class="logout">
          <a href="#">Log Out <i class="fas fa-sign-out-alt"></i></a>
        </div>
      </nav>
  
      <div class="container">
        <div class="row" id="one">
          <h2>TOP ITEMS IN INVENTORY</h2>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Item</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in topItems" :key="index">
                <td>{{ index + 1 }}</td>
                <td>{{ item }}</td>
              </tr>
            </tbody>
          </table>
        </div>
  
        <div class="row" id="two">
          <h2>TO DO LIST</h2>
          <ul class="todo-list">
            <li v-for="(task, index) in tasks" :key="index">
              <input type="checkbox" v-model="task.completed" />
              <span>{{ task.name }}</span>
            </li>
          </ul>
        </div>
  
        <div class="row" id="three">
          <h2>RECENTLY PURCHASED ITEMS</h2>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Item</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in recentItems" :key="index">
                <td>{{ index + 1 }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.quantity }}</td>
              </tr>
            </tbody>
          </table>
        </div>
  
        <div class="row" id="four">
          <h2>LOGIN TRACKER</h2>
          <table class="table">
            <thead>
              <tr>
                <th>STAFF ID</th>
                <th>NAME</th>
                <th>DATE & TIME</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="log in loginLogs" :key="log.id">
                <td>{{ log.id }}</td>
                <td>{{ log.name }}</td>
                <td>{{ log.dateTime }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from "vue";
  
  export default {
    name: "DashboardView",
    setup() {
      const topItems = ref(["APPLES", "BANANAS", "ORANGES", "WATERMELON"]);
      const tasks = ref([
        { name: "Kakain", completed: true },
        { name: "Matututulog", completed: true },
        { name: "Luto", completed: true },
        { name: "Hugas", completed: true },
        { name: "Linis", completed: true },
      ]);
      const recentItems = ref([
        { name: "APPLES", quantity: 40 },
        { name: "BANANAS", quantity: 30 },
        { name: "ORANGES", quantity: 20 },
        { name: "WATERMELON", quantity: 10 },
      ]);
      const loginLogs = ref([
        { id: 101, name: "LENG", dateTime: "12/25/24 9:25:43.6" },
      ]);
  
      return { topItems, tasks, recentItems, loginLogs };
    },
  };
  </script>
  
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
    background-color: #111022;
  }
  .navbar {
    background-color: white;
    width: 300px;
    padding: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100vh;
    position: fixed;
    text-align: center;
  }
  .navbar .logo img {
    width: 260px;
    height: 230px;
  }
  .container {
    margin-left: 320px;
    padding: 20px;
  }
  .table {
    width: 100%;
    border-collapse: collapse;
  }
  .table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
  }
  .row {
    margin-bottom: 20px;
  }
  .todo-list {
    list-style-type: none;
  }
  </style>
  