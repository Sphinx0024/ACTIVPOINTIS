<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>POINTIS</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="#">
  <link href="css/FormPointis.css" rel="stylesheet">
  <script type="text/javascript">
    var onloadCallback = function() {
      grecaptcha.render('html_element', {
        'sitekey': '6LeXFcYlAAAAAGRdDDj2cZBkchqzkQYUZoCxU3HP'
      });
    };
  </script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</head>

<body class="corp h-100  ">
  <!-- <div>
        <img src="images/media/img-gps.png">
    </div> -->
  <!-- <div class=" p-4 border-green-600 "> -->
  <!-- <div class="flex-none relative ml-20">
        <img src="images/media/img-gps.png" class="absolute inset-0 "/>
      </div> -->

  <nav class="">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->

        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <!-- <div class="flex flex-shrink-0 items-center">
              <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div> -->
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <!-- <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a> -->
              <a href="index.html"><img src="images/_pointIS.png" class="w-16 ml-3"></a>
              
            </div>
            
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="rounded-full border-gray-300 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <!-- <span class="sr-only">View notifications</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg> -->

          </button>

          <!-- Profile dropdown -->
          <div class="relative ml-3">
            <div>
              <!-- <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button> -->
              <!-- <span>Se connecter</span> -->
            </div>

            <!--
                Dropdown menu, show/hide based on menu state.
    
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->

          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
      </div>
    </div>
  </nav>

  <div class=" rounded-2xl formbold-main-wrapper bg-slate-100 mr-10  ml-60 mt-0 mb-10 pr-4  shadow-lg shadow-back-500/50">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <!-- <div class="formbold-form-wrapper"> -->
    <div class="img">
      <img src="images/img-gps.png" class="object-cover rounded-l-2xl " />
    </div>
    <form class="">

      <div class="formbold-steps ml-2 mt-0">

        <ul>
          <li class="formbold-step-menu1 active">
            <span>1</span>
            Société
          </li>
          <li class="formbold-step-menu2">
            <span>2</span>
            Administrateur
          </li>
          <li class="formbold-step-menu3">
            <span>3</span>
            Resumé
          </li>
        </ul>
      </div>

      <div class="formbold-form-step-1 active ml-2">
        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label"> Nom de l'entreprise </label>
            <input type="text" name="nom_entrep" placeholder="Nom de l'entreprise" id="user_name" class="formbold-form-input " />
          </div>
          <div>
            <label for="lastname" class="formbold-form-label"> RCCM </label>
            <input type="text" name="rccm" placeholder="RCCM" id="RCCM" class="formbold-form-input" />
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
            <label for="dob" class="formbold-form-label"> Localisation </label>
            <input type="text" name="loc" placeholder="Localisation" id="localisation" class="formbold-form-input" />
          </div>
          <div>
            <label for="email" class="formbold-form-label"> Adresse mail </label>
            <input type="email" name="email" placeholder="Adresse mail" id="email" class="formbold-form-input" />
          </div>
        </div>

        <div>
          <label for="address" class="formbold-form-label"> Telephone </label>
          <input type="text" name="address" id="tel_entreprise" placeholder="Telephone" class="formbold-form-input" />
        </div>
      </div>

      <div class="formbold-form-step-2 ml-2">
        <div class="formbold-input-flex">
          <div>
            <label for="firstname" class="formbold-form-label">Nom </label>
            <input type="text" name="firstname" placeholder="Nom " id="nom_admin" class="formbold-form-input" />
          </div>
          <div>
            <label for="lastname" class="formbold-form-label"> Prenom</label>
            <input type="text" name="prenom" placeholder="Prenom" id="prenom_admin" class="formbold-form-input" />
          </div>
        </div>
        <div>
          <div class="formbold-input-flex">
            <div>
              <label for="firstname" class="formbold-form-label"> Adresse mail  </label>
              <input type="text" name="firstname" placeholder="Adresse mail personnel" id="email_admin" class="formbold-form-input" />
            </div>

            <div>
              <label for="lastname" class="formbold-form-label"> Telephone </label>
              <input type="text" name="lastname" placeholder="Telephone" id="tel_admin" class="formbold-form-input" />
            </div>
          </div>
          <div class="formbold-input-flex">

            <div class="custom-select">
              <label for="lastname" class="formbold-form-label "> Sexe </label>
              <select id="sex_admin" style="width:75%;height:75%;">
                <option value="M" class="text-center">Masculin</option>
                <option value="F"class="text-center">Feminin</option>

              </select>

            </div>
          </div>
        </div>

      </div>

      <div class="formbold-form-step-3 ml-2">
        <!-- <div class=""> -->
        <div class="grid grid-rows-2 gap-2 ">
          <!-- <h1>Informations sur l'entreprise</h1> -->


          <div class="grid grid-cols-2" style="font-size: small;">
            <div>

              <div>
                <div class="h-10 font-bold">Société</div>
                <label class="font-medium">Nom:</label>
                <span id="nom_eAf" class="span"></span>
              </div>
              <div class="">
                <label class="font-medium">RCCM :</label>
                <span id="rccm_Af"></span>
              </div>
              <div class="">
                <label class="font-medium">Localisation :</label>
                <span id="loc_Af"></span>
              </div>
            </div>
            <div>
              <div class="">
                <label class="font-medium">Email :</label>
                <span id="email_Af"></span>
              </div>
              <div class="">
                <label class="font-medium">Telephone :</label>
                <span id="tel_eAf"></span>
              </div>
            </div>
          </div>
          <!-- <h1>Informations sur l admin/h1>  -->

          <!-- <div class="h-10 font-bold">Administrateur</div> -->
          <div class=" grid grid-cols-2 " style="font-size: small;">
            <!-- <span class="font-bold ">Administrateur </span>  -->

            <div>

              <div class="">
                <div class="h-10 font-bold">Administrateur</div>
                <label class="font-medium">Email :</label>
                <span id="email_pAf"></span>
              </div>
              <div class="">
                <label class="font-medium">Nom :</label>
                <span id="nom_Af" class="span"></span>
              </div>
              <div class="">
                <label class="font-medium">Prenom :</label>
                <span id="prenom_Af"></span>
              </div>
            </div>



            <div>
              <!-- <div class="">
                <br />
                   Favicon icon <label class="font-medium">Fonction :</label>
                <span id="fonc_Af"></span>
              </div>--> 
              <div class="">
                <label class="font-medium">Telephone :</label>
                <span id="tel_Af"></span>
              </div>
                 <!-- Favicon icon  <div class="">
                <label class="font-medium">Matricule:</label>
                <span id="mat_Af" class="span"></span>
              </div>-->
              <div class="">
                <label class="font-medium">Sexe :</label>
                <span id="sex_Af"></span>
              </div>

            </div>


          </div>
          <div class=" grid grid-cols-2 ">
            <div class="recaptcha" id="recaptcha">
              <div class="">
                <div id="html_element"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="formbold-form-btn-wrapper">

        <button class="formbold-back-btn " id="formbold_btn" style="background-color:transparent;color:#000;"  >
          Retour
        </button>

    

      <button class="formbold-btn" id="formbold_btn">
        Suivant
        </button>
      </div>
    
    </form>
  </div>


  <script>
    function sendMail(idconnex) {

      const raisonSoConst = document.getElementById("user_name").value;
      const emailEntConst = document.getElementById("email").value;
      const preAdConst = document.getElementById("prenom_admin").value;
      const nomAdConst = document.getElementById("nom_admin").value;
      const emailAdConst = document.getElementById("email_admin").value;
      const space = " ";
      //const defaultMDPConst = password;
      const idConConst = idconnex;
      const lien = "http://localhost:8080/web-main/web-main/emailverifie.html?mail=" + emailAdConst + "&id=" + idConConst;
      //format text 
      let ebody = `
                <p>Cher, </p> ${preAdConst} ${space} ${nomAdConst}
                <br />
                <p>Votre email doit être vérifié</p>
                <br />
                <p>Pour cela veillez cliquez sur ce <a href="${lien}">lien</a> pour verifier votre email</p> 
                <br>
                <p>Cordialement.</p>
                <br/>
                <center>@Pointis</center>
                `

      // Use token method
      Email.send({
        SecureToken: "193b80ea-7547-40a3-bafa-b8eb082adeb5",
        To: emailAdConst,
        From: 'pointisapp@gmail.com',
        Subject: "Enregistrement de " + raisonSoConst + " sur POINTIS !",
        Body: ebody
      }).then(
        
        message => location.replace('./inscriptionreussi.html')
        //message => location.replace('./succes.php')
        //message => alert(message)
      );
      //location.replace('./succes.php');
    }


    const stepMenuOne = document.querySelector('.formbold-step-menu1')
    const stepMenuTwo = document.querySelector('.formbold-step-menu2')
    const stepMenuThree = document.querySelector('.formbold-step-menu3')

    const stepOne = document.querySelector('.formbold-form-step-1')
    const stepTwo = document.querySelector('.formbold-form-step-2')
    const stepThree = document.querySelector('.formbold-form-step-3')

    const formSubmitBtn = document.querySelector('.formbold-btn')
    const formBackBtn = document.querySelector('.formbold-back-btn')
    const cap = document.querySelector('.recaptcha')



    // var inputs = document.querySelectorAll('input[name="nom_e"], input[name="rccm"], input[name="email"], input[name="tel"], input[name="loc"]');
    // var ids = Array.from(inputs).map(input => input.id);
    // ids.required=true
    // var formulaire =  document.querySelector('form')


    function enregistrement() {
      var ne = document.getElementById('user_name').value;
      var r = document.getElementById('RCCM').value;
      var l = document.getElementById('localisation').value;
      var e = document.getElementById('email').value
      var t = document.getElementById('tel_entreprise').value
      var n = document.getElementById('nom_admin').value
      var p = document.getElementById('prenom_admin').value
      var ep = document.getElementById('email_admin').value
      var tp = document.getElementById('tel_admin').value
      var s = document.getElementById('sex_admin').value


      var data = {
        RaisonSocialeSoc: ne,
        RCCMSoc: r,
        EmailSoc: e,
        TelephoneSoc: t,
        LocalisationSoc: l,
        Nom: n,
        Prenom: p,
        Email: ep,
        Telephone: tp,
        Sexe: s,
       
      };

      fetch('https://face.activactions.net/api/Societe/Inscription', {
          method: 'POST',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify(data)
        })
        .then(res => res.json())
        .then(data => {
          if (data.length > 0) {

            let dataValue = data;

            let value = dataValue.split('#');
            let idConnexion = value[1];

            fetch('https://face.activactions.net/api/Connexion/Get/' + idConnexion).then(function(response) {
              return response.text()
            }).then(function(text) {
              let tab = text.split('"');
              let pass = tab[9];
              sendMail(idConnexion);
              //location.replace = "./inscriptionreussi.html";
              //redirectionApresDelai();
            });

          } else {
            alert("Veuillez réessayer plutard !! Erreur serveur");
          }
        });


    };

    function recap() {

      document.getElementById("formbold_btn").addEventListener("click", function(e) {
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
          //reCaptcha not verified
          alert("Merci de confirmer que vous etes un humain. SVP !!");
          e.preventDefault();
          return false;
        } else {
          // enregistrement();
        return true;
      //   location.replace('./emailverifie.html');
        }
      })
      //captcha verified
      //do the rest of your validations here

    }

    /*function redirectionApresDelai() {
      setTimeout(function() {
        window.location.replace = "./inscriptionreussi.html"; }, 5000); 
    }*/


    function validerEtape1() {

      var champ1 = document.getElementById('user_name');
      var champ2 = document.getElementById('RCCM');
      var champ3 = document.getElementById('localisation');
      var champ4 = document.getElementById('email');
      var champ5 = document.getElementById('tel_entreprise');

      if (champ1.value === '' || champ2.value === '' || champ3.value === '' || champ4.value === '' ) {
        alert('Veuillez remplir tous les champs avant de passer à l\'étape suivante.')
        return false
      }

      return true
    }

    function validerEtape2() {

      var champ1 = document.getElementById('nom_admin');
      var champ2 = document.getElementById('prenom_admin');
      var champ3 = document.getElementById('email_admin');
      var champ4 = document.getElementById('tel_admin');
   //   var champ5 = document.getElementById('matricule_admin');
    //  var champ6 = document.getElementById('fn_admin');

      if (champ1.value === '' || champ2.value === '' || champ3.value === '' || champ4.value === '') {
        alert('Veuillez remplir tous les champs avant de passer à l\'étape suivante.');
        return false;
      }

      return true;
    }

    // 
    //     // && validerEtape2()
    //     function changeClass() { 
    //     document.getElementById('recaptcha').className = "newClass"; 
    // }
    formSubmitBtn.addEventListener("click", function(event) {

      event.preventDefault()
      if (stepMenuOne.className == 'formbold-step-menu1 active' && validerEtape1()) {
        event.preventDefault()


        stepMenuOne.classList.remove('active')
        stepMenuTwo.classList.add('active')

        stepOne.classList.remove('active')
        stepTwo.classList.add('active')


        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function(event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')
          cap.classList.add('active')
          formBackBtn.classList.remove('active')


        });


      } else if (stepMenuTwo.className == 'formbold-step-menu2 active' && validerEtape2()) {
        event.preventDefault()

        stepMenuTwo.classList.remove('active')
        stepMenuThree.classList.add('active')

        stepTwo.classList.remove('active')
        stepThree.classList.add('active')

        formSubmitBtn.innerHTML = "Confimer"

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function(event) {
          event.preventDefault()

          stepMenuThree.classList.remove('active')
          stepMenuOne.classList.remove('active')
          stepMenuTwo.classList.add('active')

          stepThree.classList.remove('active')
          stepOne.classList.remove('active')
          stepTwo.classList.add('active')
          formSubmitBtn.innerHTML = "Suivant"
          // stepMenuTwo.classList.add('active')
          formBackBtn.classList.add('active')
          formBackBtn.addEventListener("click", function(event) {
            event.preventDefault()

            stepMenuOne.classList.add('active')
            stepMenuTwo.classList.remove('active')

            stepOne.classList.add('active')
            stepTwo.classList.remove('active')

            formBackBtn.classList.remove('active')
            formSubmitBtn.innerHTML = "Suivant";

          });
        });


        // formBackBtn.classList.remove('active')

        //   formBackBtn.classList.remove('active')
        //   formSubmitBtn.textContent = 'Submit'
      } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
        event.preventDefault()
        recap()
        enregistrement()
        //redirectionApresDelai()
     //   location.replace('./emailverifie.html');
 
      }

      //recuperation des donnees
      var ne = document.getElementById('user_name').value;
      var r = document.getElementById('RCCM').value;
      var l = document.getElementById('localisation').value;
      var e = document.getElementById('email').value
      var t = document.getElementById('tel_entreprise').value
      var n = document.getElementById('nom_admin').value
      var p = document.getElementById('prenom_admin').value
      var ep = document.getElementById('email_admin').value
      var tp = document.getElementById('tel_admin').value
     // var m = document.getElementById('matricule_admin').value
    //  var f = document.getElementById('fn_admin').value
      var s = document.getElementById('sex_admin').value



      var data = {
        RaisonSocialeSoc: ne,
        RCCMSoc: r,
        EmailSoc: e,
        TelephoneSoc: t,
        LocalisationSoc: l,
        Nom: n,
        Prenom: p,
        Email: ep,
        Telephone: tp,
        Sexe: s
      
       
      };
      console.log(data);


      document.getElementById('nom_eAf').innerHTML = data.RaisonSocialeSoc
      document.getElementById('rccm_Af').innerHTML = data.RCCMSoc
      document.getElementById('loc_Af').innerHTML = data.LocalisationSoc
      document.getElementById('email_Af').innerHTML = data.EmailSoc
      document.getElementById('tel_eAf').innerHTML = data.TelephoneSoc
      document.getElementById('email_pAf').innerHTML = data.Email
      document.getElementById('nom_Af').innerHTML = data.Nom
      document.getElementById('prenom_Af').innerHTML = data.Prenom
   //   document.getElementById('fonc_Af').innerHTML = data.Titre
      document.getElementById('tel_Af').innerHTML = data.Telephone
      //document.getElementById('mat_Af').innerHTML = data.Matricule
      document.getElementById('sex_Af').innerHTML = data.Sexe



    });
  </script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

</body>

</html>