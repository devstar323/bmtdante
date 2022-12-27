@extends('layouts.master')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
    <div class="container position-relative">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
            <h2>Please create Docusign.</h2>
            <p>With the information you provide on the paperwork you hand them to fill out...</p>
        </div>
        </div>
    </div>
    </div>
    <nav>
    <div class="container">
        <div class="col-lg-10 col-md-10">
            <ol>
            <li><a href="{{route('aspect.home')}}">Home</a></li>
            <li>Candidates</li>
            <li>Docusign</li>
            </ol>
        </div>
        <div class="col-lg-2 col-md-2">
            <span>Select Location: </span>
            <select class="form-control" id="sel-docusign" onchange="sel_docusign()">
                <option value="massachusetts" selected>Massachusetts</option>    
                <option value="rhode">Rhode Island</option>
            </select>
        </div>
    </div>
    </nav>
</div>

<?php 

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>
<section>
    <div class="container" id="jar">
        <form id="send_hire">
            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <div class="col-lg-2 mb-3">
                        <label for="date">Date: </label>
                        <input type="date" name="doc_date" class="form-control doc_user_date" value="<?php echo $today; ?>" id="doc_user_date">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="name">Name: </label>
                        <input type="text" name="doc_name" class="form-control doc_user_name" placeholder="Please input Name..." id="doc_user_name">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="address">Address: </label>
                        <input type="text" name="doc_address" class="form-control doc_user_address" placeholder="Please input Address..." id="doc_user_address">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="city">City: </label>
                        <input type="text" name="doc_city" class="form-control doc_user_city" placeholder="Please input City name..." id="doc_user_city">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="state">State: </label>
                        <input type="text" name="doc_state" class="form-control doc_user_state" placeholder="Please input State name..." id="doc_user_state">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="code">Zip Code: </label>
                        <input type="text" name="doc_code" class="form-control doc_user_zip" placeholder="Please input Code..." id="doc_user_zip">
                    </div>
                </div>

                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;">Re: Conditional Offer of Employment</h3>
                    <div class="col-lg-12 mb-3">
                        <span>Dear <input type="text" class="doc_user_name_clone" readonly>:</span>          
                        <p>
                        We are pleased to offer you employment with Blue Mile Transport LLC (the “Company”). This
                        offer of employment is conditioned upon your satisfactory completion of certain requirements, as
                        more fully explained in this letter.
                        </p>
                        <p>
                        Your position will be Delivery Associate, reporting to Leticia Monteiro. Your start date and tentative
                        schedule will be communicated to you separately. Be advised that we work 361 days of the year,
                        so your schedule may include weekends and holidays. Also, we cannot guarantee a fixed
                        schedule, as all schedules are subject to variation based upon the needs of the Company.
                        </p>
                        <p>
                        This is a non-exempt position. Your hourly rate will be <label id="change_1">$21.00</label> to start, subject to appropriate tax
                        withholdings and deductions, payable in accordance with the Company’s normal payroll cycle.
                        Your overtime rate for hours worked over 40 hours in a workweek, or as otherwise required by
                        applicable law, will be a minimum of <label id="change_2">$31.50</label>, unless higher on account of a pay raise or receipt of
                        an additional payment that must be included in the regular rate, subject to appropriate tax
                        withholdings and deductions, payable in accordance with the Company’s normal payroll cycle.
                        Currently, the Company processes payroll on a bi-weekly basis with paydays on alternate Fridays.
                        You will be paid by direct deposit or printed check.
                        </p>
                        <p>
                        During your employment, you will be eligible for employee benefits consistent with the Company’s
                        practices and applicable law, and in accordance with the terms of the applicable benefit plans as
                        they currently exist and subject to any future modifications in the Company’s discretion. The
                        Company’s benefit offerings and employee contribution to pay for benefit plans are determined
                        annually.
                        </p>
                        <p>
                        During your employment, you will be eligible to accrue Paid Time Off in accordance with Company
                        policy. All employee benefits are subject to periodic Company review.            
                        </p>
                        <u>
                        YOUR EMPLOYMENT WILL BE AT-WILL, MEANING THAT YOU OR THE COMPANY MAY
                        TERMINATE THE EMPLOYMENT RELATIONSHIP AT ANY TIME, WITH OR WITHOUT
                        CAUSE, AND WITH OR WITHOUT NOTICE.
                        </u>                                                                        
                        <p>
                            This conditional offer of employment is contingent upon:
                        </p >
                        <div class="container">
                            <p>1. Verification of your right to work in the United States, as shown by your completion
                            of the I-9 form upon hire and your submission of acceptable documentation (as
                            noted on the I-9 form) verifying your identity and work authorization. For your
                            convenience, a copy of the I-9 Form's List of Acceptable Documents is enclosed
                            for your review. Please bring proof of your employment eligibility with you on your
                            first day of work.</p>
                            <p>2. Verification that you are at least 21 years of age and have a valid driver’s license of the type required to operate the applicable motor vehicle.</p>
                            <p>3. Satisfactory completion of a background check.</p>
                            <p>4. Satisfactory completion of a motor vehicle/driving record check.</p>
                            <p>5. Satisfactory completion of a five-panel drug test.
                        </div>
                        <p>
                        You will receive a letter or email from the Company’s vendor to begin the background check
                        process.</p>
                        <p>
                        This conditional offer is also contingent upon your execution of the following agreements, attached
                        to this letter, which must be signed and returned to the Company before commencing
                        employment:</p>
                        <div class="container">
                            <p>1. Confidentiality and Non-Disclosure Agreement</p>
                            <p>2. Authorization and Consent for Shared Information</p>
                        </div>
                        <p>
                        Additionally, you will be required to sign a Mutual Agreement to Individually Arbitrate Disputes
                        during the onboarding process when you begin employment.</p>
                        <p>This offer will be withdrawn if any of the above conditions are not satisfied. Please do not resign
                        from your current job until you have confirmation from the Company that these conditions have
                        been satisfied.</p>
                        <p>This letter is merely a summary of the principal terms of our employment offer and is not a contract
                        of employment for any definite period of time. You acknowledge that this conditional offer of
                        employment letter, along with the final form of any enclosed documents, represents the scope of
                        specifically stated herein are, or will be, binding upon the Company.</p>
                        <p>This offer will be held open for five (5) business days. Upon expiration of that period, it will be
                        deemed to be withdrawn.</p>
                        <p>We are excited at the prospect of you joining our team. If you are in agreement with the above
                        employment offer details, please sign where indicated below. If you have any questions, please
                        do not hesitate to call me.</p>
                        <div class="row">
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3">
                                Sincerely, <br><br>Leticia Monteiro<br>Managing Member<br>On behalf of Blue Mile Transport LLC<br>
                            </div>
                        </div>
                        <p>
                        I accept the offer of employment outlined above.
                        </p>
                        <div class="row mb-5">
                            <div class="form-group col-lg-3">
                                <label>Signature: </label>
                                <input type="text" class="form-control" placeholder="Please input Signature...">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Date: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Printed Name: </label>
                                <input type="text" class="form-control doc_user_name_clone" placeholder="Please input Printed Name..." readonly>
                            </div>
                        </div>
                        <p>Attachments:</p>
                        <div class="container">
                            <p>
                            I-9 Form List of Acceptable Documents (Exhibit 1)<br>
                            Confidentiality and Non-Disclosure Agreement (Exhibit 2)<br>
                            Authorization and Consent for Shared Information (Exhibit 3)<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 class="text_center">LISTS OF ACCEPTABLE DOCUMENTS All documents must be UNEXPIRED</h3>
                    <p class="text_center">Employees may present one selection from List A or a combination of one selection from List B and one selection from List C.</p>
                
                    <div class="col-lg-12 mb-5 div_border">
                        <div class="col-lg-4 mb-5 mt-5">
                            <div class="bottom_border text_center"><b>LIST A</b><br><b>Documents that Establish Both Identity and Employment Authorization</b></div>
                            <div class="bottom_border"><p><b>1. </b>U.S. Passport or U.S. Passport Card</p></div>
                            <div class="bottom_border"><p><b>2. </b>Permanent Resident Card or Alien Registration Receipt Card (Form I-551)</p></div>
                            <div class="bottom_border"><p><b>3. </b>Foreign passport that contains a temporary I-551 stamp or temporary I-551 printed notation on a machinereadable immigrant visa</p></div>
                            <div class="bottom_border"><p><b>4. </b>Employment Authorization Document that contains a photograph (Form I-766)</p></div>
                            <div class="bottom_border">
                                <p><b>5. </b>For a nonimmigrant alien authorized to work for a specific employer because of his or her status:</p>
                                <p><b>a. </b>Foreign passport; and</p>
                                <p><b>b. </b>Form I-94 or Form I-94A that has the following:</p>
                                <p>(1) The same name as the passport; and</p>
                                <p>(2) An endorsement of the alien's nonimmigrant status as long as that period of endorsement has not yet expired and the proposed employment is not in conflict with any restrictions or limitations identified on the form</p>
                            </div>
                            <div>
                                <p><b>6. </b>Passport from the Federated States of Micronesia (FSM) or the Republic of the Marshall Islands (RMI) with Form I-94 or Form I-94A indicating nonimmigrant admission under the Compact of Free Association Between the United States and the FSM or RMI</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 mt-5">
                            <div class="bottom_border text_center">
                                <b>LIST B</b><br><b>Documents that Establish Identity</b>
                            </div>
                            <div class="bottom_border">
                                <p><b>1. </b>Driver's license or ID card issued by a
                                State or outlying possession of the
                                United States provided it contains a
                                photograph or information such as
                                name, date of birth, gender, height, eye
                                color, and address</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>2. </b>ID card issued by federal, state or local
                                government agencies or entities,
                                provided it contains a photograph or
                                information such as name, date of birth,
                                gender, height, eye color, and address</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>3. </b>School ID card with a photograph</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>4. </b>Voter's registration card</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>5. </b>U.S. Military card or draft record</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>6. </b>Military dependent's ID card</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>7. </b>U.S. Coast Guard Merchant Mariner
                                Card</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>8. </b>Native American tribal document</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>9. </b>Driver's license issued by a Canadian
                                government authority</p>
                            </div>
                            <div class="bottom_border text_center">
                                <b>For persons under age 18 who are
                                unable to present a document
                                listed above:</b>
                            </div>
                            <div class="bottom_border">
                                <p><b>10. </b>School record or report card</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>11. </b>Clinic, doctor, or hospital record</p>
                            </div>
                            <div>
                                <p><b>12. </b>Military dependent's ID card</p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 mt-5">
                            <div class="bottom_border text_center">
                                <b>LIST C</b><br><b>Documents that Establish
                                Employment Authorization</b>
                            </div>
                            <div class="bottom_border">
                                <p><b>1. </b>A Social Security Account Number
                                card, unless the card includes one of
                                the following restrictions:</p>
                                <p>(1) NOT VALID FOR EMPLOYMENT</p>
                                <p>(2) VALID FOR WORK ONLY WITH
                                INS AUTHORIZATION</p>
                                <p>(3) VALID FOR WORK ONLY WITH
                                DHS AUTHORIZATION</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>2. </b>Certification of report of birth issued
                                by the Department of State (Forms
                                DS-1350, FS-545, FS-240)</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>3. </b>Original or certified copy of birth
                                certificate issued by a State,
                                county, municipal authority, or
                                territory of the United States
                                bearing an official seal</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>4. </b>Native American tribal document</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>5. </b>U.S. Citizen ID Card (Form I-197)</p>
                            </div>
                            <div class="bottom_border">
                                <p><b>6. </b>Identification Card for Use of Resident Citizen in the United States (Form I-179)</p>
                            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                            <div>
                                <p><b>7. </b>Employment authorization document issued by the Department of Homeland Security</p>
                            </div>
                        </div>
                    </div>
                    <p class="text_center"><b>Examples of many of these documents appear in the Handbook for Employers (M-274).</b></p>
                    <p class="text_center"><b>Refer to the instructions for more information about acceptable receipts.</b></p>
                </div>
            
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;">DISCLOSURE REGARDING CONSUMER AND/OR INVESTIGATIVE REPORT</h3> 
                    <div class="col-lg-12">
                        <p>Blue Mile Transport LLC (“Company”) may obtain information about you for
                        employment purposes from a third party consumer reporting agency. Thus, you may
                        be the subject of a “consumer report” and/or an “investigative consumer report”
                        which may include information about your character, general reputation, personal
                        characteristics, and/or mode of living, and which can involve personal interviews
                        with sources such as your neighbors, friends, supervisors, or associates. These
                        reports may contain information regarding your credit history, criminal history,
                        social security verification, motor vehicle records (“driving records”),
                        verification of your education or employment history, or other background checks.
                        Further, you understand that information may be requested from various Federal,
                        State, County and other agencies that maintain records concerning your past
                        activities relating to your driving, criminal, civil, education, credit, and
                        other experiences. Credit history will only be requested where such information
                        is substantially related to the duties and responsibilities of the position for
                        which you are applying.</p>
                        <p>You have the right, upon written request made within a reasonable period of time
                        after receipt of this notice, to request whether a consumer report has been
                        conducted about you, disclosure of the nature and scope of any investigative
                        consumer report, and to request a copy of your report. Please be advised that the
                        nature and scope of the most common form of investigative consumer report
                        obtained with regard to applicants for employment is an investigation into your
                        employment and/or education history. The scope of this notice and authorization
                        is all-encompassing, however, allowing the Company to obtain consumer reports and
                        investigative consumer reports now and throughout the course of your employment
                        to the extent permitted by law, unless you otherwise revoke your consent by
                        providing written notification to Company. As a result, you should carefully
                        consider whether to exercise your right to request disclosure of the nature and
                        scope of any investigative consumer report.</p>
                        <p>The consumer and/or investigative consumer report(s) will be obtained from:</p>
                        <p>Accurate Background, Inc., 7515 Irvine Center Drive, Irvine, CA 92618, (800) 216-8024.</p>
                        <p>Accurate Background’s information and privacy policy can be found at <a href="https://www.accuratebackground.com">www.accuratebackground.com</a>.</p>
                        <div class="mb-5 div_border">
                            <div class="bottom_border">California applicants or employees only: Please check the appropriate box below
                            if you would like to receive a copy of your investigative consumer report or
                            consumer credit report at no charge.</div>
                            <div class="bottom_border">Minnesota and Oklahoma applicants or employees only: Please check the appropriate
                            box below if you would like to receive a copy of your consumer report free of
                            charge.</div>
                            <div class="bottom_border">New York applicants or employees only: You have the right to inspect and receive
                            a copy of any investigative consumer report requested by Company by contacting
                            the consumer reporting agency identified above directly. You may also contact the
                            Company to request the name, address and telephone number of the nearest unit of
                            the consumer reporting agency designated to handle inquiries, which the Company
                            shall provide within 5 days. Upon request, you will be informed whether or not a
                            consumer report was requested by Company, and if such report was requested,
                            informed of the name and address of the consumer reporting agency that furnished
                            the report.</div>
                            <div class="bottom_border">Oregon applicants or employees only: Information describing your rights under
                            federal and Oregon law regarding consumer identity theft protection, the storage
                            and disposal of your credit information, and remedies available should you
                            suspect or find that the Company has not maintained secured records is available
                            to you upon request.</div>
                            <div>Washington State applicants or employees only: You also have the right to request
                            from the consumer reporting agency a written summary of your rights and remedies
                            under the Washington Fair Credit Reporting Act.</div>
                        </div>
                        <p>For California, Oklahoma, or Minnesota employees and applicants: Please check the
                        appropriate box to indicate if you would like to receive a copy of your consumer
                        report free of charge.</p>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <input type="radio" id="free_copy_yes" name="report_free_copy" value="free_copy_yes" checked> Yes
                        <input type="radio" id="free_copy_no" name="report_free_copy" value="free_copy_no"> No
                    </div>
                    <div class="row mb-5 col-lg-12">
                        <div class="container">
                            <div class="form-group col-lg-3">
                                <label>Signature: </label>
                                <input type="text" class="form-control" placeholder="Please input Signature...">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Date: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;">ACKNOWLEDGMENT AND AUTHORIZATION FOR BACKGROUND CHECK</h3>
                    <div class="col-lg-12 mb-3">
                        <p>I acknowledge receipt of the DISCLOSURE REGARDING CONSUMER AND/OR INVESTIGATIVE
                        REPORT and A SUMMARY OF YOUR RIGHTS UNDER THE FAIR CREDIT REPORTING ACT and
                        certify that I have read and understand both of those documents. I hereby
                        authorize the obtaining of “consumer reports” and/or “investigative consumer
                        reports” by the Company, Blue Mile Transport LLC, at any time after receipt of
                        this authorization and throughout my employment, if applicable. To this end, I
                        hereby authorize, without reservation, any law enforcement agency, administrator,
                        local, state or federal agency, institution, school or university (public or
                        private), information service bureau, employer, or insurance company to furnish
                        any and all background information requested by Accurate Background, Inc., 7515
                        Irvine Center Drive, Irvine, CA 92618, (800) 216-8024, another outside
                        organization acting on behalf of the Company, and/or the Company itself.</p>
                        <p>I understand that by signing my name below, that I am signing the Authorization
                        form directing the background check as described above, and I certify that:</p>
                        <p> • I have received the Disclosure Regarding Consumer and/or Investigative
                        Report, have read and received the Summary of Your Rights, and if a
                        California resident/applicant, the A Summary of Your Rights Under the
                        Provisions of California Civil Code §1786.22.</p>
                        <p> • I understand that my signature now and throughout this process will be
                        binding. Additionally, notices, documents, and communications may be
                        provided electronically and will meet the requirements set forth under
                        Federal and/or State law, as permitted by law. I agree that a facsimile
                        (“fax”), electronic or printout of this authorization may be accepted with
                        the same authority as the original.</p>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label>Print Name: </label>
                                <input type="text" class="form-control doc_user_name_clone" placeholder="Please input print name..." readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label for="other_name">Other Names Known By: </label>
                                <input type="text" name="other_name" class="form-control" placeholder="Please input..." id="doc_other_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6">
                                <label for="social_num">Social Security Number: </label>
                                <input type="text" name="social_num" class="form-control doc_user_SSN" placeholder="Please input SSN..." id="doc_SSN">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="birth">Date of Birth: </label>
                                <input type="date" name="birth" class="form-control" value="<?php echo $today; ?>" id="doc_birth">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-6">
                                <label for="license_num">Driver’s License Number: </label>
                                <input type="text" name="license_num" class="form-control" placeholder="Please input driver's license number..." id="doc_DLN">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label>Current Address: </label>
                                <input type="text" class="form-control doc_user_address_clone" placeholder="Please input current address..." readonly>
                            </div>
                            <div class="form-group col-lg-3">
                                <label>City: </label>
                                <input type="text" class="form-control doc_user_city_clone" placeholder="Please input city name..." readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label>State: </label>
                                <input type="text" class="form-control doc_user_state_clone" placeholder="Please input state..." readonly>
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Zip: </label>
                                <input type="text" class="form-control doc_user_zip_clone" placeholder="Please input zip..." readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-3 mb-3">
                                <label>Applicant Signature: </label>
                                <input type="text" class="form-control" placeholder="Please input applicant signature...">
                            </div>
                            <div class="form-group col-lg-3 mb-3">
                                <label>Date: </label>
                                <input type="text" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                        </div>
                        <p>Prospective Employer<b>: Blue Mile Transport LLC</b></p>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12">
                    <h3 style="text-align:center;">Drug Free Workplace Acknowledgement and Consent</h3>
                    <div class="mb-3">
                        <p>I acknowledge that I have received and understand Company’s Drug Free Workplace Policy (the “Policy”).</p>
                        <p>I agree to comply with Company’s Policy on drugs and alcohol and understand that failure to comply is grounds for disciplinary action, up to and including termination.</p>
                        <p>I voluntarily consent to submit to drug and/or alcohol testing as outlined in Company’s Policy.</p>
                        <p>I consent to provide specimens at the assigned collection site(s) and further consent to have urine,
                        breath, saliva/oral fluid, and/or hair specimens tested for drugs, alcohol and/or controlled substances
                        (and their metabolites) at a certified laboratory in accordance with applicable state law. I understand
                        that submission to such testing is a condition of my employment and that immediate disciplinary
                        action, up to and including discharge, will result from a violation of the Policy. I understand that I
                        have the right to refuse drug and/or alcohol testing, however, any such refusal is a violation of the
                        Policy and shall result in immediate termination of employment.</p>
                        <p>I further consent to and hereby authorize the release of such test results to the Company’s personnel
                        who have a business need to know the results (as permitted under the ADA and applicable state
                        law), and to use such results for the purpose of the Company’s drug and alcohol testing program. In
                        order to provide information to the Company, I agree to execute authorizations, release forms, or
                        other documentation as may be required under federal, state, or local law, including but not limited
                        to, the Substance Abuse regulations codified at 42 C.F.R. Part 2 and the Privacy Regulations
                        promulgated pursuant to the Health Insurance Portability and Accountability Act of 1996.</p>
                        <p><b>I understand and agree that nothing contained in this Acknowledgement and Consent or in the
                        Company’s Drug Free Workplace Policy shall be considered an employment contract for a
                        definite term or otherwise alter the at will relationship.</b></p>
                        <p>I have freely and voluntarily signed this Acknowledgment and Consent with full
                        knowledge of its significance. I acknowledge this Acknowledgment and Consent
                        shall have and be in full force and effect unless and until I revoke this
                        Acknowledgment and Consent in writing.</p>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label>Print Employee Name: </label>
                                <input type="text" class="form-control doc_user_name_clone" placeholder="Please input employee name..." readonly>
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Date: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-lg-3">
                                <label>Employee Signature: </label>
                                <input type="text" class="form-control" placeholder="Please input employee signature...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;text-decoration-line:underline;">Summary of Your Rights Under the Fair Credit Reporting Act</h3>
                    <div class="mb-3">
                        <p>The federal Fair Credit Reporting Act (FCRA) promotes the accuracy, fairness, and
                        privacy of information in the files of consumer reporting agencies. There are many
                        types of consumer reporting agencies, including credit bureaus and specialty
                        agencies (such as agencies that sell information about check writing histories,
                        medical records, and rental history records). Here is a summary of your major rights
                        under the FCRA. <b>For more information, including information about additional
                        rights, go to <a href="https://www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> or write to: Consumer
                        Financial Protection Bureau, 1700 G Street N.W., Washington, DC 20552.</b></p>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You must be told if information in your file has been used against you.</b></h5>
                        <div class="container">
                            <p>Anyone who uses a credit report or another type of consumer report to deny
                            your application for credit, insurance, or employment – or to take another
                            adverse action against you – must tell you, and must give you the name,
                            address, and phone number of the agency that provided the information. </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You have the right to know what is in your file.</b></h5>
                        <div class="container">
                            <p>You may request and obtain all
                            the information about you in the files of a consumer reporting agency (your “file
                            disclosure”). You will be required to provide proper identification, which may
                            include your Social Security number. In many cases, the disclosure will be
                            free. You are entitled to a free file disclosure if:</p>
                            <p>a person has taken adverse action against you because of information in
                            your credit report;</p>
                            <p>you are the victim of identity theft and place a fraud alert in your file;</p>
                            <p>your file contains inaccurate information as a result of fraud;</p>
                            <p>you are on public assistance;</p>
                            <p>you are unemployed but expect to apply for employment within 60 days. In
                            addition, all consumers are entitled to one free disclosure every 12
                            months upon request from each nationwide credit bureau and from
                            nationwide specialty consumer reporting agencies. See
                            <a href="https://www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> for additional information. </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You have the right to ask for a credit score.</b></h5>
                        <div class="container">
                            <p>Credit scores are numerical
                            summaries of your credit- worthiness based on information from credit
                            bureaus. You may request a credit score from consumer reporting agencies
                            that create scores or distribute scores used in residential real property loans,
                            but you will have to pay for it. In some mortgage transactions, you will receive credit score information for free from the mortgage lender. </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You have the right to dispute incomplete or inaccurate information.</b></h5>
                        <div class="container">
                            <p>If you
                            identify information in your file that is incomplete or inaccurate, and report it to
                            the consumer reporting agency, the agency must investigate unless your
                            dispute is frivolous. See <a href="https://www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore</a> for an
                            explanation of dispute procedures.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• Consumer reporting agencies must correct or delete inaccurate, incomplete,
                        or unverifiable information.</b></h5>
                        <div class="container">
                            <p>Inaccurate, incomplete or unverifiable
                            information must be removed or corrected, usually within 30 days. However, a
                            consumer reporting agency may continue to report information it has verified
                            as accurate.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• Consumer reporting agencies may not report outdated negative information.</b></h5>
                        <div class="container">
                            <p>In most cases, a consumer reporting agency may not report negative
                            information that is more than seven years old, or bankruptcies that are more
                            than 10 years old.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• Access to your file is limited.</b></h5>
                        <div class="container">
                            <p>A consumer reporting agency may provide
                            information about you only to people with a valid need -- usually to consider an
                            application with a creditor, insurer, employer, landlord, or other business. The
                            FCRA specifies those with a valid need for access.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You must give your consent for reports to be provided to employers.</b></h5>
                        <div class="container">
                            <p>A
                            consumer reporting agency may not give out information about you to your
                            employer, or a potential employer, without your written consent given to the
                            employer. Written consent generally is not required in the trucking industry. For
                            more information, go to <a href="https://www.consumerfinance.gov/learnmore">www.consumerfinance.gov/learnmore.</a></p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You may limit “prescreened” offers of credit and insurance you get based on
                        information in your credit report.</b></h5>
                        <div class="container">
                            <p>Unsolicited “prescreened” offers for credit
                            and insurance must include a toll-free phone number you can call if you
                            choose to remove your name and address from the lists these offers are based
                            on. You may opt out with the nationwide credit bureaus at 1-888-5-OPTOUT
                            (1-888- 567-8688).</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• You may seek damages from violators.</b></h5>
                        <div class="container">
                            <p>If a consumer reporting agency, or, in
                            some cases, a user of consumer reports or a furnisher of information to a
                            consumer reporting agency violates the FCRA, you may be able to sue in state
                            or federal court.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• Identity theft victims and active duty military personnel have additional
                        rights.</b></h5>
                        <div class="container">
                            <p><a href="https://www.consumerfinance.gov/learnmore">For more information, visit www.consumerfinance.gov/learnmore</a>.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5><b>• States may enforce the FCRA, and many states have their own consumer
                        reporting laws.</b></h5>
                        <div class="container">
                            <p><b>reporting laws.</b> In some cases, you may have more rights under state law.
                            For more information, contact your state or local consumer protection agency
                            or your state Attorney General. For information about your federal rights,
                            contact:</p>
                        </div>    
                    </div>
                    <div class="col-lg-12 mb-5">
                        <table>
                            <thead>
                                <tr>
                                <th>TYPE OF BUSINESS:</th>
                                <th>CONTACT:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>
                                    <p>
                                    1.a. Banks, savings associations,
                                    and credit unions with total
                                    assets of over $10 billion and
                                    their affiliates
                                    </p>
                                    <p>
                                    b. Such affiliates that are not
                                    banks, savings associations, or
                                    credit unions also should list, in
                                    addition to the CFPB:
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    a. Consumer Financial Protection Bureau 1700 G. Street N.W. Washington, DC 20552
                                    </p>
                                    <p>
                                    b. Federal Trade Commission: Consumer Response Center - FCRA Washington, DC 20580 (877) 382-4357
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    2. To the extent not included in item 1 above:
                                    </p>
                                    <p>
                                    a. National banks, federal
                                    savings associations, and federal
                                    branches and federal agencies
                                    of foreign banks
                                    </p>
                                    <p>
                                    b. State member banks,
                                    branches and agencies of
                                    foreign banks (other than federal
                                    branches, federal agencies, and
                                    Insured State Branches of
                                    Foreign Banks), commercial
                                    lending companies owned or
                                    controlled by foreign banks, and
                                    organizations operating under
                                    section 25 or 25A of the Federal
                                    Reserve Ac
                                    </p>
                                    <p>
                                    c. Nonmember Insured Banks,
                                    Insured State Branches of
                                    Foreign Banks, and insured state
                                    savings associations
                                    </p>
                                    <p>
                                    d. Federal Credit Unions
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    a. Office of the Comptroller of the Currency Customer Assistance Group 1301
                                    McKinney Street, Suite 3450 Houston, TX 77010-9050
                                    </p>
                                    <p>
                                    b. Federal Reserve Consumer Help Center P.O. Box. 1200 Minneapolis, MN 55480
                                    </p>
                                    <p>
                                    c. FDIC Consumer Response Center 1100 Walnut Street, Box #11 Kansas City, MO 64106
                                    </p>
                                    <p>
                                    d. National Credit Union Administration Office of Consumer Protection (OCP) Division
                                    of Consumer Compliance and Outreach (DCCO) 1775 Duke Street Alexandria, VA
                                    22314
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    3. Air carriers
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Asst. General Counsel for Aviation Enforcement & Proceedings Aviation Consumer
                                    Protection Division Department of Transportation
                                    </p>
                                    <p>
                                    1200 New Jersey Avenue, S.E. Washington, DC 20423
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    4. Creditors Subject to the
                                    Surface Transportation Board
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Office of Proceedings, Surface Transportation Board Department of
                                    Transportation 395 E Street, S.W. Washington, DC 20423
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    5. Creditors Subject to the
                                    Packers and Stockyards Act,
                                    1921
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Nearest Packers and Stockyards Administration area supervisor
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    6. Small Business Investment Companies
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Associate Deputy Administrator for Capital Access United States Small Business
                                    Administration 409 Third Street, S.W., 8th Floor Washington, DC 20549
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    7. Brokers and Dealers
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Securities and Exchange Commission 100 F Street, N.E. Washington, DC 20549
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    8. Federal Land Banks, Federal
                                    Lank Bank Associations, Federal
                                    Intermediate Credit Banks, and
                                    Production Credit Associations
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    Farm Credit Administration 1501 Farm Credit Drive McLean, VA 22102-5090
                                    </p>
                                </td>
                                </tr>
                                <tr>
                                <td>
                                    <p>
                                    9. Retailers, Finance
                                    Companies, and All Other
                                    Creditors Not Listed Above
                                    </p>
                                </td>
                                <td>
                                    <p>
                                    FTC Regional Office for region in which the creditor operates or Federal Trade
                                    Commission: Consumer Response Center – FCRA Washington, DC 20580
                                    </p>
                                    <p>
                                    (877) 382-4357
                                    </p>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;text-decoration-line:underline;">CONFIDENTIALITY AND NON-DISCLOSURE AGREEMENT</h3>
                    <div class="mb-3">
                        <p>As a condition to employment or continued employment with Blue Mile Transport LLC (the
                        “Company”), which you (the “Employee”) acknowledge to be good and valuable consideration for
                        the Employee’s obligations hereunder, the Employee agrees as follows:</p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>1. Confidentiality and Security.</b></h4>
                        <div class="container">
                            <p style="text-decoration-line:underline;"><b>a. Confidential Information.</b></p>
                            <p>The Employee understands and acknowledges that during the
                            course of employment by the Company, he/she will have access to and learn about
                            confidential, secret and proprietary documents, materials, information regarding existing
                            and prospective customers, and other information, in tangible and intangible form,
                            including, but not limited to the Company’s clients’ technologies, delivery and distribution
                            processes, and customer information (collectively, “Confidential Information”). The
                            Employee further understands and acknowledges that this Confidential Information is of
                            great competitive importance and commercial value to the Company and its clients, and
                            that improper use or disclosure of the Confidential Information by the Employee might
                            cause the Company to incur financial costs, loss of business advantage, liability under
                            confidentiality agreements with third parties, civil damages and criminal penalties.</p>
                            <p>For purposes of this Agreement, Confidential Information includes, but is not limited to, all
                            information not generally known to the public, in spoken, printed, electronic or any other
                            form or medium, relating directly or indirectly to: business processes, practices, methods,
                            policies, plans, publications, documents, research, operations, services, strategies,
                            techniques, agreements, contracts, terms of agreements, transactions, negotiations,
                            know-how, trade secrets, computer programs, computer software, applications, operating
                            systems, software and/or web design, work-in-process, databases, device configurations,
                            compilations, metadata, technologies, manuals, records, articles, systems, material,
                            sources of material, supplier information, vendor information, financial information, results,
                            accounting information, accounting records, legal information, marketing/advertising
                            information, pricing information, credit information, design information, personnel and
                            employee payroll information, employee lists, supplier lists, vendor lists, developments,
                            reports, internal controls, security procedures, graphics, drawing, sketches, market
                            studies, sales information, revenue, costs, formulae, communications, algorithms, product
                            plans, designs, styles, models, ideas, audiovisual programs, inventions, unpublished
                            patent applications, original works of authorship, discoveries, experimental processes and
                            results, specifications, manufacturing information, factory lists, distributor lists, buyer lists,
                            client information, including but not limited to Company’s clients’ information relating to
                            client processes, client technologies, and clients’ customers’ information, client lists,
                            customer information and customer lists of the Company or any existing or prospective
                            customer, supplier, investor or other associated third party, or of any other person or entity
                            that has entrusted information to the Company in confidence. This definition includes, but
                            is not limited to, information designated as a “trade secret” under federal or state law.</p>
                            <p>The Employee understands that the above list is not exhaustive, and that Confidential
                            Information also includes other information that is marked or otherwise identified as
                            confidential or proprietary, or that would otherwise appear to a reasonable person to be
                            confidential or proprietary, as to Company or Company’s clients, in the context and
                            circumstances in which the information is known or used.</p>
                            <p>Confidential Information shall not include information that is generally available to and
                            known by the public at the time of disclosure to the Employee, provided that such
                            disclosure is through no direct or indirect fault of the Employee or person(s) acting on the
                            Employee's behalf.</p>
                        </div>
                        <div class="container">
                            <p style="text-decoration-line:underline;"><b>b. Disclosure and Use Restrictions.</b></p>
                            <p>The Employee agrees and covenants: </p>
                            <p>(i) to treat all Confidential Information as strictly confidential;</p>
                            <p>(ii) not to directly or indirectly disclose, publish, communicate or make available
                            Confidential Information, or allow it to be disclosed, published, communicated or made
                            available, in whole or part, to any entity or person whatsoever (including other employees
                            of the Company) not having a need to know and authority to know and use the Confidential
                            Information in connection with the business of the Company and, in any event, not to
                            anyone outside of the direct employ of the Company except as required in the
                            performance of the Employee's authorized employment duties to the Company (and then,
                            such disclosure shall be made only within the limits and to the extent of such duties or
                            consent); and</p>
                            <p>(iii) not to access or use any Confidential Information, and not to copy any documents,
                            records, files, media or other resources containing any Confidential Information, or remove
                            any such documents, records, files, media or other resources from the premises or control
                            of the Company except as required in the performance of the Employee's authorized
                            employment duties to the Company or with the prior consent of an authorized officer acting
                            on behalf of the Company in each instance (and then, such disclosure shall be made only
                            within the limits and to the extent of such duties or consent).</p>
                        </div>
                        <p>The Employee understands and acknowledges that the Employee's obligations under this
                        Agreement regarding any particular Confidential Information begin immediately and shall continue
                        during and after the Employee's employment by the Company until the Confidential Information
                        has become public knowledge other than as a result of the Employee's breach of this Agreement
                        or a breach by those acting in concert with the Employee or on the Employee's behalf.</p>
                        <p>Nothing herein shall be construed to prevent disclosure of Confidential Information as may be
                        required by applicable law or regulation, or pursuant to the valid order of a court of competent
                        jurisdiction or an authorized government agency, provided that the disclosure does not exceed
                        the extent of disclosure required by such law, regulation or order. Employee shall, except to the
                        extent prohibited by law, first: (a) give the Company sufficient prior notice of any request for
                        Confidential Information to permit the Company to seek a protective order or similar confidential
                        treatment requiring that the Confidential Information not be disclosed or be used only for specific
                        purposes; (b) make a reasonable effort, at the Company’s request and expense, to obtain a
                        protective order or similar confidential treatment requiring that the Confidential Information so
                        disclosed be used only for the purposes for which disclosure of this information was required, (c)
                        disclose no more Confidential Information than is required, and (d) provide all necessary
                        assistance and cooperation to the Company, at the Company’s request and expense, to maintain
                        the confidentiality of the Confidential Information to the fullest extent permitted despite the
                        compelled disclosure by law.</p>
                        <p>This policy does not prohibit non-supervisory employees’ communications about their own or their
                        coworkers’ wages, hours or working conditions.</p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>2. Security.</b></h4>
                        <div class="container">
                            <p style="text-decoration-line:underline;"><b>a. Security and Access.</b></p>
                            <p>The Employee agrees and covenants (i) to comply with all Company
                            security policies and procedures as in force from time to time including without limitation
                            those regarding computer equipment, telephone systems, voicemail systems, facilities
                            access, monitoring, key cards, access codes, Company intranet, internet, social media
                            and instant messaging systems, computer systems, e-mail systems, computer networks,
                            document storage systems, software, data security, encryption, firewalls, passwords,
                            facilities, IT resources, and communication technologies ("Information Technology
                            Resources"); (ii) not to access or use any Information Technology Resources except as
                            authorized by Company; (iii) to comply with all Company client’s security procedures, and
                            not to access or use client passwords or information technology systems, excepts as
                            expressly authorized by the Company or the client; and (iv) not to access or use any
                            Information Technology Resources in any manner after the termination of the Employee's
                            employment by the Company, whether termination is voluntary or involuntary. The
                            Employee agrees to notify the Company promptly in the event he/she learns of any
                            violation of the foregoing by others, or of any other misappropriation or unauthorized
                            access, use, reproduction or reverse engineering of, or tampering with any Information
                            Technology Resources or other Company property or materials by others.</p>
                        </div>
                        <div class="ml-2">
                            <p style="text-decoration-line:underline;"><b>b.  Exit Obligations.</b></p>
                            <p>Upon (i) voluntary or involuntary termination of the Employee's
                            employment or (ii) the Company's request at any time during the Employee's employment,
                            the Employee shall (A) provide or return to the Company any and all Company property,
                            including uniforms, keys, key cards, access cards, identification cards, security devices,
                            Company credit cards, network access devices, computers, cell/smartphones, fax
                            machines, equipment, manuals, reports, files, books, work product, e-mail messages,
                            recordings, thumb drives or other removable information storage devices, hard drives, and
                            all Company documents and materials belonging to the Company and stored in any
                            fashion, including but not limited to those that constitute or contain any Confidential
                            Information that are in the possession or control of the Employee, whether they were
                            provided to the Employee by the Company or any of its business associates or created by
                            the Employee in connection with his/her employment by the Company; and (B) delete or
                            destroy all copies of any such documents and materials not returned to the Company that
                            remain in the Employee's possession or control, including those stored on any nonCompany devices, networks, storage locations and media in the Employee's possession
                            or control.</p>
                        </div>
                        <div class="ml-2">
                            <p style="text-decoration-line:underline;"><b>c.</b></p>
                            <p>Pursuant to the federal Defend Trade Secrets Act, the Company hereby notifies
                            Employee, and Employee acknowledges, that Employee shall not be held criminally or
                            civilly liable under any federal or state trade secret law for the disclosure of a trade secret
                            that: (a) Employee makes (i) in confidence to a federal, state, or local government official,
                            either directly or indirectly, or to an attorney, and (ii) solely for the purpose of reporting or
                            investigating a suspected violation of law; or (b) employee makes in a complaint or other
                            document filed in a lawsuit or other proceeding, if such filing is made under seal. Further,
                            pursuant to such Act, if Employee files a lawsuit for retaliation by the Company for
                            reporting a suspected violation of law, Employee may disclose a trade secret to
                            Employee’s attorney and use the trade secret information in the court proceeding, if Employee: (A) files any document containing the trade secret under seal; and (B) does
                            not disclose the trade secret, except pursuant to court order.</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>3. Publicity.</b></h4>
                        <p>The Employee hereby consents to any and all uses and displays, by the Company
                        and/or its clients of the Employee's name, voice, likeness, image, appearance and
                        biographical information in, on or in connection with any pictures, photographs, audio and
                        video recordings, digital images, websites, television programs and advertising, other
                        advertising, sales and marketing brochures, books, magazines, other publications, CDs,
                        DVDs, tapes and all other printed and electronic forms and media throughout the world, at
                        any time during or after the period of his/her employment by the Company, for all legitimate
                        business purposes of the Company ("Permitted Uses"). Employee hereby forever releases
                        the Company and its directors, officers, employees and clients from any and all claims,
                        actions, damages, losses, costs, expenses and liability of any kind, arising under any legal or
                        equitable theory whatsoever at any time during or after the period of his/her employment by
                        the Company, in connection with any Permitted Use.</p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>4. Acknowledgement.</b></h4>
                        <p>The Employee acknowledges and agrees that the Employee will obtain
                        knowledge regarding the Company's and/or its clients’ methods of doing business and
                        marketing strategies by virtue of the Employee's employment; and that the terms and
                        conditions of this Agreement are reasonable under these circumstances. The Employee
                        further acknowledges that the amount of his/her compensation reflects, in part, his/her
                        obligations and the Company's rights under this Agreement; that he/she has no expectation
                        of any additional compensation, royalties or other payment of any kind not otherwise
                        referenced herein in connection herewith; that he/she will not be subject to undue hardship by
                        reason of his/her full compliance with the terms and conditions of this Agreement or the
                        Company's enforcement thereof; and that this Agreement is not a contract of employment and
                        shall not be construed as a commitment by either the Company or Employee to continue an
                        employment relationship for any certain period of time. <b>Nothing in this Agreement shall be
                        construed to in any way terminate, supersede, undermine or otherwise modify the "atwill" status of the employment relationship between the Company and the Employee,
                        pursuant to which either the Company or the Employee may terminate the employment
                        relationship at any time, with or without cause, with or without notice.</b></p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>5. Governing Law; Arbitration.</b></h4>
                        <p>This Agreement, for all purposes, shall be construed in
                        accordance with the laws of [STATE] without regard to conflicts-of-law principles. Any action
                        or proceeding to enforce this Agreement shall be brought in arbitration pursuant to the Mutual
                        Agreement to Individually Arbitrate Disputes.</p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>6. Modification and Waiver.</b></h4>
                        <p>No provision of this Agreement may be amended or modified
                        unless such amendment or modification is agreed to in writing and signed by the Employee
                        and by the President/CEO of the Company (other than the Employee). No waiver of any
                        breach of any condition or provision of this Agreement shall be deemed a waiver of any similar
                        or dissimilar provision or condition at the same or any prior or subsequent time, nor shall the
                        failure of or delay by either the Company or Employee in exercising any right, power or
                        privilege hereunder operate as a waiver thereof to preclude any other or further exercise
                        thereof or the exercise of any other such right, power or privilege.</p>
                    </div>
                    <div class="mb-3">
                        <h4 style="text-decoration-line:underline;"><b>7. Severability.</b></h4>
                        <p>Should any provision of this Agreement be held by an arbitrator or court of
                        competent jurisdiction to be enforceable only if modified, or if any portion of this Agreement
                        shall be held as unenforceable and thus stricken, such holding shall not affect the validity of
                        the remainder of this Agreement.</p>
                    </div>
                    <div class="mb-5">
                        <h4><b>AGREED TO AND ACCEPTED:</b></h4>
                        <h4>EMPLOYEE</h4>
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <div class="form-group col-lg-3">
                                    <label>Signature: </label>
                                    <input type="text" class="form-control" placeholder="Please input signature...">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Date: </label>
                                    <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group col-lg-3">
                                    <label>Printed Name: </label>
                                    <input type="text" class="form-control doc_user_name_clone" placeholder="Please input printed name..." readonly>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="mb-5 col-lg-12">
                    <h3>AUTHORIZATION & CONSENT FOR SHARED INFORMATION</h3>
                    <div class="mb-3" style="border-top: solid 1px;border-bottom: solid 1px;">
                        <p>I authorize and give full permission to Blue Mile Transport LLC (the “Company”) to share
                        with Amazon Logistics, Inc. (“Amazon”) the results of drug and alcohol tests,
                        compensation information, performance review or documents, information regarding
                        disciplinary actions, personally identifiable payroll data, financial account numbers, and
                        any other information that Amazon may request from the Company in connection with
                        Amazon’s right to audit Company records.</p>
                        <p>Any confidential and/or private information about you provided to Amazon will be kept
                        confidential by Amazon, and access to your information will be limited to those with a
                        business need to know.</p>
                        <p>I acknowledge that my signing of this authorization and consent form is a voluntary act on
                        my part and that I have not been coerced into signing this document by anyone.</p>
                    </div>
                    <div class="mb-5">
                        <h7>Employee: </h7>
                        <div class="col-lg-12">
                            <div class="form-group col-lg-4">
                                <label>Signature: </label>
                                <input type="text" class="form-control" placeholder="Please input signature...">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Printed Name: </label>
                                <input type="text" class="form-control doc_user_name_clone" placeholder="Please input printed name..." readonly>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Date: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="mb-5 col-lg-12">
                    <h3 style="text-align:center;" class="mb-3">BLUE MILE TRANSPORT LLC</h3>
                    <h3 style="text-align:center;">APPLICATION FOR EMPLOYMENT</h3>
                    <div class="mb-3">
                        <p>Please provide complete and legible information. An incomplete Application may affect your
                        consideration for employment. If necessary, attach a separate sheet for additional information.</p>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <div class="col-lg-12 mb-3">
                            <div class="form-group col-lg-4">
                                <label>Date of Application: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="applied_pos">Position(s) Applied For: </label>
                                <input type="text" name="applied_pos" class="form-control" placeholder="Please input positions applied for..." id="doc_applied_pos">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Name: </label>
                                <input type="text" class="form-control doc_user_name_clone" placeholder="Please input name..." readonly>
                            </div>
                        </div> 
                        
                        <div class="col-lg-12 mb-3">
                            <div class="form-group col-lg-6">
                                <label>Address: </label>
                                <input type="address" class="form-control doc_user_address_clone" placeholder="Please input address..." readonly>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="form-group col-lg-4">
                                <label>City: </label>
                                <input type="text" class="form-control doc_user_city_clone" placeholder="Please input city..." readonly>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>State: </label>
                                <input type="text" class="form-control doc_user_state_clone" placeholder="Please input state..." readonly>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Date: </label>
                                <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                            </div>
                        </div> 

                        <div class="col-lg-12 mb-3">
                            <div class="form-group col-lg-4">
                                <label for="telephone_num">Telephone: </label>
                                <input type="number" name="telephone_num" class="form-control" placeholder="Please input telephone number..." id="doc_tele_num">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="cellphone_num">Cell phone: </label>
                                <input type="number" name="cellphone_num" class="form-control" placeholder="Please input cell phone number..." id="doc_cell_num">
                            </div>
                        </div> 

                        <div class="col-lg-12 mb-3">
                            <div class="col-lg-9">
                                <label for="email_address">Email Address: </label>
                                <input type="text" name="email_address" class="form-control" placeholder="Please input address..." id="doc_email">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <div class="col-lg-12">
                                <label>How did you hear about this position (employee referral, ad, web positing, etc.?)</label>
                                <input type="text" name="hear_info" class="form-control" placeholder="Please write here..." id="doc_hear_info">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label>Are you legally authorized to work for this Company in the United States?</label>
                            <div class="col-lg-12">
                                <input type="radio" id="legal_yes" name="legal_yeno" value="legal_auth_yes" checked> Yes
                                <input type="radio" id="legal_no" name="legal_yeno" value="legal_auth_no"> No
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label>Will you now or in the future require sponsorship by this Company to attain or maintain your
                            employment status? </label>
                            <div class="col-lg-12">
                                <input type="radio" name="sponsor_yeno" value="sponsorship_yes" checked> Yes
                                <input type="radio" name="sponsor_yeno" value="sponsorship_no"> No
                            </div>
                            <div class="col-lg-12">
                                <p><small><em>Note: If hired, you must complete Section 1 on Form I-9 required by the U.S. Immigration and Naturalization Service no later than first day of
                                work and provide the documentation required by Section 2 no later than three (3) business days after you start work. A copy of the back of Form
                                I-9, listing acceptable documentation, is available.</em></small></p>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <label>On what date would you be available for work?</label>
                            <div class="col-lg-12">
                                <input type="text" name="avail_work_date" class="form-control" id="avail_date" value="">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label>Type of work sought?</label>
                            <div class="col-lg-12">
                                <input type="radio" id="full" name="full_part_temp" value="full_time" checked> Full Time
                                <input type="radio" id="part" name="full_part_temp" value="part_time"> Part Time
                                <input type="radio" id="temp" name="full_part_temp" value="temp_time"> Temporary
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 mb-3">
                        <p>Thank you for your interest in employment with this Company. The Company is committed to a policy of Equal
                        Employment Opportunity and will not discriminate against an applicant on the basis of age, sex, sexual orientation,
                        gender, gender identity or expression, race, color, creed, religion, ethnicity, national origin, alienage or citizenship,
                        disability, marital status, familial status, genetic information, uniform service or veteran status or any other legally
                        protected basis under applicable federal, state or local laws, regulations or ordinances. The Company will provide
                        reasonable accommodations to allow an applicant to participate in the application and hiring process if requested.
                        Please inform us if you need assistance completing any forms or to otherwise participate in the application
                        process.</p>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="mb-5 col-lg-12">
                    <h3 style="text-decoration-line:underline;">EMPLOYMENT EXPERIENCE</h3>
                    <div class="col-lg-12 mb-3">
                        <p>Start with your current or most recent position. Include military service assignments and work
                        performed on a volunteer basis.</p>
                    </div>
                    
                    <div class="container mb-5 col-lg-12 div_border">
                        <div class="row bottom_border">
                            <label>Current/Most Recent Employer</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row col-lg-12 mb-3">
                                    <label>Company:</label>
                                    <input type="text" class="form-control" placeholder="Please input company..." id="exp_com_name">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Address:</label>
                                    <input type="text" class="form-control" placeholder="Please input address..." id="exp_com_address">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Dates Employed:</label>
                                    <label style="width:25%;text-align:center;">From:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>" id="em_from">
                                    <label style="width:25%;text-align:center;">To:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>" id="em_to">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Job Title:</label>
                                    <input type="text" class="form-control" placeholder="Please input job title..." id="job_title">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Supervisor:</label>
                                    <input type="text" class="form-control" placeholder="Please input supervisor..." id="supervisor_name">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Reason for Leaving:</label>
                                    <input type="text" class="form-control" placeholder="Please input reason..." id="reason_leave">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Work Performed: </label>
                                <textarea id="work_perform" class="form-control" rows="18"
                                placeholder="Enter content..."></textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="container mb-5 col-lg-12 div_border">
                        <div class="row bottom_border">
                            <label>Previous Employer</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row col-lg-12 mb-3">
                                    <label>Company:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Address:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Dates Employed:</label>
                                    <label style="width:25%;text-align:center;">From:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>">
                                    <label style="width:25%;text-align:center;">To:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Job Title:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Supervisor:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Reason for Leaving:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Work Performed: </label>
                                <textarea id="work_perform" class="form-control" rows="18"
                                placeholder="Enter content..."></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container mb-5 col-lg-12 div_border">
                        <div class="row bottom_border">
                            <label>Previous Employer</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row col-lg-12 mb-3">
                                    <label>Company:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Address:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Dates Employed:</label>
                                    <label style="width:25%;text-align:center;">From:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>">
                                    <label style="width:25%;text-align:center;">To:</label><input style="width:25%;" type="date" class="form-control" value="<?php echo $today; ?>">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Job Title:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Supervisor:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                                <div class="row col-lg-12 mb-3">
                                    <label>Reason for Leaving:</label>
                                    <input type="text" class="form-control" placeholder="Please input company...">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label>Work Performed: </label>
                                <textarea id="work_perform" class="form-control" rows="18"
                                placeholder="Enter content..."></textarea>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="col-lg-12 mb-3">
                        <p style="text-align:center;"><b>If you need additional space, please continue on a separate sheet of paper.</b></p>
                    </div>   
                    
                    <div class="container mb-3 col-lg-12 div_border">
                        <div class="col-lg-12 mb-3">
                            <p>May we contact your current and former employers? If no, please identify the employer(s) and explain.</p>
                            <textarea id="contact_employer" class="form-control" rows="18"
                            placeholder="Enter content..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-5 col-lg-12">
                    <p>Give name, address, telephone number, and position of three business or personal references.</p>
                    <textarea id="exp_add_info" class="form-control" rows="4"
                    placeholder="Enter content..."></textarea>
                </div>

                <div class="mb-5 col-lg-12">
                    <h3 style="text-decoration-line:underline;">Education</h3>
                    <div class="col-lg-12 mb-3">
                    <table class="responsive-table-input-matrix">
                        <thead>
                        <tr>
                            <th></th>
                            <th>High School</th>
                            <th>College/University</th>
                            <th>Graduate/Professional</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>School Name</td>
                            <td><input type="text" class="form-control" id="high_name" name="high_name"></td>
                            <td><input type="text" class="form-control" id="col_name" name="col_name"></td>
                            <td><input type="text" class="form-control" id="grad_name" name="grad_name"></td>
                        </tr>
                        <tr>
                            <td>City, State, Country</td>
                            <td><input type="text" class="form-control" id="high_CSC" name="high_CSC"></td>
                            <td><input type="text" class="form-control" id="col_CSC" name="col_CSC"></td>
                            <td><input type="text" class="form-control" id="grad_CSC" name="grad_CSC"></td>
                        </tr>
                        <tr>
                            <td>Years Completed</td>
                            <td><input type="number" class="form-control" placeholder="choose one from 9, 10, 11, 12" id="high_year" name="high_year"></td>
                            <td><input type="number" class="form-control" placeholder="choose one from 1, 2, 3, 4" id="col_year" name="col_year"></td>
                            <td><input type="number" class="form-control" placeholder="choose one from 1, 2, 3, 4" id="grad_year" name="grad_year"></td>
                        </tr>
                        <tr>
                            <td>Diploma/Degree</td>
                            <td><input type="text" class="form-control" id="high_degree" name="high_degree"></td>
                            <td><input type="text" class="form-control" id="col_degree" name="col_degree"></td>
                            <td><input type="text" class="form-control" id="grad_degree" name="grad_degree"></td>
                        </tr>
                        <tr>
                            <td>Describe Course of Study</td>
                            <td><input type="text" class="form-control" id="high_study" name="high_study"></td>
                            <td><input type="text" class="form-control" id="col_study" name="col_study"></td>
                            <td><input type="text" class="form-control" id="grad_study" name="grad_study"></td>
                        </tr>
                        <tr>
                            <td>Describe Specialized<br>
                            Training, Apprenticeship,<br>
                            Skills, and Extra-Curricular<br>
                            Activities</td>
                            <td><input type="text" class="form-control" id="high_spec" name="high_spec"></td>
                            <td><input type="text" class="form-control" id="col_spec" name="col_spec"></td>
                            <td><input type="text" class="form-control" id="grad_spec" name="grad_spec"></td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>

                <div class="mb-5 col-lg-12">
                    <p>State any additional information you feel may be helpful to us in considering your application.</p>
                    <textarea id="edu_add_info" name="edu_add_info" class="form-control" rows="4"
                    placeholder="Enter content..."></textarea>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;">APPLICANT CERTIFICATION</h3>
                    <h4 style="text-align:center;"><b>CERTIFICATION - <em>PLEASE READ CAREFULLY BEFORE SIGNING</em></b></h4>
                    <div>
                        <p>I consent to and authorize the Company to contact my former employers, and any and all other persons and
                        organizations for information bearing upon my qualifications for employment. Unless I noted otherwise, I
                        further authorize the listed employers, schools, and personal references to give the Company (without further
                        notice to me) any and all information about my previous employment and education, along with other pertinent
                        information they may have and hereby waive any actions which I may have against either party/parties for
                        providing a reference as part of this application process. I understand that any employment or offer of
                        employment arising from this Application for Employment will be subject to satisfactory verification of all job
                        qualifications and information contained in this Application for Employment, which may include academic
                        credentials, licenses, professional designations, references, credit and employment history, motor vehicles and
                        other background checks, to the extent permitted by and in accordance with applicable law.</p>
                    </div>
                    <div style="text-align:center;">
                        <div class="form-group col-lg-12">
                            <input type="text" name="certi_info1" class="form-control" placeholder="Please input content..." id="certi_info1">
                            <p>(Please initial here to indicate that you have read and understand the above paragraph.)</p>
                        </div>
                    </div>
                    
                    <div>
                        <p><b>I expressly agree and understand that completion of this application is a preliminary step to employment. It
                        does not obligate the Company to offer me employment or for me to accept employment. I further agree
                        and understand that in the event I am employed by the Company, my employment with the Company will be
                        “at will.”</b> This means that my employment is not for a specified term and that it may be terminated by the
                        Company or me at any time, for any reason, with or without cause or notice. <b>I understand that no document or
                        any statement of any employee of the Company constitutes a contract of employment between me and the
                        Company that in any way alters or changes my employment at will status.</b> I further understand that the at-will
                        nature of my employment cannot be changed, on an individual or collective basis, except by a formal written
                        contract, stating it is a contract of employment, signed by the President/CEO of the Company. I understand that
                        this Application for Employment does not constitute an agreement or contract for employment between me and
                        the Company.</p>
                    </div>
                    <div style="text-align:center;">
                        <div class="form-group col-lg-12">
                            <input type="text" name="certi_info2" class="form-control" placeholder="Please input content..." id="certi_info2">
                            <p>(Please initial here to indicate that you have read and understand the above paragraph.)</p>
                        </div>
                    </div>

                    <div>
                        <p>In the event I am employed by the Company, I understand that I will be expected to comply with all rules and
                        regulations as set forth in the Company’s policies and in any communications made to me. I understand that
                        while the company makes every effort to accommodate individual preferences, business needs may make the
                        following necessary: overtime; shift work; a rotating work schedule; a work schedule that includes weekend
                        work.</p>
                    </div>
                    <div style="text-align:center;">
                        <div class="form-group col-lg-12">
                            <input type="text" name="certi_info3" class="form-control" placeholder="Please input content..." id="certi_info3">
                            <p>(Please initial here to indicate that you have read and understand the above paragraph.)</p>
                        </div>
                    </div>

                    <div>
                        <p><b>By my signature below, I certify under penalty of perjury that all of the foregoing information is true and
                        complete, and I understand that any falsification or omission of information may result in denial of
                        employment; or, if I am employed by the Company, may result in termination regardless of the time lapse
                        before discovery.</b></p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">ARIZONA APPLICANTS ONLY:</b> THE SMOKE-FREE ARIZONA ACT, A.R.S. § 36-601.01, PROHIBITS SMOKING IN PLACES OF
                        EMPLOYMENT AND WITHIN 20 FEET OF ALL ENTRANCES, OPEN WINDOWS, OR VENTILATION SYSTEMS.</p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">CALIFORNIA APPLICANTS ONLY:</b> I understand the Company may obtain, without using the services of a third party investigative consumer reporting agency, public records pertaining to my character, general reputation, personal characteristics,
                        etc. during its evaluation of my application for employment and, if employed, during my employment. By
                        checking the following box, I waive my right to receive copies of public records obtained by the Company.</p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">MARYLAND APPLICANTS ONLY:</b> UNDER MARYLAND LAW, AN EMPLOYER MAY NOT REQUIRE OR DEMAND, AS A
                        CONDITION OF EMPLOYMENT, PROSPECTIVE EMPLOYMENT OR CONTINUED EMPLOYMENT, THAT AN INDIVIDUAL
                        SUBMIT TO OR TAKE A LIE DETECTOR OR SIMILAR TEST. EMPLOYER WHO VIOLATES THIS LAW IS GUILTY OF A
                        MISDEMEANOR AND SUBJECT TO A FINE NOT EXCEEDING $100.</p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">MASSACHUSETTS APPLICANTS ONLY:</b> IT IS UNLAWFUL IN MASSACHUSETTS TO REQUIRE OR ADMINISTER A LIE
                        DETECTOR TEST AS A CONDITION OF EMPLOYMENT OR CONTINUED EMPLOYMENT. AN EMPLOYER WHO VIOLATES THIS
                        LAW SHALL BE SUBJECT TO CRIMINAL PENALTIES AND CIVIL LIABILITY.</p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">MONTANA APPLICANTS ONLY:</b> THE EMPLOYMENT RELATIONSHIP IS GOVERNED BY THE WRONGFUL DISCHARGE FROM
                        EMPLOYMENT ACT. MONT. CODE ANN. § 39-2-901.</p>
                    </div>
                    <div>
                        <p><b style="text-decoration-line:underline;">RHODE ISLAND APPLICANTS ONLY:</b> IF YOU PROVIDE FALSE INFORMATION ABOUT YOUR ABILITY TO PERFORM THE
                        ESSENTIAL FUNCTIONS OF THE JOB, WITH OR WITHOUT ACCOMMODATIONS, YOU MAY BE BARRED FROM FILING A
                        CLAIM UNDER the provisions of the Workers’ Compensation Act of the State of Rhode Island.</p>
                    </div>
                    <div class="row mb-5 col-lg-12">
                        <div class="form-group col-lg-3">
                            <label>Signature: </label>
                            <input type="text" class="form-control" placeholder="Please input Signature...">
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Date: </label>
                            <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                        </div>
                        <div class="form-group col-lg-3">
                            <label>Name (please print): </label>
                            <input type="text" class="form-control doc_user_name_clone" placeholder="Please input Printed Name..." readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h3 style="text-align:center;">Employee’s Withholding Certificate</h3>
                    <div class="col-lg-12">
                        <h4 style="text-decoration-line:underline;"><b>Step 1: Enter Personal Information</b></h4>
                        
                            <div class="row col-lg-12 mb-3">
                                <div class="col-lg-4">
                                    <label for="first_name">First name and middle initial </label>
                                    <input type="text" name="first_name" class="form-control" placeholder="Please input first name..." id="doc_first_name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="last_name">Last name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="Please input last name..." id="doc_last_name">
                                </div>
                            </div>

                            <div class="row col-lg-12 mb-3">
                                <div class="col-lg-6">
                                    <label>Social security number</label>
                                    <input type="number" class="form-control doc_user_SSN_clone" placeholder="Please input social security number..." readonly>
                                </div>

                                <div class="col-lg-6">
                                    <label>Address</label>
                                    <input type="address" class="form-control doc_user_address_clone" placeholder="Please input address..." readonly>
                                </div>
                            </div>
                            
                            <div class="row col-lg-12 mb-3">
                                <div class="col-lg-3">
                                    <label>City or town </label>
                                    <input type="text" class="form-control doc_user_city_clone" placeholder="Please input City name..." readonly>
                                </div>
                                <div class="col-lg-3">
                                    <label>State</label>
                                    <input type="text" class="form-control doc_user_state_clone" placeholder="Please input State name..." readonly>
                                </div>
                                <div class="col-lg-3">
                                    <label>ZIP code</label>
                                    <input type="text" class="form-control doc_user_zip_clone" placeholder="Please input zip code..." readonly>
                                </div>
                            </div>

                            <div class="row col-lg-12 mb-3">
                                <fieldset>
                                    <div>
                                        <input type="checkbox" name="married_check_state" class="married_check" value="married_sep" checked>
                                        <label>Single or Married filing separately</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="married_check_state" class="married_check" value="married_join">
                                        <label>Married filing jointly</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="married_check_state" class="married_check" value="married_head">
                                        <label>Head of household</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="row col-lg-12 mb-3">
                                <p><b>Complete Steps 2–4 ONLY if they apply to you; otherwise, skip to Step 5.</b> See page 2 for more information on each step, who can
                                claim exemption from withholding, when to use the online estimator, and privacy.</p>
                            </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <h4 style="text-decoration-line:underline;"><b>Step 2: Multiple Jobs or Spouse Works</b></h4>
                        <div class="container">
                            <p>Complete this step if you (1) hold more than one job at a time, or (2) are married filing jointly and your spouse
                            also works. The correct amount of withholding depends on income earned from all of these jobs.</p>
                            <p>Do <b>only one</b> of the following.</p>
                            <p><b>(a)</b> Use the estimator at www.irs.gov/W4App for most accurate withholding for this step (and Steps 3–4); <b>or</b></p>
                            <p><b>(b)</b> Use the Multiple Jobs Worksheet on page 3 and enter the result in Step 4(c) below for roughly accurate withholding; <b>or</b></p>
                            <p><b>(c)</b> If there are only two jobs total, you may check this box. Do the same on Form W-4 for the other job. This option
                            is accurate for jobs with similar pay; otherwise, more tax than necessary may be withheld</p>
                            <p><b>TIP:</b> To be accurate, submit a 2020 Form W-4 for all other jobs. If you (or your spouse) have self-employment
                            income, including as an independent contractor, use the estimator.</p>
                            <p><b>Complete Steps 3–4(b) on Form W-4 for only ONE of these jobs.</b> Leave those steps blank for the other jobs. (Your withholding will
                            be most accurate if you complete Steps 3–4(b) on the Form W-4 for the highest paying job.)</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <h4 style="text-decoration-line:underline;"><b>Step 3: Claim Dependents</b></h4>
                        <div class="container">
                            <p>If your income will be $200,000 or less ($400,000 or less if married filing jointly):</p>
                            <p>Multiply the number of qualifying children under age 17 by $2,000</p>
                            <p>Multiply the number of other dependents by $500</p>
                            <p>Add the amounts above and enter the total here</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <h4 style="text-decoration-line:underline;"><b>Step 4 (optional): Other Adjustments</b></h4>
                        <div class="container">
                            <p><b>(a) Other income (not from jobs).</b> If you want tax withheld for other income you expect
                            this year that won’t have withholding, enter the amount of other income here. This may
                            include interest, dividends, and retirement income</p>
                            <p><b>(b) Deductions.</b> If you expect to claim deductions other than the standard deduction
                            and want to reduce your withholding, use the Deductions Worksheet on page 3 and
                            enter the result here</p>
                            <p><b>(c) Extra withholding.</b> Enter any additional tax you want withheld each <b>pay period</b></p>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <h4 style="text-decoration-line:underline;"><b>Step 5: Sign Here</b></h4>
                        <div class="container">
                            <p>Under penalties of perjury, I declare that this certificate, to the best of my knowledge and belief, is true, correct, and complete.</p>
                            <div class="row mb-5">
                                <div class="form-group col-lg-3">
                                    <label>Signature: </label>
                                    <input type="text" class="form-control" placeholder="Please input Signature...">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Date: </label>
                                    <input type="date" class="form-control doc_user_date_clone" value="<?php echo $today; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="comment-row content">                
                <div class="col-lg-12 mb-5 div_border">
                    <div class="col-lg-6">
                        <h3><b>General Instructions</b></h3>
                        <h4><b>Future Developments</b></h4>
                        <div>
                            <p>
                            For the latest information about developments related to
                            Form W-4, such as legislation enacted after it was published,
                            go to www.irs.gov/FormW4.
                            </p>
                        </div>
                        <h4><b>Purpose of Form</b></h4>
                        <div>
                            <p>
                            Complete Form W-4 so that your employer can withhold the
                            correct federal income tax from your pay. If too little is
                            withheld, you will generally owe tax when you file your tax
                            return and may owe a penalty. If too much is withheld, you will
                            generally be due a refund. Complete a new Form W-4 when
                            changes to your personal or financial situation would change
                            the entries on the form. For more information on withholding
                            and when you must furnish a new Form W-4, see Pub. 505.
                            </p>
                            <p>
                            <b>Exemption from withholding.</b> You may claim exemption from
                            withholding for 2020 if you meet both of the following
                            conditions: you had no federal income tax liability in 2019 and
                            you expect to have no federal income tax liability in 2020. You
                            had no federal income tax liability in 2019 if (1) your total tax on
                            line 16 on your 2019 Form 1040 or 1040-SR is zero (or less
                            than the sum of lines 18a, 18b, and 18c), or (2) you were not
                            required to file a return because your income was below the
                            filing threshold for your correct filing status. If you claim
                            exemption, you will have no income tax withheld from your
                            paycheck and may owe taxes and penalties when you file your
                            2020 tax return. To claim exemption from withholding, certify
                            that you meet both of the conditions above by writing “Exempt”
                            on Form W-4 in the space below Step 4(c). Then, complete
                            Steps 1(a), 1(b), and 5. Do not complete any other steps. You
                            will need to submit a new Form W-4 by February 16, 2021.
                            </p>
                            <p>
                            <b>Your privacy.</b> If you prefer to limit information provided in
                            Steps 2 through 4, use the online estimator, which will also
                            increase accuracy.
                            </p>
                            <p>
                            As an alternative to the estimator: if you have concerns
                            with Step 2(c), you may choose Step 2(b); if you have
                            concerns with Step 4(a), you may enter an additional amount
                            you want withheld per pay period in Step 4(c). If this is the
                            only job in your household, you may instead check the box
                            in Step 2(c), which will increase your withholding and
                            significantly reduce your paycheck (often by thousands of
                            dollars over the year)
                            </p>
                            <p>
                            <b>When to use the estimator.</b> Consider using the estimator at
                            www.irs.gov/W4App if you:
                            </p>
                            <p>
                            1. Expect to work only part of the year;
                            </p>
                            <p>
                            2. Have dividend or capital gain income, or are subject to
                            additional taxes, such as the additional Medicare tax;
                            </p>
                            <p>
                            3. Have self-employment income (see below); or
                            </p>
                            <p>
                            4. Prefer the most accurate withholding for multiple job situations.
                            </p>
                            <p>
                            <b>Self-employment.</b> Generally, you will owe both income and
                            self-employment taxes on any self-employment income you
                            receive separate from the wages you receive as an
                            employee. If you want to pay these taxes through
                            withholding from your wages, use the estimator at
                            www.irs.gov/W4App to figure the amount to have withheld.
                            </p>
                            <p>
                            <b>Nonresident alien.</b> If you’re a nonresident alien, see Notice
                            1392, Supplemental Form W-4 Instructions for Nonresident
                            Aliens, before completing this form.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h3><b>Specific Instructions</b></h3> 
                        <div>
                            <p>
                            <b>Step 1(c).</b> Check your anticipated filing status. This will
                            determine the standard deduction and tax rates used to
                            compute your withholding.
                            </p>
                            <p>
                            <b>Step 2.</b> Use this step if you (1) have more than one job at the
                            same time, or (2) are married filing jointly and you and your
                            spouse both work.
                            </p>
                            <p>
                            Option <b>(a)</b> most accurately calculates the additional tax
                            you need to have withheld, while option <b>(b)</b> does so with a
                            little less accuracy.
                            </p>
                            <p>
                            If you (and your spouse) have a total of only two jobs, you
                            may instead check the box in option (c). The box must also be
                            checked on the Form W-4 for the other job. If the box is
                            checked, the standard deduction and tax brackets will be cut
                            in half for each job to calculate withholding. This option is
                            roughly accurate for jobs with similar pay; otherwise, more tax
                            than necessary may be withheld, and this extra amount will be
                            larger the greater the difference in pay is between the two jobs.
                            </p>
                            <p><small><em>
                            <b>Multiple jobs.</b> Complete Steps 3 through 4(b) on only
                            one Form W-4. Withholding will be most accurate if
                            you do this on the Form W-4 for the highest paying job.
                            </small></em>
                            </p>
                            <p>
                            <b>Step 3.</b> Step 3 of Form W-4 provides instructions for
                            determining the amount of the child tax credit and the credit
                            for other dependents that you may be able to claim when
                            you file your tax return. To qualify for the child tax credit, the
                            child must be under age 17 as of December 31, must be
                            your dependent who generally lives with you for more than
                            half the year, and must have the required social security
                            number. You may be able to claim a credit for other
                            dependents for whom a child tax credit can’t be claimed,
                            such as an older child or a qualifying relative. For additional
                            eligibility requirements for these credits, see Pub. 972, Child
                            Tax Credit and Credit for Other Dependents. You can also
                            include <b>other tax credits</b> in this step, such as education tax
                            credits and the foreign tax credit. To do so, add an estimate
                            of the amount for the year to your credits for dependents
                            and enter the total amount in Step 3. Including these credits
                            will increase your paycheck and reduce the amount of any
                            refund you may receive when you file your tax return.
                            </p>
                            <p>
                            <b>Step 4 (optional).</b>
                            </p>
                            <p>
                            <b>Step 4(a).</b> Enter in this step the total of your other
                            estimated income for the year, if any. You shouldn’t include
                            income from any jobs or self-employment. If you complete
                            Step 4(a), you likely won’t have to make estimated tax
                            payments for that income. If you prefer to pay estimated tax
                            rather than having tax on other income withheld from your
                            paycheck, see Form 1040-ES, Estimated Tax for Individuals.
                            </p>
                            <p>
                            <b>Step 4(b).</b> Enter in this step the amount from the Deductions
                            Worksheet, line 5, if you expect to claim deductions other than
                            the basic standard deduction on your 2020 tax return and
                            want to reduce your withholding to account for these
                            deductions. This includes both itemized deductions and other
                            deductions such as for student loan interest and IRAs.
                            </p>
                            <p>
                            <b>Step 4(c).</b> Enter in this step any additional tax you want
                            withheld from your pay <b>each pay period</b>, including any
                            amounts from the Multiple Jobs Worksheet, line 4. Entering an
                            amount here will reduce your paycheck and will either increase
                            your refund or reduce any amount of tax that you owe.
                            </p>
                        </div>            
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12">
                    <div class="top_bottom_border">
                        <h3><b>Step 2(b)—Multiple Jobs Worksheet</b> <em>(Keep for your records.)</em></h3>
                    </div>
                    <div>
                        <p>
                        If you choose the option in Step 2(b) on Form W-4, complete this worksheet (which calculates the total extra tax for all jobs) on <b>only ONE</b>
                        Form W-4. Withholding will be most accurate if you complete the worksheet and enter the result on the Form W-4 for the highest paying job.
                        </p>
                        <p>
                        <b>Note:</b> If more than one job has annual wages of more than $120,000 or there are more than three jobs, see Pub. 505 for additional
                        tables; or, you can use the online withholding estimator at <em><a href="https://www.irs.gov/W4App">www.irs.gov/W4App</a></em>.
                        </p>
                        <p>
                        <b>1.  Two jobs.</b> If you have two jobs or you’re married filing jointly and you and your spouse each have one
                        job, find the amount from the appropriate table on page 4. Using the “Higher Paying Job” row and the
                        “Lower Paying Job” column, find the value at the intersection of the two household salaries and enter
                        that value on line 1. Then, skip to line 3.<br>
                        <b>2.  Three jobs.</b> If you and/or your spouse have three jobs at the same time, complete lines 2a, 2b, and
                        2c below. Otherwise, skip to line 3.<br>
                        <b>a.</b>  Find the amount from the appropriate table on page 4 using the annual wages from the highest
                        paying job in the “Higher Paying Job” row and the annual wages for your next highest paying job
                        in the “Lower Paying Job” column. Find the value at the intersection of the two household salaries
                        and enter that value on line 2a.<br>
                        <b>b.</b>  Add the annual wages of the two highest paying jobs from line 2a together and use the total as the
                        wages in the “Higher Paying Job” row and use the annual wages for your third job in the “Lower
                        Paying Job” column to find the amount from the appropriate table on page 4 and enter this amount
                        on line 2b.<br>
                        <b>c.</b>  Add the amounts from lines 2a and 2b and enter the result on line 2c.<br>
                        <b>3.</b>  Enter the number of pay periods per year for the highest paying job. For example, if that job pays
                        weekly, enter 52; if it pays every other week, enter 26; if it pays monthly, enter 12, etc.<br>
                        <b>4.  Divide</b> the annual amount on line 1 or line 2c by the number of pay periods on line 3. Enter this
                        amount here and in <b>Step 4(c)</b> of Form W-4 for the highest paying job (along with any other additional
                        amount you want withheld)<br>      
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="top_bottom_border">
                        <h3><b>Step 4(b)—Deductions Worksheet</b> <em>(Keep for your records.)</em></h3>
                    </div>
                    <div>
                        <p>
                        <b>1.</b>  Enter an estimate of your 2020 itemized deductions (from Schedule A (Form 1040 or 1040-SR)). Such
                        deductions may include qualifying home mortgage interest, charitable contributions, state and local
                        taxes (up to $10,000), and medical expenses in excess of 7.5% of your income.
                        </p>   
                        <p>
                        <b>2.</b>  Enter: 
                        </p>   
                        <p>
                        • $24,800 if you’re married filing jointly or qualifying widow(er)
                        </p>
                        <p>
                        • $18,650 if you’re head of household 
                        </p>
                        <p>
                        • $12,400 if you’re single or married filing separately
                        </p>   
                        <p>
                        <b>3.</b>  If line 1 is greater than line 2, subtract line 2 from line 1. If line 2 is greater than line 1, enter “-0-”.
                        </p>   
                        <p>
                        <b>4.</b>  Enter an estimate of your student loan interest, deductible IRA contributions, and certain other
                        adjustments (from Part II of Schedule 1 (Form 1040 or 1040-SR)). See Pub. 505 for more information.
                        </p>   
                        <p>
                        <b>5.</b>  <b>Add</b> lines 3 and 4. Enter the result here and in <b>Step 4(b)</b> of Form W-4.
                        </p>   
                    </div>
                </div>
            </div>

            <div class="comment-row content">
                <div class="col-lg-12 mb-5">
                    <h4><b>Married Filing Jointly or Qualifying Widow(er)</b></h4>
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2">Higher Paying Job
                                Annual Taxable
                                Wage & Salary
                                </th>
                                <th colspan="12">                            
                                    Lower Paying Job Annual Taxable Wage & Salary
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">
                                $0 - 9,999
                                </th>
                                <th scope="col">
                                $10,000 - 19,999
                                </th>
                                <th scope="col">
                                $20,000 - 29,999
                                </th>
                                <th scope="col">
                                $30,000 - 39,999
                                </th>
                                <th scope="col">
                                $40,000 - 49,999
                                </th>
                                <th scope="col">
                                $50,000 - 59,999
                                </th>
                                <th scope="col">
                                $60,000 - 69,999
                                </th>
                                <th scope="col">
                                $70,000 - 79,999
                                </th>
                                <th scope="col">
                                $80,000 - 89,999
                                </th>
                                <th scope="col">
                                $90,000 - 99,999
                                </th>
                                <th scope="col">
                                $100,000 - 109,999
                                </th>
                                <th scope="col">
                                $110,000 - 120,000
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                $0 - 9,999<br>$10,000 - 19,999<br>$20,000 - 29,999
                                </td>
                                <td>
                                $0<br>220<br>850
                                </td>
                                <td>
                                $220<br>1,220<br>1,900
                                </td>
                                <td>
                                $850<br>1,900<br>2,730
                                </td>
                                <td>
                                $900<br>2,100<br>2,930
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,240
                                </td>
                                <td>
                                $1,020<br>2,410<br>4,240
                                </td>
                                <td>
                                $1,210<br>3,410<br>5,240
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $30,000 - 39,999<br>$40,000 - 49,999<br>$50,000 - 59,999
                                </td>
                                <td>
                                900<br>1,020<br>1,020
                                </td>
                                <td>
                                2,100<br>2,220<br>2,220
                                </td>
                                <td>
                                2,930<br>3,050<br>3,050
                                </td>
                                <td>
                                3,130<br>3,250<br>3,250
                                </td>
                                <td>
                                3,250<br>3,370<br>3,570
                                </td>
                                <td>
                                3,250<br>3,570<br>4,570
                                </td>
                                <td>
                                3,440<br>4,570<br>5,570
                                </td>
                                <td>
                                4,440<br>5,570<br>6,570
                                </td>
                                <td>
                                5,440<br>6,570<br>7,570
                                </td>
                                <td>
                                6,440<br>7,570<br>8,570
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $60,000 - 69,999<br>$70,000 - 79,999<br>$80,000 - 99,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $100,000 - 149,999<br>$150,000 - 239,999<br>$240,000 - 259,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $260,000 - 279,999<br>$280,000 - 299,999<br>$300,000 - 319,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $320,000 - 364,999<br>$365,000 - 524,999<br>$525,000 and over
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 mb-5">
                    <h4><b>Single or Married Filing Separately</b></h4>
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2">Higher Paying Job
                                Annual Taxable
                                Wage & Salary
                                </th>
                                <th colspan="12">                            
                                    Lower Paying Job Annual Taxable Wage & Salary
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">
                                $0 - 9,999
                                </th>
                                <th scope="col">
                                $10,000 - 19,999
                                </th>
                                <th scope="col">
                                $20,000 - 29,999
                                </th>
                                <th scope="col">
                                $30,000 - 39,999
                                </th>
                                <th scope="col">
                                $40,000 - 49,999
                                </th>
                                <th scope="col">
                                $50,000 - 59,999
                                </th>
                                <th scope="col">
                                $60,000 - 69,999
                                </th>
                                <th scope="col">
                                $70,000 - 79,999
                                </th>
                                <th scope="col">
                                $80,000 - 89,999
                                </th>
                                <th scope="col">
                                $90,000 - 99,999
                                </th>
                                <th scope="col">
                                $100,000 - 109,999
                                </th>
                                <th scope="col">
                                $110,000 - 120,000
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                $0 - 9,999<br>$10,000 - 19,999<br>$20,000 - 29,999
                                </td>
                                <td>
                                $0<br>220<br>850
                                </td>
                                <td>
                                $220<br>1,220<br>1,900
                                </td>
                                <td>
                                $850<br>1,900<br>2,730
                                </td>
                                <td>
                                $900<br>2,100<br>2,930
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,240
                                </td>
                                <td>
                                $1,020<br>2,410<br>4,240
                                </td>
                                <td>
                                $1,210<br>3,410<br>5,240
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $30,000 - 39,999<br>$40,000 - 49,999<br>$50,000 - 59,999
                                </td>
                                <td>
                                900<br>1,020<br>1,020
                                </td>
                                <td>
                                2,100<br>2,220<br>2,220
                                </td>
                                <td>
                                2,930<br>3,050<br>3,050
                                </td>
                                <td>
                                3,130<br>3,250<br>3,250
                                </td>
                                <td>
                                3,250<br>3,370<br>3,570
                                </td>
                                <td>
                                3,250<br>3,570<br>4,570
                                </td>
                                <td>
                                3,440<br>4,570<br>5,570
                                </td>
                                <td>
                                4,440<br>5,570<br>6,570
                                </td>
                                <td>
                                5,440<br>6,570<br>7,570
                                </td>
                                <td>
                                6,440<br>7,570<br>8,570
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $60,000 - 69,999<br>$70,000 - 79,999<br>$80,000 - 99,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $100,000 - 149,999<br>$150,000 - 239,999<br>$240,000 - 259,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $260,000 - 279,999<br>$280,000 - 299,999<br>$300,000 - 319,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $320,000 - 364,999<br>$365,000 - 524,999<br>$525,000 and over
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 mb-5">
                    <h4><b>Head of Household</b></h4>
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2">Higher Paying Job
                                Annual Taxable
                                Wage & Salary
                                </th>
                                <th colspan="12">                            
                                    Lower Paying Job Annual Taxable Wage & Salary
                                </th>
                            </tr>
                            <tr>
                                <th scope="col">
                                $0 - 9,999
                                </th>
                                <th scope="col">
                                $10,000 - 19,999
                                </th>
                                <th scope="col">
                                $20,000 - 29,999
                                </th>
                                <th scope="col">
                                $30,000 - 39,999
                                </th>
                                <th scope="col">
                                $40,000 - 49,999
                                </th>
                                <th scope="col">
                                $50,000 - 59,999
                                </th>
                                <th scope="col">
                                $60,000 - 69,999
                                </th>
                                <th scope="col">
                                $70,000 - 79,999
                                </th>
                                <th scope="col">
                                $80,000 - 89,999
                                </th>
                                <th scope="col">
                                $90,000 - 99,999
                                </th>
                                <th scope="col">
                                $100,000 - 109,999
                                </th>
                                <th scope="col">
                                $110,000 - 120,000
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                $0 - 9,999<br>$10,000 - 19,999<br>$20,000 - 29,999
                                </td>
                                <td>
                                $0<br>220<br>850
                                </td>
                                <td>
                                $220<br>1,220<br>1,900
                                </td>
                                <td>
                                $850<br>1,900<br>2,730
                                </td>
                                <td>
                                $900<br>2,100<br>2,930
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,050
                                </td>
                                <td>
                                $1,020<br>2,220<br>3,240
                                </td>
                                <td>
                                $1,020<br>2,410<br>4,240
                                </td>
                                <td>
                                $1,210<br>3,410<br>5,240
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                                <td>
                                $1,870<br>4,070<br>5,900
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $30,000 - 39,999<br>$40,000 - 49,999<br>$50,000 - 59,999
                                </td>
                                <td>
                                900<br>1,020<br>1,020
                                </td>
                                <td>
                                2,100<br>2,220<br>2,220
                                </td>
                                <td>
                                2,930<br>3,050<br>3,050
                                </td>
                                <td>
                                3,130<br>3,250<br>3,250
                                </td>
                                <td>
                                3,250<br>3,370<br>3,570
                                </td>
                                <td>
                                3,250<br>3,570<br>4,570
                                </td>
                                <td>
                                3,440<br>4,570<br>5,570
                                </td>
                                <td>
                                4,440<br>5,570<br>6,570
                                </td>
                                <td>
                                5,440<br>6,570<br>7,570
                                </td>
                                <td>
                                6,440<br>7,570<br>8,570
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                                <td>
                                7,100<br>8,220<br>9,220
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $60,000 - 69,999<br>$70,000 - 79,999<br>$80,000 - 99,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $100,000 - 149,999<br>$150,000 - 239,999<br>$240,000 - 259,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $260,000 - 279,999<br>$280,000 - 299,999<br>$300,000 - 319,999
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            <tr>
                                <td>
                                $320,000 - 364,999<br>$365,000 - 524,999<br>$525,000 and over
                                </td>
                                <td>
                                1,020<br>1,020<br>1,060
                                </td>
                                <td>
                                2,220<br>2,220<br>3,260
                                </td>
                                <td>
                                3,050<br>3,240<br>5,090
                                </td>
                                <td>
                                3,440<br>4,440<br>6,290
                                </td>
                                <td>
                                4,570<br>5,570<br>7,420
                                </td>
                                <td>
                                5,570<br>6,570<br>8,420
                                </td>
                                <td>
                                6,570<br>7,570<br>9,420
                                </td>
                                <td>
                                7,570<br>8,570<br>10,420
                                </td>
                                <td>
                                8,570<br>9,570<br>11,420
                                </td>
                                <td>
                                9,570<br>10,570<br>12,420
                                </td>
                                <td>
                                10,220<br>11,220<br>13,260
                                </td>
                                <td>
                                10,220<br>11,240<br>13,460
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

                <div class="form-group col-lg-12">
                    <label for="">Choose Images for Driver’s License and Social Security Card or Passport, etc</label>
                    <input type="file" class="form-control image_upload" name="images[]" multiple accept="image/jpeg,image/png,image/jpg" id="upload-img"/>
                </div>
                <div class="img-thumbs img-thumbs-hidden col-lg-12" id="img-preview"></div>
                
                <!-- <div class="col-lg-12" style="text-align:center;">
                    <button class="btn btn-danger btn-md" id="send_manager" onclick="send_manager()">Submit to Hiring Manager <i class="fas fa-paper-plane"></i></button>
                </div>                 -->
                <div class="col-lg-12" style="text-align:center;">
                    <button id="send_doc_data" class="btn btn-danger btn-md">Generate PDF <i class="fas fa-paper-plane"></i></button>
                    <a id="doc_upload" class="btn btn-danger btn-md">Upload PDF file <i class="fas fa-upload"></i></a>
                    <a  id="real_upload" style="display:none" class="btn btn-danger btn-md" href="/upload_pdf"></a>
                    <input id="selected_doc" class="selected_doc" value="" hidden/>
                </div>    
            </div>
            
            
        </form>
               
        <nav>
            <ul class="pagination justify-content-center pagination-sm" style="float:right;">
            </ul>
        </nav>

    </div>
</section>

<script>
// cloning user_name
$(document).on('change','.doc_user_name', function(){
    $('.doc_user_name_clone').val($(this).val());
 });

//  cloning user_address
$(document).on('change','.doc_user_address', function(){
    $('.doc_user_address_clone').val($(this).val());
 });

//  cloning user_city
$(document).on('change','.doc_user_city', function(){
    $('.doc_user_city_clone').val($(this).val());
 });

//  cloning user_state
$(document).on('change','.doc_user_state', function(){
    $('.doc_user_state_clone').val($(this).val());
 });

//  cloning user_zip code
$(document).on('change','.doc_user_zip', function(){
    $('.doc_user_zip_clone').val($(this).val());
 });

//  cloning doc date
$(document).on('change','.doc_user_date', function(){
    $('.doc_user_date_clone').val($(this).val());
 });

//  cloning doc SSN
$(document).on('change','.doc_user_SSN', function(){
    $('.doc_user_SSN_clone').val($(this).val());
 });

var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    

  }
  
  
}

function sel_docusign() {
    var op_doc = document.getElementById("sel-docusign").value;

    var change1 = document.getElementById("change_1");
    var change2 = document.getElementById("change_2");

    if(op_doc == 'massachusetts') {
        change1.innerHTML = "$21.00";
        change2.innerHTML = "$31.50";
    }
    else if(op_doc == 'rhode') {
        change1.innerHTML = "$19.75";
        change2.innerHTML = "$29.63";
    }
}

function getPageList(totalPages, page, maxLength) {
  if (maxLength < 5) throw "maxLength must be at least 5";

  function range(start, end) {
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 2) >> 1;
  if (totalPages <= maxLength) {
    // no breaks in list
    return range(1, totalPages);
  }
  if (page <= maxLength - sideWidth - 1 - rightWidth) {
    // no break on left of page
    return range(1, maxLength - sideWidth - 1)
      .concat([0])
      .concat(range(totalPages - sideWidth + 1, totalPages));
  }
  if (page >= totalPages - sideWidth - 1 - rightWidth) {
    // no break on right of page
    return range(1, sideWidth)
      .concat([0])
      .concat(
        range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages)
      );
  }
  // Breaks on both sides
  return range(1, sideWidth)
    .concat([0])
    .concat(range(page - leftWidth, page + rightWidth))
    .concat([0])
    .concat(range(totalPages - sideWidth + 1, totalPages));
}

$(function() {
  // Number of items and limits the number of items per page
  var numberOfItems = $("#jar .content").length;
  console.log(numberOfItems);
  var limitPerPage = 1;
  // Total pages rounded upwards
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  // Number of buttons at the top, not counting prev/next,
  // but including the dotted buttons.
  // Must be at least 5:
  var paginationSize = 7;
  var currentPage;

  function showPage(whichPage) {
    if (whichPage < 1 || whichPage > totalPages) return false;
    currentPage = whichPage;
    $("#jar .content")
      .hide()
      .slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage)
      .show();
    // Replace the navigation items (not prev/next):
    $(".pagination li").slice(1, -1).remove();
    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>")
        .addClass(
          "page-item " +
            (item ? "current-page " : "") +
            (item === currentPage ? "active " : "")
        )
        .append(
          $("<a>")
            .addClass("page-link")
            .attr({
              href: "javascript:void(0)"
            })
            .text(item || "...")
        )
        .insertBefore("#next-page");
    });
    return true;
  }

  // Include the prev/next buttons:
  $(".pagination").append(
    $("<li>").addClass("page-item").attr({ id: "previous-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Prev")
    ),
    $("<li>").addClass("page-item").attr({ id: "next-page" }).append(
      $("<a>")
        .addClass("page-link")
        .attr({
          href: "javascript:void(0)"
        })
        .text("Next")
    )
  );
  // Show the page links
  $("#jar").show();
  showPage(1);

  // Use event delegation, as these items are recreated later
  $(
    document
  ).on("click", ".pagination li.current-page:not(.active)", function() {
    return showPage(+$(this).text());
  });
  $("#next-page").on("click", function() {
    return showPage(currentPage + 1);
  });

  $("#previous-page").on("click", function() {
    return showPage(currentPage - 1);
  });
  $(".pagination").on("click", function() {
    $("html,body").animate({ scrollTop: 0 }, 0);
  });
});

// send to hiring manager
function token() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}

$("#doc_upload").click((e)=>{
    $("#real_upload").attr("href",$("#real_upload").attr("href")+"/"+$("input#selected_doc").val());
    let link=document.getElementById("real_upload");
    link.click();
})

$('#send_doc_data').on('click', function (e) {
    e.preventDefault();
    var flag = 0;
    var location = document.getElementById('sel-docusign').value;

    // consumer_copy_free check
    var copy_free = $("input[type='radio'][name='report_free_copy']:checked").val();
    var consumer_copy_free = 0;
    if(copy_free == 'free_copy_yes') {
        consumer_copy_free = 1;
    } 
    else if(copy_free == 'free_copy_no') {
        consumer_copy_free = 0;
    }
    else {
        flag = 1;
    }

    // Are you legally authorized to work for this Company in the United States?
    var legal_yeno = $("input[type='radio'][name='legal_yeno']:checked").val();
    var legal_auth_state = 0;
    if(legal_yeno == 'legal_auth_yes') {
        legal_auth_state = 1;
    } 
    else if(legal_yeno == 'legal_auth_no') {
        legal_auth_state = 0;
    }
    else {
        flag = 1;
    }

    // Will you now or in the future require sponsorship by this Company to attain or maintain your employment status?
    var sponsor_yeno = $("input[type='radio'][name='sponsor_yeno']:checked").val();
    var require_sponsorship = 0;
    if(sponsor_yeno == 'sponsorship_yes') {
        require_sponsorship = 1;
    } 
    else if(sponsor_yeno == 'sponsorship_yes') {
        require_sponsorship = 0;
    }
    else {
        flag = 1;
    }

    //Type of work sought?
    var doc_type = $("input[type='radio'][name='full_part_temp']:checked").val();
    var type_work = 0;
    if(doc_type == 'full_time') {
        type_work = 0;
    } 
    else if(doc_type == 'part_time') {
        type_work = 1;
    }
    else if(doc_type == 'temp_time') {
        type_work = 2;
    }
    else {
        flag = 1;
    }
    

    // Single or Married filing separately - Married filing jointly - Head of household
    var checkedValue = $('.married_check:checked').val();
    var married_sep = 0;
    var married_join = 0;
    var married_head = 0;
    if(checkedValue == 'married_sep') {
        married_sep = 1;
    } 
    else if(checkedValue == 'married_join') {
        married_join = 1;
    }
    else if(checkedValue == 'married_head') {
        married_head = 1;
    }
    else {
        flag = 1;
    }

    var formData = $("form#send_hire").serializeArray();
    var image_files = $(".image_upload")[0].files;

    console.log(image_files);

    var doc_data = new FormData();

    console.log('doc_location: ', location);
    console.log('consumer_copy_free: ', consumer_copy_free);
    console.log(formData);

    doc_data.append('location', location);
    doc_data.append('consumer_copy_free', consumer_copy_free);
    doc_data.append('legal_auth_state', legal_auth_state);
    doc_data.append('require_sponsorship', require_sponsorship);    
    doc_data.append('type_work', type_work);
    doc_data.append('married_sep', married_sep);
    doc_data.append('married_join', married_join);
    doc_data.append('married_head', married_head);

    doc_data.append('doc_date', formData[0].value);
    doc_data.append('doc_name', formData[1].value);
    doc_data.append('doc_address', formData[2].value);
    doc_data.append('doc_city', formData[3].value);
    doc_data.append('doc_state', formData[4].value);
    doc_data.append('doc_zip', formData[5].value);
    doc_data.append('doc_other_name', formData[7].value);
    doc_data.append('SSN', formData[8].value);
    doc_data.append('doc_birth', formData[9].value);
    doc_data.append('DLN', formData[10].value);
    doc_data.append('applied_pos', formData[11].value);
    doc_data.append('doc_tele', formData[12].value);
    doc_data.append('doc_cell', formData[13].value);
    doc_data.append('doc_email', formData[14].value);
    doc_data.append('hear_info', formData[15].value);
    doc_data.append('avail_date', formData[18].value);
    doc_data.append('doc_first_name', formData[42].value);
    doc_data.append('doc_last_name', formData[43].value);

    doc_data.append('high_name', formData[20].value);
    doc_data.append('col_name', formData[21].value);
    doc_data.append('grad_name', formData[22].value);
    doc_data.append('high_CSC', formData[23].value);
    doc_data.append('col_CSC', formData[24].value);
    doc_data.append('grad_CSC', formData[25].value);
    doc_data.append('high_year', formData[26].value);
    doc_data.append('col_year', formData[27].value);
    doc_data.append('grad_year', formData[28].value);
    doc_data.append('high_degree', formData[29].value);
    doc_data.append('col_degree', formData[30].value);
    doc_data.append('grad_degree', formData[31].value);
    doc_data.append('high_study', formData[32].value);
    doc_data.append('col_study', formData[33].value);
    doc_data.append('grad_study', formData[34].value);
    doc_data.append('high_spec', formData[35].value);
    doc_data.append('col_spec', formData[36].value);
    doc_data.append('grad_spec', formData[37].value);
    doc_data.append('edu_add_info', formData[38].value);

    doc_data.append('certi_info1', formData[39].value);
    doc_data.append('certi_info2', formData[40].value);
    doc_data.append('certi_info3', formData[41].value);
    
    Object.keys(image_files).forEach(key=> {
        doc_data.append('images[]', image_files[key]);
    })
    
    
    // if(flag == 1){
    //     swal('Please check radio boxes and check boxes. You should fill all gaps.');
    // }

    token();
    
    $.ajax({
        url: "{{ route('hiring.send_hire') }}",
        type: 'POST',
        dataType: 'JSON',
        data: doc_data,
        processData: false,
        contentType: false,
        cache:false,
        success: function (result) {
            console.log(result);
            $('#selected_doc').val(result['sel_doc_id']);
            // console.log($('#selected_doc').val());
            // document.getElementById("selected_doc").value = result['sel_doc_id'];
            
            window.open('/doc_send_print', '_blank');
            // refresh();
            // swal(
            //     'Good job!',
            //     'Successfull Submitted!',
            //     'success'
            // );
        },
        error: function(err)
        {
            console.log(err);
        }
    });
});




</script>
@endsection