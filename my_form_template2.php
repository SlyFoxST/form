<?php
get_header();
?>



<?php
//Template Name: New Form Second
?>



<div id="p_prldr" style="z-index: 999999999">



    <div class="contpre">

        <span class="svg_anm"></span>

    </div>



</div>



<div class="sp-form-wrapper" id="spam_form">

    <div class="sp-form-wrapper-ins">



        <!-- form head ========================== -->

        <div class="step-line-wrap">

            <div class="step-line-block line-3">

                <div class="step-indicator-block step-indicator-1 active">

                    <p>

                        <span class="number">1</span>

                        <span class="title">פרטי התובע והנתבע</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

                <div class="step-indicator-block step-indicator-2">

                    <p>

                        <span class="number">2</span>

                        <span class="title">תיאור האירוע הנזק</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

                <div class="step-indicator-block step-indicator-3">

                    <p>

                        <span class="number">3</span>

                        <span class="title">הגשת תביעה</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

            </div>

        </div>

        <!-- end form head ========================== -->



        <form class="forms-block" action="<?php echo admin_url('admin-ajax.php'); ?>" name="sp_form">

            <input type="hidden" name="action" value="register_second_lid">

            <!-- step 1 -->

            <div class="step-page step_1 block">

                <div class="title-block">

                    <h1>טופס הגשת תביעה קטנה מקוון</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>

                    </div>

                </div>

                <div class="info-box-arrow hidden" data-for="infobox">

                    <div class="down-arrow"></div>

                </div>

                <div class="info-box hidden"></div>

                <div class="title-block hidden" data-for="infobox">

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי תובע</p>

                    </div>

                </div>

                <div class="form_box" data-person-num="1" data-person-status="active">

                    <div class="edit_and_trash hidden">

                        <div class="delete_user" data-for-person="1"></div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">ת.ז<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_passport[]" data-name="ת.ז" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row"></div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם פרטי <u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_first_name[]" data-name="שם פרטי" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם משפחה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_last_name[]" data-name="שם משפחה" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right"> עיר<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_city[]" data-name="עיר" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">רחוב  <u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_street[]" data-name="רחוב" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex three-row-wrap">

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_col_4"> מספר<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_numb_flour[]" data-name="מספר" required />

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">דירה</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_numb_house[]" data-name="מספר דירה">

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name"> מיקוד</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="client_index[]" data-name="מיקוד">

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                                <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right"> טלפון נייד<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="client_phone[]" data-name="טלפון נייד" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">  פקס</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="client_fax[]" data-name="פקס">

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">  טלפון נוסף</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="client_second_phone[]" data-name="טלפון נוסף">

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name"> דואל<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='email' name="client_email[]" data-name="דואל" required>

                                    </div>

                                </div>

                                <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="sp-save-line">

                        <a class="btn save_btn hidden">ערוך</a>

                    </div>

                </div>

                <div class="sp-plus-line">

                    <p>

                        <a class="pls_btn sp-plus"></a>

                        <span class="bold-text">הוסף תובע:</span>

                        <span>אם אינך התובע היחיד</span>

                        <a class="pls_btn important-text">לחץ להוספת תובע נוסף</a>

                    </p>

                </div>

            </div>



            <!-- step 2 -->

            <div class="step-page step_2">

                <div class="title-block">

                    <h1>טופס הגשת תביעה קטנה מקוון</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>

                    </div>

                </div>

                <div class="info-box-arrow">

                    <div class="down-arrow"></div>

                </div>

                <div class="info-box"></div>

                <div class="title-block">

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי הנתבע</p>

                    </div>

                </div>

                <div class="form_box" data-person-num="1" data-person-status="active">

                    <div class="edit_and_trash hidden">

                        <div class="delete_user" data-for-person="1"></div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row">

                                <div class="vertical-center adapt-wrap-flex-767 adapt-wrap-flex adapt-center-flex">

                                    <div class="text-block left-padding">מקור ההודעה:</div>

                                    <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_1" value="0" checked />

                                    <label for="step2_1_radio1_1">מס׳ טלפון</label>

                                    <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_2" value="1" />

                                    <label for="step2_1_radio1_2">דוא״ל</label>

                                </div>

                            </div>

                            <div class="half-row input-parent" data-step-row="1">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="left-text">מס׳ טלפון<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step2_input1[]" data-name="מס׳ טלפון" >

                                    </div>

                                </div>

                                <div class="text-invalid"></div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent hidden" data-step-row="2">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>דוא״ל<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step2_input2[]" data-name="דוא״ל"  >

                                    </div>

                                </div>

                                <div class="text-invalid"></div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="vertical-center adapt-wrap-flex adapt-center-flex bold-text bottom-padding">

                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_1" value="0" checked />

                            <label for="step2_1_radio2_1">אדם פרטי</label>

                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_2" value="1" />

                            <label for="step2_1_radio2_2">חברה</label>

                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_3" value="2" />

                            <label for="step2_1_radio2_3">עוסק מורשה</label>

                        </div>

                    </div>

                    <div class="full-row" data-step-row="3">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">ת.ז</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="passport[]" data-name="ת.ז">

                                    </div>

                                </div>

                                <div class="text-invalid">מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                            <div class="half-row"></div>

                        </div>

                    </div>

                    <div class="full-row" data-step-row="4">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם פרטי <u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="first_name[]" data-name="שם פרטי" >

                                    </div>

                                </div>

                                <div class="text-invalid">אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם משפחה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="last_name[]" data-name="שם משפחה" >

                                    </div>

                                </div>

                                <div class="text-invalid">אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row hidden" data-step-row="5">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>.ח.פ<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input1_n[]" data-name=".ח.פ" required disabled>

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                                <a href="https://ica.justice.gov.il/GenericCorporarionInfo/SearchCorporation?unit=8" target="_blank" class="text-link">לחץ לאיתור ח.פ</a>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם החברה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input2_1[]" data-name="שם החברה"  disabled>

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row hidden" data-step-row="6">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>ת.ז/ עוסק מורשה</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input3_1[]" data-name="ת.ז/ עוסק מורשה"  disabled>

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם עוסק מורשה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input4_1[]" data-name="שם עוסק מורשה" required disabled>

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right"> עיר<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="city[]" data-name="עיר" required>

                                    </div>

                                </div>

                                <div class="text-invalid">אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">רחוב  <u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="street[]" data-name="רחוב" required>

                                    </div>

                                </div>

                                <div class="text-invalid">אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex three-row-wrap">

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_col_4"> מספר<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="numb_flour[]" data-name="מספר" required />

                                    </div>

                                </div>

                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">דירה</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="numb_house[]" data-name="מספר דירה">

                                    </div>

                                </div>

                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="three-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name"> מיקוד</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="index[]" data-name="מיקוד">

                                    </div>

                                </div>

                                <div class="text-invalid">המיקוד שהזנת לא תקין</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                                <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right"> טלפון נייד</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="phone[]" data-name="טלפון נייד">

                                    </div>

                                </div>

                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">  פקס</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="fax[]" data-name="פקס">

                                    </div>

                                </div>

                                <div class="text-invalid">מספר הפקס שהזנת לא נכון</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">טל׳ נוסף</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="second_phone[]" data-name="טל׳ נוסף">

                                    </div>

                                </div>

                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name">דוא״ל</label>

                                    <div class="input-wrapper">

                                        <input type='email' name="email[]" data-name="דוא״ל">

                                    </div>

                                </div>

                                <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="sp-save-line">

                        <a class="btn save_btn hidden">ערוך</a>

                    </div>

                </div>

                <div class="sp-plus-line">

                    <p>

                        <a class="pls_btn sp-plus"></a>

                        <span class="bold-text"> הוסף נתבע:</span>

                        <a class="pls_btn important-text">לחץ להוספת נתבע נוסף</a>

                    </p>

                </div>

            </div>



            <!-- step 3 -->

            <div class="step-page step_3">

                <div class="title-block">

                    <h1>טופס הגשת תביעה קטנה מקוון</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את תיאור האירוע והנזק</p>

                    </div>

                </div>

                <div class="full-row input-parent" data-step-row="1">

                    <div class="input-block vertical-center big-input">

                        <label>סוג תביעה<u>*</u></label>

                        <div class="input-wrapper">

                            <select name="step3_select1" id="step3_select1">
                                <?php
                                $args = array(
                                 'post_type' => 'cases',
                                 'posts_per_page' => -1,
                                 'orderby' => ASC,
                             );

                                $q = new WP_Query($args);

                                if ($q->have_posts()) {

                                 while ($q->have_posts()) {
                                  $q->the_post();
                                  ?>
                                  <option value="<?php the_title(); ?>"><?php the_title(); ?></option>

                                  <?php
                              }
                          }
                          wp_reset_postdata();
                          ?>

                      </select>

                  </div>

              </div>

              <div class="text-empty">שדה זה הינו שדה חובה</div>

          </div>

          <div class="full-row input-parent" data-step-row="2">

             <div class="input-block vertical-center big-input long-input">

              <label for="step3_input2">הספק הינו<u>*</u></label>

              <div class="input-wrapper">

               <input type="text" name="step3_input2" id="step3_input2" placeholder="שם ספק" required />

           </div>

       </div>

       <div class="text-empty">שדה זה הינו שדה חובה</div>

   </div>

   <div class="full-row input-parent bottom-line" data-step-row="3">

     <div class="input-block vertical-center big-input long-input">

      <label for="step3_input3">השולח עוסק ב<u>*</u></label>

      <div class="input-wrapper">

       <input type="text" name="step3_input3" id="step3_input3" placeholder="לדוגמא: טיולים, הלוואות וכו'" required />

   </div>

</div>

<div class="text-empty">שדה זה הינו שדה חובה</div>

</div>

<div class="full-row bottom-line" data-step-row="4">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex">

  <div class="wide-left-padding">האם נרשמת אל שירותי ההודעות של השולח (הנתבע)?</div>

  <input type="radio" name="step3_radio1" class="lead_radio" id="step3_radio1_1" value="1" checked />

  <label for="step3_radio1_1">כן</label>

  <input type="radio" name="step3_radio1" class="lead_radio" id="step3_radio1_2" value="0" />

  <label for="step3_radio1_2">לא</label>

</div>

</div>

<div class="full-row bottom-line input-parent" data-step-row="5">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex">

  <div class="little-row input-parent">

   <div class="input-block vertical-center adapt-center-flex">

    <label for="step3_input4">תאריך:</label>

    <div class="sp-calendar">

     <input type="text" name="step3_input4" id="step3_input4" required data-date-picker data-checkbox-targ="1" />

 </div>

</div>

<div class="text-empty">שדה זה הינו שדה חובה</div>

</div>

<div class="big-row">

   <div class="vertical-center adapt-center-flex">

    <input type="checkbox" name="step3_check1" id="step3_check1" data-checkbox="1" />

    <label for="step3_check1">לא ידוע</label>

</div>

</div>

</div>

</div>

<div class="full-row bottom-line vertical-center adapt-wrap-flex adapt-center-flex" data-step-row="6">

 <div class="little-row">

  <div class="vertical-center adapt-center-flex">

   <div class="text-block">האם בוצעה בקשת הסרה מהנתבע?</div>

</div>

</div>

<div class="big-row">

  <div class="vertical-center adapt-center-flex">

   <input type="radio" name="step3_radio2" class="lead_radio" id="step3_radio2_1" value="1" checked />

   <label for="step3_radio2_1">כן</label>

   <input type="radio" name="step3_radio2" class="lead_radio" id="step3_radio2_2" value="0" />

   <label for="step3_radio2_2">לא</label>

</div>

</div>

</div>

<div class="full-row bottom-line input-parent" data-step-row="7">

 <div class="flex adapt-wrap-flex adapt-center-flex">

  <div class="little-row input-parent">

   <div class="input-block vertical-center adapt-center-flex">

    <label for="step3_input5">תאריך:</label>

    <div class="sp-calendar">

     <input type="text" name="step3_input5" id="step3_input5" required data-date-picker data-checkbox-targ="2" />

 </div>

</div>

<div class="text-empty">שדה זה הינו שדה חובה</div>

</div>

<div class="big-row">

   <div class="vertical-center adapt-center-flex">

    <input type="checkbox" name="step3_check2" id="step3_check2" data-checkbox="2" />

    <label for="step3_check2">לא ידוע</label>

</div>

</div>

</div>

</div>

<div class="full-row bottom-line" data-step-row="8">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex file-block">

  <div class="little-row">

   <div class="vertical-center adapt-center-flex">

    <div class="text-block">צילום מסך של בקשת ההסרה</div>

</div>

</div>

<div class="big-row input-parent">

   <div class="vertical-center adapt-center-flex">

    <input type="file" name="step3_file1" id="step3_file1" required  />

    <label for="step3_file1" class="btn">העלה קובץ</label>

</div>

<div class="text-empty">חובה לצרף צילום מסך של בקשת ההסרה</div>

</div>

</div>

</div>

<div class="full-row bottom-line" data-step-row="9">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex">

  <div class="little-row">

   <div class="vertical-center adapt-center-flex">

    <div class="text-block">האם בוצעה בקשת הסרה נוספת מהנתבע?</div>

</div>

</div>

<div class="big-row">

   <div class="vertical-center adapt-center-flex">

    <input type="radio" name="step3_radio3" class="lead_radio" id="step3_radio3_1" value="1" checked />

    <label for="step3_radio3_1">כן</label>

    <input type="radio" name="step3_radio3" class="lead_radio" id="step3_radio3_2" value="0" />

    <label for="step3_radio3_2">לא</label>

</div>

</div>

</div>

</div>

<div class="full-row bottom-line input-parent" data-step-row="10">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex">

  <div class="little-row input-parent">

   <div class="input-block vertical-center adapt-center-flex">

    <label for="step3_input6">תאריך:</label>

    <div class="sp-calendar">

     <input type="text" name="step3_input6" id="step3_input6" required  data-date-picker data-checkbox-targ="3" />

 </div>

</div>

<div class="text-empty">שדה זה הינו שדה חובה</div>

</div>

<div class="big-row">

   <div class="vertical-center adapt-center-flex">

    <input type="checkbox" name="step3_check3" id="step3_check3" data-checkbox="3" />

    <label for="step3_check3">לא ידוע</label>

</div>

</div>

</div>

</div>

<div class="full-row bottom-line input-parent" data-step-row="11">

 <div class="vertical-center adapt-wrap-flex adapt-center-flex file-block">

  <div class="little-row">

   <div class="vertical-center adapt-center-flex">

    <div class="text-block">צילום מסך של בקשת ההסרה</div>

</div>

</div>

<div class="big-row">

   <div class="vertical-center adapt-center-flex">

    <input type="file" name="step3_file2" id="step3_file2" required />

    <label for="step3_file2" class="btn">העלה קובץ</label>

</div>
<div class="text-empty">חובה לצרף צילום מסך של בקשת ההסרה</div>

</div>

</div>

</div>



<div class="full-row input-parent input-msg-pr" data-step-row="21">
    <div class="input-wrapper inline-input">

       <input type="number" name="step3_input8" id="step3_input8" required data-tax="3"  />

   </div>
</div>

<div class="full-row input-parent input-msg-pr" data-step-row="14">

 <div class="vertical-center adapt-wrap-flex style-default">

    <label for="step3_input9">מס׳ ההודעות שהתקבלו:</label>


    <div class="text-block right-padding">סה"כ מספר ההודעות שהתקבלו לאחר ההסרה הראשונה

       <u>*</u></div>

   </div>

   <div class="text-empty">שדה זה הינו שדה חובה</div>

</div>

<div class="full-row input-parent hidden" data-step-row="15">

    <div class="vertical-center adapt-wrap-flex style-default">

        <label for="step3_input9">מס׳ ההודעות שהתקבלו:</label>

                      <!--   <div class="input-wrapper inline-input">
                      
                          <input type="number" name="step3_input9" id="step3_input9" required disabled data-tax="9" />
                      
                      </div> -->

                      <div class="text-block right-padding">סה״כ מס׳ ההודעות שהתקבלו<u>*</u></div>

                  </div>

                  <div class="text-empty">שדה זה הינו שדה חובה</div>

              </div>
 <div style="clear:both"></div>             

              <div class="full-row input-parent  input-textarea" data-step-row="16" style="display: block">

                <div class="input-block big-input long-input row-start">

                    <label for="step3_textarea1">נימוקי התביעה</label>

                    <textarea name="step3_textarea1" id="step3_textarea1" class="round-border" maxlength="50000"></textarea>

                </div>

            </div>

            <div class="full-row row-start adapt-wrap-flex adapt-center-flex wrap-row" data-step-row="17">

                <div class="little-row blocked-width input-parent">

                    <div class="middle-line margin-y">

                        <p class="center-text big-text">מסמכים תומכים</p>

                    </div>

                    <div class="center-text">צרף לתביעתך כל מסמך אשר תומך בגרסתך לדוגמא: (קבלות, מסמכים רפואיים ועוד...)</div>

                    <div class="vertical-center row-center file-block">

                        <div class="file-icon">צרף מסמכים</div>

                        <input type="file" name="step3_file4" id="step3_file4" />

                        <label for="step3_file4" class="btn">העלה קובץ</label>

                    </div>

                    <div class="text-empty">שדה זה הינו שדה חובה</div>

                </div>

                <div class="big-row full-row wide-right-padding bottom-big-column">

                    <div class="middle-line margin-y">

                        <p class="center-text big-text">ברצוני שביהמ"ש יפסוק עבורי</p>

                    </div>

                    <div class="full-row input-parent">

                        <div class="input-block vertical-center big-input shackel">

                            <label for="step3_input10">נזק כספי <u>*</u></label>

                            <div class="input-wrapper">

                                <input type="text" name="step3_input10" id="step3_input10" required disabled data-tax-summ="2" data-tax-price="1000" data-tax="4" />

                            </div>

                        </div>

                        <div class="text-empty">שדה זה הינו שדה חובה</div>

                    </div>

                    <div class="full-row input-parent">

                        <div class="input-block vertical-center big-input shackel">

                            <label for="step3_input11">הוצאות משפטיות</label>

                            <div class="input-wrapper">

                                <input type="text" name="step3_input11" id="step3_input11" data-tax="5" />

                            </div>

                        </div>

                    </div>

                    <div class="full-row input-parent">

                        <div class="input-block vertical-center big-input after-shackel">

                            <label>בחר בית משפט<u>*</u></label>

                            <div class="input-wrapper">

                                <select name="step3_select2" id="step3_select2" required data-pr="1" data-tax="7">

                                    <?php
                                    $args = array(
                                     'post_type' => 'judge',
                                     'posts_per_page' => -1,
                                     'orderby' => ASC,
                                 );

                                    $q = new WP_Query($args);

                                    if ($q->have_posts()) {

                                     while ($q->have_posts()) {
                                      $q->the_post();
                                      ?>
                                      <option value="<?php echo get_the_title();?>" data-select-price="<?php echo get_post_meta(get_the_ID(), 'price', true); ?>" ><?php the_title(); ?></option>

                                      <?php
                                  }
                              }
                              wp_reset_postdata();
                              ?>

                          </select>

                      </div>

                  </div>

                  <div class="text-empty">שדה זה הינו שדה חובה</div>

              </div>

          </div>

      </div>

      <div class="full-row vertical-center row-center wide-bottom-padding flex-column" data-step-row="20">

        <div class="bottom-msg-2 center-text important-text">
            איך לבחור ביהמ"ש? 
        </div>
        <div class="bottom-msg-2 center-text important-text">
         תביעה קטנה תוגש ע"פ מקום מגוריו/עסקו של הנתבע או מקום המעשה/מחדל שבגינו מוגשת התביעה. אם עניין התביעה פרסום/סחר באינטרנט יש להגיש לפי מקום מגוריו/עסקו של הנתבע או התובע
     </div>

 </div>

 <div class="full-row vertical-center row-center" data-step-row="18">

    <div class="bottom-msg center-text big-text important-text" style="font-weight: 500">ניתן לתבוע עד סכום של 33,900 ש"ח</div>

</div>

<div class="full-row vertical-center row-center hidden" data-step-row="19">

    <div class="bottom-msg center-text big-text important-text">לא ניתן לתבוע במידה ובוצעה הרשמה ולא בוצעה הסרה.</div>

</div>

</div>



<!-- step 4 -->

<div class="step-page step_4">

    <div class="title-block">

        <h1>טופס הגשת כתב תביעה קטנה מקוון</h1>

        <div class="middle-line">

            <p class="center-text big-text">הזן את סכום התביעה</p>

        </div>

    </div>

    <div class="result-row-wrap input-parent">

        <div class="result-row big-text">

            <div class="result-row-ins row-center vertical-center shackel">

                <label for="step4_input1">סכום התביעה</label>

                <div class="input-wrapper">

                    <input type="text" name="step4_input1" id="step4_input1" required data-tax-summ="3" data-tax="6" data-max-number="33900" />

                </div>

            </div>

        </div>

        <div class="text-empty">שדה זה הינו שדה חובה</div>
        <div class="text-invalid">ניתן להגיש תביעה עד סכום של 33,900 ש"ח</div>

    </div>

    <div class="title-block">

        <div class="middle-line">

            <p class="center-text big-text">עלויות הגשת תביעה</p>

        </div>

    </div>

    <div class="pricing-rules-wrap">

        <div class="right-block">

            <div class="frame-block-wrap">

                <div class="frame-block">

                    <div class="full-row little-text input-parent">

                        <input type="checkbox" name="step4_check1" id="step4_check1" required />

                        <label for="step4_check1"><span data-href-url="">אני מסכים להגשת כתב תביעה</span></label>

                        <div class="text-empty">שדה זה הינו שדה חובה</div>

                    </div>

                    <div class="full-row little-text input-parent">

                        <input type="checkbox" name="step4_check2" id="step4_check2" required />

                        <label for="step4_check2"><span data-href-url="">אני מסכים לתקנון <a href="http://oedo.co.il/or.com/regulations/" class="link-check" target="_blank">האתר</a></span></label>

                        <div class="text-empty">שדה זה הינו שדה חובה</div>

                    </div>

                    <div class="full-row little-text input-parent">

                        <input type="checkbox" name="step4_check3" id="step4_check3" required />

                        <label for="step4_check3"><span data-href-url="">התובע לא הגיש יותר מ-5 תביעות קטנות לביהמ”ש</span></label>

                        <div class="text-empty">שדה זה הינו שדה חובה</div>

                    </div>

                    <div class="full-row little-text input-parent">

                        <input type="checkbox" name="step4_check4" id="step4_check4" required />

                        <label for="step4_check4"><span data-href-url="">התובע הינו אדם פרטי (לא חברה)</span></label>

                        <div class="text-empty">שדה זה הינו שדה חובה</div>

                    </div>

                    <div class="frame-line"></div>

                    <div class="full-row after-check padding-y">

                        <span class="bold-text">דמי טיפול ופתיחת תיק:</span>

                        <div class="block-inline"><span>₪</span><span data-pr-summ="1"></span></div>

                    </div>

                    <div class="frame-line"></div>

                    <div class="full-row after-check padding-y" data-tax="8" data-tax-price="100">

                        <span class="bold-text">תשלום אגרת בית המשפט:</span>

                        <div class="block-inline"><span>₪</span><span data-tax="2" data-tax-summ="4"></span></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="left-block">

            <div class="frame-block-wrap bold-frame-block">

                <div class="frame-block">

                    <div class="center-text big-text2">

                        סה״כ לתשלום

                    </div>

                    <div class="center-text big-text">

                        <input type="hidden" name="pay_sum">

                        <span>₪</span><span data-tax-summ="1" id="sum_for_pay"></span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



</form>



<!-- down buttons block ================================= -->

<div class="lead-btn-block">

    <button type="button" class="btn-step-prev hidden-btn" id="step_prev">

        <span class="triangle-right"></span>

        <span class="text">חזור</span>

    </button>

    <button type="button" class="btn-step-next" id="step_next">

        <span class="text">המשך לפרטי הנתבע</span>

        <span class="triangle-left"></span>

    </button>

    <button type="button" class="btn_submit hidden-btn" id="sp_btn_submit">

        <span class="text">המשך לתשלום</span>

        <span class="triangle-left"></span>

    </button>

</div>

<!-- end down buttons block ============================= -->



</div>

</div>







<!--<div class="sp-form-wrapper" id="spam_form">-->

    <!--    <div class="sp-form-wrapper-ins">-->

        <!---->



        <!---->

        <!--        <form class="forms-block" name="sp_form" action="--><?php //echo admin_url('admin-ajax.php'); ?><!--">-->

            <!--            <input type="hidden" name="action" value="register_second_lid">-->

            <!---->

            <!--            <!-- step 1 -->

            <!--            <div class="step-page step_1 block">-->

                <!--                <div class="title-block">-->

                    <!--                    <h1>טופס הגשת תביעה קטנה מקוון</h1>-->

                    <!--                    <div class="middle-line">-->

                        <!--                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>-->

                        <!--                    </div>-->

                        <!--                </div>-->

                        <!--                <div class="info-box-arrow">-->

                            <!--                    <div class="down-arrow"></div>-->

                            <!--                </div>-->

                            <!--                <div class="info-box"></div>-->

                            <!--                <div class="title-block">-->

                                <!--                    <div class="middle-line">-->

                                    <!--                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>-->

                                    <!--                    </div>-->

                                    <!--                </div>-->

                                    <!--                <div class="form_box" data-person-num="1" data-person-status="active">-->

                                        <!--                    <div class="edit_and_trash hidden">-->

                                            <!--                        <div class="delete_user" data-for-person="1"></div>-->

                                            <!--                    </div>-->

                                            <!--                    <div class="full-row">-->

                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                    <!--                            <div class="half-row input-parent">-->

                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                            <!--                                    <label class="span_data_name_right">ת.ז<u>*</u></label>-->

                                                            <!--                                    <div class="input-wrapper">-->

                                                                <!--                                        <input type='number' name="client_passport[]" data-name="ת.ז" required>-->

                                                                <!--                                    </div>-->

                                                                <!--                                </div>-->

                                                                <!--                                <div class="text-invalid">הת.ז שהזנת לא תקין</div>-->

                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                <!--                            </div>-->

                                                                <!--                            <div class="half-row"></div>-->

                                                                <!--                        </div>-->

                                                                <!--                    </div>-->

                                                                <!--                    <div class="full-row">-->

                                                                    <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                        <!--                            <div class="half-row input-parent">-->

                                                                            <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                <!--                                    <label>שם פרטי <u>*</u></label>-->

                                                                                <!--                                    <div class="input-wrapper">-->

                                                                                    <!--                                        <input type='text' name="client_first_name[]" data-name="שם פרטי" required>-->

                                                                                    <!--                                    </div>-->

                                                                                    <!--                                </div>-->

                                                                                    <!--                                <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->

                                                                                    <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                    <!--                            </div>-->

                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                            <!--                                    <label>שם משפחה<u>*</u></label>-->

                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                <!--                                        <input type='text' name="client_last_name[]" data-name="שם משפחה" required>-->

                                                                                                <!--                                    </div>-->

                                                                                                <!--                                </div>-->

                                                                                                <!--                                <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->

                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                <!--                            </div>-->

                                                                                                <!--                        </div>-->

                                                                                                <!--                    </div>-->

                                                                                                <!--                    <div class="full-row">-->

                                                                                                    <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                        <!--                            <div class="half-row input-parent">-->

                                                                                                            <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                <!--                                    <label class="span_data_name_right"> עיר<u>*</u></label>-->

                                                                                                                <!--                                    <div class="input-wrapper">-->

                                                                                                                    <!--                                        <input type='text' name="client_city[]" data-name="עיר" required>-->

                                                                                                                    <!--                                    </div>-->

                                                                                                                    <!--                                </div>-->

                                                                                                                    <!--                                <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->

                                                                                                                    <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                    <!--                            </div>-->

                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                            <!--                                    <label class="span_data_name">רחוב  <u>*</u></label>-->

                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                <!--                                        <input type='text' name="client_street[]" data-name="רחוב" required>-->

                                                                                                                                <!--                                    </div>-->

                                                                                                                                <!--                                </div>-->

                                                                                                                                <!--                                <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->

                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                <!--                            </div>-->

                                                                                                                                <!--                        </div>-->

                                                                                                                                <!--                    </div>-->

                                                                                                                                <!--                    <div class="full-row">-->

                                                                                                                                    <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex three-row-wrap">-->

                                                                                                                                        <!--                            <div class="three-row input-parent">-->

                                                                                                                                            <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                <!--                                    <label class="span_data_name_col_4"> מספר</label>-->

                                                                                                                                                <!--                                    <div class="input-wrapper">-->

                                                                                                                                                    <!--                                        <input type='number' name="client_numb_flour[]" data-name="מספר">-->

                                                                                                                                                    <!--                                    </div>-->

                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                    <!--                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->

                                                                                                                                                    <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                    <!--                            <div class="three-row input-parent">-->

                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                            <!--                                    <label class="span_data_name">דירה</label>-->

                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                <!--                                        <input type='number' name="client_numb_house[]" data-name="מספר דירה">-->

                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                <!--                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->

                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                <!--                            <div class="three-row input-parent">-->

                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                        <!--                                    <label class="span_data_name"> מיקוד</label>-->

                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                            <!--                                        <input type='number' name="client_index[]" data-name="מיקוד">-->

                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                            <!--                                <div class="text-invalid">המיקוד שהזנת לא תקין</div>-->

                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                            <!--                                <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>-->

                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                            <!--                    <div class="full-row">-->

                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                            <!--                                    <label class="span_data_name_right"> טלפון נייד<u>*</u></label>-->

                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                <!--                                        <input type='tel' name="client_phone[]" data-name="טלפון נייד" required>-->

                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                <!--                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->

                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                        <!--                                    <label class="span_data_name">  פקס</label>-->

                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                            <!--                                        <input type='tel' name="client_fax[]" data-name="פקס">-->

                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                            <!--                                <div class="text-invalid">מספר הפקס שהזנת לא נכון</div>-->

                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                            <!--                    <div class="full-row">-->

                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                            <!--                                    <label class="span_data_name_right">  טלפון נוסף</label>-->

                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                <!--                                        <input type='tel' name="client_second_phone[]" data-name="טלפון נוסף">-->

                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                <!--                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name"> דואל<u>*</u></label>-->

                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                            <!--                                        <input type='email' name="client_email[]" data-name="דואל" required>-->

                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>-->

                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                            <!--                    <div class="sp-save-line">-->

                                                                                                                                                                                                                                                <!--                        <a class="btn save_btn hidden">ערוך</a>-->

                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                <!--                <div class="sp-plus-line">-->

                                                                                                                                                                                                                                                    <!--                    <p>-->

                                                                                                                                                                                                                                                        <!--                        <a class="pls_btn sp-plus"></a>-->

                                                                                                                                                                                                                                                        <!--                        <span class="bold-text"> הוסף תובע:</span>-->

                                                                                                                                                                                                                                                        <!--                        <span>אם אינך התובע היחיד</span>-->

                                                                                                                                                                                                                                                        <!--                        <a class="pls_btn important-text">לחץ להוספת תובע נוסף</a>-->

                                                                                                                                                                                                                                                        <!--                    </p>-->

                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                        <!--            </div>-->

                                                                                                                                                                                                                                                        <!---->

                                                                                                                                                                                                                                                        <!--            <!-- step 2 -->

                                                                                                                                                                                                                                                        <!--            <div class="step-page step_2">-->

                                                                                                                                                                                                                                                            <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                <!--                    <h1>טופס הגשת תביעה קטנה מקוון</h1>-->

                                                                                                                                                                                                                                                                <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                    <!--                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>-->

                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                    <!--                <div class="info-box-arrow">-->

                                                                                                                                                                                                                                                                        <!--                    <div class="down-arrow"></div>-->

                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                        <!--                <div class="info-box"></div>-->

                                                                                                                                                                                                                                                                        <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                            <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                <!--                        <p class="center-text big-text">אנא מלאו את פרטי הנתבע</p>-->

                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                <!--                <div class="form_box" data-person-num="1" data-person-status="active">-->

                                                                                                                                                                                                                                                                                    <!--                    <div class="edit_and_trash hidden">-->

                                                                                                                                                                                                                                                                                        <!--                        <div class="delete_user" data-for-person="1"></div>-->

                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                        <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                            <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row">-->

                                                                                                                                                                                                                                                                                                    <!--                                <div class="vertical-center adapt-wrap-flex-767 adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                        <!--                                    <div class="text-block left-padding">מקור ההודעה:</div>-->

                                                                                                                                                                                                                                                                                                        <!--                                    <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_1" value="0" checked />-->

                                                                                                                                                                                                                                                                                                        <!--                                    <label for="step2_1_radio1_1">מס׳ טלפון</label>-->

                                                                                                                                                                                                                                                                                                        <!--                                    <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_2" value="1" />-->

                                                                                                                                                                                                                                                                                                        <!--                                    <label for="step2_1_radio1_2">דוא״ל</label>-->

                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                        <!--                            <div class="half-row input-parent" data-step-row="1">-->

                                                                                                                                                                                                                                                                                                            <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                <!--                                    <label class="left-text">מס׳ טלפון<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                    <!--                                        <input type='text' name="step2_input1" data-name="מס׳ טלפון" required>-->

                                                                                                                                                                                                                                                                                                                    <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                    <!--                                <div class="text-invalid"></div>-->

                                                                                                                                                                                                                                                                                                                    <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent hidden" data-step-row="2">-->

                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                            <!--                                    <label>דוא״ל<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="step2_input2" data-name="דוא״ל" required disabled>-->

                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-invalid"></div>-->

                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="vertical-center adapt-wrap-flex adapt-center-flex bold-text bottom-padding">-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_1" value="0" checked />-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <label for="step2_1_radio2_1">אדם פרטי</label>-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_2" value="1" />-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <label for="step2_1_radio2_2">חברה</label>-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step2_1_radio2" class="lead_radio" id="step2_1_radio2_3" value="2" />-->

                                                                                                                                                                                                                                                                                                                                        <!--                            <label for="step2_1_radio2_3">עוסק מורשה</label>-->

                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="full-row" data-step-row="3">-->

                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name_right">ת.ז</label>-->

                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='number' name="client_passport[]" data-name="ת.ז">-->

                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">הת.ז שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="half-row"></div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row" data-step-row="4">-->

                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label>שם פרטי <u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="first_name[]" data-name="שם פרטי" required>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label>שם משפחה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='text' name="last_name[]" data-name="שם משפחה" required>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row hidden" data-step-row="5">-->

                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label>.ח.פ<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="step3_input1" data-name=".ח.פ" required disabled>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <a href="https://ica.justice.gov.il/GenericCorporarionInfo/SearchCorporation?unit=8" target="_blank" class="text-link">לחץ לאיתור ח.פ</a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label>שם החברה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='text' name="step3_input2" data-name="שם החברה" required disabled>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row hidden" data-step-row="6">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label>ת.ז/ עוסק מורשה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="step3_input3" data-name="ת.ז/ עוסק מורשה" required disabled>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label>שם עוסק מורשה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='text' name="step3_input4" data-name="שם עוסק מורשה" required disabled>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label class="span_data_name_right"> עיר<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="city[]" data-name="עיר" required>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name">רחוב  <u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='text' name="street[]" data-name="רחוב" required>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex three-row-wrap">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="three-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label class="span_data_name_col_4"> מספר<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='number' name="numb_flour[]" data-name="מספר" required>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="three-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name">דירה</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='number' name="numb_house[]" data-name="מספר דירה">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="three-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label class="span_data_name"> מיקוד</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                        <input type='number' name="index[]" data-name="מיקוד">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-invalid">המיקוד שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name_right"> טלפון נייד</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='tel' name="phone[]" data-name="טלפון נייד">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label class="span_data_name">  פקס</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                        <input type='tel' name="fax[]" data-name="פקס">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-invalid">מספר הפקס שהזנת לא נכון</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name_right">טל׳ נוסף</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='tel' name="second_phone[]" data-name="טל׳ נוסף">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label class="span_data_name">דוא״ל</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                        <input type='email' name="email[]" data-name="דוא״ל">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="sp-save-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <a class="btn save_btn hidden">ערוך</a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="sp-plus-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <a class="pls_btn sp-plus"></a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <span class="bold-text"> הוסף נתבע:</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <span>אם אינך התובע היחיד</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <a class="pls_btn important-text">לחץ להוספת תובע נוסף</a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            <!-- step 3 -->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            <div class="step-page step_3">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <h1>טופס הגשת תביעה קטנה מקוון</h1>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <p class="center-text big-text">אנא מלאו את תיאור האירוע והנזק</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row input-parent" data-step-row="1">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="input-block vertical-center big-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <label>סוג תביעה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <select name="step3_select1" id="step3_select1">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <option value="תביעות ספאם" selected>תביעות ספאם</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <option value="1" disabled>1</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <option value="2" disabled>2</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <option value="3" disabled>3</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </select>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row input-parent" data-step-row="2">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="input-block vertical-center big-input long-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <label for="step3_input2">השולח<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <input type="text" name="step3_input2" id="step3_input2" placeholder="השולח הינו" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="full-row input-parent bottom-line" data-step-row="3">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="input-block vertical-center big-input long-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <label for="step3_input3">הספק עוסק ב-<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <input type="text" name="step3_input3" id="step3_input3" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="full-row bottom-line" data-step-row="4">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="wide-left-padding">האם נרשמת אל שירותי ההודעות של השולח (הנתבע)?</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <input type="radio" name="step3_radio1" class="lead_radio" id="step3_radio1_1" value="1" checked />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <label for="step3_radio1_1">כן</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <input type="radio" name="step3_radio1" class="lead_radio" id="step3_radio1_2" value="0" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <label for="step3_radio1_2">לא</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row bottom-line input-parent" data-step-row="5">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="input-block vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <label for="step3_input4">תאריך:</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="sp-calendar">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="text" name="step3_input4" id="step3_input4" data-date-picker />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <input type="checkbox" name="step3_check1" id="step3_check1" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label for="step3_check1">לא ידוע</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="full-row bottom-line vertical-center adapt-wrap-flex adapt-center-flex" data-step-row="6">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="text-block">האם בוצעה בקשת הסרה מהנתבע?</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <input type="radio" name="step3_radio2" class="lead_radio" id="step3_radio2_1" value="1" checked />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <label for="step3_radio2_1">כן</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <input type="radio" name="step3_radio2" class="lead_radio" id="step3_radio2_2" value="0" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <label for="step3_radio2_2">לא</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row bottom-line input-parent" data-step-row="7">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="flex adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="little-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="input-block vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <label for="step3_input5">תאריך:</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="sp-calendar">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="text" name="step3_input5" id="step3_input5" required data-date-picker />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <input type="checkbox" name="step3_check2" id="step3_check2" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label for="step3_check2">לא ידוע</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="full-row bottom-line input-parent" data-step-row="8">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="text-block">צילום מסך של בקשת ההסרה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="big-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <input type="file" name="step3_file1" id="step3_file1" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <label for="step3_file1" class="btn">העלה קובץ</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="text-empty">חובה לצרף צילום מסך של בקשת ההסרה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                <div class="full-row bottom-line" data-step-row="9">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="text-block">האם בוצעה בקשת הסרה נוספת מהנתבע?</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <input type="radio" name="step3_radio3" class="lead_radio" id="step3_radio3_1" value="1" checked />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label for="step3_radio3_1">כן</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <input type="radio" name="step3_radio3" class="lead_radio" id="step3_radio3_2" value="0" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label for="step3_radio3_2">לא</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="full-row bottom-line input-parent" data-step-row="10">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="input-block vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label for="step3_input6">תאריך:</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="sp-calendar">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <input type="text" name="step3_input6" id="step3_input6" data-date-picker />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <input type="checkbox" name="step3_check3" id="step3_check3" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <label for="step3_check3">לא ידוע</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="full-row bottom-line input-parent" data-step-row="11">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="vertical-center adapt-wrap-flex adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="little-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="text-block">צילום מסך של בקשת ההסרה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="big-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="vertical-center adapt-center-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <input type="file" name="step3_file2" id="step3_file2" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <label for="step3_file2" class="btn">העלה קובץ</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row input-parent" data-step-row="14">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="vertical-center adapt-wrap-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <label for="step3_input8">מס׳ ההודעות שהתקבלו:</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="input-wrapper inline-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <input type="number" name="step3_input8" id="step3_input8" required data-tax="3" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="text-block right-padding">סה"כ מספר ההודעות שהתקבלו לאחר ההסרה הראשונה-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <u>*</u></div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row input-parent hidden" data-step-row="15">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="vertical-center adapt-wrap-flex">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <label for="step3_input9">מס׳ ההודעות שהתקבלו:</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="input-wrapper inline-input">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <input type="number" name="step3_input9" id="step3_input9" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="text-block right-padding">סה״כ מס׳ ההודעות שהתקבלו</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                <div class="full-row input-parent" data-step-row="16">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="input-block big-input long-input row-start">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <label for="step3_textarea1">נימוקי התביעה</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <textarea name="step3_textarea1" id="step3_textarea1" class="round-border" maxlength="200"></textarea>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                <div class="full-row row-start adapt-wrap-flex adapt-center-flex wrap-row" data-step-row="17">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="little-row blocked-width input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="middle-line margin-y">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <p class="center-text big-text">מסמכים תומכים</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="center-text">צרף לתביעתך כל מסמך אשר תומך בגרסתך לדוגמא: (קבלות, מסמכים רפואיים ועוד...)</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="vertical-center row-center">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="file-icon">צרף מסמכים</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <input type="file" name="step3_file4" id="step3_file4" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <label for="step3_file4" class="btn">העלה קובץ</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="big-row full-row wide-right-padding bottom-big-column">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="middle-line margin-y">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <p class="center-text big-text">ברצוני שביהמ"ש יפסוק עבורי</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                        <div class="full-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="input-block vertical-center big-input shackel">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <label for="step3_input10">נזק כספי <u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <input type="text" name="step3_input10" id="step3_input10" required disabled data-tax-summ="2" data-tax-price="1000" data-tax="4" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="full-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="input-block vertical-center big-input shackel">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <label for="step3_input11">הוצאות משפטיות</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="text" name="step3_input11" id="step3_input11" data-tax="5" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="full-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="input-block vertical-center big-input after-shackel">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <label>בחר בית משפט<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <select name="step3_select2" id="step3_select2" required>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <option value="" selected disabled></option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <option value="1">1</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <option value="2">2</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <option value="3">3</option>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    </select>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                <div class="full-row vertical-center row-center" data-step-row="18">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="bottom-msg center-text big-text important-text">באפשרותך לשנות את סכום התביעה ולתבוע עד 33,500 ש"ח</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="full-row vertical-center row-center hidden" data-step-row="19">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="bottom-msg center-text big-text important-text">לא ניתן לתבוע במידה ובוצעה הרשמה ולא בוצעה הסרה.</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--            <!-- step 4 -->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--            <div class="step-page step_4">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <h1>הגשת כתב הגנה</h1>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <p class="center-text big-text">הזן את סכום התביעה</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="result-row-wrap input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="result-row big-text">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="result-row-ins row-center vertical-center shackel">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <label for="step4_input1">סכום התביעה</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <input type="text" name="step4_input1" id="step4_input1" required data-tax-summ="3" data-tax="6" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <p class="center-text big-text">עלויות הגשת תביעה</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="pricing-rules-wrap">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="right-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <div class="frame-block-wrap">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="frame-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="full-row little-text input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="checkbox" name="step4_check1" id="step4_check1" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label for="step4_check1"><span data-href-url="">אני מסכים להגשת כתב הגנה</span></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="full-row little-text input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <input type="checkbox" name="step4_check2" id="step4_check2" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label for="step4_check2"><span data-href-url="">אני מסכים לתנאי התקנון</span></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="frame-line"></div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="full-row after-check padding-y">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <span class="bold-text">דמי טיפול ופתיחת תיק:</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="block-inline"><span>₪</span><span data-tax="1">347</span></div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="frame-line"></div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="full-row after-check padding-y">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <span class="bold-text">תשלום אגרת בית המשפט:</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <div class="block-inline"><span>₪</span><span data-tax="2">55</span></div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    <div class="left-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="frame-block-wrap bold-frame-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="frame-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="center-text big-text2">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    סה״כ לתשלום-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="center-text big-text">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="hidden" name="pay_sum">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <span>₪</span><span data-tax-summ="1" id="sum_for_pay">397</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--        </form>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--        -->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--</div>-->







                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    get_footer();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    crossorigin="anonymous"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    crossorigin="anonymous"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/jquery-ui.min.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins/select2.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--<script src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/js/form_app.js"></script>-->



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script>





