<!DOCTYPE html>
<nav id="sidebar">
    <ul>
        <li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>></a></li>
<button id="toggleSidebarBtn">Ocultar</button>

<div class="sidebar">
    <div class="sidebar-section">
        <div class="sidebar-section-title">
        <a href="index.php">Admin</a>
    </div>
    </div>
        <div class="sidebar-section">
        <div class="sidebar-section-title">Roles</div>
        <div class="sidebar-section-content">
            <a href="rol.view.php">Agregar Rol</a>
            <a href="rol.search.view.php">Buscar Rol</a>
            <a href="rol.update.view.php">Actualizar Rol</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Usuarios</div>
        <div class="sidebar-section-content">
            <a href="user.view.php">Agregar Usuario</a>
            <a href="user.search.view.php">Buscar Usuario</a>
            <a href="user.update.view.php">Actualizar Usuario</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Reservas</div>
        <div class="sidebar-section-content">
            <a href="reserva.view.php">Reservar</a>
            <a href="consultar_fechas_reserva.php">Consultar Fechas de Reserva</a>
        </div>
    </div>
    <div class="sidebar-section">
        <div class="sidebar-section-title">Parqueadero</div>
        <div class="sidebar-section-content">
            <a href="parqueadero.view.php">Reservar Parqueadero</a>
            <a href="consultar_fechas_parqueadero.php">Consultar Fechas de Reserva Parqueadero</a>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
        const sidebar = document.querySelector('.sidebar');
        const main = document.querySelector('.main');

        toggleSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            main.classList.toggle('expanded');
            toggleSidebarBtn.classList.toggle('hidden');
            toggleSidebarBtn.textContent = sidebar.classList.contains('hidden') ? 'Mostrar' : 'Ocultar';
        });

        const sectionTitles = document.querySelectorAll('.sidebar-section-title');

        sectionTitles.forEach(title => {
            title.addEventListener('click', () => {
                const content = title.nextElementSibling;
                content.style.display = content.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>