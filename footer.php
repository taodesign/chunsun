<footer>
    <p>&copy; 2015
    <?php
        if (!isset($_GET['case'])) {
            echo '<a href="login.php">管理</a>';
        }
    ?>
    </p>
</footer>

<script src="static/jquery-3.3.1.min.js"></script>
<script src="static/main.js"></script>
</body>
</html>