<?php



get_header();



?>



<?php



//Template Name: New Form Third



?>



<div id="p_prldr" style="z-index: 999999999">



    <div class="contpre">



        <span class="svg_anm"></span>



    </div>



</div>



<div class="sp-form-wrapper" id="sp_third_form">

    <div class="sp-form-wrapper-ins">



        <!-- form head ========================== -->

        <div class="step-line-wrap">

            <div class="step-line-block line-4">

                <div class="step-indicator-block step-indicator-1 active">

                    <p>

                        <span class="number">1</span>

                        <span class="title">פרטי תיק התביעה</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

                <div class="step-indicator-block step-indicator-2">

                    <p>

                        <span class="number">2</span>

                        <span class="title">פרטי התובע והנתבע</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

                <div class="step-indicator-block step-indicator-3">

                    <p>

                        <span class="number">3</span>

                        <span class="title">טענות ונימוקי הגנה</span>

                    </p>

                    <div class="bg-block">

                        <div class="bg-field"></div>

                        <div class="step-arrow"></div>

                    </div>

                </div>

                <div class="step-indicator-block step-indicator-4">

                    <p>

                        <span class="number">4</span>

                        <span class="title">הגשת כתב הגנה</span>

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

            <input type="hidden" name="action" value="register_third_lid">

            <!-- step 1 -->

            <div class="step-page step_1 block">

                <div class="title-block">

                    <h1>פרטי תיק התביעה</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי תיק התביעה</p>

                    </div>

                </div>

                <div class="full-row input-parent">

                    <div class="input-block vertical-center big-input">

                        <label for="step1_input1">מס׳ תיק<u>*</u></label>

                        <div class="input-wrapper">

                            <input type="text" name="step1_input1" id="step1_input1" placeholder="00000-00-00" required />

                        </div>

                    </div>

                    <div class="text-empty">שדה זה הינו שדה חובה</div>

                </div>

                <div class="full-row input-parent">

                    <div class="input-block vertical-center big-input">

                        <label>בית משפט<u>*</u></label>

                        <div class="input-wrapper">

                            <select name="step1_select1" id="step1_select1" data-pr="1" required>
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
                                        <option value="<?php echo get_the_title();?>" data-select-price="<?php echo get_post_meta(get_the_ID(),'price',true);?>"><?php the_title();?></option>

                                        <?php
                                    }
                                }
                                wp_reset_postdata();

                                ?>

                            </select>

                        </div>

                    </div>

                    <div class="text-empty">שדה זה הינו שדה חובה</div>
					<div class="text-plain">אנא בחר את ביהמ"ש שאליו הוגשה התביעה</div>

                </div>

                <div class="full-row input-parent">

                    <div class="input-block vertical-center big-input">

                        <label for="step1_input3">תאריך דיון (אם נקבע תאריך אנא ציין אותו)</label>

                        <div class="input-wrapper sp-flux-calendar">

                            <input type="text" name="step1_input3" id="step1_input3" data-date-picker />

                        </div>

                    </div>

                </div>

            </div>



            <!-- step2 -->

            <div class="step-page step_2">

                <div class="title-block">

                    <h1>פרטי הנתבע והתובע</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">פרטי נתבע</p>

                    </div>

                </div>

                <div class="info-box-arrow hidden" data-for="infobox">

                    <div class="down-arrow"></div>

                </div>

                <div class="info-box hidden"></div>

                <div class="title-block hidden" data-for="infobox">

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

                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_1" value="0" checked />

                            <label for="step3_1_radio1_1">אדם פרטי</label>

                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_2" value="1" />

                            <label for="step3_1_radio1_2">חברה</label>

                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_3" value="2" />

                            <label for="step3_1_radio1_3">עוסק מורשה</label>

                        </div>

                    </div>

                    <div class="full-row" data-step-row="1">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">ת.ז<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="passport[]" data-name="ת.ז" required>

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row"></div>

                        </div>

                    </div>

                    <div class="full-row" data-step-row="2">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם פרטי <u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="first_name[]" data-name="שם פרטי" >

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם משפחה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="last_name[]" data-name="שם משפחה" >

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא אותיות בעברית בלבד</div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row hidden" data-step-row="3">

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

                                        <input type='text' name="step3_input2_1[]" data-name="שם החברה"  >

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                        </div>

                    </div>

                    <div class="full-row hidden" data-step-row="4">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>ת.ז/ עוסק מורשה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input3[]" data-name="ת.ז/ עוסק מורשה" required disabled>

                                    </div>

                                </div>

                                <div class="text-empty">שדה זה הינו שדה חובה</div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label>שם עוסק מורשה<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step3_input4[]" data-name="שם עוסק מורשה" required disabled>

                                    </div>

                                </div>

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

                                    <label class="span_data_name_right"> טלפון נייד<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="phone[]" data-name="טלפון נייד" required>

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

                                    <label class="span_data_name">דוא״ל<u>*</u></label>

                                    <div class="input-wrapper">

                                        <input type='email' name="email[]" data-name="דוא״ל" required>

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

                        <span>אם קיימים נתבעים נוספים</span>

                        <a class="pls_btn important-text">לחץ להוספת נתבע נוסף</a>

                    </p>

                </div>

            </div>

            <!-- step 3 -->

            <div class="step-page step_3">

                <div class="title-block">

                    <h1>פרטי הנתבע והתובע</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">פרטי נתבע</p>

                    </div>

                </div>

                <div class="info-box-arrow hidden" data-for="infobox">

                    <div class="down-arrow"></div>

                </div>

                <div class="info-box hidden"></div>

                <div class="title-block hidden" data-for="infobox">

                    <div class="middle-line">

                        <p class="center-text big-text">אנא מלאו את פרטי התובע</p>

                    </div>

                </div>

                <div class="form_box" data-person-num="1" data-person-status="active">

                    <div class="edit_and_trash hidden">

                        <div class="delete_user" data-for-person="1"></div>

                    </div>

                    <div class="full-row" data-step-row="1">

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

                    <div class="full-row" data-step-row="2">

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

                                        <input type='text' name="client_numb_flour[]" data-name="מספר" required>

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

                            </div>

                        </div>

                    </div>

                    <div class="full-row">

                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right">דוא״ל</label>

                                    <div class="input-wrapper">

                                        <input type='text' name="step2_input1" data-name="דוא״ל">

                                    </div>

                                </div>

                            </div>

                            <div class="half-row input-parent">

                                <div class="input-block vertical-center adapt-center-flex big-input">

                                    <label class="span_data_name_right"> טלפון נייד</label>

                                    <div class="input-wrapper">

                                        <input type='tel' name="client_phone[]" data-name="טלפון נייד" />

                                    </div>

                                </div>

                                <div class="text-invalid">יש למלא מספרים בלבד</div>

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

                        <span>אם אינך תובע היחיד</span>

                        <a class="pls_btn important-text">לחץ להוספת תובע נוסף</a>

                    </p>

                </div>

            </div>

            <!-- step 4 -->

            <div class="step-page step_4">

                <div class="title-block">

                    <h1>טענות ונימוקי הגנה</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">תגובת הנתבע /נימוקי הגנה</p>

                    </div>

                </div>

                <div class="full-row input-parent">

                    <label for="step4_textarea1">תגובת הנתבע/ נימוקי הגנה<u>*</u></label>

                    <div class="input-block big-input long-input row-start">

                        <textarea name="step4_textarea1" id="step4_textarea1" class="round-border" maxlength="50000" required></textarea>

                    </div>

                    <div class="text-empty">שדה זה הינו שדה חובה</div>

                </div>

                <div class="full-row adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex wrap-row">

                    <div class="input-parent">

                        <div class="middle-line margin-y center-middle-line">

                            <p class="center-text big-text">מסמכים תומכים</p>

                        </div>

                        <div class="center-text">צרף לתביעתך כל מסמך אשר תומך בגרסתך לדוגמא: (קבלות, מסמכים רפואיים ועוד...)</div>

                        <div class="vertical-center row-center file-block">

                            <div class="file-icon">צרף מסמכים</div>

                            <input type="file" name="step4_file1" id="step4_file1" />

                            <label for="step4_file1" class="btn">העלה קובץ</label>

                        </div>

                    </div>

                </div>

            </div>



            <!-- step 5 -->

            <div class="step-page step_5">

                <div class="title-block">

                    <h1>הגשת כתב הגנה</h1>

                    <div class="middle-line">

                        <p class="center-text big-text">הזן את סכום התביעה</p>

                    </div>

                </div>

                <div class="result-row-wrap input-parent">

                    <div class="result-row big-text">

                        <div class="result-row-ins row-center vertical-center shackel">

                            <label for="step4_input1">סכום התביעה</label>

                            <div class="input-wrapper">

                                <input type="text" name="step4_input1" id="step4_input1" required data-tax="3" data-max-number="33900" />

                            </div>

                        </div>

                    </div>

                    <div class="text-empty">שדה זה הינו שדה חובה</div>
                    <div class="text-invalid">ניתן להגיש כתב הגנה עד סכום של 33,900 ש"ח</div>

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

                                    <label for="step4_check1"><span data-href-url="">ברצוני לקבל שירות הגשת כתב הגנה לבית המשפט</span></label>

                                    <div class="text-empty">שדה זה הינו שדה חובה</div>

                                </div>

                                <div class="full-row little-text input-parent">

                                    <input type="checkbox" name="step4_check3" id="step4_check3" required />

                                    <label for="step4_check3"><span data-href-url="">אני מסכים לתקנון  <a href="http://oedo.co.il/or.com/regulations/" class="link-check" target="_blank">האתר</a></span></label>

                                    <div class="text-empty">שדה זה הינו שדה חובה</div>

                                </div>

                                <div class="frame-line"></div>

                                <div class="full-row after-check padding-y">

                                    <span class="bold-text">דמי טיפול ופתיחת תיק:</span>

                                    <div class="block-inline"><span>₪</span><span data-tax="1" data-pr-summ="1"></span></div>

                                </div>

                                <div class="frame-line"></div>

                                <div class="full-row after-check padding-y" data-tax="4" data-tax-price="100">

                                    <span class="bold-text">תשלום אגרת בית המשפט:</span>

                                    <div class="block-inline"><span>₪</span><span data-tax="2" data-tax-summ="2"></span></div>

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

                <span class="text">המשך לפרטי התובע והנתבע</span>

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



<!--<div class="sp-form-wrapper" id="sp_third_form">-->

    <!--    <div class="sp-form-wrapper-ins">-->

        <!---->

        <!---->

        <!--        <form class="forms-block" name="sp_form" action="--><?php //echo admin_url('admin-ajax.php');?><!--">-->

            <!--            <input type="hidden" name="action" value="register_third_lid">-->

            <!---->

            <!--             step 1 -->

            <!--            <div class="step-page step_1 block">-->

                <!--                <div class="title-block">-->

                    <!--                    <h1>פרטי תיק התביעה</h1>-->

                    <!--                    <div class="middle-line">-->

                        <!--                        <p class="center-text big-text">אנא מלאו את פרטי תיק התביעה</p>-->

                        <!--                    </div>-->

                        <!--                </div>-->

                        <!--                <div class="full-row input-parent">-->

                            <!--                    <div class="input-block vertical-center big-input">-->

                                <!--                        <label for="step1_input1">מס׳ תיק<u>*</u></label>-->

                                <!--                        <div class="input-wrapper">-->

                                    <!--                            <input type="text" name="step1_input1" id="step1_input1" required />-->

                                    <!--                        </div>-->

                                    <!--                    </div>-->

                                    <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                    <!--                </div>-->

                                    <!--                <div class="full-row input-parent">-->

                                        <!--                    <div class="input-block vertical-center big-input">-->

                                            <!--                        <label>בית משפט<u>*</u></label>-->

                                            <!--                        <div class="input-wrapper">-->

                                                <!--                            <select name="step1_select1" id="step1_select1" required>-->

                                                    <!--                                <option value="" selected disabled></option>-->

                                                    <!--                                <option value="1">1</option>-->

                                                    <!--                                <option value="2">2</option>-->

                                                    <!--                                <option value="3">3</option>-->

                                                    <!--                            </select>-->

                                                    <!--                        </div>-->

                                                    <!--                    </div>-->

                                                    <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                    <!--                </div>-->

                                                    <!--                <div class="full-row input-parent">-->

                                                        <!--                    <div class="input-block vertical-center big-input">-->

                                                            <!--                        <label for="step1_input3">תאריך דיון (אם נקבע תאריך אנא ציין אותו)</label>-->

                                                            <!--                        <div class="input-wrapper sp-flux-calendar">-->

                                                                <!--                            <input type="text" name="step1_input3" id="step1_input3" data-date-picker />-->

                                                                <!--                        </div>-->

                                                                <!--                    </div>-->

                                                                <!--                </div>-->

                                                                <!--            </div>-->

                                                                <!---->

                                                                <!--             step2 -->

                                                                <!--            <div class="step-page step_2">-->

                                                                    <!--                <div class="title-block">-->

                                                                        <!--                    <h1>פרטי הנתבע והתובע</h1>-->

                                                                        <!--                    <div class="middle-line">-->

                                                                            <!--                        <p class="center-text big-text">פרטי התובע</p>-->

                                                                            <!--                    </div>-->

                                                                            <!--                </div>-->

                                                                            <!--                <div class="info-box-arrow">-->

                                                                                <!--                    <div class="down-arrow"></div>-->

                                                                                <!--                </div>-->

                                                                                <!--                <div class="info-box"></div>-->

                                                                                <!--                <div class="title-block">-->

                                                                                    <!--                    <div class="middle-line">-->

                                                                                        <!--                        <p class="center-text big-text">פרטי התובע</p>-->

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

                                                                                                                                                                                                    <!--                                    <label class="span_data_name_col_4"> מספר<u>*</u></label>-->

                                                                                                                                                                                                    <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                        <!--                                        <input type='number' name="client_numb_flour[]" data-name="מספר" required>-->

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

                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                    <!--                            <div class="three-row input-parent">-->

                                                                                                                                                                                                                        <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                            <!--                                    <label class="span_data_name"> מיקוד</label>-->

                                                                                                                                                                                                                            <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                <!--                                        <input type='number' name="client_index[]" data-name="מיקוד">-->

                                                                                                                                                                                                                                <!--                                    </div>-->

                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                <!--                                <div class="text-invalid">המיקוד שהזנת לא תקין</div>-->

                                                                                                                                                                                                                                <!--                                <a href="https://mypost.israelpost.co.il/%D7%A9%D7%99%D7%A8%D7%95%D7%AA%D7%99%D7%9D/%D7%90%D7%99%D7%AA%D7%95%D7%A8-%D7%9E%D7%99%D7%A7%D7%95%D7%93/" target="_blank" class="text-link">לאיתור מיקוד</a>-->

                                                                                                                                                                                                                                <!--                            </div>-->

                                                                                                                                                                                                                                <!--                        </div>-->

                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                    <!--                        <div class="flex adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex">-->

                                                                                                                                                                                                                                        <!--                            <div class="half-row input-parent">-->

                                                                                                                                                                                                                                            <!--                                <div class="input-block vertical-center adapt-center-flex big-input">-->

                                                                                                                                                                                                                                                <!--                                    <label class="span_data_name_right">דוא״ל</label>-->

                                                                                                                                                                                                                                                <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                    <!--                                        <input type='text' name="step2_input1" data-name="דוא״ל">-->

                                                                                                                                                                                                                                                    <!--                                    </div>-->

                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                    <!--                            <div class="half-row input-parent"></div>-->

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

                                                                                                                                                                                                                                                                <!--            <!-- step 3 -->

                                                                                                                                                                                                                                                                <!--            <div class="step-page step_3">-->

                                                                                                                                                                                                                                                                    <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                        <!--                    <h1>פרטי הנתבע והתובע</h1>-->

                                                                                                                                                                                                                                                                        <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                            <!--                        <p class="center-text big-text">פרטי נתבע</p>-->

                                                                                                                                                                                                                                                                            <!--                    </div>-->

                                                                                                                                                                                                                                                                            <!--                </div>-->

                                                                                                                                                                                                                                                                            <!--                <div class="info-box-arrow">-->

                                                                                                                                                                                                                                                                                <!--                    <div class="down-arrow"></div>-->

                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                <!--                <div class="info-box"></div>-->

                                                                                                                                                                                                                                                                                <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                                    <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                        <!--                        <p class="center-text big-text">פרטי נתבע</p>-->

                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                        <!--                <div class="form_box" data-person-num="1" data-person-status="active">-->

                                                                                                                                                                                                                                                                                            <!--                    <div class="edit_and_trash hidden">-->

                                                                                                                                                                                                                                                                                                <!--                        <div class="delete_user" data-for-person="1"></div>-->

                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                <!--                    <div class="full-row">-->

                                                                                                                                                                                                                                                                                                    <!--                        <div class="vertical-center adapt-wrap-flex adapt-center-flex bold-text bottom-padding">-->

                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_1" value="0" checked />-->

                                                                                                                                                                                                                                                                                                        <!--                            <label for="step3_1_radio1_1">אדם פרטי</label>-->

                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_2" value="1" />-->

                                                                                                                                                                                                                                                                                                        <!--                            <label for="step3_1_radio1_2">חברה</label>-->

                                                                                                                                                                                                                                                                                                        <!--                            <input type="radio" name="step3_1_radio1" class="lead_radio" id="step3_1_radio1_3" value="2" />-->

                                                                                                                                                                                                                                                                                                        <!--                            <label for="step3_1_radio1_3">עוסק מורשה</label>-->

                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                        <!--                    <div class="full-row" data-step-row="1">-->

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

                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row" data-step-row="2">-->

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

                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row hidden" data-step-row="3">-->

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

                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="full-row hidden" data-step-row="4">-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label class="span_data_name_right"> טלפון נייד<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                        <input type='tel' name="phone[]" data-name="טלפון נייד" required>-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label class="span_data_name">דוא״ל<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="input-wrapper">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                        <input type='email' name="email[]" data-name="דוא״ל" required>-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <span>אם קיימים נתבעים נוספים</span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <a class="pls_btn important-text">לחץ להוספת נתבע נוסף</a>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            <!-- step 4 -->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            <div class="step-page step_4">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="title-block">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <h1>טענות ונימוקי הגנה</h1>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="middle-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <p class="center-text big-text">תגובת הנתבע /נימוקי הגנה</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                <div class="full-row input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <label for="step4_textarea1">תגובת הנתבע/ נימוקי הגנה<u>*</u></label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    <div class="input-block big-input long-input row-start">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        <textarea name="step4_textarea1" id="step4_textarea1" class="round-border" maxlength="200" required></textarea>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    <div class="text-empty">שדה זה הינו שדה חובה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                <div class="full-row adapt-wrap-flex adapt-wrap-flex-767 adapt-center-flex wrap-row">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <!--                    <div class="input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                        <div class="middle-line margin-y center-middle-line">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            <p class="center-text big-text">מסמכים תומכים</p>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="center-text">צרף לתביעתך כל מסמך אשר תומך בגרסתך לדוגמא: (קבלות, מסמכים רפואיים ועוד...)</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        <div class="vertical-center row-center">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <div class="file-icon">צרף מסמכים</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <input type="file" name="step4_file1" id="step4_file1" />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                            <label for="step4_file1" class="btn">העלה קובץ</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--            <!-- step 5 -->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--            <div class="step-page step_5">-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <input type="text" name="step4_input1" id="step4_input1" required data-tax="3" />-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <label for="step4_check1">ברצוני לקבל שירות הגשת הגנה לבית המשפט.</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                <div class="full-row little-text input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <input type="checkbox" name="step4_check2" id="step4_check2" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <label for="step4_check2">ברצוני לקבל שירות ייעוץ הכולל ניסוח ועיבוד כתב תביעה.</label>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <div class="text-empty">עליך לסמן את כל התיבות על מנת להגיש תביעה</div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                <div class="full-row little-text input-parent">-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <input type="checkbox" name="step4_check3" id="step4_check3" required />-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <!--                                    <label for="step4_check3"><span data-href-url="">אני מסכים לתנאי התקנון.</span></label>-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--                                    <div class="block-inline"><span>₪</span><span data-tax="2">50</span></div>-->

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

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                    <span>₪</span><span data-tax-summ="1" id="sum_for_pay"></span>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                        </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--                </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--            </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--        </form>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!---->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--    </div>-->

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <!--</div>-->







                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <?php



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    get_footer();



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/jquery-ui.min.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri();?>/js/plugins/select2.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <script src="<?php echo get_stylesheet_directory_uri();?>/js/index.js"></script>



