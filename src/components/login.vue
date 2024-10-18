<template>
    <div class="form-container">
      <div class="col col-1" :style="{ borderRadius: colBorderRadius }">
        <div class="image-layer">
          <img src="assets/img/logo.png" class="form-image-main" />
        </div>
        <p class="featured-words">
          Copyright <span>@ STOCK UP</span> By Code Benders,
          <span>"Just give me my package"</span>
        </p>
      </div>
  
      <div class="col col-2">
        <div class="btn-box">
          <button 
            class="btn btn-1" 
            :style="{ backgroundColor: loginButtonColor }" 
            @click="showLoginForm"
          >
            Log in
          </button>
          <button 
            class="btn btn-2" 
            :style="{ backgroundColor: registerButtonColor }" 
            @click="showRegisterForm"
          >
            Sign up
          </button>
        </div>
  
        <!-- Login Form -->
        <div 
          class="login-form" 
          :style="{ left: loginFormLeft, opacity: loginFormOpacity }"
        >
          <div class="form-title"><span>Log In</span></div>
          <div class="form-inputs">
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Username/ID" required />
              <i class="bx bx-user icon"></i>
            </div>
            <div class="input-box">
              <input type="password" class="input-field" placeholder="Password" required />
              <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="forgot-pass">
              <a href="#">forgot password</a>
            </div>
            <div class="input-box">
              <button class="input-submit">
                <span>Sign In</span>
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
            <div class="Sign_link">
              <p>Do not have an account yet? 
                <a href="#" @click.prevent="showRegisterForm">Sign Up Here</a>
              </p>
            </div>
          </div>
        </div>
  
        <!-- Register Form -->
        <div 
          class="register-form" 
          :style="{ left: registerFormLeft, opacity: registerFormOpacity }"
        >
          <div class="form-title"><span>Create an Account</span></div>
          <div class="form-inputs">
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Full Name" required />
              <i class="bx bx-user icon"></i>
            </div>
            <div class="input-box">
              <input type="text" class="input-field" placeholder="Username/ID" required />
              <i class='bx bx-id-card icon'></i>
            </div>
            <div class="input-box">
              <input type="password" class="input-field" placeholder="Password" required />
              <i class="bx bx-lock-alt icon"></i>
            </div>
            <div class="forgot-pass">
              <a href="#">forgot password</a>
            </div>
            <div class="input-box">
              <button class="input-submit">
                <span>Sign In</span>
                <i class="bx bx-right-arrow-alt"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        // State for buttons
        loginButtonColor: "#212640",
        registerButtonColor: "rgba(225,225,225,0.2)",
  
        // State for form positions and opacity
        colBorderRadius: "0% 30% 20% 0",
        loginFormLeft: "50%",
        registerFormLeft: "-50%",
        loginFormOpacity: 1,
        registerFormOpacity: 0,
      };
    },
    methods: {
      showLoginForm() {
        this.loginButtonColor = "#212640";
        this.registerButtonColor = "rgba(225,225,225,0.2)";
        this.loginFormLeft = "50%";
        this.registerFormLeft = "-50%";
        this.loginFormOpacity = 1;
        this.registerFormOpacity = 0;
        this.colBorderRadius = "0% 30% 20% 0";
      },
      showRegisterForm() {
        this.loginButtonColor = "rgba(225,225,225,0.2)";
        this.registerButtonColor = "#212640";
        this.loginFormLeft = "150%";
        this.registerFormLeft = "50%";
        this.loginFormOpacity = 0;
        this.registerFormOpacity = 1;
        this.colBorderRadius = "0 20% 30% 0";
      },
    },
  };
  </script>
  
  <style scoped>
  /* Include your CSS styles here or import them from an external file */
  @import "assets/css/style.css";
  
  /* Example scoped styles for dynamic changes (optional) */
  .form-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100vh;
  }
  
  .login-form, .register-form {
    position: absolute;
    transition: all 0.5s ease;
  }
  
  .btn-box button {
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  </style>
  