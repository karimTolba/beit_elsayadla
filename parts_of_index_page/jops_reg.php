<div id="caption" style="margin:<?php if(isset($_SESSION["data_stored"])) echo "50px"; else echo "100px"; ?> auto 0px auto;font-family : nav-font;">

    <?php

    if(isset($_SESSION["data_stored"])){

    ?>

    <div class="alert alert-success" style="text-align : center;width : 40%;margin : 100px auto 0px auto;font-size : 20px;"><?php echo $_SESSION["data_stored"]; ?></div>

    <?php

        unset($_SESSION["data_stored"]);

    }


    ?>

   التسجيل في الوظيفة  

</div>
<div id="form_container" style="margin : 50px auto 100px auto;">
  <form action="handles/jop_reg_handle.php" method="post" dir="rtl" style="text-align : right;">
    <div class="form-group">
      <label for="exampleFormControlInput1">الاسم*</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="الاسم" required>
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">الوظيفة*</label>
    <select class="form-control" id="exampleFormControlSelect1" name="jop_title" required>
      <option value="" selected disabled>__اختر اسم الوظيفة__</option>
      <option value="صيدلى ثان ابحث عن عمل">صيدلى ثان ابحث عن عمل</option>
      <option value="صيدلى مدير ابحث عن عمل">صيدلى مدير ابحث عن عمل</option>
      <option value="عامل بصيدلية ابحث عن عمل">عامل بصيدلية ابحث عن عمل</option>
      <option value="وظيفة في صيدلية">وظيفة في صيدلية</option>
    </select>
  </div>
  <div class="form-group" id="gov">
        <label for="govs">المحافظات*</label>
        <select class="form-control" id="govs" name="gov" required>
        <option value="" selected disabled>__اختر المحافظة__</option>
        <option value="1">شمال سيناء</option>
        <option value="2">الاسماعيلية</option>
        <option value="3">السويس</option>
        <option value="4">بورسعيد</option>
        <option value="5">القاهرة</option>
        <option value="6">الاسكندرية</option>
        </select>
    </div>
  <div class="form-group">
    <label for="area">المناطق*</label>
    <select class="form-control" id="area" name="location" required>
      <option value="" selected disabled>__اختر المناطق__</option>
      <option value="بئر العبد">بئر العبد</option>
      <option value="العريش">العريش</option>
      <option value="الحسنه">الحسنه</option>
      <option value="الشيخ زويد">الشيخ زويد</option>
    </select>
  </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">الخبرات والملاحظات*</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="exp_not" placeholder="الخبرات والملاحظات" required></textarea>
    </div>
    <div class="form-group">
      <label for="earth_number_input">التليفون الارضى</label>
      <input type="text" class="form-control" id="earth_number_input" name="tel_ear" placeholder="التليفون الارضى">
    </div>
    <div class="alert alert-danger" id="earth_number" style="direction: rtl;" hidden>
      الرقم يكون على هذة الهيئة (كودالمحافظة/الرقم)
    </div>
    <div class="form-group">
      <label for="mobile_number_input">التليفون المحمول*</label>
      <input type="text" class="form-control" id="mobile_number_input" name="tel_mob" placeholder="التليفون المحمول" required>
    </div>
    <div class="alert alert-danger" id="mobile_number" style="direction: rtl;" hidden>
      ادخل رقم الموبايل صحيح
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">البريد الالكترونى*</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="البريد الالكترونى" required>
    </div>
    <div class="form-group" style="padding-top : 20px">
       <input type="submit" class="btn btn-lg btn-danger" id="submit" value="تسجيل"> 
    </div>  
  </form>
</div>

<script>

  const govs = document.getElementById("govs");
  const area = document.getElementById("area");
  const options = area.getElementsByTagName("option");
  const north_sinea = ["بئر العبد" , "العريش" , "الحسنه" , "الشيخ زويد"];
  const esmaelia = ["الاسماعيلية" , "التل الكبير" , "فايد" , "القنطرة شرق" , "القنطرة غرب" , "ابوصوير" , "القصاصين"];
  const suez = ["السويس" , "الاربعين" , "الجناين" , "فيصل" , "كفر النجار"];
  const portsaid = ["شرق" , "جنوب" , "بورفؤاد" , "الضواحى" , "المناخ" , "الزهور" , "العرب"];
  const mobile_number = document.getElementById("mobile_number");
  const earth_number = document.getElementById("earth_number");
  const mobile_number_input = document.getElementById("mobile_number_input");
  const earth_number_input = document.getElementById("earth_number_input");
  const submit = document.getElementById("submit");
  const cairo = ["السلام اول" , "السلام ثانى" , "المرج" , "المطرية" , "النزهة" , "عين شمس" , "مدينة نصر" , "مدينة نصر شرق" , "مدينة نصر غرب" , "مصر الجديدة" 
                  , "الاسبكيه"  , "الموسكى" , "الوايلى" , "باب الشعرية" , "بولاق" , "عابدين" , "غرب" , "منشاة ناصر" , "وسط" 
                  , "15 مايو" , "البساتين" , "الخليفة" , "السيدة زينب" , "المعادى" , "المعصرة" , "المقطم" , "حلوان" , "دار السلام" , "طرة" , "مصر القديمه" 
                  , "الاميرية" , "الزاية الحمراء" , "الزيتون" , "الساحل" , "الشرابية" , "حدائق القبه" , "روض الفرج" , "شبرا"];
  const alexandria = ["ابو قير" , "الابراهيمية" , "الازاريطة" , "الانفوشى" , "الحضره" , "الدخيله" , "السرايا" , "السيوف" , "الشاطبى" , "العجمى" , "العصافرة" , "العطارين" , "القبارى" , "اللبان" , "المعمورة" , "المكس" , "المنتزة" , "المندرة" , "المنشية" , "الورديان" 
                      , "باكوس"  ,"بحرى" , "بولكلى" 
                      , "ثروت" 
                      , "جليم" 
                      , "الجمرك" , "العامرية" , "كليوباترا" , "ميامى" 
                      , "راس التين" , "رشدى" 
                      , "زيزينيا" 
                      , "سابا باشا" , "سان ستيفانو" 
                      , "سبورتينج" ,"ستانلى" , "سموحة" , "سيدى بشر" , "سيدى جابر" 
                      , "شدس" 
                      , "صفر" 
                      , "فيكترويا" , "فلمنج" 
                      , "كامب شيزار", "كرموز" , "كفر عبده" , "كوم الدكه" , "كونت زيزينيا" 
                      , "لوران" 
                      , "محرم بك" , "محطة الرمل"];
  let regex_mobile = /[0-9]{11}/ig;
  let regex_earth = /^(068|062|066|064|03|02)\/[0-9]{7}$/i;
  
  mobile_number_input.oninput = ()=>{

    if(mobile_number_input.value == ""){

      mobile_number.setAttribute("hidden" , "");
      submit.removeAttribute("disabled");

    }

    else{

      if(regex_mobile.test(mobile_number_input.value) == false){
        mobile_number.removeAttribute("hidden");
        submit.setAttribute("disabled" , "");
      }
      else{
        mobile_number.setAttribute("hidden" , "");
        submit.removeAttribute("disabled");
      }

  }

  }

  earth_number_input.oninput = ()=>{

  if(earth_number_input.value == ""){

    earth_number.setAttribute("hidden" , "");
    submit.removeAttribute("disabled");

  }  

  else{

    if(regex_earth.test(earth_number_input.value) == false){
      earth_number.removeAttribute("hidden");
      submit.setAttribute("disabled" , "");
    }
    else{
      earth_number.setAttribute("hidden" , "");
      submit.removeAttribute("disabled");
    }
}

}


  govs.onchange = ()=>{

    if(govs.selectedIndex == 1){

      
      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (north_sinea.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(north_sinea[x]);
        option.value = north_sinea[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

    }
    
    if(govs.selectedIndex == 2){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (esmaelia.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(esmaelia[x]);
        option.value = esmaelia[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

    }

    if(govs.selectedIndex == 3){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (suez.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(suez[x]);
        option.value = suez[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }
      
    }
    if(govs.selectedIndex == 4){

      for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
      }

      for(let x = 0 ; x <= (portsaid.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(portsaid[x]);
        option.value = portsaid[x];
        option.appendChild(text_option);
        area.appendChild(option);

      }

      }

      if(govs.selectedIndex == 5){

        for (var i=options.length; i--;) {
            if(i != 0)
              area.removeChild(options[i]);
        }

        for(let x = 0 ; x <= (cairo.length-1);x++){

          let option = document.createElement("option");
          let text_option = document.createTextNode(cairo[x]);
          option.value = cairo[x];
          option.appendChild(text_option);
          area.appendChild(option);

        }

        }       

        if(govs.selectedIndex == 6){

        for (var i=options.length; i--;) {
          if(i != 0)
            area.removeChild(options[i]);
        }

        for(let x = 0 ; x <= (alexandria.length-1);x++){

        let option = document.createElement("option");
        let text_option = document.createTextNode(alexandria[x]);
        option.value = alexandria[x];
        option.appendChild(text_option);
        area.appendChild(option);

        }

        }
        
  

  }

  alert("نحيط علم سيادتكم انه سوف يتم ازالة الاعلانات التى مضى عليها 25 يوم تلقائيا");
</script>