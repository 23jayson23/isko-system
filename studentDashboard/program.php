<?php
	require_once '../actions/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="program.scss" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css"
    />
    <link
      rel="shortcut icon"
      href="../assets/image/tesda-center-logo.png"
      type="image/x-icon"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body>
    <div class="modal-main" id="personalinfo">
      <div class="modal-container">
        <div class="main-modal">
          <p id="programDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          <button class="btn" onclick="closeModal() ">Close</button>
        </div>
      </div>
    </div>
    <div class="main-container">
      <div class="side-panel">
        <div class="upper-container">
          <ul>
            <div class="image-container">
              <img src="../assets/image/program course.jpg" />
            </div>
            <div
              class="profile-container-side"
              style="border-left: solid 3px #fbaf03"
            >
              <span id="studentName">Paulo Batungbakal</span>
              <p>Student</p>
            </div>
          </ul>
          <ul style="margin-top: 20px">
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z"
                />
                <path
                  d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z"
                />
              </svg>
              <a href="student.php">Home</a>
            </li>
            <li class="active">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z"
                />
              </svg>

              <a href="program.php">Program</a>
            </li>
          </ul>
        </div>
        <div class="logout">
          <ul>
            <!-- <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 01-.517.608 7.45 7.45 0 00-.478.198.798.798 0 01-.796-.064l-.453-.324a1.875 1.875 0 00-2.416.2l-.243.243a1.875 1.875 0 00-.2 2.416l.324.453a.798.798 0 01.064.796 7.448 7.448 0 00-.198.478.798.798 0 01-.608.517l-.55.092a1.875 1.875 0 00-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 01-.064.796l-.324.453a1.875 1.875 0 00.2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 01.796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 01.517-.608 7.52 7.52 0 00.478-.198.798.798 0 01.796.064l.453.324a1.875 1.875 0 002.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 01-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 001.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 01-.608-.517 7.507 7.507 0 00-.198-.478.798.798 0 01.064-.796l.324-.453a1.875 1.875 0 00-.2-2.416l-.243-.243a1.875 1.875 0 00-2.416-.2l-.453.324a.798.798 0 01-.796.064 7.462 7.462 0 00-.478-.198.798.798 0 01-.517-.608l-.091-.55a1.875 1.875 0 00-1.85-1.566h-.344zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                  clip-rule="evenodd"
                />
              </svg>
              <a href="">Settings</a>
            </li> -->
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="w-5 h-5"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                  clip-rule="evenodd"
                />
                <path
                  fill-rule="evenodd"
                  d="M19 10a.75.75 0 00-.75-.75H8.704l1.048-.943a.75.75 0 10-1.004-1.114l-2.5 2.25a.75.75 0 000 1.114l2.5 2.25a.75.75 0 101.004-1.114l-1.048-.943h9.546A.75.75 0 0019 10z"
                  clip-rule="evenodd"
                />
              </svg>
              <a href="../actions/logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="profile-container">
        <div class="header">
          <div class="title">
            <p>Program</p>
          </div>
          <div class="acc-and-search">
            <div class="search-box">
              <input type="text" placeholder="Search" />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="program" id="sharedContent">
          <!-- content here -->
        </div>
        <div class="pagination">
          <div class="pagination-container" id="pagination">
            <!-- content here -->
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
     function viewInfo() {
    var modal_show = document.getElementById("personalinfo")
    modal_show.style.display = "flex"
    }
    function closeModal() {
      var modal_show = document.getElementById("personalinfo")
      modal_show.style.display = "none"
    }
    // AOS.init();
    $(document).ready(function () {
      $.ajax({
        url: '../actions/get_scholar.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var studentName = data.fname + ' ' + data.lname;
            $('#studentName').text(studentName);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
    $(document).on('click', '.view', function(){
      var program_id = $(this).data('id');
      $.ajax({
        url: '../actions/get_program_by_id.php',
        type: 'POST',
        dataType: 'json',
        data: {
          program_id: program_id
        },
        success: function(data) {
          $('#programDesc').text(data.program_desc);
        },
        error: function(error) {
          console.log('Error:', error);
        }
      });
      viewInfo();
    });
      function loadSharedContent(page) {
        $.ajax({
            url: '../actions/load_program.php', // Updated script name
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
            url: '../actions/load_program_pagination.php', // Updated script name
            type: 'GET',
            data: { page_no_shared: page, pagination: true },
            success: function (data) {
                $('#pagination').html(data);
            }
        });
    }
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
