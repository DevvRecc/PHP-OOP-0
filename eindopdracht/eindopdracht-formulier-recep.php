<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Gegevens</title>

<title>Gegevens voor Reisadvies</title>

</head>

<body style="background-color: #2B3E50;">
    <main style="width: 900px; margin: 20px auto;">
        <div class="container">

    <div style="margin-bottom: 15px;"class="card">
        <div style="color: white; background-color: #5cb85c !important;" class="card-header bg-success">
            <h4>Gegevens voor Reisadvies</h4>
        </div>
        <div class="card-body bg-dark">

            <!-- HIER DOE IK DE WEG -->

            <form method="post" action="eindopdracht-resultaat-recep.php">
                <div style="border: 1px solid white; padding: 25px; margin-bottom: 15px;" class="kader">
                    <div style="color: white; background-color: #5cb85c; font-weight:bold;" class="alert alert-success"><em>Weg<em></div>
                    <div style="color: white;" class="form-group">
                        <label for="lengte">Lengte (in KM):</label>
                        <input type="number" class="form-control" id="lengte" placeholder="Voer het aantal KM in." name="lengte" value="" required>
                    </div>
                    <div style="color: white;" class="form-group">
                        <label for="vertragingDoorFile">Vertraging door file (in minuten):</label>
                        <input type="number" class="form-control" id="vertragingDoorFile" placeholder="Aantal minuten vertraging door file" name="vertragingDoorFile" value="" required>
                    </div>
                </div>

            <!-- HIER DOE IK DE FIETS -->

                <div style="border: 1px solid white; padding: 25px; margin-bottom: 15px;" class="kader">
                    <div style="color: white; background-color: #5cb85c; font-weight:bold;" class="alert alert-success"><em>Fiets<em></div>
                    <div style="color: white;" class="form-group">
                        <label for="bandenspanningFiets">Bandenspanning (in %):</label>
                        <input type="number" class="form-control" id="bandenspanningFiets" placeholder="Bandenspanning Fiets" name="bandenspanningFiets" value="" required>
                    </div>

                    <label class="checkbox-inline" style="margin-right: 20px; color: white;">
                        <input type="radio" name="welNietElektrisch" value="15" style="opacity: 1;"  required> Niet Elektrisch br(fietssnelheid = 15km/u)
                    </label>
                    <label class="radio-inline" style= "color: white;">
                        <input type="radio" name="welNietElektrisch" value="25" style="opacity: 1;"  required> Elektrisch (fietssnelheid = 25km/u)
                    </label>
                </div>

            <!-- HIER DOE IK DE SCOOTER -->    

                <div style="border: 1px solid white; padding: 25px; margin-bottom: 15px;" class="kader">
                    <div style="color: white; background-color: #5cb85c; font-weight:bold;" class="alert alert-success"><em>Scooter<em></div>
                    <div style="color: white;" class="form-group">
                        <label for="bandenspanningScooter">Bandenspanning (in %):</label>
                        <input type="number" class="form-control" id="bandenspanningScooter" placeholder="Bandenspanning Scooter" name="bandenspanningScooter" value="" required>
                    </div>
                    <div style= "color: white;" class="form-group">
                        <label for="maximaleSnelheidScooter">Snelheid:</label>
                        <select class="form-control" id="maximaleSnelheidScooter" name="maximaleSnelheidScooter">
                        <div class="elektrisch-ofniet">
                            <option value="25">25 KM/u (Snorscooter)</option>
                            <option value="45" >45 KM/u (Bromscooter)</option>
                        </div>
                        </select>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Geef reisadvies</button>
            </form>
        </div>
    </div>
</div>    </main>
</body>

</html>
