<?php
	require_once '../actions/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="students.scss" />
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
      <div class="main-modal" >
        <div class="modal-terms">
          <strong style="font-size:20px; color:#164863; text-transform:uppercase; font-weight:800;">Terms and Conditions of TESDA PH:</strong>
          <br>
          <strong>Acceptance of Terms:</strong>
          <p>By accessing or using any service provided by TESDA PH, you agree to comply with and be bound by these terms and conditions.</p>
          <br>
          <strong>User Eligibility:</strong>
          <p>Users must meet eligibility criteria to access specific services. TESDA PH reserves the right to deny access to any user at its discretion.</p>
          <br>
          <strong>Use of Content:</strong>
          <p>All content provided on the TESDA PH website, including but not limited to text, graphics, logos, images, and software, is the property of TESDA PH and is protected by intellectual property laws.</p>
          <br>
          <strong>User Reponsibilities:</strong>
          <p>Users are responsible for maintaining the confidentiality of their accounts and ensuring the accuracy of the information provided. Unauthorized use of TESDA PH services is strictly prohibited.</p>
          <br>
          <strong>Service Modifications:</strong>
          <p>TESDA PH reserves the right to modify or discontinue any service or part of the website without prior notice. TESDA PH shall not be liable for any modification, suspension, or discontinuation of services.</p>
          <br>
          <strong>Privacy Policy:</strong>
          <p>TESDA PH is committed to protecting user privacy. The Privacy Policy outlines the collection, use, and disclosure of personal information. By using TESDA PH services, you agree to the terms of the Privacy Policy.</p>
          <br>
          <strong>Third-Party Links:</strong>
          <p>TESDA PH may include links to third-party websites. These links are provided for convenience only. TESDA PH does not endorse or control the content of third-party websites and is not responsible for their content or activities.</p>
          <br>
          <strong>Limitation of Liability:</strong>
          <p>TESDA PH shall not be liable for any direct, indirect, incidental, special, or consequential damages arising from the use of its services or inability to access them.</p>
          <br>
          <strong>Governing Law:</strong>
          <p>These terms and conditions are governed by the laws of the Philippines. Any disputes arising from or in connection with these terms shall be subject to the exclusive jurisdiction of the courts in the Philippines.</p>
          <br>
          <strong>Changes to Terms:</strong>
          <p>TESDA PH reserves the right to update or modify these terms and conditions at any time. Users are responsible for reviewing the terms periodically.</p>
          <br>
          <input type="checkbox">
          <span>By using TESDA PH services, you acknowledge that you have read, understood, and agree to abide by these terms and conditions. If you have any questions or concerns, please contact TESDA PH for clarification.</span>
          <br><br>
          <button onclick="closeModal()">Confirm</button>
        </div>
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
            <li class="active">
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
              <a href="">Home</a>
            </li>
            <li>
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
          </div>
        </div>
        <div class="student-background" data-aos="fade-up" data-aos-duration="3000">
          <div class="student-child">
            <div class="student-information" >
              <div class="goodmorning">
                <div>
                  <strong>Welcome Back Scholar</strong>
                  <p>Checkout Some New Program that TESDA will Provide</p>
                  <button>See More</button>
                </div>
              </div>
              <div class="Announcement">
                <div>
                  <strong>Announcement</strong>
                  <p>
                    There are many variations of passages of Lorem Ipsum
                    available, but the majority have suffered alteration in some
                    form, by injected humour, or randomised words which don't
                    look even slightly believable. If you are going to use a
                    passage of Lorem Ipsum, you need to be sure there isn't
                    anything embarrassing hidden in the middle of text. All the
                    Lorem Ipsum generators on the Internet tend to repeat
                    predefined chunks as necessary, making this the first true
                    generator on the Internet. It uses a dictionary of over 200
                    Latin words, combined with a handful of model sentence
                    structures, to generate Lorem Ipsum which looks reasonable.
                    The generated Lorem Ipsum is therefore always free from
                    repetition, injected humour, or non-characteristic words
                    etc.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Progress -->
        <div
          class="progress-container"
          data-aos="fade-up"
          data-aos-duration="600"
        >
          <div class="progress-child">
            <div class="line"></div>
            <div class="circle-container">
              <div class="circle active-process" id="submitted">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.625 1.5H9a3.75 3.75 0 013.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 013.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 01-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875zM9.75 17.25a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-.75zm2.25-3a.75.75 0 01.75.75v3a.75.75 0 01-1.5 0v-3a.75.75 0 01.75-.75zm3.75-1.5a.75.75 0 00-1.5 0V18a.75.75 0 001.5 0v-5.25z"
                    clip-rule="evenodd"
                  />
                  <path
                    d="M14.25 5.25a5.23 5.23 0 00-1.279-3.434 9.768 9.768 0 016.963 6.963A5.23 5.23 0 0016.5 7.5h-1.875a.375.375 0 01-.375-.375V5.25z"
                  />
                </svg>
              </div>
              <p>Submission Forms</p>
            </div>
            <div class="circle-container">
              <div class="circle" id="process">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"
                  />
                </svg>
              </div>
              <p>Process by Admin</p>
            </div>
            <div class="circle-container">
              <div class="circle" id="approve">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <p>Approved Scholar</p>
            </div>
          </div>
        </div>
        <!-- upload application and calendar -->
        <div class="upload-calendar-container">
          <div class="upload-container">
            <div class="upload-container-child" data-aos="fade-up" data-aos-duration="600">
              <div class="upload-title">
                <strong>Additional Information</strong>
                <p>
                  Please fill up the following field to process your application
                </p>
                <button onclick="showModal()">Terms and Condition</button>
              </div>
              <form action="" id="add-frm">
                <div class="gwa-cor-contiainer">
                  <div class="gwa-field">
                    <span>GWA</span>
                    <input
                      type="text"
                      name="gwa"
                      accept="image/png, image/jpeg"
                      placeholder="1.05"
                      required
                    />
                  </div>
                  <div class="cor-field">
                    <span>COR</span>
                    <input
                      class="file"
                      type="file"
                      name="cor"
                      accept="image/png, image/jpeg"
                      placeholder="Profile"
                      required
                    />
                  </div>
                </div>
                <div class="profile-barangay-contiainer">
                  <div class="profile-field">
                    <span>Profile Picture</span>
                    <input
                      class="file"
                      type="file"
                      name="profilepic"
                      accept="image/png, image/jpeg"
                      placeholder="Profile"
                      required
                    />
                  </div>
                  <div class="barangay-field">
                    <span>Barangay Certificate</span>
                    <input
                      class="file"
                      type="file"
                      name="brgycert"
                      accept="image/png, image/jpeg"
                      placeholder="Profile"
                      required
                    />
                  </div>
                </div>
                <div class="Sig-ID-container">
                  <div class="signature-container">
                    <span>Signature</span>
                    <input
                      class="file"
                      type="file"
                      name="signature"
                      accept="image/png, image/jpeg"
                      placeholder="Profile"
                      required
                    />
                  </div>
                  <div class="id-field-container">
                    <span>Identification Card</span>
                    <input
                      class="file"
                      type="file"
                      name="idcard"
                      accept="image/png, image/jpeg"
                      placeholder="Profile"
                      required
                    />
                  </div>
                </div>
                <button class="btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
          <div class="calendar-container-main" data-aos="fade-up" data-aos-duration="1000">
            <div class="calendar">
              <div style="text-align: center; width: 100%;">
                <strong>Calendar</strong>
              </div>
              <div class="month">
                <div class="current-date">
                  <span>November</span>
                </div>
                <div class="icons">
                  <span id="prev" class="material-symbols-rounded">chevron_left</span>
                  <span id="next" class="material-symbols-rounded">chevron_right</span>
                </div>
              </div>
              <div class="calendar-body">
                <ul class="weekdays">
                  <li>Su</li>
                  <li>Mo</li>
                  <li>Tu</li>
                  <li>We</li>
                  <li>Th</li>
                  <li>Fr</li>
                  <li>Sa</li>
                </ul>
                <ul class="days"></ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="student.js"></script>
  <script src="../js/sweetalert2.all.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function() {
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
    $('#add-frm').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        var formData = new FormData(this);
        $.ajax({
            url: '../actions/add_scholar_reqs.php',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            // error: (err) => {
            //     console.log(err);
            //     Swal.fire({
            //         icon: 'error',
            //         title: err,
            //     });
            // },
            success: function(resp) {
              resp = JSON.parse(resp);
                if (resp.status == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: resp.msg,
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: resp.msg,
                    });
                }
            },
        });
    });
});
  </script>
</html>
