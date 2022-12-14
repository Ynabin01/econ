@extends('layouts.master')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h6>Membership Form</h6>
                </div>
                <div class="col-md-6">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="/memberlist">Member</a></li>
                        <li><span>Membership Form</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="innner_detail">
        <div class="container">
            <div class="form-part">
                <h2>Membership Form</h2>

                <div class="form-inputs">
                    <form class="needs-validation" action="/member/store" method="POST" enctype='multipart/form-data'
                        novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="govRegdDate">Gov. Regd. Date:</label>
                                    <input type="date" name="gov_reg_date" id="govRegdDate" required>
                                 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="ownerName">Owner's Name:</label>
                                    <input type="text" name="owner_name" id="ownerName" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="companyName">Name of the Firm/Company:</label>
                                    <input type="text" name="company_name" id="companyName" req>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-button">
                                    <label>Type of Firm/Company</label>
                                    <ul>
                                        <li>
                                            <input type="radio" name="company_type" /><span>Proprietorship</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="company_type" /><span>Partnership</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="company_type" /><span>Pvt. Ltd.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-button">
                                    <label>Type of Business</label>
                                    <ul>
                                        <li>
                                            <input type="radio" name="business_type" /><span>Export</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="business_type" /><span>Trading</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="business_type" /><span>Manufacture</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="business_type" /><span>Others...</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="check-boxes">
                                    <label>Main Commodities</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="main_commodities<" /> <span>Silver</span>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="main_commodities" /> <span>Pashmina</span>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="main_commodities" /> <span>Carpet</span>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="main_commodities" /> <span>Garment</span>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="main_commodities" /> <span>Handicraft</span>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="main_commodities" /> <span>Ohers</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="govRegdDate">Countries; Exported to:</label>
                                    <input type="text" name="exported_to" id="country">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="address">Office Address:</label>
                                    <input type="text" name="office_address" id="address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-input">
                                    <label for="postalAddress">Postal Address:</label>
                                    <input type="text" name="postal_address	" id="postalAddress">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="havesub">Communication Details</label>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="telephone">Telephone No.</label>
                                    <input type="number" name="telephone_no" id="telephone">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="faxNo">Fax No.</label>
                                    <input type="number" name="fax_no" id="faxNo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="website">Website:</label>
                                    <input type="text" name="website" id="website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="havesub">Firm/Company Registration Details</label>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="regdNo">Regd. No.</label>
                                    <input type="number" name="regd_no" id="regdNo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="date">Date:</label>
                                    <input type="date" name="date" id="date">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="department">Department/Office:</label>
                                    <input type="text" name="department" id="department">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-input">
                                    <label for="panNo">PAN No.</label>
                                    <input type="number" name="pan_no" id="panNo">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="radio-button">
                                    <label>Capital</label>
                                    <ul>
                                        <li>
                                            <input type="radio" name="capital" /><span>Fixed</span>
                                        </li>
                                        <li>
                                            <input type="radio" name="capital" /><span>Running</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="havesub">Associate Member of</label>
                            </div>
                            <div class="col-md-6">
                                <div class="text-input">
                                    <label for="national">Natinal</label>
                                    <input type="text" name="national" id="national">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-input">
                                    <label for="international">International</label>
                                    <input type="text" name="international" id="international">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="check-boxes">
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="accept_policies<" /> <span>I/We hereby certify
                                                that above
                                                declared infromation are true. I/We agree to obey the rule, regulation and
                                                constiution of the council.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit">Submmit</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
