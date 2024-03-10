
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippines Provinces</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   
</head>
<body>
<div class="container">
        <nav>
            <div class="logo">MQD<b>.</b></div>
            <ul class="navItems">
            <li><a href="index.php">Home</a></li>
                <li><a href="about_me.php">About me</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="fed.php">Feedback</a></li>
                <?php
                session_start();
              // Check if user is logged in (assumes user_id is set in the session)
              if (isset($_SESSION['user_id'])) {
                  echo '<li><a href="logout.php">Logout</a></li>';
              }
              ?>
                
            </ul>
            <div class="links">
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fmarvindomigpe%3Figsh%3DMXFtNjFjeHhvcHZidA%253D%253D%26utm_source%3Dqr%26fbclid%3DIwAR1aOibw_wUjmYjzs1QbZ7NZ6Y7faaDgOiGnBoFRb4AQGx43NFRlRbuLWN0&h=AT0anCAD3kOrIsgCg-8gRlMIhu3_Tv4P7sO2bhJGair5tHkKMgqO1nJSo8CNHig3Lf_hqN4P1JHaKxbSH4131k1YU8Zf-SqbTl-ZhN9jTdHc88WkSsLPJ8c4n62lNHX313G4dQ"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/marvin.dumigpe.7/"><i class="fab fa-facebook"></i></a>
            </div>
        </nav>
    <div class="container">
        <div class="text-center">
            <h2>Registration Form</h2>
            <button onclick="showAlert()">Click Me</button>
        </div>

        <!-- Select Country Dropdown -->
        <div class="form-group">
            <label for="countryDropdown">Select Country:</label>
            <select id="countryDropdown" disabled class="form-control">
                <option value="PH" selected>Philippines</option>
            </select>
        </div>

        <!-- Region Dropdown -->
        <div class="form-group">
            <label for="regionDropdown">Select Region:</label>
            <select id="regionDropdown" class="form-control"></select>
        </div>

        <!-- Province Dropdown -->
        <div class="form-group">
            <label for="provinceDropdown">Select Province:</label>
            <select id="provinceDropdown" class="form-control"></select>
        </div>

        <!-- Municipality Dropdown -->
        <div class="form-group">
            <label for="municipalityDropdown">Select Municipality:</label>
            <select id="municipalityDropdown" class="form-control"></select>
        </div>

        <!-- Barangay Dropdown -->
        <div class="form-group">
            <label for="barangayDropdown">Select Barangay:</label>
            <select id="barangayDropdown" class="form-control"></select>
        </div>

        <!-- Lot/Block, Street, Phase/Subdivision Inputs -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="lotBlockInput">Lot/Block:</label>
                <input type="text" id="lotBlockInput" name="lotBlockInput" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="streetInput">Street:</label>
                <input type="text" id="streetInput" name="streetInput" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="phaseInput">Phase/Subdivision:</label>
                <input type="text" id="phaseInput" name="phaseInput" class="form-control">
            </div>
        </div>

        <!-- Last Name, First Name, Email Inputs -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="lastNameInput">Last Name:</label>
                <input type="text" id="lastNameInput" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="firstNameInput">First Name:</label>
                <input type="text" id="firstNameInput" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="emailInput">Email:</label>
                <input type="email" id="emailInput" class="form-control">
            </div>
        </div>

        <!-- Contact Number Input -->
        <div class="form-group">
            <label for="contactLabel">Contact:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">+63</span>
                </div>
                <input type="text" id="contactInput" maxlength="10" name="contactInput" class="form-control">
            </div>
        </div>

        <!-- Button to Show Selected Data -->
        <button onclick="showSelectedData()" class="btn btn-primary">Show Selected Data</button>

        <!-- Password and Repeat Password Inputs -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="passwordInput">Password:</label>
                <input type="password" id="passwordInput" name="passwordInput" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="repeatPasswordInput">Repeat Password:</label>
                <input type="password" id="repeatPasswordInput" name="repeatPasswordInput" class="form-control">
            </div>
        </div>

        <!-- Register Button -->
        <button onclick="registerUser()" class="btn btn-success">Register</button>
        <div class="text-center mt-3">
            <p>Already have an account? <a href="login.php">Click here to login</a></p>
        </div>
    </div>


    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Your existing JavaScript code here -->
    <script type="text/javascript" src="phil.min.js"></script>
    <script type="text/javascript">

        // Retrieve regions, provinces, and barangays
        const regions = Philippines.regions;
            const provinces = Philippines.provinces;
            const municipalities = Philippines.city_mun;
            const barangays = Philippines.barangays;

            // Populate the region drop-down list
            const regionDropdown = document.getElementById('regionDropdown');
            regions.forEach(region => {
                const option = document.createElement('option');
                option.value = region.reg_code;
                option.textContent = region.name;
                regionDropdown.appendChild(option);
            });

            // Function to populate the province drop-down based on the selected region
            function populateProvinces(regionCode) {
                const provinceDropdown = document.getElementById('provinceDropdown');
                provinceDropdown.innerHTML = ''; // Clear previous options

                const provincesInRegion = Philippines.getProvincesByRegion(regionCode);
                provincesInRegion.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.prov_code;
                    option.textContent = province.name;
                    provinceDropdown.appendChild(option);
                });
            }

            // Function to populate the municipality drop-down based on the selected province
            function populateMunicipalities(provinceCode) {
                const municipalityDropdown = document.getElementById('municipalityDropdown');
                municipalityDropdown.innerHTML = ''; // Clear previous options

                const municipalitiesInProvince = Philippines.getCityMunByProvince(provinceCode);
                municipalitiesInProvince.forEach(municipality => {
                    const option = document.createElement('option');
                    option.value = municipality.mun_code;
                    option.textContent = municipality.name;
                    municipalityDropdown.appendChild(option);
                });
            }

            // Function to populate the barangay drop-down based on the selected municipality
            function populateBarangays(municipalityCode) {
                const barangayDropdown = document.getElementById('barangayDropdown');
                barangayDropdown.innerHTML = ''; // Clear previous options

                const barangaysInMunicipality = Philippines.getBarangayByMun(municipalityCode);
                barangaysInMunicipality.forEach(barangay => {
                    const option = document.createElement('option');
                    option.value = barangay.brgy_code;
                    option.textContent = barangay.name;
                    barangayDropdown.appendChild(option);
                });
            }

            // Event listener for region dropdown change
            regionDropdown.addEventListener('change', function() {
                const selectedRegion = regionDropdown.value;
                populateProvinces(selectedRegion);
            });

            // Event listener for province dropdown change
            const provinceDropdown = document.getElementById('provinceDropdown');
            provinceDropdown.addEventListener('change', function() {
                const selectedProvince = provinceDropdown.value;
                populateMunicipalities(selectedProvince);
            });

            // Event listener for municipality dropdown change
            const municipalityDropdown = document.getElementById('municipalityDropdown');
            municipalityDropdown.addEventListener('change', function() {
                const selectedMunicipality = municipalityDropdown.value;
                populateBarangays(selectedMunicipality);
            });

                    // Event listener for contact number input
            


            // Function to show selected data in a small window
            function showSelectedData() {
                const selectedRegion = regionDropdown.options[regionDropdown.selectedIndex].text;
                const selectedProvince = provinceDropdown.options[provinceDropdown.selectedIndex].text;
                const selectedMunicipality = municipalityDropdown.options[municipalityDropdown.selectedIndex].text;
                const selectedBarangay = barangayDropdown.options[barangayDropdown.selectedIndex].text;
                const selectedLastName = document.getElementById('lastNameInput').value;
                const selectedFirstName = document.getElementById('firstNameInput').value;
                const selectedEmail = document.getElementById('emailInput').value;

                // Display the data in an alert
                alert(`Selected Data:
Region: ${selectedRegion}
Province: ${selectedProvince}
Municipality: ${selectedMunicipality}
Barangay: ${selectedBarangay}
Last Name: ${selectedLastName}
First Name: ${selectedFirstName}
Email: ${selectedEmail}`);
            }

            function showAlert() {
              alert("You need to register first to give feedback, or look down if you already have an account and click 'Click here to login'.");
            }
            // Function to register user
            function registerUser() {
        const selectedCountry = document.getElementById('countryDropdown').value;
        const selectedRegion = regionDropdown.options[regionDropdown.selectedIndex].text;
        const selectedProvince = provinceDropdown.options[provinceDropdown.selectedIndex].text;
        const selectedMunicipality = municipalityDropdown.options[municipalityDropdown.selectedIndex].text;
        const selectedBarangay = barangayDropdown.options[barangayDropdown.selectedIndex].text;
        
        const selectedLot = document.getElementById('lotBlockInput').value;
        const selectedStreet = document.getElementById('streetInput').value;
        const selectedPhsSubd = document.getElementById('phaseInput').value;


        const selectedLastName = document.getElementById('lastNameInput').value;
        const selectedFirstName = document.getElementById('firstNameInput').value;
        const selectedEmail = document.getElementById('emailInput').value;
         
        const selectedContact = document.getElementById('contactInput').value;


        const selectedPassword = document.getElementById('passwordInput').value;
        const repeatPassword = document.getElementById('repeatPasswordInput').value;

        // Check for password match
        if (selectedPassword !== repeatPassword) {
            alert("Passwords do not match!");
            return;
        }

        // Send the data to register.php using AJAX
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert(xhr.responseText); // Display the response from the server
            }
        };
        xhr.open("POST", "register.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send(`country=${selectedCountry}&region=${selectedRegion}&province=${selectedProvince}&municipality=${selectedMunicipality}&barangay=${selectedBarangay}&lotBlock=${selectedLot}&street=${selectedStreet}&phase=${selectedPhsSubd}&lastName=${selectedLastName}&firstName=${selectedFirstName}&email=${selectedEmail}&contact=${selectedContact}&password=${selectedPassword}`);
    }
        // Your existing JavaScript code here
        // ...
    </script>
</body>
</html>
