<template>
    <section class="vh-100" style="background-image:url(https://media.tenor.com/9vRAkntogEMAAAAd/background.gif)">
      <nav class="navbar navbar-dark bg-dark fixed-top">
          <div class="container">
              <!-- Nama : nama panggilan kalian -->
              <router-link :to="{ name: 'opening' }" class="btn btn-info me-2">Return</router-link>
              <a class="navbar-brand fw-bold" href="../index.php">COMIC READER 10815</a>
              <div class="d-flex justify-content-end">
                    <router-link :to="{ name: 'register' }" class="btn btn-primary me-2">Sign Up</router-link>
                    <router-link :to="{ name: 'login' }" class="btn btn-warning ms-2">Login</router-link>
              </div>
          </div>
      </nav>
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://media.tenor.com/qDK7klsHthQAAAAd/ina-anime.gif"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      
                      <!-- <img src="https://media.tenor.com/no2CaWaci50AAAAi/needy-streamer-overload-reading.gif" style="border-radius:50%;"> -->
                      <img src="https://media.tenor.com/mVh2xCreYaYAAAAC/clang.gif" style="border-radius:50%; height:60px; width:60px;"> 
                      <span class="h1 fw-bold mb-0">Login</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                        <router-link :to="{ name: 'beranda' }" class="btn btn-dark btn-lg btn-block">Login</router-link>
                    </div>
  
                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                        <router-link :to="{ name: 'register' }" class="btn btn-primary">Register Here</router-link>
                    </p>
                    
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </template>
  
  <script>
  // import { getAuth, signInWithEmailAndPassword } from "firebase/auth";
  export default {

    // import { reactive, ref } from 'vue'
    // import { useRouter } from 'vue-router'
    // import axios from 'axios'
    // import { useToast } from "vue-toastification";

    data() {
      return {
        image: { backgroundImage: "https://media.tenor.com/9vRAkntogEMAAAAd/background.gif" }
      };
    },
    
    methods: {
    // login(submitEvent) {
    //   this.email = submitEvent.target.elements.email.value;
    //   this.password = submitEvent.target.elements.password.value;
    //   const auth = getAuth();
    //   signInWithEmailAndPassword(auth, this.email, this.password)
    //     .then(() => {
    //       this.$router.push("/beranda");
    //     })
    //     .catch((error) => {
    //       const errorCode = error.code;
    //       const errorMessage = error.message;
    //       console.log(errorCode);
    //       console.log(errorMessage);
    //       let alert_1 = document.querySelector("#alert_1");
    //       alert_1.classList.remove("d-none");
    //       alert_1.innerHTML = errorMessage;
    //       console.log(alert_1);
    //     });
    // },
    // moveToRegister() {
    //   this.$router.push("/register");
    // },
  },

//   setup() {

// //inisialisasi vue router on Composition API
// const router = useRouter()

// //state user
// const user = reactive({
//     email: '',
//     password: '',
// })

// //state validation
// const validation = ref([])

// //state loginFailed
// const loginFailed = ref(null)

// let toast = useToast();

// //method login
// function login() {
//     //send server with axios
//     axios
//         .post("http://localhost:8000/api/pengguna")
//         .then((response) => {
//         if (response.data.success) {
//             toast.success("Berhasil Login !",{
//                 timeout: 2000
//             })
//             //set token
//             localStorage.setItem("id", response.data.user.id);
//             localStorage.setItem("token", response.data.access_token);
//         }

//         //set state loggedIn to true
//         })
//         .catch((error) => {
//             loginFailed.value = true
//         //set validation dari error response
//         validation.value = error.response.data;
//         });
// }

// return {
//     user,           // <-- state user
//     validation,     // <-- state validation 
//     loginFailed,    // <-- state loggedIn
//     login           // <-- method login
// }
//   }

};
</script>

