<?php
	require_once '../actions/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Declined Scholars</title>
    <link rel="stylesheet" href="decline.scss" />
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
    <div class="main-container">
      <div class="side-panel">
        <ul>
          <img src="../assets/image/logo-title.png" width="220px" />
          <hr />
          <li style="margin-top: 10px">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                clip-rule="evenodd" />
            </svg>
            <a href="admin.php">Dashboard</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"
                clip-rule="evenodd" />
            </svg>
            <a href="scholar.php">Application</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path
                d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
            </svg>
            <a href="activitylog.php">Progress</a>
          </li>
          <li class="active">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5V7A2.5 2.5 0 0011 4.5H8.128a2.252 2.252 0 011.884-1.488A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z"
                clip-rule="evenodd" />
              <path fill-rule="evenodd"
                d="M2 7a1 1 0 011-1h8a1 1 0 011 1v10a1 1 0 01-1 1H3a1 1 0 01-1-1V7zm2 3.25a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75zm0 3.5a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
            <a href="decline.php">Decline</a>
          </li>
          <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="w-6 h-6"
            >
              <path
                d="M10.375 2.25a4.125 4.125 0 100 8.25 4.125 4.125 0 000-8.25zM10.375 12a7.125 7.125 0 00-7.124 7.247.75.75 0 00.363.63 13.067 13.067 0 006.761 1.873c2.472 0 4.786-.684 6.76-1.873a.75.75 0 00.364-.63l.001-.12v-.002A7.125 7.125 0 0010.375 12zM16 9.75a.75.75 0 000 1.5h6a.75.75 0 000-1.5h-6z"
              />
            </svg>
            <a href="delete-account.html">Deleted Account</a>
          </li>
          <li >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z" />
            </svg>
            <a href="generate.php">Announcement</a>
          </li>
          <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="w-6 h-6"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"
              />
            </svg>
            <a href="generate-program.php">Program</a>
          </li>
        </ul>
        <ul>
          <!-- <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
                clip-rule="evenodd" />
            </svg>
            <a href="">Settings</a>
          </li> -->
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                clip-rule="evenodd" />
              <path fill-rule="evenodd"
                d="M19 10a.75.75 0 00-.75-.75H8.704l1.048-.943a.75.75 0 10-1.004-1.114l-2.5 2.25a.75.75 0 000 1.114l2.5 2.25a.75.75 0 101.004-1.114l-1.048-.943h9.546A.75.75 0 0019 10z"
                clip-rule="evenodd" />
            </svg>
            <a href="../actions/logout.php">Log Out</a>
          </li>
        </ul>
      </div>
      <div class="dashboard-container">
        <div class="header">
          <div class="title">
            <p>Decline Scholar</p>
          </div>
          <div class="acc-and-search">
            <div class="account-image-container">
              <img src="../assets/image/language course.jpg" />
            </div>
          </div>
        </div>
        <div class="isko-container">
          <div class="reports-container" data-aos="fade-up" data-aos-duration="3000">
            <div class="filter-search-container">
              <div class="filter-search">
                <div class="search-box">
                  <input id="search" name="search" type="text" placeholder="Search" />
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                      d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
              <div class="import-export">
                <!-- <button>
                  <span>Import</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                  </svg>
                </button> -->
                <button class="exportScholar">
                  <span>Export</span>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path
                      d="M9.25 13.25a.75.75 0 001.5 0V4.636l2.955 3.129a.75.75 0 001.09-1.03l-4.25-4.5a.75.75 0 00-1.09 0l-4.25 4.5a.75.75 0 101.09 1.03L9.25 4.636v8.614z" />
                    <path
                      d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="table-container">
              <div class="table-head">
                <table>
                  <thead>
                    <tr>
                      <th>LRN</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>M.I</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Pogram</th>
                      <th>Remarks</th>
                    </tr>
                  </thead>
                  <tbody id="scholar-tbl">
                <?php
                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                            $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                                }
                                $total_records_per_page = 5;
                                $offset = ($page_no-1) * $total_records_per_page;
                                $previous_page = $page_no - 1;
                                $next_page = $page_no + 1;
                                $adjacents = "2"; 

                                $result_count = $conn->query("SELECT COUNT(*) As total_records FROM `scholar` LEFT JOIN program ON scholar.program_id = program.program_id LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id WHERE scholar.status = 'D' AND scholar_reqs.user_id IS NOT NULL");
                                $total_records = $result_count->fetch_assoc()['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total page minus 1
                                $result = $conn->query("SELECT * FROM `scholar` LEFT JOIN program ON scholar.program_id = program.program_id LEFT JOIN scholar_reqs ON scholar.user_id = scholar_reqs.user_id WHERE scholar.status = 'D' AND scholar_reqs.user_id IS NOT NULL ORDER BY scholar.update_date DESC LIMIT $offset, $total_records_per_page");
                                while($row = $result->fetch_assoc()){
                                    $status_display = ($row['status'] == 'D') ? 'Declined' : 'Declined';
                            echo "<tr>
                                <td>".$row['lrn_id']."</td>
                                <td>".$row['lname']."</td>
                                <td>".$row['fname']."</td>
                                <td>".$row['mname']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['phone']."</td>
                                <td>".$row['program_name']."</td>
                                <td>".$row['remarks']."</td>
                            </tr>";
                                }
                                $conn->close();
                                ?>
                </tbody>
                </table>
              </div>
              <div class="pagination">
                <div class="pagination-container">
                    <?php if($page_no > 1){ ?>
                        <a href="?page_no=1">&laquo;</a>
                    <?php } ?>

                    <?php 
                    $start = ($page_no - 5) > 0 ? ($page_no - 5) : 1;
                    $end = ($page_no + 5) <= $total_no_of_pages ? ($page_no + 5) : $total_no_of_pages;

                    for ($i = $start; $i <= $end; $i++) {
                        if ($i == $page_no) {
                            echo "<a class='active' href='?page_no=$i'>$i</a>";
                        } else {
                            echo "<a href='?page_no=$i'>$i</a>";
                        }
                    }
                    ?>

                    <?php if($page_no < $total_no_of_pages){ ?>
                        <a href="?page_no=<?php echo $total_no_of_pages; ?>">&raquo;</a>
                    <?php } ?>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script>
    AOS.init();

    $(document).ready(function(){
      $('.exportScholar').click(function(){
        window.location.href = '../actions/exportScholar_Declined.php';
      });
      var originalTableContent = $("#scholar-tbl").html();
      $("#search").on("input", function() {
					var searchText = $(this).val();
          if (searchText === "") {
              // Use the original data directly
              $("#scholar-tbl").html(originalTableContent);
              return;
          }
					if (searchText == "") return;
					// If the search key is not empty, make the AJAX request
            $.post('../actions/search_scholar_declined.php', { key: searchText },
                function(data, status) {
                    console.log(data);
                    $("#scholar-tbl").html(data);
                }
            );
				});
    });
  </script>
</html>
