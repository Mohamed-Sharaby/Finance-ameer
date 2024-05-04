<fieldset>
    <h2 class="font-weight-normal text-7 mb-0"><strong
            class="font-weight-extra-bold">Recipient</strong> Profile</h2>
    <h3 class="fs-subtitle">This is step 2 of 3</h3>
    {{--                        <input type="text" name="r_first_name" placeholder="First Name"/>--}}

    <div class="row-form">
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_first_name" id="applicationLastName"
                   placeholder="Last Name" required>
            <label for="applicationLastName" class="form-label">First Name</label>
        </div>
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_last_name" id="applicationLastName"
                   placeholder="Last Name" required>
            <label for="applicationLastName" class="form-label">Last Name</label>
        </div>
    </div>


    <div class="row-form">
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_address" id="applicationAddress"
                   placeholder="Address" required>
            <label for="applicationAddress" class="form-label">Address</label>
        </div>
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_zip" id="applicationAddress"
                   placeholder="Zip" required>
            <label for="applicationAddress" class="form-label">Zip</label>
        </div>
    </div>

    <div class="row-form">
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_city" id="applicationAddress2"
                   placeholder="City" required>
            <label for="applicationAddress2" class="form-label">City</label>
        </div>
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_state" id="applicationAddress2"
                   placeholder="State" required>
            <label for="applicationAddress2" class="form-label">State</label>
        </div>
    </div>


    <div class="row-form">
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_dob" id="applicationBirthDate"
                   placeholder="Birth Date" required>
            <label for="applicationBirthDate" class="form-label">Birth Date</label>
        </div>
        <div class="col-1-of-2 form-radio">
            <input type="radio" class="form-input-radio" name="r_type" id="form-male" value="0">
            <label for="form-male" class="form-radio-label">Male</label>
            <input type="radio" class="form-input-radio" name="r_type" id="form-female"
                   value="1">
            <label for="form-female" class="form-radio-label">Female</label>
            <span>Gender</span>
        </div>
    </div>


    <div class="row-form">
        <div class="col-1-of-2">
            <input type="email" class="form-input" name="r_email" id="applicationEmail"
                   placeholder="Email" required>
            <label for="applicationEmail" class="form-label">Email</label>
        </div>
        <div class="col-1-of-2">
            <input type="text" class="form-input" name="r_phone" id="applicationMobilePhone"
                   placeholder="Mobile Phone" required>
            <label for="applicationMobilePhone" class="form-label">Mobile Phone</label>
        </div>
    </div>



    <div class="form-group row">
        <label
            class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Passport</label>
        <div class="col-lg-9">
            <input class="form-control text-3 h-auto py-2" type="file" name="r_passport" value=""
                   required="">
        </div>
    </div>
    <div class="form-group row">
        <label
            class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Emirates
            ID</label>
        <div class="col-lg-9">
            <input class="form-control text-3 h-auto py-2" type="file" name="r_eid" value=""
                   required="">
        </div>
    </div>
    <div class="form-group row">
        <label
            class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Certificate
            Salary</label>
        <div class="col-lg-9">
            <input class="form-control text-3 h-auto py-2" type="file" name="r_salary"
                   value="" required="">
        </div>
    </div>

    <input type="button" name="previous" class="previous action-button"
           value="Personal Info - Step 1"/>
    <input type="button" name="next" class="next action-button" value="Continue to step 3"/>
</fieldset>
