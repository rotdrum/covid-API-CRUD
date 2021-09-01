<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style-index.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



</head>
<body>
    <div class="container">
        <img src="banner.png">
        
        <div class="navigate">
            <a class="active" href="index.php">Covid-19 World report [API]</a>
            <a href="covid.php">Covid-19 Thailand report [CRUD]</a>
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
                    <table id="county_state">
                        <tr>
                            <th>Rank</th>
                            <th>Country</th>
                            <th>Cases</th>
                            <th>Deaths</th>
                            <th>Serious critical</th>
                            <th>Total recovered</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>