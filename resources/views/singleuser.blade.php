<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        #user-details-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .user-details-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .user-details {
            flex-basis: calc(50% - 20px);
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 10px;
            font-size: 14px;
        }

        .user-details h2 {
            text-align: center;
            background-color: #6aaec0;
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .user-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-details th, .user-details td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: left;
        }

        .user-details th {
            background-color: #f2f2f2;
        }

        .user-details tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        form .buttons button, .backBtn {
            margin-right: 14px;
        }
        .container form button, .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            max-width: 150px;
            width: 100%;
            border: 2px solid #ffffff;
            /* outline: 4px solid #f0e8e8; Use your desired outline color and style */
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #69a5dd;
            transition: all 0.3s linear;
            cursor: pointer;
        }
        .backBtn:hover {
            background-color: #7591ee; /* Change to your desired light red color */
        }
        .status-symbol {
        text-align: center;
        font-size: 24px;
        background-color: #69a5dd; /* Background color for the status symbol */
        color: #fff; /* Text color for the status symbol */
        padding: 10px 20px; /* Adjust padding to your preference */
        border-radius: 10px; /* Rounded corners for the status symbol */
        position: relative;
        margin-top: 20px; /* Add some top margin for spacing */
    }

    .status-symbol::before {
        /* content: "STATUS"; Text for the label */
        background-color: #578bbf; /* Background color for "STATUS" label */
        color: #fff; /* Text color for "STATUS" label */
        border-radius: 5px; /* Rounded corners for the label */
        padding: 5px 10px; /* Adjust padding to your preference */
        position: absolute;
        top: -20px; /* Position it just above the status symbol */
        left: 50%;
        transform: translateX(-50%);
    }
    .buttons .backBtn, .buttons #updateButton {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            max-width: 150px;
            width: auto;
            border: 2px solid #ffffff;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #69a5dd;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .buttons .backBtn:hover, .buttons #updateButton:hover {
            background-color: #7591ee;
        }




    </style>

</head>
<body>
    <div class="container">
        <div class="status-symbol">
            @if ($status)
            STATUS: {{ $status->tracker_status }}
        @else
            STATUS: inactive
        @endif


        </div>


        <div class="status-dropdown">
            <form id="statusForm" action="/create_soldout" method="POST">
                @csrf
            <label for="statusSelect">Status:</label>
            <select class="form-control" name="status" id="statusSelect">
                <option value="inactive">inactive</option>
                <option value="N/R(no report)">N/R(no report)</option>
                <option value="soldout">soldout</option>
            </select>
            <input type="hidden" id="user-id" name="cleint_id" value="{{ $data->id }}">

            <button type="submit" id="submitStatusButton">Submit Status</button>

        </div>

    <div class="buttons">

        <div class="backBtn" onclick="goBack()">
            <i class="uil uil-navigator"></i>
            <span class="btnText">Back</span>
        </div>
        <div id="updateButton" onclick="updateUserDetails()">
            <i class="uil uil-navigator"></i>
            <span class="btnText">Update</span>
        </div>

    </div>
    <script>
        function goBack() {
            window.history.back();
        }
        function updateUserDetails() {
            // Add your update logic here.
            window.location.href='{{ route("edit",["id"=> $data->id]) }}';

        }

    </script>

    <div id="user-details-container">
        <div class="user-details">
            <h2>User Details</h2>
            <table>
                <tr>
                    <th>Customer Name</th>
                    <td>{{ $data['customer_name'] }}</td>
                    <input type="hidden" name="old_customer" value="{{ $data['customer_name'] }}">
                </tr>

                <tr>
                    <th>Client Id</th>
                    <td>{{ $data['id'] }}</td>
                    <input type="hidden" name="client_id" value="{{ $data['id'] }}">
                </tr>

                <tr>
                    <th>Father's name</th>
                    <td>{{ $data['father_name'] }}</td>
                    <input type="hidden" name="old_father" value="{{ $data['father_name'] }}">
                </tr>
                <tr>
                    <th>Telephone no</th>
                    <td>{{ $data['telephone_residence'] }}</td>
                    <input type="hidden" name="old_telephone" value="{{ $data['telephone_residence'] }}">
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $data['address'] }}</td>
                    <input type="hidden" name="old_address" value="{{ $data['address'] }}">
                </tr>
                <tr>
                    <th>Mobile#01</th>
                    <td>{{ $data['mobileno_1'] }}</td>
                    <input type="hidden" name="old_mobileno_1" value="{{ $data['mobileno_1'] }}">
                </tr>
                <tr>
                    <th>Mobile#02</th>
                    <td>{{ $data['mobileno_2'??'-'] }}</td>
                    <input type="hidden" name="old_mobileno_2 " value="{{ $data['mobileno_2'] }}">
                </tr>
                <tr>
                    <th>Mobile#03</th>
                    <td>{{ $data['mobileno_3'] }}</td>
                    <input type="hidden" name="old_mobileno_3 " value="{{ $data['mobileno_3'] }}">
                </tr>
                <tr>
                    <th>Mobile#04</th>
                    <td>{{ $data['mobileno_4'] }}</td>
                    <input type="hidden" name="old_mobileno_4" value="{{ $data['mobileno_4'] }}">
                </tr>
                <tr>
                    <th>NTN </th>
                    <td>{{ $data['ntn'] }}</td>
                    <input type="hidden" name="old_ntn" value="{{ $data['ntn'] }}">
                </tr>
                <tr>
                    <th>CNIC#</th>
                    <td>{{ $data['cnic'] }}</td>
                    <input type="hidden" name="old_cnic" value="{{ $data['cnic'] }}">
                </tr>
                <tr>
                    <th>Primary User</th>
                    <td>{{ $data['primaryuser_name'] }}</td>
                    <input type="hidden" name="old_primaryname" value="{{ $data['primaryuser_name'] }}">
                </tr>
                <tr>
                    <th>Primary Con #01</th>
                    <td>{{ $data['primaryuser_con1'] }}</td>
                    <input type="hidden" name="old_primary_con1" value="{{ $data['primaryuser_con1'] }}">
                </tr>
                <tr>
                    <th>Primary Con #02</th>
                    <td>{{ $data['primaryuser_con2'] }}</td>
                    <input type="hidden" name="old_primary_con2" value="{{ $data['primaryuser_con2'] }}">
                </tr>
                <tr>
                    <th>Primary CNIC</th>
                    <td>{{ $data['primaryuser_cnic'] }}</td>
                    <input type="hidden" name="old_primary_cnic" value="{{ $data['primaryuser_cnic'] }}">
                </tr>
                <tr>
                    <th>Secondary User</th>
                    <td>{{ $data['seconadryuser_name'] }}</td>
                    <input type="hidden" name="old_seconadry_name" value="{{ $data['seconadryuser_name'] }}">
                </tr>

                <tr>
                    <th>Secondary Con # 01</th>
                    <td>{{ $data['secondaryuser_con1'] }}</td>
                    <input type="hidden" name="secondaryuser_con1" value="{{ $data['secondaryuser_con1'] }}">
                </tr>

                <tr>
                    <th>Secondary Con # 02</th>
                    <td>{{ $data['secondaryuser_con2'] }}</td>
                    <input type="hidden" name="secondaryuser_con2" value="{{ $data['secondaryuser_con2'] }}">
                </tr>
                <tr>
                    <th>Relation with customer</th>
                    <td>{{ $data['relationship'] }}</td>
                    <input type="hidden" name="old_relationship" value="{{ $data['relationship'] }}">
                </tr>
                <!-- Add more user details here as needed -->
            </table>
        </div>

        <div class="user-details">
            <h2>Vehicle Details</h2>
            <table>
                <tr>
                    <th>Reg #</th>
                    <td>{{ $data['registeration_no'] }}</td>
                    <input type="hidden" name="old_reg_no" value="{{ $data['registeration_no'] }}">
                </tr>
                <tr>
                    <th>Chasis #</th>
                    <td>{{ $data['chasis_no'] }}</td>
                    <input type="hidden" name="old_chasis_no" value="{{ $data['chasis_no'] }}">
                </tr>
                <tr>
                    <th>Engine #</th>
                    <td>{{ $data['engine_no'] }}</td>
                    <input type="hidden" name="old_engine_no" value="{{ $data['engine_no'] }}">
                </tr>
                <tr>
                    <th>Engine type</th>
                    <td>{{ $data['engine_type'] }}</td>
                    <input type="hidden" name="engine_type" value="{{ $data['engine_type'] }}">
                </tr>
                <tr>
                    <th>Make</th>
                    <td>{{ $data['make'] }}</td>
                    <input type="hidden" name="old_make" value="{{ $data['make'] }}">
                </tr>
                <tr>
                    <th>CC #</th>
                    <td>{{ $data['CC'] }}</td>
                    <input type="hidden" name="CC" value="{{ $data['CC'] }}">
                </tr>
                <tr>
                    <th> Model #</th>
                    <td>{{ $data['model'] }}</td>
                    <input type="hidden" name="old_model" value="{{ $data['model'] }}">
                </tr>
                <tr>
                    <th>Year #</th>
                    <td>{{ $data['year'] }}</td>
                    <input type="hidden" name="year" value="{{ $data['year'] }}">
                </tr>
                <th>Transmission</th>
                <td>{{ $data['transmission'] }}</td>
                <input type="hidden" name="transmission" value="{{ $data['transmission'] }}">
            </tr>
            <tr>
            <th>Color</th>
            <td>{{ $data['color'] }}</td>
            <input type="hidden" name="old_color" value="{{ $data['color'] }}">
        </tr>
                <!-- Add more user details here as needed -->
            </table>
        </div>

        <!-- Additional user details table at the bottom -->
        <div class="user-details">
            <h2>Payment Details</h2>
            <table>
                <tr>
                    <th>Insurance partner</th>
                    <td>{{ $data['insurance_partner'] }}</td>
                    <input type="hidden" name="insurance_partner" value="{{ $data['insurance_partner'] }}">
                </tr>
                <tr>
                    <th>VAS</th>
                    <td>{{ $data['vas'] }}</td>
                    <input type="hidden" name="vas" value="{{ $data['vas'] }}">
                </tr>
                <tr>
                    <th>Vas-options</th>
                    <td>{{ $data['vas_options'] }}</td>
                    <input type="hidden" name="vas_options" value="{{ $data['vas_options'] }}">
                </tr>
                <!-- Add more user details here as needed -->
            </table>
        </div>

        <!-- Additional user details table right after the bottom one -->
        <div class="user-details">
            <h2>Product Details</h2>
            <table>
                <tr>
                    <th>Segement</th>
                    <td>{{ $data['segment'] }}</td>
                    <input type="hidden" name="segment" value="{{ $data['segment'] }}">
                </tr>
                <tr>
                    <th>Demo duration</th>
                    <td>{{ $data['demo_duration'] }}</td>
                    <input type="hidden" name="demo_duration" value="{{ $data['demo_duration'] }}">
                </tr>
                <tr>
                    <th>Tracker charges</th>
                    <td>{{ $data['tracker_charges'] }}</td>
                    <input type="hidden" name="old_tracker_charges" value="{{ $data['tracker_charges'] }}">
                </tr>
                <tr>
                    <th>Date-of-installation</th>
                    <td>{{ $data['date_of_installation'] }}</td>
                    <input type="hidden" name="old_date" value="{{ $data['date_of_installation'] }}">
                </tr>
                <tr>
                    <th>Internal commission</th>
                    <td>{{ $data['int_comission'] }}</td>
                    <input type="hidden" name="int_comission" value="{{ $data['int_comission'] }}">
                </tr>
                <tr>
                    <th>External commision</th>
                    <td>{{ $data['ext_comission'] }}</td>
                    <input type="hidden" name="ext_comission" value="{{ $data['ext_comission'] }}">
                </tr>
                <tr>
                    <th>Discount </th>
                    <td>{{ $data['discount'] }}</td>
                    <input type="hidden" name="old_discount" value="{{ $data['discount'] }}">
                </tr>
                <!-- Add more user details here as needed -->
            </table>
        </div>

        <!-- One more user details table -->
        <div class="user-details">
            <h2>Other Details</h2>
            <table>
                <tr>
                    <th>Compaign Point</th>
                    <td>{{ $data['campaign_point'] }}</td>
                    <input type="hidden" name="campaign_point" value="{{ $data['campaign_point'] }}">
                </tr>
                <tr>
                    <th>Dealership</th>
                    <td>{{ $data['dealership'] }}</td>
                    <input type="hidden" name="dealership" value="{{ $data['dealership'] }}">
                </tr>

                <tr>
                    <th>Dealer name</th>
                    <td>{{ $data['dealer_name'] }}</td>
                    <input type="hidden" name="dealer_name" value="{{ $data['dealer_name'] }}">
                </tr>
                <tr>
                    <th>Sales person</th>
                    <td>{{ $data['sales_person'] }}</td>
                    <input type="hidden" name="sales_person" value="{{ $data['sales_person'] }}">
                </tr>
                <tr>
                    <th>Installation location</th>
                    <td>{{ $data['installation_loc'] }}</td>
                    <input type="hidden" name="old_install_loc" value="{{ $data['installation_loc'] }}">
                </tr>
                <tr>
                    <th>Contact person #</th>
                    <td>{{ $data['conatct_person'] }}</td>
                    <input type="hidden" name="old_conatct_person" value="{{ $data['conatct_person'] }}">
                </tr>
                <tr>
                    <th>Remarks #</th>
                    <td>{{ $data['remarks'] }}</td>
                    <input type="hidden" name="old_remarks" value="{{ $data['remarks'] }}">
                </tr>
            </div>
                <!-- Add more user details here as needed -->
            </table>
        </div>
        <div class="user-details">
            <h2>Technical Details</h2>
            <table>
                @foreach ($technical as $technicalDetail)
                <tr>
                    <th>Device-Id #</th>
                    <td>{{ $technicalDetail['device_id'] }}</td>
                    <input type="hidden" name="old_device" value="{{ $technicalDetail['device_id'] }}">
                </tr>
                <tr>
                    <th>Vendor</th>
                    <td>{{ $technicalDetail['vendor_name'] }}</td>
                    <input type="hidden" name="vendor_name" value="{{ $technicalDetail['vendor_name'] }}">
                </tr>
                <tr>
                    <th>Imei-no #</th>
                    <td>{{ $technicalDetail['IMEI_no'] }}</td>
                    <input type="hidden" name="old_imei" value="{{ $technicalDetail['IMEI_no'] }}">
                </tr>
                <tr>
                    <th>Gsm-no #</th>
                    <td>{{ $technicalDetail['Gsm_no'] }}</td>
                    <input type="hidden" name="old_gsm" value="{{ $technicalDetail['Gsm_no'] }}">
                </tr>
                <tr>
                    <th>Tavl-Id #</th>
                    <td>{{ $technicalDetail['Tavl_mang_id'] }}</td>
                    <input type="hidden" name="Tavl_mang_id" value="{{ $technicalDetail['Tavl_mang_id'] }}">
                </tr>
                <tr>

                    <th>Technicain</th>
                    <td>{{ $technicalDetail['technician_name'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['technician_name'] }}">

                </tr>
                <tr>

                    <th>Sim #</th>
                    <td>{{ $technicalDetail['sim'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['sim'] }}">

                </tr>
                <tr>

                    <th>Gps</th>
                    <td>{{ $technicalDetail['Gps_check'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['Gps_check'] }}">

                </tr>
                <tr>

                    <th>Mobilizer</th>
                    <td>{{ $technicalDetail['mobilizer'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['mobilizer'] }}">

                </tr>
                <tr>

                    <th>Operational status</th>
                    <td>{{ $technicalDetail['operational_status'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['operational_status'] }}">

                </tr>
                <tr>

                    <th>Webtrack-id #</th>
                    <td>{{ $technicalDetail['webtrack_id'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['webtrack_id'] }}">

                </tr>
                <tr>

                    <th>Webtrack-pass #</th>
                    <td>{{ $technicalDetail['webtrack_pass'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['webtrack_pass'] }}">

                </tr>
                <tr>

                    <th>Ignition Alerts</th>
                    <td>{{ $technicalDetail['ignition_alerts'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['ignition_alerts'] }}">

                </tr>
                <tr>

                    <th>Overspeed Alerts</th>
                    <td>{{ $technicalDetail['overspeed_alerts'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['overspeed_alerts'] }}">

                </tr>
                <tr>

                    <th>Geo fence alerts</th>
                    <td>{{ $technicalDetail['geo_fence_alerts'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['geo_fence_alerts'] }}">

                </tr>
                <tr>

                    <th>Additional contact</th>
                    <td>{{ $technicalDetail['additional_contact'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['additional_contact'] }}">

                </tr>
                <tr>

                    <th>Contact #01</th>
                    <td>{{ $technicalDetail['contact_1'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['contact_1'] }}">

                </tr>
                <tr>

                    <th>Contact #02</th>
                    <td>{{ $technicalDetail['contact_2'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['contact_2'] }}">

                </tr>
                <tr>

                    <th>Contact #03</th>
                    <td>{{ $technicalDetail['contact_3'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['contact_3'] }}">

                </tr>
                <tr>

                    <th>Tracker status</th>
                    <td>{{ $technicalDetail['tracker_status'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $technicalDetail['tracker_status'] }}">

                </tr>

                @endforeach

                <!-- Add more user details here as needed -->
            </table>
        </div>
        <div class="user-details">
            <h2>Security Details</h2>
            <table>
                @foreach ($security as $securitydetails)
                <tr>

                    <th>Customer Email</th>
                    <td>{{ $securitydetails['customer_email'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['customer_email'] }}">

                </tr>
                <tr>

                    <th>Emergency pasword</th>
                    <td>{{ $securitydetails['emergency_pass'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['emergency_pass'] }}">

                </tr>
                <tr>

                    <th>Emergency person</th>
                    <td>{{ $securitydetails['emergency_person'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['emergency_person'] }}">

                </tr>
                <tr>

                    <th>Security Question</th>
                    <td>{{ $securitydetails['security_ques'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['security_ques'] }}">

                </tr>
                <tr>

                    <th>Security Ans</th>
                    <td>{{ $securitydetails['security_ans'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['security_ans'] }}">

                </tr>
                <tr>

                    <th>Password</th>
                    <td>{{ $securitydetails['password'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['password'] }}">

                </tr>
                <tr>

                    <th>Emerrency con #</th>
                    <td>{{ $securitydetails['emergency_person_contact'] }}</td>
                        <input type="hidden"  id="user-name" value="{{ $securitydetails['emergency_person_contact'] }}">

                </tr>


                @endforeach
                </form>
                <!-- Add more user details here as needed -->
            </table>
        </div>


    </div>
</body>
</html>
