<?php
	require_once '../actions/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.scss" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
              <strong>Arnold Bartolome Jr</strong>
              <p>Student</p>
            </div>
            <hr>
            <br>
            <div class="modal-information">
                <div>
                  <p>Personal Information</p>
                </div>
                <hr>
                <div class="modal-info">
                  <span>Name </span>
                  <span>Juan Carlos Benigno</span>
                </div>
                <div class="modal-info">
                  <span>Address </span>
                  <span>012,Pinag Biyakan Malolos Bulacan</span>
                </div>
                <div class="modal-info">
                  <span>Email </span>
                  <span>Juankamo@gmail.com</span>
                </div>
                <div class="modal-info">
                  <span>Phone Number </span>
                  <span>0999-999-9999</span>
                </div>
                <div class="modal-info">
                  <span>Gender </span>
                  <span>Male</span>
                </div>
                <div class="modal-info">
                  <span>Program </span>
                  <span>NC II NURSING</span>
                </div>
                <div class="modal-info">
                  <span>Semester </span>
                  <span>1st Sem</span>
                </div>
                <div class="button-modal">
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd" />
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
          <li style="margin-top: 10px" class="active">
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
          <li>
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
            <a href="activitylog.php">Process</a>
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
            <a href="reports.php">Reports</a>
          </li>
          <!-- <li>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="w-6 h-6"
            >
              <path
                d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z"
              />
            </svg>
            <a href="">Announcement</a>
          </li> -->
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
            <p>Dashboard</p>
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
            <div class="account-image-container">
              <img src="../assets/image/language course.jpg" />
            </div>
          </div>
        </div>
        <!-- data-container -->
        <div class="data-container">
          <div class="count-container" data-aos="fade-up"
          data-aos-duration="400">
            <div>
              <img src="../assets/image/scholar.png">
            </div>
            <div>
              <strong id="approved">9,999+</strong>
              <p>Scholars</p>
            </div>
          </div>

          <div class="count-container" data-aos="fade-up"
          data-aos-duration="400">
            <div>
              <img src="../assets/image/applicant.png">
            </div>
            <div>
              <strong id="pending">9,999+</strong>
              <p>Applicant</p>
            </div>
          </div>

          <div class="count-container" data-aos="fade-up"
          data-aos-duration="400">
            <div>
              <img src="../assets/image/active.png">
            </div>
            <div>
              <strong id="inactive">9,999+</strong>
              <p>Inactive</p>
            </div>
          </div>

          <div class="count-container" data-aos="fade-up"
          data-aos-duration="600">
            <div>
              <img src="../assets/image/not active.png">
            </div>
            <div>
              <strong id="declined">9,999+</strong>
              <p>Declined</p>
            </div>
          </div>
        </div>
        <!-- data ang graph -->
        <div class="data-graph-container">
          <!-- <div class="user-container" data-aos="fade-up"
            data-aos-duration="3000">
            <div class="user-report">
              <table>
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Program</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr><tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr><tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr><tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  <tr>
                    <td>1202909</td>
                    <td>Jasmine</td>
                    <td>Reyes</td>
                    <td>Electronic</td>
                    <td onclick="viewInfo()">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                      </svg>                      
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div> -->
          <div class="graph-container" data-aos="fade-left"
            data-aos-duration="3000">
            <div class="graph-one">
              <div id="my-chart">
                <table
                  class="charts-css column hide-data show-labels datasets-spacing-3 show-8-secondary-axes">
                  <thead>
                    <tr>
                      <th scope="col">Month</th>
                      <th scope="col">Progress</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Jan</th>
                      <td style="--size: calc(20 / 100)">
                        <span class="data"> 30 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Feb</th>
                      <td style="--size: 0.5">
                        <span class="data" style="color: #fff"> 50 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Mar</th>
                      <td style="--size: 0.8">
                        <span class="data"> 80 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Apr</th>
                      <td style="--size: 1"><span class="data"> 100 </span></td>
                    </tr>
                    <tr>
                      <th scope="row">May</th>
                      <td style="--size: 0.65">
                        <span class="data"> 65 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Jun</th>
                      <td style="--size: 0.45">
                        <span class="data"> 45 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Jul</th>
                      <td style="--size: 0.15">
                        <span class="data"> 15 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Aug</th>
                      <td style="--size: 0.32">
                        <span class="data"> 32 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Sep</th>
                      <td style="--size: 0.6">
                        <span class="data"> 60 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Oct</th>
                      <td style="--size: 0.9">
                        <span class="data"> 90 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Nov</th>
                      <td style="--size: 0.55">
                        <span class="data"> 55 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Dec</th>
                      <td style="--size: 0.4">
                        <span class="data"> 40 </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center; width: 100%; margin-top: 10px;">
                  <label>Data of Scholars</label>
                </div>
              </div>
            </div>
            <div class="graph-two">
              <div id="my-chart">
                <table
                  class="charts-css column hide-data show-labels data-spacing-3 show-data-axes show-4-secondary-axes"
                >
                  <tbody>
                    <tr>
                      <th scope="row ">Jan</th>
                      <td style="--size: calc(20 / 100)">
                        <span class="data"> 30 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Feb</th>
                      <td style="--size: 0.5">
                        <span class="data" style="color: #fff"> 50 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Mar</th>
                      <td style="--size: 0.8">
                        <span class="data"> 80 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Apr</th>
                      <td style="--size: 1"><span class="data"> 100 </span></td>
                    </tr>
                    <tr>
                      <th scope="row">May</th>
                      <td style="--size: 0.65">
                        <span class="data"> 65 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Jun</th>
                      <td style="--size: 0.45">
                        <span class="data"> 45 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Jul</th>
                      <td style="--size: 0.15">
                        <span class="data"> 15 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Aug</th>
                      <td style="--size: 0.32">
                        <span class="data"> 32 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Sep</th>
                      <td style="--size: 0.6">
                        <span class="data"> 60 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Oct</th>
                      <td style="--size: 0.9">
                        <span class="data"> 90 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Nov</th>
                      <td style="--size: 0.55">
                        <span class="data"> 55 </span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Dec</th>
                      <td style="--size: 0.4">
                        <span class="data"> 40 </span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center; width: 100%; margin-top: 10px;">
                  <label >Data of Applications</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pie-graph-container">
          <div class="pie-child" data-aos="fade-up" data-aos-duration="3000">
            <canvas id="myChart" style="width: 100%; max-width: 900px"></canvas>
          </div>
        </div>
      </div>
    </div>
    <!-- modal -->
  </body>
  <script src="admin.js"></script>
  <script>
    const xValues = [
      "Universal Access to Quality Tertiary Education(UAQTEA)",
      "Training for Work Scholarship Program(TWSP)",
      "Private Education Student Financial Assistance(PESFA)",
      "Special Training for Employment Program",
      "Tesda Online Program",
      "Rice Extension Service Program",
      "Tulong Trabaho Law",
    ];
    $.ajax({
      url: "../actions/get_scholar_by_program.php",
      type: "GET",
      dataType: "json",
      success: function (data) {
        console.log(data);
        var program1 = data.program1;
        var program2 = data.program2;
        var program3 = data.program3;
        var program4 = data.program4;
        var program5 = data.program5;
        var program6 = data.program6;
        var program7 = data.program7;

        const yValues = [program1, program2, program3, program4, program5, program6, program7];
      // const yValues = [1, 1, 1, 0, 0, 1, 1];
        const barColors = [
          "#DDF2FD",
          "#29ADB2",
          "#C5E898",
          "#164863",
          "#427D9D",
          "#9BBEC8",
        ];

        new Chart("myChart", {
          type: "pie",
          data: {
            labels: xValues,
            datasets: [
              {
                backgroundColor: barColors,
                data: yValues,
              },
            ],
          },
          options: {
            title: {
              display: true,
              text: "Course Percentage",
            },
          },
        });
      },
      error: function (error) {
        console.log("Error:", error);
      },
    });
    
  </script>
  <script src="../js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
        url: '../actions/get_dashboard_info.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data);
            var approved = data.approved;
            var pending = data.pending;
            var inactive = data.inactive;
            var declined = data.declined;
            $('#approved').text(approved);
            $('#pending').text(pending);
            $('#inactive').text(inactive);
            $('#declined').text(declined);
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });

    });
  </script>
</html>
