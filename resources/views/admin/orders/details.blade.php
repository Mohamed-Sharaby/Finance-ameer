<!-- Small modal -->
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-bs-toggle="modal"
        data-bs-target="#item{{$order->id}}"> Details
</button>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true" id="item{{$order->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0"><span class="text-danger">{{$order->id}}</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Receiver</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">First Name</th>
                            <td>{{$order->s_first_name}}</td>
                            <td>{{$order->r_first_name}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Last Name</th>
                            <td>{{$order->s_last_name}}</td>
                            <td>{{$order->r_last_name}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Gender</th>
                            <td>{{$order->s_type == 0 ? 'Male' : 'Female'}}</td>
                            <td>{{$order->r_type == 0 ? 'Male' : 'Female'}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Zip Code</th>
                            <td>{{$order->s_zip}}</td>
                            <td>{{$order->r_zip}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td>{{$order->s_address}}</td>
                            <td>{{$order->r_address}}</td>

                        </tr>
                        <tr>
                            <th scope="row">City</th>
                            <td>{{$order->s_city}}</td>
                            <td>{{$order->r_city}}</td>

                        </tr>
                        <tr>
                            <th scope="row">State</th>
                            <td>{{$order->s_state}}</td>
                            <td>{{$order->r_state}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Date of Birth</th>
                            <td>{{$order->s_dob}}</td>
                            <td>{{$order->r_dob}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{$order->s_email}}</td>
                            <td>{{$order->r_email}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>{{$order->s_phone}}</td>
                            <td>{{$order->r_phone}}</td>

                        </tr>
                        <tr>
                            <th scope="row">Passport</th>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->s_passport}} ">
                                    <img src="{{$order->s_passport}}"
                                         alt="passport_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->r_passport}} ">
                                    <img src="{{$order->r_passport}}"
                                         alt="passport_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Emirates ID</th>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->s_eid}} ">
                                    <img src="{{$order->s_eid}}"
                                         alt="id_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->r_eid}} ">
                                    <img src="{{$order->r_eid}}"
                                         alt="id_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Salary Certificate</th>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->s_salary}} ">
                                    <img src="{{$order->s_salary}}"
                                         alt="salary_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>
                            <td>
                                <a data-fancybox="gallery" href="{{$order->r_salary}} ">
                                    <img src="{{$order->r_salary}}"
                                         alt="salary_img" width="50" height="50"
                                         class="img-fluid rounded">
                                </a>
                            </td>

                        </tr>


                        </tbody>
                    </table>


                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

