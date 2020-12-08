(function(){
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
    apiKey: "AIzaSyC9KcYrMwFoR7VASRqKzEVz-Gb3y3H4hoc",
    authDomain: "ctravel-ss2h.firebaseapp.com",
    databaseURL: "https://ctravel-ss2h.firebaseio.com",
    projectId: "ctravel-ss2h",
    storageBucket: "ctravel-ss2h.appspot.com",
    messagingSenderId: "586418241988",
    appId: "1:586418241988:web:1fec8ae8a0347ed6c12491",
    measurementId: "G-Z8CDM91H2R"
  };
   // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  
    const txtEmail = document.getElementById('txtEmail');
    const txtPassword = document.getElementById('txtPassword');
    const btnLogin = document.getElementById('btnLogin');
    const btnSignUp = document.getElementById('btnSignUp');
    const btnLogout = document.getElementById('btnLogout');

    btnLogin.addEventListener('click', e => {
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();
        const promise = auth.signInWithEmailAndPassword(email,pass);
        promise.catch(e => console.log(e.message));
    });
    
    btnSignUp.addEventListener('click', e => {
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();
        const promise = auth.createUserWithEmailAndPassword(email,pass);
        promise.catch(e => console.log(e.message));
    });
   
    btnLogout.addEventListener('click', e=>{
       firebase.auth().signOut(); 
    });
    
    firebase.auth().onAuthStateChanged(firbaseUser => {
        if(firbaseUser){
            console.log(firbaseUser);
            btnLogout.classList.remove('hide');
        }else{
            console.log('not logged in');
            btnLogout.classList.add('hide');
        };
    });
}());