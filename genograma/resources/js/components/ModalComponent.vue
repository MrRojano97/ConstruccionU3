

<template>

<body>

<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>                  Bienvenido. ¿Qué desea realizar?           </p>
        <label class="label1"> </label>
        <button class="button" @click="closeModal()">Nuevo</button>
        <label class="label2"> </label>
        <button class="button">Cargar</button>
        <label class="label1"> </label>
        </p> 
      </div>
    </div>
  </div>
</div>
            
</body>

</template>

<style>
    .button{
        appearance: none;
        outline: none;
        border: none;
        background: none;
        cursor: pointer;

        
        display: inline-block;
        padding: 15px 25px;
        background-color: #00008B;
        border-radius: 8px;
        color: #FFF;
        font-size: 18px;
        font-weight: 200;
        
        box-shadow: 3px 3px rgba(0, 0, 0, 0.4);
        transition: 0.4s ease-out;
        
        &:hover {
        box-shadow: 6px 6px rgba(0, 0, 0, 0.6);
        }
    }

    .label1 {
        
        width: 35%;
    }

    .label2 {
        width: 20px;
    }
</style>


<script>

    $(document).ready(function(){

    });
    export default {
        data() {
            return {
                
            }
        },
        mounted() {
            console.log('Wena los ka')
            this.openModal();
        },
        methods: {
            openModal() {
                document.getElementById('id01').style.display='block';
            },
            closeModal() {
                document.getElementById('id01').style.display='none'
            }
        },
        beforeMount() {
            this.openModal();
        },
    }
</script>
