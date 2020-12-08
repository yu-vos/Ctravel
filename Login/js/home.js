  const btnSignUp = document.getElementById('btnSignUp');
  const txtEmail = document.getElementById('txtEmail');
  const txtPassword = document.getElementById('txtPassword');

  firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((user) => {
      // Signed in
      // ...
      const email = txtEmail.value;
      const pass = txtPassword.value;
      const autu = firebase.auth();

      const promise = autu.signInWithEmailPassword(email, pass);
      promise
        .catch(e => console.log(e.meassge));

    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      // ..
    });