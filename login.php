
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi CRUD - Login</title>

    <link rel="stylesheet" href="../static/asset/style.css">
    <link rel="stylesheet" href="asset/login/login.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon">
</head>

<body>
    <div class="card-login ">
        <h1><i class="bi bi-clipboard-data" style="margin-right: 10px;"></i>APP-POS</h1>

        <form class="form" action="process_login.php" method="post">
            <input name="username" spellcheck="false" class="control" type="text" placeholder="Username" />

            <div class="password">
                <input name="password" spellcheck="false" class="control" id="password" type="password" placeholder="Password"
                    autocomplete="off" />
                <button class="toggle" type="button"  onclick="togglePassword(this)"></button>
            </div>

            <button class="button-control" type="submit">Login</button>
            
            <!-- <div class="kembali">
                <p>Belum punya akun? <a href="register.php">Register</a></p>
            </div> -->
        </form>

        <?php
            // Menampilkan pesan kesalahan jika ada
            if (isset($_GET['error'])) {
                echo '<p style="color: red;">' . htmlspecialchars($_GET['error']) . '</p>';
            }
    ?>

    </div>

    <script>
        const setCaret = (el) => {
            if (!el) return;

            try {
                const range = document.createRange();
                const sel = window.getSelection();

                range.setStart(el.childNodes[0], el.innerText.length);
                range.collapse(true);

                sel.removeAllRanges();
                sel.addRange(range);
            } catch (err) {
                console.log("Error Setting Caret: ", err);
            }
        };

        const togglePassword = (button) => {
            button.classList.toggle("showing");
            const input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
            input.focus();
            setCaret(input);
        };

        document.getElementById('kembali').addEventListener('click', function () {
            window.history.back();
        });
    </script>
</body>

</html>