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
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }

        .user-details-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .user-details {
            width: 60%;
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

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .editBtn,.backBtn, .deleteBtn {
            background-color: #69a5dd;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .editBtn:hover,.backBtn, .deleteBtn:hover {
            background-color: #7591ee;
        }

        .hidden {
            display: none;
        }

        .submitBtnContainer {
            display: flex;
            justify-content: center;
        }

        .submitBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20%;
            border: 5px solid #ffffff;
            color: #fff;
            border-radius: 30px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #69a5dd;
            transition: all 0.3s linear;
        }

        .submitBtn:hover {
            background-color: #7591ee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="buttons">
            <div class="backBtn" onclick="goBack()">
                <i class="uil uil-navigator"></i>
                <span class="btnText">Back</span>
            </div>
        </div>
        <script>
            function goBack() {
                window.history.back();
            }

        </script>
<form method="post" action="{{ route('complain.actions') }}">
    @csrf

        <div id="user-details-container">
            <div class="user-details">
                <h2>Complain Details</h2>
                <table>
                    <tr>
                        <th>Customer Name:</th>
                        <td id="user-name">{{ $data['customer_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Complain-id:</th>
                        <td>
                            <input type="text" name="complain_id" value="{{ $data['complain_id'] }}" readonly>
                        </td>
                    </tr>

                    <tr>
                        <th>Client-id:</th>
                        <td id="user-age"><?php echo $data['client_id']; ?></td>
                    </tr>
                    <tr>
                        <th>Registration-no:</th>
                        <td id="user-age"><?php echo $data['reg_no']; ?></td>
                    </tr>
                    <tr>
                        <th>Nature of complain:</th>
                        <td id="user-age"><?php echo $data['nature_of_complain']; ?></td>
                    </tr>
                    <tr>
                        <th>Status:</th>
                        <td id="user-age"><?php echo $data['Status']; ?></td>
                    </tr>
                    <tr>
                        <th>Last location:</th>
                        <td id="user-age">
                            <?php
                            if ($data['last_location'] == null) {
                                echo "-";
                            } else {
                                echo $data['last_location'];
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Complain date:</th>
                        <td id="user-age">
                            <?php
                            if ($data['Date'] == null) {
                                echo "-";
                            } else {
                                echo $data['Date'];
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Complain time:</th>
                        <td id="user-age">
                            <?php
                            if ($data['Time'] == null) {
                                echo "-";
                            } else {
                                echo $data['Time'];
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Creation Time / Date:</th>
                        <td id="user-age">{{ $data['created_at']->format('h:i A \o\n l, F jS, Y') }}</td>
                    </tr>
                    <!-- Add more user details here as needed -->
                    @if ($data['Status'] === 'Pending')

                    <tr>
                        <th>Action:</th>
                        <td>
                            <select id="actionSelect" name="actions" onchange="showRemarksField(this.value)" required>
                                <option value="">Select Action</option>
                                <option value="update">Update</option>
                                <option value="resolve">Resolve</option>
                            </select>
                            <div class="error-message" id="actionError">@error('actions') {{ $message }} @enderror</div>
                        </td>
                    </tr>
                    <tr id="remarksRow" class="hidden">
                        <th>Remarks:</th>
                        <td>
                            <input type="text" id="remarks" name="remarks_1" style="width: 100%; height: 30px;" required>
                        </td>
                    </tr>
                    <tr id="resolutionRow" class="hidden">
                        <th>Options:</th>
                        <td>
                            <select id="resolution" name="options">
                                <option value="redo" style="font-size: 16px;">Redo Require</option>
                                <option value="others" style="font-size: 16px;">Others</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <!-- Submit Button Container -->
                <div
                class="submit-container">
                    <button class="submitBtn">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    @endif
                </div>
            </div>
        </div>
        </form>
    </div>
    <script>
        function showRemarksField(action) {
            const remarksRow = document.getElementById("remarksRow");
            const resolutionRow = document.getElementById("resolutionRow");
            const submitBtnContainer = document.getElementById("submitBtnContainer");
            const actionSelect = document.getElementById("actionSelect");
            const actionError = document.getElementById("actionError");

            if (action === 'resolve') {
                remarksRow.classList.remove("hidden");
                resolutionRow.classList.add("hidden");
                submitBtnContainer.style.display = 'flex';
            } else if (action === 'update') {
                remarksRow.classList.remove("hidden");
                resolutionRow.classList.remove("hidden");
                submitBtnContainer.style.display = 'flex';
            } else {
                remarksRow.classList.add("hidden");
                resolutionRow.classList.add("hidden");
                submitBtnContainer.style.display = 'none';
            }

            if (actionSelect.value !== "") {
                actionError.style.display = 'none';
            }
        }

        function submitForm() {
            const actionSelect = document.getElementById("actionSelect");
            const actionError = document.getElementById("actionError");

            if (actionSelect.value === "") {
                actionError.style.display = 'block';
                return;
            } else {
                actionError.style.display = 'none';
                // Add your form submission logic here

            }
        }
    </script>

</body>
</html>
