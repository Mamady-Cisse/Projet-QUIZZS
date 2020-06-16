<div id="inscription-form" class="w-75 bgWhite container rounded  text-secondary py-2">
            <div class=" inscription-form-header">
                <h1 class="h4 m-0">S'INSCRIRE</h1>
                <p class="mb-1 ">Pour proposer un quizz</p>
                <hr class="w-50 m-0">
            </div>

            <div class="inscription-form-body row">
                <div class="col-md-7">
                    <form class="pr-5" id="form-inscription"  method="post" action="upload" enctype="multipart/form-data">
                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="prenom">Prenom</label>
                            <input name="prenom" type="text" error="error_prenom"  class="form-control" id="prenom">
                            <small  class="text-danger" id="error_prenom"></small>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="nom">Nom</label>
                            <input name="nom"  type="text"  error="error_nom"  class="form-control" id="nom">
                            <small  class="text-danger" id="error_nom"></small>
                        </div>

                        <div class="form-group  mb-1">
                            <label class="m-0 p-1" for="login">Login</label>
                            <input name="login" type="text"  error="error_login" class="form-control" id="login">
                            <small  class="text-danger" id="error_login"></small>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password1">Password</label>
                            <input name="password1" error="error_pwd1"   type="password" class="form-control" id="password1">
                            <small  class="text-danger" id="error_pwd1"></small>
                        </div>

                        <div class="form-group mb-1">
                            <label class="m-0 p-1" for="password2">Confirmer Password</label>
                            <input name="password2" type="password"  class="form-control" error="error_pwd2"  id="password2">
                            <small  class="text-danger" id="error_pwd2"></small>
                        </div>

                        <div class="form-group  my-2 d-flex justify-content-between">
                              <input type="file" class="custom-file" id="imgUser" name="imgUser">
                              <small  class="form-text text-danger"></small>
                        </div>
                        <button type="submit" name="btn_submit" class="btn btn-primary">Creer compte</button>

                </div>
                <div class="col-md-4">
                    <div class="avatar w-75 ">
                        <img class="rounded"  id="avatar" src="./img/" alt="">
                    </div>
                </div>
            </div>

            <script>
            
               const inputs= document.getElementsByTagName("input") 
               for(let input of  inputs){
                       input.addEventListener("keyup",function(event){
                       if(event.target.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=event.target.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText=""
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                  })

                }




               document.getElementById("form-inscription").addEventListener("submit",function(event){
                   let valid=true;
                  for(let input of  inputs){
                      if(!input.value.trim()){
                            valid=false
                            //Verifie si  l'attribut error existe dans le input
                            if(input.hasAttribute("error")){
                                 //recuperer la valeur de l'attribut error
                                    let idSmall=input.getAttribute("error")
                                    //recuperer l'objet Small 
                                    const errorSmall=document.getElementById(idSmall);
                                    errorSmall.innerText="Champ Obligatoire"
                                    //innerHTML=>ajouter du Contenu HTML dans une Balise
                            }
                            
                         }
                            
                  }
                  if(valid==false){
                            event.preventDefault();
                             return false;
                   }
              });

              

              //Chargement de L'image
             const imgUpload= document.querySelector("#imgUser");
              

             const prevUpload=()=>{
                   //Récuperation de  l'image  du champ input
                     let fileImg=imgUpload.files[0]
                     //Transformer l'image en un flux d'octets
                     let reader=new FileReader();
                     if(fileImg){
                         reader.readAsDataURL(fileImg)
                         reader.onloadend=function(){
                               const avatar= document.querySelector("#avatar");
                               avatar.src=reader.result
                               avatar.style.width="50px"
                               avatar.style.borderRadius="10px"
                         }
                     }

            }



            //Ecouteur Evenement

             imgUpload.addEventListener("change",prevUpload);

            



            /* 
            function  prevUpload(){

             }
             ou 

             prevUpload=function(){

             }
              ou Arrow Fonction
              prevUpload=()=>{
                 
               }

             */

            </script>





<style type="text/css">


</style>



      


   
   