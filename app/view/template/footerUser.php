</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    document.getElementById('logout').onclick = function () {
        // Tambahkan konfirmasi untuk logout
        var confirmLogout = confirm("Are you sure you want to logout?");

        if (confirmLogout) {
            window.location.href = "login.php";
        }
    };

    document.getElementById('resetpass').onclick = function () {
        // Tambahkan konfirmasi untuk reset password
        window.location.href = "forgot-password.php";
    };
</script>
<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }

    // Highlight active page
    const currentPage = "<?php echo basename($_SERVER['PHP_SELF'], '.php'); ?>";
    const navLinks = document.querySelectorAll('.nav-list li');
    navLinks.forEach(link => {
        if (link.classList.contains(currentPage)) {
            link.classList.add('active');
        }
    });
</script>

</html>