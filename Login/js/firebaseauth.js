// Initialize Firebase
  var config = {
    apiKey: "AIzaSyC9KcYrMwFoR7VASRqKzEVz-Gb3y3H4hoc",
    authDomain: "ctravel-ss2h.firebaseapp.com",
    databaseURL: "https://ctravel-ss2h.firebaseio.com",
    projectId: "ctravel-ss2h",
    storageBucket: "ctravel-ss2h.appspot.com",
    messagingSenderId: "586418241988",
    appId: "1:586418241988:web:1fec8ae8a0347ed6c12491",
    measurementId: "G-Z8CDM91H2R"
  };
  firebase.initializeApp(config);

// make auth and firestore references
const auth = firebase.auth();
const db = firebase.firestore();

// listen for auth status changes
auth.onAuthStateChanged(user => {
  if (user) {
    setupUI(user);
    err => console.log(err.message);
  } else {
    setupUI();
  }
});

// signup
const signupForm = document.querySelector('#signup-form');
signupForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // get user info
  const email = signupForm['signup-email'].value;
  const password = signupForm['signup-password'].value;

  // sign up the user & add firestore data
  auth.createUserWithEmailAndPassword(email, password).then(cred => {
    return db.collection('users').doc(cred.user.uid).set({
      bio: signupForm['signup-name'].value
    });
  }).then(() => {
    // close the signup modal & reset form
    const modal = document.querySelector('#modal-signup');
    M.Modal.getInstance(modal).close();
    signupForm.reset();
    signupForm.querySelector('.error').innerHTML = ''
  }).catch(err => {
    signupForm.querySelector('.error').innerHTML = err.message;
  });
});

// logout
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
  e.preventDefault();
  auth.signOut().then(() => {
    console.log('user signed out');
  })
});

// login
const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  // get user info
  const email = loginForm['login-email'].value;
  const password = loginForm['login-password'].value;

  // log the user in
  auth.signInWithEmailAndPassword(email, password).then((cred) => {
    console.log(cred.user);
    loginForm.reset();
    loginForm.querySelector('.error').innerHTML = '';
    //ここでplan_add.phpに画面遷移している。
    window,location.href='../../index.php/index.php';
  }).catch(err => {
    loginForm.querySelector('.error').innerHTML = err.message;
  });

});

// https://blog.ojisan.io/firebase-auth-ipass-login#

// const REDIRECT_URL = "https://ctravel-ss2h.web.app/";


