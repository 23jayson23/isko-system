<?php
	session_start();
	require_once '../actions/db_connect.php';
	if (!isset($_SESSION['login_userid'])){
		header('location: log-in/login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply Scholar</title>
    <link rel="stylesheet" href="applyscholar.scss" />
    <link
      rel="shortcut icon"
      href="assets/image/tesda-center-logo.png"
      type="image/x-icon"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>

  <body>
    <main>
      <div class="requirements">
        <div class="isko-requirements">
          <div class="image-container">
            <img src="assets/image/logo-title.png" width="150px" />
            <strong>Scholarship requirements</strong>
          </div>
          <br /><br />
          <span>
            <div class="svg-container">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="info">
              <b>Barangay Indigency Certificate(photocopy)</b>
            </div>
          </span>
          <span>
            <div class="svg-container">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="info">
              <b>
                Any ID (preferably with signature) with 3 Specimen Signature (2
                copies)
              </b>
            </div>
          </span>
          <span>
            <div class="svg-container">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="info">
              <b>
                Practicing Covid-19 Preventies Measures in the Workplace
                Certificate
              </b>
              <p class="indent">
                Get your certificate in TESDA Online Program (e-tesda.gov.ph)
              </p>
            </div>
          </span>
          <span>
            <div class="svg-container">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="info">
              <b>Performing Solid Waste Management in the Workplace </b>
              <p class="indent">
                get your certificate in TESDA Online Program (e-tesda.gov.ph)
              </p>
            </div>
          </span>
          <span>
            <div class="svg-container">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="w-6 h-6"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z"
                  clip-rule="evenodd"
                />
              </svg>
            </div>
            <div class="info">
              <b>BSRS Account</b>
              <p class="indent">
                <a href="#">https://bsrs.tesda.gov.ph/login</a>
              </p>
            </div>
          </span>
        </div>
        <div class="footer-info">
          <p>© 2023 TesdaGuiguinto</p>
          <a href="#">contactcenter@tesda.gov.ph</a>
        </div>
      </div>
      <div class="form-container">
        <div class="form-title">
          <img src="assets/image/form.png" width="80px" />
          <strong>Application Form<p>Please Input your Information</p></strong>
        </div>
        <form action="" id="scholar-frm">
          <p
            style="
              font-family: 'BIG JOHN';
              font-size: 30px;
              color: #164863;
              border-bottom: solid 3px #fbaf03;
              padding-bottom: 20px;
            "
          >
            Personal Information
          </p>
          <div class="LRN-information">
            <p>ID / School / LRN Number</p>
            <input type="text" placeholder="102072893621" accept="Number" name="lrn" />
          </div>
          <div class="FML-information">
            <div>
              <p>First Name</p>
              <input type="text" placeholder="Juan" name="fname" />
            </div>
            <div>
              <p>Middle Name</p>
              <input type="text" placeholder="Mercado" name="fname" />
            </div>
            <div>
              <p>Last Name</p>
              <input type="text" placeholder="Dela Cruz" name="fname" />
            </div>
          </div>
          <!-- address -->
          <div class="ADDRESS-information">
            <div>
              <p>Province</p>
              <input type="text" placeholder="Bulacan" name="fname" />
            </div>
            <div>
              <p>Municipality</p>
              <input type="text" placeholder="Malolos" name="fname" />
            </div>
            <div>
              <p>Barangay</p>
              <input type="text" placeholder="PinagBiyakan" name="fname" />
            </div>
          </div>
          <!-- email and password -->
          <div class="EP-information">
            <div>
              <p>Email</p>
              <input type="text" placeholder="JuanDelaCruz@gmail.com" name="fname" />
            </div>
            <div>
              <p>Phone Number</p>
              <input
                type="text"
                placeholder="0924-490-9999"
                style="margin-top: 5px"
                name="fname" 
              />
            </div>
          </div>
          <!-- gender -->
          <div class="GC-information">
            <div>
              <label style="width: 75px">Gender :</label>
              <div class="radio-group">
                <input
                  class="radio-input"
                  name="gender"
                  id="radio1"
                  type="radio"
                  value="Male"
                />
                <label class="radio-label" for="radio1">
                  <span class="radio-inner-circle"></span>
                  Male
                </label>
                <input
                  class="radio-input"
                  name="gender"
                  id="radio2"
                  type="radio"
                  value="Female"
                />
                <label class="radio-label" for="radio2">
                  <span class="radio-inner-circle"></span>
                  Female
                </label>
              </div>
            </div>
            <div>
              <label>Civil Status : </label>
              <select>
                <option name="civil" value="Single">Single</option>
                <option name="civil" value="Married">Married</option>
                <option name="civil" value="Widowed">Widowed</option>
                <option name="civil" value="Divorced">Divorced</option>
              </select>
            </div>
          </div>
          <!-- semester and Program -->
          <div class="SP-information">
            <!-- <div>
              <label>Semester : </label>
              <select>
                <option>1st Semester</option>
                <option>2nd Semester</option>
                <option>3rd Semester</option>
                <option>4th Semester</option>
              </select>
            </div> -->
            <div>
              <label>Program  </label>
              <select>
                <option name="program" value="1">Universal Access to Quality Tertiary Education(UAQTEA)</option>
                <option name="program" value="2">Training for Work Scholarship Program(TWSP)</option>
                <option name="program" value="3">Private Education Student Financial Assistance(PESFA)</option>
                <option name="program" value="4">Special Training for Employment Program</option>
                <option name="program" value="5">Tesda Online Program</option>
                <option name="program" value="6">Rice Extension Service Program</option>
                <option name="program" value="7">Tulong Trabaho Law</option>
              </select>
            </div>
          </div>
          <div class="SP-information">
            <!-- <div>
              <label>Semester  </label>
              <select>
                <option>1st Semester</option>
                <option>2nd Semester</option>
                <option>3rd Semester</option>
                <option>4th Semester</option>
              </select>
            </div> -->
            <!-- <div>
              <label>Program : </label>
              <select>
                <option>1st Semester</option>
                <option>2nd Semester</option>
                <option>3rd Semester</option>
                <option>4th Semester</option>
              </select>
            </div> -->
          </div>
          <!-- button container -->
          <div class="btn-container">
            <div>
                <button> Cancel</button>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
