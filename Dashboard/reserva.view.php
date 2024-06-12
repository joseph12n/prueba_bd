<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <link rel="stylesheet" href="styles.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="script.js"></script>


</head>
<body>
<?php include 'sidebar.php'; ?>

    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="salon-comunal-tab" data-toggle="tab" href="#salonComunal" role="tab" aria-controls="salonComunal" aria-selected="true">Salón Comunal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="quiosco-tab" data-toggle="tab" href="#quiosco" role="tab" aria-controls="quiosco" aria-selected="false">Quiosco</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="salonComunal" role="tabpanel" aria-labelledby="salon-comunal-tab">
                <h2>Reservar Salón Comunal</h2>
                <div id='calendarSalonComunal'></div>
                <form id="formularioReservaSalonComunal">
                    <div class="form-group">
                        <label for="fechaInicioSalon">Fecha de Inicio:</label>
                        <input type="date" class="form-control" id="fechaInicioSalon" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaFinSalon">Fecha de Fin:</label>
                        <input type="date" class="form-control" id="fechaFinSalon" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
            <div class="tab-pane fade" id="quiosco" role="tabpanel" aria-labelledby="quiosco-tab">
                <h2>Reservar Quiosco</h2>
                <div id='calendarQuiosco'></div> <form id="formularioReservaQuiosco">
                    <div class="form-group">
                        <label for="fechaInicioQuiosco">Fecha de Inicio:</label>
                        <input type="date" class="form-control" id="fechaInicioQuiosco" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fechaFinQuiosco">Fecha de Fin:</label>
                        <input type="date" class="form-control" id="fechaFinQuiosco" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Reservar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
     <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
</body>
</html>
