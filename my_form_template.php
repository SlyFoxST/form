<?php

get_header();

?>

<?php

//Template Name: New Form

?>

<div id="p_prldr" style="z-index: 999999999">

    <div class="contpre">

        <span class="svg_anm"></span>

    </div>

</div>

<div class="sp-form-wrapper" id="first_form">
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

        <form class="forms-block" action="<?php echo admin_url('admin-ajax.php');?>" name="sp_form">
            <input type="hidden" name="action" value="register_new_lid">
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
                        <p class="center-text big-text">אנא מלאו את פרטי התובע הנוסף</p>
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
                        <span class="bold-text"> הוסף תובע:</span>
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
                        <div class="vertical-center adapt-wrap-flex adapt-center-flex bold-text bottom-padding">
                            <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_1" value="0" checked />
                            <label for="step2_1_radio1_1">אדם פרטי</label>
                            <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_2" value="1" />
                            <label for="step2_1_radio1_2">חברה</label>
                            <input type="radio" name="step2_1_radio1" class="lead_radio" id="step2_1_radio1_3" value="2" />
                            <label for="step2_1_radio1_3">עוסק מורשה</label>
                        </div>
                    </div>
                    <div class="full-row" data-step-row="3">
                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label class="span_data_name_right">ת.ז<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="passport[]" data-name="ת.ז" required />
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא מספרים בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="half-row"></div>
                        </div>
                    </div>
                    <div class="full-row hidden" data-step-row="5">
                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>.ח.פ<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="step3_input1[]" data-name=".ח.פ"  disabled>
                                    </div>
                                </div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                                <a href="https://ica.justice.gov.il/GenericCorporarionInfo/SearchCorporation?unit=8" target="_blank" class="text-link">לחץ לאיתור ח.פ</a>
                            </div>
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>שם החברה<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="step3_input2_1[]" data-name="שם החברה"  disabled>
                                    </div>
                                </div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                        </div>
                    </div>
                    <div class="full-row hidden" data-step-row="6">
                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>ת.ז/ עוסק מורשה<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="step3_input3_1[]" data-name="ת.ז/ עוסק מורשה"  disabled>
                                    </div>
                                </div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>שם עוסק מורשה<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="step3_input4[]" data-name="שם עוסק מורשה"  disabled>
                                    </div>
                                </div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                        </div>
                    </div>
                    <div class="full-row" data-step-row="7">
                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>שם פרטי <u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="first_name[]" data-name="שם פרטי" required>
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label>שם משפחה<u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="last_name[]" data-name="שם משפחה" required>
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
                                        <input type='text' name="city[]" data-name="עיר" required>
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label class="span_data_name">רחוב  <u>*</u></label>
                                    <div class="input-wrapper">
                                        <input type='text' name="street[]" data-name="רחוב" required>
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
                                        <input type='text' name="numb_flour[]" data-name="מספר" required>
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא מספרים בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="three-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label class="span_data_name">דירה</label>
                                    <div class="input-wrapper">
                                        <input type='text' name="numb_house[]" data-name="מספר דירה">
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא מספרים בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="three-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label class="span_data_name"> מיקוד</label>
                                    <div class="input-wrapper">
                                        <input type='text' name="index[]" data-name="מיקוד">
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
                                    <label class="span_data_name_right"> טלפון נייד</label>
                                    <div class="input-wrapper">
                                        <input type='tel' name="phone[]" data-name="טלפון נייד">
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא מספרים בלבד</div>
                                <div class="text-empty">שדה זה הינו שדה חובה</div>
                            </div>
                            <div class="half-row input-parent">
                                <div class="input-block vertical-center adapt-center-flex big-input">
                                    <label class="span_data_name">  פקס</label>
                                    <div class="input-wrapper">
                                        <input type='tel' name="fax[]" data-name="פקס">
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
                                    <label class="span_data_name_right">טל׳ נוסף</label>
                                    <div class="input-wrapper">
                                        <input type='tel' name="second_phone[]" data-name="טל׳ נוסף">
                                    </div>
                                </div>
                                <div class="text-invalid">יש למלא מספרים בלבד</div>
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
                        <span class="bold-text">הוסף נתבע:</span>
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
                <div class="full-row input-parent">
                    <div class="input-block vertical-center big-input">
                        <label>סוג תביעה<u>*</u></label>
                        <div class="input-wrapper">

                           <select  name="step3_select1" id="step3_select1" class="" required="required" >
                            <?php 
                            $args = array(
                                'post_type' => 'cases',
                                'posts_per_page' => -1,
                                'orderby' => ASC,
                            );

                            $q = new WP_Query($args);

                            if($q->have_posts()) {

                                while($q->have_posts()){ $q->the_post();

                                    ?>
                                    <option value="<?php the_title();?>"><?php the_title();?></option>

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
            <div class="full-row input-parent">
                <div class="input-block vertical-center big-input long-input">
                    <label for="step3_input2">מקום האירוע<u>*</u></label>
                    <div class="input-wrapper">
                        <input type="text" name="step3_input2" id="step3_input2" required />
                    </div>
                </div>
                <div class="text-empty">שדה זה הינו שדה חובה</div>
            </div>
            <div class="full-row input-parent">
                <div class="input-block vertical-center big-input">
                    <label for="step3_input3">תאריך האירוע<u>*</u></label>
                    <div class="input-wrapper sp-flux-calendar">
                        <input type="text" name="step3_input3" id="step3_input3" data-date-picker required />
                    </div>
                </div>
                <div class="text-empty">שדה זה הינו שדה חובה</div>
            </div>
            <div class="full-row input-parent">
                <div class="input-block big-input long-input vertical-center">
                    <label for="step3_textarea1">תיאור האירוע<u>*</u></label>
                    <textarea name="step3_textarea1" id="step3_textarea1" class="round-border" maxlength="50000" required></textarea>
                </div>
                <div class="text-empty">שדה זה הינו שדה חובה</div>
            </div>
            <div class="full-row input-parent">
                <div class="input-block big-input long-input vertical-center">
                    <label for="step3_textarea2">תיאור הנזק<u>*</u></label>
                    <textarea name="step3_textarea2" id="step3_textarea2" class="round-border" maxlength="50000" required></textarea>
                </div>
                <div class="text-empty">שדה זה הינו שדה חובה</div>
            </div>
            <div class="full-row row-start adapt-wrap-flex adapt-center-flex wrap-row">
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
                </div>
                <div class="big-row full-row wide-right-padding bottom-big-column">
                    <div class="middle-line margin-y">
                        <p class="center-text big-text">ברצוני שביהמ"ש יפסוק עבורי</p>
                    </div>
                    <div class="full-row input-parent">
                        <div class="input-block vertical-center big-input shackel">
                            <label for="step3_input10">נזק כספי על סך<u>*</u></label>
                            <div class="input-wrapper">
                                <input type="text" name="step3_input10" id="step3_input10" required data-pr="1" data-tax="2" />
                            </div>
                        </div>
                        <div class="text-empty">שדה זה הינו שדה חובה</div>
                    </div>
                    <div class="full-row input-parent">
                        <div class="input-block vertical-center big-input shackel">
                            <label for="step3_input11">הוצאות משפטיות</label>
                            <div class="input-wrapper">
                                <input type="text" name="step3_input11" id="step3_input11" data-pr="2" data-tax="3" />
                            </div>
                        </div>
                    </div>
                    <div class="full-row input-parent">
                        <div class="input-block vertical-center big-input after-shackel">
                            <label>בחר בית משפט<u>*</u></label>
                            <div class="input-wrapper"><!--for me-->
                               <select name="step3_select2" id="step3_select2" data-pr="3" data-tax="1" required="required">

                                 <?php 
                                 $args = array(
                                    'post_type' => 'judge',
                                    'posts_per_page' => -1,
                                    'orderby' => ASC,
                                );

                                 $q = new WP_Query($args);

                                 if($q->have_posts()) {

                                    while($q->have_posts()){ $q->the_post();

                                        ?>
                                        <option value="<?php echo get_the_title();?>" data-select-price="<?php echo get_post_meta(get_the_ID(),'price',true);?>" ><?php the_title();?></option>

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
        <div class="full-row vertical-center flex-column row-center wide-bottom-padding">
           <div class="bottom-msg-2 center-text important-text" style="margin: 0 15px 0 0">
            איך לבחור ביהמ"ש? 
        </div>
        <div class="bottom-msg-2 center-text important-text wide-bottom-padding">
         תביעה קטנה תוגש ע"פ מקום מגוריו/עסקו של הנתבע או מקום המעשה/מחדל שבגינו מוגשת התביעה. אם עניין התביעה פרסום/סחר באינטרנט יש להגיש לפי מקום מגוריו/עסקו של הנתבע או התובע
     </div>
     <div class="bottom-msg center-text big-text important-text" style="font-weight: 500">ניתן לתבוע עד סכום של 33,900 ש"ח</div>

 </div>
</div>

<!-- step 4 -->
<div class="step-page step_4">
    <div class="full-row after-check wide-top-padding bottom-padding">
        <span class="bold-text big-text">נזק כספי על סך:</span>
    </div>
    <div class="full-row after-check">
        <div class="block-inline big-text2"><span data-pr-summ="1"></span><span> ₪ </span></div>
    </div>
    <div class="full-row after-check wide-top-padding bottom-padding">
        <span class="bold-text big-text">הוצאות משפטיות:</span>
    </div>
    <div class="full-row after-check">
        <div class="block-inline big-text2"><span data-pr-summ="2"></span><span> ₪ </span></div>
    </div>
    <div class="full-row after-check wide-top-padding">
        <span class="bold-text big-text">ברצוני שבית המשפט יפסוק עבורי:</span>
    </div>
    <div class="result-row-wrap input-parent">
        <div class="result-row big-text">
            <div class="result-row-ins row-center vertical-center shackel">
                <label for="step4_input1">סכום התביעה</label>
                <div class="input-wrapper">
                    <input type="text" name="step4_input1" id="step4_input1" required data-tax-summ="1" data-tax="6" data-max-number="33900" />
                </div>
            </div>
        </div>
        <div class="text-empty">שדה זה הינו שדה חובה</div>
        <div class="text-invalid">ניתן להגיש תביעה עד סכום של 33,900 ש"ח</div>
    </div>
    <div class="title-block">
        <div class="middle-line">
            <p class="center-text big-text">הגשת תביעה לבית משפט</p>
        </div>
    </div>
    <div class="full-row">
        <div class="first-pricing">
            <div class="half-row input-parent">
                <div class="full-row little-text input-parent">
                    <input type="checkbox" name="step4_check1" id="step4_check1" required />
                    <label for="step4_check1"><span data-href-url="">הנני מסכים לתקנון <a href="http://oedo.co.il/or.com/regulations/"  class="link-check-dark" >האתר</a></span></label>
                    <div class="text-empty">שדה זה הינו שדה חובה</div>
                </div>
                <div class="full-row little-text input-parent">
                    <input type="checkbox" name="step4_check2" id="step4_check2" required />
                    <label for="step4_check2"><span data-href-url="">התובע לא הגיש במהלך השנה למעלה מ-5 תביעות קטנות לביהמ"ש</span></label>
                    <div class="text-empty">שדה זה הינו שדה חובה</div>
                </div>
                <div class="full-row little-text input-parent">
                    <input type="checkbox" name="step4_check3" id="step4_check3" required />
                    <label for="step4_check3"><span data-href-url="">אני מסכים להגשת תביעה קטנה</span></label>
                    <div class="text-empty">שדה זה הינו שדה חובה</div>
                </div>
                <div class="full-row little-text input-parent">
                    <input type="checkbox" name="step4_check4" id="step4_check4" required />
                    <label for="step4_check4"><span data-href-url="">התובע הינו אדם פרטי (לא חברה)</span></label>
                    <div class="text-empty">שדה זה הינו שדה חובה</div>
                </div>
            </div>
            <div class="half-row">
                <div class="end-center-block">
                    <div class="end-center-block-wrap input-parent">
                        <div class="input-block big-input">
                            <label class="span_data_name">נזק כספי על סך<u>*</u></label>
                        </div>
                        <div class="input-block big-input input-parent">
                            <div class="input-wrapper">
                                <input type='text' name="step4_input2" required data-tax-summ="2" data-tax="4" />
                            </div>
                        </div>
                        <div class="text-empty">שדה זה הינו שדה חובה</div>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="full-row padding-x bottom-padding">
                        <span class="bold-text">דמי טיפול ופתיחת תיק:</span>
                        <div class="block-inline"><span>₪</span><span data-pr-summ="3"></span></div>
                    </div>
                    <div class="frame-line2"></div>
                    <div class="full-row padding-x top-padding">
                        <span class="bold-text">תשלום אגרת בית המשפט:</span>
                        <div class="block-inline"><span>₪</span><span data-tax-summ="3" data-tax="5" data-tax-price="100"></span></div>
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
                        <span>₪</span><span data-tax-summ="4" id="sum_for_pay"></span>
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

<!--<div class="form_wrapper">-->
    <!---->
    <!--    <div class="container">-->
        <!---->

        <!---->

        <!---->
        <!--        <div class="info_client">-->
            <!---->
            <!---->
            <!---->
            <!--        </div>-->
            <!---->
            <!--        <div class="wrapper_description">-->
                <!---->
                <!---->
                <!--        </div>-->
                <!---->
                <!--        <div class="form">-->
                    <!---->
                    <!--            <form action="--><?php //echo admin_url('admin-ajax.php');?><!--" id="lid_form">-->
                        <!---->
                        <!--                <input type="hidden" name="action" value="register_new_lid">-->
                        <!--                <div class="step_form active relative" data-step="one">-->
                            <!--                    <div class="step_1_1 active_step">-->
                                <!--                        <div class="container_for_form" data-id="300">-->
                                    <!--                            <div class="edit_and_trash"  data-id='300'> <i class="far delete_users_first fa-trash-alt" data-id='300'></i></div>-->
                                    <!--                            <div class="row">-->
                                        <!--                                <div class="col-md-6 flex-wrap number_pass">-->
                                            <!--                                    <label>-->
                                                <!--                                        <span class="span_data_name_right">ת.ז<u>*</u></span>-->
                                                <!--                                        <input type='number' name="client_passport[]" data-name="ת.ז" required>-->
                                                <!--                                    </label>-->
                                                <!--                                    <div class="text-invalid">הת.ז שהזנת לא תקין</div>-->
                                                <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                <!--                                </div>-->
                                                <!--                            </div>-->
                                                <!---->
                                                <!--                            <div class="row">-->
                                                    <!---->
                                                    <!--                                <div class="col-md-6 flex-wrap">-->
                                                        <!---->
                                                        <!--                                    <label>-->
                                                            <!---->
                                                            <!--                                        <span class="span_data_name_right">שם פרטי <u>*</u></span>-->
                                                            <!---->
                                                            <!--                                        <input type='text' name="client_first_name[]" data-name="שם פרטי" required>-->
                                                            <!---->
                                                            <!--                                    </label>-->
                                                            <!---->
                                                            <!--                                    <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->
                                                            <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                            <!---->
                                                            <!--                                </div>-->
                                                            <!---->
                                                            <!--                                <div class="col-md-6 flex-wrap">-->
                                                                <!---->
                                                                <!--                                    <label>-->
                                                                    <!---->
                                                                    <!--                                        <span class="span_data_name">שם משפחה<u>*</u></span>-->
                                                                    <!---->
                                                                    <!--                                        <input type='text' name="client_last_name[]" data-name="שם משפחה" required>-->
                                                                    <!---->
                                                                    <!--                                    </label>-->
                                                                    <!---->
                                                                    <!--                                    <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->
                                                                    <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                    <!---->
                                                                    <!--                                </div>-->
                                                                    <!---->
                                                                    <!--                            </div>-->
                                                                    <!---->
                                                                    <!--                            <div class="row">-->
                                                                        <!---->
                                                                        <!--                                <div class="col-md-6 flex-wrap">-->
                                                                            <!---->
                                                                            <!--                                    <label>-->
                                                                                <!---->
                                                                                <!--                                        <span class="span_data_name_right"> עיר<u>*</u></span>-->
                                                                                <!---->
                                                                                <!--                                        <input type='text' name="client_city[]" data-name="עיר" required>-->
                                                                                <!---->
                                                                                <!--                                    </label>-->
                                                                                <!---->
                                                                                <!--                                    <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->
                                                                                <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                <!---->
                                                                                <!--                                </div>-->
                                                                                <!---->
                                                                                <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                    <!---->
                                                                                    <!--                                    <label>-->
                                                                                        <!---->
                                                                                        <!--                                        <span class="span_data_name">רחוב  <u>*</u></span>-->
                                                                                        <!---->
                                                                                        <!--                                        <input type='text' name="client_street[]" data-name="רחוב" required>-->
                                                                                        <!---->
                                                                                        <!--                                    </label>-->
                                                                                        <!---->
                                                                                        <!--                                    <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->
                                                                                        <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                        <!---->
                                                                                        <!--                                </div>-->
                                                                                        <!---->
                                                                                        <!--                            </div>-->
                                                                                        <!---->
                                                                                        <!--                            <div class="row">-->
                                                                                            <!---->
                                                                                            <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                <!---->
                                                                                                <!--                                    <label>-->
                                                                                                    <!---->
                                                                                                    <!--                                        <span class="span_data_name_col_4"> מספר</span>-->
                                                                                                    <!---->
                                                                                                    <!--                                        <input type='number' name="client_numb_flour[]" data-name="מספר">-->
                                                                                                    <!--                                    </label>-->
                                                                                                    <!--                                    <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->
                                                                                                    <!--                                </div>-->
                                                                                                    <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                        <!---->
                                                                                                        <!--                                    <label>-->
                                                                                                            <!---->
                                                                                                            <!--                                        <span class="span_data_name">דירה</span>-->
                                                                                                            <!---->
                                                                                                            <!--                                        <input type='number' name="client_numb_house[]" data-name="מספר דירה">-->
                                                                                                            <!---->
                                                                                                            <!--                                    </label>-->
                                                                                                            <!---->
                                                                                                            <!--                                    <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->
                                                                                                            <!---->
                                                                                                            <!--                                </div>-->
                                                                                                            <!---->
                                                                                                            <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                                <!---->
                                                                                                                <!--                                    <label>-->
                                                                                                                    <!---->
                                                                                                                    <!--                                        <span class="span_data_name"> מיקוד</span>-->
                                                                                                                    <!---->
                                                                                                                    <!--                                        <input type='number' name="client_index[]" data-name="מיקוד">-->
                                                                                                                    <!---->
                                                                                                                    <!--                                    </label>-->
                                                                                                                    <!---->
                                                                                                                    <!--                                    <div class="text-invalid">המיקוד שהזנת לא תקין</div>-->
                                                                                                                    <!---->
                                                                                                                    <!--                                </div>-->
                                                                                                                    <!---->
                                                                                                                    <!--                            </div>-->
                                                                                                                    <!---->
                                                                                                                    <!--                            <div class="row">-->
                                                                                                                        <!---->
                                                                                                                        <!---->
                                                                                                                        <!---->
                                                                                                                        <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                            <!---->
                                                                                                                            <!--                                    <label>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                        <span class="span_data_name_right"> טלפון נייד<u>*</u></span>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                        <input type='tel' name="client_phone[]" data-name="טלפון נייד" required>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                    </label>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                    <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->
                                                                                                                                <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                </div>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                    <!---->
                                                                                                                                    <!--                                    <label>-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                        <span class="span_data_name">  פקס</span>-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                        <input type='tel' name="client_fax[]" data-name="פקס">-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                    </label>-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                    <div class="text-invalid">מספר הפקס שהזנת לא נכון</div>-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                </div>-->
                                                                                                                                        <!---->
                                                                                                                                        <!---->
                                                                                                                                        <!---->
                                                                                                                                        <!--                            </div>-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                            <div class="row">-->
                                                                                                                                            <!---->
                                                                                                                                            <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                                    <label>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                        <span class="span_data_name_right">  טלפון נוסף</span>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                        <input type='tel' name="client_second_phone[]" data-name="טלפון נוסף">-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                    <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                        <!---->
                                                                                                                                                        <!--                                    <label>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                                        <span class="span_data_name"> דואל<u>*</u></span>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                                        <input type='email' name="client_email[]" data-name="דואל" required>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                                    <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>-->
                                                                                                                                                            <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!---->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                            </div>-->
                                                                                                                                                            <!---->
                                                                                                                                                            <!--                            <div class="edit_end_sibmit">-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                                <p><a class="submit">+</a><span style="color:#0063b2; font-weight: bold"> הוסף תובע:</span> <span style="color: #0063b2">אם אינך התובע היחיד לחץ</span><span class="submit2" style="color: red; cursor: pointer;">להוספת תובע נוסף</span></p>-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                                <a class="edit_btn">ערוך</a>-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                            </div>-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!---->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                        </div>-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                    </div>-->
                                                                                                                                                                <!---->
                                                                                                                                                                <!--                    <div class="step_1_2">-->
                                                                                                                                                                    <!---->
                                                                                                                                                                    <!--                        <div class="container_for_form_step_1_2" data-id="301">-->
                                                                                                                                                                        <!---->
                                                                                                                                                                        <!--                            <div class="edit_and_trash"  data-id='301'> <i class="far delete_users_first fa-trash-alt" data-id='301'></i></div>-->
                                                                                                                                                                        <!---->
                                                                                                                                                                        <!--                            <div class="row radio-rect-wrap">-->
                                                                                                                                                                            <!---->
                                                                                                                                                                            <!--                                <div class="radio-rect">-->
                                                                                                                                                                                <!---->
                                                                                                                                                                                <!--                                    <input type="radio" checked name="radioChack" id="radioChack1" value="two">-->
                                                                                                                                                                                <!--                                    <label for="radioChack1">-->
                                                                                                                                                                                    <!---->
                                                                                                                                                                                    <!--                                        <span class="span_data_name">  אדם פרטי </span>-->
                                                                                                                                                                                    <!---->
                                                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                                                    <!---->
                                                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                                                    <!---->
                                                                                                                                                                                    <!--                                <div class="radio-rect">-->
                                                                                                                                                                                        <!---->
                                                                                                                                                                                        <!--                                    <input type="radio" name="radioChack" id="radioChack2" value="one">-->
                                                                                                                                                                                        <!--                                    <label for="radioChack2">-->
                                                                                                                                                                                            <!---->
                                                                                                                                                                                            <!--                                        <span class="span_data_name"> חברה</span>-->
                                                                                                                                                                                            <!---->
                                                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                                                            <!---->
                                                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                                                            <!---->
                                                                                                                                                                                            <!--                                <div class="radio-rect">-->
                                                                                                                                                                                                <!---->
                                                                                                                                                                                                <!--                                    <input type="radio" name="radioChack" id="radioChack3" value="three">-->
                                                                                                                                                                                                <!--                                    <label for="radioChack3">-->
                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                    <!--                                        <span class="span_data_name">עוסק מורשה</span>-->
                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                    <!--                            </div>-->
                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                    <!--                            <div class="apend_checkbox">-->
                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                        <!--                                <div class="change_two">-->
                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                            <!--                                    <div class="row">-->
                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                <!--                                        <div class="col-md-6 flex-wrap number_pass">-->
                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                    <!--                                            <label>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                                <span class="span_data_name_right">ת.ז</span>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                                <input type="number" name="passport[]" data-name="ת.ז">-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                            </label>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                            <div class="text-invalid">הת.ז שהזנת לא תקין</div>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                        </div>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                    </div>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                </div>-->
                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                        <!--                                <div class="change_one" style="display: none">-->
                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                            <!--                                    <div class="row">-->
                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                <!--                                        <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                    <!--                                            <label>-->
                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                        <!--                                                <span class="span_data_name_right">ח.פ</span>-->
                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                        <!--                                                <input type="text" disabled data-name="ח.פ" name="company_id_number[]">-->
                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                        <!--                                            </label>-->
                                                                                                                                                                                                                                        <!--                                            <a href="https://ica.justice.gov.il/GenericCorporarionInfo/SearchCorporation?unit=8" target="_blank" class="text-link">לחץ לאיתור ח.פ</a>-->
                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                        <!--                                        </div>-->
                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                        <!--                                        <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                            <!--                                            <label>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                                <span class="span_data_name">שם חברה</span>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                                <input type="text" disabled data-name="שם חברה" name="company_name[]">-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                            </label>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                        </div>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                    </div>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                </div>-->
                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                <!--                                <div class="change_three" style="display: none">-->
                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                    <!--                                    <div class="row">-->
                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                        <!--                                        <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                            <!--                                            <label>-->
                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                <!--                                                <span class="span_data_name_right">ת.ז עוסק מורשה<u>*</u></span>-->
                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                <!--                                                <input type="text" disabled data-name="ת.ז עוסק מורשה" name="company_owner_passport[]" required>-->
                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                <!--                                            </label>-->
                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                <!--                                        </div>-->
                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                <!--                                        <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                    <!--                                            <label>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                                <span class="span_data_name">שם עוסק מורשה<u>*</u></span>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                                <input type="text" disabled data-name="שם עוסק מורשה" name="company_name[]" required>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                            </label>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                        </div>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                    </div>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                                </div>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                            </div>-->
                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                        <!--                            <div class="row">-->
                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                            <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                <!--                                    <label>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                        <span class="span_data_name_right">שם פרטי<u>*</u></span>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                        <input type='text' name="first_name[]" data-name="שם פרטי" required>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                    <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                    <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                        <!--                                    <label>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                                        <span class="span_data_name">שם משפחה<u>*</u></span>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                                        <input type='text' name="last_name[]" data-name="שם משפחה"  required>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                                    <div class="text-invalid">שדה שם יכול להיות באותיות בעברית בלבד</div>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                            </div>-->
                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                            <!--                            <div class="row">-->
                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                    <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                        <span class="span_data_name_right">עיר<u>*</u></span>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                        <input type='text' name="city[]" data-name="עיר" required>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                    <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->
                                                                                                                                                                                                                                                                                                        <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                </div>-->
                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                        <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                            <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                                        <span class="span_data_name">רחוב<u>*</u></span>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                                        <input type='text' name="street[]" data-name="רחוב" required>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                                    <div class="text-invalid">רחוב ועיר יש להזין אותיות בעברת בלבד</div>-->
                                                                                                                                                                                                                                                                                                                <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                            </div>-->
                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                <!--                            <div class="row">-->
                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                    <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                        <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                        <span class="span_data_name">מספר   <u>*</u></span>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='number' name="numb_flour[]" data-name=" מספר" required>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->
                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                            <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                        <span class="span_data_name_col_4">מספר דירה</span>-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                        <input type='number' name="numb_house[]" data-name="מספר דירה">-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="text-invalid">מספר בית ומספר דירה יכולים להיות במספרים בלבד</div>-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="col-md-4 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                        <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                                        <span class="span_data_name"> מיקוד</span>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='number' name="index[]" data-name="מיקוד">-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="text-invalid">המיקוד שהזנת לא תקין</div>-->
                                                                                                                                                                                                                                                                                                                                            <!--                                    <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                            </div>-->
                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                            <!--                            <div class="row">-->
                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                        <span class="span_data_name_right">טלפון נייד</span>-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                        <input type='tel' name="phone[]" data-name="טלפון נייד">-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                        <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                            <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                                        <span class="span_data_name">פקס</span>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                                        <input type='tel' name="fax[]" data-name="פקס">-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                                    <div class="text-invalid">מספר הפקס שהזנת לא נכון</div>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                            </div>-->
                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                <!--                            <div class="row">-->
                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <span class="span_data_name_right">טלפון נוסף</span>-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='tel' name="second_phone[]" data-name="טלפון נוסף">-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                    <div class="text-invalid">מספר הטלפון שהזנת לא תקין</div>-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                            <!--                                <div class="col-md-6 flex-wrap">-->
                                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <label>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <span class="span_data_name">דואל</span>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                                        <input type='email' name="email[]" data-name="דואל">-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    </label>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="text-invalid">כתובת דוא״ל שהזנת לא נכונה</div>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->
                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="edit_end_sibmit_1_2">-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <p><a class="submit_1_2">+</a><span style="color:#0063b2; font-weight: bold"> הוסף תובע:</span> <span style="color: #0063b2">אם אינך התובע היחיד לחץ</span><span style="color: red; cursor: pointer" class="submit_1_2_btn">להוספת תובע נוסף</span></p>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <a class="edit_btn_1_2">ערוך</a>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                            </div>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->
                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="step_form" data-step="two">-->
                                                                                                                                                                                                                                                                                                                                                                                            <!---->
                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="step_2">-->
                                                                                                                                                                                                                                                                                                                                                                                                <!---->
                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="row">-->
                                                                                                                                                                                                                                                                                                                                                                                                    <!---->
                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <div class="col-md-6">-->
                                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                <label><u>*</u>סוג תביעה</label>-->
                                                                                                                                                                                                                                                                                                                                                                                                        <!---->
                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                --><?php
//
//                                $argc_cases = array(
//
//                                    'post_type' => 'cases',
//
//                                    'number_posts' => -1
//
//                                );
//
//                                $cases = get_posts($argc_cases);
//
//                                ?>
<!---->
<!--                                <select class="bottom_select" id="" name="case">-->
    <!---->
    <!--                                    <option value="" data-price="0">סוג הנזק בחר סוג הנזק</option>-->
    <!---->
    <!--                                    --><?php //foreach ($cases as $case):?>
    <!---->
    <!--                                        <option value="--><?php //echo $case->ID;?><!--" data-price="--><?php //the_field('price', $case->ID)?><!--">--><?php //echo  get_the_title($case->ID);?><!--</option>-->
    <!---->
    <!---->
    <!---->
    <!--                                    --><?php //endforeach;?>
    <!---->
    <!--                                </select>-->
    <!---->
    <!---->
    <!---->
    <!--                            </div>-->
    <!---->
    <!--                        </div>-->
    <!---->
    <!--                        <div class="row">-->
        <!---->
        <!--                            <div class="col-md-12">-->
            <!---->
            <!--                                <div class="step_2_wrapper_flex">-->
                <!---->
                <!--                                    <label><u>*</u> מקום האירוע </label>-->
                <!---->
                <!--                                    <input type='text' name="reason">-->
                <!---->
                <!--                                </div>-->
                <!---->
                <!--                            </div>-->
                <!---->
                <!--                        </div>-->
                <!---->
                <!--                        <div class="row">-->
                    <!---->
                    <!--                            <div class="col-md-6">-->
                        <!---->
                        <!--                                <div class="step_2_wrapper_flex">-->
                            <!---->
                            <!--                                    <label><u>*</u>תאריך האירוע </label>-->
                            <!---->
                            <!--                                    <input type='text' name="date" data-date-picker>-->
                            <!---->
                            <!--                                </div>-->
                            <!---->
                            <!--                            </div>-->
                            <!---->
                            <!--                        </div>-->
                            <!---->
                            <!--                        <div class="row">-->
                                <!---->
                                <!--                            <div class="col-md-12">-->
                                    <!---->
                                    <!--                                <div class="step_2_wrapper_flex">-->
                                        <!---->
                                        <!--                                    <label><u>*</u> תיאור האירוע </label>-->
                                        <!---->
                                        <!--                                    <textarea name="desc1"></textarea>-->
                                        <!---->
                                        <!--                                </div>-->
                                        <!---->
                                        <!--                            </div>-->
                                        <!---->
                                        <!--                        </div>-->
                                        <!---->
                                        <!--                        <div class="row">-->
                                            <!---->
                                            <!--                            <div class="col-md-12">-->
                                                <!---->
                                                <!--                                <div class="step_2_wrapper_flex">-->
                                                    <!---->
                                                    <!--                                    <label><u>*</u> תיאור הנזק  </label>-->
                                                    <!---->
                                                    <!--                                    <textarea name="desc2"></textarea>-->
                                                    <!---->
                                                    <!--                                </div>-->
                                                    <!---->
                                                    <!--                            </div>-->
                                                    <!---->
                                                    <!--                        </div>-->
                                                    <!---->
                                                    <!--                        <div class="row flex-label">-->
                                                        <!---->
                                                        <!--                            <div class="col-md-6 column">-->
                                                            <!---->
                                                            <!--                                <div class="descrition_bottom first-description">-->
                                                                <!---->
                                                                <!--                                    <div class="line"></div>-->
                                                                <!---->
                                                                <!--                                    <p>מסמכים תומכים</p>-->
                                                                <!---->
                                                                <!--                                    <div class="line"></div>-->
                                                                <!---->
                                                                <!--                                </div>-->
                                                                <!---->
                                                                <!--                                <div class="uploudfile">-->
                                                                    <!---->
                                                                    <!--                                    <p>צרף לתביעה כל מסמך אשר תומך בגרסתך (לדוגמא קבלות, מסמכים רפואים ועוד)</p>-->
                                                                    <!---->
                                                                    <!--                                    <div class="step_2_wrapper_flex">-->
                                                                        <!---->
                                                                        <!--                                        <input type="file" name="file">-->
                                                                        <!---->
                                                                        <!--                                    </div>-->
                                                                        <!---->
                                                                        <!--                                </div>-->
                                                                        <!---->
                                                                        <!---->
                                                                        <!---->
                                                                        <!--                            </div>-->
                                                                        <!---->
                                                                        <!--                            <div class="col-md-6 column">-->
                                                                            <!---->
                                                                            <!--                                <div class="descrition_bottom two-description">-->
                                                                                <!---->
                                                                                <!--                                    <div class="line"></div>-->
                                                                                <!---->
                                                                                <!--                                    <p>ברצוני שביהמ"ש יפסוק עבורי</p>-->
                                                                                <!---->
                                                                                <!--                                    <div class="line"></div>-->
                                                                                <!---->
                                                                                <!--                                </div>-->
                                                                                <!---->
                                                                                <!--                                <div class="cach">-->
                                                                                    <!---->
                                                                                    <!--                                    <label>בחר בית משפט</label>-->
                                                                                    <!---->
                                                                                    <!--                                    <select class="sud" name="judge" required>-->
                                                                                        <!---->
                                                                                        <!--                                        --><?php
//
//                                        $argc_judge = array(
//
//                                            'post_type' => 'judge',
//
//                                            'number_posts' => -1
//
//                                        );
//
//                                        $judges = get_posts($argc_judge);
//
//                                        ?>
<!---->
<!--                                        <option value="" data-price="0">בחירת בית משפט</option>-->
<!---->
<!--                                        --><?php //foreach ($judges as $judge):?>
<!---->
<!--                                            <option value="--><?php //echo $judge->ID;?><!--" data-price="--><?php //the_field('price', $judge->ID)?><!--">--><?php //echo get_the_title($judge->ID);?><!--</option>-->
<!---->
<!--                                        --><?php //endforeach;?>
<!---->
<!---->
<!---->
<!--                                    </select>-->
<!---->
<!--                                </div>-->
<!---->
<!--                                <div class="cach">-->
    <!--                                    <label>-->
        <!---->
        <!--                                        <span>נזק כספי על סך<u>*</u></span>-->
        <!---->
        <!--                                        <input class="inputResult" type='number' name="summ" required>-->
        <!---->
        <!--                                        <span class="chakel">₪</span>-->
        <!--                                    </label>-->
        <!--                                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->
        <!--                                </div>-->
        <!---->
        <!--                                <div class="cach">-->
            <!--                                    <label>-->
                <!--                                        <span>הוצאות משפטיות</span>-->
                <!---->
                <!--                                        <input class="allresult_inp" type='number' name="finishsumm">-->
                <!---->
                <!--                                        <span class="chakel">₪</span>-->
                <!--                                    </label>-->
                <!--                                </div>-->
                <!---->
                <!---->
                <!---->
                <!--                            </div>-->
                <!---->
                <!--                        </div>-->
                <!---->
                <!--                    </div>-->
                <!---->
                <!--                </div>-->
                <!---->
                <!--                <div class="step_form" data-step="there">-->
                    <!---->
                    <!--                    <div class="step_3">-->
                        <!---->
                        <!--                        <div class="cach_2" >-->
                            <!---->
                            <!--                            <label>נזק כספי על סך</label>-->
                            <!---->
                            <!--                            <div class="wrapper_step_3_res">-->
                                <!---->
                                <!--                                <p class="res"></p>-->
                                <!---->
                                <!--                                <span>₪</span>-->
                                <!---->
                                <!--                            </div>-->
                                <!---->
                                <!---->
                                <!---->
                                <!--                            <input class="allresult" type='hidden' name="summ1">-->
                                <!---->
                                <!--                        </div>-->
                                <!---->
                                <!--                        <div class="cach_2">-->
                                    <!---->
                                    <!--                            <label>הוצאות משפטיות</label>-->
                                    <!---->
                                    <!--                            <div class="wrapper_step_3_res">-->
                                        <!---->
                                        <!--                                <p class="res2"></p>-->
                                        <!---->
                                        <!--                                <span>₪</span>-->
                                        <!---->
                                        <!--                            </div>-->
                                        <!---->
                                        <!--                            <input class="allresult2" type='hidden' name="summ2">-->
                                        <!--                            <input type='hidden' name="pay_sum">-->
                                        <!---->
                                        <!--                        </div>-->
                                        <!---->
                                        <!--                        <p class="reshenie">ברצוני שביהמ"ש יפסוק עבורי</p>-->
                                        <!---->
                                        <!--                        <div class="row">-->
                                            <!---->
                                            <!--                            <div class="change_sum">-->
                                                <!---->
                                                <!--                                <div class="step_2_wrapper_flex">-->
                                                    <!---->
                                                    <!--                                    <label for="edit_summ">-->
                                                        <!---->
                                                        <!--                                        סכום תביעה </label>-->
                                                        <!---->
                                                        <!--                                    <input type="text" name="edit_summ" id="edit_summ" data-sum-max="33900">-->
                                                        <!---->
                                                        <!--                                    <p>₪</p>-->
                                                        <!---->
                                                        <!--                                </div>-->
                                                        <!---->
                                                        <!--                            </div>-->
                                                        <!---->
                                                        <!--                        </div>-->
                                                        <!--                        <div class="text-max">בבית המשפט לתביעות קטנות, סכום התביעה מוגבל ל 33,900 ₪.</div>-->
                                                        <!---->
                                                        <!--                        <div class="container">-->
                                                            <!---->
                                                            <!--                            <div class="wrapper_description_step_3">-->
                                                                <!---->
                                                                <!--                                <div class="row">-->
                                                                    <!---->
                                                                    <!--                                    <div class="col-md-4 line"><span></span></div>-->
                                                                    <!---->
                                                                    <!--                                    <div class="col-md-4 descr">הגשת תביעה לבית משפט</div>-->
                                                                    <!---->
                                                                    <!--                                    <div class="col-md-4 line"><span></span></div>-->
                                                                    <!---->
                                                                    <!--                                </div>-->
                                                                    <!---->
                                                                    <!--                            </div>-->
                                                                    <!---->
                                                                    <!--                        </div>-->
                                                                    <!---->
                                                                    <!--                        <div class="row">-->
                                                                        <!---->
                                                                        <!--                            <div class="col-md-6 box_check">-->
                                                                            <!--                                <label>-->
                                                                                <!--                                    <input type="checkbox" name="agree_rules" required>-->
                                                                                <!--                                    <span data-href-url="https://www.meteocentrum.cz/predpoved-pocasi/eu/688408/uzhhorod">הנני מסכים לתקנון האתר</span>-->
                                                                                <!--                                </label>-->
                                                                                <!--                                <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->
                                                                                <!--                                <label>-->
                                                                                    <!---->
                                                                                    <!--                                    <input type="checkbox" name="less_then_five" required>-->
                                                                                    <!---->
                                                                                    <!--                                    לא הגשתי יותר מחמש תביעות השנה-->
                                                                                    <!---->
                                                                                    <!--                                </label>-->
                                                                                    <!--                                <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->
                                                                                    <!--                                <label>-->
                                                                                        <!---->
                                                                                        <!--                                    <input type="checkbox" name="sign" required>-->
                                                                                        <!---->
                                                                                        <!--                                    מאשר לחתום על ולהגיש כל תביעה-->
                                                                                        <!---->
                                                                                        <!--                                </label>-->
                                                                                        <!--                                <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->
                                                                                        <!--                                <label>-->
                                                                                            <!---->
                                                                                            <!--                                    <input type="checkbox" name="not_company" required>-->
                                                                                            <!---->
                                                                                            <!--                                    התובע הינו אדם פרטי (לא חברה)-->
                                                                                            <!---->
                                                                                            <!--                                </label>-->
                                                                                            <!--                                <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->
                                                                                            <!--                            </div>-->
                                                                                            <!---->
                                                                                            <!--                            <div class="col-md-6 box-input">-->
                                                                                                <!---->
                                                                                                <!--                                <label for="text50">נזק כספי<u>*</u></label>-->
                                                                                                <!---->
                                                                                                <!--                                <input type="text" name="text" id="text50">-->
                                                                                                <!---->
                                                                                                <!--                            </div>-->
                                                                                                <!---->
                                                                                                <!--                        </div>-->
                                                                                                <!---->
                                                                                                <!--                        <div class="container">-->
                                                                                                    <!---->
                                                                                                    <!--                            <div class="wrapper_description_step_3">-->
                                                                                                        <!---->
                                                                                                        <!--                                <div class="row">-->
                                                                                                            <!---->
                                                                                                            <!--                                    <div class="col-md-4 line"><span></span></div>-->
                                                                                                            <!---->
                                                                                                            <!--                                    <div class="col-md-4 descr">עלויות הגשת תביעה</div>-->
                                                                                                            <!---->
                                                                                                            <!--                                    <div class="col-md-4 line"><span></span></div>-->
                                                                                                            <!---->
                                                                                                            <!--                                </div>-->
                                                                                                            <!---->
                                                                                                            <!--                            </div>-->
                                                                                                            <!---->
                                                                                                            <!--                        </div>-->
                                                                                                            <!---->
                                                                                                            <!--                        <div class="row">-->
                                                                                                                <!---->
                                                                                                                <!--                            <div class="col-md-6 box-result">-->
                                                                                                                    <!---->
                                                                                                                    <!--                                <div class="wrapper_box_result">-->
                                                                                                                        <!---->
                                                                                                                        <!--                                    <div class="result-end_top">-->
                                                                                                                            <!---->
                                                                                                                            <!--                                        <span>דמי טיפול ופתיחת תיק</span> <span class="res3"></span> <span> ₪ </span>-->
                                                                                                                            <!---->
                                                                                                                            <!--                                    </div>-->
                                                                                                                            <!---->
                                                                                                                            <!--                                    <div class="result-end_bottom">-->
                                                                                                                                <!---->
                                                                                                                                <!--                                        <span>תשלום אגרת בית משפט</span> <span class="one_persent"></span><span> ₪ </span>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                    </div>-->
                                                                                                                                <!---->
                                                                                                                                <!--                                </div>-->
                                                                                                                                <!---->
                                                                                                                                <!---->
                                                                                                                                <!---->
                                                                                                                                <!--                            </div>-->
                                                                                                                                <!---->
                                                                                                                                <!--                            <div class="col-md-6 box-result-end">-->
                                                                                                                                    <!---->
                                                                                                                                    <!--                                <div class="result-end">-->
                                                                                                                                        <!---->
                                                                                                                                        <!--                                    <div class="wrapper_end_block">-->
                                                                                                                                            <!---->
                                                                                                                                            <!--                                        <p>סה"כ לתשלום</p>-->
                                                                                                                                            <!---->
                                                                                                                                            <!--                                        <div class="step_2_wrapper_flex">-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                                            <p class="endResult"></p><span> ₪ </span>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                                        </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!---->
                                                                                                                                                <!---->
                                                                                                                                                <!--                                    </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                                </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                            </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                        </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                    </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                </div>-->
                                                                                                                                                <!---->
                                                                                                                                                <!--                <div class="btn_step_wrapper">-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                    <a href="#" class="step_preview">חזור</a>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                    <a href="#" class="step_btn_preview">חזור</a>-->
                                                                                                                                                    <!--                    <a href="#" class="step_btn_preview2">חזור</a>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                    <a href="#" class="step_btn_next">המשך לפרטי הנתבע</a>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                    <a href="#" class="step_next">המשך לתיאור האירוע והנזק</a>-->
                                                                                                                                                    <!--                    <a href="#" class="step_next2">המשך לתיאור האירוע והנזק</a>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                    <button class="submit_btn" type="button">המשך לתשלום</button>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--                </div>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--            </form>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--        </div>-->
                                                                                                                                                    <!---->
                                                                                                                                                    <!--    </div>-->
                                                                                                                                                    <!---->
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
                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/index.js"></script>


