<?php
	require_once '../actions/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activity Log</title>
    <link rel="stylesheet" href="activitylog.scss" />
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
          <div class="main-modal" >
            <div class="modal-title">
              <button onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div class="modal-image-container">
              <img src="../assets/image/program course.jpg">
            </div>
            <div class="modal-NS">
              <strong name="boldname">Arnold Bartolome Jr</strong>
              <p>Student</p>
            </div>
            <hr>
            <br>
            <div class="modal-information">
                <div>
                  <p>Personal Information</p>
                </div>
                <hr>
                <input type="hidden" name="user_id" />
                <div class="modal-info">
                  <div class="span">
                    <span>Name </span>
                  </div>
                  <div class="span">
                      <input name="fullname" class="input" type="text" placeholder="Juan Carlos Benigno" disabled>
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Address </span>
                  </div>
                  <div class="span">
                      <input name="address" class="input" type="text" placeholder="012,Pinag Biyakan Malolos Bulacan" disabled>
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Email </span>
                  </div>
                  <div class="span">
                      <input name="email" class="input" type="email" placeholder="012,Pinag Biyakan Malolos Bulacan">
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Phone Number </span>
                  </div>
                  <div class="span">
                      <input name="phone" class="input" type="tel" placeholder="0999-999-9999">
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Gender </span>
                  </div>
                  <div class="span">
                      <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Program </span>
                  </div>
                  <div class="span">
                    <select name="program">
                      <option value="1">Universal Access to Quality Tertiary Education(UAQTEA)</option>
                      <option value="2">Training for Work Scholarship Program(TWSP)</option>
                      <option value="3">Private Education Student Financial Assistance(PESFA)</option>
                      <option value="4">Special Training for Employment Program</option>
                      <option value="5">Tesda Online Program</option>
                      <option value="6">Rice Extension Service Program</option>
                      <option value="7">Tulong Trabaho Law</option>
                    </select>
                  </div>
                </div>
                <div class="modal-info">
                  <div class="span">
                    <span>Status </span>
                  </div>
                  <div class="span">
                    <select name="status">
                      <option value="A">Active</option>
                      <option value="I">Inactive</option>
                    </select>
                  </div>
                </div>
                <div class="button-modal">
                  <button class="saveUpdate">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
                      <path fill-rule="evenodd" d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zm6.163 3.75A.75.75 0 0110 12h4a.75.75 0 010 1.5h-4a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>                            
                  </button>
                </div>
            </div>
          </div>
      </div>
    </div>
    <div class="main-container">
      <div class="side-panel">
        <ul>
          <img src="../assets/image/logo-title.png" width="220px" />
          <hr />
          <li style="margin-top: 10px">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5"
            >
              <path
                fill-rule="evenodd"
                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                clip-rule="evenodd"
              />
            </svg>
            <a href="admin.php">Dashboard</a>
          </li>
          <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5"
            >
              <path
                fill-rule="evenodd"
                d="M9.664 1.319a.75.75 0 01.672 0 41.059 41.059 0 018.198 5.424.75.75 0 01-.254 1.285 31.372 31.372 0 00-7.86 3.83.75.75 0 01-.84 0 31.508 31.508 0 00-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 013.305-2.033.75.75 0 00-.714-1.319 37 37 0 00-3.446 2.12A2.216 2.216 0 006 9.393v.38a31.293 31.293 0 00-4.28-1.746.75.75 0 01-.254-1.285 41.059 41.059 0 018.198-5.424zM6 11.459a29.848 29.848 0 00-2.455-1.158 41.029 41.029 0 00-.39 3.114.75.75 0 00.419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 101.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 013.095 2.348.75.75 0 00.992 0 26.547 26.547 0 015.93-3.95.75.75 0 00.42-.739 41.053 41.053 0 00-.39-3.114 29.925 29.925 0 00-5.199 2.801 2.25 2.25 0 01-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 01-1.084 3.45 26.503 26.503 0 00-1.281-.78A5.487 5.487 0 006 12v-.54z"
                clip-rule="evenodd"
              />
            </svg>
            <a href="scholar.php">Application</a>
          </li>
          <li  class="active">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5"
            >
              <path
                d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z"
              />
            </svg>
            <a href="activitylog.php">Progress</a>
          </li>
          <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5"
            >
              <path
                fill-rule="evenodd"
                d="M15.988 3.012A2.25 2.25 0 0118 5.25v6.5A2.25 2.25 0 0115.75 14H13.5V7A2.5 2.5 0 0011 4.5H8.128a2.252 2.252 0 011.884-1.488A2.25 2.25 0 0112.25 1h1.5a2.25 2.25 0 012.238 2.012zM11.5 3.25a.75.75 0 01.75-.75h1.5a.75.75 0 01.75.75v.25h-3v-.25z"
                clip-rule="evenodd"
              />
              <path
                fill-rule="evenodd"
                d="M2 7a1 1 0 011-1h8a1 1 0 011 1v10a1 1 0 01-1 1H3a1 1 0 01-1-1V7zm2 3.25a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75zm0 3.5a.75.75 0 01.75-.75h4.5a.75.75 0 010 1.5h-4.5a.75.75 0 01-.75-.75z"
                clip-rule="evenodd"
              />
            </svg>
            <a href="decline.html">Decline</a>
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
            <a href="generate.html">Generate</a>
          </li>
        </ul>
        <ul>
          <!-- <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
              class="w-5 h-5"
            >
              <path
                fill-rule="evenodd"
                d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z"
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
      <div class="dashboard-container">
        <div class="header">
          <div class="title">
            <p>Process</p>
          </div>
          <div class="acc-and-search">
            <div class="account-image-container">
              <img src="../assets/image/language course.jpg" />
            </div>
          </div>
        </div>
        <div class="isko-container">
          <div
            class="reports-container"
            data-aos="fade-up"
            data-aos-duration="3000"
          >
            <div class="filter-search-container">
              <div class="filter-search">
                <!-- <div class="filter">
                  <input type="text" placeholder="Filter By:" />
                </div> -->
                <div class="search-box">
                  <input id="search" type="text" placeholder="Search by name" />
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
              <div class="import-export">
                <!-- <button>
                  <span>Import</span>
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
                      d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3"
                    />
                  </svg>
                </button> -->
                <button class="exportScholar">
                  <span>Export</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    class="w-5 h-5"
                  >
                    <path
                      d="M9.25 13.25a.75.75 0 001.5 0V4.636l2.955 3.129a.75.75 0 001.09-1.03l-4.25-4.5a.75.75 0 00-1.09 0l-4.25 4.5a.75.75 0 101.09 1.03L9.25 4.636v8.614z"
                    />
                    <path
                      d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <div class="table-container">
              <div class="table-head">
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Last Name</th>
                      <th>First Name</th>
                      <th>Date Created</th>
                      <th>Program</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="act-tbl"> <!--CONTINUE HERE, DO PRINTING PDF, SEARCH, AND THIS PAGE -->
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

                                $result_count = $conn->query("SELECT COUNT(*) As total_records FROM `scholar` LEFT JOIN program ON scholar.program_id = program.program_id WHERE scholar.status != 'X' AND scholar.status != 'D' AND scholar.status != 'P'");
                                $total_records = $result_count->fetch_assoc()['total_records'];
                                $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                $second_last = $total_no_of_pages - 1; // total page minus 1
                                $result = $conn->query("SELECT scholar.*, program.*, scholar.create_date AS scholar_create_date FROM `scholar` LEFT JOIN program ON scholar.program_id = program.program_id WHERE scholar.status != 'X' AND scholar.status != 'D' AND scholar.status != 'P' ORDER BY scholar.update_date DESC LIMIT $offset, $total_records_per_page");
                                while($row = $result->fetch_assoc()){
                                    $status_display = ($row['status'] == 'A') ? 'Active' : (($row['status'] == 'I') ? 'Inactive' : 'Not Yet Approved');
                                    $newdate = date('F d, Y', strtotime($row['scholar_create_date']));
                            echo "<tr>
                                <td>".$row['lrn_id']."</td>
                                <td>".$row['lname']."</td>
                                <td>".$row['fname']."</td>
                                <td>".$newdate."</td>
                                <td>".$row['program_name']."</td>
                                <td>".$status_display."</td>
                                <td class='action'>
                                <button class='view' onclick='viewInfo()' data-id='".$row['user_id']."'>
                                  <svg
                                    xmlns='http://www.w3.org/2000/svg'
                                    viewBox='0 0 20 20'
                                    fill='currentColor'
                                    class='w-5 h-5'
                                  >
                                    <path
                                      d='M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z'
                                    />
                                    <path
                                      d='M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z'
                                    />
                                  </svg>
                                </button>
                                <button class='delete' data-id='".$row['user_id']."'>
                                  <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                                    <path fill-rule='evenodd' d='M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z' clip-rule='evenodd' />
                                  </svg>        
                                </button>
                                </td>
                            </tr>";
                                }
                                $conn->close();
                                ?>
                      <!-- <td class="action">
                        <button onclick="viewInfo()">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5"
                          >
                            <path
                              d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z"
                            />
                            <path
                              d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z"
                            />
                          </svg>
                        </button>
                        <button>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                          </svg>        
                        </button>
                      </td> -->
                    </tr>
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
function viewInfo(){
  var modal_show = document.getElementById("personalinfo")
  modal_show.style.display = "flex"
}
function closeModal(){
  var modal_show = document.getElementById("personalinfo")
  modal_show.style.display = "none"
  console.log(modal_show)
}

  </script>
  <script src="../js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $(document).on('click', '.delete', function () {
				var user_id = $(this).attr('data-id');
				Swal.fire({
					title: 'Are you sure?',
					text: "Do you want to delete this scholar?",
					icon: 'info',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!',
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: '../actions/delete_scholar.php?user_id=' + user_id,
							error: (err) => console.log(err),
							success: function (resp) {
								if (typeof resp != undefined) {
									resp = JSON.parse(resp);
									if (resp.status == 1) {
										Swal.fire('Success!', resp.msg, 'success').then(() => {
											location.reload();
										});
									}
								}
							},
						});
					}
				});
			});
      $(document).on('click', '.view', function(){
				var $user_id=$(this).attr('data-id');
				$.ajax({
					url:'../actions/get_all_scholar_info_by_id.php',
					method:"POST",
					data:{user_id:$user_id},
					error:err=>console.log(),
					success:function(resp){
                        console.log(resp);
						if(typeof resp !=undefined){
							resp = JSON.parse(resp)
                            console.log(resp);
							$('[name="user_id"]').val(resp.user_id)
							$('[name="boldname"]').text(resp.fname + ' ' + resp.mname + ' ' + resp.lname)
							$('[name="fullname"]').val(resp.fname + ' ' + resp.mname + ' ' + resp.lname)
							$('[name="address"]').val(resp.barangay + ', ' + resp.municipality + ', ' + resp.province)
							$('[name="email"]').val(resp.email)
							$('[name="phone"]').val(resp.phone)
							$('[name="gender"]').val(resp.gender)
							$('[name="program"]').val(resp.program_id)
							$('[name="status"]').val(resp.status)
                            $('.saveUpdate').click(function() {
                                var isSaveButton = $(this).hasClass('saveUpdate');
                                if (isSaveButton) {
                                    var user_id = $('[name="user_id"]').val();
                                    var email = $('[name="email"]').val();
                                    var phone = $('[name="phone"]').val();
                                    var gender = $('[name="gender"]').val();
                                    var program_id = $('[name="program"]').val();
                                    var status = $('[name="status"]').val();
                                    var data = {
                                        user_id: user_id,
                                        email: email,
                                        phone: phone,
                                        gender: gender,
                                        program_id: program_id,
                                        status: status
                                    }
                                    console.log(data);
                                    $.ajax({
                                        url: '../actions/update_scholar.php',
                                        method: 'POST',
                                        data: data,
                                        error: err => console.log(err),
                                        success: function(resp) {
                                          console.log(resp);
                                            if (typeof resp != undefined) {
                                                resp = JSON.parse(resp);
                                                if (resp.status == 1) {
                                                    // Swal.fire('Success!', resp.msg, 'success').then(() => { // FIX THIS ALERT!!!
                                                    //     location.reload();
                                                    // });
                                                    alert(resp.msg)
                                                    window.location.reload();
                                                }
                                            }
                                        }
                                    });
                                }
                                // window.location.href = window.location.href;
                            });


                            console.log(resp.id);
						}
					}
				})
                
			});
      var originalTableContent = $("#act-tbl").html();
      $("#search").on("input", function() {
					var searchText = $(this).val();
          if (searchText === "") {
              // Use the original data directly
              $("#act-tbl").html(originalTableContent);
              return;
          }
					if (searchText == "") return;
					// If the search key is not empty, make the AJAX request
            $.post('../actions/search_activitylog.php', { key: searchText },
                function(data, status) {        
                    console.log(data);
                    $("#act-tbl").html(data);
                }
            );
				});
        $(document).on('click', '.exportScholar', function () {

        // Send AJAX request to generateCOE.php with the ID parameter
        $.ajax({
          url: '../actions/exportActivitylog.php',
          type: 'GET',
          xhrFields: {
            responseType: 'blob',
          },
          success: function (response) {
            // Create URL for the PDF blob
            var url = window.URL.createObjectURL(response);

            // Open the PDF in a new tab
            window.open(url,);
          },
          error: function (xhr, status, error) {
            console.log(xhr.responseText);
          },
        });
        });
    });
  </script>
</html>
