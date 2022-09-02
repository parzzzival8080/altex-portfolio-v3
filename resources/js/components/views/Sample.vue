<template>
<v-app style="color:#1f2630;height:300px" >
    <p >{{myJson.tagline}}</p>
    <p >{{myJson.getItNow}}</p>
</v-app>
    
</template>


<script>
      import json from './language/en.json'
      export default{
          data(){
              return{
                  myJson: {},
              }
          },

          created()
          {
              this.myJson = json
          }
      }
</script>