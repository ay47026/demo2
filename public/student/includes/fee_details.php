<div class="tab-pane fade" id="v-pills-step5" role="tabpanel" aria-labelledby="v-pills-step5-tab">


                           <div class="row mt-2 pb-2 p-0 m-0 w-100 d-flex justify-content-center mb-2 mt-2 align-items-center">
                        <span style=" color:gray; font-weight:660; font-size: 17px;border-bottom:1px solid black;"> Details of Fee Payment :-</span></div>
                    <div class="row mt-2 pb-2 p-0 m-0 w-100 ">
                        <span style=" color:black; font-weight:660; font-size: 15px;padding:1px;margin-left:2%;"> Mode of fee deposition </span></div>

                    <div class="accordion mb-5" id="accordionExample">
                        <!--                        mode1== bank drft-->
                        <div class="card" id="card1">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Bank Draft
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form id="bank_draft" method="post">
                        <!-- ERROR div -->
                          <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                              <div id="errors_for_bank_draft_details" class="error_in_form"></div>
                         </div>
                       
                        <!-- ERROR div  -----ENDS----- -->

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="AmountDepositedInRs" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited" value="<?php echo h($bank_draft_details->AmountDepositedInRs); ?>">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="SerialNumberOfDD" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD" value="<?php echo h($bank_draft_details->SerialNumberOfDD); ?>">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="NameOfIssuerBank" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank" value="<?php echo h($bank_draft_details->NameOfIssuerBank); ?>">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="Date" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy" value="<?php echo h($bank_draft_details->Date); ?>">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save student_full_detail_btn" id="mode1-fee-save" data-src='bank_draft'>Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--     mode2== sbi collect-->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        SBI-E Collect
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form id="SBIeCollect" method="post">
                                        <!-- ERROR div -->
                                          <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                              <div id="errors_for_bank_draft_details" class="error_in_form"></div>
                         </div>
                                       
                                        <!-- ERROR div  -----ENDS----- -->

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save student_full_detail_btn" id="mode1-fee-save" data-src='SBIeCollect'>Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--    mode 3==  Online Transiction-->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Online Transaction
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form id="online_transaction" method="post">
                                        <!-- ERROR div -->
                                                 <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                                        <div id="errors_for_online_transaction_details" class="error_in_form"></div>
                         </div>
                                        <!-- ERROR div  -----ENDS----- -->

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button type="button" class="btn  mode1-fee-save student_full_detail_btn" id="mode1-fee-save" data-src='online_transaction'>Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--    mode 3==  Any Other-->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Any Other
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form id="any_other" method="post">
                                        <!-- ERROR div -->
                                                         <div class="row p-0 m-0 d-flex justify-content-center align-items-center">
                                       <div id="errors_for_any_other_details" class="error_in_form"></div>
                         </div>
                                       
                                        <!-- ERROR div  -----ENDS----- -->

                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <!--                                            1-->
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Amount Deposited in Rs </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Amount-Deposited" class="form-control m1-Amount-Deposited " placeholder="Amount Deposited">
                                                    <div class="val-error" id="m1-Amount-Deposited-error">Please fill this field.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        2-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class=""> Serial Number of DD </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="number" name="" required="required" id="m1-Serial-Number-of-DD" class="form-control m1-Serial-Number-of-DD " placeholder="Serial Number of DD">
                                                    <div class="val-error" id="m1-Serial-Number-of-DD-error">Please fill this field</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--                                        3-->
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Name of Issuer Bank </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="text" name="" required="required" id="m1-Name-of-Issuer-Bank" class="form-control m1-Name-of-Issuer-Bank " placeholder="Name of Issuer Bank ">
                                                    <div class="val-error" id="m1-Name-of-Issuer-Bank-error">Please write Allotted RollNo.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row   p-2 m-0 mt-2 mb-2 w-100">
                                            <div class="input-group p-0 m-0" id="form-field">
                                                <div class="col-md-4 p-0 m-0 input-group-prepend "> <span class="">Date </span></div>
                                                <div class="col-md-7 p-0 m-0">
                                                    <input type="date" name="" required="required" id="m1-fee-date" class="form-control m1-fee-date " placeholder="mm/dd/yyyy">
                                                    <div class="val-error " id="m1-fee-date-error">Please filled this field</div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="row mt-4 mb-2 p-2 m-0 w-100">
                                            <div class="input-group d-flex flex-row justify-content-center" id="form-field">

                                                <button class="btn mode1-fee-save  student_full_detail_btn" id="mode1-fee-save" data-src="any_other">Save</button>
                                                <button type="button" class="btn mode1-fee-save-next" id="mode1-fee-save-next">Save and Next</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>