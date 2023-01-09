
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js');
    }
</script>

</body>
<footer>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: right;
        }

        .footer a {
            padding-right: 5%;
            padding-bottom: 10%;
        }

        .logout {
            float: left;
            padding-left: 5%;
            padding-bottom: 10%;
        }
    </style>

    <div class="footer">
        <!--<a href="./inicio.html" class="logout">
            <img src="./img/logoutg.png" width="50" height="50">
        </a>-->
        <a href="./newpost.php">
            <img src="./img/add.png" width="50" height="50">
        </a>

    </div>
    <br>
</footer>

</html>