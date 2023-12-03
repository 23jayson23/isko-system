<?php //require_once 'actions/db_connect.php';

// $result = $conn->query("SELECT * FROM forum ORDER BY forum_create_date DESC") or die(mysqli_error());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="forum.scss" />
    <link rel="shortcut icon" href="assets/image/tesda-center-logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <header>
        <div class="video-container">
            <video autoplay muted loop plays-inline>
                <source src="assets/image/videobg.mp4" type="video/mp4">
            </video>
        </div>
        <nav>
            <div class="image-container">
                <img src="assets/image/tesdalogo.png" width="230px" />
            </div>
            <ul>
                <li class="line "><a href="index.html">HOME</a></li>
                <li class="line"><a href="announcement.php">ANNOUNCEMENT</a></li>
                <li class="line"><a href="program.html">PROGRAM OFFERED</a></li>
                <li class="line"><a href="forum.php" class="active">FORUM</a></li>
                <li class="line"><a href="register/register.php">APPLY SCHOLAR</a></li>
                <li><a href="about.html">ABOUT US</a></li>
            </ul>
            <div style="width: 100px;"></div>
        </nav>
        </div>
    </header>
    <section id="sectionone">
        <div class="container-forum" data-aos="zoom-in" data-aos-duration="5000">
            <div class="forum-img-container">
                <img src="assets/image/forum.png" width="250px">
            </div>
            <div class="forum-info">
                <div class="forum-contain-info">
                    <strong>share your idea</strong><BR><BR>
                    <p>Lets Collaborate Other <BR>and shared Your Thoughts</p>
                </div>
            </div>
            <br><br>
            <div class="see-more-button">
                <button class="button type1">
                    <span class="btn-txt" onclick="sectionOneDisplay()">Share Idea</span>
                </button>
            </div>
        </div>
    </section>


    <section id="sectiontwo">
        <div class="add-idea-container">
            <div style="width: 100%; padding: 20px;">
                <div class="information-title-container">
                    <img src="assets/image/forum.png" width="100px">
                    <div class="info-sectiontwo-title">
                        <strong>Share Idea</strong>
                        <p>shared your idea to others<br>and collaborate<br>or ask some question</p>
                    </div>
                </div>
                <br><br>
                <form id="messageForm">
                <div class="input-container-sectiontwo">
                    <input class="input" type="text" placeholder="  Name" name="username" required/>
                    <br><br>
                    <textarea class="textarea" placeholder="  Comment" name="message" required></textarea>
                </div>
                <button type="submit" class="btn-post">
                    POST IT
                </button>
                </form>
            </div>
        </div>
        <div class="shared-container">
            <div class="shared-child-container" id="sharedContent">
        <!-- Content loaded dynamically through AJAX will be placed here -->
            </div>
            <div class="pagination">
                <div class="pagination-container" id="pagination">
            <!-- Pagination links will be placed here -->
                </div>
            </div>
</div>
</div>

    </section>

</body>
<script src="js/sweetalert2.all.min.js"></script>
<script>
    AOS.init();
    function sectionOneDisplay() {
        var x = document.getElementById("sectiontwo")
        let v = x
        v.style.transform = "translateY(-100%)"
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#messageForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'actions/add_feedback.php',
                data: $('#messageForm').serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Message Sent!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#messageForm')[0].reset();
                }
            });
        });
        // Function to load content using AJAX
    function loadSharedContent(page) {
        $.ajax({
            url: 'actions/load_forum.php', // Updated script name
            type: 'GET',
            data: { page_no_shared: page },
            success: function (data) {
                $('#sharedContent').html(data);
            }
        });
    }

    // Function to load pagination links using AJAX
    function loadPaginationLinks(page) {
        $.ajax({
            url: 'actions/load_forum_pagination.php', // Updated script name
            type: 'GET',
            data: { page_no_shared: page, pagination: true },
            success: function (data) {
                $('#pagination').html(data);
            }
        });
    }

    // Initial load
    $(document).ready(function () {
        loadSharedContent(1); // Load initial content
        loadPaginationLinks(1); // Load initial pagination links
    });

    // Handle pagination link clicks
    $(document).on('click', '.pagination-container a', function (e) {
        e.preventDefault();
        var page = $(this).attr('href').split('=')[1];
        loadSharedContent(page);
        loadPaginationLinks(page);
    });
    });

</script>

</html>