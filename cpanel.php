<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyDnuNHl5EEX2ANRIAV5Jd0OCa6LU8S2csU",
        authDomain: "agroplant-5ff7f.firebaseapp.com",
        databaseURL: "https://agroplant-5ff7f.firebaseio.com",
        projectId: "agroplant-5ff7f",
        storageBucket: "agroplant-5ff7f.appspot.com",
        messagingSenderId: "810399416600",
        appId: "1:810399416600:web:2d1b24908475c1c8195e6d",
        measurementId: "G-419876DDED"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    var database = firebase.database();

    function writeUserData() {
        firebase.database().ref('users/').set({
            username: 'name',
            email: 'email',
            profile_picture : 'imageUrl'
        });
    }
    writeUserData();
</script>