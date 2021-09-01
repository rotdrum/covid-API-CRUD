<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style-covid.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase.js"></script>
	
    <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-analytics.js"></script>

	<script>
		// Your web app's Firebase configuration
			const firebaseConfig = {
                apiKey: "AIzaSyAo3yimhTBWY-BrEmpr49VYllel1RQnpzc",
                authDomain: "ctdcovid.firebaseapp.com",
                databaseURL: "https://ctdcovid.firebaseio.com",
                projectId: "ctdcovid",
                storageBucket: "ctdcovid.appspot.com",
                messagingSenderId: "125409628147",
                appId: "1:125409628147:web:33650818bcce2befc58c86",
                measurementId: "G-5S7E00MV39"
			};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
		firebase.analytics();
	</script>

    <script>
  
    var myVar = setInterval(myTimer, 1000);

    function myTimer() {
        firebase.database().ref('totalcases').once('value').then(function(snapshot){
            document.getElementById('total_cases').innerHTML = snapshot.val(); 
        });

        firebase.database().ref('totaldeath').once('value').then(function(snapshot){
            document.getElementById('total_death').innerHTML = snapshot.val(); 
        });

        firebase.database().ref('totalrecovery').once('value').then(function(snapshot){
            document.getElementById('total_recovery').innerHTML = snapshot.val(); 
        });

        firebase.database().ref('newcase').once('value').then(function(snapshot){
            document.getElementById('new_cases').innerHTML = snapshot.val(); 
        });

        firebase.database().ref('newdeath').once('value').then(function(snapshot){
            document.getElementById('new_death').innerHTML = snapshot.val(); 
        });
    }



    function CU() {
        firebase.database().ref("totalcases").set(document.getElementById("totalcases").value) ;
        firebase.database().ref("totaldeath").set(document.getElementById("totaldeath").value) ;
        firebase.database().ref("totalrecovery").set(document.getElementById("totalrecovery").value) ;
        firebase.database().ref("newcase").set(document.getElementById("newcase").value) ;
        firebase.database().ref("newdeath").set(document.getElementById("newdeath").value) ;

        document.getElementById("totalcases").value = "";
        document.getElementById("totaldeath").value = "";
        document.getElementById("totalrecovery").value = "";
        document.getElementById("newcase").value = "";
        document.getElementById("newdeath").value = "";

        alert("Create/Update Success");
    }

    function R() {

        firebase.database().ref('totalcases').once('value').then(function(snapshot){
            document.getElementById('totalcases').value = snapshot.val(); 
        });

        firebase.database().ref('totaldeath').once('value').then(function(snapshot){
            document.getElementById('totaldeath').value = snapshot.val(); 
        });

        firebase.database().ref('totalrecovery').once('value').then(function(snapshot){
            document.getElementById('totalrecovery').value = snapshot.val(); 
        });

        firebase.database().ref('newcase').once('value').then(function(snapshot){
            document.getElementById('newcase').value = snapshot.val(); 
        });

        firebase.database().ref('newdeath').once('value').then(function(snapshot){
            document.getElementById('newdeath').value = snapshot.val(); 
        });

        alert("Get Success");
    }

    function D() {
        firebase.database().ref('totalcases').set('');
        firebase.database().ref('totaldeath').set('');
        firebase.database().ref('totalrecovery').set('');
        firebase.database().ref('newcase').set('');
        firebase.database().ref('newdeath').set('');


        alert("Delete suscess");
    }

    </script>

</head>
<body class="thailand">
    <div class="container">
        <img src="https://miro.medium.com/max/3200/1*ipwpqQrHz0Lkd_5setXQCQ.png">
        
        <div class="navigate">
            <a href="index.php">Covid-19 World report [API]</a>
            <a class="active"href="covid.php">Covid-19 Thailand report [CRUD]</a>
        </div>

        <div class="content">
            <div class="content-left">
                <!-- total-case -->
                <div class="content-left-card">
                    <div class="title">
                        <i class="fas fa-virus"></i>
                        Total Cases
                    </div>
                    <p id="total_cases">0</p> 
                </div>

                <!-- total-death -->
                <div class="content-left-card">
                    <div class="title">
                    <i class="fas fa-skull-crossbones"></i>
                        Total Death
                    </div>
                    <p id="total_death" class="danger">0</p> 
                </div>

                <!-- total-recovery -->
                <div class="content-left-card">
                    <div class="title">
                        <i class="fas fa-heartbeat"></i>
                        Total Recovery
                    </div>
                    <p id="total_recovery" class="warning">0</p> 
                </div>

                <!-- new-case -->
                <div class="content-left-card">
                    <div class="title">
                        <i class="fas fa-virus"></i>
                        New Case
                    </div>
                    <p id="new_cases" class="info">0</p> 
                </div>

                <!-- new-death -->
                <div class="content-left-card">
                    <div class="title">
                        <i class="fas fa-skull-crossbones"></i>
                        New Death
                    </div>
                    <p id="new_death" class="success">0</p> 
                </div>

            </div>


            <div class="content-right">
                <div class="content-right-card">
                   
                    <div class="form-group">
                        <h2>Total Cases</h2>
                        <input type="text" id="totalcases" placeholder="Insert total cases">
                    </div>
                    <div class="form-group">
                        <h2>Total Death</h2>
                        <input type="text" id="totaldeath" placeholder="Insert total death">
                    </div>
                    <div class="form-group">
                        <h2>Total Recovery</h2>
                        <input type="text" id="totalrecovery" placeholder="Insert total recovery">
                    </div>
                    <div class="form-group">
                        <h2>New Case</h2>
                        <input type="text" id="newcase" placeholder="Insert new case">
                    </div>
                    <div class="form-group">
                        <h2>New Death</h2>
                        <input type="text" id="newdeath" placeholder="Insert new death">
                    </div>

                    <div class="btn-manage">
                        <button class="btn-create" onclick="CU()">Create/Update</button>
                        <button class="btn-update" onclick="R()">Get</button>
                        <button class="btn-delete" onclick="D()">Delete</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>
</html>