<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: sans-serif;
    }

    #sidebar {
        position: fixed;
        width: 200px;
        height: 100%;
        background: #151719;
        left: -200px;
        transition: all 500ms linear;

    }

    #sidebar.active {
        left: 0px;
        z-index: 1;


    }

    #sidebar ul li {
        color: rgba(230, 230, 230, 0.9);
        list-style: none;
        padding: 15px 10px;
        border-bottom: 1px solid rgba(100, 100, 100, 0.3);
    }

    #sidebar .toggle-btn {
        position: absolute;
        left: 230px;
        top: 20px;

    }

    #sidebar .toggle-btn span {
        display: block;
        width: 30px;
        height: 5px;
        background: #151719;
        margin: 5px 0px;
    }

    .slider img {
        width: 100%;
        height: 400px;
        z-index: -1;
        overflow: hidden;
    }

    .bx-wrapper .bx-controls-direction a {
        z-index: 0;
    }

    .menu {
        padding-top: 30px;
    }

    .menu li a {
        color: white;
    }

</style>
<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul class="menu">

        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="employeeDataAdd.php">Employee Data Store</a></li>
        <li><a href="mark_attendance.php">Attendance store</a></li>
        <li><a href="view_task.php">Assigned Task</a></li>
    </ul>

</div>
<script>
    //Side Bar Toogle
    function toggleSidebar() {
        document.getElementById("sidebar").classList.toggle('active');
    }

</script>
