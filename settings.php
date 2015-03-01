<?php include('api/config.php');  ?>
<?php 
if(!isset($_SESSION['s_user_id'])){
  header('location: index.php')  ;
/* echo '<script>window.location="'.WEBSITE_URL.'";<script>';
*/}
 ?>
<!DOCTYPE html>
<html>
<hcssead>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title> 

    <!-- Latest compiled and minified JavaScript -->
     <link rel="stylesheet" href="css/jarvis-lib.css">
    <link rel="stylesheet" href="css/jarvis-main.css">
    <link rel="stylesheet" href="css/jarvis-tv.css">


    <link rel="stylesheet" href="css/jarvis-theme-2.css">
    <link rel="stylesheet" href="css/common.css">

<?php include('inc/js.php'); ?>

    </head>

    <body>
        <!-- Static navbar -->
     <?php include('inc/header.php'); ?>

<?php include('inc/channel.php'); ?>
<input type="hidden" id="uid" value="<?php echo $_SESSION['s_user_id']; ?>"> 
<div class="container">
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="be-setting" id="jsid-user-setting">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidebar-tab">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a rel="nofollow" href="settings.php">Account</a>
                                </li>
                                <div class="divider"></div>
                                <li class=""><a rel="nofollow" href="password.php">Password</a>
                                </li>
                                <li class=""><a rel="nofollow" href="profile.php">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- / col-sm-3 -->
                    <div class="col-sm-9">
                        <form class="form-horizontal"  action="javascript:;">
                            <input type="hidden" value="account" name="nav">
                            <div class="page-header">
                                <h1>Account</h1>
                            </div>
                            <div class="form-group">
                                <div class="alert alert-danger" id="error-login" style="display:none">
                                Some Thing Wong!
                            </div>
                                <label class="col-sm-3 control-label" for="inputavatar1">Avatar</label>
                                <div class="col-sm-9 col-lg-6">
                                    <div class="form-avatar">
                                        <input type="hidden" name="" id="pic_path">
                                    
                                        <div  class="badge-dragndrop-upload avatar-preview" style="margin-bottom:10px;" id="jsid-container-avatar-preview"><img onerror="$(this).src='images/avatar.jpg';" id="image_preview" src="images/avatar.jpg">
                                        </div>
                                        <div class="avatar-file">
                                            <input type="button" value="Browse"  onclick='$("#photo_iframe2").contents().find("input").trigger("click");' class="badge-dragndrop-upload upload" id="inputavatar1">
                                            <p class="help-block">JPG, or PNG, Max size: 2MB</p>
                                            <img height="20" style="margin-top: -10px; display:none;" src="images/loader.gif" id="upload-spinner">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="col-sm-3 control-label" for="name">Name</label>
                                <div class="col-sm-9 col-lg-6">
                                    <input type="text" value="" name="" id="name" class="form-control">
                                </div>
                            </div>
                            <!-- / form-group -->
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="email">Email Address</label>
                                <div class="col-sm-9 col-lg-6">
                                    <input type="email" value="<?php echo $_SESSION['s_email']; ?>"  id="email" class="form-control" name="">
                                    <p class="help-block">
                                        Email address will not be displayed publicly
                                        <br>
                                    </p>
                                </div>
                            </div>
                          <!--   <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputlanguage1">Language</label>
                                <div class="col-sm-9 col-lg-6">
                                    <select name="setting[account][language]" class="form-control" id="inputlanguage1">
                                        <option selected="" value="en">English</option>
                                        <option value="zh">繁體中文</option>
                                        <option value="zh_CN">簡體中文</option>
                                        <option value="fr">français</option>
                                        <option value="de">Deutsch</option>
                                        <option value="ja">日本語</option>
                                        <option value="es">Español</option>
                                        <option value="pt">Português</option>
                                        <option value="ru">Русский</option>
                                        <option value="tr">Türkçe</option>
                                    </select>
                                </div>
                            </div> -->
                            <iframe id="photo_iframe2" src="upload-file.php" scrolling="no" frameborder="0" width="0px" height="0px" style="display:none;"> </iframe> 
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="gender">Gender</label>
                                <div class="col-sm-9 col-lg-6">
                                    <select name="setting[account][gender]" class="form-control" id="gender">
                                        <option selected="" value="0">Unspecified</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputcountry1">Country</label>
                                <div class="col-sm-9 col-lg-6">
                                    <select name="setting[account][location]" class="form-control" id="inputcountry1">
                                        <option value="">Please Choose...</option>
                                        <option value="af">Afghanistan</option>
                                        <option value="al">Albania</option>
                                        <option value="dz">Algeria</option>
                                        <option value="as">American Samoa</option>
                                        <option value="ad">Andorra</option>
                                        <option value="ao">Angola</option>
                                        <option value="ai">Anguilla</option>
                                        <option value="aq">Antarctica</option>
                                        <option value="ag">Antigua And Barbuda</option>
                                        <option value="ar">Argentina</option>
                                        <option value="am">Armenia</option>
                                        <option value="aw">Aruba</option>
                                        <option value="au">Australia</option>
                                        <option value="at">Austria</option>
                                        <option value="az">Azerbaijan</option>
                                        <option value="bs">Bahamas</option>
                                        <option value="bh">Bahrain</option>
                                        <option value="bd">Bangladesh</option>
                                        <option value="bb">Barbados</option>
                                        <option value="by">Belarus</option>
                                        <option value="be">Belgium</option>
                                        <option value="bz">Belize</option>
                                        <option value="bj">Benin</option>
                                        <option value="bm">Bermuda</option>
                                        <option value="bt">Bhutan</option>
                                        <option value="bo">Bolivia</option>
                                        <option value="ba">Bosnia And Herzegovina</option>
                                        <option value="bw">Botswana</option>
                                        <option value="br">Brazil</option>
                                        <option value="io">British Indian Ocean Territory</option>
                                        <option value="bn">Brunei Darussalam</option>
                                        <option value="bg">Bulgaria</option>
                                        <option value="bf">Burkina Faso</option>
                                        <option value="bi">Burundi</option>
                                        <option value="kh">Cambodia</option>
                                        <option value="cm">Cameroon</option>
                                        <option value="ca">Canada</option>
                                        <option value="cv">Cape Verde</option>
                                        <option value="ky">Cayman Islands</option>
                                        <option value="cf">Central African Republic</option>
                                        <option value="td">Chad</option>
                                        <option value="cl">Chile</option>
                                        <option value="cn">China</option>
                                        <option value="co">Colombia</option>
                                        <option value="km">Comoros</option>
                                        <option value="cg">Congo</option>
                                        <option value="ck">Cook Islands</option>
                                        <option value="cr">Costa Rica</option>
                                        <option value="ci">Cote D'Ivoire</option>
                                        <option value="hr">Croatia</option>
                                        <option value="cu">Cuba</option>
                                        <option value="cy">Cyprus</option>
                                        <option value="cz">Czech Republic</option>
                                        <option value="dk">Denmark</option>
                                        <option value="dj">Djibouti</option>
                                        <option value="dm">Dominica</option>
                                        <option value="do">Dominican Republic</option>
                                        <option value="ec">Ecuador</option>
                                        <option value="eg">Egypt</option>
                                        <option value="sv">El Salvador</option>
                                        <option value="gq">Equatorial Guinea</option>
                                        <option value="er">Eritrea</option>
                                        <option value="ee">Estonia</option>
                                        <option value="et">Ethiopia</option>
                                        <option value="fk">Falkland Islands (Malvinas)</option>
                                        <option value="fo">Faroe Islands</option>
                                        <option value="fm">Federated States Of Micronesia</option>
                                        <option value="fj">Fiji</option>
                                        <option value="fi">Finland</option>
                                        <option value="fr">France</option>
                                        <option value="gf">French Guiana</option>
                                        <option value="pf">French Polynesia</option>
                                        <option value="ga">Gabon</option>
                                        <option value="gm">Gambia</option>
                                        <option value="ge">Georgia</option>
                                        <option value="de">Germany</option>
                                        <option value="gh">Ghana</option>
                                        <option value="gi">Gibraltar</option>
                                        <option value="gr">Greece</option>
                                        <option value="gl">Greenland</option>
                                        <option value="gd">Grenada</option>
                                        <option value="gp">Guadeloupe</option>
                                        <option value="gu">Guam</option>
                                        <option value="gt">Guatemala</option>
                                        <option value="gn">Guinea</option>
                                        <option value="gw">Guinea-Bissau</option>
                                        <option value="gy">Guyana</option>
                                        <option value="ht">Haiti</option>
                                        <option value="va">Holy See (Vatican City State)</option>
                                        <option value="hn">Honduras</option>
                                        <option value="hk">Hong Kong</option>
                                        <option value="hu">Hungary</option>
                                        <option value="is">Iceland</option>
                                        <option value="in">India</option>
                                        <option value="id">Indonesia</option>
                                        <option value="iq">Iraq</option>
                                        <option value="ie">Ireland</option>
                                        <option value="ir">Islamic Republic Of Iran</option>
                                        <option value="il">Israel</option>
                                        <option value="it">Italy</option>
                                        <option value="jm">Jamaica</option>
                                        <option value="jp">Japan</option>
                                        <option value="jo">Jordan</option>
                                        <option value="kz">Kazakhstan</option>
                                        <option value="ke">Kenya</option>
                                        <option value="ki">Kiribati</option>
                                        <option value="kw">Kuwait</option>
                                        <option value="kg">Kyrgyzstan</option>
                                        <option value="la">Lao People'S Democratic Republic</option>
                                        <option value="lv">Latvia</option>
                                        <option value="lb">Lebanon</option>
                                        <option value="ls">Lesotho</option>
                                        <option value="lr">Liberia</option>
                                        <option value="ly">Libyan Arab Jamahiriya</option>
                                        <option value="li">Liechtenstein</option>
                                        <option value="lt">Lithuania</option>
                                        <option value="lu">Luxembourg</option>
                                        <option value="mo">Macao</option>
                                        <option value="mg">Madagascar</option>
                                        <option value="mw">Malawi</option>
                                        <option value="my">Malaysia</option>
                                        <option value="mv">Maldives</option>
                                        <option value="ml">Mali</option>
                                        <option value="mt">Malta</option>
                                        <option value="mh">Marshall Islands</option>
                                        <option value="mq">Martinique</option>
                                        <option value="mr">Mauritania</option>
                                        <option value="mu">Mauritius</option>
                                        <option value="yt">Mayotte</option>
                                        <option value="mx">Mexico</option>
                                        <option value="mc">Monaco</option>
                                        <option value="mn">Mongolia</option>
                                        <option value="me">Montenegro</option>
                                        <option value="ms">Montserrat</option>
                                        <option value="ma">Morocco</option>
                                        <option value="mz">Mozambique</option>
                                        <option value="mm">Myanmar</option>
                                        <option value="na">Namibia</option>
                                        <option value="nr">Nauru</option>
                                        <option value="np">Nepal</option>
                                        <option value="nl">Netherlands</option>
                                        <option value="an">Netherlands Antilles</option>
                                        <option value="nc">New Caledonia</option>
                                        <option value="nz">New Zealand</option>
                                        <option value="ni">Nicaragua</option>
                                        <option value="ne">Niger</option>
                                        <option value="ng">Nigeria</option>
                                        <option value="nu">Niue</option>
                                        <option value="nf">Norfolk Island</option>
                                        <option value="mp">Northern Mariana Islands</option>
                                        <option value="no">Norway</option>
                                        <option value="om">Oman</option>
                                        <option value="pk">Pakistan</option>
                                        <option value="pw">Palau</option>
                                        <option value="ps">Palestinian Territory, Occupied</option>
                                        <option value="pa">Panama</option>
                                        <option value="pg">Papua New Guinea</option>
                                        <option value="py">Paraguay</option>
                                        <option value="pe">Peru</option>
                                        <option value="ph">Philippines</option>
                                        <option value="pl">Poland</option>
                                        <option value="pt">Portugal</option>
                                        <option value="pr">Puerto Rico</option>
                                        <option value="qa">Qatar</option>
                                        <option value="kr">Republic Of Korea</option>
                                        <option value="xk">Republic of Kosovo</option>
                                        <option value="mk">Republic Of Macedonia</option>
                                        <option value="md">Republic Of Moldova</option>
                                        <option value="rs">Republic Of Serbia</option>
                                        <option value="re">Reunion</option>
                                        <option value="ro">Romania</option>
                                        <option value="ru">Russian Federation</option>
                                        <option value="rw">Rwanda</option>
                                        <option value="kn">Saint Kitts And Nevis</option>
                                        <option value="lc">Saint Lucia</option>
                                        <option value="vc">Saint Vincent And The Grenadines</option>
                                        <option value="ws">Samoa</option>
                                        <option value="sm">San Marino</option>
                                        <option value="st">Sao Tome And Principe</option>
                                        <option value="sa">Saudi Arabia</option>
                                        <option value="sn">Senegal</option>
                                        <option value="sc">Seychelles</option>
                                        <option value="sl">Sierra Leone</option>
                                        <option value="sg">Singapore</option>
                                        <option value="sk">Slovakia</option>
                                        <option value="si">Slovenia</option>
                                        <option value="sb">Solomon Islands</option>
                                        <option value="so">Somalia</option>
                                        <option value="za">South Africa</option>
                                        <option value="gs">South Georgia And The South Sandwich Islands</option>
                                        <option value="es">Spain</option>
                                        <option value="lk">Sri Lanka</option>
                                        <option value="sd">Sudan</option>
                                        <option value="sr">Suriname</option>
                                        <option value="sz">Swaziland</option>
                                        <option value="se">Sweden</option>
                                        <option value="ch">Switzerland</option>
                                        <option value="sy">Syrian Arab Republic</option>
                                        <option value="tw">Taiwan</option>
                                        <option value="tj">Tajikistan</option>
                                        <option value="th">Thailand</option>
                                        <option value="cd">The Democratic Republic Of The Congo</option>
                                        <option value="tl">Timor-Leste</option>
                                        <option value="tg">Togo</option>
                                        <option value="tk">Tokelau</option>
                                        <option value="to">Tonga</option>
                                        <option value="tt">Trinidad And Tobago</option>
                                        <option value="tn">Tunisia</option>
                                        <option value="tr">Turkey</option>
                                        <option value="tm">Turkmenistan</option>
                                        <option value="tv">Tuvalu</option>
                                        <option value="ug">Uganda</option>
                                        <option value="ua">Ukraine</option>
                                        <option value="ae">United Arab Emirates</option>
                                        <option value="gb">United Kingdom</option>
                                        <option value="tz">United Republic Of Tanzania</option>
                                        <option value="us">United States</option>
                                        <option value="um">United States Minor Outlying Islands</option>
                                        <option value="uy">Uruguay</option>
                                        <option value="uz">Uzbekistan</option>
                                        <option value="vu">Vanuatu</option>
                                        <option value="ve">Venezuela</option>
                                        <option value="vn">Viet Nam</option>
                                        <option value="vg">Virgin Islands, British</option>
                                        <option value="vi">Virgin Islands, U.S.</option>
                                        <option value="wf">Wallis And Futuna</option>
                                        <option value="ye">Yemen</option>
                                        <option value="zm">Zambia</option>
                                        <option value="zw">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputbirthday1">Birthday</label>
                                <div class="col-sm-9 col-lg-6">
                                    <div class="row gutter-10">
                                        <div class="col-xs-4">
                                            <input type="text" value="" name="" placeholder="YYYY" class="form-control" id="bday_year">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" value="" name="" placeholder="MM" class="form-control" id="bday_month">
                                        </div>
                                        <div class="col-xs-4">
                                            <input type="text" value="" name="" placeholder="DD" class="form-control" id="bday_day">
                                        </div>
                                    </div>
                                </div>
                            </div>
                         <!--    <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputsocialaccountfacebook1">Facebook</label>
                                <div class="col-sm-9 col-lg-6">
                                    <button value="connectFacebook" type="submit" name="action" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i>Connect to Facebook</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="inputsocialaccountgoogle1">Google+</label>
                                <div class="col-sm-9 col-lg-6">
                                    <button value="disconnectGplus" type="submit" name="action" class="btn btn-link no-padding">Disconnect</button>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <div class="btn-container">
                                        <input type="button" value="Save Changes" class="btn btn-primary" id="jsid-settings-save">
                                        <img height="25" style="margin-left: 10px; display:none;" src="images/loader.gif" id="update-spinner">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- / col-sm-9 -->
                </div>
                <!-- / row -->
            </div>
            <!-- / be-account -->
        </div>
        <!-- / page-wrapper -->
    </div>
</div>

<footer>
        <div class="container">
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-12">
                    <div class="dpa-728">
                        <div class="dpa-container size-728x90">
                            <!-- jarvis-list-footer-728x90 -->

                            <div id="div-gpt-ad-1397179863114-0" style=
                            "width: 728px; height: 90px;">
                                

                                <div id="" style="border: 0pt none;"></div>
                            </div>
                        </div><!-- / dpa-container -->
                    </div><!-- / dpa-728 -->
                </div><!-- / col-md-12 -->
            </div><!-- / row-->

            <div class="row">
                <div class="col-md-12">
                    <p class="links"> 9GAG.tv Â© 2015</p>
                </div><!-- / col-md-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </footer>

    <script>
    $(function(){
        var uid = $("#uid").val();

        $.post(API_URL+"login.php", {id:uid, action:'getUserInfo'}, function(data){
          
          if(data.image_path != null){
            
             $("#image_preview").attr('src',data.image_path);
          }

         // $("#image_preview").attr('src','');
          $("#name").val(data.name);
          $("#email").val(data.email);
          $("#gender").val(data.gender);
          $("#inputcountry1").val(data.currentLocation);
          if(data.birthday != null){
          var birthday = data.birthday.split('-');
          if(birthday.length > 2){
            $("#bday_year").val(birthday[0]);
            $("#bday_month").val(birthday[1]);
            $("#bday_day").val(birthday[2]);
          
          }
      }
 
        }, "json" );

        $("#jsid-settings-save").click(function(){

            var name =  $("#name");
            var email =  $("#email");
            var gender =  $("#gender");
            var currentLocation= $("#inputcountry1");
            var image_path = $("#pic_path");

            var bday1 = $("#bday_year");
            var bday2 = $("#bday_month");
            var bday3 = $("#bday_day");
            var bday = '';
            var errors = [];
            if(bday1.val()!= '' && bday2.val() != '' && bday3.val() != ''){

                bday = bday1.val()+'-'+bday2.val()+'-'+bday3.val();
            }

 
           
                if($.trim(name.val()) == ''){
                    name.parent().addClass('has-error');
                    errors.push('Please enter name.');
                }else{
                    name.parent().removeClass('has-error');
                }

                if($.trim(email.val()) == '' || $.trim(email.val().toLowerCase()) == 'email address' ||   isValidEmail($.trim(email.val())) == false){
                    email.parent().addClass('has-error');
                    errors.push('Please enter email address.');
                }else{
                    email.parent().removeClass('has-error');
                }
            if(errors.length < 1){
 
            $("#update-spinner").show();
                 $.post(API_URL+"get-videos.php", {name:name.val(),email:email.val(), gender:gender.val(),
                                                   currentLocation:currentLocation.val(),
                                                   image_path:image_path.val(),
                                                   birthday:bday,
                                                   action:'updateUser'}, function(data){

                    $("#update-spinner").hide();
                    
                    if(data.status == 'success'){
                            $("#error-login").addClass('alert-success').removeClass('alert-danger').html('Updated Successfully').fadeIn().delay(4000).fadeOut();
                    }else{
                            $("#error-login").removeClass('alert-success').addClass('alert-danger').html('Email Address Already Exists, Please Try Another').fadeIn().delay(4000).fadeOut();
                    }
     
                 }, "json" );
         }

        });
    });
    </script>
</body>

</html>