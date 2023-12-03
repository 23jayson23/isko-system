<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>
    <link rel="stylesheet" href="announcement.scss" />
    <link rel="shortcut icon" href="assets/image/tesda-center-logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <header>
        <nav>
            <div class="image-container">
                <img src="assets/image/tesdalogo.png" width="230px" />
            </div>
            <ul>
                <li class="line "><a href="index.html">HOME</a></li>
                <li class="line"><a href="announcement.php" class="active">ANNOUNCEMENT</a></li>
                <li class="line"><a href="program.html">PROGRAM OFFERED</a></li>
                <li class="line"><a href="forum.php">FORUM</a></li>
                <li class="line"><a href="register/register.php">APPLY SCHOLAR</a></li>
                <li><a href="about.html">ABOUT US</a></li>
            </ul>
            <div style="width: 100px;"></div>
        </nav>
        </div>
    </header>
    <div class="wave">
        <div class="wave-child">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#164863" fill-opacity="1"
                    d="M0,256L80,261.3C160,267,320,277,480,234.7C640,192,800,96,960,80C1120,64,1280,128,1360,160L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
                </path>
            </svg>
        </div>
    </div>
    <section class="sectionone">
        <div class="anc-img-container">
            <img src="assets/image/announcement.png" width="720px">
        </div>
        <div class="announcement-container">
            <div style="width: 60%;">
                <Strong>
                    ANNOUNCEMENT
                </Strong>
                <p style="width: 600px;" id="body">
                    We are delighted to extend our invitation to the forthcoming TVET Policy eFora 2023, hosted in
                    partnership between the Technical Education and Skills Development Authority (TESDA) and the
                    prestigious International Labour Organization (ILO).

                    Mark your calendars for the two-part series scheduled on 11th and 16th August 2023, from 02:00 PM to
                    04:00 PM (GMT+0). We are pleased to inform you that the eFora will be conducted on the Zoom platform
                    and will also be live-streamed via Facebook, ensuring accessibility to all interested participants.

                    The eFora will focus on two pivotal themes, "Transitioning to a Knowledge-based Economy through
                    Lifelong Learning in TVET" and "Investing in TVET for Social Inclusion," with a specific emphasis on
                    the National Technical Education and Skills Development Plan (NTESDP) 2023-2028.

                    We are honored to announce esteemed speakers from the International Labour Organization (ILO) who
                    will be gracing us with their profound insights:
                    Forum 1: Mr. Johnny Sung, who will expound on the ILO Lifelong Learning Analytical Framework.
                </p>
                <!-- <div class="see-more-button">
                    <button class="button type1">
                        <span class="btn-txt">See More</span>
                    </button>
                </div> -->
            </div>
        </div>
    </section>
</body>
<script>

    $(document).ready(function (){
        $.ajax({
            url: 'actions/get_announcement.php',
            type: 'GET',
            success: function (data) {
                data = JSON.parse(data);
                $('#body').html(data.a_message);
            }
        })
    })
</script>
</html>