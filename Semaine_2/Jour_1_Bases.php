
<script>
              function chek(){
                            let vars = 0;

                            if(vars > 0){
                                          console.log("Positif");
                            }else if(vars <= 0){
                                          console.log('negative ou nul');
                            }         
              }
              
</script>



<script>

              function estAdulte(age){
                            if(age >= 18){
                                          return true
                            }else{
                                          return false
                            }
              }

              let jourNumber = 1;

              switch(jourNumber){
                            case 1:
                                          console.log("Lundi");
                                          break;
                            case 2:
                                          console.log("Mardi");
                                          break;
                            case 3:
                                          console.log("Mercredi");
                                          break;
                            case 4:
                                          console.log("Jeudi");
                                          break;
                            case 5:
                                          console.log("Vendredi");
                                          break;
                            case 6:
                                          console.log("Samedi");
                                          break;
                            case 7:
                                          console.log("Dimanche");
                                          break;
                            default:
                                          console.log("Jour invalide");
              }

              let number = 0

              verifierNombre(number)

              function verifierNombre(nombre) {
                            if (nombre == 0) {
                                          console.log("Le nombre est nul");
                            } else if (nombre % 2 == 0) {
                                          console.log( "Le nombre est pair");
                            } else {
                                          console.log( "Le nombre est impair");
                            }
              }
                            maxTrois(12,45,5678)

              function maxTrois(a, b, c) {
                            if (a >= b && a >= c) {
                                          console.log( a);
                            } else if (b >= a && b >= c) {
                                          console.log( b);
                            } else {
                                          console.log( c);
                            }
              }
    
</script>